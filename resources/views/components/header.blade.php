<header class="header">
    <nav>
        <section class="container">
            <button class="btn btn--menu">
            
            </button>
        </section>

        <section class="container header__search-container">
            <button class="btn btn--search">
                Buscar Produto
            </button>
            <input type="text" class="input input--search">
        </section>

        {{-- Acessível somente para representantes --}}
        <section class="container">
            <button class="btn">
                Gerenciamento    
            </button>            
        </section>
    </nav>

</header>

{{-- 
Uma barra horizontal constando, da esquerda para a direita:
1. Um ícone de menu, no padrão hambúrguer, alinhado à esquerda, com
afastamento de 4px da margem esquerda
2. Um texto com a informação “Buscar Produto”
3. Um campo de texto para o usuário inserir os termos de busca
4. Um botão de “Gerenciamento”, alinhado à direita com separação de 5px da
margem direita, que só poderá ser acessível pelos Representantes
--}}