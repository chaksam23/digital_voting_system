<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .form-area{
        border: 1px solid #ccc;
        box-shadow: 2px 2px 10px #ccc;
        border-radius: 5px;
    }   
</style>
<body>
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="form-area p-3">
                        <form action="{{ route('addvoter') }}" method="POST">
                            @csrf
                            <h6>Fill Voter's Records</h6><hr>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name <sup style="color: red;">*</sup></label>
                                <input type="text" name="vname" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Father's Name <sup style="color: red;">*</sup></label>
                                <input type="text" name="fname" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="Enter Your Mobile" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Voter Id <sup style="color: red;">*</sup></label>
                                <input type="text" name="voter_id" class="form-control" id="vid" aria-describedby="emailHelp" placeholder="Enter Voter Id" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone no <sup style="color: red;">*</sup></label>
                                <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter Your Phone no" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address <sup style="color: red;">*</sup></label>
                                <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter Your Address" required>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div style="display: block; float: right;">
                                        <button type="submit" name="ok" onclick="return validateForm()" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('script')

@endsection
    
</body>
</html>