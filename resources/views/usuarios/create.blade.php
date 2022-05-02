@extends('base')

@section('content')



<div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Cadastro de usuários</h1>
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
    </div>
    <div class="app-content-actions">
      <div class="app-content-actions-wrapper">
        <div class="filter-button-wrapper">
          <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
          <div class="filter-menu">
            <label>Categoria</label>
            <select>
              <option>Todas as Categorias</option>
              <option>Furniture</option>                 
              <option>Decoration</option>
              <option>Kitchen</option>
              <option>Bathroom</option>
            </select>
            <label>Status</label>
            <select>
              <option> Todos</option>
              <option>Ativo</option>
              <option>Inativo</option>
            </select>
            <div class="filter-menu-buttons">
              <button class="filter-button reset">
                Limpar
              </button>
              <button class="filter-button apply">
                Aplicar
              </button>1
            </div>
          </div>
        </div>
        <button class="action-button list active" title="List View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        </button>
        <button class="action-button grid" title="Grid View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </button>
      </div>
    </div>
    <div class="products-area-wrapper ">
     
      @if (session('msg'))
      <center>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <p class="msg">
   <strong>Mensagem:</strong> {{session('msg')}} 
 

 
 </div>
 
 
        @endif

        {{-- <form method="POST" action="{{ route('register') }}">

    {{-- <form action="/usuarios" method="POST" enctype="multipart/form-data"> --}}
      {{-- @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nome Completo </label>
      <x-jet-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>
        <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="block mt-1 w-full input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Senha </label>
      <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Confirme a Senha </label>
      <x-jet-input id="password_confirmation " class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>
  </div>

    <div class="form-row">

    <div class="col-md-6 mb-6">

  <button class="btn btn-primary" type="submit">Cadastrar</button>


</div> --}} 



{{-- <div class="container">
  <div class="form-group" x-data="{ fileName: '' }">
    <div class="input-group shadow">
      <span class="input-group-text px-3 text-muted"><i class="fas fa-image fa-lg"></i></span>
      <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
      <input type="text" class="form-control form-control-lg" placeholder="Upload Image" x-model="fileName">
      <button class="browse btn btn-primary px-4" type="button" x-on:click.prevent="$refs.file.click()"><i class="fas fa-image"></i> Browse</button>
    </div>
  </div>
</div>
--}}

{{-- <div class="upload">
  <input type="file" title="" id="image" name="image"  class="drop-here">
  <div class="text text-drop">Foto</div>
  <div class="text text-upload">Enviando</div>
  <svg class="progress-wrapper" width="300" height="300">
    <circle class="progress" r="115" cx="150" cy="150"></circle>
  </svg>
  <svg class="check-wrapper" width="130" height="130">
          <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg>
        <div class="shadow"></div>
      </div>
    </div>
    
  </div> --}}
  
</form>




<hr>
<link rel="stylesheet" href="css/usuarios-style.css">
<div class="container mt-5">
    <table class="table table-borderless main">
        <thead>
            <tr class="head">
                <th scope="col" class="ml-2">
                </th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data de Criação</th>
                <th scope="col">Ativo</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>

        @foreach($user as $usu )

        <tbody>
            <tr class="rounded bg-white">
                <th scope="row">
                </th>
                <td class="order-color">{{$usu->id}}</td>
                
               
               
               
                <td class="d-flex align-items-center">
                  <img src="/storage/profile-photos/{{$usu->profile_photo_path }}" width="50px"class="rounded-circle" alt="Account"> 

                     <span class="ml-2">{{$usu->name}}</span> </td>
              
              
                     <td>{{$usu->created_at}}</td>
                     <td>
                     <button class="btn btn-success btn-sm " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"> ATIVO </button>
                   
                    </div>
                </td>
                <form action="/usuarios/{{$usu->id}}" method="POST">
                  @csrf
                  @method('DELETE')
        
               <td>
                
                 
                  <button type="submit" class="btn btn-danger delete-btn">
                     <ion-icon name="trash-outline">
                        </ion-icon>Deletar</button>
                  </td>   
                      
                 
                  
              
            </tr>
           
        </tbody>


        @endforeach


    </table>
    </div>
@endsection 