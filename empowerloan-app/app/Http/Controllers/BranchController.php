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
        $officers = Branch::all();
        return view('Officer.list-officer',compact('officers'));
    }
}
