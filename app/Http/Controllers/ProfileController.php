<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            // Удалить старую аватарку, если она есть
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }

            // Сохранить новую аватарку в 'public/avatars'
            $path = $request->file('avatar')->store('public/avatars');
            $user->avatar = $path;
        }

        $user->save();

        return redirect()->back()->with('status', 'Profile updated!');
    }
}
