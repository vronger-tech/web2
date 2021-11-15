<?php if (isset($viewData['uzenet'])) {
    $viewData['uzenet'];
} ?>


<form action="<?= SITE_ROOT ?>hozzaszolas" method="post">

<div style="margin-top: 20px;"> <?php foreach ($viewData['hozzaszolas'] as $hir) { ?>
    <p><?php echo $hir['tartalom'] ?></p>
    <p><?php echo $hir['ido'] ?></p>
    <p><?php echo $hir['bejelentkezes'] ?></p><br>
    <?php } ?>
</div>