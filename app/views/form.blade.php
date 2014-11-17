<?php
echo Form::open(array('route' => 'form'));
//echo Form::open(array('action' => 'FormController@form'));

echo Form::text('user', 'username');
echo Form::text('pass', 'password');
echo Form::submit('login');
echo Form::close();
