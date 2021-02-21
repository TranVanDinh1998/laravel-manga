<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Helpers\RemoveImage;
use App\Http\Helpers\UploadImage;
// use app\Http\Helpers\UploadImage;
use App\Http\Requests\GeneralAdminRequest;
use App\Http\Requests\VerifyRequest;
use App\Models\Category;
use App\Models\Manga;
use App\Models\MangaCategory;

class MangaController extends Controller
{
    // constructor
    public function __construct(Manga $manga, Category $category)
    {
        $this->manga = $manga;
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
        $mangas = $this->manga->getAllMangas()->paginate(10);
        return view('manager.pages.manga.index', [
            'mangas' => $mangas,
        ]);
    }
    /**
     * Verify an item.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify($id, $verified)
    {
        //
        $verify = $this->manga->find($id)->update([
            'verified' => $verified,
        ]);
        if ($verified == 0)
            return back()->with('success', 'Manga #' . $id . ' has been deactivated .');
        else
            return back()->with('success', 'Manga #' . $id . ' has been activated.');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = $this->category->getAllCategories()->get();
        return view('manager.pages.manga.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralAdminRequest $request, UploadImage $uploadImage)
    {
        //
        // // echo $request->file('image')->getClientOriginalName();
        // if ($request->hasFile('image')) {
        //     echo 'yes';
        // }
        // else {
        //     echo 'no';
        // }
        // // echo '<img src="'.$request->image.'>"';
        // return $request->all();

        $avatar = null;
        if ($request->hasFile('image')) {
            $avatar = $this->manga->uploadImage($request->image,$uploadImage);
        }
        $manga = Manga::create([
            'name' => $request->name,
            'alter_name' => $request->alter_name,
            'image' => $avatar,
            'description' => $request->description,
            'author' => $request->author,
            'status' => $request->status,
        ]);
        if ($request->categories != null) {
            foreach($request->categories as $category_id) {
                $item = MangaCategory::create([
                    'category_id' => $category_id,
                    'manga_id' => $manga->id,
                ]);
            }
        }
        return back()->with('success', 'New manga has been created.');
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
        $manga = $this->manga->find($id);
        return view('manager.pages.manga.edit', [
            'manga' => $manga,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GeneralAdminRequest $request, $id, UploadImage $uploadImage)
    {
        //
        $avatar = null;
        $manga = $this->manga->find($id);
        if ($request->hasFile('image')) {
            $avatar = $this->manga->uploadImage($request->image,$uploadImage);
        } else {
            $avatar = $manga->image;
        }
        $manga = $manga->update([
            'name' => $request->name,
            'alter_name' => $request->alter_name,
            'image' => $avatar,
            'description' => $request->description,
            'author' => $request->author,
            'status' => $request->status,
            'verified' => $request->verified,
        ]);
        return back()->with('success', 'Manga #' . $id . ' has been updated.');
    }

    /**
     * Softdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $manga = $this->manga->find($id)->delete();
        return back()->with('success', 'Manga #' . $id . ' has been removed.');
    }


    /**
     * Display a listing of the softdeleted resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recycle()
    {
        $mangas = $this->manga->getAllTrashedMangas()->paginate(10);
        return view('manager.pages.manga.recycle', [
            'mangas' => $mangas,
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
        $manga = $this->manga->onlyTrashed()->find($id)->restore();
        return back()->with('success', 'Manga #' . $id . ' has been restored.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, RemoveImage $removeImage)
    {
        //
        $manga = $this->manga->onlyTrashed()->find($id);
        $this->manga->removeImage($manga->image,$removeImage);
        $manga->forceDelete();
        return back()->with('success', 'manga #' . $id . ' has been permanently deleted.');
    }
}
