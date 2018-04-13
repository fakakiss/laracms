@extends('layouts.app')

@section('content')


     


<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"></div>
  <div class="panel-body">
    <p>...</p>
  </div>










<form class="form-horizontal" method="post" action="{{ route('peoples.update', $people->id) }}">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="put">

<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="name" class="form-control input-md" required="" value="{{ $people->name }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Surname">Surname</label>  
  <div class="col-md-4">
  <input id="surname" name="surname" type="text" placeholder="Surname" class="form-control input-md" required="" value="{{ $people->surname }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ID">ID</label>  
  <div class="col-md-4">
  <input id="indo" name="idno" type="text" placeholder="ID" class="form-control input-md" required="" value="{{ $people->idno }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mobile">Mobile</label>  
  <div class="col-md-4">
  <input id="mobile" name="mobile" type="text" placeholder="mobile" class="form-control input-md" required="" value="{{ $people->mobile }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="" value="{{ $people->email }}">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="DOB">DOB</label>  
  <div class="col-md-4">
  <input id="dob" name="dob" type="text" placeholder="DOB" class="form-control input-md" required="" value="{{ $people->dob }}">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Language">Language</label>
  <div class="col-md-4">
    <select id="language" name="language" class="form-control" >

     

        @foreach($languages as $language)

          <option value="{{$language->id}}" @if ($language->id == $people->language) selected="selected" @endif >{{$language->name}}</option>

        @endforeach

     

    </select>
  </div>
</div>

<!-- Select Multiple -->

{{ $people->interests }}




<div class="form-group">
  <label class="col-md-4 control-label" for="Interests">Interests</label>
  <div class="col-md-4">
    <select id="interests" name="interests[]" class="form-control" multiple="multiple" >


      @foreach($interests as $interest)

          <option value="{{$interest->id}}" @foreach($pInterests as $key => $value) @if ($interest->id == $value) selected="selected" @endif @endforeach >
            {{$interest->name}}
          </option>

      @endforeach

    </select>
  </div>
</div>

{{ var_dump( explode( ',', $people->interests ) ) }}

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SAVE"></label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-primary" value="Update"/>
                                       
  </div>
</div>

</fieldset>
</form>










  
      

    </div>

@endsection