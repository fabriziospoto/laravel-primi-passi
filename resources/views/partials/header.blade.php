<header> {{-- Logo La Molisana --}}
    <img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="La Molisana">
    <nav> {{-- Nav con tre voci menu --}}
        <ul>
            <li> <a href="{{ route('home') }}">Home</a> </li>   {{-- Ogni voce si collega alla route corrispondente --}}
            <li id="li-central"> <a href="{{ route('prodotti') }}">Prodotti</a> </li>
            <li> <a href="{{ route('contatti') }}">Contatti</a> </li>
        </ul>
    </nav>
</header>
