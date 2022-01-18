<?php
require '_header.php';
?>

<h1>List of products</h1>

<p>
    here are some of the products for sale:
</p>

    <?php
        foreach($products as $product):
    ?>

        <hr>
        <b>
            <?= $product->getName() ?>
        </b>

        $<?= $product->getPrice() ?>

        <?php
        endforeach;
    ?>

    <hr>

<?php
require '_footer.php';
?>