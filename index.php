
<h3>Class 19/11/2021</h3>
<p><b>Topic</b>: <span style="color: blue; font-weight: 200; font-size: 20px;">Object oriented Programming(class & Object with instance, Propeties & method, calling of properties and method inside & outside a class, Pass data to a method, Docblock for a class, Static properties $ method nad its uses)</span></p>
<?php

    /**
     * student feature system with class, objest, properties and method
     */

    class Student{
        public $name = 'Uzma Surwat';
        public $age = 40;
        public $skill = 'php dev';

        /**
         * info method for student informations
         */

        public function info(){
            echo "My name is {$this ->name}. I am {$this ->age} years old. People call me as a {$this ->skill}. <br>";
        }
            /**
             * write your relevant comment.
             */
        public function dev (){
            echo $this -> info();
        }
            /**
             * write your relevant comment.
             */
        public function food ($food1, $food2, $food3 = NULL){
            if($food3 != NULL){
                echo "I want to eat {$food1}, {$food2} and {$food3} for this winter. <br>";
            }
            else{
                echo "I want to eat {$food1} and {$food2} for this winter. <br>";
            }
            
        }
    }
        //calling properties
        $stu = new Student;
        //echo $stu->name;
        //echo $stu->age;
        //echo $stu->skill;
        

        //calling methods
       echo $stu -> info();
       // echo $stu -> dev();
       // echo $stu -> food();
        echo $stu -> food('khau suey', 'moon cake');
        echo $stu -> food('broath soup', 'toast', 'apple pie');

?>
<br><br> <hr><br><br>

<?php

/**
 * staff management
 */
class Staff{

    public $name = 'Usurwat';
    public $age = 32;
    public $edu = 'BSc';
    public $location = 'Dhaka';
    public $cell = '01700000000';

    /**
     * staff info
     */

     public static function info(){

        return 'I am a good staff. <br>';

     }

     public static function ageCal($dateofbirth){

        echo date('Y') - $dateofbirth;

     }

     
}

echo Staff::info();
echo Staff::ageCal(1979);

?>
<br><br> <hr><br><br>

<h3>Class 20+21/11/2021</h3>
<p><b>Topic</b>: <span style="color: blue; font-weight: 200; font-size: 20px;">Object oriented Programming(class & Object with instance to traits)</span></p>

<?php

    /**
     * defining Student class features
     */

    class Students{

        //variables for object

        public $name = 'Uzma Surwat ';
        public $age = 23 ;
        public $edu = ' ICSE';

        /**
         * age calculating function
         */

         public function ageCal($name, $edu, $year){

            $age = date('Y') - $year;

            return  "<br> {$name} passed her {$edu} at the age of {$age}. <br>";

         }


          /**
         * gpa calculating function
         */

        public function gpa($marks, $sub){
            return "{$this->name}, you got {$marks} marks in {$sub}. <br>";
             
        }


    }

    $stu = new Students;

    echo $stu-> name;
    echo $stu-> age;
    echo $stu-> edu;

    echo $stu -> ageCal('Surwat', 'ICSE', 2007);
    echo $stu -> gpa(45, 'Science');


?><br><br> <hr><br><br> 
<h2 style="color: blue; font-weight: 600; font-size: 25px;">Static Properties & method, :: means scope resolution operator</h2><br><br>

<?php


    /**
     * Staff properies setup
     */
    class SchoolStaff{

        public static function info(){

            return 'I am a school staff. <br>';
        }        
    }

    echo SchoolStaff::info();
?><br><br> <hr><br><br> 
<h2 style="color: blue; font-weight: 600; font-size: 25px; text-transform: capitalize;">Extends / inheritance</h2><br><br>

<?php


class A{

    public function info(){
        return 'I am A class info. <br><br>';
    }

    public function danger(){
        return 'I am A class danger. <br><br>';
    }

    public function primary(){
        return 'I am A class primary. <br><br>';
    }


}


class B extends A{
    public function oop(){
        return 'I am B class oop. <br><br>';
    }

}

class C extends B{
    public function warning(){
        return 'I am C class warning. <br><br>';
    }

}


 $a = new A;

 echo $a ->info();
 echo $a ->danger();
 echo $a ->primary();

$b = new B;
 echo $b ->info();
 echo $b ->danger();
 echo $b ->primary();

 $c = new C;

 echo $c -> oop();
 echo $c -> info();
 



?><br><br> <hr><br><br>

<h2 style="color: blue; font-weight: 600; font-size: 25px; text-transform: capitalize;">Over riding method, parent::method()</h2><br><br>

<?php


class P{

    public function apple(){
        return 'I am A class apple. <br><br>';
    }

    public function oppo(){
        return 'I am A class oppo. <br><br>';
    }

    public function vivo(){
        return 'I am A class vivo. <br><br>';
    }
}


class Q extends P{
    public function samsung(){
        return 'I am B class samsung. <br><br>';
    }

}

class R extends Q{
    public function realme(){
        return 'I am C class realme. <br><br>';
    }

}

class S extends R{
    public function vivo(){
        return 'I am D class vivo. <br><br>';
    }

