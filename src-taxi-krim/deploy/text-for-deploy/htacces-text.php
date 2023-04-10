<?
function  getHtaccesTxt($city)
{
    return $city['main_city'] ? getHtaccesMain() : getHtaccesNotMain($city);
}


function getHtaccesMain()
{
    return 'Options +FollowSymLinks
    RewriteEngine on
    RewriteCond %{HTTP_HOST} ^www.taxi-krim\.com
    RewriteRule ^(.*)$ http://taxi-krim.com/$1 [R=permanent,L]
    
    RewriteCond %{THE_REQUEST} GET\ .*/index\.(php|html)\ HTTP
    RewriteRule ^(.*)index\.(php|html)$ /$1 [R=301,L]
    
    AddType application/force-download doc 
    
    FileETag MTime Size 
    <ifmodule mod_expires.c> 
    <filesmatch ".(jpg|gif|png|css|js|woff)$"> 
    ExpiresActive on 
    ExpiresDefault "access plus 31 day"
    </filesmatch> 
    </ifmodule>
    
    AddDefaultCharset UTF-8
    
    ErrorDocument 404 /index.php
    
    
    <ifModule mod_deflate.c>
      <IfModule mod_filter.c>
          AddOutputFilterByType DEFLATE text/plain text/html
          AddOutputFilterByType DEFLATE text/css
          AddOutputFilterByType DEFLATE text/javascript application/javascript application/x-javascript
          AddOutputFilterByType DEFLATE text/xml application/xml application/xhtml+xml application/rss+xml
          AddOutputFilterByType DEFLATE application/json
          AddOutputFilterByType DEFLATE application/vnd.ms-fontobject application/x-font-ttf font/opentype image/svg+xml image/x-icon
      </ifModule>
    </ifModule>
    
    Redirect tarifi-taxi-po-krimu.php http://taxi-krim.com
    Redirect taxi-simferopol-alupka.php http://taxi-krim.com
    Redirect taxi-simferopol-alushta.php http://taxi-krim.com
    Redirect taxi-simferopol-alushta-rabochii-ugolok.php http://taxi-krim.com
    Redirect taxi-simferopol-armjansk.php http://taxi-krim.com
    Redirect taxi-simferopol-artek.php http://taxi-krim.com
    Redirect taxi-simferopol-azovskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-bahchisaraj.php http://taxi-krim.com
    Redirect taxi-simferopol-bajdarskie-vorota.php http://taxi-krim.com
    Redirect taxi-simferopol-balaklava.php http://taxi-krim.com
    Redirect taxi-simferopol-belogorsk.php http://taxi-krim.com
    Redirect taxi-simferopol-beregovoe.php http://taxi-krim.com
    Redirect taxi-simferopol-botanicheskij-sad-nikita.php http://taxi-krim.com
    Redirect taxi-simferopol-chernomorskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-djankoi.php http://taxi-krim.com
    Redirect taxi-simferopol-evpatoria.php http://taxi-krim.com
    Redirect taxi-simferopol-feodosia.php http://taxi-krim.com
    Redirect taxi-simferopol-foros.php http://taxi-krim.com
    Redirect taxi-simferopol-frunze.php http://taxi-krim.com
    Redirect taxi-simferopol-gaspra.php http://taxi-krim.com
    Redirect taxi-simferopol-gursuf.php http://taxi-krim.com
    Redirect taxi-simferopol-hersones.php http://taxi-krim.com
    Redirect taxi-simferopol-kacha.php http://taxi-krim.com
    Redirect taxi-simferopol-kastropol.php http://taxi-krim.com
    Redirect taxi-simferopol-kaziveli.php http://taxi-krim.com
    Redirect taxi-simferopol-kerch.php http://taxi-krim.com
    Redirect taxi-simferopol-kirivskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-koktebel.php http://taxi-krim.com
    Redirect taxi-simferopol-krasnogvardeiskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-krasnoperekopsk.php http://taxi-krim.com
    Redirect taxi-simferopol-kuibishevo.php http://taxi-krim.com
    Redirect taxi-simferopol-kurortnoe-kerch.php http://taxi-krim.com
    Redirect taxi-simferopol-kurortnoe-shebetovka.php http://taxi-krim.com
    Redirect taxi-simferopol-laspi.php http://taxi-krim.com
    Redirect taxi-simferopol-lastochkino-gnezdo.php http://taxi-krim.com
    Redirect taxi-simferopol-lenino.php http://taxi-krim.com
    Redirect taxi-simferopol-livadia.php http://taxi-krim.com
    Redirect taxi-simferopol-lubimovka.php http://taxi-krim.com
    Redirect taxi-simferopol-mal-majak.php http://taxi-krim.com
    Redirect taxi-simferopol-mangup.php http://taxi-krim.com
    Redirect taxi-simferopol-meganom.php http://taxi-krim.com
    Redirect taxi-simferopol-mellas.php http://taxi-krim.com
    Redirect taxi-simferopol-mirnii.php http://taxi-krim.com
    Redirect taxi-simferopol-mishor.php http://taxi-krim.com
    Redirect taxi-simferopol-morskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-mramorie-pesheri.php http://taxi-krim.com
    Redirect taxi-simferopol-nignegorsk.php http://taxi-krim.com
    Redirect taxi-simferopol-nikolaevka.php http://taxi-krim.com
    Redirect taxi-simferopol-novij-svet.php http://taxi-krim.com
    Redirect taxi-simferopol-novoozernoe.php http://taxi-krim.com
    Redirect taxi-simferopol-oktyborskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-olenevka.php http://taxi-krim.com
    Redirect taxi-simferopol-ordgonekidze.php http://taxi-krim.com
    Redirect taxi-simferopol-orlovka.php http://taxi-krim.com
    Redirect taxi-simferopol-partenit.php http://taxi-krim.com
    Redirect taxi-simferopol-pervomajskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-peschanoe.php http://taxi-krim.com
    Redirect taxi-simferopol-planerskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-ponizovka.php http://taxi-krim.com
    Redirect taxi-simferopol-popovka.php http://taxi-krim.com
    Redirect taxi-simferopol-portovoe.php http://taxi-krim.com
    Redirect taxi-simferopol-privetnoe.php http://taxi-krim.com
    Redirect taxi-simferopol-razdolnoe.php http://taxi-krim.com
    Redirect taxi-simferopol-ribachie.php http://taxi-krim.com
    Redirect taxi-simferopol-saki.php http://taxi-krim.com
    Redirect taxi-simferopol-sarich.php http://taxi-krim.com
    Redirect taxi-simferopol-sevastopol.php http://taxi-krim.com
    Redirect taxi-simferopol-sevastopol-kamishi-omega.php http://taxi-krim.com
    Redirect taxi-simferopol-severnaya-inkerman.php http://taxi-krim.com
    Redirect taxi-simferopol-shelkino.php http://taxi-krim.com
    Redirect taxi-simferopol-shtormovoe.php http://taxi-krim.com
    Redirect taxi-simferopol-simeiz.php http://taxi-krim.com
    Redirect taxi-simferopol-sokolinoe.php http://taxi-krim.com
    Redirect taxi-simferopol-soljanoe.php http://taxi-krim.com
    Redirect taxi-simferopol-solnichnaja-dolina.php http://taxi-krim.com
    Redirect taxi-simferopol-sotera.php http://taxi-krim.com
    Redirect taxi-simferopol-sovetskoe.php http://taxi-krim.com
    Redirect taxi-simferopol-starii-krim.php http://taxi-krim.com
    Redirect taxi-simferopol-sudak.php http://taxi-krim.com
    Redirect taxi-simferopol-tabachnoe.php http://taxi-krim.com
    Redirect taxi-simferopol-uglovoe.php http://taxi-krim.com
    Redirect taxi-simferopol-yalta.php http://taxi-krim.com
    Redirect taxi-simferopol-zaozernoe.php http://taxi-krim.com
    ';
}

