<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExplorarController extends Controller
{
    public function index()
    {
        $filters = [
            ['label' => 'Tudo',        'icon' => 'fas fa-th',             'active' => true],
            ['label' => 'Supercarros', 'icon' => 'fas fa-tachometer-alt', 'active' => false],
            ['label' => 'Clássicos',   'icon' => 'fas fa-star',           'active' => false],
            ['label' => 'SUVs',        'icon' => 'fas fa-truck',          'active' => false],
            ['label' => 'Elétricos',   'icon' => 'fas fa-bolt',           'active' => false],
            ['label' => 'Track Day',   'icon' => 'fas fa-flag-checkered', 'active' => false],
        ];

        $explorePosts = [
            // Supercarros
            ['image' => 'https://images.unsplash.com/photo-1592198084033-aade902d1aae?w=600&h=600&fit=crop', 'likes' => 14823, 'comments_count' => 156, 'featured' => true,  'is_video' => false, 'category' => 'supercarros'],
            ['image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=300&h=300&fit=crop', 'likes' => 9201,  'comments_count' => 88,  'featured' => false, 'is_video' => false, 'category' => 'supercarros'],
            ['image' => 'https://images.unsplash.com/photo-1471444928139-48c5bf5173f8?w=300&h=300&fit=crop', 'likes' => 21450, 'comments_count' => 203, 'featured' => false, 'is_video' => true,  'category' => 'supercarros'],
            ['image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=300&fit=crop', 'likes' => 11205, 'comments_count' => 130, 'featured' => false, 'is_video' => false, 'category' => 'supercarros'],

            // Clássicos
            ['image' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=600&h=300&fit=crop', 'likes' => 7890,  'comments_count' => 94,  'featured' => true,  'is_video' => false, 'category' => 'clássicos'],
            ['image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=300&h=300&fit=crop', 'likes' => 5430,  'comments_count' => 67,  'featured' => false, 'is_video' => false, 'category' => 'clássicos'],
            ['image' => 'https://images.unsplash.com/photo-1577494732540-7df61d3bef0a?w=300&h=300&fit=crop', 'likes' => 3210,  'comments_count' => 45,  'featured' => false, 'is_video' => false, 'category' => 'clássicos'],

            // SUVs
            ['image' => 'https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?w=600&h=300&fit=crop', 'likes' => 6780,  'comments_count' => 58,  'featured' => true,  'is_video' => false, 'category' => 'suvs'],
            ['image' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=300&h=300&fit=crop', 'likes' => 4503,  'comments_count' => 45,  'featured' => false, 'is_video' => false, 'category' => 'suvs'],
            ['image' => 'https://images.unsplash.com/photo-1616788494672-ec7ca25fdda9?w=300&h=300&fit=crop', 'likes' => 3890,  'comments_count' => 39,  'featured' => false, 'is_video' => false, 'category' => 'suvs'],

            // Elétricos
            ['image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?w=600&h=300&fit=crop', 'likes' => 9870,  'comments_count' => 102, 'featured' => true,  'is_video' => false, 'category' => 'elétricos'],
            ['image' => 'https://images.unsplash.com/photo-1601979031925-424e53b6caaa?w=300&h=300&fit=crop', 'likes' => 7120,  'comments_count' => 67,  'featured' => false, 'is_video' => false, 'category' => 'elétricos'],
            ['image' => 'https://images.unsplash.com/photo-1619767886558-efdc259cde1a?w=300&h=300&fit=crop', 'likes' => 5670,  'comments_count' => 53,  'featured' => false, 'is_video' => false, 'category' => 'elétricos'],

            // Track Day
            ['image' => 'https://images.unsplash.com/photo-1547036967-23d11aacaee0?w=600&h=300&fit=crop', 'likes' => 8321,  'comments_count' => 94,  'featured' => true,  'is_video' => true,  'category' => 'track day'],
            ['image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=300&h=300&fit=crop', 'likes' => 6540,  'comments_count' => 71,  'featured' => false, 'is_video' => false, 'category' => 'track day'],
            ['image' => 'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?w=300&h=300&fit=crop', 'likes' => 4320,  'comments_count' => 48,  'featured' => false, 'is_video' => true,  'category' => 'track day'],
        ];

        return view('explorar.index', compact('filters', 'explorePosts'));
    }
}