<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
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
        $dojos = Dojo::all();
        return view('laravel.create', ['dojos' => $dojos]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        LaravelM::create($validated);
        return redirect()->route('laravel.index');
    }

    public function destroy($id)
    {
        $laravel = LaravelM::findOrFail($id);
        $laravel->delete();

        return redirect()->route('laravel.index');
    }
    public function update(Request $request, $id)
    {
        // Handle updating data
    }


}
