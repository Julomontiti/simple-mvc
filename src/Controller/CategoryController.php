<?php
/**
 * Created by PhpStorm.
 * User: wilder13
 * Date: 09/10/18
 * Time: 14:31
 */

namespace Controller;

use Model\CategoryManager;
use Model\ItemManager;


class CategoryController
{
    public function index()
    {

        $categoryManager = new CategoryManager();

        $categories = $categoryManager->selectAllCategories();

        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        require __DIR__ . '/../View/showCategory.php';
    }

}