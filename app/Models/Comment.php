<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

		/**
		 * Table used by the model
		 * @var string $table
		 */
		protected $table = 'comments';

		/**
		 * Attributes that are mass assignable
		 * @var array $fillable
		 *
		 * TODO: 'on_post' should be 'item_id'
		 * TODO: 'from_user' should be 'user_id'
		 */
		protected $fillable = [
			'on_post', // item_id
			'from_user', // user_id
			'body',
		];

    /**
     * Eloquent accessor for created_at attribute
     * @param  string $value
     * @return string
     */
    public function getCreatedAtAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->diffForHumans();
    }

    /**
     * Eloquent relationship for User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
		public function user()
		{
			   return $this->belongsTo(User::class, 'from_user');
		}

		//returns post of any comment
		public function item()
		{
			return $this->belongsTo('App\Item', 'on_post');
		}


}
