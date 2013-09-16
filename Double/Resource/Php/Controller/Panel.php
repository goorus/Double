<div class="file_panel panel_<?php echo $name?>">

    <?php

    foreach ($explorer->getContent() as $file) {
        if ($file['isDir']) {
            ?>
            <p><a class="dir_link" href="/Panel?name=<?php echo urlencode($name)?>&path=<?php echo urlencode($path)?>/<?php echo urlencode($file['name'])?>"><?php echo htmlspecialchars($file['name'])?></a></p>
            <?php
        } else {
            ?>
            <p><?php echo htmlspecialchars($file['name'])?></p>
            <?php
        }
    }

    ?>

</div>