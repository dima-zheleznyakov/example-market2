<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.category.index', [
            'categories' => $categories
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
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

        $new_category = new Category();
        $new_category->title = $request->title;
        $new_category->description = $request->description;
        $new_category->save();

        return redirect()->back()->withSuccess('Категория была добавлена');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show(Category $catalog)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $catalog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        return view('admin.category.edit', [
            'category' => $category,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $catalog)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $catalog)
    {
        //
    }
}
