<div class="modal fade" tabindex="-1" id="modal_view">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="py-3" method="POST" action="/create/employee">
          @csrf
          <!-- Name input -->
          <input type="hidden" name="supervisor_id" value={{ Auth::user()->id }}>
          <div class="form-outline">
            <input type="text" name="first_name" class="form-control">
            <label class="form-label" for="form1Example1">Firstname</label>
          </div>
          @error('firstname')
            <small class="ms-2 text-danger">{{ $message }}</small>
          @enderror
    
          <br>
          <!-- Email input -->
          <div class="form-outline">
            <input type="text" name="last_name" class="form-control">
            <label class="form-label" for="form1Example1">Lastname</label>
          </div>
    
          @error('lastname')
          <small class="ms-2 text-danger">{{ $message }}</small>
          @enderror
          <br>
        
          <!-- Password input -->
          <div class="form-outline">
            <input type="text" name="middle_initial" class="form-control" />
            <label class="form-label" for="form1Example2">Middle Initial</label>
          </div> 
          
          @error('mi')
          <small class="ms-2 text-danger">{{ $message }}</small>
          @enderror
          <br>
    
          <!-- Confirmation Password input -->
          <div class="form-outline">
            <input type="text" name="job_title" class="form-control" />
            <label class="form-label" for="form1Example2">Job Title</label>
          </div>  
    
          @error('job_title')
          <small class="ms-2 text-danger">{{ $message }}</small>
          @enderror
              
          <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add New</button>
      </div>
    </form>
    </div>
  </div>
</div>