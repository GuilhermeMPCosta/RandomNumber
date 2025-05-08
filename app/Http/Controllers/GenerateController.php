<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateController extends Controller
{
    private $numbers=[];
    public function index() {
        return view('welcome', ['numbers' => []]);
    }

    public function generate(Request $request){
        $quantity = $request->quantity;
        for ($i = 0; $i < $quantity; $i++) {
            $randomNumber = mt_rand(1, 100);
            $this->numbers[] = $randomNumber;
        }
        return view('welcome', 
        [
                'numbers' => $this->numbers
              ]);
    }
}
