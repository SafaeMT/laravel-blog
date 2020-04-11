@extends ('layouts/main')

@section ( 'content' )
    <h3> Articles </h3>
    <a href="articles/create"> Créer un nouvel article </a>
    <ul>
    @foreach ($posts as $post)
        <li>
            <a href="../articles/{{ $post->post_name }}"> {{ $post->post_title }} </a>
            <a href="articles/{{ $post->post_name }}/edit"> Modifier </a>
            <form action="articles/{{ $post->post_name }}" method="POST">
                @method('DELETE')
                <button> Supprimer </button>
            </form>
        </li>
    @endforeach
    </ul>
@endsection