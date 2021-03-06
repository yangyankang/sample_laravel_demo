<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
  public function create()
  {
    return view('sessions.create');
  }

  public function store(Request $request)
  {
    $credentials = $this->validate($request, ['email' => 'required|email|max:255', 'password' => 'required']);

    if (Auth::attempt($credentials, $request->has('remember'))) {//登录成功
      session()->flash('success', '欢迎回来！');
      return redirect()->route('users.show', [Auth::user()]);
    } else {//登录失败
      session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
      return redirect()->back();
    }
    return;
  }

  public function destroy ()
  {
    Auth::logout();
    session('success','您已经成功退出');
    return redirect('login');
  }
}
