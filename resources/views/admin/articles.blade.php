@extends ('layouts.app')

@section ( 'content' )
    <h3> Articles </h3>
    <a href="{{ route('articles.create') }}"> Créer un nouvel article </a>
    <ul>
    @foreach ($posts as $post)
        <li>
            <a href="{{ route('articles.show', $post->post_name) }}"> {{ $post->post_title }} </a>
            <a href="{{ route('articles.edit', $post->post_name) }}"> Modifier </a>
            <form action="{{ route('articles.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button> Supprimer </button>
            </form>
        </li>
    @endforeach
    </ul>
@endsection