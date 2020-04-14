@extends ('layouts.app')

@section ( 'content' )
    <h3> Articles </h3>
    <ul>
    @foreach ($posts as $post)
        <li><a href="articles/{{ $post->post_name }}"> {{ $post->post_title }} </a></li>
    @endforeach
    </ul>
@endsection