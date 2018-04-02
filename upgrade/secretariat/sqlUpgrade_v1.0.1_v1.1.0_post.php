<?php
$file_list=[
    $p['homepath'].'controlers/module/secretariat/configuration/actions/inc-ajax-configDefaultUsersParams.php',
    $p['homepath'].'controlers/module/secretariat/configuration/configDefaultParams.php'
];
foreach ($file_list as $file) {
  if (is_file($file))
    unlink($file);
}

