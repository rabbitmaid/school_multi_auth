<?php

namespace App\Http\Controllers\Dashboard\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        return view("dashboard.lecturer.index");
    }
}
