<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Character;

class CharacterController extends Controller
{
     public function index(Request $request)
    {
        $posts = Character::all()->sortByDesc('updated_at');
        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('character.index', ['headline' => $headline, 'posts' => $posts]);
    }
}
