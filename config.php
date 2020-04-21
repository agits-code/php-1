<?php
return [
    'database' => [
       'name' => 'mytodo',
        'username' => 'root',
        'password' => 'lampolampo',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]

    ]

];