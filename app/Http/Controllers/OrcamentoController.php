<?php

namespace App\Http\Controllers;

use App\Models\Empresa_cliente;
use Illuminate\Http\Request;
use App\Models\Orcamento;
use App\Models\Empresa;
use App\Models\Produto;
use Symfony\Component\Console\Input\Input;

class OrcamentoController extends Controller
{
    public function create()
    {

        $empresa_cliente = Empresa_cliente::all();

        $orcamento = Orcamento::all();
        $minha_empresa = Empresa::all();
        $produto = Produto::all();

        // $Produto = [$produto];
        // $Quantidade = [$orcamento];
        // $Preco = [$orcamento];




        return view(
            'orcamento.create_orcamento',
            [
                'empresa_cliente' =>   $empresa_cliente,
                'orcamento'       =>   $orcamento,
                'minha_empresa'   =>   $minha_empresa,
                'produto'         =>   $produto
            ]
        );
    }




    public function store(Request $request)
    {
       // dd($request->all());
       $order = Orcamento::create($request->all());

        // $produto_id = $request->input('produto_id', []);
        // $Quantidade = $request->input('Quantidade', []);
        // for ($product=0; $product < count($produto_id); $product++) {
        //     if ($produto_id[$product] != '') {
        //         $order->produto_id()->attach($produto_id[$product], ['Quantidade' => $Quantidade[$product]]);
        //     }
        // }

        // $produtos =   $request->input('produtos', []);
        // $Quantidade = $request->input('Quantidade', []);
        // for ($product=0; $product < count($produtos); $product++) {
        //     if ($produtos[$product] != '') {
        //         $order->produtos()->attach($produtos[$product], ['Quantidade' => $Quantidade[$product]]);
        //     }
        // }

         $products = $request->input('products', []);
         $quantities = $request->input('quantities', []);
         for ($product=0; $product < count($products); $product++) {
             if ($products[$product] != '') {
                 $order->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
             }
         }
        
        // $criar_orcamento =  Orcamento::create($request->all());

        // $criar_orcamento -> produto_id = $request->produto_id;
     


        
//       $Numero_Orcamento       = $request->Numero_Orcamento;
//       $Data                   = $request->Data;
//       $Validade               = $request->Validade;
//       $Garantia               = $request->Garantia;
//       $Forma_Pagamento        = $request->Forma_Pagamento;
//       $Descricao              = $request->Descricao;
//       $Desconto               = $request->Desconto;
//       $Taxas                  = $request->Taxas;
//       $empresa_id             = $request->empresa_id;
//       $empresa_cliente_id     = $request->empresa_cliente_id;
//    //   $produto_id             = $request->produto_id;
//    //   $Quantidade             = $request->Quantidade;

//       for ($i=0; $i < count($produto_id); $i++) {
//           $datasave = [
//              // 'produto_id' =>$produto_id[$i],
//             //  'Quantidade' => $Quantidade[$i],
//               'Numero_Orcamento' => $Numero_Orcamento,
//               'Data' => $Data,
//               'Validade' => $Validade,
//               'Garantia' => $Garantia,
//               'Descricao' => $Descricao,
//               'Desconto' => $Desconto,
//               'Taxas' => $Taxas,
//               'empresa_id' => $empresa_id,
//               'empresa_cliente_id' => $empresa_cliente_id,
//               'Numero_Orcamento' => $Numero_Orcamento,
//               'Forma_Pagamento' => $Forma_Pagamento,

//           ];
//           Orcamento::insert($datasave);
//       }

        // $products = $request->input('produto_id', []);
        // $quantities = $request->input('Quantidade', []);
        // for ($product=0; $product < count($products); $product++) {
        //     if ($products[$product] != '') {
        //         $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
        //     }
        // }
    
        return redirect('/orcamento/show_orcamento')->with('msg', 'Orçamento criado com sucesso');
    }
        
        // $produtos = $request->input('produto_id',[]);
        // $Quantidade = $request->input('Quantidade',[]);
        // //for ($produto=0; $produto < count($produtos); $produto++) {
        //   //  if ($produtos[$produto] != '') {
        // $criar_orcamento-> attach($produtos[],
        //          ['Quantidade' => $Quantidade]);
            
        
      //  return redirect('/orcamento/show_orcamento')->with('msg', 'Orçamento criado com sucesso');
    

