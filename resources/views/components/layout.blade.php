<!doctype html>

<title>CJ's Blog</title>
<link rel="stylesheet" href="/app.css">


<header>
    {{ $banner }}
    @if (session()->has('success'))
        <div>
            <p>
                {{ session('success') }}
            </p>
        </div>
    @endif
</header>

<body>

    {{ $content }}
</body>

