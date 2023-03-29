<?php 

include ('../mysql.php');
include ('../function_zena.php'); // Функция переработки цены в эконом, комфорт, бизнес, бус

include ('info.php'); // Информация о г

$uliza = iconv('windows-1251', 'utf-8', $uliza);
$date_akzia = date('d.m.Y', strtotime('+'.$day_end_akzia.' day'));


// считываем склонения
$sql=mysql_query("SELECT im, rod, dat, vin, tvor, pred
FROM sklonenie WHERE eng = '$city'");
while ($dp=mysql_fetch_object($sql)){
$city_im=$dp->im;
$city_rod=$dp->rod;
$city_dat=$dp->dat;
$city_vin=$dp->vin;
$city_tvor=$dp->tvor;
$city_pred=$dp->pred;

$city_im_zaglav = mb_strtoupper($city_im, 'UTF-8'); // Привели именной падеж к заглавным букавам
$city_rod_zaglav = mb_strtoupper($city_rod, 'UTF-8'); // Привели родительный падеж к заглавным букавам
$city_vin_zaglav = mb_strtoupper($city_vin, 'UTF-8'); // Привели винительный падеж к заглавным букавам

}

// считываем стоимость

$sql=mysql_query("SELECT zena_title, zena,zenakomfort, zenavito, biznes
FROM napravlenie WHERE name = '$city'");
while ($dp=mysql_fetch_object($sql)){
$zena_title=$dp->zena_title;
$zena=$dp->zena;
$zena_komfort=$dp->zenakomfort;
$zena_vito=$dp->zenavito;
$zena_biznes=$dp->biznes;

$zena_title = $zena_title-10;
}


function padeg($text_padeg, $city_vin_zaglav, $city_vin, $city_dat, $city_im_zaglav, $city_im, $city_rod, $city_rod_zaglav) // Функция обработки города
{
	$text_padeg=str_replace('[Город_Вин_Заглав]',$city_vin_zaglav,$text_padeg);
	$text_padeg=str_replace('[Город_Вин]',$city_vin,$text_padeg);
	$text_padeg=str_replace('[Город_Дат]',$city_dat,$text_padeg);
	$text_padeg=str_replace('[Город_Имен_Заглав]',$city_im_zaglav,$text_padeg);
	$text_padeg=str_replace('[Город_Имен]',$city_im,$text_padeg);
	$text_padeg=str_replace('[Город_Род]',$city_rod,$text_padeg);
	$text_padeg=str_replace('[Город_Род_Заглав]',$city_rod_zaglav,$text_padeg);
		
    return $text_padeg;
}

		
$sql=mysql_query("SELECT id_text, text 
FROM text WHERE id_text = 'title_2'");
while ($dp=mysql_fetch_object($sql)){
$title=$dp->text;
}

$sql=mysql_query("SELECT id_text, text 
FROM text WHERE id_text = 'description_2'");
while ($dp=mysql_fetch_object($sql)){
$description=$dp->text;
}

$sql=mysql_query("SELECT id_text, text 
FROM text WHERE id_text = 'h1_2'");
while ($dp=mysql_fetch_object($sql)){
$h1=$dp->text;
}
$sql=mysql_query("SELECT id_text, text 
FROM text WHERE id_text = 'h2_2'");
while ($dp=mysql_fetch_object($sql)){
$h2=$dp->text;
}

$sql=mysql_query("SELECT id_text, text
FROM text WHERE id_text = 'text1'");
while ($dp=mysql_fetch_object($sql)){
$text1=$dp->text;
}

$sql=mysql_query("SELECT id_text, text 
FROM text WHERE id_text = 'text2'");
while ($dp=mysql_fetch_object($sql)){
$text2=$dp->text;
}

$sql=mysql_query("SELECT id_text, text 
FROM text WHERE id_text = 'text_bottom'");
while ($dp=mysql_fetch_object($sql)){
$text_bottom=$dp->text;
}

	$title = padeg($title, $city_vin_zaglav, $city_vin, $city_dat, $city_im_zaglav, $city_im, $city_rod, $city_rod_zaglav);
	$description = padeg($description, $city_vin_zaglav, $city_vin, $city_dat, $city_im_zaglav, $city_im, $city_rod, $city_rod_zaglav);
	$h1 = padeg($h1, $city_vin_zaglav, $city_vin, $city_dat, $city_im_zaglav, $city_im, $city_rod, $city_rod_zaglav);
	$h2= padeg($h2, $city_vin_zaglav, $city_vin, $city_dat, $city_im_zaglav, $city_im, $city_rod, $city_rod_zaglav);
	$text1 = padeg($text1, $city_vin_zaglav, $city_vin, $city_dat, $city_im_zaglav, $city_im, $city_rod, $city_rod_zaglav);
	$text2 = padeg($text2, $city_vin_zaglav, $city_vin, $city_dat, $city_im_zaglav, $city_im, $city_rod, $city_rod_zaglav);
	$text_bottom =	padeg($text_bottom, $city_vin_zaglav, $city_vin, $city_dat, $city_im_zaglav, $city_im, $city_rod, $city_rod_zaglav);
	


?>



<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta name="yandex-verification" content="76d95f176d235bdf" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <title><?php echo $title?> <?php echo $zena_title?> РУБ.</title>
    <meta name="description" content="<?php echo $description?>">
    <meta name="keywords" content="такси, аэропорт, Симферополь, алушта, ялта,  севастополь, керчь, балакла, утес, партенит, феодосия, судак, коктебель, евпатория, цена, стоимость">
    <meta name="yandex-verification" content="f265ccc67a482093" />
   
    <!-- ==============================================
    Favicon
    =============================================== -->
    <link rel="shortcut icon" href="img\favicon.png">

    <!-- ==============================================
    CSS
    =============================================== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel='stylesheet' href='../css/animate.min.css'>
    <link rel='stylesheet' href='../css/slick.min.css'>
    <link rel='stylesheet' href='../js/flatpickr/dist/flatpickr.min.css'>
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48392114 = new Ya.Metrika({
                    id:48392114,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48392114" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>

<body>
<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=35acf60c759e4ebbbc331349a01d8489" charset="UTF-8" async></script>
<!-- LOADER -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>
<!-- LOADER -->

<!-- MAIN CONTAINER -->
<section class="wrapper">
    <!-- MAIN HEADER -->
    <div class="main-header">
        <!-- MAIN NAVBAR -->
        <div class="main-navbar">
            <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                <div class="top-header">
                    <div class="container content-top">
                        <div class="leftside">
                            <div class="header-items">
                                <p><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;г. <?php echo $city_im?>, <?php echo $uliza?></p>
                            </div>
                            <div class="header-items">
                                <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;taksi-aeroport@mail.ru</p>
                            </div>
                            <div class="header-items">
                                <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+7(978)777-77-84</p>
                            </div>
                        </div>
                        <div class="rightside">
                            <div class="header-items"><a href="#"><p><i class="fa fa-facebook" aria-hidden="true"></i>
                            </p></a></div>
                            <div class="header-items"><a href="#"><p><i class="fa fa-twitter" aria-hidden="true"></i>
                            </p></a></div>
                            <div class="header-items"><a href="#"><p><i class="fa fa-instagram" aria-hidden="true"></i>
                            </p></a></div>
                            <div class="header-items no-margin"><a href="#"><p><i class="fa fa-youtube-play"
                                                                                  aria-hidden="true"></i></p></a></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="navbar-header" style="min-height: 65px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <div class="logo-brand" >
                            <img src="../img\master\logo2.png" 
                           
                            title=" Такси <?php echo $city_im?> - аэропорт Симферополь недорого" alt=" Такси <?php echo $city_im?> - аэропорт Симферополь недорого">
                        <br>   
                        <span style="margin-left: 30px; color: #303030; font-size: 120%;">
                        <nobr> Такси <?php echo $city_im?></nobr>
                        </span>
                            </div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right scroll">
                            <li class="dropdown">
                                <a href="#about_us">О НАС</a>
                            </li>
                            <li class="dropdown">
                                <a href="#tariff">ТАРИФЫ</a>
                            </li>
                            <li class="dropdown">
                                <a href="#class-taxi">КЛАССЫ ТАКСИ</a>
                            </li>
                            <li class="dropdown">
                                <a href="#rev">ОТЗЫВЫ</a>
                            </li>
                            <li class="dropdown">
                                <a href="#cont">КОНТАКТЫ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div><!-- END MAIN NAVBAR -->

    </div><!-- END MAIN HEADER -->

    <section class="banner fix-background parallax" style="background-image:url(../img/section__bg.jpg)">
        <div class="opacity-dark bg-black"></div>
        <div class="section">
            <div class="col-md-8 col-sm-12">
                <div class="banner-text menuMenu scroll">
                    <h1><?php echo $h1?></h1>
                    <p class="text-shadow">
                        ГАРАНТИРОВАННО В ТОЧНОЕ ВРЕМЯ - ПРИЕДИМ В ЛЮБУЮ ТОЧКУ <?php echo $city_rod_zaglav?> И ВСТРЕТИМ В АЭРОПОРТУ
                    </p>
                    <a href="#class-taxi">
                        <button class="wbutton-bordered white">УЗНАТЬ СТОИМОСТЬ</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-search">
                    <h6>ЗАБРОНИРОВАТЬ ТАКСИ В <?php echo $city_vin_zaglav?> СЕЙЧАС</h6>
                    <hr class="form-line">
                    <div class="signup-box-body">
                        <form method="post" class="ajax-contact-form contact_form form-style" id="contact_form-1" action="mail.php">
                            <div id="contact_body">
                                <label class="flatpickr" alt="Select Date and Time *">
                                    <input class="input-field flatpickr" data-enabletime=true data-time_24hr=true
                                           data-timeFormat="H:i" name="date" type="text"
                                           placeholder="Выберите дату и время *">
                                    <i class="fa fa-calendar form-icon" aria-hidden="true"></i>
                                </label>
                                <label for="subject">
                                    <select name="subject-from" class="select-field">
                                        <option value="">Откуда</option>
                                        <option value="Симферополь">Симферополь (аэропорт - город)</option>
                                        <option value="Ай-Даниль">Ай-Даниль</option>
                                        <option value="Алупка">Алупка</option>
                                        <option value="Алушта">Алушта</option>
                                        <option value="Армянск">Армянск</option>
                                        <option value="Балаклава">Балаклава</option>
                                        <option value="Бахчисарай">Бахчисарай</option>
                                        <option value="Белогорск">Белогорск</option>
                                        <option value="Гаспра">Гаспра</option>
                                        <option value="Гурзуф">Гурзуф</option>
                                        <option value="Евпатория">Евпатория</option>
                                        <option value="Кастрополь">Кастрополь</option>
                                        <option value="Кацивели">Кацивели</option>
                                        <option value="Кача">Кача</option>
                                        <option value="Керчь">Керчь</option>
                                        <option value="Коктебель">Коктебель</option>
                                        <option value="Курпаты">Курпаты</option>
                                        <option value="Ласпи">Ласпи</option>
                                        <option value="Ливадия">Ливадия</option>
                                        <option value="Любимовка">Любимовка</option>
                                        <option value="Малореченское">Малореченское</option>
                                        <option value="Меллас">Меллас</option>
                                        <option value="Мисхор">Мисхор</option>
                                        <option value="Мрия">СКК Мрия Резорт</option>
                                        <option value="Николаевка">Николаевка</option>
                                        <option value="Новый Свет">Новый Свет</option>
                                        <option value="Оползневое">Оползневое (отель Мрия)</option>
                                        <option value="Орджоникидзе">Орджоникидзе</option>
                                        <option value="Орлиное">Орлиное</option>
                                        <option value="Парковое">Парковое</option>
                                        <option value="Партенит">Партенит</option>
                                        <option value="Понизовка">Понизовка</option>
                                        <option value="Поповка">Поповка (Казантип)</option>
                                        <option value="Приморский">Приморский (Феодосия)</option>
                                        <option value="Рыбачье">Рыбачье</option>
                                        <option value="Саки">Саки</option>
                                        <option value="Санаторное">Санаторное</option>
                                        <option value="Севастополь">Севастополь</option>
                                        <option value="Симеиз">Симеиз</option>
                                        <option value="Солнечногорское">Солнечногорское</option>
                                        <option value="Судак">Судак</option>
                                        <option value="Утес">Утес</option>
                                        <option value="Учкуевка">Учкуевка</option>
                                        <option value="Феодосия">Феодосия</option>
                                        <option value="Форос">Форос</option>
                                        <option value="Черноморское">Черноморское</option>
                                        <option value="Чонгар">Чонгар</option>
                                        <option value="Щелкино">Щелкино</option>
                                        <option value="Ялта">Ялта</option>
                                    </select>
                                </label>
                                <label for="subject">
                                    <select name="subject-to" class="select-field">
                                        <option value="">Куда</option>
                                        <option value="Симферополь">Симферополь (аэропорт - город)</option>
                                        <option value="Ай-Даниль">Ай-Даниль</option>
                                        <option value="Алупка">Алупка</option>
                                        <option value="Алушта">Алушта</option>
                                        <option value="Армянск">Армянск</option>
                                        <option value="Балаклава">Балаклава</option>
                                        <option value="Бахчисарай">Бахчисарай</option>
                                        <option value="Белогорск">Белогорск</option>
                                        <option value="Гаспра">Гаспра</option>
                                        <option value="Гурзуф">Гурзуф</option>
                                        <option value="Евпатория">Евпатория</option>
                                        <option value="Керчь">Керчь</option>
                                        <option value="Кастрополь">Кастрополь</option>
                                        <option value="Кацивели">Кацивели</option>
                                        <option value="Кача">Кача</option>
                                        <option value="Коктебель">Коктебель</option>
                                        <option value="Курпаты">Курпаты</option>
                                        <option value="Ласпи">Ласпи</option>
                                        <option value="Ливадия">Ливадия</option>
                                        <option value="Любимовка">Любимовка</option>
                                        <option value="Малореченское">Малореченское</option>
                                        <option value="Меллас">Меллас</option>
                                        <option value="Мисхор">Мисхор</option>
                                        <option value="Мрия">СКК Мрия Резорт</option>
                                        <option value="Николаевка">Николаевка</option>
                                        <option value="Новый Свет">Новый Свет</option>
                                        <option value="Оползневое">Оползневое (отель Мрия)</option>
                                        <option value="Орджоникидзе">Орджоникидзе</option>
                                        <option value="Орлиное">Орлиное</option>
                                        <option value="Парковое">Парковое</option>
                                        <option value="Партенит">Партенит</option>
                                        <option value="Понизовка">Понизовка</option>
                                        <option value="Поповка">Поповка (Казантип)</option>
                                        <option value="Приморский">Приморский (Феодосия)</option>
                                        <option value="Рыбачье">Рыбачье</option>
                                        <option value="Саки">Саки</option>
                                        <option value="Санаторное">Санаторное</option>
                                        <option value="Севастополь">Севастополь</option>
                                        <option value="Симеиз">Симеиз</option>
                                        <option value="Солнечногорское">Солнечногорское</option>
                                        <option value="Судак">Судак</option>
                                        <option value="Утес">Утес</option>
                                        <option value="Учкуевка">Учкуевка</option>
                                        <option value="Феодосия">Феодосия</option>
                                        <option value="Форос">Форос</option>
                                        <option value="Черноморское">Черноморское</option>
                                        <option value="Чонгар">Чонгар</option>
                                        <option value="Щелкино">Щелкино</option>
                                        <option value="Ялта">Ялта</option>
                                    </select>
                                </label>
                                <label for="taxi" class="taxi">
                                    <select name="taxi">
                                        <option value="">Выберите класс такси</option>
                                        <option value="Standart">Эконом</option>
                                        <option value="Komfort">Комфорт</option>
                                        <option value="Biznes">Бизнес</option>
                                        <option value="BUS-MINIVAN">Микроавтобус</option>
                                    </select>
                                </label>
                                <label alt="Name *">
                                    <input type="text" name="name" id="name" required class="input-field"
                                           placeholder="Имя *"/>
                                    <i class="fa fa-user form-icon" aria-hidden="true"></i>
                                </label>
                                <label>
                                    <input type="text" name="phones" maxlength="19" required placeholder="Телефон *"
                                           class="tel-number-field long"/>
                                    <i class="fa fa-phone form-icon" aria-hidden="true"></i>
                                </label>
                                <label>
                                    <input name="email" class="input-field" placeholder="E-mail" type="email">
                                    <i class="fa fa-envelope-o form-icon" aria-hidden="true"></i>
                                </label>
                                <label for="field5">
                                    <textarea name="message" id="message" class="textarea-field"
                                              placeholder="Ваше сообщение *"></textarea>
                                    <i class="fa fa-commenting-o form-icon" aria-hidden="true"></i>
                                </label>
                                <label for="field6">
                                    <input name="check" class="input-field" placeholder="1+1=" type="text">
                                </label>
                                <label>
                                    <input type="submit" id="submit_btn" class="wbutton" value="ЗАБРОНИРОВАТЬ"/>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    

    <div class="main seo" >
        <div class="section ">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-front" style="padding-top: 75px;">
                        
                        <h2><?php echo $h2?></h2>
                        <hr class="short">
                        
                       <?php echo $text1?>
                       
                        <div class="hidden-text-more">
                            
                            <?php echo $text2?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="auto-front-img"><img src="../img/images/autos/auto.jpg" 
                  
                    title="Заказать такси из <?php echo $city_rod?> в Симферополь аэропорт" alt="Заказать такси из <?php echo $city_rod?> в Симферополь аэропорт"></div>
               
                </div>
            </div>
            <div class="row">
                <button class="wbutton">ЧИТАТЬ ДАЛЬШЕ</button>
            </div>
        </div>
    </div>

    <div class="main" id="about_us">
        <div class="section">
            <div class="row">
                <div class="col-md-3">
                    <div class="home-service">
                        <div class="service-icon"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTcuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDIyOS45OCAyMjkuOTgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDIyOS45OCAyMjkuOTg7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPHBhdGggZD0iTTIyMy4yMTEsMTI3LjAwMmMtMC43MTcsMC0xLjQ1MSwwLjEwMi0yLjE4NSwwLjMwNGwtOC4zMDEsMi4yODZsLTguNjE4LTIwLjk5NWMtMi40NDEtNS45NDgtOS42NTktMTAuNzg3LTE2LjA4OS0xMC43ODcgIGgtMjcuODRWODEuNzE5YzAtNS45NzItMS44NDYtMTUuMzI4LTQuMTE0LTIwLjg1NWwtMS4zOTEtMy4zODhoMS4wNTRjNC44MTksMCw4Ljc0LTMuOTIxLDguNzQtOC43NHYtNC44OTQgIGMwLTQuMTI4LTIuODQ3LTcuMTI1LTYuNzY5LTcuMTI1Yy0wLjcxNywwLTEuNDUxLDAuMTAzLTIuMTg1LDAuMzA0bC04LjMsMi4yODZsLTguNjE5LTIwLjk5NSAgYy0yLjQ0MS01Ljk0OC05LjY1OS0xMC43ODctMTYuMDg5LTEwLjc4N0g0MS44NDZjLTYuNDI5LDAtMTMuNjQ2LDQuODM5LTE2LjA4OSwxMC43ODdsLTguNjA3LDIwLjk2N2wtOC4xOTUtMi4yNTcgIGMtMC43MzMtMC4yMDItMS40NjktMC4zMDUtMi4xODUtMC4zMDVDMi44NDcsMzYuNzE3LDAsMzkuNzEzLDAsNDMuODQydjQuODk0YzAsNC44MTksMy45MjEsOC43NCw4Ljc0LDguNzRoMC45MzlsLTEuMzkxLDMuMzg4ICBjLTIuMjY5LDUuNTI1LTQuMTE0LDE0Ljg4LTQuMTE0LDIwLjg1NXY0MS43MWMwLDQuODE5LDMuOTIxLDguNzQsOC43NCw4Ljc0aDExLjQxN2M0LjgxOSwwLDguNzQtMy45MjEsOC43NC04Ljc0di0xMC40MTZoNTYuMzg0ICBsLTYuNzk0LDE2LjU1bC04LjE5Ni0yLjI1OGMtMC43MzMtMC4yMDItMS40NjgtMC4zMDQtMi4xODUtMC4zMDRjLTMuOTIyLDAtNi43NjksMi45OTctNi43NjksNy4xMjV2NC44OTQgIGMwLDQuODE5LDMuOTIxLDguNzQsOC43NCw4Ljc0aDAuOTM5bC0xLjM5MiwzLjM4OWMtMi4yNjgsNS41MjUtNC4xMTQsMTQuODgtNC4xMTQsMjAuODU1djQxLjcxYzAsNC44MTksMy45MjEsOC43NCw4Ljc0LDguNzQgIGgxMS40MTZjNC44MTksMCw4Ljc0LTMuOTIxLDguNzQtOC43NHYtMTAuNDE2aDk4LjIxMnYxMC40MTZjMCw0LjgxOSwzLjkyMSw4Ljc0LDguNzQsOC43NGgxMS40MTVjNC44MTksMCw4Ljc0LTMuOTIxLDguNzQtOC43NCAgdi00MS43MWMwLTUuOTc1LTEuODQ2LTE1LjMzLTQuMTE0LTIwLjg1NWwtMS4zOTEtMy4zODloMS4wNTVjNC44MTksMCw4Ljc0LTMuOTIxLDguNzQtOC43NHYtNC44OTQgIEMyMjkuOTgsMTI5Ljk5OCwyMjcuMTMzLDEyNy4wMDIsMjIzLjIxMSwxMjcuMDAyeiBNMTQzLjM1Nyw4MS4wMTF2MTEuODg2YzAsMS45MjMtMS41NzMsMy40OTYtMy40OTYsMy40OTZoLTI0Ljc2NyAgYy0xLjkyMywwLTMuNDk2LTEuNTczLTMuNDk2LTMuNDk2VjgxLjAxMWMwLTEuOTIzLDEuNTczLTMuNDk2LDMuNDk2LTMuNDk2aDI0Ljc2N0MxNDEuNzg0LDc3LjUxNSwxNDMuMzU3LDc5LjA4OCwxNDMuMzU3LDgxLjAxMXogICBNNTIuNTIxLDkyLjg5N2MwLDEuOTIzLTEuNTczLDMuNDk2LTMuNDk2LDMuNDk2SDI0LjI1OWMtMS45MjMsMC0zLjQ5Ni0xLjU3My0zLjQ5Ni0zLjQ5NlY4MS4wMTFjMC0xLjkyMywxLjU3My0zLjQ5NiwzLjQ5Ni0zLjQ5NiAgaDI0Ljc2N2MxLjkyMywwLDMuNDk2LDEuNTczLDMuNDk2LDMuNDk2VjkyLjg5N3ogTTI3Ljc1NSw1OS4xOTdjLTMuODQ2LDAtNS43OTctMi45MTEtNC4zMzctNi40NjlsMTMuMDM2LTMxLjc1NyAgYzEuNDYxLTMuNTU4LDUuODAyLTYuNDY5LDkuNjQ3LTYuNDY5aDcyLjE0OWMzLjg0NiwwLDguMTg4LDIuOTExLDkuNjQ3LDYuNDY5bDEzLjAzOCwzMS43NTdjMS40NiwzLjU1OC0wLjQ5MSw2LjQ2OS00LjMzNyw2LjQ2OSAgSDI3Ljc1NXogTTg4LjkyOSwxNDMuMDEzbDEzLjAzNy0zMS43NTdjMS40Ni0zLjU1OCw1LjgwMi02LjQ2OSw5LjY0Ny02LjQ2OWg3Mi4xNDljMy44NDYsMCw4LjE4OCwyLjkxMSw5LjY0OCw2LjQ2OWwxMy4wMzYsMzEuNzU3ICBjMS40NjEsMy41NTgtMC40OTEsNi40NjktNC4zMzcsNi40NjlIOTMuMjY2Qzg5LjQyLDE0OS40ODIsODcuNDY5LDE0Ni41NzEsODguOTI5LDE0My4wMTN6IE0xMTguMDMzLDE4My4xODIgIGMwLDEuOTIzLTEuNTczLDMuNDk2LTMuNDk2LDMuNDk2SDg5Ljc3Yy0xLjkyMywwLTMuNDk2LTEuNTczLTMuNDk2LTMuNDk2di0xMS44ODZjMC0xLjkyMywxLjU3My0zLjQ5NiwzLjQ5Ni0zLjQ5NmgyNC43NjggIGMxLjkyMywwLDMuNDk2LDEuNTczLDMuNDk2LDMuNDk2VjE4My4xODJ6IE0yMDguODY3LDE4My4xODJjMCwxLjkyMy0xLjU3MywzLjQ5Ni0zLjQ5NiwzLjQ5NmgtMjQuNzY2ICBjLTEuOTIzLDAtMy40OTYtMS41NzMtMy40OTYtMy40OTZ2LTExLjg4NmMwLTEuOTIzLDEuNTczLTMuNDk2LDMuNDk2LTMuNDk2aDI0Ljc2NmMxLjkyMywwLDMuNDk2LDEuNTczLDMuNDk2LDMuNDk2VjE4My4xODJ6IiBmaWxsPSIjZmRiZTAxIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></div>
                        <p>Большой автопарк и только официально трудоустроенные водители. Скажи НЕТ нелегалам!</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-service">
                        <div class="service-icon"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4wMDEgNTEyLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyLjAwMSA1MTIuMDAxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE5Ni4wMDMsOTEuMDAxYy0yNC44MTMsMC00NSwyMC4xODctNDUsNDVjMCwyNC44MTMsMjAuMTg3LDQ1LDQ1LDQ1YzI0LjgxMywwLDQ1LTIwLjE4Nyw0NS00NSAgICBTMjIwLjgxNiw5MS4wMDEsMTk2LjAwMyw5MS4wMDF6IE0xOTYuMDAzLDE1MS4wMDFjLTguMjcxLDAtMTUtNi43MjktMTUtMTVzNi43MjktMTUsMTUtMTVzMTUsNi43MjksMTUsMTUgICAgUzIwNC4yNzQsMTUxLjAwMSwxOTYuMDAzLDE1MS4wMDF6IiBmaWxsPSIjZmRiZTAxIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzE2LjAwMywyMTEuMDAxYy0yNC44MTMsMC00NSwyMC4xODctNDUsNDVjMCwyNC44MTMsMjAuMTg3LDQ1LDQ1LDQ1czQ1LTIwLjE4Nyw0NS00NVMzNDAuODE2LDIxMS4wMDEsMzE2LjAwMywyMTEuMDAxeiAgICAgTTMxNi4wMDMsMjcxLjAwMWMtOC4yNzEsMC0xNS02LjcyOS0xNS0xNWMwLTguMjcxLDYuNzI5LTE1LDE1LTE1czE1LDYuNzI5LDE1LDE1ICAgIEMzMzEuMDAzLDI2NC4yNzIsMzI0LjI3NCwyNzEuMDAxLDMxNi4wMDMsMjcxLjAwMXoiIGZpbGw9IiNmZGJlMDEiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zMjQuMzIzLDkzLjUyYy02Ljg5My00LjU5NC0xNi4yMDYtMi43MzItMjAuODAxLDQuMTYxbC0xMjAsMTgwYy00LjU5Niw2Ljg5My0yLjczMywxNi4yMDYsNC4xNiwyMC44MDEgICAgYzYuODk3LDQuNTk3LDE2LjIwOSwyLjcyOSwyMC44MDEtNC4xNjFsMTIwLTE4MEMzMzMuMDc5LDEwNy40MjgsMzMxLjIxNyw5OC4xMTUsMzI0LjMyMyw5My41MnoiIGZpbGw9IiNmZGJlMDEiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00OTcuMDAzLDMwMS4wMDFoLTc2di0yODZjMC04LjI4NC02LjcxNi0xNS0xNS0xNWgtMzAwYy04LjI4NCwwLTE1LDYuNzE2LTE1LDE1djI4NmgtNzYgICAgYy0xNC4zMzksMC0yMC41MTIsMTguMzU0LTkuMDA4LDI2Ljk5NGwyNDEsMTgxYzUuMzM2LDQuMDA4LDEyLjY4LDQuMDA4LDE4LjAxNiwwbDI0MS0xODEgICAgQzUxNy40NzYsMzE5LjM4Myw1MTEuMzksMzAxLjAwMSw0OTcuMDAzLDMwMS4wMDF6IE0yNTYuMDAzLDQ3OC4yNDFsLTE5Ni4wNS0xNDcuMjRoNDYuMDVjOC4yODQsMCwxNS02LjcxNiwxNS0xNXYtMjg2aDI3MHYyODYgICAgYzAsOC4yODQsNi43MTYsMTUsMTUsMTVoNDYuMDVMMjU2LjAwMyw0NzguMjQxeiIgZmlsbD0iI2ZkYmUwMSIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></div>
                        <p>Действует скидки. Поездка в <?php echo $city_vin?> стала еще дешевле</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-service">
                        <div class="service-icon"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDM4Ljk3Myw0MTEuNzE4Yy0xNC41OTgsMC0yNi40NzUsMTEuODc2LTI2LjQ3NSwyNi40NzVjMCwxNC41OTgsMTEuODc2LDI2LjQ3NCwyNi40NzUsMjYuNDc0ICAgIGMxNC41OTgsMCwyNi40NzQtMTEuODc2LDI2LjQ3NC0yNi40NzRDNDY1LjQ0Nyw0MjMuNTk1LDQ1My41NzEsNDExLjcxOCw0MzguOTczLDQxMS43MTh6IE00MzguOTcyLDQ0OC45NzcgICAgYy01Ljk0NiwwLTEwLjc4NC00LjgzOC0xMC43ODQtMTAuNzg0YzAtNS45NDYsNC44MzgtMTAuNzg0LDEwLjc4NC0xMC43ODRjNS45NDYsMCwxMC43ODQsNC44MzgsMTAuNzg0LDEwLjc4NCAgICBTNDQ0LjkxOCw0NDguOTc3LDQzOC45NzIsNDQ4Ljk3N3oiIGZpbGw9IiNmZGJlMDEiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MTAuMzAzLDQzNi44MmMtMC41LTE5LjM4My04LjcwNC0zNy4yMTEtMjMuMTAyLTUwLjE5OEwzMjkuMjQ5LDI0NC4xNTdsMTM5LjY1OC0xMzkuNjU4ICAgIGMwLjkxOC0wLjI3NCwxLjgyNS0wLjYxNSwyLjctMS4wNzdMNTAxLjg1LDg3LjQ2YzQuMTc4LTIuMjA2LDYuOTgtNi4xNTIsNy42ODUtMTAuODIzYzAuNzA2LTQuNjcyLTAuODA1LTkuMjY4LTQuMTQ2LTEyLjYxMiAgICBsLTM0LjA1Mi0zNC4wNTFjLTMuMzQyLTMuMzQxLTcuOTM1LTQuODUyLTEyLjYxMS00LjE0NmMtNC42NzEsMC43MDUtOC42MTYsMy41MDctMTAuODIzLDcuNjg2TDQzMS45NCw2My43NTUgICAgYy0wLjQ2NiwwLjg4My0wLjgyNCwxLjc5Ni0xLjA5OSwyLjcyM2wtNjUuOTIsNjUuOTJjLTMuMDY0LDMuMDY1LTMuMDY0LDguMDMxLDAsMTEuMDk2YzMuMDY1LDMuMDYyLDguMDMxLDMuMDYyLDExLjA5NiwwICAgIGw2MC40OTItNjAuNDkzbDE1Ljg1MywxNS44NTNsLTE1NC43LDE1NC43bC0xNS44NTMtMTUuODUzbDY3LjUyNS02Ny41MjRjMy4wNjQtMy4wNjUsMy4wNjQtOC4wMzEsMC0xMS4wOTYgICAgYy0zLjA2NS0zLjA2Mi04LjAzMS0zLjA2Mi0xMS4wOTYsMGwtNDguOTk0LDQ4Ljk5NGwtNTMuMzIyLTQ4LjA5NGMxNS4xMTgtNDMuNTE2LDQuMTctOTEuOTMxLTI4LjYyNS0xMjQuNzI1ICAgIEMxNzMuNzA2LDEuNjY1LDEyMy4zMTQtOS4wNCw3OC45MTYsNy45ODdjLTIuNDgxLDAuOTUyLTQuMzEyLDMuMDk0LTQuODY0LDUuNjkzczAuMjQ3LDUuMzAxLDIuMTI2LDcuMThsNjEuNTkyLDYxLjU5MyAgICBjMS44MjIsMS44MjIsMi44MjcsNC4yNDUsMi44MjcsNi44MjJjMCwyLjU3Ny0xLjAwNCw1LTIuODI3LDYuODIzbC0zOS45OTksMzkuOTk5Yy0xLjgyMiwxLjgyMy00LjI0NSwyLjgyNy02LjgyMiwyLjgyNyAgICBjLTIuNTc3LDAtNS0xLjAwMy02LjgyMy0yLjgyN0wyMi41MzMsNzQuNTA0Yy0xLjg4LTEuODc5LTQuNTgtMi42NzgtNy4xOC0yLjEyNmMtMi41OTksMC41NTMtNC43NDEsMi4zODMtNS42OTMsNC44NjQgICAgYy0xNy4wMjcsNDQuMzk2LTYuMzIyLDk0Ljc4OCwyNy4yNywxMjguMzgxYzMxLjk5MSwzMS45OSw3OS40NjgsNDMuMjUzLDEyMi4yOTksMjkuNDE0bDQxLjIyNyw0NS4wODMgICAgYy0xLjk4MSwzLjg3MS00LjU1Nyw3LjQ4MS03LjczNCwxMC42NThjLTExLjg4NCwxMS44ODQtMjkuNjk1LDE1LjYyOC00NS4zOCw5LjU0Yy0yLjg5OS0xLjEyOC02LjE4OC0wLjQzNC04LjM4OCwxLjc2NSAgICBsLTk2LjA1OSw5Ni4wNTljLTI2LjAwNCwyNi4wMDUtMjYuMDA0LDY4LjMxNywwLDk0LjMyQzU1LjQ5NCw1MDUuMDYzLDcyLjI0Myw1MTIsOTAuMDU4LDUxMmMxNy44MTQsMCwzNC41NjQtNi45MzcsNDcuMTYxLTE5LjUzNCAgICBsOTYuMDU5LTk2LjA1OGMyLjE5OC0yLjE5OSwyLjg5MS01LjQ4OSwxLjc2NS04LjM4OGMtNi4wODktMTUuNjg0LTIuMzQ1LTMzLjQ5Nyw5LjUzOC00NS4zODEgICAgYzExLjg4Ni0xMS44ODQsMjkuNjk4LTE1LjYyOCw0NS4zODItOS41NGMyLjkwMSwxLjEyOCw2LjE4OCwwLjQzMiw4LjM4OC0xLjc2NWwxOC4xMi0xOC4xMmM1LjQ1Ni01LjQ1Niw4LjQ2LTEyLjcxMSw4LjQ2LTIwLjQyNiAgICBjMC03LjcxNS0zLjAwNC0xNC45Ny04LjQ2LTIwLjQyNmwtNy43MTMtNy43MTNsOS4zODMtOS4zODNsMTU4LjU1MiwxNDMuMDA3YzExLjE3MiwxMC4wNzcsMTcuNTM5LDIzLjkxMSwxNy45MjYsMzguOTUxICAgIGMwLjM4NywxNS4wNC01LjI1OSwyOS4xODMtMTUuODk4LDM5LjgyMWMtMTAuNTg4LDEwLjU5LTI0LjY5NSwxNi4yMjYtMzkuNjM2LDE1LjkwM2MtMTQuOTcxLTAuMzM0LTI4Ljc4MS02LjYwNC0zOC44ODYtMTcuNjU1ICAgIEwyODIuMzEsMzQ2LjM3OGMtMi45MjctMy4xOTktNy44ODctMy40MTktMTEuMDg0LTAuNDk1Yy0zLjE5NywyLjkyNS0zLjQxOSw3Ljg4Ny0wLjQ5NSwxMS4wODRsMTE3Ljg4OCwxMjguOTE1ICAgIGMxMy4wMjQsMTQuMjQxLDMwLjgyMiwyMi4zMjEsNTAuMTE1LDIyLjc1MmMwLjU0LDAuMDEyLDEuMDc5LDAuMDE4LDEuNjE4LDAuMDE4YzE4LjY4OCwwLDM2LjE5OS03LjI0OSw0OS40NjQtMjAuNTEyICAgIEM1MDMuNTI2LDQ3NC40MjksNTEwLjgwMSw0NTYuMjAzLDUxMC4zMDMsNDM2LjgyeiBNNDQ2LjE0OSw3MC40NWwxNS4wMTktMjguNDU0bDMyLjE5OSwzMi4xOTlsLTI4LjQ1NCwxNS4wMTlMNDQ2LjE0OSw3MC40NXogICAgIE0xNjcuMzI0LDIyMC42MzljLTIuMTYtMi4zNi01LjUzNC0zLjE3NC04LjUzMi0yLjA1NmMtMzguMzYzLDE0LjMxLTgxLjg0NSw0Ljg2OC0xMTAuNzY4LTI0LjA1MiAgICBjLTI2LjI2Mi0yNi4yNjMtMzYuNDM4LTY0LjMzNy0yNy40NzEtOTkuODE1bDUyLjQ3Nyw1Mi40NzdjNC43ODcsNC43ODYsMTEuMTUsNy40MjEsMTcuOTE4LDcuNDIxczEzLjEzMS0yLjYzNSwxNy45MTctNy40MjEgICAgbDM5Ljk5OS0zOS45OTljNC43ODYtNC43ODcsNy40MjEtMTEuMTUsNy40MjEtMTcuOTE4cy0yLjYzNS0xMy4xMzEtNy40MjEtMTcuOTE3TDk2LjM4OCwxOC44OCAgICBjMzUuNDc1LTguOTcxLDczLjU1MywxLjIwOCw5OS44MTQsMjcuNDcxYzI5LjY1OSwyOS42NTcsMzguNzczLDc0LjAwMywyMy4yMjIsMTEyLjk3OGMtMS4yMTcsMy4wNDktMC40MDcsNi41MzQsMi4wMzIsOC43MzMgICAgbDU2LjY3OSw1MS4xMjJsLTcuNDIyLDcuNDIyTDI2MywyMTguODkzYy01LjQ1Ni01LjQ1Ni0xMi43MTEtOC40Ni0yMC40MjYtOC40NmMtNy43MTUsMC0xNC45NywzLjAwNC0yMC40MjYsOC40NmwtMTguMTIsMTguMTIgICAgYy0yLjE5OCwyLjE5OS0yLjg5MSw1LjQ4OS0xLjc2NSw4LjM4OGMyLjA4Nyw1LjM3NSwyLjk5MiwxMC45OTcsMi44MzcsMTYuNTQ4TDE2Ny4zMjQsMjIwLjYzOXogTTMwNS4zNzQsMzAyLjExOWwtMTQuNjgyLDE0LjY4MyAgICBjLTIwLjE5Mi01LjgyMS00Mi4xNjQtMC4yOTktNTcuMjA1LDE0Ljc0MWgtMC4wMDFjLTE1LjA0LDE1LjA0MS0yMC41NjMsMzcuMDEtMTQuNzQsNTcuMjA2bC05Mi42MjIsOTIuNjIgICAgYy05LjYzNCw5LjYzNC0yMi40NDIsMTQuOTQtMzYuMDY1LDE0Ljk0cy0yNi40MzMtNS4zMDYtMzYuMDY1LTE0Ljk0Yy0xOS44ODctMTkuODg2LTE5Ljg4Ny01Mi4yNDQsMC03Mi4xMzFsOTIuNjIxLTkyLjYyMSAgICBjMjAuMTk0LDUuODI0LDQyLjE2MywwLjI5OCw1Ny4yMDUtMTQuNzQyYzE1LjA0LTE1LjA0MSwyMC41NjQtMzcuMDEsMTQuNzQxLTU3LjIwNWwxNC42ODMtMTQuNjgyICAgIGM1LjE0NC01LjE0NiwxMy41MTctNS4xNDYsMTguNjYxLDBsMTMuMjYxLDEzLjI2MWwyNi45NDcsMjYuOTQ3bDEzLjI2MSwxMy4yNjFDMzEwLjUyLDI4OC42MDMsMzEwLjUyLDI5Ni45NzUsMzA1LjM3NCwzMDIuMTE5eiIgZmlsbD0iI2ZkYmUwMSIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE2Mi4zMjYsMzQ2LjI0OWMtMy4wNjUtMy4wNjMtOC4wMzEtMy4wNjMtMTEuMDk2LDBsLTc0LjMxOCw3NC4zMThjLTMuMDY0LDMuMDY1LTMuMDY0LDguMDMxLDAsMTEuMDk2ICAgIGMxLjUzMiwxLjUzMSwzLjU0MSwyLjI5Nyw1LjU0OCwyLjI5N2MyLjAwNywwLDQuMDE2LTAuNzY2LDUuNTQ4LTIuMjk3bDc0LjMxOC03NC4zMTggICAgQzE2NS4zODksMzU0LjI4LDE2NS4zODksMzQ5LjMxMywxNjIuMzI2LDM0Ni4yNDl6IiBmaWxsPSIjZmRiZTAxIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTg5Ljc4NSwzNzMuNzA4Yy0zLjA2NC0zLjA2My04LjAzMS0zLjA2My0xMS4wOTYsMGwtNzQuMzE4LDc0LjMxN2MtMy4wNjQsMy4wNjUtMy4wNjQsOC4wMzEsMCwxMS4wOTYgICAgYzEuNTMyLDEuNTMxLDMuNTQsMi4yOTcsNS41NDgsMi4yOTdjMi4wMDcsMCw0LjAxNi0wLjc2Niw1LjU0OC0yLjI5N2w3NC4zMTgtNzQuMzE3ICAgIEMxOTIuODQ5LDM4MS43MzksMTkyLjg0OSwzNzYuNzczLDE4OS43ODUsMzczLjcwOHoiIGZpbGw9IiNmZGJlMDEiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></div>
                        <p>Безопастная поездка гарантирована! Ваш автомобиль пройдет техосмотр перед поездкой и будет в исправном состоянии </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-service">
                        <div class="service-icon"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik0xOTYuNDM3LDIxOC41NmMtMC45MTcsMTEuNDk5LTYuODI3LDIzLjQyNC0xNS40MDMsMzEuMTI1Yy0yLjkyMywyLjYyNC00LjE4MSw2LjY3Ny0zLjIyMSwxMC41MTdsNC4zNTIsMTcuNDI5ICAgICBjMC45NiwzLjgxOSwzLjkyNSw2LjgwNSw3Ljc2NSw3Ljc2NWwzOC4yMDgsOS41MzZjNS4yNjksMS4zMDEsMTAuMTc2LDMuODQsMTQuNTkyLDcuNTUyYzQuNTIzLDMuNzc2LDExLjI0MywzLjIsMTUuMDQtMS4zNDQgICAgIGMzLjc1NS00LjUyMywzLjE1Ny0xMS4yNDMtMS4zNDQtMTUuMDRjLTYuOTEyLTUuNzgxLTE0LjY3Ny05Ljc3MS0yMy4xMDQtMTEuOTA0bC0zMi4wMjEtNy45NzlsLTEuMzQ0LTUuMzc2ICAgICBjOC4yOTktOS4xNzMsMTQuMjA4LTIwLjg4NSwxNi42NC0zMy4wNDVjNS42OTYtMi45NDQsOS44NTYtOC41NTUsMTAuNjg4LTE1LjI3NWwyLjMwNC0xOC41MTcgICAgIGMwLjcwNC01LjYxMS0xLjAyNC0xMS4zMDctNC43NTctMTUuNTUyYy0xLjE1Mi0xLjMyMy0yLjQ3NS0yLjQ3NS0zLjkwNC0zLjQzNWwwLjU1NS0xMS4zMjhsMS45NDEtMS45NjMgICAgIGM1LjUwNC01LjgyNCwxMi45NDktMTguMzI1LDEuMTczLTM2LjMwOWMtNS41ODktOC41MzMtMTcuMDg4LTE4Ljc1Mi00MC4xOTItMTguNzUyYy02LjgwNSwwLTIyLjE0NCwwLTM3LjAzNSw5LjM2NSAgICAgYy00My45MDQsMS41MzYtNDkuMDY3LDI1LjE5NS00OS4wNjcsNDMuMDUxYzAsMy41MiwwLjY0LDEwLjExMiwxLjIzNywxNS42MTZjLTEuNTc5LDEuMDAzLTMuMDA4LDIuMjQtNC4yODgsMy42NjkgICAgIGMtMy43OTcsNC4yODgtNS41NDcsMTAuMDA1LTQuODIxLDE1LjYzN2wyLjMwNCwxOC41NmMwLjg3NSw2Ljk1NSw1LjI5MSwxMi43MTUsMTEuNzk3LDE1LjU1MiAgICAgYzIuMzg5LDExLjY0OCw3Ljk3OSwyMi44OTEsMTUuNzY1LDMxLjg1MWwtMS41NTcsNi4yNzJsLTMyLjAyMSw3Ljk3OWMtMjUuOTIsNi40ODUtNDQuMDUzLDI5LjY5Ni00NC4wNTMsNTYuNDQ4ICAgICBjMCw1Ljg4OCw0Ljc3OSwxMC42NjcsMTAuNjY3LDEwLjY2N2gxNTAuNTQ5YzUuODg4LDAsMTAuNjY3LTQuNzc5LDEwLjY2Ny0xMC42NjdTMjA5Ljc3MSwzMjAsMjAzLjg4MywzMjBMNjUuNiwzMTkuOTc5ICAgICBjMy42NDgtMTIuMTgxLDEzLjQ4My0yMS44NjcsMjYuMzI1LTI1LjA2N2wzOC4yMjktOS41MzZjMy44MTktMC45Niw2LjgwNS0zLjkyNSw3Ljc2NS03Ljc2NWw0LjU0NC0xOC4xOTcgICAgIGMwLjkzOS0zLjczMy0wLjIzNS03LjcwMS0zLjA3Mi0xMC4zNDdjLTguMjk5LTcuODI5LTEzLjc4MS0xOS4yNDMtMTQuNjk5LTMwLjU0OWMtMC40NDgtNS41NDctNS4xODQtOC41OTctMTAuNzUyLTguNTk3ICAgICBsLTIuNzUyLTE3LjAwM2MzLjA3MiwwLDUuOTczLTEuMzIzLDgtMy42MDVjMi4wMjctMi4zMjUsMi45NjUtNS4zNTUsMi41ODEtOC40MDVjLTAuODExLTYuNDQzLTIuMTEyLTE4LjA2OS0yLjExMi0yMS44NDUgICAgIGMwLTExLjAyOSwwLTIxLjQ2MSwzMS4xODktMjEuNzgxYzIuMTc2LTAuMDIxLDQuMzA5LTAuNzA0LDYuMTAxLTIuMDA1QzE2Ny4xMDQsMTI4LDE3OC43OTUsMTI4LDE4NC40MDUsMTI4ICAgICBjMTYuMzg0LDAsMjAuODQzLDYuODI3LDIyLjQsOS4xMDljNC4zMzEsNi42NTYsMi41Niw4LjUzMywxLjM2NSw5LjgxM2wtNC42MjksNC42MjljLTEuODc3LDEuODc3LTIuOTg3LDQuMzczLTMuMTE1LDcuMDE5ICAgICBsLTEuMTUyLDIzLjIzMmMtMC4xMjgsMi45MDEsMC4yMTMsNC45MDcsMi4yMTksNy4wNGMxLjk4NCwyLjExMiw0LjA1MywyLjUxNyw2Ljk1NSwyLjU2bC0xLjM4NywxNy4zMjMgICAgIEMyMDEuNDkzLDIwOC43MjUsMTk2Ljg4NSwyMTIuOTkyLDE5Ni40MzcsMjE4LjU2eiIgZmlsbD0iI2ZkYmUwMSIvPgoJCQk8cGF0aCBkPSJNMzA5LjMzMywxNzAuNjY3aDY0YzUuODg4LDAsMTAuNjY3LTQuNzc5LDEwLjY2Ny0xMC42NjdzLTQuNzc5LTEwLjY2Ny0xMC42NjctMTAuNjY3aC02NCAgICAgYy01Ljg4OCwwLTEwLjY2Nyw0Ljc3OS0xMC42NjcsMTAuNjY3UzMwMy40NDUsMTcwLjY2NywzMDkuMzMzLDE3MC42Njd6IiBmaWxsPSIjZmRiZTAxIi8+CgkJCTxwYXRoIGQ9Ik00NTguNjY3LDBINTMuMzMzQzIzLjkxNSwwLDAsMjMuOTE1LDAsNTMuMzMzdjI3Ny4zMzNDMCwzNjAuMDg1LDIzLjkxNSwzODQsNTMuMzMzLDM4NGgxNTcuODI0ICAgICBjNS45MDksMCwxMC42NjctNC43NzksMTAuNjY3LTEwLjY2N2MwLTUuODg4LTQuNzc5LTEwLjY2Ny0xMC42NjctMTAuNjY3SDUzLjMzM2MtMTcuNjQzLDAtMzItMTQuMzU3LTMyLTMyVjg1LjMzM2g0NjkuMzMzICAgICB2MjA5LjI4YzAsNS44ODgsNC43NzksMTAuNjY3LDEwLjY2NywxMC42NjdjNS44ODgsMCwxMC42NjctNC43NzksMTAuNjY3LTEwLjY2N1Y1My4zMzNDNTEyLDIzLjkxNSw0ODguMDg1LDAsNDU4LjY2NywweiAgICAgIE00OTAuNjY3LDY0SDIxLjMzM1Y1My4zMzNjMC0xNy42NDMsMTQuMzU3LTMyLDMyLTMyaDQwNS4zMzNjMTcuNjQzLDAsMzIsMTQuMzU3LDMyLDMyVjY0eiIgZmlsbD0iI2ZkYmUwMSIvPgoJCQk8cGF0aCBkPSJNNDU4LjY2NywxNzAuNjY3YzUuODg4LDAsMTAuNjY3LTQuNzc5LDEwLjY2Ny0xMC42NjdzLTQuNzc5LTEwLjY2Ny0xMC42NjctMTAuNjY3SDQxNiAgICAgYy01Ljg4OCwwLTEwLjY2Nyw0Ljc3OS0xMC42NjcsMTAuNjY3czQuNzc5LDEwLjY2NywxMC42NjcsMTAuNjY3SDQ1OC42Njd6IiBmaWxsPSIjZmRiZTAxIi8+CgkJCTxwYXRoIGQ9Ik01MTIsMzQxLjMzM2MwLTguOTE3LTYuNjM1LTE1LjE0Ny0xNi4xMjgtMTUuMTQ3Yy01LjM1NSwwLTE0LjUyOCwyLjc1Mi0yMi40MjEsNy4yOTYgICAgIGMtMTAuNDMyLTIyLjAxNi0yNy40OTktNDEuNTM2LTM5LjcyMy00Ny42MTZjLTguMDg1LTQuMDMyLTM1LjYyNy04LjUzMy02MC4zOTUtOC41MzNjLTI0Ljc2OCwwLTUyLjMwOSw0LjUwMS02MC40MTYsOC41MzMgICAgIGMtMTIuMTgxLDYuMDgtMjkuMjQ4LDI1LjYtMzkuNzAxLDQ3LjYxNmMtNy45MTUtNC41NDQtMTcuMDg4LTcuMjk2LTIyLjQ0My03LjI5NmMtNC4wNTMsMC03LjUzMSwxLjA0NS0xMC4zMjUsMy4xNTcgICAgIGMtMy43MTIsMi43OTUtNS43ODEsNy4wNjEtNS43ODEsMTEuOTg5YzAsMTYuNjQsMTIuOTA3LDI4LjE4MSwxNC40LDI5LjQ0YzEuMTUyLDAuOTgxLDIuNDc1LDEuNiwzLjg0LDIuMDI3ICAgICBjLTUuMDk5LDE0LjE0NC03LjU3MywyOS44NDUtNy41NzMsNDMuMmMwLDE1LjkzNiwxLjQ3Miw0My4xMTUsMTAuNjY3LDU3LjAwM3YxNy42NjRjMCwxMS45NjgsOS4zNjUsMjEuMzMzLDIxLjMzMywyMS4zMzNoMjEuMzMzICAgICBjMTEuOTY4LDAsMjEuMzMzLTkuMzY1LDIxLjMzMy0yMS4zMzN2LTcuMjMyYzEyLjg4NSwzLjIyMSwzMi45ODEsNy4yMzIsNTMuMzMzLDcuMjMyYzIwLjM1MiwwLDQwLjQ0OC00LjAxMSw1My4zMzMtNy4yMzJ2Ny4yMzIgICAgIGMwLDExLjk2OCw5LjM2NSwyMS4zMzMsMjEuMzMzLDIxLjMzM2gyMS4zMzNjMTEuOTY4LDAsMjEuMzMzLTkuMzY1LDIxLjMzMy0yMS4zMzN2LTE3LjY2NCAgICAgYzkuMTk1LTEzLjg4OCwxMC42NjctNDEuMDY3LDEwLjY2Ny01Ny4wMDNjMC0xMy4zNTUtMi40NzUtMjkuMDU2LTcuNTczLTQzLjJjMS4zNjUtMC40MDUsMi42ODgtMS4wMjQsMy44NC0yLjAyNyAgICAgQzQ5OS4wOTMsMzY5LjUxNSw1MTIsMzU3Ljk3Myw1MTIsMzQxLjMzM3ogTTMyMi40MTEsMzA0Ljk4MWMzLjk4OS0xLjgzNSwyNi43NTItNi4zMTUsNTAuOTIzLTYuMzE1czQ2LjkzMyw0LjQ4LDUwLjg1OSw2LjI3MiAgICAgYzguMDg1LDQuMDUzLDI2Ljg1OSwyNS4zMjMsMzQuMzI1LDQ4LjUxMmMtMjAuMDUzLDIuODE2LTY3LjQ1Niw5LjIxNi04NS4xODQsOS4yMTZjLTE3LjcyOCwwLTY1LjE1Mi02LjQtODUuMjA1LTkuMjE2ICAgICBDMjk1LjU5NSwzMzAuMjYxLDMxNC4zNjgsMzA4Ljk5MiwzMjIuNDExLDMwNC45ODF6IE0yNjIuMTY1LDM1My44MTNjLTAuNjgzLTAuNjgzLTEuNzI4LTEuNzkyLTIuOTY1LTMuNjA1ICAgICBjMS40MDgsMC42NjEsMi43NTIsMS40MDgsNC4wMTEsMi4xNTVDMjYyLjg2OSwzNTIuODUzLDI2Mi41MDcsMzUzLjMwMSwyNjIuMTY1LDM1My44MTN6IE0yOTguNjY3LDQ5MC42NjdoLTIxLjMzM1Y0ODBoMjEuMzMzICAgICBWNDkwLjY2N3ogTTQ2OS4zMzMsNDkwLjY2N0g0NDhWNDgwaDIxLjMzM1Y0OTAuNjY3eiBNNDc0LjI0LDQ1OC42NjdoLTM2LjkwN2MtMS4xMzEsMC0yLjI2MSwwLjE5Mi0zLjM3MSwwLjUzMyAgICAgYy0wLjI5OSwwLjEwNy0zMC44NDgsMTAuMTMzLTYwLjYyOSwxMC4xMzNjLTI5Ljc4MSwwLTYwLjMzMS0xMC4wMjctNjAuNjI5LTEwLjExMmMtMC4zNjMtMC4xMDctMC43MjUtMC4wMjEtMS4wODgtMC4wODUgICAgIGMtMC43NDctMC4xNzEtMS40NzItMC40NjktMi4yODMtMC40NjloLTM2Ljk0OWMtMi43OTUtNi4zNzktNS43MzktMjEuMDc3LTUuNzM5LTQyLjY0NWMwLTMuMzkyLDAuMjU2LTYuOTk3LDAuNjQtMTAuNjQ1ICAgICBjMTQuMzM2LDAuNDA1LDMxLjM4MSw1LjI0OCwzMS4zODEsMTAuNjI0YzAsNS44ODgsNC43NzksMTAuNjY3LDEwLjY2NywxMC42NjdTMzIwLDQyMS44ODgsMzIwLDQxNiAgICAgYzAtMjYuMDY5LTM1LjItMzAuODY5LTQ4LjUzMy0zMS43NjVjMS4xOTUtMy45MDQsMi42MjQtNy41NzMsNC4yNDUtMTEuMDI5YzAuMDIxLDAsMC4wNDMsMC4wMjEsMC4wNjQsMC4wMjEgICAgIGMyLjk4NywwLjQ0OCw3My40MDgsMTAuNzczLDk3LjU1NywxMC43NzNjMjQuMTQ5LDAsOTQuNTcxLTEwLjMyNSw5Ny41NTctMTAuNzczYzAuMDIxLDAsMC4wMjEtMC4wMjEsMC4wNDMtMC4wMjEgICAgIGMxLjYyMSwzLjQ1NiwzLjA1MSw3LjEyNSw0LjI0NSwxMS4wMjljLTEzLjMzMywwLjg5Ni00OC41MTIsNS43MTctNDguNTEyLDMxLjc2NWMwLDUuODg4LDQuNzc5LDEwLjY2NywxMC42NjcsMTAuNjY3ICAgICBjNS44ODgsMCwxMC42NjctNC43NzksMTAuNjY3LTEwLjY2N2MwLTUuNDgzLDE2LjkzOS0xMC4xNzYsMzEuMzYtMTAuNjI0YzAuMzg0LDMuNjQ4LDAuNjQsNy4yNTMsMC42NCwxMC42MjQgICAgIEM0ODAsNDM3LjU4OSw0NzcuMDM1LDQ1Mi4yODgsNDc0LjI0LDQ1OC42Njd6IE00ODQuNDgsMzUzLjc5MmMtMC4zNDEtMC40OTEtMC42ODMtMC45Ni0xLjA0NS0xLjQyOSAgICAgYzEuMjU5LTAuNzQ3LDIuNjI0LTEuNTE1LDQuMDExLTIuMTc2QzQ4Ni40LDM1MS43NjUsNDg1LjMzMywzNTIuOTM5LDQ4NC40OCwzNTMuNzkyeiIgZmlsbD0iI2ZkYmUwMSIvPgoJCQk8cGF0aCBkPSJNMzA5LjMzMywyMzQuNjY3aDE0OS4zMzNjNS44ODgsMCwxMC42NjctNC43NzksMTAuNjY3LTEwLjY2N3MtNC43NzktMTAuNjY3LTEwLjY2Ny0xMC42NjdIMzA5LjMzMyAgICAgYy01Ljg4OCwwLTEwLjY2Nyw0Ljc3OS0xMC42NjcsMTAuNjY3UzMwMy40NDUsMjM0LjY2NywzMDkuMzMzLDIzNC42Njd6IiBmaWxsPSIjZmRiZTAxIi8+CgkJCTxwYXRoIGQ9Ik0zOTQuNjY3LDQwNS4zMzNIMzUyYy01Ljg4OCwwLTEwLjY2Nyw0Ljc3OS0xMC42NjcsMTAuNjY3YzAsNS44ODgsNC43NzksMTAuNjY3LDEwLjY2NywxMC42NjdoNDIuNjY3ICAgICBjNS44ODgsMCwxMC42NjctNC43NzksMTAuNjY3LTEwLjY2N0M0MDUuMzMzLDQxMC4xMTIsNDAwLjU1NSw0MDUuMzMzLDM5NC42NjcsNDA1LjMzM3oiIGZpbGw9IiNmZGJlMDEiLz4KCQk8L2c+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></div>
                        <p>Заказывая такси, Вы получите высокопрофессионального водителя</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main section-table" id="tariff">
        <div class="section">
            <div class="section-title">
                <h3>Тарифы такси <?php echo $city_im?></h3>
            </div>

            <div class="r-tbl">
                <table class="highlight">
                    <thead>
                    <tr>
                        <th data-field="id">Направление</th>
                        <th data-field="name">Эконом</th>
                        <th data-field="price">Комфорт</th>
                        <th data-field="price">Бизнес</th>
                        <th data-field="price">Мини-Бус</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <!-- Если город не равен нашему - выводим строку с тарифами в напрвлении этого города -->
                    
<?php 
                    $city_naprav = 'simf';
                    if ($city!=$city_naprav){
                    ?>
                    <tr>
                        <td>Такси Симферополь - <?php echo $city_im?> <span style="color: #ff6600;"><b>АКЦИЯ!</b> до <?php echo $date_akzia?></span></td>
                        <td>
                            <s><?php echo $zena?></s><span style="color: #ff6600;"> 
                            <?php echo (round(($zena*(100-$skidka_akzia_prozent)/100),-2)-1)?>
                            </span></td>
                        <td>
                            <s><?php echo $zena_komfort?></s><span style="color: #ff6600;"> 
                            <?php echo (round(($zena_komfort*(100-$skidka_akzia_prozent)/100),-2)-1)?>
                            </span></td>
                        <td>
                            <s><?php echo $zena_biznes?></s><span style="color: #ff6600;">
                             <?php echo (round(($zena_biznes*(100-$skidka_akzia_prozent)/100),-2)-1)?>
                             </span></td>
                        <td>
                            <s><?php echo $zena_vito?></s><span style="color: #ff6600;">
                             <?php echo (round(($zena_vito*(100-$skidka_akzia_prozent)/100),-2)-1)?>
                             </span></td>
                    </tr>
                    <?php }?>
                    
                    
                                        <?php 
                    $city_naprav = 'simf_2';
                    if ($city!=$city_naprav){
                    ?>
                    <tr>
                        <td>Такси <?php echo $city_im?> - Симферополь <span style="color: #ff6600;"><b>АКЦИЯ!</b> до <?php echo $date_akzia?></span></td>
                                               <td>
                            <s><?php echo $zena?></s><span style="color: #ff6600;"> 
                            <?php echo (round(($zena*(100-$skidka_akzia_prozent)/100),-2)-1)?>
                            </span></td>
                        <td>
                            <s><?php echo $zena_komfort?></s><span style="color: #ff6600;"> 
                            <?php echo (round(($zena_komfort*(100-$skidka_akzia_prozent)/100),-2)-1)?>
                            </span></td>
                        <td>
                            <s><?php echo $zena_biznes?></s><span style="color: #ff6600;">
                             <?php echo (round(($zena_biznes*(100-$skidka_akzia_prozent)/100),-2)-1)?>
                             </span></td>
                        <td>
                            <s><?php echo $zena_vito?></s><span style="color: #ff6600;">
                             <?php echo (round(($zena_vito*(100-$skidka_akzia_prozent)/100),-2)-1)?>
                             </span></td>
                    </tr>
                    <?php }?>
                    
                    <?php 
                    $city_naprav = 'anapa';
                    if ($city!=$city_naprav){
                    
                    $sql=mysql_query("SELECT $city
					FROM mezhgorod WHERE from_1 = 'Анапа'");
					while ($dp=mysql_fetch_object($sql)){
					$tarif=$dp->$city;
					
									}
                    
									if (!empty($tarif)){
									
                    ?> 
                    <tr>
                        <td>Такси <?php echo $city_im?> - Анапа <span style="color: #ff6600;"><b>АКЦИЯ! </b> до <?php echo $date_akzia?> 
                       
                        </span></td>
                        <td>
                            <s><?php echo zena_eko($tarif)?></s><span style="color: #ff6600;">
                            <?php 
                             echo (round((zena_eko($tarif)*(100-$skidka_akzia_prozent)/100),-2)-1)?></span>
                        
                        <td>
                            <s><?php echo zena_komfort($tarif)?></s><span style="color: #ff6600;"> 
                              <?php 
                             echo (round((zena_komfort($tarif)*(100-$skidka_akzia_prozent)/100),-2)-1)?></span>
                             </td>
                        <td>
                            <s><?php echo zena_bysines($tarif)?></s><span style="color: #ff6600;">
                              <?php 
                             echo (round((zena_bysines($tarif)*(100-$skidka_akzia_prozent)/100),-2)-1)?></span>
                            </td>
                        <td>
                            <s><?php echo zena_bus($tarif)?></s><span style="color: #ff6600;"> 
                              <?php 
                             echo (round((zena_bus($tarif)*(100-$skidka_akzia_prozent)/100),-2)-1)?></span>
                            </td>
                    </tr>
                                        <?php }?>
                                        
                                        <?php 
                                        
                                       $sql=mysql_query("SELECT eng, im
					FROM sklonenie WHERE eng <> 'anapa' AND eng <> '$city'");
					while ($dp=mysql_fetch_object($sql)){
					$gorod_to_eng=$dp->eng;
					$gorod_to_rus=$dp->im; 
                                        
                    $city_naprav = $gorod_to_eng;
                    
                    
                    
                    
                    if ($city!=$city_naprav){
                    
 						 
                                       $sql2=mysql_query("SELECT $gorod_to_eng
					FROM mezhgorod WHERE from_1 = '$city_im'");
					while ($dp=mysql_fetch_object($sql2)){
					$tarif=$dp->$gorod_to_eng;
                    
					
					if (!empty($tarif)){
                    ?> 
                    <tr>
                        <td>Такси <?php echo $city_im?> - <?php echo $gorod_to_rus?></td>
                        <td>
                    <?php echo zena_eko($tarif)?>
                        
                        <td>
                        <?php echo zena_komfort($tarif)?>
                             </td>
                        <td>
                           <?php echo zena_bysines($tarif)?>
                            </td>
                        <td>
                            <?php echo zena_bus($tarif)?>
                            </td>
                    </tr>
                                        <?php }
					}
					}
                    }
                    }
                                        ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTAINER -->

    <div class="main class-taxi" id="class-taxi">
            <div class="section">
                <div class="section-title">
                    <h3>Классы такси</h3>
                    <hr class="short">
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="home-models">
                            <img src="../img/images/autos/models/1.jpg" 
                           
                            title="Эконом такси  <?php echo $city_im?> - аэропорт Симферополь заказать" 
                            alt="Эконом такси  <?php echo $city_im?> - аэропорт Симферополь заказать">
                            <div class="caption">
                                <h6>ЭКОНОМ</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="home-models">
                            <img src="../img/images/autos/models/2.jpg" 
                            title="Комфорт такси  <?php echo $city_im?> - аэропорт Симферополь заказать" 
                            alt="Комфорт такси  <?php echo $city_im?> - аэропорт Симферополь заказать">
                            <div class="caption">
                                <h6>КОМФОРТ</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="home-models">
                            <img src="../img/images/autos/models/3.jpg" 
                            title="ВИП такси  <?php echo $city_im?> - аэропорт Симферополь заказать" 
                            alt="ВИП такси  <?php echo $city_im?> - аэропорт Симферополь заказать">
                            <div class="caption">
                                <h6>БИЗНЕС</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="home-models">
                            <img src="../img/images/autos/models/4.jpg" 
                            title="Такси  <?php echo $city_im?> по Крыму" alt="Такси  <?php echo $city_im?> по Крыму">
                            <div class="caption">
                                <h6>МИНИ-БУС</h6>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row">
                    <button href="#contact_form" class="wbutton popup-with-form order-taxi">ЗАБРОНИРОВАТЬ</button>
                
            </div>
            </div>
        </div>

    <div class="main counter-parallax">
                <div class="section">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <circle-counter>
                                <div class="counter-icon">
                                    <i class="fa fa-taxi" aria-hidden="true"></i>
                                </div>
                                <span class="counter circle">150</span>
                                <h4>Автомобилей в автопарке<br>&nbsp;</h4>
                            </circle-counter>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <circle-counter>
                                <div class="counter-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <span class="counter circle">1030</span>
                                <h4>Клиентов было доставленно</h4>
                            </circle-counter>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <circle-counter>
                                <div class="counter-icon">
                                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                                </div>
                                <span class="counter circle">148</span>
                                <h4>Постоянных клиентов<br>&nbsp;</h4>
                            </circle-counter>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <circle-counter>
                                <div class="counter-icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                <span class="counter circle">256</span>
                                <h4>Обращений в среднем за месяц</h4>
                            </circle-counter>
                        </div>
                    </div>
                </div>
    </div>

        <div class="main" id="rev">
            <div class="section">
                <div class="section-title">
                    <h3>О нас говорят, наши клиенты</h3>
                    <hr class="short">
                </div>
                <div class="main-gallery">
                    <div class="gallery-cell">
                        <div class="testimonial-section">
                            <div class="avatar"><img src="../img\images\avatar1.jpg" 
                            title="Клиент, который заказывал такси <?php echo $city_vin?>" 
                            alt="Клиент, который заказывал такси <?php echo $city_vin?>"></div>
                            <div class="testimonial-quote">
                                <p>"Спасибо за оперативное реагирование. Приятно, когда даже несмотря на поздний заказ автомобиля, водитель приезжает вовремя без опозданий."</p>
                            </div>
                            <div class="autor">
                                <h5>Петр Иванов</h5>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-cell">
                        <div class="testimonial-section">
                            <div class="avatar"><img src="../img\images\avatar2.jpg" 
                            title="Наш клиент aeroport-simferopol.taxi/<?php echo $city?>/" 
                            alt="Наш клиент aeroport-simferopol.taxi/<?php echo $city?>/"></div>
                            <div class="testimonial-quote">
                                <p>"Благодаря водителю Коле (Chevrolet), мы добрались в аэропорт как раз вовремя. Спасибо вам за сервис и за ваших водителей"</p>
                            </div>
                            <div class="autor">
                                <h5>Арсен</h5>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-cell">
                        <div class="testimonial-section">
                            <div class="avatar"><img src="../img\images\avatar3.jpg" 
                            title="Арсен, заказывал такси в <?php echo $city_vin?>" alt="Арсен, заказывал такси в <?php echo $city_vin?>"></div>
                            <div class="testimonial-quote">
                                <p>"Благодарим с женой вашу службу такси. Вы умеете даже долгую поездку превратить в легкое путешествие"</p>
                            </div>
                            <div class="autor">
                                <h5>Николай</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main cars-bg" id="cont">
            <div class="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-information">
                            <h2>Остались вопросы?</h2>

                            <p>Задайти их в форме и мы обязательно ответим!</p>
                            <div class="contact-fa">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp; г. <?php echo $city_im?>, <?php echo $uliza?></p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; +7(978)777-77-84</p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; taksi-aeroport@mail.ru</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <form class='ajax-question' id="contact-form" method="post">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="phone"
                                                   class="form-control customize-home" placeholder="Телефон"
                                                   required="required" data-error="Телефон обязателен.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email"
                                                   class="form-control customize-home" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control customize-home"
                                                  placeholder="Ваше сообщение" rows="6" required
                                                  data-error="Напишите Ваше сообщение."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input name="check" class="input-field" placeholder="1+1=" type="text">
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="submit" class="btn btn-warning" value="Отправить сообщение"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <div class="main-footer">
        <div class="main">
            <div class="content">
                <div class="section">
                    <div class="row">
                        <div class="col-md-9 footer-column">
                            <h3 class="footer-heading">ТАКСИ В <?php echo $city_vin_zaglav?> ИЗ СИМФЕРОПОЛЯ</h3>
                            <hr class="short-footer">
                        
                            <?php echo $text_bottom?>
                            
                        </div>
                        <div class="col-md-3 center-column">
                            <h5 class="footer-heading">Наши контакты</h5>
                            <hr class="short-footer">
                            <div class="footer-location">
                                <div class="location-fa"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                                <div class="location-info"><p>г. <?php echo $city_im?>, <?php echo $uliza?></p></div>
                            </div>
                            <div class="footer-location">
                                <div class="location-fa"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="location-info"><p>+7 (978) 777-77-84</p></div>
                            </div>
                            <div class="footer-location">
                                <div class="location-fa"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="location-info"><p>taksi-aeroport@mail.ru</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="main">
            <div class="section">
                <div class="column-left">
                    <p>© Такси <?php echo $city_im?> - Симферополь аэропорт</p>
                </div>
                <div class="column-right">
                    <p><span><a class="popup-with-form" href="#polit">Политика конфиденциальности</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
<noindex>
    <div id="polit" class="mfp-hide white-popup-block" rel="nofollow">
        <h1>Политика конфиденциальности</h1>
        <p>
            Нам очень важна конфиденциальность Вашей информации. Личные данные, которые Вы доверяете нам, заполняя форму заявки на сайте <a href="https://aeroport-simferopol.taxi">aeroport-simferopol.taxi</a> , будут использованы с целью подготовки Услуг в соответствии с Вашими основными требованиями.
        </p>
        <p>

            Передача Вашей информации третьим лицам полностью исключена.
        </p>
        <p>

            Какие данные собираются на сайте: При добровольном заполнении формы заявки Вы отправляете нам: свое Имя, свой Телефон и свой E-mail.
        </p>
</noindex>        
    </div>

    <div class="sidebar-search mfp-hide white-popup-block" id="contact_form">
        <h6>ЗАБРОНИРОВАТЬ ТАКСИ СЕЙЧАС</h6>
        <hr class="form-line">
        <div class="signup-box-body">
            <form method="post" class="ajax-contact-form contact_form form-style " action="mail.php">
                <div id="contact_body">
                    <label class="flatpickr" alt="Select Date and Time *">
                        <input class="input-field flatpickr" data-enabletime=true data-time_24hr=true
                               data-timeFormat="H:i" name="date" type="text"
                               placeholder="Выберите дату и время *">
                        <i class="fa fa-calendar form-icon" aria-hidden="true"></i>
                    </label>
                    <label for="subject">
                        <select name="subject-from" class="select-field">
                            <option value="">Откуда</option>
                            <option value="Симферополь">Симферополь (аэропорт - город)</option>
                            <option value="Ай-Даниль">Ай-Даниль</option>
                            <option value="Алупка">Алупка</option>
                            <option value="Алушта">Алушта</option>
                            <option value="Армянск">Армянск</option>
                            <option value="Балаклава">Балаклава</option>
                            <option value="Бахчисарай">Бахчисарай</option>
                            <option value="Белогорск">Белогорск</option>
                            <option value="Гаспра">Гаспра</option>
                            <option value="Гурзуф">Гурзуф</option>
                            <option value="Евпатория">Евпатория</option>
                            <option value="Кастрополь">Кастрополь</option>
                            <option value="Кацивели">Кацивели</option>
                            <option value="Кача">Кача</option>
                            <option value="Керчь">Керчь</option>
                            <option value="Коктебель">Коктебель</option>
                            <option value="Курпаты">Курпаты</option>
                            <option value="Ласпи">Ласпи</option>
                            <option value="Ливадия">Ливадия</option>
                            <option value="Любимовка">Любимовка</option>
                            <option value="Малореченское">Малореченское</option>
                            <option value="Меллас">Меллас</option>
                            <option value="Мисхор">Мисхор</option>
                            <option value="Мрия">СКК Мрия Резорт</option>
                            <option value="Николаевка">Николаевка</option>
                            <option value="Новый Свет">Новый Свет</option>
                            <option value="Оползневое">Оползневое (отель Мрия)</option>
                            <option value="Орджоникидзе">Орджоникидзе</option>
                            <option value="Орлиное">Орлиное</option>
                            <option value="Парковое">Парковое</option>
                            <option value="Партенит">Партенит</option>
                            <option value="Понизовка">Понизовка</option>
                            <option value="Поповка">Поповка (Казантип)</option>
                            <option value="Приморский">Приморский (Феодосия)</option>
                            <option value="Рыбачье">Рыбачье</option>
                            <option value="Саки">Саки</option>
                            <option value="Санаторное">Санаторное</option>
                            <option value="Севастополь">Севастополь</option> 
                            <option value="Симеиз">Симеиз</option>
                            <option value="Солнечногорское">Солнечногорское</option>
                            <option value="Судак">Судак</option>
                            <option value="Утес">Утес</option>
                            <option value="Учкуевка">Учкуевка</option>
                            <option value="Феодосия">Феодосия</option>
                            <option value="Форос">Форос</option>
                            <option value="Черноморское">Черноморское</option>
                            <option value="Чонгар">Чонгар</option>
                            <option value="Щелкино">Щелкино</option>
                            <option value="Ялта">Ялта</option>
                        </select>
                    </label>
                    <label for="subject">
                        <select name="subject-to" class="select-field">
                            <option value="">Куда</option>
                            <option value="Симферополь">Симферополь (аэропорт - город)</option>
                            <option value="Ай-Даниль">Ай-Даниль</option>
                            <option value="Алупка">Алупка</option>
                            <option value="Алушта">Алушта</option>
                            <option value="Армянск">Армянск</option>
                            <option value="Балаклава">Балаклава</option>
                            <option value="Бахчисарай">Бахчисарай</option>
                            <option value="Белогорск">Белогорск</option>
                            <option value="Гаспра">Гаспра</option>
                            <option value="Гурзуф">Гурзуф</option>
                            <option value="Евпатория">Евпатория</option>
                            <option value="Кастрополь">Кастрополь</option>
                            <option value="Кацивели">Кацивели</option>
                            <option value="Кача">Кача</option>
                            <option value="Керчь">Керчь</option>
                            <option value="Коктебель">Коктебель</option>
                            <option value="Курпаты">Курпаты</option>
                            <option value="Ласпи">Ласпи</option>
                            <option value="Ливадия">Ливадия</option>
                            <option value="Любимовка">Любимовка</option>
                            <option value="Малореченское">Малореченское</option>
                            <option value="Меллас">Меллас</option>
                            <option value="Мисхор">Мисхор</option>
                            <option value="Николаевка">Николаевка</option>
                            <option value="Новый Свет">Новый Свет</option>
                            <option value="Оползневое">Оползневое (отель Мрия)</option>
                            <option value="Орджоникидзе">Орджоникидзе</option>
                            <option value="Орлиное">Орлиное</option>
                            <option value="Парковое">Парковое</option>
                            <option value="Партенит">Партенит</option>
                            <option value="Понизовка">Понизовка</option>
                            <option value="Поповка">Поповка (Казантип)</option>
                            <option value="Приморский">Приморский (Феодосия)</option>
                            <option value="Рыбачье">Рыбачье</option>
                            <option value="Саки">Саки</option>
                            <option value="Санаторное">Санаторное</option>
                            <option value="Севастополь">Севастополь</option>
                            <option value="Симеиз">Симеиз</option>
                            <option value="Солнечногорское">Солнечногорское</option>
                            <option value="Судак">Судак</option>
                            <option value="Утес">Утес</option>
                            <option value="Учкуевка">Учкуевка</option>
                            <option value="Феодосия">Феодосия</option>
                            <option value="Форос">Форос</option>
                            <option value="Черноморское">Черноморское</option>
                            <option value="Чонгар">Чонгар</option>
                            <option value="Щелкино">Щелкино</option>
                            <option value="Ялта">Ялта</option>
                        </select>
                    </label>
                    <label for="taxi" class="taxi">
                        <select name="taxi">
                            <option value="">Выберите класс такси</option>
                            <option value="Standart">Эконом</option>
                            <option value="Komfort">Комфорт</option>
                            <option value="Biznnes">Бизнес</option>
                            <option value="BUS-MINIVAN">Микроавтобус</option>
                        </select>
                    </label>
                    <label alt="Name *">
                        <input type="text" name="name" id="name" required class="input-field"
                               placeholder="Имя *"/>
                        <i class="fa fa-user form-icon" aria-hidden="true"></i>
                    </label>
                    <label>
                        <input type="text" name="phones" maxlength="19" required placeholder="Телефон *"
                               class="tel-number-field long"/>
                        <i class="fa fa-phone form-icon" aria-hidden="true"></i>
                    </label>
                    <label>
                        <input name="email" class="input-field" placeholder="E-mail" type="email">
                        <i class="fa fa-envelope-o form-icon" aria-hidden="true"></i>
                    </label>
                    <label for="field5">
                                    <textarea name="message" id="message" class="textarea-field"
                                              placeholder="Ваше сообщение *"></textarea>
                        <i class="fa fa-commenting-o form-icon" aria-hidden="true"></i>
                    </label>
                    <label for="field6">
                        <input name="check" class="input-field" placeholder="1+1=" type="text">
                    </label>
                    <label>
                        <input type="submit" id="submit_btn" class="wbutton" value="ЗАБРОНИРОВАТЬ"/>
                    </label>
                </div>
            </form>
        </div>
    </div>

    <a href="#0" class="cd-top">Top</a>
    <!-- ==============================================
    SCRIPTS
    =============================================== -->
    <!-- LOAD JQUERY LIBRARY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <script src="../js\top.js"></script>
    <script src='../js\flickity.pkgd.min.js'></script>
    <script src="../js\testimonials.js"></script>
    <script src="../js\counter.js"></script>
    <script src="../js\jquery.waypoints.min.js"></script>
    <script src="../js\jquery.counterup.js"></script>
    <script src="../js\bootstrap.min.js"></script>
    <script src="../js\contact.js"></script>
    <script src="../js\validator.js"></script>
    <script src="../js\navbar.js"></script>
    <script src="../js\loader.js"></script>
    <script src='../js\slick.min.js'></script>
    <script src="../js\car.slider.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/flatpickr/flatpickr.js"></script>
    <script src="../js/common.js"></script>
    <script type="../text/javascript">
    
    var offer='17.11.2018'; //Конец акции
    $('.offer').html(offer);


    </script>
</body>

</html>
