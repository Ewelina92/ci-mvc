<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Handlers\YatzyHandler;

class YatzyController extends Controller
{
    /**
     * Display a dice.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $yatzyHandler = new YatzyHandler();
        $data = $yatzyHandler->playGame();

        return view($data["pageToRender"], $data);
    }
}
