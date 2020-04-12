@extends ('layouts/main')

@section ( 'content' )
    <h1> Articles </h1>
        <ul>
            <br>
            @foreach ( $posts as $post )
            <p style="color: blue;"><strong> <a href="/Articles"> {{ $post->post_name }} </a></strong> | {{ $post->post_category }}</p>
            <li>  {{ $post->post_title }}</li>
            <li>  {{ $post->post_content}}</li>
            <br>
             @endforeach
</ul>
@endsection