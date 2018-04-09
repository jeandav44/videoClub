<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NouController extends Controller
{

  public function index()
  {
      return 'Usuaris';
  }

  public function salutacio(Request $request, $name = 'John',$surname = 'Snow')
  {
      return view('greeting', compact('name','surname'));
  }

}
