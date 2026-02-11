<?php
//task A2
// $name="user";
// echo $name."<br>";
// echo var_dump($name)."<br>";
// $age=25;
// echo $age."<br>";
// echo var_dump($age)."<br>";
// $weight=56.7;
// echo $weight."<br>";
// echo var_dump($weight)."<br>";
// $bool=true;
// echo $bool."<br>";
// echo var_dump($bool)."<br>";
// $foods=array("pizza","Burger","chicken");
// print_r($foods);
// print_r(var_dump($name)."<br>"); 

?>
<?php
// local scope
greet();
function greet(){
    $name="raj";//local variable
    echo "good morning $name<br>";
}

// global scope
// $gv=20;
function fun(){
    global $gv;
    echo "global variable:$gv";
}
// fun();
// static scope
function hello(){
    static $count=0;
    $count++;
    echo $count."<br>";

}
hello();
hello();
// echo "count:$count";//no access
?>