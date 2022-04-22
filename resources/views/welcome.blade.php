<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-sm-4">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="studentFullName" class="form-label">Studenst's Full Name</label>
                        <input type="text" name="studentFullName" id="studentFullName" class="form-control"
                            value="{{ old('studentFullName') }}">
                        @error('studentFullName')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="studentCode" class="form-label">Student's Code</label>
                        <input type="text" name="studentCode" id="studentCode" class="form-control"
                            value="{{ old('studentCode') }}">
                        @error('studentCode')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="studentGender" class="form-label">Student's Gender</label>
                        <select name="studentGender" id="studentGender" class="form-control">
                            <option value="F">Female</option>
                            <option value="M">Male</option>
                            <option value="T">Transgender</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="studentContactNo" class="form-label">Student's Contact No</label>
                        <input type="text" name="studentContactNo" id="studentContactNo" class="form-control"
                            value="{{ old('studentContactNo') }}">
                        @error('studentContactNo')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="studentEmail" class="form-label">Student's Email</label>
                        <input type="text" name="studentEmail" id="studentEmail" class="form-control"
                            value="{{ old('studentEmail') }}">
                        @error('studentEmail')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="studentAddress" class="form-label">Student's Address</label>
                        <input type="text" name="studentAddress" id="studentAddress" class="form-control"
                            value="{{ old('studentAddress') }}">
                        @error('studentAddress')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="studentContactNo" class="form-label">Student's Date of Birth</label>
                        <input type="date" name="studentDateOfBirth" id="studentDateOfBirth" class="form-control"
                            value="{{ old('studentDateOfBirth') }}">
                        @error('studentDateOfBirth')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save Student Details" class="form-control btn btn-success">
                    </div>
                </form>
            </div>
            </form>
            <div class="col-sm-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Code</td>
                            <td>Name</td>
                            <td>Mobile</td>
                            <td>Gender</td>
                            <td>Email</td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
