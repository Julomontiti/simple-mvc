<?php

namespace Controller;

use Model\ItemManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class ItemController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }



    /**
 * @return string
* @throws \Twig_Error_Loader
* @throws \Twig_Error_Runtime
* @throws \Twig_Error_Syntax
*/public function index()
    {

        $itemManager = new ItemManager();

        $items = $itemManager->selectAllItems();

        return $this->twig->render('item.html.twig', ['items' => $items]);    }

    /**
* @param int $id
 * @return string
* @throws \Twig_Error_Loader
* @throws \Twig_Error_Runtime
* @throws \Twig_Error_Syntax
*/public function show(int $id)
    {
        $itemManager = new ItemManager();
        $item = $itemManager->selectOneItem($id);

        return $this->twig->render('showItem.html.twig', ['item' => $item]);
    }

}




?>


