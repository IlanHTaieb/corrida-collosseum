<div class="container">
    <?php 
        use App\Controllers\GladiatorsController;

        $gladiators = new GladiatorsController('gladiators_table');

        $obj = $gladiators->index();

        foreach($obj as $values) { ?>
            
            <div class="list_item">
                <p><?= $values->name; ?></p>
                <p><?= $values->heal; ?></p>
            </div>

        <?php } ?>
</div>