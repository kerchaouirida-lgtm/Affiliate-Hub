<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أفضل منصات التداول والأدوات الموثوقة 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Cairo', sans-serif; }</style>
</head>
<body class="bg-slate-900 text-slate-100">

    <!-- Navbar -->
    <nav class="border-b border-slate-800 bg-slate-950/80 backdrop-blur sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-extrabold text-emerald-400">Trade<span class="text-white">Hub</span>.ma</div>
            <div class="flex gap-6 text-sm font-semibold">
                <a href="#brokers" class="hover:text-emerald-400 transition">أفضل المنصات</a>
                <a href="#calculator" class="hover:text-emerald-400 transition">حاسبة اللوت (Lot Calculator)</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="max-w-5xl mx-auto px-4 py-12 text-center">
        <span class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-4 py-1.5 rounded-full text-xs font-bold">تحديث نونبر 2026 - مقارنة شاملة وموثوقة</span>
        <h1 class="text-3xl md:text-5xl font-extrabold mt-6 leading-tight">اختار أفضل منصة تداول <span class="text-emerald-400">بأقل عمولة</span> وسحب فوري</h1>
        <p class="text-slate-400 mt-4 max-w-2xl mx-auto text-lg">مقارنة دقيقة لأفضل شركات التداول الموثوقة فالمغرب مع حسابات إسلامية وبونص ترحيبي، بالإضافة لأدوات مجانية لحساب المخاطر.</p>
    </header>

    <!-- Comparison List -->
    <section id="brokers" class="max-w-5xl mx-auto px-4 py-6 space-y-6">
        @foreach($platforms as $index => $platform)
        <div class="relative bg-slate-800/70 border {{ $platform->is_featured ? 'border-emerald-500 shadow-lg shadow-emerald-500/10' : 'border-slate-700' }} rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-6 hover:border-slate-500 transition">
            
            @if($platform->is_featured)
                <div class="absolute -top-3 right-6 bg-emerald-500 text-slate-950 text-xs font-extrabold px-3 py-1 rounded-full">
                    ⭐ الاختيار رقم #1 فالمغرب
                </div>
            @endif

            <!-- الإسم والتقييم -->
            <div class="flex items-center gap-4 w-full md:w-1/4">
                <div class="w-14 h-14 rounded-xl bg-slate-700 flex items-center justify-center text-2xl font-black text-emerald-400">
                    #{{ $index + 1 }}
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white">{{ $platform->name }}</h3>
                    <div class="flex items-center gap-1 text-amber-400 font-bold text-sm mt-1">
                        <span>★ {{ $platform->rating }}</span>
                        <span class="text-slate-400 text-xs font-normal">/ 5.0</span>
                    </div>
                </div>
            </div>

            <!-- المميزات -->
            <div class="w-full md:w-2/4 space-y-2">
                <p class="text-emerald-300 font-semibold text-sm">{{ $platform->highlight_text }}</p>
                <div class="flex flex-wrap gap-2 pt-1">
                    @if($platform->features)
                        @foreach($platform->features as $feature)
                            <span class="text-xs bg-slate-900/80 text-slate-300 px-2.5 py-1 rounded-md border border-slate-700">✓ {{ $feature }}</span>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- زر التسجيل (Affiliate Link) -->
            <div class="w-full md:w-1/4 text-center md:text-left flex flex-col items-center md:items-end">
                <span class="text-xs text-slate-400 mb-2">أقل إيداع: <strong class="text-white">{{ $platform->min_deposit }}</strong></span>
                <a href="{{ route('affiliate.go', $platform->slug) }}" target="_blank" class="w-full md:w-auto text-center bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold px-6 py-3 rounded-xl transition shadow-lg shadow-emerald-500/20">
                    افتح حساب الآن ⬅
                </a>
                <span class="text-[11px] text-slate-500 mt-2">🔥 تسجل منهنا {{ $platform->clicks_count }} متداول</span>
            </div>
        </div>
        @endforeach
    </section>

    <!-- Interactive Tool: Lot Size & Risk Calculator -->
    <section id="calculator" class="max-w-4xl mx-auto px-4 py-16">
        <div class="bg-gradient-to-br from-slate-800 to-slate-900 border border-slate-700 rounded-3xl p-8 shadow-2xl">
            <div class="text-center mb-8">
                <span class="text-xs font-bold text-amber-400 uppercase">أداة مجانية للمتداولين</span>
                <h2 class="text-2xl md:text-3xl font-extrabold mt-1">حاسبة إدارة المخاطر والـ Lot Size 🧮</h2>
                <p class="text-slate-400 text-sm mt-2">احسب حجم العقد (Lot) المناسب لصفقتك باش تحمي راس مالك من الخسارة.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-semibold mb-2 text-slate-300">رأس المال ($ Balance)</label>
                    <input type="number" id="balance" value="1000" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white focus:border-emerald-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-slate-300">نسبة المخاطرة (% Risk)</label>
                    <input type="number" id="risk" value="2" step="0.5" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white focus:border-emerald-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-slate-300">وقف الخسارة بالنقاط (Stop Loss Pips)</label>
                    <input type="number" id="stoploss" value="20" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white focus:border-emerald-500 outline-none">
                </div>
            </div>

            <button onclick="calculateLot()" class="w-full mt-6 bg-amber-500 hover:bg-amber-400 text-slate-950 font-extrabold py-3.5 rounded-xl transition">
                احسب حجم اللوت المناسب
            </button>

            <!-- النتيجة + إعلان أفلييت ذكي -->
            <div id="resultBox" class="mt-6 bg-slate-950/90 border border-emerald-500/40 rounded-2xl p-6 text-center hidden">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <span class="text-xs text-slate-400">المبلغ المعرض للمخاطرة</span>
                        <p id="riskAmount" class="text-2xl font-black text-rose-400">$20.00</p>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400">حجم العقد المناسب (Standard Lot)</span>
                        <p id="lotSize" class="text-3xl font-black text-emerald-400">0.10</p>
                    </div>
                </div>
                <div class="border-t border-slate-800 pt-4 mt-2 flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-xs text-slate-300">💡 <strong>نصيحة:</strong> باش تربح كتر من هاد الصفقة، تداول فـ منصة فيها <span class="text-emerald-400">Zero Spread</span> على الذهب والعملات.</p>
                    <a href="{{ route('affiliate.go', 'exness') }}" target="_blank" class="bg-emerald-500/20 border border-emerald-500 text-emerald-300 hover:bg-emerald-500 hover:text-slate-950 text-xs font-bold px-4 py-2 rounded-lg transition whitespace-nowrap">
                        جرب حساب Zero مجاناً ⬅
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        function calculateLot() {
            const balance = parseFloat(document.getElementById('balance').value) || 0;
            const riskPercent = parseFloat(document.getElementById('risk').value) || 0;
            const stopLossPips = parseFloat(document.getElementById('stoploss').value) || 1;

            const riskAmount = balance * (riskPercent / 100);
            // باعتبار النقطة الواحدة فـ Standard Lot كتساوي تقريبا $10
            const lotSize = riskAmount / (stopLossPips * 10);

            document.getElementById('riskAmount').innerText = '$' + riskAmount.toFixed(2);
            document.getElementById('lotSize').innerText = lotSize.toFixed(2) + ' Lot';
            document.getElementById('resultBox').classList.remove('hidden');
        }
    </script>
    <!-- قسم الشروحات والمقالات (SEO Blog) -->
    <section class="max-w-5xl mx-auto px-4 py-12 border-t border-slate-800">
        <h2 class="text-2xl md:text-3xl font-extrabold mb-8 text-center">📚 أحدث الشروحات والمراجعات</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <a href="{{ route('post.show', $post->slug) }}" class="bg-slate-800/60 border border-slate-700 hover:border-emerald-500 rounded-2xl p-6 transition flex flex-col justify-between">
                <div>
                    <span class="text-xs text-emerald-400 font-bold">شرح ومراجعة</span>
                    <h3 class="text-lg font-bold text-white mt-2 line-clamp-2">{{ $post->title }}</h3>
                    <p class="text-slate-400 text-xs mt-3 line-clamp-3">{{ $post->excerpt }}</p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-700/60 flex justify-between items-center text-xs text-slate-400">
                    <span>👁️ {{ $post->views }} قراءة</span>
                    <span class="text-emerald-400 font-bold">اقرأ المزيد ⬅</span>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</body>
</html>