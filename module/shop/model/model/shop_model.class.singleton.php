<?php
    // include( BLL_HOME . "home_bll.class.singleton.php");
    
    class shop_model {

        private $bll;
        private $db;
        static $_instance;
        
        function __construct() {
            $this -> bll = shop_bll::getInstance();
            $this -> db = db::getInstance();
        }

        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        public function get_allcars($args) {
            // return 'hola model';
            // return $this -> bll -> get_allcars_BLL();
            return $this -> bll -> get_allcars_BLL($args);

        }

        public function get_details($args) {
            return $this -> bll -> get_details_BLL($args);
        }

        public function get_filters($args) {
            // return 'hola filters';
            return $this -> bll -> get_filters_BLL($args);
        }

        public function get_visitorcount($args) {
            return $this -> bll -> get_visitorcount_BLL($args);
        }
        public function get_count_cars_related($args) {
            return $this -> bll -> get_count_cars_related_BLL($args);
        }
        public function get_cars_related($args) {
            return $this -> bll -> get_cars_related_BLL($args);
        }
        public function get_count() {
            return $this -> bll -> get_count_BLL();
        }
        public function get_count_filters_home($args) {
            return $this -> bll -> get_count_filters_home_BLL($args);
        }
        public function get_count_filters_shop($args) {
            return $this -> bll -> get_count_filters_shop_BLL($args);
        }
        public function get_count_filters_search($args) {
            return $this -> bll -> get_count_filters_search_BLL($args);
        }
        // public function get_control_likes() {
        //     return $this -> bll -> get_control_likes_BLL();
        // }
        // public function get_load_likes_user() {
        //     return $this -> bll -> get_load_likes_user_BLL();
        // }

    }
?>