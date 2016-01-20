<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function descriptions()
  {
      return $this->hasMany(Description::class);
  }
}
