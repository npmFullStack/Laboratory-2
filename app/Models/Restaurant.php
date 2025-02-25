<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
  use HasFactory;

  protected $table = "restaurants";
  protected $fillable = ["name", "address", "phone_number", "owner_id"];

  public function restaurantInspection()
  {
    return $this->hasMany(Inspection::class);
  }
  public function owner()
{
    return $this->belongsTo(Owner::class, 'owner_id');
}


}
