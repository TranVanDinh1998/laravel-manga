<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralAdminRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // contructor
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = $this->category->getAllCategories()->paginate(10);
        return view('manager.pages.category.index', [
            'categories' => $categories,
        ]);
    }
        /**
     * Verify an item.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify($id,$verified)
    {
        //
        $verify = $this->category->verify($id,$verified);
        if ($verified == 0)
            return back()->with('success', 'Category #' . $id . ' has been deactivated .');
        else
            return back()->with('success', 'Category #' . $id . ' has been activated.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manager.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralAdminRequest $request)
    {
        $category = Category::create(
            $request->all()
        );
        return back()->with('success', 'New category has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('manager.pages.category.edit', [
            'category' => $category,
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GeneralAdminRequest $request, $id)
    {
        //
        $category = Category::find($id)->update(
            $request->all()
        );
        return back()->with('success', 'Category #' . $id . ' has been updated.');
    }

    /**
     * Softdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $category = Category::find($id)->delete();
        return back()->with('success', 'Category #' . $id . ' has been removed.');
    }


    /**
     * Display a listing of the softdeleted resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recycle()
    {
        $categories = $this->category->getAllTrashedCategories()->paginate(10);
        return view('manager.pages.category.recycle', [
            'categories' => $categories,
        ]);
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $category = Category::onlyTrashed()->find($id)->restore();
        return back()->with('success', 'Category #' . $id . ' has been restored.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::onlyTrashed()->find($id)->forceDelete();
        return back()->with('success', 'Category #' . $id . ' has been permanently deleted.');
    }
}
