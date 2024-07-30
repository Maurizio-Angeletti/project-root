<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CounterModel;

class CountController extends BaseController
{
    public function counter()
    {
        
        return view('Flutter/count');
    }
    
    

}
