<?php
echo "<p></p>","---------------------------------------------------------------------","<p></p>";
//session_start();
//$param1 = $_GET["param1"];
//$param2 = $_GET["param2"];
//$res = $param1 + $param2;
//$res1 = $param1 - $param2;
//$res2 = $param1 * $param2;
//$res3 = $param1 / $param2;
//$data= array('p1'=>$param1,'p2'=>$param2, 'res'=>$res, 'res1'=>$res1, 'res2'=>$res2, 'res3'=>$res3);
//$jsonString = json_encode($data);
//echo $jsonString;
//echo "test";
//echo "<p></p>";
//print("test");
//echo "<h1>Privet, server</h1>";
//
//$p = "servis";


//$data= array('p1'=>10,'p2'=>14);
//$sum1=0;
//foreach ($data as $key=>$value) {
//    echo $key.": ".$value."<br>";
//    $sum1+=$value;
//}
//echo "Сумма 1 цикла = ",$sum1;
//
//echo "<p></p>","---------------------------------------------------------------------","<p></p>";
//
//$sum2=0;
//$arr = array(1,2,3,4,5,6,7,8,9);
//for($i=0;$i<count($arr);$i++){
//    echo $arr[$i]."<br>";
//    $sum2+=$arr[$i];
//}
//echo "<p></p>","Сумма 2 цикла = ",$sum2;
//
//
//$a = 23;
//$b = 34;
//$c = 12;
//
//
//if ($a <= $b && $a <= $c) {
//    // $a самый маленький
//    $min = $a;
//    if ($b <= $c) {
//        // $b средний, $c самый большой
//        $mid = $b;
//        $max = $c;
//    } else {
//        // $c средний, $b самый большой
//        $mid = $c;
//        $max = $b;
//    }
//} elseif ($b <= $a && $b <= $c) {
//    // $b самый маленький
//    $min = $b;
//    if ($a <= $c) {
//        // $a средний, $c самый большой
//        $mid = $a;
//        $max = $c;
//    } else {
//        // $c средний, $a самый большой
//        $mid = $c;
//        $max = $a;
//    }
//} else {
//    // $c - самый маленький
//    $min = $c;
//    if ($a <= $b) {
//        // $a средний, $b самый большой
//        $mid = $a;
//        $max = $b;
//    } else {
//        // $b средний, $a самый большой
//        $mid = $b;
//        $max = $a;
//    }
//}
//echo "<p></p>",'Минимальное = ',' ',$min,' ','среднее = ',$mid,' ','Максимальное = ',$max;
//
//echo "<p></p>","---------------------------------------------------------------------","<p></p>";
//$sum3=0;
//
//$kv_array =[
//    [1,2,3],
//    [4,5,6],
//    [7,8,9]
//];
//for($i=0;$i<count($kv_array);$i++){
//    for($j=0;$j<count($kv_array[$i]);$j++){
//    $sum3+=$kv_array[$i][$j];
//    echo $kv_array[$i][$j]."<br>";
//    }
//}
//echo $sum3;
?>


<!--<h1>Privet,--><?php //echo $p; ?><!--</h1>-->


<?php
//                                24.02.2026
?>


<?php
echo "<p></p>","---------------------------------------------------------------------","<p></p>";


/**
 * 1
 * создать функцию вычесления квадрата числа, без использование встроеной функции
 *
 * 2
 * создать функцию,  которая определяет наибольшее знвечение из двух числе , без использование встроеной функции
 *
 * 3
 * создать функцию которая принимает в аргументе массив , определяет максимальный элемент и возращает его
 *
 * 4
 * создаь функцию которая вычесляет площадь круга или квадрата по заданым параметрам
 *
 * 5
 * создать функцию которая определяет длину Ассоциативного масива
 *
 */

