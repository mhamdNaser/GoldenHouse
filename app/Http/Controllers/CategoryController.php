<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
        /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    $category = Category::orderBy('created_at', 'desc')->get();
    return view('admin.category.category', compact('category'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $category_img = $request->file('Category_Image')->getClientOriginalName();
        $request->file('Category_Image')->storeAs('public/categoryImg', $category_img);

        $category = new category;
        $category->Category_Name = $request->Category_Name;
        $category->Category_Description = $request->Category_Description;
        $category->Category_Image = $category_img;

        $category->save();
        return redirect('category');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if (! $category) {
            return redirect('index');
        }
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Category_Name' => 'required|string|max:255',
            'Category_Description' => 'required|string'
        ]);

        $category = Category::findOrFail($id);
        $category->Category_Name = $validatedData['Category_Name'];
        $category->Category_Description = $validatedData['Category_Description'];

        if ($request->hasFile('Category_Image')) {
            $file = $request->file('Category_Image');
            $validator = Validator::make(['Category_Image' => $file], [
                'Category_Image' => 'image|max:2048'
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator);
            }

            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = storage_path('app/public/categoryImg');
            $file->move($location, $filename);
            $oldImage = $category->Category_Image;
            Storage::delete($oldImage);
            $category->Category_Image = $filename;
        }

        $category->save();
        return redirect('category');
        return back()->with('success', 'Category updated successfully');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}
