@extends ('layouts/main')

@section ( 'content' )
    <h2> {{ $post->post_title }} </h2>
    <h4> Author : {{ $author_name }} </h4>
    <p> {{ $post->post_content }} </p>
@endsection