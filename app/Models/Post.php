<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes; 

    protected $fillable = [
        'playlist_name',
        'body',
        'user_id'
    ];

    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    public static function getPaginateByLimit(int $limit_count = 5)
{
    // 'user' リレーションシップを含む投稿をページネーションで取得
    return self::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}



    public function user()
    {
    return $this->belongsTo('App\Models\User');
    }
}
