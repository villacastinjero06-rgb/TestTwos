
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tupas</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(135deg, #e0eafc, #cfdef3);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
    }

    .container {
        background-color: #ffffff;
        padding: 40px 50px;
        border-radius: 15px;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        text-align: center;
        width: 350px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    }

    h2 {
        color: #333;
        margin-bottom: 25px;
        font-weight: 600;
        position: absolute;
        top: 200px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    input {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #ccc;
        font-size: 16px;
        text-align: center;
        transition: 0.3s;
    }

    input:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
        outline: none;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
        transform: scale(1.03);
    }

    /* Result text */
    .result p {
        font-size: 20px;
        font-weight: bold;
        margin-top: 20px;
        text-align: center;
        padding: 20px 20px;
        border-radius: 8px;
    } 

    .grade.A {
        color: #28a745;
        background-color: #d4edda;
        border: 1px solid #28a745;
        text-align: center;
    }
    .grade.B {
        color: #17a2b8;
        background-color: #d1ecf1;
        border: 1px solid #17a2b8;
    }

    .grade.C {
        color: #ffc107;
        background-color: #fff3cd;
        border: 1px solid #ffc107;
    }

    .grade.F {
        color: #dc3545;
        background-color: #f8d7da;
        border: 1px solid #dc3545;
    }

    .grade.invalid {
        color: #6c757d;
        background-color: #e2e3e5;
        border: 1px solid #6c757d;
    }
    </style>
</head>
<body>
<h2>ENTER YOUR GRADES</h2>

<form method="post">
    <input type="Number" name="grades" placeholder="Enter grades" require>
    <button type="Submit" name="check">Check Grade</button>
</form>

<?php
if (isset($_POST["check"])) {
    $score = $_POST["grades"];

    if ($score >= 90 && $score <= 100) {
        echo "<p class='grade A'>Grade A</p>";
    }
    else if ($score >= 80 && $score <= 99) {
        echo "<p class='grade B'>Grade B</p>";
    }
    else if ($score >= 75 && $score <=79) {
        echo "<p class='grade C'>Grade C</p>";
    }
    else if ($score < 75) {
        echo "<p class='grade F'>Grade F</p>";

    }
    else {
        echo "<p class='grade invalid'>Invalid</p>";
    }

} 

?>




</body>
</html>