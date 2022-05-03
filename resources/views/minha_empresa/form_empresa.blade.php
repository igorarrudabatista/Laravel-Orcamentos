@extends('base')

@section('content')

<style>

.body-form{
    width: 90%;
    height:90%;
    align-items: center;
    border-radius: 20px;
    margin-top: 0%;
    margin-bottom: 3%;
    
    box-shadow:3px 10px 50px gray;
    /* height: auto; */
}
.box-profil{
    display: flex;
    box-shadow: 1px 1px 5px gray;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
    height: 55px;
    width:55px;
    background: linear-gradient(0deg, rgba(247,127,52,1) 0%, rgba(217,147,131,1) 34%, rgba(218,52,131,1) 95%);
}

.profil-rounded{
    height: 50px;
    width:50px;
    border-radius: 50%;
}

.form-animative{
    transform:translate(0,0)
}
.form-image{
    
    background-size: cover;
    background-position: center;
}
@media only screen and (max-height:650px){
    .body-form{
        margin-top: 50%;
        height: 650px;
    }    
    .form-image{
        background-size: cover;
        background-position: center;
    }

}
@media only screen and (max-width:990px){
    .body-form{
        margin-top: 30%;
        height: 650px;
    }    
    .form-image{
        background-size: cover;
        background-position: center;
    }

}

