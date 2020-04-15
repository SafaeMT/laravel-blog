@extends ('layouts.app')

@section ( 'content' )
<div class="container">
    <h2 class="pb-0 mb-0 font-weight-bold text-center"> Mes articles </h2><br>
    <a href="{{ route('articles.create') }}" class="btn btn-success"> Créer un nouvel article </a>
    <ul class="list-group pt-1 pb-4">
    @foreach ($posts as $post)
        <li class="list-group-item d-flex align-items-center">
            <a href="{{ route('articles.show', $post->post_name) }}" class="flex-fill"> {{ $post->post_title }} </a>
            <a href="{{ route('articles.edit', $post->post_name) }}" class="mx-4 btn btn-primary text-white"> Modifier </a>
            <form action="{{ route('articles.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-white"> Supprimer </button>
            </form>

        </li>
    @endforeach
    </ul>
</div>
@endsection
