<?php 

include_once "./connection/cone.php";
$conne = connectiondatabase();

$sql = "SELECT * FROM product";
$result = $conne->query($sql);  

foreach ($result as $row) {

    
    $det= $row['details'] ;
    $pri= $row['price'] ;
     
}
?>


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Products</title>
</head>
<body>
<section class="projects" id="projects">
   
   <h2 class="title">Projects</h2>
   <div class="contant">
       <div class="project-card">
           <div class="img">
               <img src="img/pro1.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?></p>
               <strong class="project-title">
                   <span><?php echo $pri ?>   </span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
       <div class="project-card">
           <div class="img">
               <img src="img/pro2.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?></p>
               <strong class="project-title">
                   <span><?php echo $pri ?>   </span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
       <div class="project-card">
           <div class="img">
               <img src="img/pro3.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?></p>
               <strong class="project-title">
                   <span><?php echo $pri ?></span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
       <div class="project-card">
           <div class="img">
               <img src="img/pro1.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?> </p>
               <strong class="project-title">
                   <span><?php echo $pri ?>   </span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
       <div class="project-card">
           <div class="img">
               <img src="img/pro2.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?> </p>
               <strong class="project-title">
                   <span><?php echo $pri ?>  </span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
       <div class="project-card">
           <div class="img">
               <img src="img/pro3.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?> </p>
               <strong class="project-title">
                   <span><?php echo $pri ?>  </span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
       <div class="project-card">
           <div class="img">
               <img src="img/pro1.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?> </p>
               <strong class="project-title">
                   <span><?php echo $pri ?>   </span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
       <div class="project-card">
           <div class="img">
               <img src="img/pro1.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?> </p>
               <strong class="project-title">
                   <span><?php echo $pri ?></span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
       <div class="project-card">
           <div class="img">
               <img src="img/pro2.jfif" alt="">

           </div>
           <div class="info-prject">
               <p class="category"><?php echo $det ?></p>
               <strong class="project-title">
                   <span><?php echo $pri ?></span>
                   <a href="" class="more-details">More Details</a>

               </strong>

           </div>
           

           
           
       </div>
   </div>

</section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html> 
