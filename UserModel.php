<?php

    class User {
        private $uname;
        private $passwd;
        public function __construct($uname, $passwd) {
            $this->uname = $uname;
            $this->passwd = $passwd;
        }

        public  function setUname($uname) {
            $this->uname = $uname;
        }
        public  function setPasswd($passwd) {
            $this->passwd = $passwd;
        }
        public function getUname() {
            return $this->uname;
        }
        public function getPasswd() {
            return $this->passwd;
        }
    }

?>