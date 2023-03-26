<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function branch_list(){
        $branches = Branch::orderBy('branch_code','asc')->get();

        return view('branches.branch-list',compact('branches'));
    }
    function add_branch(Request $request){
        return view('branches.add-branch');
    }
    function insert_branch(Request $request){
        $request->validate([
            'branch_code'=>'required|unique:branches',
            'branch_name'=>'required',
            'branch_manager'=>'required',
            'branch_address'=>'required',
         ]);
            $branch = new Branch();
            $branch->branch_code = trim($request->input('branch_code'));
            $branch->branch_name = trim($request->input('branch_name'));
            $branch->branch_manager = trim($request->input('branch_manager'));
            $branch->branch_address = trim($request->input('branch_address'));
            $branch->status = "Active";
            $branch->owner = Auth::user()->id;
            $branch->save();
        return redirect()->back()->with('success','Branch Added Successfully');
    }
    public function edit_branch($id){
        $branches = Branch::find($id);
        return view('branches.edit-branch',['branches'=>$branches]);
    }
    public  function update_branch(Request $request,$id){
        $request->validate([
            'branch_name'=>'required',
            'branch_manager'=>'required',
            'branch_address'=>'required',
         ]);
         $branches = Branch::find($id);
        //  $branches->branch_code = trim($request->input('branch_code'));
         $branches->branch_name = trim($request->input('branch_name'));
         $branches->branch_manager = trim($request->input('branch_manager'));
         $branches->branch_address = trim($request->input('branch_address'));
         $branches->status = $request->input('status');
        $branches->update();
       return redirect()->back()->with('success','Update Successfully!');
   }
   public function delete_branch($id)
    {
        Branch::where('id',$id)->delete();
        return redirect()->back()->with('delete','Delete Successful');
    }
}
