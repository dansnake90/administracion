<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//llamo al modelo
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      //metodo para acceso personalizado

      public function __construct()
      {
          $this->middleware('can:admin.categories.index')->only('index');    
          $this->middleware('can:admin.categories.create')->only('create', 'store');
          $this->middleware('can:admin.categories.edit')->only('edit', 'update');   
          $this->middleware('can:admin.categories.destroy')->only('destroy');     
      
        }
  

    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //reglas de validación
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        //return $request->all();
            $category = Category::create($request->all());
            return redirect()->route('admin.categories.edit', $category)->with('info', 'la categoría se creó con exito');;

            
    }
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
         //reglas de validación
         $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categories,slug,$category->id"
        ]);

         $category->update($request->all());
         return redirect()->route('admin.categories.edit', $category)->with('info', 'la categoría se actualizó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete(); 
        return redirect()->route('admin.categories.index', $category)->with('info', 'la categoría se ha eliminado con exito');;

    
    }
}
