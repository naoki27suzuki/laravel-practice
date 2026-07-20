<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // テーブル名が単数形 'book' なので明示（未指定だと複数形 'books' を探してしまう）
    protected $table = 'book';
}
