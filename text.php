<?php 
$info=array(
    array('name'=>'mohamed','info'=>'mmmmmmmmm'),
    array('name'=>'ali','info'=>'zzzzzzzzz'),

); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="" method="post">
<textarea name="txt" id="" cols="30" rows="10"></textarea><br>

  <input type="submit" value="update" name="update">
  </form>
  
</body>
</html>
<?php 
echo "<table width=100% border='1'>
<tr>
<th>Name</th>
<th>other</th>
</tr>
<tr>";
for ($i=0; $i <count($info) ; $i++) { 
   echo "<td>{$info[$i]['name']}</td>
         <td>{$info[$i]['info']}</td> 
         </tr>";
         if (isset($_POST['update'])){
            //echo ;
            $info[$i]['info']=$_POST['txt'];
            echo 
           " <tr><td>




           
            {$info[$i]['info']}
            </td>";
         
          "</tr>";
          }
          
         
}
 echo "</table>";






?>