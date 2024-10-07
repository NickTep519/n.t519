<?php

namespace App\Http\Controllers;

use Parsedown;
use App\Models\Work;

class RealisationController extends Controller
{
    public function index()
    {
        $works = Work::query()->orderBy('created_at', 'desc')->with('tags')->paginate(5) ; 

        return view('work.index', [
            'works' => $works
        ]) ; 
    }

    public function show(Work $work)
    {

       /* $works = Work::query()->latest()->take(4)->get() ; 

        return view('work.show', [
            'work' => $work,
            'works' => $works
        ]) ; */


        
        $works = Work::query()->latest()->take(4)->get() ; 

        $parsedown = new Parsedown() ; 
        $description = $parsedown->text($work->description)  ; 

        return view('work.show', [
            'work' => $work,
            'description' => $description,
            'works' => $works
        ]) ; 
    }
}
