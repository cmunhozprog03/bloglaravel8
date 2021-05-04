<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:admin.tags.index')->only('index');
        $this->middleware('can:admin.tags.create')->only('create', 'store');
        $this->middleware('can:admin.tags.edit')->only('edit', 'update');
        $this->middleware('can:admin.tags.destroy')->only('destroy');
    }

    public function index()
    {
        $tags = Tag::orderBy('name')->paginate();
        return view('admin.tags.index', compact('tags'));
    }

   
    public function create()
    {
        $colors = 
        [
            'red' => 'Vermelha',
            'blue' => 'Azul',
            'yellow' => 'Amarela',
            'green' => 'verde',
            'purple' => 'Roxo',
            'pink' => 'Pink',
            'indigo' => 'Indigo',
        ];

       

        return view('admin.tags.create', compact('colors'));
    }

    
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'name' => 'required',
        ]);

        $tag = Tag::create($request->all());

        return redirect()->route('admin.tags.edit', $tag);
    }

   
    public function edit(Tag $tag)
    {
        $colors = 
        [
            'red' => 'Vermelha',
            'blue' => 'Azul',
            'yellow' => 'Amarela',
            'green' => 'verde',
            'purple' => 'Roxo',
            'pink' => 'Pink',
            'indigo' => 'Indigo',
        ];
        
        return view('admin.tags.edit', compact('tag', 'colors'));
    }

   
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$tag->id",
            'name' => 'required',
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.tags.edit', $tag);


    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index');
    }
}
