<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <div class="row">
    <table>
        <tr>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </thead>
            </tr>
            @foreach($student as $data)
            <tr>
                <tbody>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>
                        <a href="" class="btn btn-success">edit</a>
                        <a href="{{url('delete',$data->id)}}" class="btn btn-danger">trash</a>
                    </td>
                </tbody>
            </tr>
        @endforeach

    </table>

    </div>
   </div>
   <div class="container">
   <div class="row">
   {{$student->links()}}
   </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</body>
</html>
