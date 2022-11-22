<?php 
include('config.php');
include('./includes/header.php'); ?>

<div id="wrapper">
<table>
        <?php foreach($farms as $name => $image)  :?>
            <tr>
                <td>
                    <img src="images/<?php echo substr($image, 0, 5);?>.jpeg" alt="<?php echo str_replace('_', ' ', $name); ?>">
                </td>
                <td><?php echo str_replace('_', ' ', $name); ?></td>
                <td><?php echo substr($image, -13, 6); ?></td>
                <td>
                    <img src="images/<?php echo substr($image, -6);?>.jpeg" alt="<?php echo substr($image, -6);?>">
                </td>
            </tr>
        <?php endforeach ; ?>
    </table>
</div>

<?php  include('./includes/footer.php');?>