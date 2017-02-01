<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected $table = 'condition';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     **/
    protected $fillable = [
        'conditionitem'
    ];

}