function getHtaccesNotMain($city)
{
    return 'Options +FollowSymLinks
    RewriteEngine on
    RewriteCond %{HTTP_HOST} ^www.' . $city['eng'] . '.' . getDomainForHtacces() . '
    RewriteRule ^(.*)$ ' . getMainUrl($city['eng'], $city['main_city']) . '$1 [R=permanent,L]
    
    
    
    RewriteCond %{THE_REQUEST} GET\ .*/index\.(php|html)\ HTTP
    RewriteRule ^(.*)index\.(php|html)$ /$1 [R=301,L]
    
    AddType application/force-download doc 
    
    FileETag MTime Size 
    <ifmodule mod_expires.c> 
    <filesmatch ".(jpg|gif|png|css|js|woff)$"> 
    ExpiresActive on 
    ExpiresDefault "access plus 31 day"
    </filesmatch> 
    </ifmodule>    
   
    <ifModule mod_deflate.c>
      <IfModule mod_filter.c>
          AddOutputFilterByType DEFLATE text/plain text/html
          AddOutputFilterByType DEFLATE text/css
          AddOutputFilterByType DEFLATE text/javascript application/javascript application/x-javascript
          AddOutputFilterByType DEFLATE text/xml application/xml application/xhtml+xml application/rss+xml
          AddOutputFilterByType DEFLATE application/json
          AddOutputFilterByType DEFLATE application/vnd.ms-fontobject application/x-font-ttf font/opentype image/svg+xml image/x-icon
      </ifModule>
    </ifModule>';
}
