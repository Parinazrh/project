@extends('layouts.master')

@section('title')

   Roles

@endsection


@section('subject')

   Roles

@endsection


@section('content')
 <h6>1=admin  </h6>
 <h6> 2=user </h6>
   <table border="2" class="table table-striped">

       <tr>
         <td>id</td> <td>username</td> <td>phone</td> <td>roleID</td>
       </tr>

   @if(count($users))
       @foreach ($users as $user )
           <tr>
             <td> {{$user->UserID}} </td>
             <td> {{$user->Name}} </td>
             <td> {{$user->Phone}} </td>
             <td> {{$user->Post_ID}} </td>

           </tr>
       @endforeach
   </table>


   @endif
@endsection
