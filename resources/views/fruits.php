<h1>Here are all the Fruits</h1>
<ul>
    <?php foreach ($fruits as $fruit) : ?>
        <li>
            <?php
            echo $fruit->name . ' cost ' . $fruit->price;
            ?>
        </li>
    <?php endforeach ?>
</ul>