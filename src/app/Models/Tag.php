<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];

    /**
     * Memoモデルとの多対多のリレーションを定義。
     * @return BelongsToMany
     */
    public function memos(): BelongsToMany
    {
        return $this->belongsToMany(Memo::class, 'memo_tags');
    }

    /**
     * Userモデルへのリレーションを返す（一対多）。
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 自分自身の、全てのタグを取得する為のスコープ。
     * @param Builder $query
     * @return void
     */
    public function scopeAvailableTagAll(Builder $query): void
    {
        $query
            ->where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->orderBy('updated_at', 'desc');
    }

    /**
     * 自分自身の、選択したタグにリレーションされた、メモを取得する為のスコープ。
     * @param Builder $query
     * @param $get_url_tag
     * @return void
     */
    public function scopeAvailableTagInMemo(Builder $query, $get_url_tag): void
    {
        $query
            ->with('memos.shareSettings')
            ->where('id', $get_url_tag)
            ->where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->orderBy('updated_at', 'desc');
    }

    /**
     * タグが重複していないか調べる為のスコープ。
     * @param Builder $query
     * @param $request
     * @return void
     */
    public function scopeAvailableTagExists(Builder $query, $request_new_tag): void
    {
        $query
            ->where('name', $request_new_tag)
            ->where('user_id', Auth::id());
    }
}
