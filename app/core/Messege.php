<?php

class Messege {
    
    public static function setFlash($title, $message, $action, $type)
    {
        $_SESSION['flash'] = [
            'title' => $title,
            'message' => $message . ' ' . $action,
            'type' => $type  // success atau danger
        ];
    }

    public static function flashExists()
    {
        return isset($_SESSION['flash']);
    }

    public static function getFlash($key)
    {
        if (self::flashExists()) {
            return $_SESSION['flash'][$key];
        }
        return null;
    }

    public static function clearFlash()
    {
        unset($_SESSION['flash']);
    }
}
