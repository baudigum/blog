<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
      protected $fillable = [
          'title' , 'amount' , 'price' , 'user_id'
      ];
}
