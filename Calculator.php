
 <!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>PHP Calculator</title>

<style>
p {
  font-size: 12px;
}
.alert {
  color: red;
}
</style>
</head>

<body>


<h2>calculator</h2>
<br>
  <form action=" " method="POST">
      <input type="text" name="num1Inserted" required>
     
      <select name="calInserted">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
        <option value="mudo">%</option>

      </select>

      <input type="text" name="num2Inserted" required>

      <button type="submit">Calculate</button>
  </form>


</body>

</html>

<?php

class Calculator {

    public $num1;
    public $num2;
    public $cal;

    public function dataValue($num1Inserted, $num2Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->cal = $calInserted;
    }

    public function calcMethod() {
     
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # code...
     
        switch ($this->cal) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'sub':
            $result = $this->num1 - $this->num2;
            break;
        case 'mul':
            $result = $this->num1 * $this->num2;
            break;
        case 'div':
            $result = $this->num1 / $this->num2;
            break;
        case 'mudo':
            $result = $this->num1 % $this->num2;
            break;

        default:
            $result = "Error";
            break;
      }
      return $result;
    }
}

}



$num1 = $_POST['num1Inserted']?? '';
$num2 = $_POST['num2Inserted']?? '';
$cal = $_POST['calInserted']?? '';

$calculator = new Calculator;
$calculator->dataValue($num1,$num2,$cal);
echo $calculator->calcMethod();

 ?>