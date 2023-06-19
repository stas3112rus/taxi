<?
function getRobotTxt($city)
{

    if ($city['main_city']) {
        return "User-agent: *
Disallow: /cgi-bin
Disallow: /link.php
Disallow: /silki.php
Disallow: /curt.php
Disallow: *curt=*
Disallow: /*?*
Sitemap: https://aeroport-simferopol.taxi/sitemap.xml
Sitemap: https://aeroport-simferopol.taxi/sitemap2.xml

User-agent: Googlebot
Disallow: /cgi-bin
Disallow: /link.php
Disallow: /silki.php
Disallow: /curt.php
Disallow: *curt=*
Disallow: /*?*
Sitemap: https://aeroport-simferopol.taxi/sitemap.xml
Sitemap: https://aeroport-simferopol.taxi/sitemap2.xml

User-agent: Yandex
Disallow: /cgi-bin
Disallow: /cgi-bin
Disallow: /link
Disallow: /curt.php
Disallow: *curt=*
Disallow: /*?*
Host: https://aeroport-simferopol.taxi
Sitemap: https://aeroport-simferopol.taxi/sitemap.xml
Sitemap: https://aeroport-simferopol.taxi/sitemap2.xml";
    }

    return ('User-agent: *
Disallow: /' . $city['eng'] . '
Disallow: /transfer-' . $city['eng'] . '
Host: '.getMainUrl($city['eng'], $city['main_city']).'
Sitemap: ' . getUrlToSitemap($city));
}
