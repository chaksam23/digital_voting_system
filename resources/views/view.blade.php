<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <table class="table table-bordered w-100">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Voter_name</th>
                                    <th>Voter_phone</th>
                                    <th>Voter_Password</th>
                                    <th>group</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sno = 1;
                                @endphp
                                @foreach($voter_id as $voter)

                                <tr>
                                    <td> {{$sno++ }}</td>
                                    <td> {{$voter->voter_name}}</td>
                                    <td> {{$voter->voter_phone}}</td>
                                    <td> {{$voter->voter_password}}</td>
                                    <td> {{$voter->group}}</td>
                                    <td> {{$voter->status}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>