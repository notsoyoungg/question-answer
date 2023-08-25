<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function update(Request $request) {
        Setting::first()->update([
            'padding_top' => $request->paddingTop,
            'padding_bottom' => $request->paddingBottom
        ]);
        return redirect()->back();
    }
}
