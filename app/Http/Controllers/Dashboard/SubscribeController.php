<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\SubscribeDatatable;
use App\Models\Setting;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubscribeController extends SupperController
{


    public function __construct()
    {
        parent::__construct();

        $this->data['route'] = "{$this->data['dashboard_dir']}.subscribers";
        $this->data['title'] = trans('admin.subscribers');
        $this->data['dashboard_dir'] = $this->data['route'];
        $this->data["breadcrumbs"] = [trans("admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => "#"];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SubscribeDatatable $datatable)
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

//


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        foreach ($request->except('_token') as $key => $value) {

            if (in_array($key, ['home_image', 'logo', 'logo2', 'subscribe_image'])) {
                if ($request->hasFile($key)) {
                    Setting::updateOrCreate(
                        ['key' => $key],
                        ['value' => $request->file($key)->store('settings')]
                    );
                }


            } else {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );

            }

        }
        return back()->with(['success' => trans('admin.updated_successfully')]);

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
    public function edit(int $id)
    {
        ///


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $subscribe = Subscribe::find($id);
        if (\request()->ajax() && $subscribe) {
            $subscribe->delete();

            return response()->json(['status' => true, 'msg' => trans('admin.deleted_successfully')]);
        }

        abort(404);

    }
}
