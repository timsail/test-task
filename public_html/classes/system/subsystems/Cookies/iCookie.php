<?php
 namespace UmiCms\System\Cookies;interface iCookie {public function __construct($vb068931cc450442b63f5b3d276ea4297, $v2063c1608d6e0baf80249c42e2be5804 = '', $vac89cc3bb8407b8f6f24df3d2f088752 = 0);public function getName();public function getValue();public function setValue($v2063c1608d6e0baf80249c42e2be5804);public function getExpirationTime();public function setExpirationTime($v07cc694b9b3fc636710fa08b6922c42b);public function getPath();public function setPath($vd6fe1d0be6347b8ef2427fa629c04485);public function getDomain();public function setDomain($vad5f82e879a9c5d6b5b442eb37e50551);public function isSecure();public function setSecureFlag($v327a6c4304ad5938eaf0efb6cc3e53dc);public function isForHttpOnly();public function setHttpOnlyFlag($v327a6c4304ad5938eaf0efb6cc3e53dc);}