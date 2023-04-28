
@extends('layouts.master')

@section('title')

   Users List

@endsection


@section('subject')

   userslist

@endsection


@section('content')

   <table border="2" class="table table-striped">

       <tr>
         <td>id</td> <td>username</td> <td>phone</td>
       </tr>

   @if(count($users))
       @foreach ($users as $user )
           <tr>
             <td> {{$user->UserID}} </td>
             <td> {{$user->Name}} </td>
             <td> {{$user->Phone}} </td>

           </tr>
       @endforeach
   </table>


   @endif
@endsection
