<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        margin: 100px;
        padding: 0;
        background: rgb(233, 231, 231);
      }
      .form_center{
        text-align: center;
      }
      .review{
        height:100px;
        width: 300px;
        /* border: 2px solid black; */
      }
      .button{
        font-weight: 600;
        font-size:1rem;
        height: 30px;
        width: 100px;
        background: rgb(255, 191, 0);
        color: white;
      }
    </style>
</head>
<body>
    <!-- index.html -->
<form class = "form_center" action="store_text.php" method="post">
  <label for="customer_txt"><h3>Write A Review Of The Product<h3></label>
  <input id = "customer_txt" class = "review" type="text" name="user_text" >
  <br>
  <br>
  <input class = "button" type="submit" value="Submit">
</form>

</body>
</html>