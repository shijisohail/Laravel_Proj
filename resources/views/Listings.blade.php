<h1>
  {{$headings}}
</h1>

@unless(count($listings)==0)

@foreach($listings as $listing)
<h2>
  {{print $listing['title']}}
</h2>
<p>
  {{print $listing['description']}}
</p>
@endforeach

@else
    <p>None Listings were found</p>
@endunless

