<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<style>
    .text-info{
        height: 100vh;
        text-align: center;
    }
</style>
<body>
    <div class="text-info bg-dark p-5 m-5">
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
                <button type="submit" name="ok" class="btn btn-primary">Submit</button>
            </form>
            
                   
        </div>
    </div>
    </section>
    
</body>
</html>