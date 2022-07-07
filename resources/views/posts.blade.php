<x-layout>
    <x-slot name="banner">
        <h1>CJ's Blog</h1>
        <div>
            @guest
            <a href="/register">
            <button>
                Registreren
            </button>
            </a>
            <a href="login">
            <button>
                Inloggen
            </button>
            </a>
            @endguest
            @auth
                <span>Welkom, {{ auth()->user()->name }}!</span>
            <a href="opstellen">
                <button>
                    Maak een blogpost
                </button>
            </a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit">Uitloggen</button>
                </form>
                @endauth
        </div>
    </x-slot>

    <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>

                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>


