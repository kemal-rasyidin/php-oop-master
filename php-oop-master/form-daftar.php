<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford Registrasi Warga</title>
</head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    body {
        background-image: url(https://images.unsplash.com/photo-1468581264429-2548ef9eb732?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .container {
        width: 40rem;
    }
    </style>
<body>

<br>
    <div class="container">
        <div class="card shadow border-0">
            <form action="index.php" method="POST">
    
            <h4 class="text-center card-header bg-primary text-light text-center py-4">Input Data Warga</h4>
            
            <div class="form-group p-4">

            <label for="no_ktp" class="mt-3">No KTP :</label>
            <input type="text" name="no_ktp" id="no_ktp" class="form-control">
    
            <label for="nama_lengkap" class="mt-3">Nama Lengkap :</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
    
            <label for="alamat_lengkap" class="mt-3">Alamat :</label>
            <input type="text" name="alamat_lengkap" id="alamat_lengkap" class="form-control">
    
            <label for="no_hp" class="mt-3">Telepon :</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control mb-4">
    
            <input class="btn btn-success ml-auto" type="submit" name="daftar" value="Daftar">
            
            </form>
        </div>
        </div>
    </div>
    <br>

    <!-- <div class="container">
   
    <div class="row">
        <div class="col-md-8">
        <h2>Form Registrasi Warga</h2>
        <hr>
        <form action="index.php" method="post">
        <table class="table table-bordered">
            <tr>
                <th colspan="2">Biodata Pribadi</th>
                
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td> <input class="form-group" type="text" name="no_ktp" id="no_ktp"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input class="form-group" type="text" name="nama_lengkap" id="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td> <input class="form-group" type="text" name="alamat_lengkap" id="alamat_lengkap"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input class="form-group" type="text" name="no_hp" id="no_hp"></td>
            </tr>
            <tr>
                <td colspan="2"> <button class="btn btn-success" name="daftar" type="submit">Daftar </button></td>
                
            </tr>
        </table>
      
       
        </form>

        </div>
    </div>
    </div> -->
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>