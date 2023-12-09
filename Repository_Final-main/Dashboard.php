<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <form id="L" mothod="post">
        <select name="All_Catagories"></select>
        <option value="Catagories A"></option>
        <option value="Catagories B"></option>
        <option value="Catagories C"></option>
        <option value="Catagories D"></option>
   </form>

</body>
</html>
<?php
    if(isset($_POST['All_Catagories'])) {
        echo "Selected All_Catagories: ".htmlspecialchars($_POST['All_Catagories']);
    }
?>