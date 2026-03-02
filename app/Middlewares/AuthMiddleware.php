<?php

namespace App\Middlewares;

class AuthMiddleware
{
    public static function handle()
    {
        // Basic Auth Check
        if (!isset($_SESSION['id']) || empty($_SESSION['id']) || !is_numeric($_SESSION['id'])) {
            set_flash('error', 'You must be logged in to view this page.');
            redirect("/login");
        }

        // SESSION HIJACKING PROTECTION - User Agent
        if (!isset($_SESSION['ua']) || $_SESSION['ua'] !== $_SERVER['HTTP_USER_AGENT']) {
            session_destroy();
            session_start();
            set_flash('error', 'Session invalid or expired. Please log in again.');
            redirect('/login');
        }

        // SESSION HIJACKING PROTECTION - IP Address
        if (!isset($_SESSION['ip']) || $_SESSION['ip'] !== $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            set_flash('error', 'Session IP changed. For your security, please log in again.');
            redirect('/login');
        }
    }
}
