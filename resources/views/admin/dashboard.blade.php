@extends('admin.master')
@section('title','Admin dashboard')

@section('content')
 <div class="container">
     Admin dashboard <a href="{{route('show.admin.register')}}">Register</a>
     <a href="#">Logout</a>
 </div>
@endsection
