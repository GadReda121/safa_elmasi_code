<?php

function hijriDate($date)
{
    return \Alkoumi\LaravelHijriDate\Hijri::Date('l ، j F ، Y', $date); // With optional Timestamp It will return Hijri Date of [$date] => Results

}

function whatsappNumber($number = null)
{
    $array = [
        '' => 'اختر الواتس اب',
        "+966504442842" => "استاذة هدير",
        "+966504442941" => "استاذه فهدة",
    ];

    if ($number) {
        return $array[$number];
    } else {
        return $array;
    }
}

function generatePdf(
    $name,
    $view,
    $data_path = [],
    $width = '1970',
    $height = '1080',
    $header_path = 'pdf.header',
    $footer_path = 'pdf.footer',
    $margin = ['top' => 38, 'bottom' => 38, 'left' => 0, 'right' => 0]
) {
    $pdf = app('snappy.pdf.wrapper');
    $html = view(
        $view,
        $data_path
    )->render();
    $pdf->loadHTML($html)->output();
    // return $footer;
    if ($header_path != null) {
        $header = view($header_path, $data_path)->render();

        $pdf->setOption('header-html', $header);
    }
    if ($footer_path != null) {
        $footer = view($footer_path, $data_path)->render();

        $pdf->setOption('footer-html', $footer);
    }

    $pdf->setPaper('a4')
        ->setOption('orientation', 'landscape')
        ->setOption('no-pdf-compression', true)
        ->setOption('margin-left', $margin['left'])
        ->setOption('margin-right', $margin['right'])
        ->setOption('margin-bottom', $margin['bottom'])
        ->setOption('margin-top', $margin['top'])

        ->setOption('enable-javascript', true)
        ->setOption('javascript-delay', 1000)
        ->setOption('disable-smart-shrinking', true)
        ->setOption('no-stop-slow-scripts', false)
        ->setOption('viewport-size', $width . 'x' . $height)
        ->setOption('page-width', $width . "px")
        ->setOption('page-height', $height . "px")
        // make header is the start of pdf
        ->setOption('header-spacing', 0)
        ->setOption('header-font-size', 10)
        ->setOption('header-font-name', 'Cairo')
        ->setOption('header-line', false)

        ->setOption('enable-external-links', true);

    return $pdf->inline(time() . '.pdf');
}


function checkPermission($permission)
{
    if (auth()->user()->can($permission)) {
        return true;
    }
    return false;
}
function slug($string, $separator = '-')
{
    if (is_null($string)) {
        return "";
    }

    $string = trim($string);

    $string = mb_strtolower($string, "UTF-8");

    $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

    $string = preg_replace("/[\s-]+/", " ", $string);

    $string = preg_replace("/[\s_]/", $separator, $string);

    return $string;
}
