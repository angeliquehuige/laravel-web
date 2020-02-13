<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index(){

        $assignments = Assignment::all();

        return view('dashboard.dashboard')->with('assignments', $assignments);

    }

    public function show(Assignment $assignment)
    {

        return view("assignments.show", ["assignment" => $assignment]);
    }

    public function create(){

        return view("dashboard.create");


    }

    public function store() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
