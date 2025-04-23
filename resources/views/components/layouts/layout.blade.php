<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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