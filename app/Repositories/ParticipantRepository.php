<?php
namespace App\Repositories;

use App\Models\Participant;
use App\Contracts\ParticipantContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class ParticipantRepository extends BaseRepository implements  ParticipantContract{

    public function __construct(Participant $model){
        parent::__construct($model);
        $this->model = $model;
    }

    public function listParticipants(string $order = 'full_name', string $sort = 'asc', array $columns = ['*']){
        return $this->all($columns, $order, $sort);
    }

    public function findParticipantById(string $id){
        try{
            return $this->findOneOrFail($id);
        }catch(ModelNotFoundException $e){
            throw new ModelNotFoundException($e);
        }
    }

    public function createParticipant(array $params){
        try{
            $email_address = $params['email_address'];
            $id_number     = $params['id_number'];
            $participant='';

            if(!empty($email_address) && !empty($id_number)){
                $by_email=[];
                $by_email['email_address'] = $email_address;

                $by_id=[];
                $by_id['id_number'] = $id_number;

                $participant_email_exists = $this->findParticipant($by_email);
                $participant_id_num_exists = $this->findParticipant($by_id);

                if(sizeof($participant_email_exists) >0){
                    $participant =$participant_email_exists;
                    return $participant;
                }else if(sizeof($participant_id_num_exists) >0){
                    $participant = $participant_id_num_exists;
                    return $participant;
                }else{
                    $participant = new Participant($params);
                    $participant->save();
                    return $participant;
                }
            }
   
        }catch(ModelNotFoundException $e){
            throw new ModelNotFoundException($e); 
        }
    }

    public function findParticipant(array $data){
        try{
            return $this->findBy($data);
        }catch(ModelNotFoundException $e){
            throw new ModelNotFoundException($e);
        }
    }
}