<?php

if (!function_exists('aurl')) {
    function aurl($url = null)
    {
        return asset('assets/admin/' . $url);
    }
}

if (!function_exists('active')) {
    function active($route)
    {
        if (request()->segments()[0] && request()->segments()[0] == $route) {
            return 'active';
        } elseif (isset(request()->segments()[1]) && request()->segments()[1] == $route) {
            return 'active';
        } elseif (request()->route()->getName() == $route) {
            return 'active';
        } else {
            return '';
        }

    }
}

//if (!function_exists('settings')) {
//    function $settings->
//    {
//        return \Modules\ConfigModule\Entities\Setting::orderBy('id', 'desc')->first();
//
//    }//end function
//}

if (!function_exists('yajra_lang')) {
    function yajra_lang()
    {
        $yajra_trans = [
            "sProcessing" => __('commonmodule::main.download'),
            "sLengthMenu" => __('commonmodule::main.show') . " _MENU_" . __('commonmodule::main.records'),
            "sZeroRecords" => __('commonmodule::main.zero_record'),
            "sEmptyTable" => __('commonmodule::main.none_record_table'),
            "sInfo" => __('commonmodule::main.showing') . " " . __('commonmodule::main.records') . __('commonmodule::main.ofthe') . " _START_ " . __('commonmodule::main.of') . " _END_ " . __('commonmodule::main.ofatotalof') . " _TOTAL_ " . __('commonmodule::main.records'),
            "sInfoEmpty" => __('commonmodule::main.zero_records'),
            "sInfoFiltered" => "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix" => "",
            "sSearch" => __('commonmodule::main.search'),
            "sUrl" => "",
            "sInfoThousands" => ",",
            "sLoadingRecords" => "Cargando...",
            "oPaginate" => [
                "sFirst" => __('commonmodule::main.first'),
                "sLast" => __('commonmodule::main.last'),
                "sNext" => __('commonmodule::main.next'),
                "sPrevious" => __('commonmodule::main.previous'),
            ],
            "oAria" => [
                "sSortAscending" => "=> Activar para ordenar la columna de manera ascendente",
                "sSortDescending" => "=> Activar para ordenar la columna de manera descendente"
            ],
        ];
        return json_encode($yajra_trans, JSON_UNESCAPED_UNICODE);
    }
}

if (!function_exists('getYoutubeId')) {
    function getYoutubeId($url)
    {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        if (isset($match[1])) {
            return 'https://www.youtube.com/embed/' . $match[1];
        } else {
            return null;
        }
    }
}
