<?php
 namespace UmiCms\System\Auth\PasswordHash;interface iAlgorithm {const SHA256 = 0;const MD5 = 1;const HASH_SALT = 'o95j43hiwjrthpoiwj45ihwpriobneop;jfgp3408ghqpqh5gpqoi4hgp9q85h';public static function hash($v5f4dcc3b5aa765d61d8327deb882cf99, $ved469618898d75b149e5c7c4b6a1c415 = self::SHA256);public static function isHashedWithMd5($v87ccf68aa5caf6afc337a19e5fd949e7, $vf9ec1db33e2c5a7535d8292429031cbe);}