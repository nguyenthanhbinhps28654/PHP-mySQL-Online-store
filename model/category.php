<?php
    include_once 'connectDB.php';
    function category_getAll(){
        $conn=connect();
        $sql="SELECT * FROM DanhMuc";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
?>