<?php

namespace App\Http\Controllers;

use App\Models\LaravelM;
use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function index()
    {
        // Eager load dojo relationship to avoid N+1 problem
        $laravel = LaravelM::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('laravel.index', ["laravel" => $laravel]);
    }

    public function show($id)
    {
        $laravel = LaravelM::with('dojo')->findOrFail($id);
        return view('laravel.show', ["laravel" => $laravel]);
    }

    public function create()
    {
        return view('laravel.create');
    }
    public function store(Request $request)
    {
        // Handle storing data
    }

    public function update(Request $request, $id)
    {
        // Handle updating data
    }

    public function destroy($id)
    {
        // Handle deleting data
    }

}
