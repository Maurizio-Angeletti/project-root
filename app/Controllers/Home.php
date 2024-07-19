<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home(): string
    {
        if (auth()->loggedIn()) {
            $data['name'] = auth()->user()->name;
        }
        
        return view('home', $data);

    }

    public function sendEmail()
    {
        $email = \Config\Services::email();

        $email->setTo('recipient@example.com');
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        if ($email->send()) {
            echo 'Email successfully sent';
        } else {
            echo 'Failed to send email: ' . $email->printDebugger(['headers']);
        }
    }
}
