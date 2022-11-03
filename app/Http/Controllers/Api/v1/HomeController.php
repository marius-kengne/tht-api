<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    
    public function __invoke() //: array
    {
        /*
            Test d'envoi de mail 

        return new OrderShipped; test d'envoi de mail

        */

        /*
            Test d'envoi de notification
            
        Notification::route('mail', ['pentesteur@gmail.com' => 'PENTESTEUR'])->notify(new InvoicePaid);
        dd('done');
        
        */

        return [
            'success' => true,
            'message' => __('messages.welcome'),
            'data' => [
                'service' => 'THT API',
                'version' => '1.0',
                'language' => app()->getLocale(),
                'support' => 'pentesteur@gmail.com'
            ],
        ];

    }

}
