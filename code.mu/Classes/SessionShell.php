<?php

declare(strict_types=1);

class SessionShell
{
    /**
     * Start session
     */
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    /**
     * Set session name and value
     * @param $name
     * @param $value
     * @return mixed
     */
    public function set($name, $value): mixed
    {
        return $_SESSION[$name] = $value;
    }

    /**
     * Get session value
     * @param $name
     * @return mixed
     */
    public function get($name): mixed
    {
        return $_SESSION[$name];
    }

    /**
     * Delete session
     * @param $name
     * @return void
     */
    public function del($name): void
    {
        unset($_SESSION[$name]);
    }

    /**
     * Check is session exist
     * @param $name
     * @return bool
     */
    public function exists($name): bool
    {
        if (isset($_SESSION[$name])) {
            return true;
        }

        return false;
    }

    /**
     * Destroy session
     * @return bool
     */
    public function destroy(): bool
    {
        return session_destroy();
    }
}
