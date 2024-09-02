<?php

namespace Admin\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{

    private UserModel $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function index()
    {   
        // $users = $this->model->findAll();trova tutti i record
        $users = $this->model->orderBy("name")->paginate(4);// impagina i record ordinati per nome.

        
        echo realpath(APPPATH . 'Views/Pager/my_full.php');
        // return view('Admin/Views/Users/index', ["users" => $users]); cosi non funziona
        return view('Admin\Views\Users\index', ["users" => $users,
                                                "pager" => $this->model->pager]);// funziona solo se mettiamo il backslash
    }
}
