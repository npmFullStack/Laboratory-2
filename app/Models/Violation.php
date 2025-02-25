<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
  use HasFactory;

  protected $table = "violations";
  protected $fillable = ["descr", "penalty_points", "health_grade"];

  public function violationInspection()
  {
    return $this->hasMany(Inspection::class);
  }
}
