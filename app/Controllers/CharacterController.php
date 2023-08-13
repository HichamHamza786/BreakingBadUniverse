<?php

namespace App\Controllers;

use App\Models\Character;

class CharacterController extends CoreController
{
    /**
     * Method responsible for displaying the list
     * 
     * @return void
     */
    public function browse()
    {
        $charactersList = Character::findAll();
        $this->show('character/browse', [
            'charactersList' => $charactersList,
        ]);
    }
}