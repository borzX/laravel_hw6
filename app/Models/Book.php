<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;


    public function up()
    {
        Schema::create('books', function (Blueprint $table)
        {
            $table->id();
            $table->string('title');
        });
    }

    public function store()
    {
        // \App\Models\Book::create($validateData);
        return response()->json('Данные сохранены');
    }
}
