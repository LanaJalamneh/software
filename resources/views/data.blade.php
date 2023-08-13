<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>The Data</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        <th scope="col">Buttons</th>

    </tr>
    </thead>
    <tbody>
    @foreach($data as $info)

    <tr>
        <th scope="row">{{$info->id}}</th>
        <td>{{$info->name}}</td>
        <td>{{$info->email}}</td>
        <td>{{$info->message}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('contact.edit',$info->id)}}" role="button">Edit</a>
            <a class="btn btn-danger" href="{{route('contact.delete',$info->id)}}" role="button">Delete</a>

        </td>

    </tr>
    @endforeach



    </tbody>
</table>

{{--    <a class="btn btn-danger" href="{{route('contact.delete.all')}}" role="button">Delete All</a>--}}
<a class="btn btn-danger" href="{{route('contact.delete.all.truncate')}}" role="button">Delete All</a>


</body>
</html>







