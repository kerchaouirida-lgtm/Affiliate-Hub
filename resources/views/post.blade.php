<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Meta Tags -->
    <title>{{ $post->title }} - TradeHub</title>
    <meta name="description" content="{{ $post->excerpt }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Cairo', sans-serif; }</style>
</head>
<body class="bg-slate-900 text-slate-100">

    <!-- Navbar -->
    <nav class="border-b border-slate-800 bg-slate-950/80 sticky top-0 z-50">
        <div class="max-w-4xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-extrabold text-emerald-400">Trade<span class="text-white">Hub</span>.ma</a>
            <a href="{{ route('home') }}" class="text-sm text-slate-300 hover:text-emerald-400">⬅ العودة للرئيسية</a>
        </div>
    </nav>

    <!-- Article Content -->
    <main class="max-w-3xl mx-auto px-4 py-12">
        <div class="text-xs text-emerald-400 font-bold mb-3">
            📅 نُشر في {{ $post->created_at->format('Y/m/d') }} • 👁️ {{ $post->views }} قراءة
        </div>
        
        <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-snug mb-6">
            {{ $post->title }}
        </h1>

        @if($post->excerpt)
            <div class="bg-slate-800/60 border-r-4 border-emerald-500 p-4 rounded-xl text-slate-300 text-sm mb-8">
                {{ $post->excerpt }}
            </div>
        @endif

        <!-- نص المقال -->
        <article class="prose prose-invert max-w-none text-slate-200 leading-loose space-y-4 text-lg whitespace-pre-line bg-slate-800/30 p-6 md:p-8 rounded-2xl border border-slate-800">
            {{ $post->content }}
        </article>

        <!-- صندوق التحويل الذكي (Affiliate Call-To-Action Box) -->
        @if($post->platform)
        <div class="mt-10 bg-gradient-to-r from-emerald-950 to-slate-900 border-2 border-emerald-500 rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-2xl">
            <div>
                <span class="bg-emerald-500 text-slate-950 text-xs font-extrabold px-3 py-1 rounded-full">🔥 عرض خاص لزوار الموقع</span>
                <h3 class="text-2xl font-black text-white mt-3">جرب منصة {{ $post->platform->name }} الآن</h3>
                <p class="text-emerald-300 text-sm mt-1">{{ $post->platform->highlight_text }}</p>
            </div>
            <a href="{{ route('affiliate.go', $post->platform->slug) }}" target="_blank" class="w-full md:w-auto text-center bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold px-8 py-4 rounded-xl transition whitespace-nowrap shadow-lg shadow-emerald-500/20">
                افتح حساب واستفد من العرض ⬅
            </a>
        </div>
        @endif
    </main>

</body>
</html>