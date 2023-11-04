<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $comment_id
 * @property int $user_id
 * @property int $post_id
 * @property string|null $comment_text
 * @property Carbon|null $created_at
 * 
 * @property User $user
 * @property Post $post
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comment';
	protected $primaryKey = 'comment_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'post_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'post_id',
		'comment_text'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
