<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Buzz\LaravelGoogleCaptcha\CaptchaFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
       // dd($settings);
        return view('dashboard.setting.edit' , compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.setting.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'is_image' => 'required',
            'value' => 'required',
         //    'g-recaptcha-response' => 'required|captcha'
        ]);
/*
        CaptchaFacade::shouldReceive('verify')
            ->andReturn(true);
*/
        $data = $request->all();
        $addSetting = new Setting();

        $addSetting->slug = strip_tags($data['slug']);
        $addSetting->name = strip_tags($data['name']);
        $addSetting->is_image = $data['is_image'];
        $addSetting->value = strip_tags($data['value']);

        if ($file = $request->file('value')) {
            $name =time(). $file->getClientOriginalName();
            $destinationPathImg = 'website/setting_images';
            $file->move($destinationPathImg, $name);
            $addSetting->value = '/website/setting_images/' . $name;
        }

        if ( isset(Auth::user()->id)){
            $addSetting->user_id = Auth::user()->id;
        }
        $addSetting->save();

        session()->flash('success', __('site.updated_successfully'));
        return redirect('/admin/setting/index');
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
    public function update(Request $request, Setting $setting)
    {
        foreach ($request->all() as $key => $req){

            $siteSettingUpdate=$setting->where('name',$key)->first();

            if ($siteSettingUpdate->is_image == 0){

                $siteSettingUpdate->value = $req->name;
                $siteSettingUpdate->save();
            }else{

            }
        }

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
