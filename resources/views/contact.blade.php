@extends ('layouts/main')

@section ( 'content' )
    <!-- Contact form -->
    <h3> Formulaire de contact </h3>
    <form method="POST" action="./contact">
        @csrf <!-- Required for security reasons -->
        <fieldset>
            <legend> Contactez-nous via ce formulaire </legend>
            <label>
                Nom:
                <input type="text" name="name" value="{{ old('name') }}" />
            </label>
            @error('name')
                <p> {{ $message }} </p>
            @enderror
            <label>
                Adresse mail:
                <input type="text" name="mail" value="{{ old('mail') }}" />
            </label>
            @error('mail')
                <p> {{ $message }} </p>
            @enderror
            <label>
                Votre message:
                <textarea name="message" rows="5"> {{ old('message') }} </textarea>
            </label>
            @error('message')
                <p> {{ $message }} </p>
            @enderror
        </fieldset>

        <button name="submit"> Envoyer </button>
    </form>
@endsection
