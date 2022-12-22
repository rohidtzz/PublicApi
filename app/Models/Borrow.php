<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_borrow',
        'due_date',
        'date_return',
        'book_id',
        'user_id'
    ];
}
