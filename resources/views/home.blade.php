

@extends('layout.app')

{{-- SEZIONE NAV --}}

@section('nav')
<section>
  <main>
    <header class="container">
      <div><img src="{{ Vite::asset('public\img\dc-logo.png')}}" class="logo" alt="" /></div>
      <div>
        <ul>
          <li>CHARATERS</li>
          <li ><a href="{{ route('comics') }}">COMICS</a></li>
          
          <li>MOVIES</li>
          <li>TV</li>
          <li>GAMES</li>
          <li>COLLECTIBLES</li>
          <li>VIDEOS</li>
          <li>FANS</li>
          <li>NEWS</li>
          <li>SHOP</li>
        </ul>
      </div>
    </header>
</section> 
@endsection

{{-- SEZIONE MAIN --}}
@section('main-content')
<div class="jumbo ">
  <img class="img" src="{{ Vite::asset('public\img\jumbotron.jpg')}}" alt="" />
</div>
<div class="current main-part"><span> CURRENT SERIES</span></div>
<div class="row main-part">
  @foreach ($config as $comic)
  <div class="col-2">
    <div class="card"><img src="{{$comic['thumb']}}" class="comic-poster" alt=""></div>
    <p class="text-white">{{$comic['title']}}</p>   

  </div>
  
  @endforeach


</div>





@endsection

{{-- SEZIONE FOOTER --}}
@section('footer')
<footer >
<div class="top">
  <ul>
  <li>
    <img src="{{ Vite::asset('public\img\buy-comics-digital-comics.png')}}" alt=""></li>
  </ul>
  <ul>
    <li>
      <img src="{{ Vite::asset('public\img\buy-comics-merchandise.png')}}" alt=""></li>
    </ul>
    <ul>
      <li>
        <img src="{{ Vite::asset('public\img\buy-comics-shop-locator.png')}}" alt=""></li>
      </ul>
      <ul>
        <li>
          <img src="{{ Vite::asset('public\img\buy-comics-digital-comics.png')}}" alt=""></li>
        </ul>
        <ul>
          <li>
            <img src="{{ Vite::asset('public\img\buy-dc-power-visa.svg')}}" alt=""></li>
          </ul>
</div>





<div class="container">
  <div class="row ">
    <div class="col-6 d-flex gap-2">
      <ul >
        <h4>DC COMICS</h4>
        <li>Characters</li>
        <li>Comics</li>
        <li>Movies</li>
        <li>Tv</li>
        <li>Games</li>
        <li>Videos </li>
        <li>News</li>
      </ul>
  
      <ul >
        <h4>Shops</h4>
        <li>Shop DC</li>
        <li>Shop DC Collectibles</li>
        
      </ul>
  
      <ul >
        <h4>SITES</h4>
        <li>DC</li>
        <li>MAD Magazine </li>
        <li>DC Kids</li>
        <li>DC Universe </li>
        <li>DC Power Visa</li>
      </ul>
  
    
    
    
    
    
    </div>
      
  
      <div class="col-6">
        <img src="{{ Vite::asset('public\img\dc-logo-bg.png')}}" class="logo-footer" alt="">
      </div>
  
    </div>

  
</div>

  



</footer>
@endsection