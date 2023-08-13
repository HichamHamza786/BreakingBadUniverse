<?php 

namespace App\Controllers;

class CoreController
{
    /**
     * Method for displaying HTML code based on views
     * 
     * @param string $viewName File name of the view
     * @param array $viewData Array of data to be passed to the views
     * @return void 
     */

     protected function show(string $viewName, $viewData = [])
     {
        global $router;

        $viewData['currentPage'] = $viewName;
        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        $viewData['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewData);

        require_once __DIR__ . '/../views/layout/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/layout/footer.tpl.php';
     }
}