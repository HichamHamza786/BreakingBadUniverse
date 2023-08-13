<?php

namespace App\Controllers;

use App\Models\Character;

class MainController extends CoreController
{
    /**
     * Method for homepage displaying
     * @return void
     */

    public function home()
    {
        $charactersList = Character::findAll();
        $this->show('main/home', [
            'charactersList' => $charactersList,
        ]);
    }
}