<?php 
    require '../../functions.php';
    $id = $_GET["id"];

    if ( hapus($id) ){
        echo " 
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'menu_makanan.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'menu_makanan.php'
        </script>
        ";
    }
?>