//function kvadrata($w){
//    $otvet1=$w*$w;
//    return$otvet1;
//}echo'Ответ на 1 задание = ' , kvadrata(5) , "<br>";
//
//function naibolshee($one, $tvo){
//    if ($one <= $tvo) {
//        echo 'Ответ на 2 задание = ' , $tvo ,' больше чем ',$one, "<br>";
//    } else {
//        echo 'Ответ на 2 задание = ' , $one ,' больше чем ',$tvo, "<br>";
//    }
//}naibolshee(5,10);
//
//$array=[1,5,7,9,15,12,10];
//function max_array_chislo($a) {
//    echo'Ответ на 3 задание  = ' , max($a) , "<br>";
//}max_array_chislo($array);
//
//function kvadrata_ploshad($w){
//    $otvet1=$w*$w;
//    return$otvet1;
//}echo'Ответ на 4 задание Площаль квадрата = ' , kvadrata_ploshad(10) , "<br>";
//
//
//
//
//
//$words = array(
//    "red" => "красный",
//    "blue" => "синий",
//    "green" => "зеленый"
//);
//function lens_woeds($f){
//    return var_dump(sizeof($f));
//} echo 'Ответ на 5 задание длина Ассоциативного масива = ' , lens_woeds($words);
//
//

?>

<!--//                                02.03.2026                -->

<?php


//class Plus{
//    public $a =5;
//    public $b =3;
//    public function Plus(){
//        echo '1 овтет сложение = ',$this->a ,'+',$this->b,' = ',$this->a+$this->b, "<br>";
//
//    }
//}
//$obj_plus= new Plus;
//echo $obj_plus->Plus();
//
//
//class Umno{
//    public $a =2;
//    public $b =3;
//    public function Umnoj(){
//        echo '2 овтет умножение = ',$this->a ,'*',$this->b,' = ',$this->a*$this->b, "<br>";
//
//    }
//}
//$obj_plus= new Umno;
//echo $obj_plus->Umnoj();
//$foo = "пример";
//echo "пример — это $foo"; // пример — это пример



//
//class Person{
//    public $name;
//    public $fam;
//    public $otches;
//    public $age;
//    public $mas;
//    public $rost;
//    function __construct($name,$fam,$otches,$age,$mas,$rost){
//        $this->name = $name;
//        $this->fam = $fam;
//        $this->otches = $otches;
//        $this->age = $age;
//        $this->mas = $mas;
//        $this->rost = $rost;
//
//        $index_mas_tela =$this->mas/($this->rost*$this->rost);
//        echo 'Ваш индекс массы тела ='.$index_mas_tela, "<br>";
//
//
//        if ($index_mas_tela < 16) {
//            echo "выраженный дефицит массы тела", "<br>";
//        }if ($index_mas_tela >=16.9) {
//            echo "недостаточная масса (умеренный дефицит)", "<br>";
//        }if ($index_mas_tela >=18.4) {
//            echo "недостаточная масса (лёгкий дефицит)", "<br>";
//        }if ($index_mas_tela >=24.9) {
//            echo "нормальная масса тела", "<br>";
//        }if ($index_mas_tela >=29.9 ) {
//            echo "избыточная масса тела (предожирение)", "<br>";
//        }if ($index_mas_tela >=34.9) {
//            echo "избыточная масса тела (предожирение)", "<br>";
//        }if ($index_mas_tela >=39.9) {
//            echo "ожирение II степени", "<br>";
//        }elseif ($index_mas_tela >=40) {
//            echo "ожирение III степени (морбидное)", "<br>";
//        }
//
//        echo "<p></p>","---------------------------------------------------------------------","<p></p>";
//        echo "Менее 16.0 — выраженный дефицит массы тела","<br>",
//            "16.0–16.9 — недостаточная масса (умеренный дефицит)","<br>",
//            "17.0–18.4 — недостаточная масса (лёгкий дефицит)","<br>",
//            "18.5–24.9 — нормальная масса тела","<br>",
//            "25.0–29.9 — избыточная масса тела (предожирение)","<br>",
//            "30.0–34.9 — ожирение I степени","<br>",
//            "35.0–39.9 — ожирение II степени","<br>",
//            "≥40.0 — ожирение III степени (морбидное)";
//    }
//
//    function __destruct(){
//        echo "<p></p>",'Программа завершила свои потсчеты';
//
//    }
//}
//
//$obj_plus= new Person('Danila','shishov','Pavlovitch',19,52,1.75);




//class Kryg{
//    public $r;
//    const PI=3.14;
//
//    public function __construct($r){
//        $this->r=$r;
//    }
//    public function per(){
//        return self::PI*($this->r*$this->r);
//    }
//
//}
//$obj=new Kryg(5);
//print $obj->per();

?>

<?php










?>


