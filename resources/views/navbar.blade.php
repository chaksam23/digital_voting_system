<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .top-bar {
        background-color:red;
    }
    .navbar a{
        color: white;
        text-decoration: none;
        font-size: 13px;
    }
    
</style>
<body>
    <section>
        <div class="container-fluid top-bar">
            <div class="row">
                <div class="col-md-3 col-sm-12"> 
                    <div class="navbar">
                        <a href="">Home</a>
                        <a href="/">About us</a>
                        <a href="/">Gallery</a>
                        <a href="{{route('create')}}">Create</a>
                        <a href="{{route('view')}}">View</a>
                    </div>
                 </div>
            </div>
        </div> 
     </section>
    <section>
        @yield('content')
    </section>
    <script src="js/custom.js"></script>
</body>
</html>