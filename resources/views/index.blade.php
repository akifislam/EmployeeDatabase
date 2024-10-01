@extends('layout')

@section('page_content')

<h1>Employee Database</h1>
<p class="text-end">
    <a class="btn btn-primary" href="{{route('employee.create')}}">New Book</a>
</p>
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
{{$employees->links()}}

@endsection