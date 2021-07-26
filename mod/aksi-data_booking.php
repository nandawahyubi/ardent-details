<?php 

    session_start();
    include '../koneksi.php';

    $id     = $_GET['id'];
    $query  = mysqli_query($koneksi, "SELECT * FROM tb_booking WHERE id_booking = '$id'");
    $row    = mysqli_fetch_assoc($query);

    if($query){
        if($row['status']==0){
            mysqli_query($koneksi,"UPDATE tb_booking SET status = 1 WHERE id_booking = '$id'");
            $_SESSION['sukses'] = 'Pesanan Telah Selesai Dikerjakan';
            header("location:data_booking.php");
            exit;
        } elseif($row['status']==1){
            echo "
                <script>
                    var link = document.getElementById('matikan');
        
                    function turn_off() {
                        var attr = document.createAttribute('class');
                        attr.value = 'disabled';                         
                        link.setAttributeNode(attr);
                        link.setAttribute('style', 'color: black;');
                    }         
                </script> 
            ";
    }
}

?>