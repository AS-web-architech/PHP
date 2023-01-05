<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-size: 32px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    
</head>
<body>
    <center>
     <h1>PHP calculator:</h1>
    
     <form action="form.php" method="post">
      <label for="fnum">first number:</label>
      <input type="number" name="Fnum" placeholder="enter first number " ><br><br>
      <label for="snum">second number:</label>
      <input type="number"name="Snum" placeholder="enter second number " ><br><br>
      <label for="operation">select operator:</label>
      <select  name="operate"  >
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mod">%</option>
        <option value="divide">/</option>
        <option value="multiply">*</option>

      </select><br><br>
       <input type="submit" name="sbmit" value="submit" >

    </form>

    <h2>
        <?php       
        $num1=$_POST['Fnum'];
        $num2=$_POST['Snum'];
        $op=$_POST['operate'];
        switch($op){
            case  "add" :
                echo "the sum of num1 and num2 is ".$num1+$num2;
            break;
                case 'sub':
                echo "the sub of num1 and num2 is ".$num1-$num2;
            break;

            case 'mod':
                echo "the reminder of num1 and num2 is ".$num1%$num2;
            break;

            case 'multiply':
                echo "the multiplication of num1 and num2 is ".$num1*$num2;
            break;

            case 'divide':
                echo "the division of num1 and num2 is ".$num1/$num2;    
            break;
            default:
            echo "invalid operation";

        }


        

        
        
        
        
        
        ?>
    </h2>

   </center>    

</body>
</html>