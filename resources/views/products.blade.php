{{-- <!-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($product as $item)
    <h3>{{ $item['flavor'] }}</h3>
    <p>{{ $item['desc'] }}</p>
@endforeach --> --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            
        </style>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Product</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">The Product</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="/homepage">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/products">Product</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/4d7fe055414069.598321395ee09.png" width="100px" alt="..." />
                <h1 class="text-white fs-3 fw-bolder">Welcome to List of Products</h1>
                <p class="text-white-50 mb-0">This page help you to know what product you want to show</p>
                
            </div>
        </header>
        @foreach ($products as $item)
        <!-- Content section-->
        <section class="py-5">
            
        </section>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <center>
                            <h3>{{ $item['productName'] }}</h3>
                        <div class="image_Grid">
                            <div class="Image_G"><img src="{{ $item['img'] }}" alt=""></div>
                        </div>
                        <h2>{{ $item['productNumber'] }}</h2>
                        <p class="lead">{{ $item['desc'] }}</p>
                        <button class="btn" onclick="myFunction()">Buy</button>
                        <p class="lead" id="demo">{{ $item['function'] }}</p>
                    </center>
                    </div>
                </div>
            </div>

        
        </section>

        @endforeach

                    </div>
                </div>
            </div>
        </section>
        

        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; The Product 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
           function myFunction() {
            var txt;
            if (confirm("Press a button!")) {
            } 
  
}
            </script>
    </body>
</html>


