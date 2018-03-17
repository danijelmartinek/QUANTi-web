<?php



namespace App\Http\Controllers;



use App\Post;

use Illuminate\Http\Request;

use App\Mail\ContactMail;

use Mail;

use Session;



class ContactController extends Controller {



    public function view()

    {

        return view('contact');

    }



    public function sendMail(Request $request) {

  		$this->validate($request, [

  			'email' => 'required|email',

  			'name' => 'required|min:3',

  			'message' => 'required|min:10']);



  		$data = array(

  			'email' => $request->email,

  			'subject' => $request->name,

  			'bodyMessage' => $request->message

  			);



  		Mail::send('emails.contact', $data, function($message) use ($data){

  			$message->from('kontakt@quanti.com.hr');

			$message->replyTo($data['email']);

  			$message->to('info@quanti.com.hr');

  			$message->subject("QUANTi Kontakt: {$data['subject']}");

  		});



  		return redirect()->back()->with('message', 'Uspješno poslano!');



  	}



}


