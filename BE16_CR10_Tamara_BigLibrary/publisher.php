<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

require_once './action/db_connect.php';
$pub = $_GET["publisher_name"];
$sql = "SELECT * FROM Library WHERE publisher_name = '$pub'"; 
$result = mysqli_query($connect, $sql);

$tbody="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        
        $tbody .= "
        
            <div class='container col-4 nsl2 justify-content-center'>
              <div class='boox col-12 justify-content-center '>
                <a href='details.php?library_id=".$row['library_id']."'>
                  <img class='im-size' src='./pictures/" .$row['photo']."'>
                </a> 
              </div>
              <div class='text-center nsl2'>
                <a class='eddt' href='details.php?library_id=".$row['library_id']."'>
                  <h4>" .$row['title']."</h4>
                  <h4>" .$row['autor_first_name']."</h4>
                </a>
              </div>
            </div>
            
            
        
        
        
        
        ";
    };
}else {
    $tbody="
       <tr>
         <td> colspan='5' class='text-center'>Not Data </td>
        </tr>
    
    ";

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Publisher</title>
</head>
<body class="bbc">
    
    <?php require_once 'components/nav.php' ?>

    <div class="container">   
    

    <div id="items">

      <div class="row text-center dit">
      
        
        <div class="col-12 row justify-content-center">
           <h1 class="text-center"><?php echo $pub; ?></h1>

              <?php
                echo $tbody; 

              ?>

        </div>




      </div>

    </div>
    </div>
      





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
