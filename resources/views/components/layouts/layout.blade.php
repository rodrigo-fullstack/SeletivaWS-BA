<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de Produtos</title>
    <link rel="stylesheet" href="{{asset('assets/main.css')}}">

</head>
<body>
    <x-header />

    {{$slot}}
</body>
</html>

{{-- Estrutura da Página Mestra.
A página mestra é a página que contém os elementos que devem estar dispostos
em todas as páginas da solução, e que conterão majoritariamente os requisitos de
navegação, e outras informações estáticas.
A página mestra deve conter:

O ícone de menu, ao ser interagido, deve ativar o menu em animação vertical (cima
para baixo), contendo as opções “Acessar Perfil”, “Registrar Avaliação”, “Gerenciar
Produtos”.
O botão de Gerenciamento deve estar acessível/visível somente para os usuários
Representantes.
Sumário ← clique para voltar para
OBS.: Para fins de teste, gerar duas páginas com URLs diferentes, nos quais cada
uma delas representará a visão de do avaliador e a visão do representante. Um
exemplo de formato é “http://<nome_do_site_ou_localhost>/avaliador”. O mesmo
formato pode ser usado para o representante --}}

{{-- 
Definição dos Usuários.
A solução terá dois tipos de usuários: avaliadores (consumidores) e representantes
(empresas)
Os avaliadores devem ter a capacidade de emitir avaliações de produtos que foram
cadastrados pelos representantes, como também visualizar avaliações de quaisquer
produtos dentro do sistema. Eles podem responder as réplicas submetidas pelos
representantes, permitindo um diálogo entre ambos.
Os representantes devem ter a capacidade de cadastrar os produtos que poderão
ser avaliados, como também verificar as avaliações que forem submetidas. Os
representantes também podem, através do sistema, emitir réplicas (respostas) às
avaliações, seja em forma de agradecimento ou em forma de questionamento.
--}}