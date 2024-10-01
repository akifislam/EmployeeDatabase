<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1>Employee Database</h1>
<table class="table">
    <th>ID</th>
    <th>Name</th>
    <th>Job Title</th>
    <th>Joining Date</th>
    <th>Salary</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>
    <th>Details</th>

        @foreach($employees as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->job_title}}</td>
            <td>{{$item->joining_date}}</td>
            <td>{{$item->salary}}</td>
            <td>{{$item->mobile_no}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td><a href="{{route('employee.show', $item->id)}}">Details</a></td>
        </tr>
        @endforeach

</table>

</body>
</html>
