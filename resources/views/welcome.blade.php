@extends ('layouts.app')

@section ( 'content' )
    <h2 class="pb-0 mb-0 font-weight-bold text-center"> Voici une sélection des articles </h2><br><br>
    <div class="container">
        <div class="row">
        @foreach ( $posts as $post )
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->post_title }}</h5>
                        <p class="card-text">{{ substr($post->post_content, 0, 100) . '...' }} <a href="articles/{{ $post->post_name }}">Lire plus</a></p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
