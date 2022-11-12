<?php
namespace App\Controllers;

class HomeController extends Controller {
    public function index() {
		$this->sendPage('homepage/home');
	}
}