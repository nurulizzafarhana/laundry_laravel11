<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index() {
        return "Hi! We are learning Laravel";
    }

    public function edit($id) {
        return "Ini adalah form edit dengan nama params: " . $id;
    }

    public function delete($id) {
        return "Ini adalah form delete dengan id" . $id;
    }
}
