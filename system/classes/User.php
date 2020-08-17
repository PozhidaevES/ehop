<?php

class User {

    public $data;

    public function getData($link) {
        if(!$this->data){
            $result = mysqli_query($link,"SELECT * FROM core_users WHERE id=".$_COOKIE['user_id']);
            $user = mysqli_fetch_assoc($result); 
            $this->data = $user;
        }
        return $this->data;
    }
    
    public function getField($link,$field) {
        return ($this->getData($link))[$field];
    }
 
}