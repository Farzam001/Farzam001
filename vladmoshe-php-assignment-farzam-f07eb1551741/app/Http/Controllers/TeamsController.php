<?php

namespace App\Http\Controllers;
use App\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $team=Team::all();
        return $team;
    }
    public function show($id)
    {
        $team=Team::find($id);
        return $team;
    }
    public function destroy($id)
    {
        $team=Team::find($id);
        $team->delete();
        return "Deleted Successfully";
    }
    public function create(Request $request)
    {
        $team = Teams::create([

            'name' => $request['name'],
            'slug' => $request['slug'],
            'functionality' => $request['functionality']
        ]);
        return response()->json(['success'=>" Team Added successfully."]);
    }
    public function update(Request $request, $id)
    {
        $team = Teams::find($id);
        //$team->update($request->all());
        $team->name = $request->input('name');
        $team->slug = $request->input('slug');
        $team->functionality = $request->input('functionality');
        $team->save();
        return "Successfully Updated";
    }
}
