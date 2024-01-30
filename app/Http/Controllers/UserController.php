<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    $data=User::get();
       return view('index', compact('data'));

    }
    public function transaction1(Request $request){
       $transaction_balance=$request->balance;
       $receiver_number=$request->number;


       $sender_number = $request->input('number');
       $sender=User::query()->where('number',$sender_number)->first();

       if($sender && $sender->balance>= $transaction_balance){
        $receiver=User::query()->where('number',$receiver_number)->first();

        if($receiver){
            $sender->balance -= $transaction_balance;
            $sender->save();


            $receiver->balance += $transaction_balance;
            $receiver->save();
        }

       }

    }


}
