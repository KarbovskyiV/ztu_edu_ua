<?php

declare(strict_types=1);

class CookieShell
{
    /**
     * Set cookie with name, value, time to die
     * @param $name
     * @param $value
     * @param $time
     * @return bool
     */
    public function set($name, $value, $time): bool
    {
        return setcookie(name: $name, value: $value, expires_or_options: $time);
    }

    /**
     * Get cookie
     * @param $name
     * @return string
     */
    public function get($name): string
    {
        return htmlspecialchars($_COOKIE[$name]);
    }

    /**
     * Delete cookie
     * @param $name
     * @return void
     */
    public function del($name): void
    {
        unset($_COOKIE[$name]);
    }

    /**
     * Check is cookie exist
     * @param $name
     * @return string
     */
    public function exists($name): string
    {
        if (isset($_COOKIE[$name])) {
            return "Cookie $name exist";
        }

        return 'Cookie does not exist';
    }
}
