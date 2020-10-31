<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ArticleDatatable;
use App\DataTables\ImageDatatable;
use App\DataTables\TagDatatable;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ImageRequest;
use App\Http\Requests\TagRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ImageController extends SupperController
{


    public function __construct()
    {
        parent::__construct();

        $this->data['route'] = "{$this->data['dashboard_dir']}.image";
        $this->data['title'] = trans('admin.image');
        $this->data['dashboard_dir'] = $this->data['route'];
        $this->data["breadcrumbs"] = [trans("admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => $this->data['url_prefix'] . "/" . $this->data['route']];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ImageDatatable $datatable)
    {

        return $datatable->render("{$this->data['dashboard_dir']}.index", $this->data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['title'] = trans('admin.create');
        $this->data['categories'] = Category::all();
        $this->data['tags'] = Tag::all();
        $this->data["breadcrumbs"][$this->data['title']] = "";
        return view("{$this->data['dashboard_dir']}.create", $this->data);


    }

    /**
     * tag a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {

        $article = Image::create($request->validated());

        return redirect(route($this->data['route'] . '.index'))->with(['success' => trans('admin.added_successfully')]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //        Article::with('tags',function ($query){
        //            $query->where('status',true);
        //        });
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
//

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */

    public function destroy(Image $image)
    {

        if (\request()->ajax()) {
            @Storage::delete($image->image);
            $image->delete();

            return response()->json(['status' => true, 'msg' => trans('admin.deleted_successfully')]);
        }

        abort(404);

    }
}
