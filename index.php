<?php
    require_once("assest/php/component.php");
    require_once("assest/php/operation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOK</title>
    <link rel="stylesheet" href="assest/php/style.css">
  
     <!-- Bootstrape -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- GOOGLE FONTS -->
     <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
     <!-- FONT AWESOME -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   
     <!-- css -->
     
    <style media="screen">
     h6.error{
       background-color: orange;
       padding: 1rem;
       text-align: center;
     }
     h6.success{
       background-color: green;
       padding:1rem;
       text-align: center;
     }
     .d-flex button{
    margin: 1.5rem 0.5rem;
    padding: 0.3rem 1.4rem;
}
     </style>

      <!-- css -->
</head>
<body>
     <main>
       <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded ra"><i class="fas fa-swatchbook"></i>Book Store</h1>
         
         <div class="d-flex justify-content-center">
          <form action="" method="post" class="w-50">
            <div class="pt-2">
             <?php inputElement("<i class='fas fa-id-badge'></i>","ID","book_id",setID());?>
            </div>
            <div class="pt-3">
              <?php inputElement("<i class='fas fa-book'></i>","Book name","book_name","");?>
            </div>
            <div class="row pt-3">
              <div class="col">
                <?php inputElement("<i class='fas fa-people-carry'></i>","Publisher","book_publisher","");?>
              </div>
               <div class="col">
                <?php inputElement("<i class='fas fa-dollar-sign'></i>","Price","book_price","");?>
              </div>
            </div>
            <div class="d-flex justify-content-center">
             <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","Create","data-toggle='tooltip'data-placement='button'title='Create'");?>
             <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip'data-placement='button'title='Read'");?>
             <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip'data-placement='button'title='Update'");?>
             <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip'data-placement='button'title='Delete'");?>
             <?php deleteBtn();?>
            </div>
          </form>
         </div>
         <!--Bootstrape table-->
         <div class="d-flex table-data">
         <table class="table table-stripeed table-dark">
         <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>BookName</th>
                <th>Publisher</th>
                <th>Bookprice</th>
                <th>Edit</th>
            </tr>
         </thead>
         <tbody id="tbody">
          <?php 
              if(isset($_POST['read'])){
                $result= getData();

            if($result){
              while($row = mysqli_fetch_assoc($result)){?>

              <tr>
                 <td data-id="<?php echo $row['id'];?>"><?php echo $row['id'];?></td>
                 <td data-id="<?php echo $row['id'];?>"><?php echo $row['book_name'];?></td>
                 <td data-id="<?php echo $row['id'];?>"><?php echo $row['book_publisher'];?></td>
                 <td data-id="<?php echo $row['id'];?>"><?php echo '$'.$row['book_price'];?></td>
                 <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id'];?>"></i></td>
              </tr>

              <?php

              }
            }
          }
          ?>

         </tbody>
         </table>
         </div>
       </div>
     </main>













  <!-- javascript -->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src=assest/php/main.js></script>
</body>
</html>