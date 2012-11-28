<div class="file_panel panel_<?=$name?>">

    <?php

    foreach ($explorer->getContent() as $file) {
        if ($file['isDir']) {
            ?>
            <p><a class="dir_link" href="/Panel?name=<?=urlencode($name)?>&path=<?=urlencode($path)?>/<?=urlencode($file['name'])?>"><?=htmlspecialchars($file['name'])?></a></p>
            <?php
        } else {
            ?>
            <p><?=htmlspecialchars($file['name'])?></p>
            <?php
        }
    }

    ?>

</div>