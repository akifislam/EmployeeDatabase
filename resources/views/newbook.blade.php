@extends('layout')

@section('create_employee')

<a href="{{route('employee.index')}}">Back</a>

<h1>Add a New Employee</h1>

<form method="POST" action="{{route('employee.store')}}">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name" name="name">
  </div>
  <div class="form-group">
    <label for="joining_date">Joining Date</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name='joining_date'>
  </div>
    <div class="form-group">
        <label for="job_title">Job Title</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="job_title">
    </div>
    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="salary">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="mobile_no">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="email">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="address">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection