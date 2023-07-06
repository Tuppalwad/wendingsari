<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>WendingSari</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-YOUR-INTEGRITY-CHECKSUM" crossorigin="anonymous" />

    <style>
      h1,
      p {
        font-family: "Times New Roman", Times, serif;
      }

      .mainbox {
        background-image: url("Assets/saree.webp");
        background-size: cover;
        background-position: center;
        height: 400px;
      }
      .buynowbtn {
        margin-left: 399px;
        width: 202px;
        margin-top: 185px;
        height: 61px;
      }
      .content {
            flex-grow: 1;
        }
    </style>
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
             <i class="fa fa-cart-shopping mt-2 me-2"></i>

            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
  </div>


    <!-- section heading page  -->
    <div class="container mainbox my-3">
      <div class="row">
        <div
          class="col-md-6 d-flex align-items-start flex-column"
          style="margin-top: 100px"
        >
          <button class="btn btn-primary buynowbtn">
            <h3>Buy Now</h3>
          </button>
        </div>
        <div class="col-md-6">
          <div class="image-container"></div>
        </div>
      </div>
    </div>

    <!-- slider section  -->
    <section class="container">
      <div class="container">
        <h1 class="text-center my-3">Shop By <span class="text-danger">Occasion</span></h1>
      </div>

      <div class="container">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-4">
                  <img
                    src="Assets/1.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 1"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/11.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 2"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/12.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 3"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/13.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 4"
                  />
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-4">
                  <img
                    src="Assets/18.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 5"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/7.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 6"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/6.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 7"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/16.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 8"
                  />
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-4">
                  <img
                    src="Assets/8.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 5"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/9.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 6"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/12.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 7"
                  />
                </div>
                <div class="col">
                  <img
                    src="Assets/15.jpeg"
                    class="d-block w-100 h-75"
                    alt="Image 8"
                  />
                </div>
              </div>
            </div>
            <!-- Add more carousel items with four images each as needed -->
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- section heading page  -->
    <div class="container" style="margin-top: -60px">
      <div>
        <h1 class="text-center">
          Shop By <span class="text-danger ms-2">Style</span>
        </h1>
      </div>

      <div>
        <p class="text-center">
           
        </p>
      </div>

      <!-- show all product image and price and buy now button  -->
       <div class="container mx-auto">
         <div class="row"style="margin-left: 85px;">
            <div class="col-md-4">
            <div class="card" style="width: 18rem">
                <img src="Assets/1.jpeg" class="card-img-top" alt="..." />
                <div class="card-body text-center">
                <h5 class="card-title">Saree 1</h5>
                <p class="card-text">
                    Shop Trending Bollywood Sarees Online
at Indian Wedding Saree. 
                </p>
                <a href="#" class="btn btn-primary text-center">Buy Now</a>
                </div>
            </div>
            </div>
    
            <div class="col-md-4">
            <div class="card" style="width: 18rem">
                <img src="Assets/2.jpeg" class="card-img-top" alt="..." />
                <div class="card-body text-center">
                <h5 class="card-title">Saree 2</h5>
                <p class="card-text">
                   Shop beautiful Reception Sarees online
at Indian Wedding Saree.
                </p>
                <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
            </div>
    
            <div class="col-md-4">
            <div class="card " style="width: 18rem">
                <img src="Assets/3.jpeg" class="card-img-top" alt="..." />
                <div class="card-body text-center">
                <h5 class="card-title">Saree 3</h5>
                <p class="card-text">
                    Buy Traditional Sarees with beautiful
prints, colors & patterns. 
                </p>
                <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
            </div>
             

    </div>
       </div>





    <!-- footer section  -->
  <div class="container-fluid w-100  bg-secondary bg-gradient my-3">
     <footer class="container-fluid bg-secondary bg-gradient text-white py-4 my-3">
    <div class="row">
        <div class="col-md-6">
            <h5>Contact Us</h5>
            <p>Email: info@example.com</p>
            <p>Phone: 123-456-7890</p>
        </div>
        <div class="col-md-6">
            <h5>Follow Us</h5>
            <ul class="list-inline">
                <li class="list-inline-item" style="list-style: none;"><a href="#" class="text-white" style="text-decoration: none;">Facebook</a></li>
                <li class="list-inline-item" style="list-style: none;"><a href="#" class="text-white" style="text-decoration: none;">Twitter</a></li>
                <li class="list-inline-item" style="list-style: none;"><a href="#" class="text-white" style="text-decoration: none;">Instagram</a></li>
            </ul>
        </div>
    </div>
</footer>

  </div>




    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
