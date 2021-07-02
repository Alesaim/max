<?php

namespace App\Http\Controllers;
use App\Models\Abc;
use Illuminate\Http\Request;

class AbcController extends Controller
{
    public function index(){
    	$data = Abc::all();
    	return view('layout.index',['abcs'=>$data]);
    } 
}
