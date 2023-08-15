<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="mx-5 my-3 d-flex flex justify-content-between">
        <h3>Donors Details</h3>
        <a href="{{route('donors.create')}} " class="btn btn-success btn-sm">Add</a>
    </div>
    <div class="mx-5">
        <table class="table table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Blood Type</th>
                    <th scope="co">DOB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col" colspan="3" class="text-center">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($donor as $item)
                <tr>
                    <th scope="row">{{$item->Donor_ID }}</th>
                    <td>{{$item->First_Name}}</td>
                    <td>{{$item->Last_Name}}</td>
                    <td>{{$item->Blood_Type}}</td>
                    <td>{{$item->DOB}}</td>
                    <td>{{$item->Gender}}</td>
                    <td>{{$item->Address}}</td>
                    <td>{{$item->Contact_Number}}</td>

                    <td>
                        <a href="{{ route('donors.show', $item->Donor_ID) }}" class="btn btn-link"><i class="bi bi-eye"></i></a>
                    </td>
                    <td>
                        <a href="{{ route('donors.edit', $item->Donor_ID) }}" class="btn btn-link"><i class="bi bi-pencil"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('donors.destroy', $item->Donor_ID) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link" onclick="return confirm('Bạn chắc chắn xóa ?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>