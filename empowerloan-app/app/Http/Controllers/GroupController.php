<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Branch;
use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list_group(Request $request){
        $groups = Group::Where([['branch_code',trim($request->input('searchbranch'))],
                        ['emp_no',trim($request->input('searchofficer'))]])->orderBy('grp_name','asc')->get();
        $branches = Branch::Where('status','Active')->get();
        return view('group.list-group',['groups'=>$groups,'branches'=>$branches]);
    }
    function add_group(Request $request){
        $groups = Group::Where('status','Active')->get();
        $branches = Branch::Where('status','Active')->get();
        return view('group.add-group',['groups'=>$groups,'branches'=>$branches]);
    }
    function insert_group(Request $request){
        $request->validate([
            'grp_code'=>'required|unique:groups',
            'grp_name'=>'required',
            'meeting_day'=>'required',
            
         ]);
            $groups = new Group();
            $groups->grp_code = trim($request->input('grp_code'));
            $groups->grp_name = trim($request->input('grp_name'));
            $groups->meeting_day = trim($request->input('meeting_day'));
            $groups->email = trim($request->input('email'));
            $groups->joining_date = $request->input('joining_date');
            $groups->dob = $request->input('dob');
            $groups->gender = $request->input('gender');
            $groups->address = trim($request->input('address'));
            $groups->phone = $request->input('phone');
            $groups->educational = $request->input('educational');
            $groups->contact_person = $request->input('contact_person');
            $groups->contact_no = $request->input('contact_no');
            $groups->status = "Active";
            $groups->owner = Auth::user()->id;
            $groups->save();
        return redirect()->back()->with('success','Loan Officer Added Successfully');
    }
}
