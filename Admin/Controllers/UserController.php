<?php

namespace Admin\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \App\Models\User;
use CodeIgniter\Shield\Entities\User as UserEntity;
use CodeIgniter\Exceptions\PageNotFoundException;

class UserController extends BaseController
{
    private User $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function index()
    {
        helper("admin");// per poter utilizzare l'helper creato in admin/helpers/admin_helper nella vista index dobbiamo passarlo qui.

        $users = $this->model->paginate(2);
        $pager = $this->model->pager;
        // dd($pager);
        return view("Admin\Views\users\index" , ["users"=>$users, "pager"=>$pager]);
    }

    public function show($id)
    {
        $user = $this->getUserOr404($id);

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound("l'User con id $id non esiste");
        }

        return view("Admin\Views\users\show" , compact("user"));

    }

    public function toggleBan($id)
    {
        $user = $this->getUserOr404($id);

        if ($user->isBanned()) {

            $user->unBan();

        } else {

            $user->ban();

        }

        return redirect()->back()
                        ->with("message","User saved");
    }

    private function getUserOr404($id): UserEntity
    {
        $user = $this->model->find($id);//grazie alla classe entity il model find ora ritorna un oggetto.

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound("l'User con id $id non esiste");
        }

        return $user;
    }


}
