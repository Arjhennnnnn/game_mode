
<x-layout>
  @foreach($supervisors as $supervisor)
    {{ $supervisor->first_name}}
    {{ $supervisor->name}}

    <br>

  @endforeach
</x-layout>