<?
function array_to_csv_download($array, $filename = "export.csv", $delimiter = ";")
{
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    $f = fopen('php://output', 'w');
    fputs($f, chr(0xEF) . chr(0xBB) . chr(0xBF)); // BOM

    foreach ($array as $line) {
        fputcsv($f, $line, $delimiter);
    }

    fclose($f);
    exit;
}
