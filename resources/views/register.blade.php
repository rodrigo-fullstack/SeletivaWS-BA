{{-- Acessível somente a usuários representantes --}}
<x-layouts.layout>
    <x-form class="form--register-product">
        <section class="input-box row">
            <input type="text" class="input input--text" name="name" id="name" placeholder="Nome do Produto">
        </section>
        <section class="input-box row">
            <label for="category">Categoria</label>
            <select class="select" name="category" id="category" placeholder="Categoria do Produto">
                <option value="a">Teste</option>
                <option value="b">C</option>
                <option value="ac">D</option>
                <option value="ad">e</option>
            </select>
        </section>
        <section class="input-box row">
            <label for="subcategory">Subcategoria</label>
            <select class="select" name="subcategory" id="subcategory" placeholder="Categoria do Produto">
                <option value="a">Teste</option>
                <option value="b">C</option>
                <option value="ac">D</option>
                <option value="ad">e</option>
            </select>
        </section>
        <section class="input-box row">
            <input type="text" class="input input--text" placeholder="Empresa Fabricante" name="company" id="company">
        </section>
        <section class="input-box row">
            <input type="text" class="input input--text" placeholder="Código do Produto" name="product_code" id="product_code">
        </section>
        <section class="input-box row">
            <input type="number" class="input input--number" placeholder="Preço" name="price" id="price">
        </section>

        <section class="row row--btn g-20px">
            <x-btn-cancel>
                Cancelar Cadastro
            </x-btn-cancel>
            
            <x-btn-submit>
                Finalizar Cadastro
            </x-btn-submit>
        </section>
    </x-form>
</x-layouts.layout>

{{-- 
Criando a página “Cadastro e Gerenciamento de Produto”.
Usuário(s): Representantes
A página – Cadastro de Produto – deverá conter:
1) Campos de texto referentes aos dados a serem informados pelo
Representante:
 Nome do Produto (texto)
 Categoria do Produto (dropdown menu)
 Subcategoria do Produto (dropdown menu)
 Nome da Empresa Fabricante (texto)
 Código do Produto / Código de Barras (texto, formato EAN-13 – 13
dígitos numéricos)
 Preço Sugerido (numérico real, limite de 2 decimais)
 Descrição do Produto (texto/parágrafo)



2) Demonstração de Critérios Pertinentes
A partir da categoria e subcategoria selecionados, o sistema definirá o
conjunto de critérios relevantes para o produto. Os mesmos devem ser
demonstrados para o usuário de forma que o mesmo esteja ciente no que
será avaliado o produto atualmente cadastrado.
Estes critérios devem estar dispostos em formato de lista ou outro formato de
separação de dados, o qual tenha uma separação de, pelo menos 6px entre
eles. Um exemplo de possibilidade segue abaixo:
Critério 1 | Critério 2 | Critério 3 | Critério 4 | Critério 5 | Critério 6

3) Inclusão de Critérios Opcionais
O usuário pode inserir até dois novos critérios únicos deste produto
para compor a lista de critérios totais do produto.
Estes critérios devem ser intuitivos e, para isto, o usuário deve colocar
um pequeno texto explicativo para ser demonstrado via tooltip.
Sumário ← clique para voltar para
Na página, cada critério opcional deve ter:
 Texto Informativo: “Inserir Critérios Opcionais”
 Caixa de seleção (combobox ou radiobox)
 Texto Informativo “Nome do Critério”
 Campo de Dados; “Nome do Critério” (texto) [á direita do
texto informativo]
 Texto Informativo “Nome do Critério”
 Campo de Dados: “Descrição/Explicação do Critério”
(texto) [á direita do texto informativo]

4) Botão “Finalizar Cadastro”
Deve possuir a mesma função e fluxo do botão de “Submeter” na
seção “Padrões de Elementos, Fluxos e Informações”
5) Botão “Cancelar Registro”
Deve possuir a mesma função e fluxo do botão de “Cancelar” na seção
“Padrões de Elementos, Fluxos e Informações”
Ambos os botões devem estar abaixo do texto, com afastamento lateral
mínimo de 20px entre eles. Os botões devem possuir cores que atendam a
referência de ações de aprovação ou negação.
////
--}}