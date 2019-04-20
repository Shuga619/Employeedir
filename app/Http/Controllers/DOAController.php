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

      public function getRoute(Request $request)
      {
         if($request->vid == '100')
         {
            return redirect()->route('credit_doa_path');
         }
         elseif($request->vid == '200')
         {
            return redirect()->route('finance_doa_path');   
         }
         elseif($request->vid == '300')
         {
            return redirect()->route('operation_doa_path');
         }
         elseif($request->vid == '400')
         {
            return redirect()->route('resource_doa_path');
         }
         elseif($request->vid == '500') 
         {
            return redirect()->route('strategy_and_information_technology_doa_path');
         }
         else
         {
            return redirect()->route('doa_index_path');
         }
   
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

      public function operation(){
         $no = rand(10,30)%2;
         $verticals = Vertical::where('code','<>','600')->get();
         return view('doa.operation',compact('no','verticals'));
      }

      public function resource(){
         $no = rand(10,30)%2;
         $verticals = Vertical::where('code','<>','600')->get();
         return view('doa.resource',compact('no','verticals'));
      }

      public function sit(){
         $no = rand(10,30)%2;
         $verticals = Vertical::where('code','<>','600')->get();
         return view('doa.sit',compact('no','verticals'));
      }
}
