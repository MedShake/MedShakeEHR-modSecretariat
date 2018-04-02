<?php
$file_list=[
    $p['homepath'].'controlers/module/secretatiat/configuration/actions/inc-ajax-configDefaultUsersParams.php',
    $p['homepath'].'controlers/module/secretatiat/configuration/configDefaultParams.php'
];
foreach ($file_list as $file) {
  if (is_file($file))
    unlink($file);
}

