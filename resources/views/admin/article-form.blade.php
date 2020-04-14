@extends ('layouts.app')

@section ( 'content' )
    @if($post ?? '') <!-- post or '' -->
        <h3> Formulaire de modification de l'article </h3>
        <p> Veuillez modifier le(s) champs souhaité(s) </p>
    @else
        <h3> Formulaire d'ajout d'un nouvel article </h3>
        <p> Veuillez renseigner les champs suivants </p>
    @endif

    <!-- Article form -->
    <form method="POST" action="{{ $post ?? '' ? route('articles.update', $post) : route('articles.store') }}">
        @csrf <!-- Required for security reasons -->
        @if ($post ?? '')
            @method('PUT')
        @endif
        <label>
            Titre:
            @if (old('title'))
                <input type="text" name="title" value="{{ old('title') }}" />
            @elseif ($post ?? '')
                <input type="text" name="title" value="{{ $post->post_title }}" />
            @else
                <input type="text" name="title" value="" />
            @endif
        </label>
        @error('title')
            <p> {{ $message }} </p>
        @enderror
        <label>
            Catégorie:
            <select name="category">
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
        </label>
        @error('category')
            <p> {{ $message }} </p>
        @enderror
        <label>
            Contenu:
            @if (old('content'))
                <textarea name="content" rows="5"> {{ old('content') }} </textarea>
            @elseif ($post ?? '')
                <textarea name="content" rows="5"> {{ $post->post_content }} </textarea>
            @else
                <textarea name="content" rows="5"> </textarea>
            @endif
        </label>
        @error('content')
            <p> {{ $message }} </p>
        @enderror

        <button name="submit"> {{ $post ?? '' ? "Modifier" : "Créer" }} </button>
    </form>
@endsection
