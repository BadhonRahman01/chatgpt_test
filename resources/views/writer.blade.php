<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel ChatGPT - How to use ChatGPT in Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Space+Grotesk:[email protected];600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Space Grotesk', sans-serif;
            }
            .title:empty:before {
                content:attr(data-placeholder);
                color:gray
            }

        </style>

        <script src="https://unpkg.com/marked" defer></script>

    </head>
    <body >
        <div >
            <div >
                <div >
                    <h1 >Writebot</h1>
                </div>

                <div >
                    <form action="/write/generate" method="post" >
                        @csrf
                        <input required name="title"  placeholder="Type your article title..." />
                        <button >Generate</button>
                    </form>
                </div>
                <div >
                    @if (isset($content))
                    <textarea  spellcheck="false">{{ $content }}</textarea>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>