<?php
include '../cn_db.php';

$doc_no= $_POST['doc_no'];
$list= $_POST['list'];
$amountbud= $_POST['amountbud'];
$upfont= $_POST['upfont'];
$date= $_POST['date'];
$date_filter= $_POST['date_filter'];


// $ext = pathinfo(basename($_FILES['pro_reve']['name']), PATHINFO_EXTENSION);
// $new_pdf_name = 'pro_'.uniqid().".".$ext;
// $pro_path = "../pro/";
// $upload_path = $pro_path.$new_pdf_name;


// //uploading

// 	//if($ext==".pdf"){

// 		$success = move_uploaded_file($_FILES['pro_reve']['tmp_name'], $upload_path);
// 		if ($success==FALSE) {
// 				echo "<script>alert('Files ไม่ถูกต้อง');</script>";
// 		echo "<script>window.location='insert_reve.php'</script>";
// 		exit();
// 		}

// 	//}else{
// 		//echo "File ไม่ถูกต้อง";
// 	//}

// $pro_reve = $new_pdf_name;

//insert ข้อมูล
$sql1="INSERT INTO project( do_no_pj,list_pj, budget_pj, upfont, date_pj, date_fillter) VALUES (:p1,:p2,:p3 ,:p4,:p5,:p6)";
$stm=$con->prepare($sql1);
$stm->bindParam(':p1',$doc_no);
$stm->bindParam(':p2',$list);
$stm->bindParam(':p3',$amountbud);
$stm->bindParam(':p4',$upfont);
$stm->bindParam(':p5',$date);
$stm->bindParam(':p6',$date_filter);



try{
    $stm->execute();
    echo "<script>window.opener.location.reload()</script>";
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";

    echo "<script>window.close();</script>";
} catch(Exception $exc){
    echo $exc->getTraceAsString();
}


?>