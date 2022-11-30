<?php
include_once "encabezado.php";
?>
<div class="columns">
    <div class="column">
        <h1 class="is-size-1 has-text-centered"><?php echo traducir("faq") ?></h1>
        <div class="content">
            <ol>
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <li><?php echo traducir("faq$i") ?></li>
                <?php
                }
                ?>
            </ol>
        </div>
    </div>
</div>
<?php
include_once "pie.php";
?>