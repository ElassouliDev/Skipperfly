<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends SupperController
{


    public function __construct()
    {
        parent::__construct();

        $this->data['route'] = "{$this->data['dashboard_dir']}.setting";
        $this->data['title'] = trans('admin.setting');
        $this->data['dashboard_dir'] = $this->data['route'];
        $this->data["breadcrumbs"] = [trans("admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => "#"];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->data['settings'] = Setting::pluck('value','key');
       // dd($this->data['settings']);
        return view("{$this->data['dashboard_dir']}.index", $this->data);

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

            if (in_array($key , ['home_image','logo'])){
                if ($request->hasFile($key)){
                    Setting::updateOrCreate(
                        ['key' => $key],
                        ['value' => $request->file($key)->store('settings')]
                    );
                }


            }else{
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

        //

    }
}
