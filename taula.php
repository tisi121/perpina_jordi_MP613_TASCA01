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
        table { width: 100%; max-width: 950px; border-collapse: collapse; text-align: left; }
        th, td { padding: 10px 14px; border-bottom: 1px solid #e2e8f0; font-size: 0.9rem; }
        th { background-color: #f8fafc; font-weight: 600; color: #334155; }
        .llegit { color: #15803d; font-weight: 500; }
        .no-llegit { color: #e11d48; font-weight: 500; }
        .estrelles { color: #1e293b; letter-spacing: 1px; }
    </style>
</head>
<body>
    <h1>Tasca 1 B1 613</h1>
    <h2><?= NOM_BIBLIOTECA ?></h2>
    <a href="index.php" class="btn-index">Índex</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Títol</th>
                <th>Autor</th>
                <th>Any</th>
                <th>Gènere</th>
                <th>Llegit</th>
                <th>Valoració</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($biblioteca as $llibre): ?>
                <tr>
                    <td><?= $llibre['id'] ?></td>
                    <td><?= htmlspecialchars($llibre['titol']) ?></td>
                    <td><?= htmlspecialchars($llibre['autor']) ?></td>
                    <td><?= $llibre['any'] ?></td>
                    <td><?= htmlspecialchars($llibre['genere']) ?></td>
                    <td class="<?= $llibre['llegit'] ? 'llegit' : 'no-llegit' ?>">
                        <?= $llibre['llegit'] ? 'Llegit' : 'No llegit' ?>
                    </td>
                    <td>
                        <?php if ($llibre['llegit']): ?>
                            <span class="estrelles"><?= str_repeat('★', $llibre['valoracio']) ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>