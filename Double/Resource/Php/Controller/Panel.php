<div class="file_panel panel_<?=$name?>">

    <?php

    foreach ($explorer->getContent() as $file) {
        if ($file['isDir']) {
            ?>
            <p><a class="dir_link" href="/?controller=Double\Controller\ControllerPanel&name=<?=htmlspecialchars($name)?>&path=<?=htmlspecialchars($path)?>/<?=htmlspecialchars($file['name'])?>"><?=htmlspecialchars($file['name'])?></a></p>
            <?php
        } else {
            ?>
            <p><?=htmlspecialchars($file['name'])?></p>
            <?php
        }
    }

    ?>

</div>