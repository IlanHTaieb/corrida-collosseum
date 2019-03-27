<div class="container">
    <?php 
        use App\Controllers\GladiatorsController;

        $gladiators = new GladiatorsController('gladiators_table');
        ?>

        <?php

            foreach($gladiators->index() as $values) { ?>
                
        <div class="list_item">
            <p><?= $values->name; ?></p>
            <p><?= $values->heal; ?></p>
        </div>

        <?php } ?>
</div>