<?php

namespace App\Http\Controllers;

use App\Models\LaravelM;
use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function index()
    {
        $laravel = LaravelM::orderBy('created_at', 'desc')->get();
        return view('laravel.index', ["laravel" => $laravel]);
    }

    public function show($id)
    {
        $laravel = LaravelM::findOrFail($id);
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
