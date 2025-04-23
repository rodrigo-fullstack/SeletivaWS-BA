<section class="row product">
    <section class="container container--img product__img-container">
        <img src="{{asset('assets/img/')}}" alt="[Imagem Produto]" class="img product__img">
    </section>

    <section class="container product__information">
        <h1 class="title product__title">
            [Título]
        </h1>
        <section class="row product__information-category">
            <span class="category text product__category">
                [Categoria]
            </span>

            <span class="category text product__subcategory">
                [Subcategoria]
            </span>
        </section>
        
        <section class="row product__general-information">
            <span class="company text product__info product__company">
                [Fabricante]
            </span>

            <span class="code text product__info product__code">
                [Código do Produto]
            </span>
        </section>

        <section class="slider">
            {{-- Slider --}}
            <h1>[Slider]</h1>
        </section>
    </section>

    <section class="row jcc product__avaliation-container">
        <span class="avaliation product__info">
            [Avaliação]
        </span>
    </section>
</section>

{{-- 

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

--}}