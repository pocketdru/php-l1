<?php

class User {
    public $first_name;
    public $last_name;
    public $email;

    public static $created = 0;

    public function __construct ($email, $first, $last = "") {
        $this->first_name = $first;
        $this->last_name = $last;
        $this->email = $email;

        self::$created += 1;
    }

    public function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

    public function setImageUrl($url) {
        $this->imageUrl = $url;
    }
    // class SubUser extends User {
    //     function __construct() {
    //         parent::__construct();
    //         print "In SubClass constructor\n";
    //     }
    // }

    public static function getCreated() {
        return self::$created;
    }
}