<?php

namespace Modules\CommonModule\Helper;

class Reply
{


    public static function success($message)
    {
        return [
            'status' => 'success',
            'message' => Reply::getTrans($message),
        ];

    }

    public static function successWithData($message, $data)
    {
        $response = Reply::success($message);
        return array_merge($response, $data);

    }

    public static function dataOnly($data, $code)
    {
        return array_merge($code, $data);

    }

    public static function getTrans($message)
    {

        $trans = trans($message);

        if ($trans == $message) {
            return $message;
        } else {

            return $trans;
        }

    }
}
