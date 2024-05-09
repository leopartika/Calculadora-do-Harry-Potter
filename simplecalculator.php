<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";
    
    if(isset($_POST['num']))
    {
        $num=$_POST['input'].$_POST['num'] ;
    }
    else{
        $num="";
    }
    if(isset($_POST['op'])){
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time() + (86400*30), "/");

        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time() + (86400*30), "/");

        $num="";
    }
    if(isset($_POST['equal'])){
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result= $_COOKIE['num'] + $num;
                break;

            case "-":
                $result= $_COOKIE['num'] - $num;
                break;
            case "*":
                $result= $_COOKIE['num'] * $num;
                break;
            case "/":
                $result= $_COOKIE['num'] / $num;
                break;
        }
        $num=$result;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url(https://th.bing.com/th/id/R.c398f5022160e250cae4c76446debb67?rik=vCMC03N6KPwWog&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fJE3MV9I.jpg&ehk=dZZ6aXj32chjg5S7XCmg8nX3X1XJ010aO4QdwqxypjA%3d&risl=&pid=ImgRaw&r=0);
            background-size: cover;
            background-position: center;
        }
        .maininput{
            font-size: 80px;
            color: whitesmoke;
            font-weight: 400;
        }
        .calc{
            margin: auto;
            background-color: rgb(29, 3, 71);
            border: 2px solid whitesmoke;
            width: 28.5%;
            height: 550px;
            border-radius: 20px;
            box-shadow: 10px 10px 40px;
            
        }
        .maininput{
            background-color: black;
            border: 1px solid grey;
            height: 115px ;
            width: 98.2%;
            font-size: 80px;
        }
        .numbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: rgb(212, 0, 255);

        }
        .numbtn:hover{
            background-color: rgb(221, 147, 221);
            color: whitesmoke;
        }
        .calbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: orange;

        }
        .calbtn:hover{
            background-color: rgb(187, 146, 71);
            color: whitesmoke;
        }
            
        .c{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: red;


        }
        .c:hover{
            background-color: rgb(177, 74, 74);
            color: whitesmoke;
        }
        .equal{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: green;

        }
        .equal:hover{
            background-color: rgb(79, 160, 79);
            color: whitesmoke;
        }

    </style>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"> <br> <br>
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+"> <br>
            <input type="submit" class="numbtn" name="num" value="4"> 
            <input type="submit" class="numbtn" name="num" value="5"> 
            <input type="submit" class="numbtn" name="num" value="6"> 
            <input type="submit" class="calbtn" name="op" value="-"> <br>
            <input type="submit" class="numbtn" name="num" value="1"> 
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="calbtn" name="op" value="*"> <br>
            <input type="submit" class="c" name="num" value="c">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="op" value="/">



            




        </form>
    </div>
    
</body>
</html>