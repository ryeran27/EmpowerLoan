<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officer;
class OfficerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list_officer(){
        return view('Officer.list-officer');
    }
    // function add_officer(Request $request){
    //     $request->validate([
    //         'fullname'=>'required',
    //         'contact_no'=>'required',
    //         'address'=>'required',
    //         'total_amount'=>'required',
    //         'reference_no'=>'required',
    //      ]);
    //      $officer = new Officer;
    //             $officer->reference_no = strtoupper($request->input('reference_no'));
    //             $officer->status_pay = 1;
    //             $officer->status = 'Paid';
    //             $officer->fullname = $request->input('fullname');
    //             $officer->contact_no = $request->input('contact_no');
    //             $officer->address = $request->input('address');
    //             $officer->total_amount = $request->input('total_amount');
    //             $officer->mode_officer = 'Walk-In';
    //             $officer->save();
    //     return redirect()->back()->with('success','Payment Added Successfully');
    // }
}
