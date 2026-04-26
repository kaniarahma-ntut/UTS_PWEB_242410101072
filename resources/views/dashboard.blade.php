@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-24">
    <div class="text-center space-y-4 pt-8">
        <h1 class="font-header text-4xl sm:text-5xl font-bold text-ken-light">Welcome to the stream, <span class="text-ken-teal">{{ $username }}</span>!</h1>
        <p class="font-body text-lg sm:text-xl text-ken-sand">Enjoy the chill vibes and late-night gaming.</p>
    </div>

    <div id="clips" class="scroll-mt-24">
        <div class="flex items-center gap-4 mb-8">
            <h2 class="font-header text-3xl font-bold text-ken-teal">Clips & Highlights</h2>
            <div class="h-px bg-ken-teal/30 flex-grow"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-ken-dark rounded-xl overflow-hidden shadow-lg border border-ken-teal/10 hover:border-ken-teal/40 transition-colors">
                <div class="aspect-[9/16] w-full relative">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/o0QtcQca8JQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-header font-semibold text-lg text-ken-light">"Apa itu kok ada yang terbang?"</h3>
                    <p class="font-p text-sm text-ken-light/60 mt-1">Harith gg gaming</p>
                </div>
            </div>
            <div class="bg-ken-dark rounded-xl overflow-hidden shadow-lg border border-ken-teal/10 hover:border-ken-teal/40 transition-colors">
                <div class="aspect-[9/16] w-full relative">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/u7Gx8xfLh1w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-header font-semibold text-lg text-ken-light">Minecraft Stream</h3>
                    <p class="font-p text-sm text-ken-light/60 mt-1">Jaman urbanpixel 🥀</p>
                </div>
            </div>
            <div class="bg-ken-dark rounded-xl overflow-hidden shadow-lg border border-ken-teal/10 hover:border-ken-teal/40 transition-colors">
                <div class="aspect-[9/16] w-full relative">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/aZiArQYx6_M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-header font-semibold text-lg text-ken-light">Omori Stream</h3>
                    <p class="font-p text-sm text-ken-light/60 mt-1">Adu waifu bos</p>
                </div>
            </div>
        </div>
    </div>

    <div id="arts" class="scroll-mt-24">
        <div class="flex items-center gap-4 mb-8">
            <h2 class="font-header text-3xl font-bold text-ken-teal">Fanart Gallery</h2>
            <div class="h-px bg-ken-teal/30 flex-grow"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-ken-dark rounded-lg p-2 border border-ken-teal/20 transform hover:scale-105 transition-transform">
                <img src="{{ asset('fanart/fanart1.png') }}" alt="Fanart 1" class="w-full aspect-square object-cover rounded-md" title="Made By Valiant">
            </div>
            <div class="bg-ken-dark rounded-lg p-2 border border-ken-teal/20 transform hover:scale-105 transition-transform">
                <img src="{{ asset('fanart/fanart2.png') }}" alt="Fanart 2" class="w-full aspect-square object-cover rounded-md" title="Made By Valiant">
            </div>
            <div class="bg-ken-dark rounded-lg p-2 border border-ken-teal/20 transform hover:scale-105 transition-transform">
                <img src="{{ asset('fanart/fanart3.png') }}" alt="Fanart 3" class="w-full aspect-square object-cover rounded-md"title="Made By Aru">
            </div>
            <div class="bg-ken-dark rounded-lg p-2 border border-ken-teal/20 transform hover:scale-105 transition-transform">
                <img src="{{ asset('fanart/fanart4.jpg') }}" alt="Fanart 4" class="w-full aspect-square object-cover rounded-md" title="Made By Aru">
            </div>
        </div>
    </div>

    <div id="reviews" class="scroll-mt-24">
        <div class="flex items-center gap-4 mb-8">
            <h2 class="font-header text-3xl font-bold text-ken-teal">Game Reviews</h2>
            <div class="h-px bg-ken-teal/30 flex-grow"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-ken-dark p-6 rounded-xl border-l-4 border-ken-sand shadow-lg">
                <h3 class="font-header text-xl font-bold text-ken-light mb-2">A Space For The Unbound</h3>
                <div class="flex gap-1 mb-4 text-ken-sand">
                    ★★★★★
                </div>
                <p class="font-p text-ken-light/80 leading-relaxed">I don't play pixel games that much, but this game has the best story, soundtrack, character development of all the games i've played. Even non-pixel ones. The fighting gameplay is also very simple, yet also challenging at the same time haha. Not only that, some cutscenes can actually not look very pixel-y. The ending is really beautiful, I'm not sure if there's any other ending but this one is beautiful enough. My favorite line from Atma (MC) is : "Maybe I'm just a memory to you. But that's what memories do. They will always stay. To remind you about who you really are." (Maybe that's not the real english translation, because I didn't play the game in english heheh. At least you get my point!) Most beautiful game I've ever played. I think it's worth more than its current price. Teruslah berkarya, anak bangsa! :)</p>
            </div>
            <div class="bg-ken-dark p-6 rounded-xl border-l-4 border-ken-teal shadow-lg">
                <h3 class="font-header text-xl font-bold text-ken-light mb-2">Undertale</h3>
                <div class="flex gap-1 mb-4 text-ken-sand">
                    ★★★★★
                </div>
                <p class="font-p text-ken-light/80 leading-relaxed">story is really good. interactions are also super cute and wholesome. soundtracks are all amazing, no exceptions. a little bit shaken because i sort of chose the wrong route :] but game is still good. best pixel game ever, i would say.</p>
            </div>
        </div>
    </div>
</div>
@endsection
