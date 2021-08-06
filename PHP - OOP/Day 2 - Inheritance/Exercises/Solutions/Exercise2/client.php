<?php

require_once 'user.php';

$user = new User();

$user->set_mail('fabio@live.com');
echo $user->get_mail();
