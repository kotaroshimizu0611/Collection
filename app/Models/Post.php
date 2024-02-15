<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes; // SoftDeletes トレイトをここで使用

    // モデルが代入を許可する属性
    protected $fillable = [
        'title',
        'body',
    ];

    /**
     * 指定された件数のポストをupdated_atの降順で取得します。
     *
     * @param int $limit_count 取得する件数。デフォルトは10。
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかけて結果を返す
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    /**
     * 指定された件数でページネーションを使ってポストを取得します。
     *
     * @param int $limit_count 1ページあたりのポスト数。デフォルトは10。
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、paginateでページネーションの処理をする
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
