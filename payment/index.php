<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
        }
        :root{
        --text-color :rgb(23, 21, 21);
        }
        body{
        display: flex;
        min-height: 100vh;
        background-color: rgb(245, 164, 177);
        align-items: center;
        justify-content: center;
        }
        .container{
         width: 350px;
         background: #fff;
         padding: 30px;
         position: relative;
        }
        h6{
        font-size: 20px;
        color: var(--text-color);
         }
    </style>
</head>
<body>
    <h3>Payment Information</h3>
    <br>
    <form action="pay.php" method="post">
        Price: <input type="text" name="price" value="200">
        <br>
        <br>
        Name: <input type="text" name="customername">
        <br>
        <br>
        Email: <input type="email" name="email">
        <br>
        <br>
        Contact No: <input type="text" name="contactno">
        <br>
        <br>
        <input type="submit" name="submit" value="Proceed To Pay">
</form>
</body>
</html>