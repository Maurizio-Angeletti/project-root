<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Shield\Models\UserModel;

class PasswordController extends BaseController
{
    public function set()
    {
        return view("password/set");
    }

    public function update()
    {
        $rules = [
            "password" =>[
                "label" => "Password",
                "rules" => "required|strong_password"
            ],
            "password_confirm"=> [
                "label"=> "Password Confirm",
                "rules"=> "required|matches[password]"
            ]
        ];

        

        if (!$this->validate($rules)) {
            return redirect()->back()
                            ->with("errors", $this->validator->getErrors());    
        }

        $user = auth()->user();// usiamo l'helper auth e il suo metodo user per recuperare i dati dell'user specifico che si trova nella sessione
        $user->password = $this->request->getPost("password");

        $model = new UserModel;
        $model->save($user);

        session()->remove("magicLogin");// dato che vogliamo che se nella home siamo nella sessione "magicLogin"  veniamo reinderizzati in set-password per interrompere il loop dobbiamo dire di rimuovere la sessione magicLogin.

        return redirect()->to("/")->with("success","Password modificata correttamente");
    }
}
