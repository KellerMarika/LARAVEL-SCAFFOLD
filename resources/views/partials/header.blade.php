<article>
    
    <nav>
        <ul class="list-inline">
          <h1 class="list-inline-item">HEADER</h1>

            {{-- $navlinks prende i valori dal database config --}}
            @foreach ($navLinks as $link)
                <li class="list-inline-item">{{ $link['title'] }} </li>
            @endforeach

        </ul>
    </nav>
</article>
