<?php

namespace App\Http\Controllers\Admin2;

use App\Http\Controllers\Controller;
use App\Http\Helpers\RemoveImage;
use App\Http\Helpers\UploadImage;
// use app\Http\Helpers\UploadImage;
use App\Http\Requests\GeneralAdminRequest;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    // constructor
    public function __construct(Manga $manga)
    {
        $this->manga = $manga;
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
        return view('admin2.pages.manga.index', [
            'mangas' => $mangas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin2.pages.manga.create');
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
        // echo $request->file('image')->getClientOriginalName();
        // return $request->all();

        $avatar = null;
        if ($request->hasFile('image')) {
            $destination_path = 'public/images/mangas';
            $avatar = $uploadImage->getAvatar($request->file('image'), $destination_path);
            $result = $uploadImage->upload($request->file('image'), $destination_path, $avatar);
        }
        $manga = manga::create([
            'name' => $request->input('name'),
            'alter_name' => $request->input('alter_name'),
            'image' => $avatar,
            'description' => $request->input('description'),
            'author' => $request->input('author'),
            'status' => $request->input('status'),
        ]);
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
        return view('admin2.pages.manga.edit', [
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
            $destination_path = 'public/images/mangas';
            $avatar = $uploadImage->getAvatar($request->file('image'), $destination_path);
            $result = $uploadImage->upload($request->file('image'), $destination_path, $avatar);
        } else {
            $avatar = $manga->image;
        }
        $manga = $manga->update([
            'name' => $request->input('name'),
            'alter_name' => $request->input('alter_name'),
            'image' => $avatar,
            'description' => $request->input('description'),
            'author' => $request->input('author'),
            'status' => $request->input('status'),
            'verified' => $request->input('verified'),
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
        return back()->with('success', 'manga #' . $id . ' has been removed.');
    }


    /**
     * Display a listing of the softdeleted resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recycle()
    {
        $mangas = $this->manga->getAllTrashedMangas()->paginate(10);
        return view('admin2.pages.manga.recycle', [
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
        return back()->with('success', 'manga #' . $id . ' has been restored.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,RemoveImage $removeImage)
    {
        //
        $manga = $this->manga->onlyTrashed()->find($id);
        $destination_path = 'public/images/mangas';
        $removeImage->remove($destination_path,$manga->image);
        $manga->forceDelete();
        return back()->with('success', 'manga #' . $id . ' has been permanently deleted.');
    }
}
