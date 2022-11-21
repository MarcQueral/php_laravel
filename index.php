<?php

use Framework\App;

require 'vendor/autoload.php';

require 'framework/bootstrap.php';

dd(App::get('router'));
App::get('router')->redirect($_SERVER['REQUEST_URI']);