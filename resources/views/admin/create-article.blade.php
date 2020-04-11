@extends ('layouts/main')

@section ( 'content' )
    <!-- Article creation form -->
    <h3> Formulaire d'ajout d'un nouvel article </h3>
    <p> Veuillez renseigner les champs suivants </p>
    <form method="POST" action="{{ route('articles.store') }}">
        @csrf <!-- Required for security reasons -->
        <label>
            Titre:
            <input type="text" name="title" value="{{ old('title') }}" />
        </label>
        @error('title')
            <p> {{ $message }} </p>
        @enderror
        <label>
            Catégorie:
            <select name="category">
                <option selected disabled>Sélectionnez une catégorie...</option>
                @foreach ($categories as $key => $value)
                    <option {{ old('category') == $key ? "selected" : "" }} value={{ $key }}> {{ $value }} </option>
                @endforeach
            </select>
        </label>
        @error('category')
            <p> {{ $message }} </p>
        @enderror
        <label>
            Contenu:
            <textarea name="content" rows="5"> {{ old('content') }} </textarea>
        </label>
        @error('content')
            <p> {{ $message }} </p>
        @enderror

        <button name="submit"> Créer </button>
    </form>
@endsection
