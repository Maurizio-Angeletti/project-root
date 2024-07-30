<?php

namespace Admin\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \App\Models\User;

class UserController extends BaseController
{
    private User $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function index()
    {
        $users = $this->model->paginate(2);
        $pager = $this->model->pager;
        // dd($pager);
        return view("Admin\Views\users\index" , ["users"=>$users, "pager"=>$pager]);
    }
}
