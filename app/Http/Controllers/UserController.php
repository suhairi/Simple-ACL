<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function index() {

        return 'here';
    }

    public function register() {
        return view('auth.register');
    }

}
