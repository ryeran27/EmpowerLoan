<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function branch_list(){
        $branches = Branch::all();
        return view('branches.branch-list',compact('branches'));
    }
    function add_branch(Request $request){
        return view('branches.add-branch');
    }
    function insert_branch(Request $request){
        $request->validate([
            'branch_name'=>'required',
            'branch_manager'=>'required',
            'branch_address'=>'required',
         ]);
         $branch = new Branch();
            $branch->branch_name = $request->input('branch_name');
            $branch->branch_manager = $request->input('branch_manager');
            $branch->branch_address = $request->input('branch_address');
            $branch->status = "Active";
            $branch->save();
        return redirect()->back()->with('success','Branch Added Successfully');
    }
}
