<?php

class messages{

    protected static $messages = [
    'error' => [],
    'warning' => [],
    'success' => [],
    'info' => []
    ];

    public static function getMessages()
    {

        return static::$messages;
    }

    public static function error($message)
    {
        static::$messages['error'][] = $message;

        // array_push(static::$messages['error'], $message)
    }

    public static function warning($message)
    {
        static::$messages['warning'][] = $message;

    }
    public static function success($message)
    {
        static::$messages['success'][] = $message;

    }
    public static function info($message)
    {
        static::$messages['info'][] = $message;

    }
    public static function flashMessages()
    {

        //isset($_SESSION) OR session_start();-------better way to write below

        if(!isset($_SESSION))
        {
            session_start();
        }

        $_SESSION['messages'] = static::$messages;

    }
    public static function loadFlashedMessages()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        if(isset($_SESSION['messages']))
        {
            if(is_array($_SESSION['messages']))

            {
                $merged = array_merge(static::$messages, $_SESSION['messages']);

                static::$messages = $merged;
            }

            unset($_SESSION['messages']);
        }

    }

}



?>