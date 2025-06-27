<?php
namespace Deployer;

require 'recipe/magento2.php';

// Config

set('repository', 'git@github.com:MageTested/mage-unconference-e2e-pipeline.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('www.magetested.com')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/mageunconference');

// Hooks

after('deploy:failed', 'deploy:unlock');
