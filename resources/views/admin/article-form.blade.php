@extends ('layouts.app')

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-4">
            <!-- Contact form -->
            <div class="card">
                <div class="card-header">
                    @if($post ?? '') <!-- post or '' -->
                        {{ __('Formulaire de modification de l\'article') }}
                    @else
                        {{ __('Formulaire d\'ajout d\'un nouvel article') }}
                    @endif
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ $post ?? '' ? route('articles.update', $post) : route('articles.store') }}">
                        @csrf <!-- Required for security reasons -->
                         @if ($post ?? '')
                            @method('PUT')
                        @endif

                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Titre:') }}</label>

                            <div class="col-md-9">
                                @if (old('title'))
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                                @elseif ($post ?? '')
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->post_title }}" />
                                @else
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" />
                                @endif
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="category" class="col-md-2 col-form-label text-md-right">{{ __('Catégorie:') }}</label>
                            <div class="col-md-9">
                                <select id="category" class="form-control @error('category') is-invalid @enderror" name="category">
                                    <option selected disabled>Sélectionnez une catégorie...</option>
                                    @foreach ($categories as $key => $value)
                                        @if (old('category'))
                                            <option {{ old('category') == $key ? "selected" : "" }} value={{ $key }}> {{ $value }} </option>
                                        @elseif ($post ?? '')
                                            <option {{ $post->post_category == $key ? "selected" : "" }} value={{ $key }}> {{ $value }} </option>
                                        @else
                                            <option value={{ $key }}> {{ $value }} </option>
                                        @endif
                                    @endforeach
                                </select>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-2 col-form-label text-md-right">{{ __('Contenu:') }}</label>

                            <div class="col-md-9">
                                @if (old('content'))
                                    <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="5"> {{ old('content') }} </textarea>
                                @elseif ($post ?? '')
                                    <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="5"> {{ $post->post_content }} </textarea>
                                @else
                                    <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="5"> </textarea>
                                @endif

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-3 offset-md-8">
                                <input class="btn btn-block btn-primary" type="submit" value="{{ $post ?? '' ? "Modifier" : "Créer" }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
