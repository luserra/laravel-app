<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index(){

      
        $recipe = Recipe::orderBy('id', 'desc')->paginate();
        /* return($recipe); */

        return view('recipe.index', compact('recipe'));
    }

    public function create(){
        return view('recipe.create');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|max:10',
            'description'=> 'required|min:10'
        ]);

      /*   $recipe = new Recipe();
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->save();
 */
        $recipe = Recipe::create($request->all());
        
        return redirect()->route('recipe.show', $recipe);
    }

    public function show($id){ 

        $recipe = Recipe::find($id);
        

        return view('recipe.show', compact('recipe'));
    }
    

    public function edit($id){

          $recipe = Recipe::find($id);
          return view('recipe.edit', compact('recipe'));
      }
      

      public function update(Request $request, Recipe $recipe) {

        $request->validate([
            'name' => 'required|max:10',
            'description'=> 'required|min:10'
        ]);

      /*   $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->save(); */


        $recipe->update($request->all());
        
        return view('recipe.show', compact('recipe'));
      }

      public function destroy(Recipe $recipe) {
        $recipe->delete();
        return redirect()->route('recipes.index');
      }
  
}
