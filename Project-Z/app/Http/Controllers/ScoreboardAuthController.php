<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ScoreBoard;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ScoreboardAuthController extends Controller
{
    public function score_get(Request $request)
    {
        return ScoreBoard::orderBy('score','desc')->get();
    }

    public function score_post(Request $request)
    {
        $user_id = Auth::user()->id;

        ScoreBoard::create([
            'user_id' => $user_id,
            'score' => $request->score,
        ]);

        return ScoreBoard::orderBy('score','desc')->get();

    }
}
