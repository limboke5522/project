<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="aa.css">
    <link rel="stylesheet"  href="a.js">

</head>
<body>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<button class="openbtn" onclick="openNav()">☰ Toggle Sidepanel</button>  
<h2>Collapsed Sidepanel</h2>
<p>Click on the hamburger menu/bar icon to open the sidepanel.</p>

<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
   
</body>
</html> 



             
                                                 

<?php 


$sql = "SELECT *FROM project";

$stm = $con->prepare($sql);

try{
    $stm->execute();

}catch(Exception $exc){
echo $exc->getTraceAsString();
}

while($row = $stm->fetch(PDO::FETCH_ASSOC)){
extract($row);
    
    


        

        
    
    
    
    
    
    
    
    ?>

    <tr align="center">
        
   
        <td><?php echo $id_pj; ?></td>
        <td><?php echo $do_no_pj; ?></td>
        
        <td><?php echo $list_pj; ?></td>
        <td><?php echo number_format($budget_pj,2   , '.'  , ','    ); ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $date_fillter; ?></td>
        

    



    
    </tr>


<?php  } ?>



</tbody>
</table>

<script>
function myFunction() {
window.open("form_insert/form_isert_reve.php","50%","50%","");
}</script>

<button class="w3-button w3-circle w3-black w3-right" onclick="myFunction()">+</button>


</div>





</div>



</div> <!-- /#page-content-wrapper -->