<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected  $table = 'category';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     *
     * TODO: rename 'categorylist' to 'name'
     */
    protected $fillable = [
        'categorylist'
    ];

}
