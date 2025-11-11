<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .text-info{
        height: 100vh;
    }
</style>
<body>
    <div class="text-info bg-dark p-2">
        <h1 class="text-center m-3">Register Here</h1>
        <div class="container text-center bg-secondary w-50 p-4 my-4 rounded">
            <form action="{{route('registration')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-login my-3">
                    <input type="text" class="form-control my-2 w-50 m-auto" placeholder="Enter your name" name="name" required="required">
                </div>
                <div class="form-login">
                    <input type="tel" class="form-control my-2  w-50 m-auto" placeholder="Enter your mobile number" name="mobile" required="required">
                </div>
                <div class="form-login">
                    <input type="email" class="form-control my-2  w-50 m-auto" placeholder="Enter your email" name="email"  required="required"></div>
                    <div class="form-login">
                    <input type="password" class="form-control my-2  w-50 m-auto" placeholder="set your password" name="password"  required="required"></div>
                    <div class="form-login">
                    <input type="password" class="form-control my-2  w-50 m-auto" placeholder="confirm password" name="cpassword" v></div>
                    <div class="form-login">
                    <input type="file" class="form-control my-2  w-50 m-auto" name="photo" required="required"></div>
                <div class="form-login">
                    <select name="std" class="form-select my-2 w-50 m-auto"  required="required">
                        <option value="voter">Voter</option>
                        <option value="group">Group</option>
                        <!-- <option value="admin">Admin</option> -->
                    </select>
                </div>  
                <a href="{{route(name:'Welcome')}}" class="text-white">Back to Login page</a> 
                <button class="btn btn-primary m-3">Submit</button> 
                
            </form>
        </div>
    </div>
    <script src="js/custom.js"></script>
</body>
</html>