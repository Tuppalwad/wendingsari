<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>WendingSari</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-YOUR-INTEGRITY-CHECKSUM" crossorigin="anonymous" />

</head>

<body>





  <div class="bg-light">
    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/wendingsari">
          Wedding<span class="text-danger">Sari</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/wendingsari">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Products
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/wendingsari/KuratPaijama.php" target="_self">
                    Kurta Pajama
                  </a></li>
                <li><a class="dropdown-item" href="/wendingsari/Sherwani.php" target="_self">
                    Sherwani
                  </a></li>

                <li>
                  <a class="dropdown-item" href="/wendingsari/Sari.php" target="_self">
                    Saris
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/wendingsari/ContactUs.php" target="_self">
                Contact Us
              </a>
            </li>
          </ul>
          <form class="d-flex">
            <i class="fa fa-cart-shopping"></i>

            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
  </div>


  <div class=" container">
    <!-- all contanc infor her  -->
    <div class="row">
      <div class="col-sm-6 text-center">
        <!-- addres detail and contac detail  -->
        <h2 style=" margin-top:100px;">Address</h2>
        <p> New Delhi, India</p>
        <p>Phone: +91 1234567890</p>
        <p>Email: example@gmail.com </p>
      </div>
      <div class="col-sm-6">
        <!-- google map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.880508821434!2d77.5945623144069!3d12.971598990854748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!
          4f13.1!3m3!1m2!1s0x3bae167b0c0dfe5d%3A0x4d4d0a3d9c3a3a9c!2sSri%20Kanteerava%20Outdoor%20Stadium!5e0!3m2!1sen!2sin!4v162697
          7888804!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div>
    </div>
  </div>

  <!-- form  -->
  <div>
    <h2 class="text-center my-5">Contact Us</h2>
  </div>

  <div class=" container my-5">
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
          Message
        </label>
        <!-- textarea  -->
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>