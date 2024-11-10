<main>
    <header>
        <h2>{{ __('Delete Account') }}</h2>
    </header>
    <!-- Botón para abrir el modal de confirmación -->
    <button onclick="document.getElementById('confirm-user-deletion').style.display='block'">
        {{ __('Delete Account') }}
    </button>

    <!-- Modal de confirmación de eliminación -->
    <section id="confirm-user-deletion" style="display: none;">
        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <h2>{{ __('Are you sure you want to delete your account?') }}</h2>
            <section>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" placeholder="{{ __('Password') }}">
                @if ($errors->userDeletion->has('password'))
                    <p>{{ $errors->userDeletion->first('password') }}</p>
                @endif
            </section>

            <section>
                <!-- Botón para cancelar el modal -->
                <button type="button" onclick="document.getElementById('confirm-user-deletion').style.display='none'">
                    {{ __('Cancel') }}
                </button>

                <!-- Botón para confirmar la eliminación -->
                <button type="submit">
                    {{ __('Delete Account') }}
                </button>
            </section>
        </form>
    </section>
</main>
