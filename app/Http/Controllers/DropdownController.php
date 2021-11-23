<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DropdownModel;


class DropdownController extends Controller
{
  public function index(Request $request){       
      $state = state::all();
        $states = compact('state');
        return view('RegistrationForm')->with($states);
  }
 }
