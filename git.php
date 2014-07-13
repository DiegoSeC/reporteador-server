<?php

$output = shell_exec("git pull -u origin master");
print_r($output);
