<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .bbt {
            padding-bottom: 2rem;
        }
    </style>
</head>
<body class="bbc">
    


    <?php require_once 'components/nav.php' ?>

      <div class="container" style="padding-top:4rem;">
        <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center">
            <div class="col">
                    <h3 class="text-center text-light bbt">Add your product</h3>
                <fieldset>
                    <form action="action/a_create.php" method="post" enctype="multipart/form-data">
                        <table class="table text-light">
                            <tr>
                                <th>Name</th>
                                <td><input class='form-control' type="text" name="title" placeholder="Product Name" /></td>
                            </tr>    
                            <tr>
                                <th>ISBN/EAN</th>
                                <td><input class='form-control' type="number" name= "isbnean" placeholder="Price" step="any" value="0" /></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td><input class='form-control' type="text" name="type" placeholder="Type" /></td>
                            </tr> 
                            <tr>
                                <th>Autor first name</th>
                                <td><input class='form-control' type="text" name="autor_first_name" placeholder="first" /></td>
                            </tr>   
                            <tr>
                                <th>Autor last name</th>
                                <td><input class='form-control' type="text" name="autor_last_name" placeholder="last" /></td>
                            </tr>     
                            <tr>
                                <th>Publisher name</th>
                                <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" /></td>
                            </tr>       
                            <tr>
                                <th>Publisher address</th>
                                <td><input class='form-control' type="text" name="publisher_addres" placeholder="Publisher Address" /></td>
                            </tr>      
                            <tr>
                                <th>Publisher date</th>
                                <td><input class='form-control' type="number" name="publisher_date" placeholder="Publisher Date" value="0" /></td>
                            </tr>       
                            <tr>
                                <th>Availability</th>
                                <td><input class='form-control' type="text" name="status" placeholder="Status" /></td>
                            </tr>      
                            <tr>
                                <th>Short description</th>
                                <td><input class='form-control' type="text" name="short_description" placeholder="Short Description" /></td>
                            </tr>     
                            <tr>
                                <th>Picture</th>
                                <td><input class='form-control' type="file" name="photo" /></td>
                            </tr>
                            <tr>
                                <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                                <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
          </div>

      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
