# Seletiva WSBA

Projeto frontend para a seletiva da Worldskills Bahia.

## Como executar o projeto

1. Instale o Xampp na máquina
2. Instale o composer para atualizar pacotes caso seja necessário
3. Abra o projeto no VsCode 
4. Execute comando sql localizado em database: `database.sql`
5. Depois execute `php artisan migrate` (verifique o banco de dados no seu software gerenciador como phpmyadmin ou heidisql)
6. Por último execute o comando `php artisan db:seed --class=DatabaseSeeder` para inserir os dados do banco(verifique o banco de dados no seu software gerenciador como phpmyadmin ou heidisql)
7. Digite `php artisan serve` no terminal para iniciar a aplicação
8. Acesse a aplicação na porta localhost:3000/

Rotas para acessar: 

* /produtos: Tela inicial demonstrando todos os produtos 
* /produtos/visualizar: Tela demonstrando um único produto
* /produtos/cadastrar: Tela para cadastrar produtos
* /produtos/avaliar: Tela para avaliar produtos

