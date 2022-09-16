<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
    .side_bar a {
        text-decoration: none;
        color: #fff;
    }
    </style>
  </head>
  <body>
    <div class="row" >
        <div class="side_bar  col-2 bg-primary text-light ">
            <div class="container mb-3">
                <img src="{{PUBLIC_URL}}images/logo.png" class="img-fluid"  alt="">
            </div>
            <div class="container">
                <div class="mb-3">
                    <a href="{{BASE_URL . '/admin'}}">Admin</a>
                </div>
                <div class="mb-3">
                    <a href="{{BASE_URL . '/admin/category'}}">Category</a>
                </div>
                <div class="mb-3">
                    <a href="{{BASE_URL . '/admin/product'}}">Product</a>
                </div>
                
                <div class="mb-3">
                    <a href="{{BASE_URL . '/'}}">Back</a>
                </div>
            </div>
        </div>
        <div class="col-10 bg-primary bg-gradient text-dark bg-opacity-25">
            @yield('main-admin')
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>