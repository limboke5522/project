
<link rel="stylesheet"  href="budget/bg.css">
<?php
include 'cn_db.php';

$strid=null ;
if(isset($_GET["id"]))
{
  $strid = $_GET["id"];
}


$sql = "SELECT * FROM project WHERE id_pj = ? ";
$params = array ($strid) ;

$stm= $con -> prepare($sql);
$stm->execute($params);

$result = $stm->fetch() ;
extract($result);

        $totalup=$budget_pj*$upfont/100;
        $sum=$budget_pj-$totalup;
 

?>
<div class="table-title" align="center">
        <h3>BUDGET TABLE</h3>
</div>

<div class="table-title" align="center">
        
</div>
<h5 class="aa">PROJECT:<?php echo $list_pj;?></h5>
<h5 class="aa">Balance:<?php echo number_format($sum,2   , '.'  , ','    );?></h5>

<table class="table-fill">
    <thead>
    <tr>
    <th class="text-left">ID</th>
    <th class="text-left">Documents NO.</th>
    <th class="text-left">List Budget</th>
    <th class="text-left">Deat</th>
    
    <th class="text-left">Revenue</th>
    <th class="text-left">Expenditure</th>
    
    <th class="text-left"></th>
  
    <th class="text-left"></th>
    </tr>
    </thead>




    <?php 
        

            $sql = "SELECT *FROM budget WHERE list_pj_bg='$list_pj'";

            $stm = $con->prepare($sql);

            try{
                $stm->execute();

            }catch(Exception $exc){
            echo $exc->getTraceAsString();
            }

            while($row = $stm->fetch(PDO::FETCH_ASSOC)){
            extract($row);
  ?>



        <tbody class="table-hover">
        <tr>
                <td><?php echo $id_bg; ?></td>
                <td><?php echo $du_no_bg; ?></td>
              
                <td><?php echo $list_bg; ?></td>
                <td><?php echo $date_bg; ?></td>
                <td><font color=“#CCFF00”><?php echo number_format($rv_bg,2   , '.'  , ','    ); ?></td>
                <td class="cc"><?php echo number_format($ex_bg,2   , '.'  , ','    ); ?></td>
                
                
                <td class="cc1"><a href="#">EDIT</a></td>
                
                <td class="cc1"><a href="#">DELETE</a></td>
        </tr>
        <?php  } ?>
        

                


        </tbody>
</table>
  

    
<script>
                   function myFunction() {
			            window.open("budget/form/from_insert_budget.php?name_pj=<?php echo $list_pj;?>","myWindow","width=800,height=600");
					      }</script>
<div class="bb">

                    
                    <button  class="w3-button w3-circle w3-teal " onclick="myFunction()">+</button>
</div>