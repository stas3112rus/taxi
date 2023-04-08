<?
function getRobotTxt($city)
{
    $allUrls = "";

    if ($city['main_city']) {
        $allUrls = 'Sitemap: ' . getUrlToSitemapWithAllUrls($city);
    }

    return ('User-agent: *
Disallow: /' . $city['eng'] . '
Disallow: /transfer-' . $city['eng'] . '
Sitemap: ' . getUrlToSitemap($city) . '
' . $allUrls
    );
}
