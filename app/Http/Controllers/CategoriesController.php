<?php

namespace App\Http\Controllers;

use App\Category;
use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('categories.index')->with('categories', Category::all());
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required | min: 2 | max: 12 | unique:categories',
        ]);
        $data = request()->all();
        $category = new Category();
        $category->name = $data['name'];
        $category->save();
        session()->flash('success', 'Category created successfully.');
        return redirect('/categories');
    }
}
