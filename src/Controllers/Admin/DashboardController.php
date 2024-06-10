<?php

namespace Tiend\OopMvc\Controllers\Admin;

use Rakit\Validation\Validator;
use Tiend\OopMvc\Commons\Controller;
use Tiend\OopMvc\Models\User;


class DashboardController extends Controller {
    public function dashboard(){
        $this->renderViewAdmin(__FUNCTION__);
    }

}