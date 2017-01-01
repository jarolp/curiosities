<?php
function fib($arg){
    $arr=array(0,1); // INITIAL VALUE
    if($arg==1){ // if you display just one number of fibonacci numbers
        $result=$arr[0];
    } else if($arg==2){ // if you display just two numbers of fibonacci numbers
        $result=implode(', ',$arr);
    } else if($arg>2){ // if you display more numbers of fibonacci numbers
        for($i=2;$i<$arg;$i++){
            $arr[]=$arr[$i-1]+$arr[$i-2];
        }
        $result=implode(', ',$arr);;
    } else {// if you enter wrong number. Equal or less than 0
        $result="Wrong value. You can use just bigger than 0.";
    }
    print_r($result);
}
?>
<html>
    <head>
        <meta charset="utf8">
        <title>Gibonacci Number</title>
    </head>
    <body>
        <form action="fibonacci.php" method="GET">
            <input type="number" name="number" value="<?php echo isset($_GET['number']) ? $_GET['number'] : ""; ?>" />
            <button type="submit" name="submit">DISPLAY</button>
        </form>
        <?php if (isset($_GET['number'])){ ?>
        <p><?php echo $_GET['number']; ?> numbers of Fibonacci number:</p>
        <p><?php fib($_GET['number']); ?></p>
        <?php } ?>
    </body>
</html>