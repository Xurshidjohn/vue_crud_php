<?php

    class User {
        private $uname;
        private $passwd;
        public function __construct($uname, $passwd) {
            $this->uname = $uname;
            $this->passwd = $passwd;
        }

        public static function setUname($uname) {
            $this->uname = $uname;
        };
        public static function setPasswd($passwd) {
            $this->passwd = $passwd;
        };
        public static function getUname() {
            return $this->uname;
        };
        public static function getPasswd($) {
            return $passwd;
        };
    }

?>