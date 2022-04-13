@extends('base')

@section('content')



  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Dashboard</h1>

    </div>
    <div class="app-content-actions">
      
     



    <section class="cards">
      <article class="card card--1">
        <div class="card__info-hover">
         
            <div class="card__clock-info">
              <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time"> {{$empresa->count()}}</span>
            </div>
          
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> <center> Recipe </center></span>
          <h3 class="card__title">Sua empresa</h3>
          <span class="card__by">Informações: 
            @foreach($empresa as $empresas)
            <a href="#" class="card__author" title="author">{{$empresas->Nome_Empresa}}</a></span>
            @endforeach
        </div>
      </article>
        
        
      <article class="card card--2">
        <div class="card__info-hover">
            <div class="card__clock-info">
              <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time"> {{$empresa_cliente->count()}}</span>
            </div>
          
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> Número</span>
          <h3 class="card__title">Clientes</h3>
        </div>
      </article>  

      <article class="card card--3">
        <div class="card__info-hover">
        
            <div class="card__clock-info">
              <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time"> {{$produtos->count()}}</span>
            </div>
          
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> Travel</span>
          <h3 class="card__title">Produtos</h3>
        </div>
      </article>  
        
      <article class="card card--4">
        <div class="card__info-hover">
         
            <div class="card__clock-info">
              <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">{{$orcamento->count()}}</span>
            </div>
          
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> Travel</span>
          <h3 class="card__title">Orçamentos</h3>
          <span class="card__by">by <a href="#" class="card__author" title="author">John Doe</a></span>
        </div>
      </article>  
        
        </section>


        
{{-- <div class="card text-center">
  <div class="card-header">
    Sobre o sistema
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    Web Monkey
  </div> --}}

<!-- partial -->
@endsection