<section>
    <header>
        <h2>{{ __('Profile Information') }}</h2>
    </header>

    <!-- Formulario para enviar verificación de email -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Formulario para actualizar el perfil -->
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <section>
            <label for="name">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus>
            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </section>

        <section>
            <label for="surname">{{ __('Surname') }}</label>
            <input id="surname" name="surname" type="text" value="{{ old('surname', $user->surname) }}" required>
            @if ($errors->has('surname'))
                <p>{{ $errors->first('surname') }}</p>
            @endif
        </section>

        <section>
            <label for="email">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
            @if ($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p>{{ __('Your email address is unverified.') }}</p>
                    <button form="send-verification">{{ __('Click here to re-send the verification email.') }}</button>
                    @if (session('status') === 'verification-link-sent')
                        <p>{{ __('A new verification link has been sent to your email address.') }}</p>
                    @endif
                </div>
            @endif
        </section>

        <section>
            <button type="submit">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p>{{ __('Saved.') }}</p>
            @endif
        </section>
    </form>
</section>

