@extends('layout.public')

@section('main')
    <article>
        <h1>MAIN</h1>
    </article>
    {{-- all'interno della sezione includo un partial a cui passo una variabile.
    quella variabile è passata dal controller alla sezione e da li al partial al suo interno --}}

    @include('partials.bunner', compact('a'))
@endsection
