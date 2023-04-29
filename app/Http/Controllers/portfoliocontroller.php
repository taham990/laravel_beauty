<?php

namespace App\Http\Controllers;
use App\Models\Example;
use Illuminate\Http\Request;
use Illuminat\Support\fasades\DB;



class portfoliocontroller extends Controller
{
    public function show()
    {
        $article = new Example;
        $showall = $article->all();

        return view("portfolio" , ["collection" => $showall]);


    }

    public function searchForExamples()
    {
        $name = request('name');

        $showThis = Example::where('Name' ,'like', '$name')->get();
        // dd($showThis);
        return view("portfolio" , ['collection' => $showThis]);

    }
}
