{{-- TODO: Criar página de avaliação --}}

<x-layouts.layout>
    <x-form action="{{route('avaliar')}}" class="form--survey-product">
        <section class="input-box row">
            <input type="text" class="input input--text" name="name" id="name" placeholder="Nome do Produto">
        </section>
        <section class="input-box row">
            <input type="text" class="input input--text" placeholder="Empresa Fabricante" name="company" id="company">
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
            <input type="text" class="input input--text" placeholder="Código do Produto" name="product_code" id="product_code">
        </section>
        <section class="input-box row">
            <input type="number" class="input input--number" placeholder="Preço" name="price" id="price">
        </section>

        <section class="row row--btn g-20px">
            <x-btn-cancel>
                Cancelar registro
            </x-btn-cancel>
            
            <x-btn-submit>
                Registrar Avaliação 
            </x-btn-submit>
        </section>
    </x-form>
 </x-layouts.layout>

{{-- Criando a página "Registro de Avaliação".
Usuário(s): Avaliadores
A página – Registro de Avaliação – deverá conter, nesta ordem:
 Texto Informativo: “Nome/Título do Produto”
 Texto Informativo: “Fabricante”
 Texto Informativo: “Categoria”
 Texto Informativo: “Subcategoria”
 Texto Informativo: “Orientações sobre critérios” – texto localizado na
seção “Padrões de Elementos, Fluxos e Informações”
OBS.: Todos os campos acima devem ser seguidos de seus
respectivos valores textuais, ex.:
Fabricante: <nome_do_fabricante>
 Conjunto de marcação de nota de critérios – cada conjunto deve ter:
◦ Nome do Critério
◦ Slider de Interação
 Campo de texto para inserir “Comentários da Avaliação”
 Botão de “Registrar Avaliação” – deve possuir a mesma função e fluxo
do botão de “Submeter” na seção “Padrões de Elementos, Fluxos e
Informações”

Slider de Interação:

Este slider tem a mesma estrutura do Slider de Amostragem, com a adição de que o
indicador/seletor deve ser interagível

Sumário ← clique para voltar para
 Botão de “Cancelar Registro” – possui a mesma função e fluxo do
botão de “Cancelar” na seção “Padrões de Elementos, Fluxos e
Informações”

[Na página, é necessário que todos os critérios referentes ao produto estejam
disponíveis para marcação. Os valores devem ser registrados no banco de
dados para futuras consultas e operações.]
Considerando que o campo de comentários deve ter um limite de 3000
caracteres, deve haver um contador de caracteres na parte inferior direita, fora
do campo de comentários, no formato xxxx/yyyy, onde “xxxx” é o número de
caracteres contidos no texto e “yyyy” é o limite de caracteres, no caso, 3000.
Os textos são meramente informativos, para descrever as informações sobre o
produto no qual o usuário está avaliando.
O slider deve possuir localizações bem definidas para refletir nos valores das
notas. Isto é, deve haver 20 posições igualmente espaçadas no intervalo de
comprimento da barra, cada uma refletindo a nota dentro do intervalo. --}}
