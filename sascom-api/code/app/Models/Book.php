<?php

namespace Sascom\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // protected $table = 'books' // Di isi jika nama tabel bukan bentuk plural

    protected $fillable = [
        'title',
        'author'
    ];
}