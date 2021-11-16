<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;



    protected $fillable = [
        'member_nm',
        'member_addr',
        'member_dob'
    ];

    public function issue_book()
    {
        return $this->hasMany(IssueBook::class, 'member_id', 'id');
    }
}