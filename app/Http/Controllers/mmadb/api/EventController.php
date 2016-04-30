<?php

namespace App\Http\Controllers\mmadb\api;

use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller {
    /**
     * @param  int  $id
     * @return Response
     */
    public function getByID($id) {
        $event = Event::findOrFail($id);
        return json_encode($event);
    }

    public function getByPromotionID($id) {
        $events = Event::where('promotionID', $id)->get();
        return $events->toJson();
    }
}