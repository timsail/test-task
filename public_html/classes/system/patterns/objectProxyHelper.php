<?php
 abstract class objectProxyHelper {public static function getClassPrefixByType($v16b2b26000987faccb260b9d39df1269) {static $v0fea6a13c52b4d4725368f24b045ca84 = [];if (isset($v0fea6a13c52b4d4725368f24b045ca84[$v16b2b26000987faccb260b9d39df1269])) {return $v0fea6a13c52b4d4725368f24b045ca84[$v16b2b26000987faccb260b9d39df1269];}$va8cfde6331bd59eb2ac96f8911c4b666 = selector::get('object')->id($v16b2b26000987faccb260b9d39df1269);if (!$va8cfde6331bd59eb2ac96f8911c4b666 instanceof iUmiObject) {throw new coreException("Can't get class name prefix from object #{$v16b2b26000987faccb260b9d39df1269}");}return $v0fea6a13c52b4d4725368f24b045ca84[$v16b2b26000987faccb260b9d39df1269] = $va8cfde6331bd59eb2ac96f8911c4b666->class_name ?: '';}public static function includeClass($v06f0066e65410a0a1c9f39991a3f3b01, $v6f65638723a69dfa99474478b83b7b17) {$v47826cacc65c665212b821e6ff80b9b0 = SYS_MODULES_PATH . $v06f0066e65410a0a1c9f39991a3f3b01 . $v6f65638723a69dfa99474478b83b7b17 . '.php';if (!is_file($v47826cacc65c665212b821e6ff80b9b0)) {throw new coreException("Required source file {$v47826cacc65c665212b821e6ff80b9b0} is not found");}require_once $v47826cacc65c665212b821e6ff80b9b0;}}