<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../asset/css/profile.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <?php 
          include "../proses/koneksi.php";
          $qry_user=mysqli_query($conn,"select * from user");
          session_start();
    ?>
    <div class="container-fluid" data-aos="zoom-in" data-aos-duration="1000">
        <div class="row justify-content-center">
            <div class="col-11 col-md-3 col-sm-10 col-xs-10">
                <div class="card py-3 py-md-3">
                    <div class="d-flex px-3 px-md-4 margin1">
                        <div class="align-self-baseline" data-aos="flip-right" data-aos-delay="1000" data-aos-duration="500">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.png" height="70px" width="70px" class="rounded-circle">
                        </div>
                        <div class="ml-3 margin" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="800">
                            <h6 class="text-white" > Nama :  <?=$_SESSION['nama']?></h6>
                            <p class="text-white"> Userame :  <?=$_SESSION['username']?></p>
                            <p class="text-white"> Email : <?=$_SESSION['email']?></p>
                            <p class="text-white"> Telephoe : <?=$_SESSION['telp']?></p>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="d-flex justify-content-center"> <a href="home.php" class="d-flex text-white font-weight-bold">Back ></a> </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>