<!-- قسم إضافة المقالات فـ Admin -->
        <div class="mt-12 border-t border-slate-800 pt-8">
            <h2 class="text-xl font-extrabold text-amber-400 mb-6">✍️ كتابة مقال أو شرح جديد (لجلب الزوار من Google)</h2>
            <form action="{{ route('admin.posts.store') }}" method="POST" class="bg-slate-900 border border-slate-800 p-6 rounded-2xl space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="text-xs text-slate-400">عنوان المقال (مثال: شرح شراء USDT من Binance في المغرب)</label>
                        <input type="text" name="title" required class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2.5 mt-1 text-sm">
                    </div>
                    <div>
                        <label class="text-xs text-emerald-400 font-bold">المنصة المراد الترويج لها وسط المقال</label>
                        <select name="platform_id" class="w-full bg-slate-950 border border-emerald-500/50 rounded-lg px-3 py-2.5 mt-1 text-sm">
                            <option value="">-- اختر منصة --</option>
                            @foreach($platforms as $p)
                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <label class="text-xs text-slate-400">ملخص قصير للمقال (يظهر في محرك البحث Google)</label>
                    <input type="text" name="excerpt" required class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2 mt-1 text-sm">
                </div>
                <div>
                    <label class="text-xs text-slate-400">محتوى الشرح الكامل</label>
                    <textarea name="content" rows="6" required class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2 mt-1 text-sm"></textarea>
                </div>
                <button type="submit" class="bg-amber-500 hover:bg-amber-400 text-slate-950 font-extrabold px-8 py-3 rounded-xl transition">
                    نشر المقال الآن 🚀
                </button>
            </form>
        </div>