<?php

namespace App\Http\Controllers;

use App\Models\Gst;
use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function tax()
    {
	    $gsts = Gst::all(); 
	    $taxes = Tax::all(); 
	    return view('dashboard.tax',compact('gsts','taxes'));
	}

	public function addGst(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Gst::create([
            'name' => $request->name,
        ]);
        return redirect()->back()
        ->with('success','Gst added successfully');
            
    }

    public function addTax(Request $request)
    {
        $request->validate([
        	'type' => 'required',
            'name' => 'required',
            'rate' => 'required',
        ]);

        Tax::create([
            'type' => $request->type,
            'name' => $request->name,
            'rate' => $request->rate,
        ]);
        return redirect()->back()
        ->with('tax','New tax added successfully');
            
    }
}
