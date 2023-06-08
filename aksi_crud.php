<?php
include "koneksi.php";
//Create
if (isset($_POST['bsimpan'])) {
    # code...
    $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat, prodi)
                                                    VALUES ('$_POST[tnim]',
                                                    '$_POST[tnama]',
                                                    '$_POST[talamat]',
                                                    '$_POST[tprodi]')");
    if ($simpan) {
        # code..
        echo "<script>
                alert('tambah data sukses!');
                document.location='index.php';
            </script>";
    } else {
        # code...
        echo "<script>
                alert('tambah data gagal!');
                document.location='index.php';
            </script>";
    }
}

//Update
if (isset($_POST['bupdate'])) {
    # code...
    $update = mysqli_query($koneksi, "UPDATE tmhs SET 
                                      nim = '$_POST[tnim]',
                                      nama = '$_POST[tnama]',
                                      alamat = '$_POST[talamat]',
                                      prodi = '$_POST[tprodi]'
                                      WHERE id_mhs = '$_POST[id_mhs]'
                                      ");
    
    
    if ($update) {
        # code..
        echo "<script>
                alert('update data sukses!');
                document.location='index.php';
            </script>";
    } else {
        # code...
        echo "<script>
                alert('update data gagal!');
                document.location='index.php';
            </script>";
    }
}

//Delete
if (isset($_POST['bdelete'])) {
    # code...
    $delete = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs = $_POST[id_mhs]");
    
    
    if ($delete) {
        # code..
        echo "<script>
                alert('hapus data sukses!');
                document.location='index.php';
            </script>";
    } else {
        # code...
        echo "<script>
                alert('hapus data gagal!');
                document.location='index.php';
            </script>";
    }
}