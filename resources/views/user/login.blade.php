@include('partials.__header')

<div class="row mt-5">
  <div class="col-4 offset-4 bg-secondary bg-opacity-50 rounded-5">
    <h1 class="text-center pt-2">Login</h1>
    <small class="ms-2">Create a new account <a href="/register">here</a></small>
    <form class="py-3" method="POST" action="/login/process">
      @csrf
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" name="email" class="form-control" />
        <label class="form-label" for="form1Example1">Email address</label>
      </div>
    
      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="password" class="form-control" />
        <label class="form-label" for="form1Example2">Password</label>
      </div>  
    
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block">Sign up</button>
    </form>
  </div>
</div>



@include('partials.__footer')
