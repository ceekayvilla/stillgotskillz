<?php
namespace App\Http\Controllers\Frontend;
use App\Models\Logo;
use App\Models\Portfolio;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use App\Contracts\CategoryContract;
use App\Contracts\ParticipantContract;
use App\Http\Controllers\BaseController;


class SubmissionController extends BaseController{

    use UploadAble;
    protected $categoryRepository;
    protected $participantRepository;

    public function  __construct(CategoryContract $categoryRepository, ParticipantContract $participantRepository){
        $this->categoryRepository    = $categoryRepository;
        $this->participantRepository = $participantRepository;
    }

    public function index(){
        $categories = $this->categoryRepository->listCategories();
        $this->setPageTitle('Submission','Submit your logo');
        return view('frontend.pages.submission',compact('categories'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'full_name'=>'required|max:191',
            'dob'=>'required',
            'email_address'=>'required|email',
            'phone_number'=>'required',
            'city'=>'max:191',
        ]);
        $params = $request->except('_token');
        $participant = $this->participantRepository->createParticipant($params);

        if(!$participant){
            return $this->responseRedirectBack('Error occured while saving the logo, try again','error', true, true);
        }
        
        $participant_id='';
        if($participant instanceof Collection){
            foreach($participant as $p){
                $participant_id = $p->id;
            }
        }else if(is_object($participant)){
            $participant_id= $participant->id;
        }
        
        if($request->has('logo')){
            $path = $this->uploadOne($request['logo'],'logos');
            $logo = new Logo([
                'participant_id'=>$participant_id,
                'category_id'=>$request['category_id'],
                'path'=>$path,
            ]);
            $logo->save();
        }
        if($request->has('portfolio')){
            foreach($request['portfolio'] as $portfolio_image){
                $image = $this->uploadOne($portfolio_image,'portfolio');
                $portfolioImage = new Portfolio([
                    'participant_id'=>$participant_id,
                    'path'=>$image,
                ]);
                $portfolioImage->save();
            }
        }
        return $this->responseRedirectBack('Submission was successfull!','success', false, false);
    }
    
}