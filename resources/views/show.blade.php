<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1>Employee Details</h1>
<a href="{{route('employee.index')}}">Back</a>
<table>
    <tr>
        <th>ID</th>
        <td>{{$employee->id}}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{$employee->name}}</td>
    </tr>
    <tr>
        <th>Job Title</th>
        <td>{{$employee->job_title}}</td>
    </tr>
    <tr>
        <th>Joining Date</th>
        <td>{{$employee->joining_date}}</td>
    </tr>
    <tr>
        <th>Salary</th>
        <td>{{$employee->salary}}</td>
    </tr>
    <tr>
        <th>Phone</th>
        <td>{{$employee->mobile_no}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$employee->email}}</td>
    </tr>
    <tr>
        <th>Address</th>
        <td>{{$employee->address}}</td>
    </tr>

</table>
</body>
</html>
