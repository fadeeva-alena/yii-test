<?php foreach ($list as $item): ?>
    <h1>
        <?php echo $item['firstName'];?>
    </h1>
    <p><?php echo $item['salary'];?></p>
    <hr>
<?php endforeach;?>