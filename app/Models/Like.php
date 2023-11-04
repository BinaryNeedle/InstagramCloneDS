<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Like
 * 
 * @property int $like_id
 * @property int $user_id
 * @property int $post_id
 * @property Carbon|null $created_at
 * 
 * @property Post $post
 * @property User $user
 *
 * @package App\Models
 */
class Like extends Model
{
	protected $table = 'likes';
	protected $primaryKey = 'like_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'post_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'post_id'
	];

	public function post()
	{
		return $this->belongsTo(Post::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
