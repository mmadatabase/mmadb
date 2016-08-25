<?php

namespace App\Http\Controllers\mmadb\api;

use App\Http\Controllers\Controller;
use App\Promotion;

class PromotionController extends Controller {
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getByID($id) {
        $promotion = Promotion::findOrFail($id);
        return json_encode($promotion);
    }
}