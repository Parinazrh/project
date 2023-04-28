@extends('layouts.master')

@section('title')

   Post List

@endsection


@section('subject')

   postlist

@endsection


@section('content')

   <table border="2" class="table table-striped">

       <tr>
         <td>id</td> <td>titel</td>
       </tr>

   @if(count($posts))
       @foreach ($posts as $pos )
           <tr>
             <td> {{$pos->PostID}} </td>
             <td> {{$pos->Titel}} </td>
           </tr>
       @endforeach
   </table>

   @endif
@endsection
