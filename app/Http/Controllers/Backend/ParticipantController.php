<?php
namespace App\Http\Controllers\Backend;
use App\Contracts\ParticipantContract;
use App\Http\Controllers\BaseController;
class ParticipantController extends BaseController{

    protected $participantRepository;

    public function  __construct(ParticipantContract $participantRepository){
        $this->participantRepository = $participantRepository;
    }

    public function index(){
        $participants = $this->participantRepository->listParticipants();
        $this->setPageTitle('Participants','List of all participants');
        return view('backend.participants.index',compact('participants'));
    }

    public function view(string $id){
        $participant = $this->participantRepository->findParticipantById($id);
        $this->setPageTitle('Participants','Profile for: '.$participant->full_name);
        return view('backend.participants.view',compact('participant'));
    }
}