       // $criar_orcamento->save();

    //    $criar_orcamento = new Orcamento;
    //     $criar_orcamento -> Numero_Orcamento       = $request->Numero_Orcamento;
    //     $criar_orcamento -> Data                   = $request->Data;
    //     $criar_orcamento -> Validade               = $request->Validade;
    //     $criar_orcamento -> Garantia               = $request->Garantia;
    //     $criar_orcamento -> Forma_Pagamento        = $request->Forma_Pagamento;
    //     $criar_orcamento -> Descricao              = $request->Descricao;
    //     $criar_orcamento -> Quantidade             = $request->Quantidade;
    //    // $criar_orcamento -> Valor                  = $request->Valor;
    //     $criar_orcamento -> Desconto               = $request->Desconto;
    //     $criar_orcamento -> Taxas                  = $request->Taxas;
    //     $criar_orcamento -> empresa_id             = $request->empresa_id;
    //     $criar_orcamento -> empresa_cliente_id     = $request->empresa_cliente_id;
    //     $criar_orcamento -> produto_id             = $request->produto_id;
    //     $criar_orcamento -> items                  = $request->items;

    //     $criar_orcamento->save();
    


    public function show()
    {

        $orders = Orcamento::with('produto')->get();

        //$orders = Orcamento::all();

        $empresa_cliente = Empresa_cliente::all();
        $empresa = Empresa::all();
        $produto = Produto::all();

        $search = request('search');

        if ($search) {
            $criar_orcamento = Orcamento::where([['Numero_Orcamento', 'like', '%' . $search . '%']])->get();
        } else {
            $criar_orcamento = Orcamento::all();
        }

        return view('orcamento.show_orcamento', [
            'orders'            => $criar_orcamento,
            'search'            => $search,
            'empresa_cliente'   => $empresa_cliente,
            'produto'           => $produto,
            'empresa'           => $empresa
        ]);
    }



    public function edit($id)
    {

        $editar_orcamento = Orcamento::findOrFail($id);
        $empresa_cliente = Empresa_cliente::all();
        $empresa = Empresa::all();
        $produto = Produto::all();

        $titulo = "Edita Cliente";


            return view('orcamento.edit', [
                'editar_orcamento' => $editar_orcamento, 
                'empresa_cliente' => $empresa_cliente,
                'empresa' => $empresa,
                'produto' => $produto,
            
            compact('titulo')]);
    }

    public function update(Request $request)
    {

        Orcamento::findOrFail($request->id)
            ->update($request->all());


        return redirect('/orcamento/show_orcamento')
        ->with('msg', 'Orçamento editado com sucesso!');
    }

    public function gerar_pdf($id)
    {
        $orders = Orcamento::with('produto')->get();

        $orcamento = Orcamento::findOrFail($id);

        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = Empresa::all();

        $produto = Produto::all();


        //Total 1  Quantidade X Preco do Produto
         //   $qtd = $produto->P; 
        //   
// $qtd = $produto->    precoproduto = $orcamento->Quantidade;
           // $precoproduto = $order->Preco_Produto;
         //   $total1 = $qtd + $precoproduto;


        
        // //Taxas

        //$Total1=item->Preco_Produto}} * {{$item->pivot->Quantidade}})
        // $taxas = $orcamento->Taxas;

        // //Descontos 
        // $descontos = $orcamento->Desconto;

        // //Total 2 Total + Taxa + Subtotal - Descontos
        // $total2 = $total1 + $taxas - $descontos;
        
        // {{$orcamento->Quantidade}} * {{$orcamento->produto->Preco_Produto}}

      //  $dados_orcamento = $orcamento->count(); 


        return view('orcamento.gerar_pdf', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
            'orders'          => $orders,
         //'taxas'            => $taxas,
        //    'total1'        => $total1,
        //  'total2'          => $total2
        ]);
    }

    public function destroy($id)
    {

        Orcamento::findOrFail($id)->delete();
        return redirect('/orcamento/show_orcamento')->with('msg', 'Orçamento deletado com sucesso!');
    }
}
