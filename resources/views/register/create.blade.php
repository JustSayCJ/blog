<x-layout>
    <x-slot name="banner">
        <h1>Registreren</h1>
    </x-slot>

    <x-slot name="content">
        <form method="POST" action="/register">
            @csrf
            <div>
                <label for="name">
                    Naam*
                </label>
                <br>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                <p>
                    {{ $message }}
                </p>
                @enderror
                <br>
                <br>
                <label for="username">
                    Gebruikersnaam*
                </label>
                <br>
                <input type="text" name="username" id="username" value="{{ old('username') }}" required>
                @error('username')
                <p>
                    {{ $message }}
                </p>
                @enderror
                <br>
                <br>
                <label for="email">
                    E-mailadres*
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
                    Wachtwoord (minimaal 8 tekens)*
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
                    Opslaan
                </button>
            </div>
            <br>
            <div>
                <p>
                    *Verplicht
                </p>
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
