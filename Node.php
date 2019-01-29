<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 29/01/2019
 * Time: 08:58
 */

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}