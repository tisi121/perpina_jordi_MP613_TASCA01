<?php
require_once 'dades.php';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; padding: 25px; color: #333; }
        h1 { font-size: 1.6rem; margin-bottom: 2px; }
        h2 { font-size: 1.2rem; color: #15803d; margin-top: 0; }
        .stats { margin-bottom: 20px; font-size: 0.95rem; }
        ul { list-style-type: disc; padding-left: 20px; }
        li { margin-bottom: 8px; }
        a { color: #0284c7; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Tasca 1 B1 613</h1>
    <h2><?= NOM_BIBLIOTECA ?></h2>
    
    <div class="stats">
        Llibres llegits: <strong><?= $total_llegits ?></strong> | 
        No llegits: <strong><?= $total_no_llegits ?></strong> | 
        Valoració mitjana: <strong><?= $mitjana_valoracio ?></strong>
    </div>

    <ul>
        <li><a href="llista.php">Llista de llibres</a></li>
        <li><a href="taula.php">Taula de llibres</a></li>
    </ul>
</body>
</html>