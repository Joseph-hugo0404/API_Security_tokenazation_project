<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Flights;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Logs;
use Illuminate\Support\Facades\Validator;
use Flash;
use Response;

class PostFlightController extends Controller {
    public $successStatus = 200;

    public function getAllPosts(Request $request ) {
        $token = $request['t']; //t = token
        $userid =$request['u']; //u = userid 

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $flights = Flights::all();

            return response()->json($flights, $this->successStatus);
        }else {
            return response()->json(['response' => 'Invalid Call'], 501);
        }

    }

    public function getPerson(Request $request) {
        $id = $request['pid']; //Getting the Person information
        $token = $request['t']; 
        $userid = $request['u'];    

        $user = User::where('id', $userid)->where('remember_token', $token)->first();
        if ($user != null) {
            $flights = Flights::where('id', $id)->first();

            if ($flights != null) {
                return response()->json($flights, $this->successStatus);
            } else {
                return response()->json(['response' => 'Person Not Found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }

    public function searchPerson(Request $request) {
        $destination = $request['d']; //Getting the Person information
        $token = $request['t']; 
        $userid = $request['u'];    

        $user = User::where('id', $userid)->where('remember_token', $token)->first();
        
        if ($user != null) {
            $flights = Flights::where('destination', 'LIKE', '%' . $destination . '%')
            ->orwhere('passenger_name', 'LIKE', '%', '$destination', '%')
            ->get();

            // SELECT * FROM flights WHERE destination no  LIKE '%eestination%' OR title LIKE '%destinaton%'
            if ($flights != null) {
                return response()->json($flights, $this->successStatus);
            } else {
                return response()->json(['response' => 'Person Not Found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }

    public function searchOriginClass(Request $request) {
        $origin = $request['o']; //Getting the Person information
        $token = $request['t']; 
        $userid = $request['u'];    

        $user = User::where('id', $userid)->where('remember_token', $token)->first();
        
        if ($user != null) {
            $flights = Flights::where('origin', 'LIKE', '%' . $origin . '%')
            ->orwhere('destination', 'LIKE', '%', '$origin', '%')
            ->get();

            // SELECT * FROM flights WHERE origin no  LIKE '%origin%' OR title LIKE '%origin%'
            if ($flights != null) {
                return response()->json($flights, $this->successStatus);
            } else {
                return response()->json(['response' => 'Person Not Found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }
}
?>