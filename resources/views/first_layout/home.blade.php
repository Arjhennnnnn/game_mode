<x-layout>
  {{-- <h1>{{ $name }} home page! with id : {{ $id }}</h1> --}}
  @foreach ($users as $user)
    Supervisor : {{ $user->id }} = {{ $user->name }} 
    <br>

      @foreach ($employees as $employee)
      @if($user->id == $employee->supervisor_id)
        Name : {{ $employee->first_name }} {{ $employee->last_name }} 
        <br>
        Job Title : {{ $employee->job_title }}
        <br> 
        <br>  

      @endif
      @endforeach
      <br>

  <br>
  @endforeach


</x-layout>