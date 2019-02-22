
<link rel="stylesheet"  href="project/t.css">




<div class="table-title" align="center">
        <h3>PROJTECT TABLE</h3>
</div>
<table class="table-fill">
    <thead>
    <tr>
    <th class="text-left">ID</th>
    <th class="text-left">Documents NO.</th>
    <th class="text-left">List Project</th>
    <th class="text-left">Budget</th>
    <th class="text-left">Upfont</th>
    <th class="text-left">Balance</th>
    <th class="text-left">Date</th>
    <th class="text-left">Date_Fillter</th>
    <th class="text-left"></th>
    <th class="text-left"></th>
    <th class="text-left"></th>
    <th class="text-left"></th>
    </tr>
    </thead>



<?php 
        include 'cn_db.php';

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



        <tbody class="table-hover">
        <tr>
                <td><?php echo $id_pj; ?></td>
                <td><?php echo $do_no_pj; ?></td>
                
                <td><?php echo $list_pj; ?></td>
                <td> <font color=“#CCFF00”><?php echo number_format($budget_pj,2   , '.'  , ','    ); ?></td>
                <?php 
                if($upfont==0){
                        $up=0; ?>
                        <td class="cc"><?php echo number_format($up,2   , '.'  , ','    ); ?></td>

               <?php 
               $balance=$budget_pj-$up;
                ?>
                <td class="cc1"><?php echo number_format($balance,2   , '.'  , ','    ); ?></td>
        
                <?php }else{?>
               <?php
                $totalup=$budget_pj*$upfont/100;
                ?>
                <td class="cc"><?php echo number_format($totalup,2   , '.'  , ','    ); ?></td>
               <?php 

                $balance=$budget_pj-$totalup;
?>
                <td class="cc1"><?php echo number_format($balance,2   , '.'  , ','    ); ?></td>
              <?php  }
             ?>


            
                <td><?php echo $date_pj; ?></td>
                
                <td><?php echo $date_fillter; ?></td>
                <td class="cc1"><a href="#">EDIT</a></td>
                <td class="cc1"><a href="index.php?module=budget&action=budget_seletc&id=<?php echo $id_pj;?>">ADD BUDGET</a></td>
                <td class="cc1"><a href="index.php?module=budget&action=budget_seletc&id=<?php echo $id_pj;?>">TRANSFER</a></td>
                <td class="cc1"><a href="#">DELETE</a></td>
        </tr>
        <?php  } ?>
        

                


        </tbody>
</table>
  

    
<script>
                   function myFunction() {
			            window.open("project/form/from_insert_project.php","50%","50%","");
					      }</script>
<div class="bb">

                     
                    <button  class="w3-button w3-circle w3-teal " onclick="myFunction()">+</button>
</div>