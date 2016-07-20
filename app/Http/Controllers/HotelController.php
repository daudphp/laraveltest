<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use App\Hotel;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function add_hotel(Request $req){
    	$name = $req->name;
    	$inputs = [
            'name'        => $name,
        ];

        $rules = [
			'name'        => 'required',
        ];

        
        $validation = Validator::make($inputs, $rules);

        if( $validation->fails() ){
            return redirect()->back()->withInput()->with('errors', $validation->errors() );
        }

        $hotel = new Hotel;

        $hotel->name = $name;

        $hotel->save();

        return redirect()->back()->withInput()->with('message', '1 Record Added.' );
    }
}
