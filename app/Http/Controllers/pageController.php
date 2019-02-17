<?php

namespace App\Http\Controllers;
use App\Shakil;
use App\User;
use Illuminate\Http\Request;

class pageController extends Controllerrr
{
    
   
public function addData(Request $request) {


$data = $request->all();

   $user = new User();
   $user->Firstname = $data['firstname'];
   $user->lastname = $data['lastname'];
   $user->country = $data['country'];
  
   $user->save();

$flights = User::all();


}
    }




l;rykotykldg,m;llrykory;lryjry,jll;