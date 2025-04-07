<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use App\Models\Violation;
use App\Models\Restaurant;
use App\Models\Inspector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function level1()
  {
    $inspections = DB::select("
        SELECT i.*, 
               ins.name AS i_name, 
               r.name AS r_name, 
               r.address AS r_address, 
               r.phone_number AS r_phone_num, 
               o.name AS o_name, 
               o.contact_phone AS o_contact, 
               v.descr AS v_description, 
               v.penalty_points AS v_penalty_points
        FROM inspections AS i
        INNER JOIN inspectors AS ins ON ins.id = i.inspector_id
        INNER JOIN restaurants AS r ON r.id = i.restaurant_id
        INNER JOIN violations AS v ON v.id = i.violation_id
        INNER JOIN owners AS o ON o.id = r.owner_id
    ");

    return response()->json(["success" => true, "level1" => $inspections], 200);
  }

  public function level2()
  {
    $inspections = DB::table("inspections AS i")
      ->select(
        "i.*",
        "ins.name AS ins_name",
        "v.descr AS v_description",
        "v.penalty_points AS v_penalty_points",
        "r.name AS restaurant_name",
        "r.address AS r_address",
        "r.phone_number AS r_phone",

        "o.name AS owner_name",
        "o.contact_phone AS owner_contact"
      )
      ->join("inspectors AS ins", "ins.id", "=", "i.inspector_id")
      ->join("restaurants AS r", "r.id", "=", "i.restaurant_id")
      ->join("violations AS v", "v.id", "=", "i.violation_id")
      ->join("owners AS o", "o.id", "=", "r.owner_id")

      ->get();

    return response()->json(["success" => true, "level2" => $inspections], 200);
  }

  public function level3()
  {
    $inspections = Inspection::with([
      "violation",
      "restaurant.owner",
      "inspector",
    ])->get();

    return response()->json(["success" => true, "level3" => $inspections], 200);
  }

  public function level4()
  {
    $inspections = Inspection::with([
      "violation" => function ($q) {
        $q->select("*");
      },
      "inspector" => function ($q) {
        $q->select("*");
      },
      "restaurant" => function ($q) {
        $q->select("*")->with([
          "owner" => function ($q) {
            $q->select("*");
          },
        ]);
      },
    ])->get();

    return response()->json(["success" => true, "level4" => $inspections], 200);
  }

  public function viewDashboard()
  {
    return view("pages.dashboard");
  }

  public function viewRestaurant()
  {
    $inspections = Inspection::with([      "violation",
      "restaurant.owner",
      "inspector",])->get();

    return view("restaurant.restaurant", compact("inspections"));
  }
}
