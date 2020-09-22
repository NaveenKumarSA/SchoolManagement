<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <title>School Management System</title>
  </head>
  <body class="display-5" >

    @include('navbar')
    @include('alerts')
    
    @if ($layout == 'index')
      <div class="container-fluid">
          <div class="row">
                <section class="col-md-9 animate__animated animate__zoomIn">
                    @include('studentlist')
                </section>
                <section class="col"></section>
          </div>
      </div>
    @elseif($layout == 'create')
        <div class="container-fluid">
            
            <div class="row mt-2">
                <section class="col">
                    <div class="progress">
                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <form action="{{url('/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label >Student Id</label>
                            <input required name='studentId' type="text" class="form-control"  placeholder="Student Id">
                        </div>
                        <div class="form-group">
                            <label >First Name</label>
                            <input required name="firstName" type="text" class="form-control"  placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label >Second Name</label>
                            <input required name="secondName" type="text" class="form-control"  placeholder="Second Name">
                        </div>
                        <div class="form-group">
                            <label >Age</label>
                            <input required name="age" type="text" class="form-control"  placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label >Speciality</label>
                            <input required name="speciality" type="text" class="form-control"  placeholder="Speciality">
                        </div>
                        <input type="submit" class="btn btn-info">
                        <input type="reset" class="btn btn-warning">
                    </form>
                </section>
                <section class="col-md-9 animate__animated animate__zoomIn">
                    @include('studentlist')
                </section>
            </div>
        </div>
      @elseif($layout == 'show')
      <div class="container-fluid">
            <div class="row mt-2">
                <section class="col-md-9">
                    @include('studentlist')
                </section>
                <section class="col mb-2">
                    @include('studentCard')
                </section>
            </div>
      </div>
      @elseif($layout == 'edit')
      
      <div class="container-fluid">
            <div class="row mt-2">
                <section class="col mb-2">
                    <div class="progress">
                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <form action="{{url('/update',$student->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label >Student Id</label>
                        <input required value="{{$student->studentId}}" name='studentId' type="text" class="form-control"  placeholder="Student Id">
                        </div>
                        <div class="form-group">
                            <label >First Name</label>
                            <input required value="{{$student->firstName}}" name="firstName" type="text" class="form-control"  placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label >Second Name</label>
                            <input required value="{{$student->secondName}}" name="secondName" type="text" class="form-control"  placeholder="Second Name">
                        </div>
                        <div class="form-group">
                            <label >Age</label>
                            <input required value="{{$student->age}}" name="age" type="text" class="form-control"  placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label >Speciality</label>
                            <input required value="{{$student->speciality}}" name="speciality" type="text" class="form-control"  placeholder="Speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                </section>
                <section class="col-md-9">
                     @include('studentlist')
                </section>
            </div>
      </div>
        @elseif($layout == 'delete')
      <div class="container-fluid">
          <div class="row">
                <section class="col-md-9">
                    @include('studentlist')
                </section>
                <section class="col"><div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{$student->firstName."".$student->secondName}}</strong> Deleted successfully <a href="#" class="alert-link">this important alert message</a>.
        </div></section>
          </div>
      </div>



        @endif









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    {{-- Those are the animations while scrolling --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
    var wow = new WOW(
    {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
    );
    wow.init();
    </script>


</body>
</html>