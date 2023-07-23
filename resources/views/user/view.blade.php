@include('partials.__header')
<x-messages/>

<div class="row mt-5">
  <div class="col-4 offset-4 bg-secondary bg-opacity-50 rounded-5">
    <h2 class="text-center pt-2">{{ $employee->first_name }} {{ $employee->last_name }}</h2>
    <form class="py-3" method="POST" action="/update/employee/{{ $employee->id }}">
      @method('PUT')
      @csrf
      <!-- Name input -->
      <input type="hidden" name="supervisor_id" value={{ Auth::user()->id }}>
      <div class="form-outline">
        <input type="text" name="first_name" class="form-control" value={{ $employee->first_name }}>
        <label class="form-label" for="form1Example1">Firstname</label>
      </div>
      @error('firstname')
        <small class="ms-2 text-danger">{{ $message }}</small>
      @enderror

      <br>
      <!-- Email input -->
      <div class="form-outline">
        <input type="text" name="last_name" class="form-control" value={{ $employee->last_name }}>
        <label class="form-label" for="form1Example1">Lastname</label>
      </div>

      @error('lastname')
      <small class="ms-2 text-danger">{{ $message }}</small>
      @enderror
      <br>
    
      <!-- Password input -->
      <div class="form-outline">
        <input type="text" name="middle_initial" class="form-control" value={{ $employee->middle_initial }}>
        <label class="form-label" for="form1Example2">Middle Initial</label>
      </div> 
      
      @error('mi')
      <small class="ms-2 text-danger">{{ $message }}</small>
      @enderror
      <br>

      <!-- Confirmation Password input -->
      <div class="form-outline">
        <input type="text" name="job_title" class="form-control" value={{ $employee->job_title }}>
        <label class="form-label" for="form1Example2">Job Title</label>
      </div>  

      @error('job_title')
      <small class="ms-2 text-danger">{{ $message }}</small>
      @enderror
          
      <br>
    
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary w-100">Update Employee</button>
    </form>
    <form action="/delete/employee/{{ $employee->id }}" method="post">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger w-100 mb-3">Delete Employee</button>
    </form>

  </div>
</div>



@include('partials.__footer')
