<x-layout>
    <x-slot name="banner">
        <h1>{{ $post->title }}</h1>
    </x-slot>

    <x-slot name="content">
        <article>
            <div>
                {!! $post->body !!}
            </div>
        </article>
        <br>
        <a href="/">Go back</a>
    </x-slot>
</x-layout>
