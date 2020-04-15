@extends ('layouts.app')

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Contact form -->
            <div class="card">
                <div class="card-header">{{ __('Pour nous contacter') }}</div>

                <div class="card-body">
                    <form method="POST" action="./contact">
                        @csrf <!-- Required for security reasons -->

                        @guest
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Nom:') }}</label>

                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" />

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email:') }}</label>

                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control @error('mail') is-invalid @enderror" name="mail" value="{{ old('mail') }}" />

                                    @error('mail')
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
                                <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" rows="5">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-3 offset-md-8">
                                <input class="btn btn-block btn-primary" type="submit" value="Envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
