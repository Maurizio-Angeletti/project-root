<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        $this->sendEmail();
        if (session("magicLogin")) {
            return redirect()->to("set-password")
                            ->with("message", "Modifica la password");
        }
        return view('home');
    }

    public function sendEmail()
    {
        $email = \Config\Services::email();

        $email->setTo('recipient@example.com');
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        // if ($email->send()) {
        //     echo 'Email successfully sent';
        // } else {
        //     echo 'Failed to send email: ' . $email->printDebugger(['headers']);
        // }
    }
}
