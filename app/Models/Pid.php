<?php

namespace App\Models;
use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Personal Information Document(s)
 */
class Pid extends Model
{
    use HasFactory, Uuids;
    /**
     * define the $table for the model
     * @var string
     */
    protected $table = 'pids';

    /**
     * Set $primaryKey column
     * @var string
     */
    protected $primaryKey='id';

    /**
     * set $keyType to String since UUID is a string
     * @var string
     */
    protected $keyType='string';

    /**
     * Set $incrementing to false since we're using UUIDs
     * @var boolean
     */
    public $incrementing=false;

    /**
     * define all $fillable columns
     * @var array
     */
    protected $fillable =[
        'participant_id',
        'path',
        'name'
    ];

    public function participant(){
        return $this->belongsTo(Participant::class);
    }
}
