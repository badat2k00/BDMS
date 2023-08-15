<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="card">
        <div class="card-header">Hiển thị</div>
        <div class="card-body">
            <form>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="Donor_ID" class="form-control" 
                        value="{{ $donor->Donor_ID }}" readonly />
                    </div>
                </div> 

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> First Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="First_Name" class="form-control" 
                        value="{{ $donor->First_Name }}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> LastName</label>
                    <div class="col-sm-10">
                        <input type="text" name="Last_Name" class="form-control" 
                        value="{{ $donor->Last_Name }}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Blood Type</label>
                    <div class="col-sm-10">
                        <input type="text" name="Blood_Type" class="form-control" 
                        value="{{ $donor->Blood_Type }}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> DOB</label>
                    <div class="col-sm-10">
                        <input type="date" name="DOB" class="form-control" 
                        value="{{ $donor->DOB }}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Gender</label>
                    <div class="col-sm-10">
                        <input type="text" name="Gender" class="form-control" 
                        value="{{ $donor->Gender }}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="Address" class="form-control" 
                        value="{{ $donor->Address }}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Contact Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="Contact_Number" class="form-control" 
                        value="{{ $donor->Contact_Number }}" readonly />
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('donors.index') }}" class="btn btn-primary">Trở về</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>