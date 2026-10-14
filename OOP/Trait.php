<?php
trait T {
    public function method1() {
        echo "Method A from class A";
        echo "<br>";
    }
    public function method2() {
        echo "Method A from class A";
        echo "<br>";
    }
}
class A {
    use T;    
    public function method3() {
        echo "Method A from class A";
        echo "<br>";
    }
    public function method4() {
        echo "Method A from class A";
        echo "<br>";
    }
}
class B {
    use T;
    public function method3() {
        echo "Method A from class A";
        echo "<br>";
    }
}
class C {
    use T;
    public function method4() {
        echo "Method A from class A";
        echo "<br>";
    }
}
class D {
    use T;
}


$d1 = new D();
$d1->method1();
$d1->method2();
?>