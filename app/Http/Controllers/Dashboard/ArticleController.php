<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ArticleDatatable;
use App\DataTables\TagDatatable;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\TagRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ArticleController extends SupperController
{


    public function __construct()
    {
        parent::__construct();

        $this->data['route'] = "{$this->data['dashboard_dir']}.article";
        $this->data['title'] = trans('admin.article');
        $this->data['dashboard_dir'] = $this->data['route'];
        $this->data["breadcrumbs"] = [trans( "admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => $this->data['url_prefix'] . "/" . $this->data['route']];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ArticleDatatable $datatable)
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
    public function store(ArticleRequest $request)
    {

//        dd($request->only('en'));
        if (!$request->has('ar.title') || empty($request->input('ar.title')))
            $data = $request->only('en', 'image', 'category_id');
        else
            $data = $request->only('en', 'ar','image', 'category_id');

//        dd($data);
//        $data = $request->only('en','image','category_id');
//        $data = $request->only('title','description','content','image','keywords','category_id');
        $data['user_id'] =auth()->id();
        $article = Article::create($data);
        $article->tags()->sync($request->tag_id);

        if ( $request->has('send_mail')){
            \App\Models\Subscribe::chunk(50,function ($data) use ($article){

                dispatch(new  \App\Jobs\SendNewArticleMailJob($data,$article));

            });

         }

        return redirect(route($this->data['route'].'.index'))->with(['success'=>trans('admin.added_successfully')]);

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
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $this->data['route'] = "{$this->data['route']}.edit";
        $this->data['title'] = trans('admin.edit');
        $this->data["breadcrumbs"][$article['slug']] = "";
        $this->data["breadcrumbs"][$this->data['title']] = "";
        $this->data['article'] = $article;
        $this->data['categories'] = Category::all();
        $this->data['tags'] = Tag::all();
        $this->data['selected_tags'] = $article->tags()->pluck('id')->toArray();
        //dd([$this->data['selected_tags'] ]);


        return view("{$this->data['dashboard_dir']}.edit", $this->data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {

//        $data = $request->only('title','description','content','image','keywords','category_id');
//        $data = $request->only('en','image','category_id');
        if (!$request->has('ar.title') || empty($request->input('ar.title')))
            $data = $request->only('en', 'image', 'category_id');
        else
            $data = $request->only('en', 'ar','image', 'category_id');


        $article->update($data);
        $article->tags()->sync($request->tag_id);


        if ( $request->has('send_mail')){
            \App\Models\Subscribe::chunk(50,function ($data) use ($article){

                dispatch(new  \App\Jobs\SendNewArticleMailJob($data,$article));

            });

        }


        return redirect(route($this->data['route'].'.index'))->with(['success'=>trans('admin.updated_successfully')]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */

    public function destroy(Article $article)
    {

        if (\request()->ajax()){
            @Storage::delete($article->image);
            $article->delete();

            return response()->json(['status' => true, 'msg' => trans('admin.deleted_successfully')]);
        }

        abort(404);

    }
}
