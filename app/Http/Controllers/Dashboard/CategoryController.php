<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CategoryDatatable;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends SupperController
{


    public function __construct()
    {
        parent::__construct();

        $this->data['route'] = "{$this->data['dashboard_dir']}.category";
        $this->data['title'] = trans('admin.category');
        $this->data['dashboard_dir'] = $this->data['route'];
        $this->data["breadcrumbs"] = [trans("admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => $this->data['url_prefix'] . "/" . $this->data['route']];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDatatable $datatable)
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
    public function store(CategoryRequest $request)
    {

        if (!$request->has('ar.title') || empty($request->input('ar.title')))
            $data = $request->only('en', 'color', 'background');
        else
            $data = $request->only('en', 'ar','color', 'background');

        $data['in_nav'] = $request->has('in_nav');
        Category::create($data);

        return redirect(route($this->data['route'] . '.index'))->with(['success' => trans('admin.added_successfully')]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Category $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $this->data['route'] = "{$this->data['route']}.edit";
        $this->data['title'] = trans('admin.edit');
        $this->data["breadcrumbs"][$category['slug']] = "";
        $this->data["breadcrumbs"][$this->data['title']] = "";
        $this->data['category'] = $category;

        return view("{$this->data['dashboard_dir']}.edit", $this->data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
//        $data =$request->only('title','description','keywords','color','background');

        if (!$request->has('ar.title') || empty($request->input('ar.title')))
            $data = $request->only('en', 'color', 'background');
        else
            $data = $request->only('en', 'ar','color', 'background');


        $data['in_nav'] = $request->has('in_nav');

        $category->update($data);

        return redirect(route($this->data['route'] . '.index'))->with(['success' => trans('admin.updated_successfully')]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        if (\request()->ajax()) {
            $category->delete();

            return response()->json(['status' => true, 'msg' => trans('admin.deleted_successfully')]);


        }

        abort(404);

    }
}
