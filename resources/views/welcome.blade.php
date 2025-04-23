{{-- Acessível somente a usuários representantes --}}
<x-layouts.layout>
    <form action="" method="post" class="form form--register-product">
        @csrf

        <section class="input-box">
            <input type="text" class="input input--text" name="name" id="name" placeholder="Nome do Produto">
        </section>
        <section class="input-box">
            <label for="category">Categoria</label>
            <select class="select" name="category" id="category" placeholder="Categoria do Produto">
                <option value="a">Teste</option>
                <option value="b">C</option>
                <option value="ac">D</option>
                <option value="ad">e</option>
            </select>
        </section>
        <section class="input-box">
            <label for="subcategory">Subcategoria</label>
            <select class="select" name="subcategory" id="subcategory" placeholder="Categoria do Produto">
                <option value="a">Teste</option>
                <option value="b">C</option>
                <option value="ac">D</option>
                <option value="ad">e</option>
            </select>
        </section>
        <section class="input-box">
            <input type="text" class="input input--text" placeholder="Empresa Fabricante" name="company" id="company">
        </section>
        <section class="input-box">
            <input type="text" class="input input--text" placeholder="Código do Produto" name="product_code" id="product_code">
        </section>
        <section class="input-box">
            <input type="number" class="input input--number" placeholder="Preço" name="price" id="price">
        </section>

        <section class="container container--btn">
            <button class="btn btn--cancel">
                Cancelar Cadastro
            </button>
            
            <button class="btn btn--cancel">
                Finalizar Cadastro
                </button>
        </section>
    </form>
</x-layouts.layout>

{{-- 

Criando a página “Busca e Visualização do Produto”
Usuário(s): Avaliadores e Representante
Esta página refere-se à página principal ou primeira página nesta solução, sendo
acessada quando o usuário buscar por determinado termo e não escolher
nenhuma sugestão prévia dada pelo sistema via dropdown. A página – Busca e
Visualização do Produto – deverá conter (além da página mestra):
 Lista vertical de containers – Cada container deve possuir:
◦ Imagem do produto (à esquerda centralizado)
◦ Título ou nome do produto
◦ Categoria do produto e sub-categoria do produto
◦ Fabricante do produto
◦ Código de referência do produto
◦ Slider de amostragem
◦ Nota numérica do produto

O posicionamento dos elementos acima dentro do container deve seguir o
mais fidedigno possível com o protótipo abaixo:
O tamanho da fonte do título deve ser superior (pelo menos em 2pt),
às informações abaixo. O tamanho da fonte dos elementos textuais deve ser
legível dentro das resoluções destacadas. Deve haver um espaçamento
mínimo entre os elementos textuais para evitar problemas de legibilidade.
A Nota geral deve ser um valor numérico decimal com, no máximo,
uma casa decimal (ex.: 8,3 ou 8.3), com tamanho de fonte igual ou superior
a, no máximo, 1pt a mais, ao tamanho da fonte do “título ou nome do
produto”. A barra de amostragem deve seguir o mesmo padrão disposto
anteriormente no documento.
OBS.: Deve-se mensurar bem os tamanhos dos elementos para evitar
contrastes ou diferenças exageradas como também o dimensionamento e
arranjo dos mesmos dentro do container.


--}}