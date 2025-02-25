<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
  use HasFactory;

  protected $table = "owners";
  protected $fillable = ["name", "contact_phone"];

  public function ownerRestaurant()
  {
    return $this->hasMany(Restaurant::class);
  }
}
