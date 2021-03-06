<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable =['text','name','emotion','book_id'];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
    
}
