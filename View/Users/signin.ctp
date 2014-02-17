<?php echo $this->Html->css('/css/theme'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">
            
                <img class="profile-img" src="/img/logo.png" alt="">
                <?php echo $this->Form->create('User', array(
                        'action' => 'signin',
                        'class' => 'form-signin'
                ));?>
                    <?php echo $this->Session->flash(); ?>
                    <input name="data[User][email]" type="text" class="form-control" placeholder="Email" required autofocus>
                    <input name="data[User][password]" type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <label class="checkbox pull-left">
                        <input name="data[User][remember]" type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    
                    <?php echo $this->Html->link('Need help?',
                        array(
                            'plugin' => 'gtw_users',
                            'controller' => 'users',
                            'action' => 'signup'
                        ),
                        array(
                            'class' => 'pull-right need-help'
                        )
                    );?>
                    <div class="clearfix"></div>
                    <span class='pull-left'>
	                    <?php echo $this->Html->link('Forgot your password?',
			                array(
			                    'plugin' => 'gtw_users',
			                    'controller' => 'users',
			                    'action' => 'forgot_password'
			                )
			            );?>
					</span>    
                    <span class="clearfix"></span>
                    
                </form>
                
            </div>
            <?php echo $this->Html->link('Create an account',
                array(
                    'plugin' => 'gtw_users',
                    'controller' => 'users',
                    'action' => 'signup'
                ),
                array(
                    'class' => 'text-center new-account'
                )
            );?>
        </div>
    </div>
</div>