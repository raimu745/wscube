<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #search{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row">
          <form action="" class="col-9">
          <input type="search" name="search" id="search" placeholder="search by name and email" class="form-control" value="">
          <button class="btn btn-primary mt-2">Search</button>
          </form>

        </div>
    </div>
   <table class="table table-bordered">
    <tr>
        <thead>
            <th>Id</th>
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>phone</th>
            <!-- <th>action</th> -->
        </thead>
    </tr>
    @foreach ($test as $data)
    <tr>
        <tbody>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->phone}}</td>
        </tbody>
    </tr>
    @endforeach
   </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
