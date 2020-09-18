<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\AdminDatatable;
use App\DataTables\ArticleDatatable;
use App\DataTables\TagDatatable;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\TagRequest;
use App\Http\Requests\UserRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends SupperController
{


    public function __construct()
    {
        parent::__construct();

        $this->data['route'] = "{$this->data['dashboard_dir']}.admin";
        $this->data['title'] = trans('admin.admins');
        $this->data['dashboard_dir'] = $this->data['route'];
        $this->data["breadcrumbs"] = [trans( "admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => $this->data['url_prefix'] . "/" . $this->data['route']];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminDatatable $datatable)
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
        $this->data['route'] = "{$this->data['route']}.create";

        $this->data['title'] = trans('admin.create');
        $this->data["breadcrumbs"][$this->data['title']] = "";
        return view("{$this->data['dashboard_dir']}.create", $this->data);


    }

    /**
     * tag a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->only('name','email','about','password','image');

       $admin =  User::create($data);
        $admin->syncRoles(['superadministrator']);


        return redirect(route($this->data['route'].'.index'))->with(['success'=>trans('admin.added_successfully')]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['route'] = "{$this->data['route']}.edit";
        $this->data['title'] = trans('admin.edit');
        $this->data["breadcrumbs"][$this->data['title']] = "";
        $this->data['admin'] = User::findOrFail($id);



        return view("{$this->data['dashboard_dir']}.edit", $this->data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->only('name','email','about','password','image');
        if (!$request->hasFile('password'))
            unset($data['password']);

        $admin = User::findOrFail($id);
        $admin->update($data);

        return redirect(route($this->data['route'].'.index'))->with(['success'=>trans('admin.updated_successfully')]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(  $id)
    {

        if (\request()->ajax()){
          //  @Storage::delete($admin->image);
            $admin = User::findOrFail($id);
            $admin->delete();

            return response()->json(['status' => true, 'msg' => trans('admin.deleted_successfully')]);
        }

        abort(404);

    }
}
