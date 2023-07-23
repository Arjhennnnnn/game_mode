@include('partials.__header')
<x-messages/>

<div class="row mt-5">
  <div class="col-4 offset-4 bg-secondary bg-opacity-50 rounded-5">
    <h1 class="text-center pt-2">Register</h1>
    <small class="ms-2">Sign in your account <a href="/login">here</a></small>
    <form class="py-3" method="POST" action="/create">
      @csrf

      <!-- Name input -->
      <div class="form-outline">
        <input type="name" name="name" class="form-control" value={{ old('name') }}>
        <label class="form-label" for="form1Example1">Fullname</label>
      </div>
      @error('name')
        <small class="ms-2 text-danger">{{ $message }}</small>
      @enderror

      <br>
      <!-- Email input -->
      <div class="form-outline">
        <input type="email" name="email" class="form-control" value={{ old('email') }}>
        <label class="form-label" for="form1Example1">Email address</label>
      </div>

      @error('email')
      <small class="ms-2 text-danger">{{ $message }}</small>
      @enderror
      <br>
    
      <!-- Password input -->
      <div class="form-outline">
        <input type="password" name="password" class="form-control" />
        <label class="form-label" for="form1Example2">Password</label>
      </div> 
      
      @error('password')
      <small class="ms-2 text-danger">{{ $message }}</small>
      @enderror
      <br>

      <!-- Confirmation Password input -->
      <div class="form-outline">
        <input type="password" name="password_confirmation" class="form-control" />
        <label class="form-label" for="form1Example2">Password</label>
      </div>  

      @error('password_confirmation')
      <small class="ms-2 text-danger">{{ $message }}</small>
      @enderror
          
      <br>
    
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block">Sign up</button>
    </form>
  </div>
</div>



@include('partials.__footer')
