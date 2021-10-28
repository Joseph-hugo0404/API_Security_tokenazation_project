<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Flights;
use Illuminate\Http\Request;
use Flash;
use Response;

class FlightsController extends Controller {

    public $successStatus = 200;

    public function flightsApi() {
        $flights = Flights::all();

        if (count($flights) > 0) {
            return response()->json($flights, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no data in the database'], 404);
        }        
    }
}

?>