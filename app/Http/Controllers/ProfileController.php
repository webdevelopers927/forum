<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($username) {
        // dd($username);
        $user = User::with([
            "questions" => function ($query) {
                return $query->limit(10);
        }, "comments", "badges", "profile"])->where("username", $username)->first();
        // dd($user->id);
        return view("profile", [
            "user" => $user
        ]);
    }
}
