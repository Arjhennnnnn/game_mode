@include('partials.__header')
<x-navbar/>

<div class="row mt-2">
  <div class="col-8 offset-2">
    <table class="table border border-secondary-25">
      <thead class="bg-primary bg-opacity-50">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Firstname</th>
          <th scope="col">Lastname</th>
          <th scope="col">Job Title</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
        @if($employee->supervisor_id == Auth::user()->id)
          <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->job_title }}</td>
            <td>
              <i class="fas fa-pen-to-square text-primary"></i>
              <i class="fas fa-trash text-danger"></i>
            </td>
          </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@include('partials.__footer')


