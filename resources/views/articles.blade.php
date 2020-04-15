@extends ('layouts.app')

@section ( 'content' )
<h2 class="pb-0 mb-0 font-weight-bold text-center"> Tous les articles du blog </h2><br><br>
<div class="container">
    <ul class="list-group list-group-flush">
    @foreach($posts as $post)
        <li class="list-group-item"><a href="articles/{{ $post->post_name }}">{{ $post->post_title }}</a></li>
    @endforeach
    </ul>
</div>
@endsection