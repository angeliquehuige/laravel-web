<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;

class TermsController extends Controller
{
    public function index()
    {
//        $terms = Term::all();
//        return view('dashboard.dashboard')->with('terms', $terms);
    }

    public function create()
    {
        return $this->store();
    }

    public function store()
    {
        Term::create();
        return redirect(route("dashboard.dashboard"));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Term $term)
    {
        $term->delete();

        return redirect(route('dashboard.dashboard'));
    }
}
