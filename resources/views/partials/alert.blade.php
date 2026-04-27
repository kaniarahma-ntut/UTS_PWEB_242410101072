@if(session('error'))
    <div class="w-full mb-4 px-4 py-3 bg-red-500/20 border border-red-500/50 rounded-lg text-red-200 text-sm font-body text-center shadow-lg">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="w-full mb-4 px-4 py-3 bg-ken-teal/20 border border-ken-teal/50 rounded-lg text-ken-teal text-sm font-body text-center shadow-lg">
        {{ session('success') }}
    </div>
@endif
