<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
      <div class="container">

        <h3><i class="fas fa-book text-white mr-2"></i></h3>
          <a class="navbar-brand font-weight-bold text-white " href="index.php">KUA Online</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-10 mr-5">
              <li class="nav-item active">
                <a class="nav-link text-white ml-4 mr-5" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-white mr-5" href="kua.php">About Us<span class="sr-only">(current)</span></a>
                <li class="nav-item active">
                <a class="nav-link text-white mr-5" href="form1.php">Registrasi Form<span class="sr-only">(current)</span></a>
              <li class="nav-item active">
                <a class="nav-link text-white mr-5" href="https://api.whatsapp.com/send?phone=62895366053139">FAQ<span class="sr-only">(current)</span></a>
              </li>
               <?php 
                 if (isset($_SESSION["registrasi"]))
                    {
                $idpelangganyanglogin = $_SESSION["registrasi"]["id_registrasi"];
                $ambil = $koneksi->query("SELECT * FROM registrasi WHERE id_registrasi='$idpelangganyanglogin'");
                $pecah = $ambil->fetch_assoc();
              }
                ?>
               <li class="nav-item active">
                <a class="nav-link text-white mr-5" href="akun.php?id=<?php echo $pecah['id_registrasi']; ?>">Akun Anda<span class="sr-only">(current)</span></a>
              </li>
              <?php if (isset($_SESSION["registrasi"])): ?> 
              <li class="nav-item active">
                <a class="nav-link text-white mr-5" href="logout.php">Logout<span class="sr-only">(current)</span></a>
              </li>
              <?php else: ?>
              <li class="nav-item active">
                <a class="nav-link text-white mr-5" href="sign.php">Login<span class="sr-only">(current)</span></a>
              </li>
            <?php endif ?>
            </ul>
           
              </h5>
            </div>
          </div>
        </div>
      </nav>
