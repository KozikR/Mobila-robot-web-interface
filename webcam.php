<?
echo "START ";
echo system('fswebcam -r 356x292 -d /dev/video0 /var/www/cam.jpg');
sleep(3);
echo "END";

