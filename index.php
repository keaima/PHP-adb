<?php
// Loop 1800 times
//打开抖音评论，选择到发出的评论，然后在命令行运行本程序代码，进行删除
for ($i = 0; $i < 1800; $i++) {
    // Execute the ADB shell commands
    exec('adb shell input swipe 500 500 500 500 2000'); // Long press on the comment menu
    exec('adb shell input tap 500 1150'); // Tap on the delete confirmation menu

    // Sleep for 2 seconds before the next iteration
    sleep(2);
}
?>
