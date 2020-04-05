@extends ('layouts/main')

@section ( 'content' )
    <h1> Home </h1>
    <ul>
    @foreach ( $posts as $post )
        <li><a href="Articles/{{ $post->post_name }}"> {{ $post->post_title }} </a></li>
    @endforeach
    </ul>
@endsection
