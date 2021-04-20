@extends('layouts.app')

@section('title-block')
    Post number {{$post->id}}
@endsection

@section('content')
   <div class="row">
       <div class="col-sm-8 blog-main">
           <div class="blog-post">
               <h4 class="blog-post-title">{{$post->title}}</h4>
               <p>{{$post->intro}}</p>
               <p>Text of post:{{$post->body}}</p>
               <p class="blog-post-meta">April 20</p>
           </div>
       </div>
   </div>

@endsection