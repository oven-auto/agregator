<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendMailRequest;
use Mail;
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
    	$name = $request->get('username');
    	$phone = $request->get('userphone');
    	$question = $request->get('userquestion');

    	$to_name = 'OvenAvto';
		$to_email = 'wanokazak1990@yandex.ru';
		
		$data['name'] =$name;
		$data['phone'] = sprintf("%s (%s) %s-%s-%s",
			substr($phone, 0, 1),
			substr($phone, 1, 3),
			substr($phone, 4, 3),
			substr($phone, 7, 2),
			substr($phone, 9)
		);
		$data['question'] = $question;

		Mail::send('mails.to_market', $data, function($message) use ($to_name, $to_email) {
		    $message->to($to_email, $to_name)->subject('Заявка с сайта oven-auto.ru');
		    $message->from('oit@oven-auto.ru','Сайт oven-auto.ru');
		});
    }
}


/*<IfModule mod_rewrite.c>    
Options +FollowSymLinks
RewriteEngine on     
RewriteRule ^(.*)$ app/public/$1 [L]     
RewriteCond %{REQUEST_FILENAME} !-d     
RewriteCond %{REQUEST_FILENAME} !-f     
RewriteRule ^ index.php [L] 
</IfModule>*/