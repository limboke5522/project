<?php
include '../cn_db.php';

$list_pj_bg= $_POST['list_pj_bg'];
$doc_no= $_POST['doc_no'];
$list= $_POST['list'];
$revenue= $_POST['revenue'];
$expenditure= $_POST['expenditure'];
$date= $_POST['date'];



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
$sql1="INSERT INTO budget(list_pj_bg, du_no_bg, list_bg, rv_bg, ex_bg, date_bg) VALUES (:p1,:p2,:p3,:p4,:p5,:p6)";
$stm=$con->prepare($sql1);
$stm->bindParam(':p1',$list_pj_bg);
$stm->bindParam(':p2',$doc_no);
$stm->bindParam(':p3',$list);
$stm->bindParam(':p4',$revenue);
$stm->bindParam(':p5',$expenditure);
$stm->bindParam(':p6',$date);





try{
    $stm->execute();
    echo "<script>window.opener.location.reload()</script>";
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";

    echo "<script>window.close();</script>";
} catch(Exception $exc){
    echo $exc->getTraceAsString();
}


?>