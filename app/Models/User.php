<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'mobile', 'email', 'password', 'profilepic', 'useraddress', 'companyname', 'companyaddress', 'companynumber'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Eloquent relationship for Item
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        // TODO: rename 'guest_id' to 'user_id'
        return $this->hasMany(Item::class, 'guest_id');
    }

    /**
     * Eloquent relationship for Comment
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        // TODO: rename 'from_user' to 'user_id'
        return $this->hasMany(Comment::class, 'from_user');
    }


    // TODO: Move these to Policy
    public function can_post()
    {
        $role = $this->role;

        if ($role == 'guest' || $role == 'seller')
        {
            return true;
        }
        return false;
    }

    public function is_seller()
    {
        $role = $this->role;

        if ($role == 'seller')
        {
            return true;
        }
        return false;
    }

}
