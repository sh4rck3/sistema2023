<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class PageController extends Controller
{
    use HasRoles;

    public function welcome()
    {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            //'usergroup' => HasGroups,
        ]);
    
    }
    
    public function dashboard()
    {
        return Inertia::render('Dashboard');
        
    }

    public function chat()
    {
        return Inertia::render('Chat');
        
    }
}
