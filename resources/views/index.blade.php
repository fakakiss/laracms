@extends('layouts.app')

@section('content')


     

<div style="padding: 20px">
<div class="panel panel-default" >
  <!-- Default panel contents --> 
  <div class="panel-heading"></div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- Table -->
  <table class="table">
   

    <tr>
      <td>Name</td>
      <td>Surname</td>
      <td>ID</td>
      <td>Mobile</td>
      <td>Email</td>
      <td>DOB</td>
      <td>Language</td>
      <td>Interests</td>
      <td></td>
      <td></td>

    </tr>

    @foreach($peoples as $people)  
        <tr>
          <td>{{ $people->name }}</td>
          <td>{{ $people->surname }}</td>
          <td>{{ $people->idno }}</td>
          <td>{{ $people->mobile }}</td>
          <td>{{ $people->email }}</td>
          <td>{{ $people->dob }}</td>
          <td>{{ $people->language }}</td>
          <td>{{ $people->interests }}</td>
          <td><a href="/peoples/{{ $people->id }}/edit">Edit</a></td>
          <td>


            <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Person?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>


              <form id="delete-form" action="{{ route('peoples.destroy',[$people->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>


          </td>

        </tr>
     @endforeach
  </table>
</div>




      

    </div>
</div>


@endsection