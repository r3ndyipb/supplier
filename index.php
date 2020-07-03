<?php
    include "class/connection.php";
    include "class/supplier.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Supplier</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
<body>
<section class="page-section" id="tengah" style="padding-left:100px; padding-right:100px;">

<?php

$sql="SELECT * FROM keu_5klsupplier";

$fetch= mysql_query($sql) or die(mysql_error());


?>
    <div style="padding-bottom:20px;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#formTambah">Tambah Kelompok</button>
    </div>
    <table class="table table-striped">
    <thead class="thead-light">
        <tr>
        <th scope="col">Kode</th>
        <th scope="col">Nama</th>
        <th scope="col">No Akun</th>
        <th scope="col">Tipe</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while( $row = mysql_fetch_assoc($fetch) ){
            echo '<tr>
                <th scope="row">'.$row['kodeklp'].'</th>
                <td>'.$row['namaklp'].'</td>
                <td>'.$row['noakun'].'</td>
                <td>'.$row['tipe'].'</td>
                <td>
                    <a href="#" onClick="kirim('.  "'".$row['kodeklp']."'" . ",'".$row['namaklp']."'" . ",'".$row['noakun']."'" . ",'".$row['tipe']."'" .')" id="linkEdit">Edit</a> -
                    <a href="eksekusi.php?action=delete&id='.$row['kodeklp'].'">Delete</a>
                </td>
                </tr>';
        }
    ?>
    </tbody>
    
</section>

<div class="modal fade" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="formTambahLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formTambahLabel">Tambah Kelompok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="eksekusi.php" method="post">
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama :</label>
            <input name="nama" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">No Akun :</label>
            <?php listAkun(); ?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tipe :</label>
            <?php tipeSupplier(); ?>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>

<div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="formEditLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formEditLabel">Tambah Kelompok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="eksekusi.php" method="post">
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kode :</label><br/>
            <input id="kode" name="kode" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama :</label>
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">No Akun :</label>
            <?php listAkun(); ?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tipe :</label>
            <?php tipeSupplier(); ?>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>

        <script>
            function kirim(kode, nama, noakun, tipesupplier){

                $("#kode").val( kode );
                $("#nama").val( nama );
                
                var objSelectNoAkun = document.getElementById("noakun");
                $('[name=noakun] option').filter(function() { 
                    return ($(this).text() == noakun); //To select Blue
                }).prop('selected', true);

                var objSelectSupplier = document.getElementById("tipesupplier");
                for (var i = 0; i < objSelectSupplier.options.length; i++) {
                    if (objSelectSupplier.options[i].value == tipesupplier) {
                        //alert(objSelectSupplier.options[i].value);
                        objSelectSupplier.options[i].selected = true;
                    }
                }

                $('#formEdit').modal('show');
            }
        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html> 


</table>