<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use App\Models\Realization;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $questions = Faq::latest()->get();
        $services = Service::orderBy('created_at', 'asc')->get();
        $realizations = Realization::orderBy('created_at', 'asc')->get();
        return view('home', compact('questions', 'services', 'realizations'));
    }
    
    public function service(Service $service) {
        return view('service', compact('service'));
    }

    public function realization(Realization $realization) {
        return view('realization', compact('realization'));
    }
}