.corner-rounded{
    border-radius: 200px !important;
}
  </style>
  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Cadastre aqui a sua empresa</h1>
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
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <p class="msg">
   <strong>Mensagem:</strong> {{session('msg')}} 
      @endif
      </div>

      {{-- @if ($Produto->Status_Produto == '1')
      <span class="status active">Ativo</span>      
      @else
    <span class="status disabled">Desativado</span>
      @endif --}}

      @foreach ($orcamento as $orcamentos)

      @if ($orcamentos->empresa_id == '1') 
     

      <div class="body-form d-flex justify-content-center align-middle position-relative">

        <div class="container h-100">
            <div class="row h-100 d-flex flex-column flex-lg-row flex-xl-row">
                
                <div id="form2" class="form-animative form-image col col-xl-6 h-100 col-lg-6 justify-content-center align-middle"
                    style="background-image:url('https://cdn.pixabay.com/photo/2016/12/29/18/44/background-1939128__480.jpg');background-repeat: no-repeat;z-index: 2;"></div>
                    <div id="form"  style="padding:0px;"
                    class="form-animative col col-xl-6 col-lg-6 d-flex flex-column h-100 justify-content-center" >
                        <!-- text -->

                        @foreach ($criar_empresa as $criar_empresas)

                        <div id="here"  class="formtest h-100 d-none">
                            <div class="d-flex flex-column h-100">
                                <div class="display-4">Hello There,</div>
                            <div class="h4 text-center">We got some information about you.</div>
                            <div class="container mt-3 d-flex flex-column justify-content-around" style="flex:1 1 auto">
                                <div class="text-center h1 field">
                                    John Doe
                                </div>
                                <div class="row flex-row ">
                                    <div class="col-4">
                                        <i class="material-icons" style="font-size:36px">AQUI!!!!!</i>
                                    </div>
                                    <div class="pt-2 field">xxx@gmail.com</div>
                                </div>
                                <div class="row flex-row">
                                    <div class="col-4">
                                        <i class="fas fa-birthday-cake" style="font-size: 36px;"></i>
                                    </div>
                                    <div class="pt-2 field">10-1-2000</div>
                                </div>
                                <div class="row flex-row">
                                    <div class="col-4">
                                        <i class="fas fa-transgender-alt" style="font-size: 36px;"></i>
                                    </div>
                                    <div class="pt-2 field">Male</div>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                        <!-- /text -->
                        <form id="here" class="formtest m-3"> 
                            <div class="row">
                            <div class="form-group col-4 col-xl-6 col-lg-6"> 
                                <label for="name">Empresa</label>
                                <input type="text" class="form-control corner-rounded" id="name" name="nama"  value="{{$criar_empresas->Nome_Empresa}}">
                            </div>
                            <div class="form-group col-4 col-xl-6 col-lg-6 ">
                                <label for="emailAddress">Cnpj</label>
                                <input type="email" class="form-control corner-rounded" name="email" id="emailAddress" value="{{$criar_empresas->Cnpj}}"
                                    aria-describedby="emailHelp" placeholder="Masukan Email">
                            </div>
                            <div class="form-group col-4 col-xl-6 col-lg-6 ">
                                <label for="BirthDate">E-mail</label>
                                <input class="form-control corner-rounded" name="date" id="BirthDate" value="{{$criar_empresas->Email}}" aria-describedby="emailHelp"
                                   type="email">
                            </div>
                            <div class="form-group col-4 col-xl-6 col-lg-6 ">
                                <label for="BirthDate">Telefone</label>
                                <input class="form-control corner-rounded" name="date" id="BirthDate" value="{{$criar_empresas->Email}}" aria-describedby="emailHelp"
                                   type="text">
                            </div>
                            <div class="form-group col-4 col-xl-6 col-lg-6 ">
                                <label for="BirthDate">Site</label>
                                <input class="form-control corner-rounded" name="date" id="BirthDate" value="{{$criar_empresas->Email}}" aria-describedby="emailHelp"
                                   type="text">
                            </div>
                            <div class="form-group col-6 col-xl-12 col-lg-12 ">
                                <label for="BirthDate">Logo</label>



                                <div class="upload">
                                  <input type="file" title="" id="image" name="image"  class="drop-here">
                                  <div class="text text-drop"><img src="/img/empresa/{{$criar_empresas->image}}" width="100%" />
                                  </div>
                                  
                                  <div class="text text-upload">Enviando</div>
                                  <svg class="progress-wrapper" width="300" height="300">
                                    <circle class="progress" r="115" cx="150" cy="150"></circle>
                                  </svg>
                                  <svg class="check-wrapper" width="130" height="130">
                                    <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                  </svg>
                                  <div class="shadow"></div>
                    
                                </div></div></div>
                          
                         
                        <div class="d-flex justify-content-end mt-3">
                            <button type="button" class="container btn btn-primary corner-rounded" onclick="saving()">Save</button>
                        </div>
                        <!-- <div class="row"></div> -->
                      
                        </form>
                    </div>
            </div>


        </div>

    </div>

    @endforeach

      {{-- <div class="container">

        <h1 class="brand"><span>Phoenix Web Dessssign</span></h1>
      
        <div class="wrapper">
      
          <!-- COMPANY INFORMATION -->
          <div class="company-info">
            @foreach ($criar_empresa as $criar_empresas)
            <h3>{{$criar_empresas->Nome_Empresa}}</h3>

      
            <ul>
              <li><i class="fa fa-road"></i>{{$criar_empresas->Cnpj}}</li>
              <li><i class="fa fa-phone"></i> {{$criar_empresas->Telefone}}</li>
              <li><i class="fa fa-envelope"></i> {{$criar_empresas->Email}}</li>
            </ul>
          </div>
            
          @endforeach
          <!-- End .company-info -->
      
          <!-- CONTACT FORM -->
          <div class="contact">
            <h3>E-mail Us</h3>
      
            <form id="contact-form">
      
              <p>
                <label>Empresa</label>
                <input type="text" name="name" id="name" value="{{$criar_empresas->Nome_Empresa}}" required>
              </p>
      
              <p>
                <label>CNPJ</label>
                <input type="text" name="company" id="company" value="{{$criar_empresas->Cnpj}}">
              </p>
      
              <p>
                <label>E-mail</label>
                <input type="email" name="email" id="email" value="{{$criar_empresas->Email}}" required>
              </p>
      
              <p>
                <label>Telefone</label>
                <input type="text" name="phone" id="phone" value="{{$criar_empresas->Telefone}}" required>
              </p>
              <p>
                <label>Site</label>
                <input type="text" name="phone" id="phone" value="{{$criar_empresas->Site}}" required>
              </p>
      
              <p class="full">
                <label>Imagem</label>
                <input type="file" id="image" name="image" class="form-control-file" />
                <img src="/img/empresa/{{$criar_empresas->image}}" width="200px" />

              </p>


             
      
              <p class="full">
                <button type="submit">Submit</button>
              </p>
      
            </form>
          
            <!-- End #contact-form -->
          </div>
          <!-- End .contact -->
      
        </div>
        <!-- End .wrapper -->
      </div>
      <!-- End .container -->
      <!-- partial --> --}}
      
      @else 
      

      <form action="/minha_empresa" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault01">Nome da Empresa </label>
        <input type="text" class="form-control" id="Nome_Empresa" name="Nome_Empresa" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationDefault02">CNPJ</label>
        <input type="text" class="form-control" id="Cnpj" name="Cnpj" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationDefaultUsername">E-mail</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
          </div>
          <input type="text" class="form-control" id="Email" name="Email" required>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Telefone </label>
        <input type="text" class="form-control" id="Telefone" name="Telefone"  required>
      </div>
  
      <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Site </label>
        <input type="text" class="form-control" id="Site" name="Site"  required>
      </div>

      <hr>
         <div class="upload">
          <input type="file" title="" id="image" name="image"  class="drop-here">
          <div class="text text-drop">Sua Logo</div>
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
    </div>
<hr>
  
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </form>
  
  
  
  
    </div> 
             
  @endif
  @endforeach








   
    
    

   

<!-- partial -->
@endsection