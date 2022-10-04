<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\WebUpdate;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('pages.team.index',['teams'=> $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $page = new Team();
        $page->name = $request->name;
        $page->designation = $request->designation;
        $page->description = $request->description;
        $page->status = $request->status;
        $page->joined_on = $request->joined_on;
        $page->is_featured = isset($request->is_featured) ? true : false;
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('images'), $filename);
            $page->avatar_image = $filename;
        }
        $page->meta_title = $request->meta_title;
        $page->meta_keywords = $request->meta_keywords;
        $page->meta_description = $request->meta_description;
        $page->save();
                $update = new WebUpdate();
        $update->activity = 'New Activity has been Created';
        $update->save();
                $update = new WebUpdate();
        $update->activity = 'New Team has been Created';
        $update->save();
        return redirect(route('team.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('pages.team.edit', ['team'=> $team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, $id)
    {
        $page = Team::find($id);
        $page->name = $request->name;
        $page->designation = $request->designation;
        $page->description = $request->description;
        $page->status = $request->status;
        $page->joined_on = $request->joined_on;
        $page->is_featured = isset($request->is_featured) ? true : false;
        $page->meta_title = $request->meta_title;
        $page->meta_keywords = $request->meta_keywords;
        $page->meta_description = $request->meta_description;
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('images'), $filename);
            $page->avatar_image = $filename;
        }
        $page->save();
                $update = new WebUpdate();
        $update->activity = 'Team has been Updated';
        $update->save();
        return redirect(route('team.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team, $id)
    {
        if($team->find($id)->delete()){
            return redirect(route('team.index'));
                    $update = new WebUpdate();
        $update->activity = 'Team has been Deleted';
        $update->save();
        }
        return redirect(route('team.index'));
    }
}
