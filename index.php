
<?php

// class Car{

//     public function __construct()
//     {
//         echo "This is constructor function <br>";
//     }

//     public function color()
//     {
//         echo 'Red <br>';
//     }

//     public function engine()
//     {
//         echo '4000cc <br>';
//     }

//     public function model()
//     {
//         echo 'BMH!1991 <br>';
//     }

//     public function breakingSystem()
//     {
//         echo 'Hydrolic <br>';
//     }

//     public function callFunction()
//     {
//         $this->engine();
//     }

//     public function __destruct()
//     {
//         echo "This is destructor function <br>";
//     }
// }

// class Calcultor {

//       public function sum($num1, $num2)
//       {
//          $result = $num1+$num2;
//          return $result;
//       }

//       public function subtraction($num1, $num2)
//       {
//            $result = $num1-$num2;
//            return $result;
//       }

//          public function multiplication($num1, $num2)
//       {
//            $result = $num1-$num2;
//            return $result;
//       }

//          public function divition($num1, $num2)
//       {
//            $result = $num1-$num2;
//            return $result;
//       }
// }



// $objectCar = new Car(); //object

// $objectCar->model();
// $objectCar->callFunction();
// $objectCar->breakingSystem();

// $objectCalculator = new Calcultor();

// echo $objectCalculator->sum(25, 25);

    class Parents{

        public function flat()
        {
            echo "18HK Flat <br>";
        }

        public function car()
        {
            echo "BMW Car <br>";
        }

        protected function bankAccount()
        {
            echo "Account Details YTYU876549 <br>";
        }

        private function diary()
        {
            echo "Personal Diary <br>";
        }

        public function useProperty()
        {
            $this->car();
            $this->bankAccount();
            $this->diary();
        }
    }

    class Child extends Parents{

        public function useParentProperty()
        {
            $this->flat();
            $this->bankAccount();
            // $this->diary();
        }

        public function bike()
        {
            echo "Royal Enfild";
        }
    }

    // $objectParent = new Parents();


    // $objectParent = new Parents();

    // $objectParent->bankAccount();
    // $objectParent->flat();

    $objectChild = new Child();

    $objectChild->car();
    $objectChild->useParentProperty();
    // $objectChild->bankAccount();
    // $objectChild->diary();

?>