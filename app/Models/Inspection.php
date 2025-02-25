<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
  use HasFactory;

  protected $table = "inspections";
  protected $fillable = [
    "inspector_id",
    "restaurant_id",
    "violation_id",
    "time",
    "date",
    "health_grade",
  ];public function violation()
{
    return $this->belongsTo(Violation::class, 'violation_id');
}

public function restaurant()
{
    return $this->belongsTo(Restaurant::class, 'restaurant_id');
}

public function inspector()
{
    return $this->belongsTo(Inspector::class, 'inspector_id');
}

  
}
