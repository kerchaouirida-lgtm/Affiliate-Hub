<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlatformController extends Controller
{
    // 1. الصفحة الرئيسية للزوار
   public function index()
    {
        if (Platform::count() === 0) {
            $this->seedDemoData();
        }

        $platforms = Platform::with('category')->orderBy('is_featured', 'desc')->orderBy('rating', 'desc')->get();
        $posts = Post::with('platform')->latest()->take(6)->get();

        return view('welcome', compact('platforms', 'posts'));
    }

    // 2. تحويل الزائر وحساب النقرات
    public function showPost($slug)
    {
        $post = Post::with('platform')->where('slug', $slug)->firstOrFail();
        $post->increment('views');

        return view('post', compact('post'));
    }

    // 3. صفحة لوحة التحكم (Admin)
   public function admin()
    {
        if (!session('is_admin_logged_in')) {
            return view('admin-login');
        }

        $platforms = Platform::with('category')->latest()->get();
        $posts = Post::with('platform')->latest()->get();
        $totalClicks = Platform::sum('clicks_count');

        return view('admin', compact('platforms', 'posts', 'totalClicks'));
    }

    public function adminLogin(Request $request)
    {
        // هنا تقدر تبدل كلمة السر "Rida2026" بأي كود بغيتي
        if ($request->password === 'Rida2026') {
            session(['is_admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'كلمة السر غير صحيحة!');
    }

    public function adminLogout()
    {
        session()->forget('is_admin_logged_in');
        return redirect()->route('home');
    }

    // 4. إضافة منصة جديدة من لوحة التحكم
   public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Post::create([
            'platform_id' => $request->platform_id ?: null,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-') . '-' . rand(10, 99),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
        ]);

        return back()->with('success', 'تم نشر المقال بنجاح!');
    }

    // 5. تعديل سريع لرابط الأفلييت
    public function updateLink(Request $request, $id)
    {
        $platform = Platform::findOrFail($id);
        $platform->update([
            'affiliate_url' => $request->affiliate_url,
            'is_featured' => $request->has('is_featured')
        ]);

        return back()->with('success', 'تم تحديث الرابط بنجاح!');
    }

    // 6. حذف منصة
    public function destroyPost($id)
    {
        Post::findOrFail($id)->delete();
        return back()->with('success', 'تم حذف المقال!');
    }

    private function seedDemoData()
    {
        $cat = Category::firstOrCreate(['slug' => 'forex'], ['name' => 'Forex & Trading']);

        Platform::create([
            'category_id' => $cat->id,
            'name' => 'Exness Pro',
            'slug' => 'exness',
            'rating' => 4.9,
            'highlight_text' => 'أقل سبريد فالمغرب + سحب فوري أوتوماتيكي 24/7',
            'min_deposit' => '$10',
            'affiliate_url' => 'https://www.exness.com/?partner_id=YOUR_ID_HERE',
            'features' => ['سحب فوري بدون عمولة', 'حساب إسلامي بدون Swap', 'دعم الأبناك المغربية و USDT'],
            'is_featured' => true,
        ]);

        Platform::create([
            'category_id' => $cat->id,
            'name' => 'XM Global',
            'slug' => 'xm',
            'rating' => 4.8,
            'highlight_text' => 'بونص $30 مجاني للتداول بدون إيداع للمبتدئين',
            'min_deposit' => '$5',
            'affiliate_url' => 'https://www.xm.com/?partner_id=YOUR_ID_HERE',
            'features' => ['بونص ترحيبي $30 مجاناً', 'تحليلات يومية مجانية', 'منصة MT4 و MT5 سريعة'],
            'is_featured' => false,
        ]);
    }
}