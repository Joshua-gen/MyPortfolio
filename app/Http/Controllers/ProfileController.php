<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function downloadCV()
    {
        if (!Storage::disk('public')->exists('Agena-CV.pdf')) {
            abort(404, 'CV not found.');
        }

        return Storage::disk('public')->download('Agena-CV.pdf', 'Joshua_Agena_CV.pdf');
    }
}


