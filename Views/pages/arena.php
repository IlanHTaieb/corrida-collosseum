<div class="container">
    <?php 
        use App\Controllers\GladiatorsController;

        $gladiators = new GladiatorsController('gladiators_table');
        ?>

        <?php

foreach($gladiators->index() as $values) { ?>
    <div class="list_item" id="<?= $values->name ?>" onclick="hit(this)">

    <form action="/_OPENCLASSROOMS/php_po/views/index.php" method="post">
    <input type="hidden" name="action" value="hit">
    <input type="hidden" name="name" id="name" value="<?= $values->name ?>">
    <input type="hidden" name="heal" id="heal" value="<?= $values->heal ?>">
    </form>
    
            <p><?= $values->name ?></p>
            <p><?= $values->heal ?></p>
        </div>

<?php 
    } 
?>
</div>