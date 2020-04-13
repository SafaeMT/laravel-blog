@extends ('layouts/main')

@section ( 'content' )
    <h1> Articles </h1>
        <ul class="hover">
            <br>
            @foreach ( $posts as $post )
            
            <p style="color: blue;"><strong><a href="{{ route('article', ['post_name' => $post->post_name]) }}"> {{ $post->post_title }} </strong></a>  | {{ $post->post_category }}</p>
            <li>  {{ $post->post_title }}</li>
            <li>  {{ $post->post_content}}</li>
            <br>
             @endforeach
</ul>
@endsection