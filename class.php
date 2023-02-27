<?php
    // class User {
    //     public $first_name;
    //     public $last_name;
    //     public $full_name;

    //     public function __construct($first, $last) {
    //         $this->first_name = $first;
    //         $this->last_name = $last;
    //     }
    
    //     public function __toString() {
    //         return "User [first = '$this->first_name', last=$this->last_name]";
    //     }        
    // }

    class Fruit {
        // Properties 
        public $name;
        public $color;

        // Methods
        public function set_name($name) {
            $this->name = $name;
        }

        public function get_name() {
            return $this->name;
        }
    }

    // class User
    // $user_1 = new User('Gary', 'Prayudi');
    // echo $user_1;

    // class Fruit
    $apple = new Fruit();
    $banana = new Fruit();    

    // $apple->name = "Apel Malang";
    // echo $apple->name;
    // echo "<br><br>";

    $apple->set_name('Apple', 'Red');
    echo $apple->get_name();
    echo "\n\n";

    $banana->set_name('Banana', 'Yellow');
    echo $banana->get_name();
?>