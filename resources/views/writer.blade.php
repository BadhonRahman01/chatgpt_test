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
  <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/marked" defer></script>

    </head>
    <body bgcolor="#c7ecee">
        <div >
            <div >
                <div >
                    <h1 style="text-align: center; color:brown;padding-top:150px;font-size:2.0rem;">Test Chat GPT</h1>
                </div>

                <div>
                    <form action="/write/generate" method="post" >
                        @csrf
                        {{-- <input required name="title"  placeholder="Type your article title..." style="width:400px;height:50px;margin-left:500px;margin-top:50px;"/> --}}
                        <div class="mb-6 mx-7">
                            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Send Message</label>
                            <input type="text" id="large-input" required name="title" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">
                        </div>
                        {{-- <button style="color:blueviolet;border:1px dotted red">Generate</button> --}}
                        <button class="bg-blue-500 mx-7 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Generate
                          </button>
                    </form>
                </div>
                <div >
                    @if (isset($content))
                    <label for="message" class="block mb-2 mx-8 pt-5 text-sm font-medium text-gray-900 dark:text-white">ChatGPT Response</label>
<textarea id="message"  spellcheck="false" rows="4" class="block p-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >{{ $content }}</textarea>
                    {{-- <textarea  spellcheck="false">{{ $content }}</textarea> --}}
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>