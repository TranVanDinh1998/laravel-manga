<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\RemoveImage;
use App\Http\Helpers\UploadImage;
// use app\Http\Helpers\UploadImage;
use App\Http\Requests\GeneralAdminRequest;
use App\Http\Requests\VerifyRequest;
use App\Models\Chapter;
use App\Models\Detail;
use App\Models\Manga;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    // constructor
    public function __construct(Detail $detail)
    {
        $this->detail = $detail;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$chapter_id)
    {
        //
        $manga = Manga::find($id); 
        $chapter = Chapter::find($chapter_id);
        $details = $chapter->details()->paginate(10);
        return view('admin.pages.detail.index', [
            'manga' => $manga,
            'chapter' => $chapter,
            'details' => $details,
        ]);
    }
    /**
     * Verify an item.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify($id,$chapter_id,$detail_id,$verified)
    {
        //
        $verify = $this->detail->find($detail_id)->update([
            'verified' => $verified,
        ]);
        if ($verified == 0)
            return back()->with('success', 'Detail #' . $detail_id . ' has been deactivated .');
        else
            return back()->with('success', 'Detail #' . $detail_id . ' has been activated.');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id,$chapter_id)
    {
        //
        $manga = Manga::find($id);
        $chapter = Chapter::find($id);
        return view('admin.pages.detail.create',[
            'manga' => $manga,
            'chapter' => $chapter,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,$chapter_id,GeneralAdminRequest $request, UploadImage $uploadImage)
    {
        //
        // echo $request->file('image')->getClientOriginalName();
        // return $request->all();
        $chapter = Chapter::find($chapter_id);
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
        return back()->with('success', 'New detail has been created.');
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
    public function edit($id,$chapter_id,$detail_id)
    {
        //
        $manga = Manga::find($id);
        $chapter = Chapter::find($chapter_id);
        $detail = $this->detail->find($detail_id);
        return view('admin.pages.detail.edit', [
            'manga' => $manga,
            'chapter'=> $chapter,
            'detail' => $detail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$chapter_id,$detail_id,GeneralAdminRequest $request, UploadImage $uploadImage)
    {
        //
        $avatar = null;
        $detail = $this->detail->find($detail_id);
        if ($request->hasFile('image')) {
            $destination_path = 'public/images/details';
            $destination_path = 'public/images/chapters/'.$id.'/'.$chapter_id;
            $avatar = $uploadImage->getAvatar($request->file('image'), $destination_path);
            $result = $uploadImage->upload($request->file('image'), $destination_path, $avatar);
        } else {
            $avatar = $detail->image;
        }
        $detail = $detail->update([
            'image' => $avatar,
        ]);
        return back()->with('success', 'Detail #' . $id . ' has been updated.');
    }

    /**
     * Softdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,$chapter_id,$detail_id)
    {
        $detail = $this->detail->find($detail_id)->delete();
        return back()->with('success', 'Detail #' . $detail_id . ' has been removed.');
    }


    /**
     * Display a listing of the softdeleted resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recycle($id,$chapter_id)
    {
        $manga = Manga::find($id);
        $chapter = Chapter::find($chapter_id);
        $details = $chapter->details()->onlyTrashed()->paginate(10);
        return view('admin.pages.detail.recycle', [
            'details' => $details,
            'manga' => $manga,
            'chapter' => $chapter,
        ]);
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id,$chapter_id,$detail_id)
    {
        $detail = $this->detail->onlyTrashed()->find($detail_id)->restore();
        return back()->with('success', 'Detail #' . $detail_id . ' has been restored.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$chapter_id,$detail_id, RemoveImage $removeImage)
    {
        //
        $detail = $this->detail->onlyTrashed()->find($detail_id);
        $destination_path = 'public/images/chapters/'.$id.'/'.$chapter_id;
        $removeImage->remove($destination_path, $detail->image);
        $detail->forceDelete();
        return back()->with('success', 'Detail #' . $id . ' has been permanently deleted.');
    }
}
