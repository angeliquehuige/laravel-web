<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $assignments = Assignment::all();

        return view('dashboard.dashboard')->with('assignments', $assignments);
    }

    /**
     * @param Assignment $assignment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Assignment $assignment)
    {

        return view("dashboard.show", ["assignment" => $assignment]);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){

        return view("dashboard.assignments.create");


    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store() {

        Assignment::create($this->validateArticle());

        return redirect("/dashboard");

    }

    /**
     * @param Assignment $assignment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Assignment $assignment) {

        return view("dashboard.edit", compact("assignment"));


    }

    /**
     * @param Assignment $assignment
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Assignment $assignment) {

        $assignment->update($this->validateArticle());

        return redirect("/dashboard/" . $assignment->id);

    }

    /**
     * @param Assignment $assignment
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Assignment $assignment) {

        $assignment->delete();


        return redirect("/dashboard");

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
