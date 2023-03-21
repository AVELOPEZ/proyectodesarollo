<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoriesRequest;
use App\Models\category;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function show()
    {
      //$categories=DB::select('select * from categories where category_id = 1');
       // return view('category', ['categories'=>$categories]);

       //$data=category::all();
       return view('category');
    }

    public function category(categoryRequest $request)
    {
        $cate= category::create($requests->validated());
     // $items=new categories();
     // $items->name=$request->name;
    //$items->description=$request->description;

    }
}
