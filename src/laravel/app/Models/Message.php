<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/*
* @read-property File[] $files
* @read-property User|null $user
* @read-property Message|null $question
* @read-property Collection<Message> $replies
*/
class Message extends Model
{
    use HasFactory;

    public function files(): HasMany
    {
        return $this->hasMany('files');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('user');
    }

    public function replies(): Collection
    {
        return self::query()->where('question_id', $this->id)->get();
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo('messages', 'id', 'question_id');
    }
}
