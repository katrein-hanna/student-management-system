<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Student Management System</title>
    </head>
    <body>

        @include('navbar')
{{-- testing --}}
        <div class="row header-container justify-content-center">
            <div class="header">
                <h1>Student Management System</h1>
            </div>
        </div>
        @if ($layout == 'index')
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <session class="col-md-7">
                        @include('studentList')
                    </session>
                </div>
            </div>
        @elseif ($layout == 'create')
            <div class="container-fluid mt-4">
                <div class="row">
                    <session class="col-md-7">
                        @include('studentList')
                    </session>
                    <session class="col-md-5">
                        <div class="card mb-3">
                            <img class="card-img-top" src="/images/create-student-management.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Enter the information of the new student</h5>
                                <form action="{{ url('/store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>CNE</label>
                                        <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input name="lastName" type="text" class="form-control" placeholder="Enter the last name">
                                    </div>
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input name="age" type="text" class="form-control" placeholder="Enter the age">
                                    </div>
                                    <div class="form-group">
                                        <label>Speciality</label>
                                        <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                                    </div>
                                    <input type="submit" class="btn btn-info" value="Save">
                                    <input type="reset" class="btn btn-warning" value="Reset">
                                </form>
                            </div>
                        </div>
                    </session>
                </div>
            </div>
        @elseif ($layout == 'show')
            <div class="container-fluid mt-4">
                <div class="row">
                    <session class="col-md-7">
                        @include('studentList')
                    </session>
                    <session class="col-md-5">

                    </session>
                </div>
            </div>
        @elseif ($layout == 'edit')
            <div class="container-fluid mt-4">
                <div class="row">
                    <session class="col-md-7">
                        @include('studentList')
                    </session>
                    <session class="col-md-5">
                        <div class="card mb-3">
                            <img class="card-img-top" src="/images/create-student-management.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Update the information of the new student</h5>
                                <form action="{{ route('update',[$student->id]) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>CNE</label>
                                        <input value="{{ $student->cne }}" name="cne" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input value="{{ $student->age }}" name="age" type="text" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Speciality</label>
                                        <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control">
                                    </div>
                                    <input type="submit" class="btn btn-info" value="Update">
                                    <input type="reset" class="btn btn-warning" value="Reset">
                                </form>
                            </div>
                        </div>
                    </session>
                </div>
            </div>
        @endif

        <footer>

        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
