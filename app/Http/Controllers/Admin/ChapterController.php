<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\RemoveImage;
use App\Http\Helpers\UploadImage;
use App\Http\Requests\GeneralAdminRequest;
use App\Models\Chapter;
use App\Models\Detail;
use App\Models\Manga;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
        // constructor
        public function __construct(Chapter $chapter)
        {
            $this->chapter = $chapter;
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $manga = Manga::find($id); 
        $chapters = $manga->chapters()->paginate(10);
        return view('admin.pages.chapter.index', [
            'manga' => $manga,
            'chapters' => $chapters,
        ]);
    }
    /**
     * Verify an item.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify($id,$chapter_id,$verified)
    {
        //
        $verify = $this->chapter->find($chapter_id)->update([
            'verified' => $verified,
        ]);
        if ($verified == 0)
            return back()->with('success', 'Chapter #' . $id . ' has been deactivated .');
        else
            return back()->with('success', 'Chapter #' . $id . ' has been activated.');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $manga = Manga::find($id);
        return view('admin.pages.chapter.create', [
            'manga' => $manga,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,GeneralAdminRequest $request, UploadImage $uploadImage)
    {   
        //
        $chapter = Chapter::create([
            'name' => $request->input('name'),
            'manga_id' => $id,
        ]);
        $destination_path = 'public/images/chapters/'.$id.'/'.$chapter->id;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $avatar = null;
                $avatar = $uploadImage->getAvatar($image,$destination_path);
                $result = $uploadImage->upload($image,$destination_path,$avatar);
                if ($result) {
                    $detail = Detail::create([
                        'chapter_id' => $chapter->id,
                        'image' => $avatar,
                    ]);
                }
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Softdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,$chapter_id)
    {
        $chapter = $this->chapter->find($chapter_id)->delete();
        return back()->with('success', 'Chapter #' . $chapter_id . ' has been removed.');
    }


    /**
     * Display a listing of the softdeleted resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recycle($id)
    {
        $manga = Manga::find($id);
        $chapters = $manga->chapters()->onlyTrashed()->paginate(10);
        return view('admin.pages.chapter.recycle', [
            'manga' => $manga,
            'chapters' => $chapters,
        ]);
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id,$chapter_id)
    {
        $chapter = $this->chapter->onlyTrashed()->find($chapter_id)->restore();
        return back()->with('success', 'Chapter #' . $chapter_id . ' has been restored.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$chapter_id)
    {
        //
        $chapter = $this->chapter->onlyTrashed()->find($chapter_id);
        $chapter->forceDelete();
        return back()->with('success', 'Chapter #' . $chapter_id . ' has been permanently deleted.');
    }
}
