<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\TagDatatable;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends SupperController
{


    public function __construct()
    {
        parent::__construct();

        $this->data['route'] = "{$this->data['dashboard_dir']}.tag";
        $this->data['title'] = trans('admin.tag');
        $this->data['dashboard_dir'] = $this->data['route'];
        $this->data["breadcrumbs"] = [trans( "admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => $this->data['url_prefix'] . "/" . $this->data['route']];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TagDatatable $datatable)
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
        $this->data["breadcrumbs"][$this->data['title']] = "";
        $this->data['route'] = "{$this->data['dashboard_dir']}.create";

        return view("{$this->data['dashboard_dir']}.create", $this->data);


    }

    /**
     * tag a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        Tag::create($request->only('title'));

        return redirect(route($this->data['route'].'.index'))->with(['success'=>trans('admin.added_successfully')]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
         $this->data['route'] = "{$this->data['route']}.edit";
        $this->data['title'] = trans('admin.edit');
        $this->data["breadcrumbs"][$tag['slug']] = "";
        $this->data["breadcrumbs"][$this->data['title']] = "";
        $this->data['tag'] = $tag;

        return view("{$this->data['dashboard_dir']}.edit", $this->data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, Tag $tag)
    {

        $tag->update($request->only('title'));

        return redirect(route($this->data['route'].'.index'))->with(['success'=>trans('admin.updated_successfully')]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {

        if (\request()->ajax()){
            $tag->delete();

            return response()->json(['status' => true, 'msg' => trans('admin.deleted_successfully')]);


        }

        abort(404);

    }
}
