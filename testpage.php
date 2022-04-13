<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen">
    <title>Document</title>
</head>

<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>

      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2">Login</button>
        <button type="button" class="btn btn-warning">Sign-up</button>
      </div>
    </div>
  </div>
</header>

<body>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div id="text">
    <p id="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo semper pellentesque. Duis malesuada posuere justo eget faucibus. Sed ac finibus magna, sed rhoncus dolor. Donec efficitur, lorem non vulputate egestas, dui sem vehicula elit, eu tempor metus velit a libero. Maecenas dictum sapien quis porta convallis. Phasellus euismod libero a venenatis malesuada. Pellentesque feugiat accumsan risus, et hendrerit orci feugiat eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ipsum ex, pellentesque eget dui vestibulum, aliquet sodales urna. In hac habitasse platea dictumst. Curabitur eget tincidunt nulla. Nunc rutrum justo at nibh venenatis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac interdum turpis. Pellentesque vitae ultricies arcu.</p>
    <p id="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo semper pellentesque. Duis malesuada posuere justo eget faucibus. Sed ac finibus magna, sed rhoncus dolor. Donec efficitur, lorem non vulputate egestas, dui sem vehicula elit, eu tempor metus velit a libero. Maecenas dictum sapien quis porta convallis. Phasellus euismod libero a venenatis malesuada. Pellentesque feugiat accumsan risus, et hendrerit orci feugiat eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ipsum ex, pellentesque eget dui vestibulum, aliquet sodales urna. In hac habitasse platea dictumst. Curabitur eget tincidunt nulla. Nunc rutrum justo at nibh venenatis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac interdum turpis. Pellentesque vitae ultricies arcu.</p>
    <p id="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo semper pellentesque. Duis malesuada posuere justo eget faucibus. Sed ac finibus magna, sed rhoncus dolor. Donec efficitur, lorem non vulputate egestas, dui sem vehicula elit, eu tempor metus velit a libero. Maecenas dictum sapien quis porta convallis. Phasellus euismod libero a venenatis malesuada. Pellentesque feugiat accumsan risus, et hendrerit orci feugiat eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ipsum ex, pellentesque eget dui vestibulum, aliquet sodales urna. In hac habitasse platea dictumst. Curabitur eget tincidunt nulla. Nunc rutrum justo at nibh venenatis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac interdum turpis. Pellentesque vitae ultricies arcu.</p>
    <p id="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo semper pellentesque. Duis malesuada posuere justo eget faucibus. Sed ac finibus magna, sed rhoncus dolor. Donec efficitur, lorem non vulputate egestas, dui sem vehicula elit, eu tempor metus velit a libero. Maecenas dictum sapien quis porta convallis. Phasellus euismod libero a venenatis malesuada. Pellentesque feugiat accumsan risus, et hendrerit orci feugiat eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ipsum ex, pellentesque eget dui vestibulum, aliquet sodales urna. In hac habitasse platea dictumst. Curabitur eget tincidunt nulla. Nunc rutrum justo at nibh venenatis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ac interdum turpis. Pellentesque vitae ultricies arcu.</p>
  </div>
</body>

<div class="container">
  <footer class="row row-cols-5 py-5 my-5 border-top">
    <div class="col">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <p class="text-muted">© 2021</p>
    </div>

    <div class="col">

    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>
  </footer>
</div>

</html>