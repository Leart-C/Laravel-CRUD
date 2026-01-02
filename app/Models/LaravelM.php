<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelM extends Model
{

    protected $fillable = ['name', 'skill', 'bio', 'dojo_id'];
    /** @use HasFactory<\Database\Factories\LaravelMFactory> */
    use HasFactory;

    // Define relationship to Dojo
    public function dojo()
    {
        return $this->belongsTo(Dojo::class);
    }
}
