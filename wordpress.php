<?php
namespace Deployer;
require_once __DIR__ . '/common.php';
set('shared_files', ['wp-config.php']);
set('shared_dirs', ['wp-content/uploads']);
set('writable_dirs', ['wp-content/uploads']);
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');
after('deploy', 'success');