<?php

namespace App\Models;

use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{   
    use Uuids;
    use HasFactory;

    /**
     * define the $table for the model
     * @var string
     */
    protected $table = 'participants';

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
        'full_name',
        'id_number',
        'email_address',
        'phone_number',
        'city',
        'country'
    ];

    /**
     * define $casts values
     * @var array
     */
    protected $casts = [
        'id'=>'string',
    ];

    public function portfolioImages(){
        return $this->hasMany(Portfolio::class);
    }

    public function logos(){
        return $this->hasMany(Logo::class);
    }

    public function pid(){
        return $this->hasOne(Pid::class);
    }
}
