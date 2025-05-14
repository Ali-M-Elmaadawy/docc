@if ($message = Session::get('success'))

<div class="alert alert-success alert-dismissible fade show allert-m" role="alert">

  <i class="fa-regular fa-circle-check"></i> <strong>{{ $message }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif 

    

@if ($message = Session::get('error'))

<div class="alert alert-danger alert-dismissible fade show allert-m" role="alert">

  <i class="fa-solid fa-triangle-exclamation"></i> <strong>{{ $message }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif

     

@if ($message = Session::get('warning'))

<div class="alert alert-warning alert-dismissible fade show allert-m" role="alert">

  <i class="fa-solid fa-triangle-exclamation"></i> <strong>{{ $message }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif

     

@if ($message = Session::get('info'))

<div class="alert alert-info alert-dismissible fade show allert-m" role="alert">

  <strong>{{ $message }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif

    

@if ($errors->any())

<div class="alert alert-danger alert-dismissible fade show allert-m" role="alert">
  @foreach ($errors->all() as $error)
    <i class="fa-solid fa-triangle-exclamation"></i> <strong>{{ $error }}</strong>
    <br>
  @endforeach
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif