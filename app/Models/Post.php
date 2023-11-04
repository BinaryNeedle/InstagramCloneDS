<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $post_id
 * @property int $user_id
 * @property string $caption
 * @property string|null $image_url
 * @property Carbon|null $created_at
 * 
 * @property User $user
 * @property Collection|Comment[] $comments
 * @property Collection|Like[] $likes
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'post';
	protected $primaryKey = 'post_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'caption',
		'image_url'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function likes()
	{
		return $this->hasMany(Like::class);
	}
}
