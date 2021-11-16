<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_nm',
        'author_nm',
        'publish_yr'
    ];

    public function issue_book()
    {
        return $this->hasMany(IssueBook::class, 'book_id', 'id');
    }
}