<header class="header">
    <nav class="header__nav-bar">
        <section class="row header__btn-container alc">
            <section class="container header__menu-btn-container">
                <button class="btn btn--menu">
                    <img src="{{asset('assets/img/hamburger_icon_32px.png')}}" alt="">
                </button>
            </section>
    
            <section class="container header__logo-container">
                <a class="logo header__logo" href="{{ route('busca') }}">
                    <img src="{{asset('assets/img/logo Avaliare.png')}}" alt="Logo" width="100">
                </a>
            </section>

            <section class="user-info">
                {{Auth::user()->email ?? 'Não logado'}}
            </section>
        </section>

        <form action="{{route('buscaSubmeter')}}" class="row header__search-container" method="post">
            @csrf
            <button type="submit" class="btn btn--search">
                Buscar Produto
            </button>
            
            <input type="text" class="input input--search" name="search" id="search">
        </form >

        {{-- Acessível somente para representantes --}}
        @if(Auth::user()->user_type === 'representante')
            <section class="container">
                <button class="btn btn--manage">
                    Gerenciamento    
                </button>            
            </section>
        @endif
    </nav>

    <aside class="side-bar header__side-bar hidden">

    </aside>
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