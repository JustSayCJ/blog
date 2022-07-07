<x-layout>
    <x-slot name="banner">
        <h1>Maak een blogpost</h1>
    </x-slot>

    <x-slot name="content">
        <form method="POST" action="/publiceer">
            @csrf
            <div>
                <label for="title">
                    Titel*
                </label>
                <br>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                @error('title')
                <p>
                    {{ $message }}
                </p>
                @enderror
                <br>
                <br>
                <label for="slug">
                    Link*
                </label>
                <br>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required>
                @error('slug')
                <p>
                    {{ $message }}
                </p>
                @enderror
                <br>
                <br>
                <label for="excerpt">
                    Samenvatting*
                </label>
                <br>
                <textarea type="text" name="excerpt" id="excerpt" required>{{ old('excerpt') }}</textarea>
                @error('excerpt')
                <p>
                    {{ $message }}
                </p>
                @enderror
                <br>
                <br>
                <label for="text">
                    Tekst*
                </label>
                <br>
                <textarea type="text" name="text" id="text" required>{{ old('text') }}</textarea>
                @error('text')
                <p>
                    {{ $message }}
                </p>
                @enderror
                <br>
            </div>
            <br>
            <div>
                <button>
                    Publiceer
                </button>
            </div>
        </form>
        <div>
            <p>
                *Verplicht
            </p>
        </div>
        <div>
            <a href="/">
                <button>
                    Ga terug
                </button>
            </a>
        </div>
    </x-slot>
</x-layout>
