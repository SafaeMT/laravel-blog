@extends ('layouts.app')

@section ( 'content' )
<div class="container">
    <div class="row">
        <article class="col-md-8 offset-md-2">
            <h2 class="pb-0 mb-0 text-info font-weight-bold">{{ $post->post_title }}</h2>
            <p class="pb-1 mb-4 text-secondary border-bottom">Publié le {{ $post->post_date }} par <span class="lead font-weight-bold font-italic">{{ $author_name }}</span></p>
            <p class="mx-5 text-justify lead"> {{ $post->post_content }} </p>
        </article>

        <aside class="col-md-8 offset-md-2 py-4">
            <div class="card">
                <div class="card-header">Saisissez votre commentaire :</div>
                <div class="card-body">
                    <form action="{{ route('comment') }}" method="post">
                        @csrf
                        @guest
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Nom:') }}</label>

                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" />

                                    @error('user_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email:') }}</label>

                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" />

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @endguest

                        <div class="form-group row">
                            <label for="message" class="col-md-2 col-form-label text-md-right">{{ __('Message:') }}</label>
                            <div class="col-md-9">
                                <textarea id="message" class="form-control @error('body') is-invalid @enderror" name="body" rows="5">{{ old('body') }}</textarea>
                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="post_id" value={{ $post->id }} />

                        <div class="form-group row mb-0">
                            <div class="btn col-md-3 offset-md-8">
                                <input class="btn btn-block btn-primary" type="submit" value="Envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="my-4 card">
                <div class="card-header">Commentaires publiés:</div>
                <ul class="list-group list-group-flush">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <p class="lead text-primary">Par: {{ $comment->user_name }}</p>
                        <p class="lead">{{ $comment->body }} </p>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </aside>
</div>
@endsection
