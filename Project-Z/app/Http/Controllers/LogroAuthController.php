<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserAchievement;
use App\Models\Achievement;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LogroAuthController extends Controller
{
    /**
     * Obtener el objeto User como json
     */
    public function logro_get(Request $request)
    {
        $id = Auth::user()->id;
        $user = Auth::user()->myAchievements($id);
        return $user;
    }

    public function logro_post(Request $request)
    {
        $user_id = Auth::user()->id;

        UserAchievement::create([
            'user_id' => $user_id,
            'achievement_id' => $request->achievement_id,
        ]);

        return UserAchievement::all();
    }
}
