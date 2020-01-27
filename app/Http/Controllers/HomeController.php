<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()

    {

        return view('adminHome');

    }

    public function contractorHome()

    {

        return view('contractorHome');

    }
    public function sendNotification()
    {
        $user = User::first();
        $details = [
            'greeting' => 'Hi Artisan',

            'body' => 'This is a notification from payhomes.com.ng',

            'thanks' => 'Thank you for applying for our sceme!',

            'actionText' => 'Visit us',

            'actionURL' => url('/'),

            'order_id' => 101
        ];
        Notification::send($user, new PaymentNotification($details));
        dd('done');
    }
}
