


<img src="/images/logo_ad.png">
<p><br></p>
<div class="list-group">
    <a href="#" class="list-group-item active">
       All country
    </a>
  		@foreach( App\Country::all() as $item)
  			<a href="#" class="list-group-item">{{ $item->name }}</a>
  		@endforeach
</div>