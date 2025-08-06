<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Halaman statis --}}
    @foreach($staticPages as $page)
    <url>
        <loc>{{ $page }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    {{-- Item menu sebagai anchor --}}
    @foreach($products as $product)
    <url>
        <loc>{{ url('/menu#' . Str::slug($product->name)) }}</loc>
        <lastmod>{{ $product->updated_at ? $product->updated_at->toDateString() : now()->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
</urlset>
