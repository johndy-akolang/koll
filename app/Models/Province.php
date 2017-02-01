<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected $table = 'province';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     *
     * TODO: rename 'provincelist' to 'name'
     */
    protected $fillable = [
        'provincelist',
    ];

}
