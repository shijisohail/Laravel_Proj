@extends('layout')
@section('content')
    
<h2>
  {{$headings}}
</h2>

@unless (count($listings)==0)

@foreach($listings as $listing)
<h3>
  <a href="/listings/{{$listing['id']}}">{{$listing['title']}} </a>
</h3>
<p>
  {{ $listing['description']}}
</p>
@endforeach

@else
    <p>None Blogs were found</p>
@endunless

@endsection