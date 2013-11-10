<?php if ($this->Session->read('Auth.User')): ?>
    <li id="<?php echo $this->fetch('users_li_id'); ?>" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class='link-extendedo'><?php echo $this->Session->read('Auth.User.email'); ?> <b class="caret"></b></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <?php echo $this->Html->link( 'profile', array(
                    'plugin' => 'gtw_users',
                    'controller' => 'users', 
                    'action' => 'edit',
                    $this->Session->read('Auth.User.id')
                )) ?>
            </li>
            <li>
                <?php echo $this->Html->link( 'signout', array(
                    'plugin' => 'gtw_users',
                    'controller' => 'users', 
                    'action' => 'signout'
                )); ?>
            </li>
            <?php echo $this->fetch('user_submenu'); ?>
        </ul>
    </li>
<?php else: ?>

    <?php echo $this->Html->link('sign in | sign up', array(
        'plugin' => 'gtw_users', 
        'controller' => 'users', 
        'action' => 'signin'
    )); ?>

<?php endif; ?>