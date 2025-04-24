# Seletiva WSBA

Projeto frontend para a seletiva da Worldskills Bahia.

## Como executar o projeto

1. Instale o Xampp na máquina
2. Instale o composer para atualizar pacotes caso seja necessário
3. Abra o projeto no VsCode 
4. Execute php artisan migrate e o commando sql localizado em database (verifique o banco de dados no seu software gerenciador como phpmyadmin ou heidisql)
5. No terminal em baixo digite `php artisan serve`
6. Acesse a aplicação na porta localhost:3000/

Rotas para acessar: 

* /produtos: Tela inicial demonstrando todos os produtos 
* /produtos/visualizar: Tela demonstrando um único produto
* /produtos/cadastrar: Tela para cadastrar produtos
* /produtos/avaliar: Tela para avaliar produtos

