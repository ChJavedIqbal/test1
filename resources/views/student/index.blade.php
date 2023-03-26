<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add new student</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Add new student</h4><hr>
            <form action="{{ route('student.save') }}" method="post" id="main_form">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    <span class="text-danger error-text name_error"></span>
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    <span class="text-danger error-text email_error"></span>

                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    <span class="text-danger error-text password_error"></span>

                </div>
                <br>
                    <button type="submit" class="btn btn-primary">Save</button>
            </form>


        </div>

    </div>
</div>


<script src="{{asset('main.js')}}"></script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>




