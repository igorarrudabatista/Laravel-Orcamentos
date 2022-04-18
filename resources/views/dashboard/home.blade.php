@extends('base')

@section('content')

<style> 



.cards {
    width: 100%;
    display: flex;
    display: -webkit-flex;
    justify-content: center;
    -webkit-justify-content: center;
    max-width: 1240px;
}

.card--1 .card__img, .card--1 .card__img--hover {
    background-image: url('/img/dashboard/orders.jpg');
}

.card--2 .card__img, .card--2 .card__img--hover {
    background-image: url('/img/dashboard/empresa.jpg');
}
.card--3 .card__img, .card--3 .card__img--hover {
    background-image: url('/img/dashboard/produto.jpg');
}
.card--4 .card__img, .card--4 .card__img--hover {
    background-image: url('/img/dashboard/orders.jpg');
}



.card__like {
    width: 18px;
}

.card__clock {
    width: 30px;
  vertical-align: left;
}
.card__time {
    font-size: 50px;
    color: #000000;
    vertical-align: middle;
    margin-left: 0px;
}

.card__clock-info {
    float: center;
    width: 200px;
    
}

.card__img {
  visibility: hidden;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 235px;
  border-top-left-radius: 12px;
border-top-right-radius: 12px;
  
}

.card__info-hover {
    position: absolute;
    padding: 100px;
  width: 100%;
  opacity: 0;
  top: 0;
}

.card__img--hover {
  transition: 0.2s all ease-out;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
  position: absolute;
    height: 235px;
  border-top-left-radius: 12px;
border-top-right-radius: 12px;
top: 0;
  
}
.card {
  margin-right: 25px;
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
    width: 33.3%;
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0px 13px 10px -7px rgba(0, 0, 0,0.1);
}
.card:hover {
  box-shadow: 0px 30px 18px -8px rgba(0, 0, 0,0.1);
    transform: scale(1.10, 1.10);
}

.card__info {
z-index: 2;
  background-color: #fff;
  border-bottom-left-radius: 12px;
border-bottom-right-radius: 12px;
   padding: 16px 24px 24px 24px;
}

.card__category {
    font-family: 'Raleway', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
    font-weight: 500;
  color: #868686;
}

.card__title {
    margin-top: 5px;
    margin-bottom: 10px;
    font-family: 'Roboto Slab', serif;
}

.card__by {
    font-size: 12px;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
}

.card__author {
    font-weight: 600;
    text-decoration: none;
    color: #AD7D52;
}

.card:hover .card__img--hover {
    height: 100%;
    opacity: 0.3;
}

.card:hover .card__info {
    background-color: transparent;
    position: relative;
}

.card:hover .card__info-hover {
    opacity: 1;
}


</style>

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
        <a href="{{asset('/minha_empresa/form_empresa') }}" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> <center> Recipe </center></span>
          <h3 class="card__title">Sua empresa</h3>
          <span class="card__by">Informações: 
            @foreach($empresa as $empresas)
            <a href="{{asset('/empresa/show_clientes') }}" class="card__author" title="author">{{$empresas->Nome_Empresa}}</a></span>
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
        <a href="{{asset('/empresa/show_clientes') }}" class="card_link">
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
        <a href="{{asset('/produtos/produtos') }}" class="card_link">
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
        <a href="{{asset('/orcamento/show_orcamento') }}" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> Travel</span>
          <h3 class="card__title">Orçamentos</h3>
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