@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="alert  w-25 rounded" id='blinks'>
            {{$error}}
        </div>
    @endforeach
@endif