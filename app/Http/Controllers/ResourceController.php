<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;  
use App\Models\Resource; 


class ResourceController extends Controller
{
    public function index(Request $request)
    {
        return Inertia ::render("Resources", [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'resources' => Resource::with('category')->get(),
    ]);
}
}

