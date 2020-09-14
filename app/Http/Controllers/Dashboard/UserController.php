<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\UserDatatable;
use App\Http\Requests\AdminRequest;

use App\Http\Requests\UserRequest;
use App\Models\Admin;
use App\Models\Article;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends SupperController
{


    public function __construct()
    {
        parent::__construct();

        $this->data['route'] = "{$this->data['dashboard_dir']}.user";
        $this->data['title'] = trans('admin.users');
        $this->data['dashboard_dir'] = $this->data['route'];
        $this->data["breadcrumbs"] = [trans( "admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => $this->data['url_prefix'] . "/" . $this->data['route']];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDatatable $datatable)
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
    public function store(AdminRequest $request)
    {
        $data = $request->only('name','email','about','password','image');

       $admin =  User::create($data);
        $admin->syncRoles(['user']);


        return redirect(route($this->data['route'].'.index'))->with(['success'=>trans('admin.added_successfully')]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->data['route'] = "{$this->data['route']}.edit";
        $this->data['title'] = trans('admin.edit');
        $this->data["breadcrumbs"][$this->data['title']] = "";
        $this->data['admin'] = $user;



        return view("{$this->data['dashboard_dir']}.edit", $this->data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->only('name','email','password','image');
        if (!$request->hasFile('password'))
            unset($data['password']);

        $user->update($data);

        return redirect(route($this->data['route'].'.index'))->with(['success'=>trans('admin.updated_successfully')]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */

    public function destroy(  User $user)
    {

        if (\request()->ajax()){
          //  @Storage::delete($user->image);
            $user->delete();

            return response()->json(['status' => true, 'msg' => trans('admin.deleted_successfully')]);
        }

        abort(404);

    }
}
