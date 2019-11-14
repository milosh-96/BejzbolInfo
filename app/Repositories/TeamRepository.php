<?php

namespace App\Repositories;
use App\Repositories\Interfaces\TeamRepositoryInterface;
use Illuminate\Http\Request;

use App\Team;
class TeamRepository implements TeamRepositoryInterface {
    public function all($sort = null) {

        switch($sort) {
            case "ascending":
            case "asc":
            case "ASC":
                return Team::orderBy("created_at")->get();
            break;

            case "descending":
            case "desc":
            case "DESC":
                return Team::orderByDesc("created_at")->get();
            break;

        }

        return Team::all();
    }

    public function doesNameExist($name) {
        $team = Team::where('name',$name)->first();

        if($team) {
            return true;
        }
        return false;
    }

    public function delete(Team $team) {
        return $team->delete();
    }

    public function bulkInsert($teams) {
        $teams = explode(",",$teams);

        if(count($teams) > 0) {
            foreach($teams as $team) {
                if(!$this->doesNameExist($team)) {
                    Team::create(["name"=>$team]);
                }
            }
        }

        return ["inserted all teams"];
    }

    public function update(Team $team,Request $request) {
      /*   if($post) {
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
        } */

    }
}
