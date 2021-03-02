<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>Animations</title>
    <script>
    function myFunction() {
      document.getElementById("myDate").value = "2020-02-09";
    }
    </script>
    <style>


        #imgs{
            height: 150px; 
            width: 150px;
        }

        .flip-box {
  background-color: transparent;
  width: 300px;
  height: 300px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
}

@-webkit-keyframes spin{
  from{-webkit-transform: rotateY(0deg);}
  to{-webkit-transform: rotateY(360deg);}
}
.flipx{
  animation-name: spin;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-duration: 10ms;
  -webkit-animation-name: spin;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 5s;
}
@-webkit-keyframes spinx{
  from{-webkit-transform: rotateX(0deg);}
  to{-webkit-transform: rotateX(360deg);}
}
.flipy{
  animation-name: spinx;
  animation-timing-function: ease-in;
  animation-iteration-count: infinite;
  animation-duration: 10ms;
  -webkit-animation-name: spin;
  -webkit-animation-timing-function: ease-in;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 5s;
}


    </style>
</head>
<body >
@include('navbar')
<div>
  <iframe src="https://goo.gl/maps/PbogTVQDm4UEPiNcA" frameborder="0"></iframe>
</div>



<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>


<div class=" container-fluid row bg-light m-2" >
  {{-- This is a form 1 --}}
  <div class="col-6">
    <form>
      <fieldset>
        <legend>Model 1 </legend>
        <div class="form-group row" >
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" placeholder="examlpe@email.com">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control"  {{--id="exampleInputEmail1" aria-describedby="emailHelp" --}} placeholder="Please Enter Your Email Id ">
          <small id="emailHelp" class="form-text text-success">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" {{-- id="exampleInputPassword1" --}} placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleSelect1">Gender</label>
          <select class="form-control" id="exampleSelect1">
            <option>Male</option>
            <option>Female</option>
            <option>Transgender</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleSelect2"> Favourite Colors</label>
          <select multiple="" class="form-control" >
            <option>Red</option>
            <option>Blue</option>
            <option>orange</option>
            <option>pink</option>
            <option>white</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Choose the date</label>
          <input type="date" id="myDate">
        </div>
        <div class="form-group">
          <label for="exampleTextarea">Example textarea</label>
          <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="maximum words 150"></textarea>
        </div>
        
        <div class="form-group">
          <label for="exampleInputFile">Choose Picture</label>
          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <fieldset class="form-group">
          <legend>Radio buttons example</legend>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
              Option one is this and that—be sure to include why it's great
            </label>
          </div>
          <div class="form-check">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </div>
          <div class="form-check disabled">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
              Option three is disabled
            </label>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <legend>Checkboxes</legend>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="" checked="">
              Option one is this and that—be sure to include why it's great
            </label>
          </div>
          <div class="form-check disabled">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="" disabled="">
              Option two is disabled
            </label>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <legend>Sliders</legend>
          <label for="customRange1">Example range</label>
          <input type="range" class="custom-range" id="customRange1">
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
  </div>
  {{-- This is a form 2 --}}
  <div class="col-6">
      <div class="form-group">
    <fieldset disabled="">
      <label class="control-label" for="disabledInput">Disabled input</label>
      <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
    </fieldset>
  </div>

  <div class="form-group">
    <fieldset>
      <label class="control-label" for="readOnlyInput">Readonly input</label>
      <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here…" readonly="">
    </fieldset>
  </div>

  <div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Valid input</label>
    <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
    <div class="valid-feedback">Success! You've done it.</div>
  </div>

  <div class="form-group has-danger">
    <label class="form-control-label" for="inputDanger1">Invalid input</label>
    <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
    <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
  </div>

  <div class="form-group">
    <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
  </div>

  <div class="form-group">
    <label class="col-form-label" for="inputDefault">Default input</label>
    <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
  </div>

  <div class="form-group">
    <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
  </div>

  <div class="form-group">
    <label class="control-label">Input addons</label>
    <div class="form-group">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">$</span>
        </div>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

{{-- first row animation begin here --}}
<hr>
   <div class="container">
        <div class="row ">
            <div class="flip-box col-sm">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSr1OGM_q7SNDpz7NBUp_3LjldGAN5WubFscg&usqp=CAU" alt="Paris" style="width:300px;height:200px">
                    </div>
                    <div class="flip-box-back">
                   <img src="https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59095529-stock-illustration-profile-icon-male-avatar.jpg" alt="Paris" style="width:300px;height:200px">
                    </div>
                </div>
            </div>
            <div class="col-sm flipx">
                <img id="imgs" class="m-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSr1OGM_q7SNDpz7NBUp_3LjldGAN5WubFscg&usqp=CAU" alt="avatar image">
            </div>
            <div class="col-sm flipy">
                <img id="imgs" class="m-3" src="https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59095529-stock-illustration-profile-icon-male-avatar.jpg" alt="avatar image">
            </div>
        </div>
   </div>
   <hr>
{{-- second row animation begin here --}}
   <div class="container">
        <div class="row ">
            <div class="flip-box col-sm">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSr1OGM_q7SNDpz7NBUp_3LjldGAN5WubFscg&usqp=CAU" alt="Paris" style="width:300px;height:200px">
                    </div>
                    <div class="flip-box-back">
                   <img src="https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59095529-stock-illustration-profile-icon-male-avatar.jpg" alt="Paris" style="width:300px;height:200px">
                    </div>
                </div>
            </div>
            <div class="col-sm ">
                <img class="flipx" class="m-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSr1OGM_q7SNDpz7NBUp_3LjldGAN5WubFscg&usqp=CAU" alt="avatar image">
            </div>
            <div class="col-sm ">
                <img class="flipx" class="m-3" src="https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59095529-stock-illustration-profile-icon-male-avatar.jpg" alt="avatar image">
            </div>
        </div>
   </div>
</body>
</html>