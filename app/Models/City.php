<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected  $table = 'city';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     *
     * TODO: rename 'citylist' to 'name'
     */
    protected $fillable = [
        'citylist'
    ];

}
