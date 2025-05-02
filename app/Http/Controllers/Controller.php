<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function searchdata(Request $request)
    {
        $customers = Customer::Orwhere('first_name',$request->search)
        ->where('first_name','like',$request->search)
        ->Orwhere('last_name',$request->search)
        ->Orwhere('city',$request->search)
        ->Orwhere('country',$request->search)
        ->Orwhere('mobile_number',$request->search)
        ->Orwhere('date_n_time',$request->search)
        ->get();
        return view('welcome',compact('customers'));
    }
}
