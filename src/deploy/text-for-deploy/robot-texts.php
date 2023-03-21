<?
function getRobotTxt($city)
{
    return ('User-agent: *
Disallow: /' . $city['eng'] . '
Disallow: /transfer-' . $city['eng'] . '
Sitemap: ' . getUrlToSitemap($city) . '
    ');
}
