<?
function createFolder($dir)
{
    if (!is_dir($dir)) {
        if (mkdir($dir)) {
            return "Ok";
        } else {
            return "Не удалось создать папку: " . $dir;
        }
    }

    return "Ok";
}

function deleteFolder($path)
{
    if (is_file($path)) return unlink($path);
    if (is_dir($path)) {
        foreach (scandir($path) as $p) if (($p != '.') && ($p != '..'))
            deleteFolder($path . DIRECTORY_SEPARATOR . $p);
        return rmdir($path);
    }
    return false;
}

function createFile($dir, $txt)
{
    $file = fopen($dir, "w");
    if (!$file)
        return ("Не возможно создать файл: " . $dir);

    fwrite($file, $txt);
    fclose($file);

    return "Ok";
}

function copy_folder($d1, $d2, $upd = true, $force = true)
{
    if (is_dir($d1)) {
        $d2 = mkdir_safe($d2, $force);
        if (!$d2) {
            return "Новый домен не создан";
        }
        $d = dir($d1);
        while (false !== ($entry = $d->read())) {
            if ($entry != '.' && $entry != '..')
                copy_folder("$d1/$entry", "$d2/$entry", $upd, $force);
        }
        $d->close();
    } else {
        $ok = copy_safe($d1, $d2, $upd);
        $ok = ($ok) ? "ok-- " : " -- ";
    }

    return "Ok";
}

function mkdir_safe($dir, $force)
{
    if (file_exists($dir)) {
        if (is_dir($dir)) return $dir;
        else if (!$force) return false;
        unlink($dir);
    }
    return (mkdir($dir, 0777, true)) ? $dir : false;
}

function copy_safe($f1, $f2, $upd)
{
    $time1 = filemtime($f1);
    if (file_exists($f2)) {
        $time2 = filemtime($f2);
        if ($time2 >= $time1 && $upd) return false;
    }
    $ok = copy($f1, $f2);
    if ($ok) touch($f2, $time1);
    return $ok;
}


