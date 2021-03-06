<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Handlers\Game21Handler;

class Game21Controller extends Controller
{
    /**
     * Display a dice.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $game21Handler = new Game21Handler();
        $data = $game21Handler->playGame();

        return view($data["pageToRender"], $data);
    }
}
