<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use App\View\Components\EmailIndexItem;

class EmailApiController extends Controller
{
    public function index()
	{
		$data = Email::all()->toJson();
		return $data;
	}
}
