<?php
namespace App\Contracts;

interface ParticipantContract {

    public function listParticipants(string $order = 'full_name', string $sort = 'asc', array $columns = ['*']);

    public function findParticipantById(string $id);

    public function createParticipant(array $params);

    public function findParticipant(array $data);

}