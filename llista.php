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
        .btn-index { display: inline-block; background-color: #0f766e; color: white; padding: 7px 16px; border-radius: 4px; text-decoration: none; margin-bottom: 25px; font-size: 0.9rem; }
        .grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; max-width: 900px; }
        .card { border: 1px solid #e2e8f0; border-radius: 8px; padding: 18px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
        .card h3 { margin: 0 0 10px 0; color: #0f766e; font-size: 1.15rem; }
        .card p { margin: 4px 0; font-size: 0.9rem; }
        .badge-genere { display: inline-block; background-color: #ccfbf1; color: #0f766e; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px; margin: 4px 0; }
        .llegit { color: #15803d; font-weight: 500; }
        .no-llegit { color: #e11d48; font-weight: 500; }
        .estrelles { color: #1e293b; letter-spacing: 1px; }
    </style>
</head>
<body>
    <h1>Tasca 1 B1 613</h1>
    <h2><?= NOM_BIBLIOTECA ?></h2>
    <a href="index.php" class="btn-index">Índex</a>

    <div class="grid">
        <?php foreach ($biblioteca as $llibre): ?>
            <div class="card">
                <h3><?= htmlspecialchars($llibre['titol']) ?></h3>
                <p><strong>Autor:</strong> <?= htmlspecialchars($llibre['autor']) ?></p>
                <p><strong>Any:</strong> <?= $llibre['any'] ?></p>
                <div class="badge-genere"><?= htmlspecialchars($llibre['genere']) ?></div>
                <p class="<?= $llibre['llegit'] ? 'llegit' : 'no-llegit' ?>">
                    <?= $llibre['llegit'] ? 'Llegit' : 'No llegit' ?>
                </p>
                <?php if ($llibre['llegit']): ?>
                    <p>Valoració: <span class="estrelles"><?= str_repeat('★', $llibre['valoracio']) ?></span></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>