<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Character;

class CharacterController extends Controller
{
     public function add()
  {
      return view('admin.character.create');
  }

    public function create(Request $request)
  {
      $this->validate($request, Character::$rules);
      $character = new Character;
      $form = $request->all();
    if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $character->image_path = basename($path);
      } else {
          $character->image_path = null;
      }
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      
      // データベースに保存する
      $character->fill($form);
      $character->save();
      
      // admin/news/createにリダイレクトする
        return redirect('admin/character/create');
 }

    
 public function index(Request $request)
  {
      $cond_name = $request->cond_name;
      if ($cond_name != '') {
          // 検索されたら検索結果を取得する
          $posts = Character::where('name', $cond_name)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Character::all();
      }
      return view('admin.character.index', ['posts' => $posts, 'cond_name' => $cond_name]);
  }


    public function edit(Request $request)
      {
          // News Modelからデータを取得する
          $character = Character::find($request->id);
          if (empty($character)) {
            abort(404);    
          }
          return view('admin.character.edit', ['character' => $character]);
      }
    
      public function update(Request $request)
      {
          // Validationをかける
          $this->validate($request, Character::$rules);
          // News Modelからデータを取得する
          $character = Character::find($request->id);
          dump($request->id);
          // 送信されてきたフォームデータを格納する
          $character_form = $request->all();
          unset($character_form['_token']);
          dump($character);
          exit;
          // 該当するデータを上書きして保存する
          $character->fill($character_form)->save();

          return redirect('admin/character');
  
      }
      public function delete(Request $request)
      {
          // 該当するNews Modelを取得
          $character = Character::find($request->id);
          // 削除する
          $character->delete();
          return redirect('admin/character/');
      }  

 public function userIndex(Request $request)
  {
      $cond_name = $request->cond_name;
      if ($cond_name != '') {
          // 検索されたら検索結果を取得する
          $posts = Character::where('name', $cond_name)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Character::all();
      }
      return view('character.index', ['posts' => $posts, 'cond_name' => $cond_name]);
  }
      
}