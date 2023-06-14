<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $name=$_GET['name'];
    $up = mysqli_query($con, "select * from t_client where id =$name");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>modifie client</h2>
                <label for="a" > name</label>
                <input id="a" type="text" name='name'>
                <br>
                <label for="b" > prenom</label>
                <input id ="b" type="text" name='prenom'>
                <br>
                <label for="c" > tel</label>
                <input id="c" type="number" name='fen'>
                <br>
                <label for="d" > fax</label>
                <input id="d" type="number" name='fax'>
                <br>
                
                
                <button name='update' type='submit'>modifie</button>
                <br><br>
           
            </form>
        </div>
        <p>Developer By RAKWAN</p>
    </center>
</body>
</html>