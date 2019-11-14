<?php
namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Team;
interface TeamRepositoryInterface {
    public function all();
    public function delete(Team $team);
    public function update(Team $team,Request $request);
}
