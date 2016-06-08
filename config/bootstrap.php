<?php

use Cake\Core\Configure;

//Load optionally features of the admin panel
if (!Configure::check('Admin.search')) {
    Configure::write('Admin.search', true);
}
