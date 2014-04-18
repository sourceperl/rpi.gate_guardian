<?php
# allow only 163.111.168 subnet
if (! preg_match('/163\.111\.168/', $_SERVER['REMOTE_ADDR'])) {
  header("Status: 404 Not Found"); 
  exit();
}

echo exec('sudo /home/pi/soft/gpio/open.py');
?>
