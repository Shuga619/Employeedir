<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vertical;

class DOAController extends Controller
{
   	public function index(){
   		$no = rand(10,30)%2;
   		$verticals = Vertical::where('code','<>','600')->get();
   		return view('doa.index',compact('no','verticals'));
   	}

   	public function credit(){
   		$no = rand(10,30)%2;
   		$verticals = Vertical::where('code','<>','600')->get();
   		return view('doa.credit',compact('no','verticals'));
   	}

   	public function finance(){
   		$no = rand(10,30)%2;
   		$verticals = Vertical::where('code','<>','600')->get();
   		return view('doa.finance',compact('no','verticals'));
   	}
}
