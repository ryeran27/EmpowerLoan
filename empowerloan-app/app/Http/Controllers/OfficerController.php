<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Officer;
use Illuminate\Support\Facades\Auth;

class OfficerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list_officer(Request $request){
        $officers = Officer::Where('branch_code',trim($request->input('searchbox')))->OrderBy('emp_no','asc')->get();
        $branches = Branch::Where('status','Active')->get();
        return view('Officer.list-officer',['officers'=>$officers,'branches'=>$branches]);
    }

   function add_officer(Request $request){
        $branches = Branch::Where('status','Active')->get();
        return view('Officer.add-officer',compact('branches'));
    }
    function insert_officer(Request $request){
        $request->validate([
            'emp_no'=>'required|unique:officers',
            'name'=>'required',
            'email'=>'required',
            'joining_date'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'educational'=>'required',
            'contact_person'=>'required',
            'contact_no'=>'required',
         ]);
            $officers = new Officer();
            $officers->branch_code = trim($request->input('branch_code'));
            $officers->emp_no = trim($request->input('emp_no'));
            $officers->name = trim($request->input('name'));
            $officers->email = trim($request->input('email'));
            $officers->joining_date = $request->input('joining_date');
            $officers->dob = $request->input('dob');
            $officers->age = Carbon::parse($request->input('dob'))->age;
            $officers->gender = $request->input('gender');
            $officers->address = trim($request->input('address'));
            $officers->phone = $request->input('phone');
            $officers->educational = $request->input('educational');
            $officers->contact_person = $request->input('contact_person');
            $officers->contact_no = $request->input('contact_no');
            $officers->status = "Active";
            $officers->owner = Auth::user()->id;
            $officers->save();
        return redirect()->back()->with('success','Loan Officer Added Successfully');
    }
    public function edit_officer($id){
        $officers = Officer::find($id);
        $branches = Branch::Where('status','Active')->get();
        return view('Officer.edit-officer',['officers'=>$officers,'branches'=>$branches]);
    }
    public  function update_officer(Request $request,$id){
        $request->validate([
            'emp_no'=>'required',
            'name'=>'required',
            'email'=>'required',
            'joining_date'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'educational'=>'required',
            'contact_person'=>'required',
            'contact_no'=>'required',
            'status'=>'required',
         ]);
            $officers = Officer::find($id);
            $officers->branch_code = trim($request->input('branch_code'));
            $officers->emp_no = trim($request->input('emp_no'));
            $officers->name = trim($request->input('name'));
            $officers->email = trim($request->input('email'));
            $officers->joining_date = $request->input('joining_date');
            $officers->dob = $request->input('dob');
            $officers->age = Carbon::parse($request->input('dob'))->age;
            $officers->gender = $request->input('gender');
            $officers->address = trim($request->input('address'));
            $officers->phone = $request->input('phone');
            $officers->educational = $request->input('educational');
            $officers->contact_person = $request->input('contact_person');
            $officers->contact_no = $request->input('contact_no');
            $officers->status = $request->input('status');
            $officers->update();
       return redirect()->back()->with('success','Update Successfully!');
   }
   public function delete_officer($id)
    {
        Officer::where('id',$id)->delete();
        return redirect()->back()->with('delete','Delete Successful');
    }
}
