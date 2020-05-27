<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function index(){

        $assignments = Assignment::all();

        return view('dashboard.dashboard')->with('assignments', $assignments);

    }

    public function show(Assignment $assignment)
    {

        return view("dashboard.show", ["assignment" => $assignment]);

    }

    public function create(){

        return view("dashboard.create");


    }

    public function store() {

        Assignment::create($this->validateArticle());

        return redirect("/dashboard");

    }

    public function edit(Assignment $assignment) {

        return view("dashboard.edit", compact("assignment"));


    }

    public function update(Assignment $assignment) {

        $assignment->update($this->validateArticle());

        return redirect("/dashboard/" . $assignment->id);

    }

    public function destroy() {

    }

    /**
     * @return array
     */
    protected function validateArticle(): array
    {
        return request()->validate([
            "course_id" => "required",
            "name" => "required",
            "weight" => "required",
            "result" => "required",
        ]);
    }
}
