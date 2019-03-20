@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    
    <table class="table table-hover table-dark" style="margin-top:20px">
      <thead>
        <tr>
          <th scope="col">phone number</th>
          <th scope="col">location</th>
          <th scope="col">message</th>
          <th scope="col">date</th>
        </tr>
      </thead>
      <tbody style="overflow: auto; max-height: 700px">
        @if (count($incomings)>0)
        @foreach($incomings as $incoming)
        <tr>
          <td>{{$incoming->phone->number}}</td>
          <td>{{$incoming->phone->location}}</td>
          <td>{{$incoming->message}}</td>
          <td>{{$incoming->created_at}}</td>
        </tr>
        @endforeach
        @else
        no data
        @endif
      </tbody>
    </table>
  <script>
    $("#logout").click(function(){
      $.ajax({
          type:'POST',
          url:'/logout',
          success:function(data){
            window.location.href="/";
          }
      });
    });
  </script>
@endsection