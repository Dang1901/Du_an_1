<?php
    $sql = "select count(maHH) from hanghoa";
    $productQty = getOne($sql);
    $undefineQty = getOne("select count(maHH) from hanghoa where maLoai = 0");
    $result =hanghoa();
    $result1 = loadalldanhmuc();
    $dataPoints = [];
    $dataPoints1 = [];
    function countProInBrand($id){
        $sql = "select count(maLoai) from hanghoa where maLoai = $id ";
        $result2 = connect($sql);
        return $result2;
    }

   foreach($result as $row){
       array_push($dataPoints,array(
           "label"=>$row['tenHH'],
           "y"=>$row['gia']
        ));
    }
    foreach($result1 as $row){
        array_push($dataPoints1,array(
            "label" => $row['tenLoai'],
            "y" => 25
         ));
     }

?>
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Trang Chủ</p>
        
      
        
 