<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $fillable = ['body'];

    public function book()
    {
      return $this->belongsTo(Book::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
