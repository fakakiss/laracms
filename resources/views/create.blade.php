@extends('layouts.app')

@section('content')


     


<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"></div>
  <div class="panel-body">
    <p>...</p>
  </div>










<form class="form-horizontal" method="post" action="{{ route('peoples.store') }}">

{{ csrf_field() }}
 

 <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Surname">Surname</label>  
  <div class="col-md-4">
  <input id="surname" name="surname" type="text" placeholder="Surname" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ID">ID</label>  
  <div class="col-md-4">
  <input id="idno" name="idno" type="text" placeholder="ID" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mobile">Mobile</label>  
  <div class="col-md-4">
  <input id="mobile" name="mobile" type="text" placeholder="mobile" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="DOB">DOB</label>  
  <div class="col-md-4">
  <input id="dob" name="dob" type="text" placeholder="DOB" class="form-control input-md" required="" >
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Language">Language</label>
  <div class="col-md-4">
    <select id="language" name="language" class="form-control">


      <option value="0" selected disabled>Select Language</option>
   


      @if ($languages != null)

        @foreach($languages as $language)

          <option value="{{$language->id}}">{{$language->name}}</option>

        @endforeach

      @endif


    </select>
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Interests">Interests</label>
  <div class="col-md-4">
    <select id="interests" name="interests[]" class="form-control" multiple="multiple">

      

      @if ($interests != null)

        @foreach($interests as $interest)

          <option value="{{$interest->id}}">{{$interest->name}}</option>

        @endforeach

      @endif
      

    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SAVE"></label>
  <div class="col-md-4">
    <button id="SAVE" name="SAVE" class="btn btn-primary">SAVE</button>
  </div>
</div>

</fieldset>
</form>






  



  

      

    </div>

@endsection