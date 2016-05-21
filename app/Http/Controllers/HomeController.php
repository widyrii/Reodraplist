<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Tugas;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function add_guru()
    {
        return view('guru.add');
      }

    public function all_guru()
    {
            return view('guru.all');
        }

    public function addtasksave()
    {
    $post = new \App\Tugas;
		$post->title = Input::get('title');
		$post->priority = Input::get('priority');
		$post->check = Input::get('check');
		$post->progres = Input::get('progres');
		$post->content = Input::get('content');

		$post->save();
		return redirect(url('guru.all'));
    }
}
