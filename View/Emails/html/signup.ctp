<h1><?php echo __d('gtw_users', 'Account creation confirmation'); ?></h1>
<p>
    <?php echo __d('gtw_users', 'Please visit the following link to confirm your account creation'); ?> <br>
    <a href="<?php echo FULL_BASE_URL; ?>/gtw_users/users/confirmation/<?php echo $userId . '/' . $token;?>">
        <?php echo FULL_BASE_URL; ?>/gtw_users/users/confirmation/<?php echo $userId . '/' . $token;?>
    </a>
</p>