<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function complete() {
        $this->completed = true;
        $this->save();
    }
}
