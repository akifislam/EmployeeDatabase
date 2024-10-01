@extends('layout')

@section('employee_content')

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


@endsection