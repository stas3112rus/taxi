<?
include('mysql.php');
$sql = mysql_query("SELECT eng 
    FROM sklonenie");
while ($dp = mysql_fetch_object($sql)) {
    $eng = $dp->eng;

    $src = "../" . $eng . ".yalta-24.taxi/info.php";

    include($src);
    $uliza = iconv('windows-1251', 'utf-8', $uliza);
    if (!empty($uliza)) {
        echo "UPDATE `cities` SET `street`='$uliza' WHERE `eng` = '$eng'" . "<br>";
    }
}
