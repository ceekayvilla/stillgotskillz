<?php

namespace App\Models;
use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    /**
     * define the $table for the model
     * @var string
     */
    protected $table = 'sts_categories';

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
        'name'
    ];

    /**
     * define $casts values
     * @var array
     */
    protected $casts = [
        'id'=>'string',
    ];

    public function logos(){
        return $this->hasMany(Logo::class);
    }
}
