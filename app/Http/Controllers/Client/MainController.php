<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Services\MailSettings;
use App\Mail\Test;

class MainController extends Controller
{
   
    public function test_mail()
    {
        $mail = new MailSettings;
        $mail->to('sobha@spiderworks.in')->cc('sobha.ashtaman@gmail.com')->send(new Test([]));
        echo "Mail send";exit;
    }

}
