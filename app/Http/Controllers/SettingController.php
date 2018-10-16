<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Resources\SettingsCollection;
use Illuminate\Support\Facades\Input;
use Response;

class SettingController extends Controller
{

    public function index()
    {
        //
        $settings = Setting::find($id)->settings;
        return new SectionsCollection($settings);
    }

    public function create()
    {
        //
        return view('addsetting');
    }

    public function store(Request $request)
    {

        try{

          $setting = new Setting;
          $setting->title = $request->input('title');
          $setting->key = strtolower(str_replace(' ', '_', $request->input('title')));
          $setting->value = $request->input('value');
          $setting->type = $request->input('type');
          $setting->section_id = $request->input('section_id');
          $setting->save();
            //find menu item by id from previous saved row above for response
            //$item = Menu::find($newItem->id);
            //build api response
            $response = [
              'created' => "Setting has been created"
            ];
            //set status code
            $statusCode = 200;
        }catch(\Exception $e){
            $response = [
                "error" => "Setting could not be added",
            ];
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }

    }

    public function show(Setting $setting)
    {
        //
    }

    public function edit(Setting $setting)
    {
        //
    }

    public function update(Request $request)
    {
      try{

        $setting = Setting::find($request->input('id'));
        $setting->value = $request->input('value');
        $setting->update();
          //find menu item by id from previous saved row above for response
          //$item = Menu::find($newItem->id);
          //build api response
          $response = [
            'update' => "Setting has been updated"
          ];
          //set status code
          $statusCode = 200;
      }catch(\Exception $e){
          $response = [
              "error" => "Setting could not be updated",
          ];
          $statusCode = 404;
      }finally{
          return Response::json($response, $statusCode);
      }
    }

    public function destroy(Setting $setting)
    {
        //
    }
}
