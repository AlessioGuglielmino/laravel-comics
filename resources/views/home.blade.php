

@extends('layout.app')
@section('nav')

<section>

  <main>
    <header class="container">
      <div><img src="{{ Vite::asset('public\img\dc-logo.png')}}" class="logo" alt="" /></div>
      <div>
        <ul>
          <li>CHARATERS</li>
          <li ><a href="{{ route('comics') }}"></a>COMICS</li>
          
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
@section('main-content')
<div class="jumbo">
  <img class="img" src="{{ Vite::asset('public\img\jumbotron.jpg')}}" alt="" />
</div>
<div class="current"><span> CURRENT SERIES</span></div>




    
@endsection