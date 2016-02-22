<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 22.02.2016
 * Time: 17:38
 */

namespace App\Controllers;


use App\View;

class News
{

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
        // echo 'Счетчик';
    }

    protected function actionIndex()
    {
        $this->view->title = 'Мой крутой сайт!';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }
} 