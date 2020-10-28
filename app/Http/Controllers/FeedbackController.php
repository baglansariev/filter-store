<?php

namespace App\Http\Controllers;

use App\Mail\Quiz;
use App\Mail\Feedback;
use App\Mail\ChemicalAnilisys;
use App\Mail\Discount;
use App\Mail\Specialist;
use App\Mail\Contact;
use App\Mail\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function quizSend(Request $request)
    {
        echo json_encode([
            'msg' => $this->send($request, new Quiz($request->all())),
        ]);
        exit;
    }

    public function feedbackFormSend(Request $request)
    {
        echo json_encode([
            'msg' => $this->send($request, new Feedback($request->all())),
        ]);
        exit;
    }

    public function chemicalFormSend(Request $request)
    {

        echo json_encode([
            'msg' => $this->send($request, new ChemicalAnilisys($request->all())),
        ]);
        exit;
    }

    public function discountFormSend(Request $request)
    {

        echo json_encode([
            'msg' => $this->send($request, new Discount($request->all())),
        ]);
        exit;
    }

    public function specialistFormSend(Request $request)
    {

        echo json_encode([
            'msg' => $this->send($request, new Specialist($request->all())),
        ]);
        exit;
    }

    public function contactFormSend(Request $request)
    {

        echo json_encode([
            'msg' => $this->send($request, new Contact($request->all())),
        ]);
        exit;
    }


    public function orderFormSend(Request $request)
    {

        echo json_encode([
            'msg' => $this->send($request, new Order($request->all())),
        ]);
        exit;
    }

    public function send(Request $request, $mailable)
    {
//        $mail = Mail::to(env('MAIL_USERNAME'));
        $mail = Mail::to('baglansariev@mail.ru');
        $mail->send($mailable);
        return 'Ваша заявка успешно отправлена!';
    }
}
