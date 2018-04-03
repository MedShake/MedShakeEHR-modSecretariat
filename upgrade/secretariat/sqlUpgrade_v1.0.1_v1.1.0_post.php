<?php
$file_list=[
    $p['homepath'].'controlers/module/secretariat/configuration/actions/inc-ajax-configDefaultUsersParams.php',
    $p['homepath'].'controlers/module/secretariat/configuration/configDefaultParams.php'
];
$dir_list=[
    $p['config']['templatesFolder'].'secretariat/configuration'
];
foreach ($file_list as $file) {
  if (is_file($file))
    unlink($file);
}
foreach ($dir_list as $dir) {
  if (is_dir($dir))
    rmdir($dir);
}

