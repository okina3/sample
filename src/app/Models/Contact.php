<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'subject',
        'message',
    ];

    /**
     * Userモデルへのリレーションを返す（一対多）。
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 全てのユーザーの問い合わせを取得する為のスコープ。
     * @param Builder $query
     * @return void
     */
    public function scopeAvailableAllContacts(Builder $query): void
    {
        $query->orderBy('created_at', 'desc');
    }

    /**
     * 選択したユーザーの問い合わせを取得する為のスコープ。
     * @param Builder $query
     * @param int $id
     * @return void
     */
    public function scopeAvailableSelectContact(Builder $query, int $id): void
    {
        $query->where('id', $id);
    }

    /**
     * 問い合わせをDBに保存する為のスコープ。
     * @param Builder $query
     * @param $request
     * @return void
     */
    public function scopeAvailableCreateContact(Builder $query, $request): void
    {
        $query->create([
            'subject' => $request->subject,
            'message' => $request->message,
            'user_id' => Auth::id(),
        ]);
    }

    /**
     * 検索した件名、問い合わせを表示するの為のスコープ。
     * @param $query
     * @param $keyword
     * @return void
     */
    public function scopeSearchKeyword($query, $keyword): void
    {
        // もし件名、問い合わせの検索があったら
        if (!is_null($keyword)) {
            // 全角スペースを半角に変換
            $spaceConvert = mb_convert_kana($keyword, 's');
            // 空白で区切る
            $keywords = preg_split('/\s+/', $spaceConvert, -1, PREG_SPLIT_NO_EMPTY);
            // 単語をループで回す
            foreach ($keywords as $word) {
                $query->where('contacts.subject', 'like', '%' . $word . '%')
                    ->orWhere('contacts.message', 'like', '%' . $word . '%');
            }
        }
    }
}