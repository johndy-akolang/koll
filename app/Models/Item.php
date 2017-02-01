<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected $table = 'item';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     *
     * TODO: rename 'guest_id' to 'user_id'
     * TODO: 'condition' should be 'condition_id'
     * TODO: 'category' should be 'category_id'
     * TODO: 'images' should be 'primary_image'
     * TODO: what is the purpose of province?
     * TODO: what is the purpose of city?
     * TODO: what is the purpose of mobile?
     */
    protected $fillable = [
    		'title',
    		'guest_id',
    		'price',
    		'condition',
    		'category',
    		'description',
    		'images',
    		'province',
    		'city',
    		'mobile',
    ];

    /**
     * Eloquent accessor for created_at attribute
     * @param  string $value
     * @return string
     */
    public function getCreatedAtAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->toFormattedDateString();
    }

    /**
     * Eloquent accessor for updated_at attribute
     * @param  string $value
     * @return string
     */
    public function getUpdatedAtAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->toFormattedDateString();
    }

    /**
     * Eloquent relationship for Comment
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
  	public function comments()
  	{
        // TODO: 'on_post' should be 'item_id'
    		return $this->hasMany(Comment::class, 'on_post');
  	}

  	/**
  	 * Eloquent relationship for User
  	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  	 */
  	public function user()
  	{
        // TODO: 'guest_id' should be 'user_id'
    		return $this->belongsTo(User::class, 'guest_id');
  	}
}
