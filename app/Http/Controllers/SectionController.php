<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use App\Http\Resources\SectionsCollection;

class SectionController extends Controller
{

    public function index()
    {
        //List all sections
        $sections = Section::all();
        return new SectionsCollection($sections);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($slug)
    {
        //Find id of section
        $section = Section::where('slug',$slug)->first();
        //Show all settings filtered by id
        $settings = Section::find($section->id)->settings;
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
