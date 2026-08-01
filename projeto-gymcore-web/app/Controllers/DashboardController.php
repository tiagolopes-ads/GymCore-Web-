<?php

class DashboardController
{
    public function index(): void
    {
        $titulo = "Dashboard";
        require_once ROOT_PATH . '/app/Views/dashboard/index.php';
    }
}