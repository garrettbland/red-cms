<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use App\Http\Resources\SectionsCollection;
use App\Http\Resources\SectionsResource;
use Illuminate\Support\Facades\Input;
use Response;

class SectionController extends Controller
{

    public function index()
    {
        //List all sections
        $sections = Section::all();
        return new SectionsCollection($sections);
    }

    public function title($id)
    {
        //List all sections
        $section = Section::find($id);
        return new SectionsResource($section);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //

        try{

          $section = new Section;
          $section->title = $request->input('title');
          $section->save();
            //find menu item by id from previous saved row above for response
            //$item = Menu::find($newItem->id);
            //build api response
            $response = [
              'created' => "Section has been created"
            ];
            //set status code
            $statusCode = 200;
        }catch(\Exception $e){
            $response = [
                "error" => "Section could not be added",
            ];
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }
    }

    public function show($id)
    {
        //Show all settings by id
        $settings = Section::find($id)->settings;
        return new SectionsCollection($settings);
    }

    public function edit(Section $section)
    {
        //
    }

    public function update(Request $request, Section $section)
    {
        //
    }

    public function destroy(Section $section)
    {
        //
    }
}
