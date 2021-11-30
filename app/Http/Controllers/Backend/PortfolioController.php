<?php
namespace App\Http\Controllers\Backend;
use File;
use ZipArchive;
use Illuminate\Http\Request;
use App\Contracts\PortfolioContract;
use App\Contracts\ParticipantContract;
use App\Http\Controllers\BaseController;

class PortfolioController extends BaseController{
    protected $portfolioRepository;
    protected $participantRepository;

    public function __construct(PortfolioContract $portfolioRepository, ParticipantContract $participantRepository){
        $this->portfolioRepository = $portfolioRepository;
        $this->participantRepository = $participantRepository;
    }

    public function download(string $id){
        $participant = $this->participantRepository->findParticipantById($id);
        $data=[];
        $data['participant_id']=$participant->id;
        $portfolioImages = $this->portfolioRepository->findPortfolio($data);
        
        $files = [];
        foreach($portfolioImages as $image){
            $files[]=public_path($image->path);
        }
        
        $zip = new ZipArchive();
            $download = $participant->id.'.zip';
            if ($zip->open(storage_path('app/public/zipped/'. $download), \ZipArchive::CREATE) === TRUE) {
                
                foreach ($files as $file) {
                    $file_path = storage_path("app/public/portfolio/".basename($file));
                    if (file_exists($file_path)) {
                        
                        $zip->addFile($file_path);
                    }
                }
                $zip->close();
            }
       return response()->download(storage_path('app/public/zipped/'.$download));
    }
}