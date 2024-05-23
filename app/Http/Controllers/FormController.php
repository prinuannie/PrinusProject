<?php

namespace App\Http\Controllers;
use App\Models\PotDetails;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FormController extends Controller
{
    public function add(Request $request)
    { 
       
        if ($request->isMethod('post')) {
            ini_set('memory_limit', '1024M');
          // echo  $request->pot_name.'sds';exit();
        $validatedData = $request->validate([
            'pot_name' => 'required|string|max:255',
            'pot_type' => 'required|string|max:255',
            'pot_number' => 'required|integer|max:25',
            'pot_category' => 'required|string|max:25',
            'pot_manufacture_date' => 'required|date',
        ]);

        // Save form data to database
        $pots = new potdetails();
        $pots->pot_name = $request->pot_name;
        $pots->pot_type = $request->pot_type;
        $pots->pot_number = $request->pot_number;
        $pots->pot_category = $request->pot_category;
        $pots->pot_manufacture_date = $request->pot_manufacture_date;
        $pots->save();
        //return view('layouts.form');

        // Optionally, you can return a response or redirect
        return redirect()->back()->with('message', 'Form submitted successfully!');
        
        }
        
        return view('layouts.form');
    }
}