    public function techno(){
        return parent::vivo();
    }

}

 $p = new P;

 echo $p ->apple();
 echo $p ->oppo();
 echo $p ->vivo();

$q = new Q;
 echo $q ->apple();
 echo $q ->oppo();
 echo $q ->vivo();

 $r = new R;
 echo $r -> samsung();
 echo $r -> apple();

 $s = new S;
 echo $s -> vivo();
 echo $s -> techno();

 

?><br><br> <hr><br><br>
<h2 style="color: blue; font-weight: 600; font-size: 25px; text-transform: capitalize;">abstract class & method</h2><br><br>
<?php


abstract class M {
    public function infor(){

        return 'I am from M class. <br><br>';
    }

}

class N extends M {

}

$n = new N;
echo $n -> infor();

?><br><br> <hr><br><br>

<h2 style="color: blue; font-weight: 600; font-size: 25px; text-transform: capitalize;">abstract class with static method</h2><br><br>
<?php


abstract class H {
    public static function hunt(){

        return 'I am from H hunt group. <br><br>';
    }

}

class G extends H {

}


echo G::hunt();

?><br><br> <hr><br><br>

<h2 style="color: blue; font-weight: 600; font-size: 25px; text-transform: capitalize;">Final class N method can never inherit any "extend"</h2><br><br>
<?php
 class Alpha{

    public static function home(){
        return 'Alpha home.  <br>';
    }

 }
 $alp = new Alpha;
 echo $alp ->home();

 

?><br><br> <hr><br><br>

<h2 style="color: blue; font-weight: 600; font-size: 25px; text-transform: capitalize;">Access Modifier-> PUBLIC</h2><br><br>

<?php

    class D{

        public function find(){
            return 'D class find. <br>';
        }

    }

    class E extends D{
        public function test(){
            return parent::find() . "I am from E class <br>";
        }

    }

    $d = new D;
    $e = new E;
    echo $d-> find();
    echo $e-> find();
    echo $e-> test();
?><br><br> <hr><br><br>

<h2 style="color: blue; font-weight: 600; font-size: 25px; text-transform: capitalize;">Access Modifier-> PRIVATE</h2><br><br>

<?php

    class Fi{

        private function find(){
            return 'Fi class find. <br>';
        }

    }

    //class Gi extends Fi{
       // public function test(){
          //  return parent::find() . "I am from Gi class <br>";
       // }
//
 //   }

   // $fi = new Fi;
   // $gi = new Gi;
   // echo $fi-> find();
   // echo $gi-> find();
    //echo $gi-> test();
?> remains as private, no visibility<br><br> <hr><br><br>

<h2 style="color: blue; font-weight: 600; font-size: 25px; text-transform: capitalize;">Access Modifier-> PROTECTED</h2><br><br>

<?php
class U{

        protected function find(){
            return 'U class find. <br>';
        }

    }

    class V extends U{
        public function test(){
            return parent::find() . "I am from V class <br>";
        }

    }

    //$u = new U;
    $v = new V;
    //echo $u-> find();
    //echo $v-> find();
    echo $v-> test();
?><br><br> <hr><br><br>

<h2 style="color: blue; font-weight: 600; font-size: 25px; ">Constructor | Destructor (built-in method, can be used only once in a class)</h2><br><br>

<?php
class Library{

    public function __construct(){
        echo "Book shelf construct. <br>";
    }

    public function __destruct(){
        echo "Book shelf destruct. <br>";
    }


    public function book(){
        return "Book shelf <br>";
    }
}

$lib = new Library;
echo $lib-> book();

?><br><br> <hr><br><br>
<h2 style="color: blue; font-weight: 600; font-size: 25px; ">Interface & Implement</h2><br><br>

<?php

interface Rule{

    public function play($name, $location);
    public function work();
}

interface Solution{
    public function sys();
}


class Alishba implements Rule, Solution{
    public function play($name, $location){

    }
    public function work(){

    }
    public function sys(){

    }

}

class Nida implements Rule, Solution {
    public function play($name, $location){

    }
    public function work(){

    }
    public function sys(){

    }

}

?><br><br> <hr><br><br>
<h2 style="color: blue; font-weight: 600; font-size: 25px; ">Trait</h2><br><br>
<p><b>note:</b> <i>A class can extend with another class once. It cannot add further classes same for extend. To add more class the word "class" is exchanged as "trait", to use them further for  the same extend.<br> Add innumerous trait and use them with extends.</i></p>

<?php

class Pen{

}
trait Ruler{

    public function sing(){
        return "I sing from Trait. <br>";
    }

    public function dance(){
        return "I dance for Trait. <br>";
    }

}

trait Eraser{

    public function clip(){
        return "I clip Trait. <br>";
    }

    public function paste(){
        return "I paste Trait. <br>";
    }

}


class Paper extends Pen{
    use Ruler;
    use Eraser;
}

$pa = new Paper;
echo $pa -> sing();
echo $pa -> dance();
echo $pa -> clip();
echo $pa -> paste();

?><br><br> <hr><br><br>
  


