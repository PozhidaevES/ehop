<?php

namespace Nordic;

abstract class Unit {

    public $id;
    public $data;

    public function __construct($id) {

        $this->id = $id;

    }

    public abstract function setTable();

    public function getData() {

        if(!$this->data) {
            $link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

            mysqli_set_charset($link , "utf8");

            $result = mysqli_query($link,"SELECT * FROM ".$this->setTable()." WHERE id=".$this->id);
            $user = mysqli_fetch_assoc($result); 
            $this->data = $user;
        }

        return $this->data;

    }

    public function getField($field) {
        return ($this->getData())[$field];
    }
}