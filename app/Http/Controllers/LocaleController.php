<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function __invoke()
    {
        $language = request('language');
        request()->session()->put('language', $language);
        if (url()->previous() == null) {
            return redirect(route('locale'));
        }
        return redirect(url()->previous());
    }
}
