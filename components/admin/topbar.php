<?php // Komponen Topbar Header ?>
<header class="topbar">
    <h1><?= htmlspecialchars($pageTitle ?? 'Dashboard') ?></h1>
    <?php if (!empty($pageSubtitle)): ?>
        <p><?= htmlspecialchars($pageSubtitle) ?></p>
    <?php endif; ?>
</header>