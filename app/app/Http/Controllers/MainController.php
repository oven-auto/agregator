<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendMailRequest;

class MainController extends Controller
{
    public function index()
    {
    	return view('main.index');
    }

    public function showmodal(Request $request, $brand)
    {
    	$brand = $request->get('brand');
    	return response()->json([
    		'view' => view('modal.mail',compact('brand'))->render()
    	]);
    }

    public function sendmail(SendMailRequest $request)
    {
    	
    }
}
