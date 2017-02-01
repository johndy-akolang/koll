<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privatemessage extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected $table = 'privatemessage';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     */
	  protected $fillable = [
    		'name',
    		'email',
    		'message',
	  ];

}
