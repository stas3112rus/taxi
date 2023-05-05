<?
function  getHtaccesTxt($city)
{
    return $city['main_city'] ? getHtaccesMain() : getHtaccesNotMain($city);
}


function getHtaccesMain()
{
    return 'RewriteEngine On
    RewriteCond %{SERVER_PORT} ^80$
    RewriteRule ^.*$ https://%{SERVER_NAME}%{REQUEST_URI} [R=301,L]
    RewriteCond %{THE_REQUEST} GET\ .*/index\.(php|html)\ HTTP
    
    RewriteCond %{HTTP_HOST} ^www\.(.*)$
    RewriteRule ^(.*)$ http://%1/$1 [L,R=301]
    RewriteCond %{THE_REQUEST} GET\ .*/index\.(php|html)\ HTTP
    RewriteRule ^(.*)index\.(php|html)$ /$1 [R=301,L]';
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
