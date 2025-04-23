<x-layouts.layout>
    <section class="container container--product">
        <section class="product-container--top-section">
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
                </section>
        </section>
        
        <section class="product-container--bottom-section">
            <button class="btn btn--desc">
                Descrição do Produto
            </button>
            
            <button class="btn btn--desc">
                Avaliação do Produto
            </button>
        </section>
    </section>
 </x-layouts.layout>

{{-- Criando a página "Página do Produto"
Usuário(s): Avaliadores e Representante
A página – Página do Produto – deverá conter:
 Uma imagem do produto, localizada à esquerda
 Nome ou título do produto
 Categoria e subcategoria do produto
 Código de barras no formato correto especificado
 Descrição do produto
 Lista de avaliações
 Botão “Descrição do Produto”
 Botão “Avaliações”


A página deve ser dividida em três divisões: a seção central superior, seção
central inferior e coluna direita.
Sumário ← clique para voltar para
Na seção superior, devem estar demonstrados a imagem do produto, o título, a
categoria, subcategoria e código do produto.
Na seção central inferior, deve estar a descrição do produto e as avaliações.
Estas avaliações devem estar resumidas em containers verticais, contendo o
nome do usuário, a média da nota (somente com um slider) e cinco linhas do
comentário avaliativo do usuário. Ao final, deve ter um texto ou botão com título
“Ver Avaliação Completa”.
Na coluna direita da página, devem estar demonstrados todos os critérios com
seus devidos sliders e valores numéricos, arranjados em forma vertical. Estes
valores devem ser a média aritmética das notas do critério específico registrado
pelos usuários. O primeiro slider deve ser a nota geral (média de todos os
critérios). Abaixo deste, devem estar demonstrados os outros critérios,
individualmente, contidos no produto. Todos os sliders devem seguir o mesmo
padrão demonstrado no tópico de “Padrões de Elementos e Informações” --}}
