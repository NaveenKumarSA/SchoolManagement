{{-- https://1.bp.blogspot.com/-AWWdK4rQsGU/XCrRPhIZafI/AAAAAAAADHA/ZLVK3-UHpI8-4Ck5PQeVAvpC7GUmR0HygCLcBGAs/s1600/style-flip-card-menu.gif --}}

<div class="card mb-3">
  <img class="card-img-top pt-5 " style="height: 5%" src="https://i.gifer.com/6ELl.gif" alt="School">
  <div class="card-body">
    <h5 class="card-title">Students Table</h5>
    <p class="card-text">Here are the students list that will help us to progress</p>
    {{-- table begin here  --}}
    
    <table class="table table-striped table-hover">
  <thead class="thead-light">
    <tr class="table-primary">
      <th scope="col">DataBase Id</th>
      <th scope="col">Student Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Options</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
        <tr class="">
        <td>{{$student->id}}</td>
        <td>{{$student->studentId}}</td>
        <td>{{$student->firstName}}</td>
        <td>{{$student->secondName}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->speciality}}</td>
        <td>
            <a href="{{ url('/show/'.$student->id)}}" class="btn btn-sm btn-info">Show</a>
            <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ url('/delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>

  </div>
</div>



   