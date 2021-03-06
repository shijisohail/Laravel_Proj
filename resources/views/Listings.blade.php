@extends('layout')
@section('content')
@include('partials._hero')
@include('partials._search')
    
<h2>
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
</h2>

@unless (count($listings)==0)

@foreach($listings as $listing)
<div class="bg-gray-50 border border-gray-200 rounded p-6">
  <div class="flex">
      <img
          class="hidden w-48 mr-6 md:block"
          src={{asset("images/images.jpeg")}}
          alt=""
      />
      <div>
          <h3 class="text-2xl">
              <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
          </h3>
          <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
          <ul class="flex">
              <li
                  class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
              >
                  <a href="#">{{$listing->location}}</a>
              </li>
              <li
                  class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                  <a href="#">{{$listing->email}}</a>
              </li>
              <li
                  class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
              >
                  <a href="#">{{$listing->tags}}</a>
              </li>
              <li
                  class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
              >
                  <a href="#">{{$listing->created_at}}</a>
              </li>
              
          </ul>
          <div class="text-lg mt-4">
              <i class="fa-solid fa-location-dot"></i> Islamabad, Pakistan
          </div>
      </div>
  </div>
</div>
@endforeach

@else
    <p>None Blogs were found</p>
@endunless
</div>
@endsection