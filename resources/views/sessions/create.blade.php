<x-layout>
    <x-slot name="banner">
        <h1>Inloggen</h1>
    </x-slot>

    <x-slot name="content">
        <form method="POST" action="/login">
            @csrf
            <div>
                <label for="email">
                    E-mailadres
                </label>
                <br>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                <p>
                    {{ $message }}
                </p>
                @enderror
                <br>
                <br>
                <label for="password">
                    Wachtwoord
                </label>
                <br>
                <input type="password" name="password" id="password" required>
                @error('password')
                <p>
                    {{ $message }}
                </p>
                @enderror
                <br>
            </div>
            <br>
            <div>
                <button>
                    Inloggen
                </button>
            </div>
        </form>
        <div>
            <a href="/">
                <button>
                    Ga terug
                </button>
            </a>
        </div>
    </x-slot>
</x-layout>
