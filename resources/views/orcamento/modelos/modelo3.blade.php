<style>
    @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {
    background-color: blue;
    font-family: 'Calibri', sans-serif !important
}

.mt-100 {
    margin-top: 50px
}

.mb-100 {
    margin-bottom: 50px
}

.card {
    border-radius: 1px !important
}

.card-header {
    background-color: #fff
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.btn-sm,
.btn-group-sm>.btn {
    padding: .25rem .5rem;
    font-size: .765625rem;
    line-height: 1.5;
    border-radius: .2rem
}
</style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Orçamento</title>
</head>

<body><div class="container-fluid mt-100 mb-100">
    <div id="ui-view">
        <div>
            <div class="card">
                <div class="card-header"> Orçamento <strong># {{$orcamento->Numero_Orcamento ?? ''}}</strong>
                    <div class="pull-right"> <a class="btn btn-sm btn-info" href="#" data-abc="true"><i class="fa fa-print mr-1"></i> Imprimir</a> <a class="btn btn-sm btn-info" href="#" data-abc="true"><i class="fa fa-file-text-o mr-1"></i> Salvar</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-4">
                            <h6 class="mb-3"> <strong><img src="/img/empresa/{{$orcamento->empresa->image}}" width="80" alt=""> 
                            </strong></h6>
                            <div><strong> {{$orcamento->empresa->Nome_Empresa ?? ''}}</strong></div>
                            <div>CNPJ: {{$orcamento->empresa->Cnpj ?? ''}}</div>
                            <div>Telefone: {{$orcamento->empresa->Telefone ?? ''}}</div>
                            <div>Email: {{$orcamento->empresa->Email ?? ''}}</div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mb-3"><strong><img src="/img/empresa/{{$orcamento->empresa_cliente->image}}" width="80" alt=""> 
                            </strong></h6>
                            <div><strong>{{$orcamento->empresa_cliente->Nome_Empresa ?? ''}}</strong></div>
                            <div>CNPJ: {{$orcamento->empresa_cliente->Cnpj ?? ''}}</div>
                            <div>Endereço: {{$orcamento->empresa_cliente->Endereco ?? ''}}
                                {{$orcamento->empresa_cliente->Cidade ?? ''}}
                                - {{$orcamento->empresa_cliente->Estado}}</div>
                            <div>Email: {{$orcamento->empresa_cliente->Email ?? ''}}</div>
                            <div>Teelfone: {{$orcamento->empresa_cliente->Telefone ?? ''}}</div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mb-3"> <strong> Detalhes: </strong></h6>
                            <div>Número do Orçamento<strong> #{{$orcamento->Numero_Orcamento ?? ''}}</strong></div>
                            <div>Data:<strong> {{$orcamento->Data ?? ''}} </strong> </div>
                            <div>Garantia:<strong> {{$orcamento->Garantia ?? ''}} </strong></div>
                            <div>Forma de Pagamento:<strong> {{$orcamento->Forma_Pagamento ?? ''}} </strong></div>
                            <div> Descrição: <strong> {{$orcamento->Descricao ?? ''}}</strong></div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>PRODUTO</th>
                                    <th>CATEGORIA</th>
                                    <th class="center">UNIDADE</th>
                                    <th class="right">PREÇO</th>
                                    <th class="right">TOTAL</th>
                                </tr>
                            </thead>
                            <?php $total2 = 0 ;?>

                            @foreach($orcamento->produto as $item)
                            <tbody>
                                <tr>
                                    <td class="center">{{$item->id}}</td>
                                    <td class="left">{{$item->Nome_Produto}}</td>
                                    <td class="left">{{$item->Categoria_Produto}}</td>
                                    <td class="center">{{$quantidade = $item->pivot['Quantidade'] }}</td>
                                    <td class="right">R${{$preco= $item['Preco_Produto']}}</td>
                                    <td class="right">R$ {{$total1 = $preco * (int)$quantidade}} <?php $total2 += $total1; ?> </td>
                                </tr>
                    
                            </tbody>
                            @endforeach

                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left"><strong>SUBTOTAL</strong></td>
                                        <td class="right">R${{$total2}}</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>DESCONTO</strong></td>
                                        <td class="right"> - R${{$desconto = $orcamento->Desconto}}</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>TAXA</strong></td>
                                        <td class="right">+ R${{$taxa = $orcamento->Taxas}}</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong><BIG>TOTAL </BIG></strong></td>
                                        <td class="right"><strong> <BIG> R${{$total = $total2 + $taxa -$desconto}}</strong> </BIG></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pull-right"> <a class="btn btn-sm btn-success" href="#" data-abc="true"><i class="fa fa-paper-plane mr-1"></i> Enviar p/ Whatsapp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
