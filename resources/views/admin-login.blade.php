<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Cairo', sans-serif; }</style>
</head>
<body class="bg-slate-950 text-white min-h-screen flex items-center justify-center p-4">
    <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl w-full max-w-sm text-center shadow-2xl">
        <div class="text-3xl mb-2">🔒</div>
        <h1 class="text-xl font-extrabold text-emerald-400 mb-6">الدخول للوحة التحكم</h1>

        @if(session('error'))
            <p class="bg-rose-500/20 text-rose-400 text-xs py-2 rounded-lg mb-4 font-bold">{{ session('error') }}</p>
        @endif

        <form action="{{ route('admin.login') }}" method="POST" class="space-y-4">
            @csrf
            <input type="password" name="password" placeholder="أدخل الرمز السري..." required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-center focus:border-emerald-500 outline-none">
            <button type="submit" class="w-full bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold py-3 rounded-xl transition">
                دخول ⬅
            </button>
        </form>
    </div>
</body>
</html>