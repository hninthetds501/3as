<h1 style="font-family:sans-serif">PHP Calculator</h1>
<form method="get">
	<p>
		Enter number1: <input type="number" name="num1">
	</p>
	<p>
        Enter number2: <input type="number" name="num2">
	</p>
	<p>
		<select name="sign">
			<option value="+">Addition</option>
			<option value="-">Substraction</option>
			<option value="*">Multiplication</option>
			<option value="/">Division</option>
		</select>
	</p>
	<p>
		<input type="submit" value="Calculate" name="btn">
	</p>
</form>
<?php 
	if(isset($_GET['btn'])){
		// echo "<pre>";
		// print_r($_GET);

		$num1=(int)$_GET['num1'];
		$num2=(int)$_GET['num2'];
		$sign=$_GET['sign'];

        if($num1 && $num2){
            switch($sign){
                case '+':
                    echo "Addition of $num1 and $num2 is ".($num1+$num2);
                    break;
                case '-':
                    echo "Substraction of $num1 and $num2 is ".($num1-$num2);
                    break;
                case '*':
                    echo "Multiplication of $num1 and $num2 is ".($num1*$num2);
                    break;
                case '/':
                    echo "Division is of $num1 and $num2 ".($num1/$num2);
                    break;
            }
        }
        else{
            echo "<h1>Please enter two numbers!</h1>";
        }
		
	}

 ?>