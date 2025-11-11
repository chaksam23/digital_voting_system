<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Voting System</title>
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
        <h1 class="text-center m-4">Digital Voting System</h1>
        <div class="container text-center bg-secondary w-50 p-4 my-4 rounded">
            <h3 class="text-center text-white p-3">Login</h3>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-login">
                    <input type="text" class="form-control my-2 w-50 m-auto" name="voter_name" placeholder="Enter your name">
                </div>
                <div class="form-login">
                    <input type="tel" class="form-control my-2  w-50 m-auto" name="voter_phone" placeholder="Enter your mobile number">
                </div>
                <div class="form-login">
                    <input type="password" class="form-control my-2  w-50 m-auto" name="voter_password" placeholder="Enter your password"></div>
                <div class="form-login">
                    <select name="group" class="form-select my-2 w-50 m-auto">
                        <option value="voter">Voter</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>   
                <button class="btn btn-primary m-3">Login</button> 
            </form>
        </div>
        <p class="text-center text-white">Don't Have an Account?<a href=""> Forget password?</a></p>
        <p class="text-center text-white"><a href="{{route('registration')}}">Register Here</a></p>
    </div>
</body>
</html>