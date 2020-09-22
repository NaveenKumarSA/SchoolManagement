



<div class="card text-white bg-info mb-3 animated bounce infinite" style="max-width: 20rem;">
<div class="card-header "><h4>{{$student->firstName." ".$student->secondName}}</h4></div>
  <div class="card-body bg-light text-dark">
      <h4 class="card-title">DB ID: {{$student->id}}</h4>{{-- This pull the student id from the student model  --}}
      <h4 class="card-title">ID: {{$student->studentId}}</h4>{{-- This pull the student id from the student model  --}}
    <h4 class="card-title">AGE :{{$student->age}}</h4>{{-- This pull the age from the student model --}}
    <h4 class="card-title"> Speciality: {{$student->speciality}}</h4>
{{--     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 --}}  </div>
</div>