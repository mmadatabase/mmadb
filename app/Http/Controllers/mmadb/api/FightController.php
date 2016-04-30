<?php

namespace App\Http\Controllers\mmadb\api;

use App\Http\Controllers\Controller;
use App\Fight;

class FightController extends Controller {
    /**
     * @param  int  $id
     * @return Response
     */
    public function getByID($id) {
        $fight = Fight::findOrFail($id);
        return json_encode($fight);
    }

    public function getByEventID($id) {
        $fights = Fight::where('eventID', $id)->get();
        return $fights->toJson();
    }
}