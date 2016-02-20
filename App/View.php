<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 20.02.2016
 * Time: 18:11
 */

namespace App;


class View
    implements \Countable
{

    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function render($template)
    {
        ob_start();
        $title = $this->title;
        $users = $this->users;

        foreach($this->data as $prop => $value) {
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    /**
     * @param $template string путь к шаблону
     */
    public function display($template)
    {
        echo $this->render($template);
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count()
    {
        return count($this->data);
    }
}