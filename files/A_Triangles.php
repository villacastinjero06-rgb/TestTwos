<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle's Perimeter</title>

    <style>
        .BOX { 
            border: solid 4px;
            border-radius: 15px;
            background-color: lightblue;
            text-align: center;
            margin: auto;
            width: 430px;
            height: 510px;
            padding: 15px 20px 25px;
        }

        .box {
            text-align: center;
            border: solid 2px black;
            border-radius: 25px;
            height: 150px;
            width: 200px;
            padding: 9px 20px 20px;
            margin: 50px auto;
        }

        input[type="number"] {
            font-size: 25px;
            border: solid 1px;
            border-radius: 3px;
            font-family: "Times New Roman", Times, serif;
            padding: 3px;
        }

        .formula {
            font-size: 25px; 
            font-family: 'Cambria Math', serif; 
            font-style: oblique;
        }

        .design {
            display: inline-block; 
            border: 3px solid; 
            padding: 10px; 
            font-size: 20px;
            background-color: #92c8feff; 
            text-align: left;
        }
    </style>
</head>
<body style="background-color: #a3c7cbff;">
    <div class="BOX">
        <a style="font-size: 30px;"> 
            Triangle's Perimeter 
        </a>

        <h3 style="font-style: oblique; font-size: 25px;">
            Formula:
        </h3>

        <p class="formula"> 
            P= a+b+c 
        </p> 
        
        <form action="Triangles.php" method="post">
            <a style=" font-size: 30px; font-style: oblique;">
                A side:
            </A>
            <input type="number" name="a_side" placeholder="Enter Value" step="any" required> 
            <input type="submit" hidden> <br>
            <br>

            <a style=" font-size: 30px; font-style: oblique;">
                B side:
            </A>
            <input type="number" name="b_side" placeholder="Enter Value" step="any" required>
            <input type="submit" hidden> <br>
            <br>
            
            <a style=" font-size: 30px; font-style: oblique;">
                C side:
            </A>
            <input type="number" name="c_side" placeholder="Enter Value"  step="any" required>
            <input type="submit" hidden> <br>

            <br>
        </form>

        <p>
            <div class="design">
                <?php
                    $a=$_POST['a_side'] ?? 0;
                    $b=$_POST['b_side'] ?? 0;
                    $c=$_POST['c_side'] ?? 0;
                    
                    $x= $a+$b+$c;

                    echo "RESULT in meters:". "<br>";

                    echo "<br>";

                    if($a == $a and $b == $b and $c == $c) {
                        echo "
                            P= a + b + c <br>
                            P= $a". "m + ". $b. "m + ". $c. "m <br>
                            P= $x
                        ";
                    } else {
                        echo "Invalid";
                    }
                ?>
            </div>
            
        </p>
    </div>
</body>
</html>