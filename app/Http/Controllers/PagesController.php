<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

		return view('pages/welcome')->withPosts($posts);
	}

	public function getAbout() {
		$first = 'Brad';
		$last = 'Weldy';

		$full = $first . " ". $last;

		return view('pages/about')->with("fullname", $full);
	}

	public function getContact() {
		return view('pages/contact');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'message' => 'min:10',
			'subject' => 'min:3']);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
		);

		Mail::send('emails.contact', $data, function($message) use ($data) {
			$message->from($data['email']);
			$message->to('bweldy82@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your Email was Sent!');

		// return redirect()->url('/');
		return view('pages/welcome');
	}

}