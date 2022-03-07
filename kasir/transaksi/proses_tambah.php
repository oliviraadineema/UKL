<?php
if ($_POST) {
    $id_member=$_POST['id_member'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $id_paket=$_POST['id_paket'];
    $qty=$_POST['qty'];
    $id_user=$_POST['id_user'];
    $id_transaksi=$_POST['id_transaksi'];
    $dibayar = $_POST['dibayar'];
    $status = $_POST['status'];
    if(empty($id_member)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($tgl)){
        echo "<script>alert('tgl tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($batas_waktu)){
        echo "<script>alert('Jenis kelamin tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($id_paket)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($qty)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($id_user)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='tambah.php';</script>";
    }



    else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into transaksi (id_member, tgl, batas_waktu, status, dibayar,id_user) value ('".$id_member."','".$tgl."','".$batas_waktu."','".$status."','".$dibayar."','".$id_user."')") or die(mysqli_error($conn));
        $insert2=mysqli_query($conn,"insert into detail_transaksi ( id_paket, qty) value ('".$id_paket."','".$qty."') ")  or die(mysqli_error($conn));
        $update=mysqli_query($conn,"update detail_transaksi set id_transaksi = LAST_INSERT_ID() WHERE id = LAST_INSERT_ID()") or die(mysqli_error($conn));
    
        if( $insert & $insert2 & $update){
            echo "<script>alert('Sukses transaksi');location.href='transaksi.php';</script>";
        }

        else {
            echo "<script>alert('Gagal transaksi');location.href='tambah.php';</script>";
        }
    }
}
?>