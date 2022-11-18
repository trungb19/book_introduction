<?php
namespace App\Controllers;

class AdminController extends Controller {
       public function index() {
		$this->sendPage('layouts/default/adminpage');	}
}