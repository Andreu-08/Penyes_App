<section>
    <header>
        <h2>Actualizar Contraseña</h2>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <section>
            <label for="update_password_current_password">Contraseña Actual</label>
            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password">
        </section>

        <section>
            <label for="update_password_password">Nueva Contraseña</label>
            <input id="update_password_password" name="password" type="password" autocomplete="new-password">
        </section>

        <section>
            <label for="update_password_password_confirmation">Confirmar Contraseña</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password">
        </section>

        <section>
            <button type="submit">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p>{{ __('Saved.') }}</p>
            @endif
        </section>
    </form>
</section>

