

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Contact</title>
    <style>
        #floatLeft{
            animation-name: fl; 
            animation-duration: 5s; 
        }
        @keyframes fl{
            /* 0%{left: 50%; right:0%};
            50%{left: 25%; right:25%};
            1000%{left: 0%; right:50%}; */
            0%{background-color:rgba(11, 75, 96, 0.742) };
            100%{background-color: rgba(240, 240, 240, 0.961)};
            
        }
    </style>
    <script>
        function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
        h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
        }
    </script>
</head>
<body onload="startTime()">
    @include('navbar')

    
    <div class="jumbotron" id="floatLeft"><h3>Contact Us</h3></div>

    <div class=" row justify-content-start m-2">
        <div class="col-3 rounded-pill">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8lNlD1e4v4c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="container col-4 progress-bar-info p-5 rounded">
            <form action="{{url('/message')}}" method="post">
                @csrf
                <div class="form-group">
                    <label >Name</label>
                    <input required name='name' type="text" class="form-control"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input required name="email" type="email" class="form-control"  placeholder="example@example.com">
                </div>
                <div class="form-group">
                    <label >Message</label>
                    <input required name="message" type="text-area" class="form-control"  placeholder="Let us know, what's in your mind?">
                </div>
                <div class="d-flex justify-content-around">
                    <input type="submit" class="btn btn-primary">
                    <input type="reset" class="btn btn-warning">
                    <span class="bg-info p-2 rounded-pill text-white" id="txt"></span>
                </div>
            </form>
        </div>
        
    </div>
    <footer class="contaner-fluid d-flex justify-content-around bg-dark text-white p-3">
      <h6>Copyright &copy; 2020 -SchoolManagementSystem</h6>
    </footer>
</body>
</html>