<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
/**
     * Scope a query to only include users of a given type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $userChats
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUserChats($query, $userId1, $userId2)
    {
        return $query->whereIn('senderUserId', [$userId1, $userId2])->whereIn('recieverUserId',[$userId1, $userId2])->get();

    }
}
