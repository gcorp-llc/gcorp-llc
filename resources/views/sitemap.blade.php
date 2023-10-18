<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

    @foreach ($pages as $page)
        <url>
            <loc>{{ url('/') }}/{{ $page }}</loc>
            <lastmod>{{ \Carbon\Carbon::now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>always</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($posts as $item)
        <url>
            <loc>{{ url('/') }}/article/{{ $item->slug }}</loc>
            <lastmod>{{ $item->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>always</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

        @foreach ($services as $item)
            <url>
                <loc>{{ url('/') }}/service/{{ $item->slug }}</loc>
                <lastmod>{{ $item->created_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>always</changefreq>
                <priority>0.8</priority>
            </url>
        @endforeach

        @foreach ($samples as $item)
            <url>
                <loc>{{ url('/') }}/sample/{{ $item->slug }}</loc>
                <lastmod>{{ $item->created_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>always</changefreq>
                <priority>0.8</priority>
            </url>
        @endforeach
        @foreach ($products as $item)
            <url>
                <loc>{{ url('/') }}/product/{{ $item->slug }}</loc>
                <lastmod>{{ $item->created_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>always</changefreq>
                <priority>0.8</priority>
            </url>
        @endforeach
</urlset>
