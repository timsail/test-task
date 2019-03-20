<?php
 class jsonTranslator {protected $result = '';protected $level = 1;protected static $shortKeys = [   '@' => 'attribute',   '#' => 'node',   '+' => 'nodes',   '%' => 'xlink',   '*' => 'comment'  ];private $callback;public function setCallback($v924a8ceeac17f54d3be3f8cdf1c04eb2) {$this->callback = trim(htmlspecialchars($v924a8ceeac17f54d3be3f8cdf1c04eb2));}public function translateToJson($v8d777f385d3dfec8815d20f7496026dc) {$v466deec76ecdf5fca6d38571f6324d54 = $this->translate($v8d777f385d3dfec8815d20f7496026dc);$vcb2095efc252baf8a437d8a12582c633 = $this->makeObjectLiteral($v466deec76ecdf5fca6d38571f6324d54);if ($this->callback) {return $this->makeCallbackNotation($vcb2095efc252baf8a437d8a12582c633);}return $vcb2095efc252baf8a437d8a12582c633;}private function translate($v8d777f385d3dfec8815d20f7496026dc) {$this->chooseTranslator($v8d777f385d3dfec8815d20f7496026dc);return $this->result;}private function makeObjectLiteral($v466deec76ecdf5fca6d38571f6324d54) {return '{' . PHP_EOL . $v466deec76ecdf5fca6d38571f6324d54 . PHP_EOL . '}';}private function makeCallbackNotation($v61dd86c2dc75c3f569ec619bd283a33f) {return $this->callback . '(' . $v61dd86c2dc75c3f569ec619bd283a33f . ');';}protected function chooseTranslator($v8d777f385d3dfec8815d20f7496026dc, $v67278b1893f28aa5a341740e3d75ff1c = false) {switch (gettype($v8d777f385d3dfec8815d20f7496026dc)) {case 'array': {$this->translateArray($v8d777f385d3dfec8815d20f7496026dc);break;}case 'object': {$v7c27535f88bae9519ceb14a8983c57ff = translatorWrapper::get($v8d777f385d3dfec8815d20f7496026dc);$v7c27535f88bae9519ceb14a8983c57ff->setOption('serialize-related-entities', $v67278b1893f28aa5a341740e3d75ff1c);$this->result .= "{\n";$this->level++;$this->chooseTranslator($v7c27535f88bae9519ceb14a8983c57ff->translate($v8d777f385d3dfec8815d20f7496026dc));$this->level--;$v5db8dca30c2d7f0c2bc225ae852c5053 = str_repeat("\t", $this->level);$this->result .= "\n" . $v5db8dca30c2d7f0c2bc225ae852c5053 . '}';break;}default: {$this->translateBasic($v8d777f385d3dfec8815d20f7496026dc);}}}protected function translateArray($v8d777f385d3dfec8815d20f7496026dc) {$v2fa47f7c65fec19cc163b195725e3844 = umiCount($v8d777f385d3dfec8815d20f7496026dc);$v865c0c0b4ab0e063e5caa3387c1a8741 = 0;foreach ($v8d777f385d3dfec8815d20f7496026dc as $v3c6e0b8a9c15224a8228b9a98ca1531d => $v2063c1608d6e0baf80249c42e2be5804) {$v518d8dec3947df909fe6e4c9940f98a6 = $this->getSubKey($v3c6e0b8a9c15224a8228b9a98ca1531d);$vde0366a04f7345d0b277b28f9e86f357 = $this->getRealKey($v3c6e0b8a9c15224a8228b9a98ca1531d);$v7694f4a66316e53c8cdd9d9954bd611d = (++$v865c0c0b4ab0e063e5caa3387c1a8741 < $v2fa47f7c65fec19cc163b195725e3844) ? ",\n" : '';$v5db8dca30c2d7f0c2bc225ae852c5053 = str_repeat("\t", $this->level);if (is_array($v2063c1608d6e0baf80249c42e2be5804) && umiCount($v2063c1608d6e0baf80249c42e2be5804) == 1) {$v3c6e0b8a9c15224a8228b9a98ca1531d = key($v2063c1608d6e0baf80249c42e2be5804);if (mb_substr($v3c6e0b8a9c15224a8228b9a98ca1531d, 0, 5) == 'node:') {$v2063c1608d6e0baf80249c42e2be5804 = $v2063c1608d6e0baf80249c42e2be5804[$v3c6e0b8a9c15224a8228b9a98ca1531d];}}switch ($v518d8dec3947df909fe6e4c9940f98a6) {case 'void': {$v9ab62b5ef34a985438bfdf7ee0102229 = mb_substr($this->result, -2);$v0a3d72134fb3d6c024db4c510bc1605b = mb_substr($this->result, -3);if ($v865c0c0b4ab0e063e5caa3387c1a8741 == $v2fa47f7c65fec19cc163b195725e3844 && (($v9ab62b5ef34a985438bfdf7ee0102229 == ",\n" && $v4a8a08f09d37b73795649038408b5f33 = 2) || ($v0a3d72134fb3d6c024db4c510bc1605b == ",\n\n" && $v4a8a08f09d37b73795649038408b5f33 = 3))) {$this->result = mb_substr($this->result, 0, mb_strlen($this->result) - $v4a8a08f09d37b73795649038408b5f33);}continue 2;}case 'list': {$this->result .= "{$v5db8dca30c2d7f0c2bc225ae852c5053}\"{$vde0366a04f7345d0b277b28f9e86f357}\": ";if (is_array($v2063c1608d6e0baf80249c42e2be5804)) {$v2063c1608d6e0baf80249c42e2be5804 = $this->cleanupArray($v2063c1608d6e0baf80249c42e2be5804);}$this->result .= json_encode($v2063c1608d6e0baf80249c42e2be5804);$this->result .= "{$v7694f4a66316e53c8cdd9d9954bd611d}\n";continue 2;}case 'xlink': {$v2063c1608d6e0baf80249c42e2be5804 = '/' . str_replace('://', '/', $v2063c1608d6e0baf80249c42e2be5804) . '.json';}default: {if (is_array($v2063c1608d6e0baf80249c42e2be5804)) {if (umiCount($v2063c1608d6e0baf80249c42e2be5804) == 0) {$v9ab62b5ef34a985438bfdf7ee0102229 = mb_substr($this->result, -2);$v0a3d72134fb3d6c024db4c510bc1605b = mb_substr($this->result, -3);if ($v865c0c0b4ab0e063e5caa3387c1a8741 == $v2fa47f7c65fec19cc163b195725e3844 && (($v9ab62b5ef34a985438bfdf7ee0102229 == ",\n" && $v4a8a08f09d37b73795649038408b5f33 = 2) || ($v0a3d72134fb3d6c024db4c510bc1605b == ",\n\n" && $v4a8a08f09d37b73795649038408b5f33 = 3))) {$this->result = mb_substr($this->result, 0, mb_strlen($this->result) - $v4a8a08f09d37b73795649038408b5f33);}continue 2;}$this->result .= "{$v5db8dca30c2d7f0c2bc225ae852c5053}\"{$vde0366a04f7345d0b277b28f9e86f357}\": {\n";++$this->level;$this->chooseTranslator($v2063c1608d6e0baf80249c42e2be5804);$this->result .= "\n{$v5db8dca30c2d7f0c2bc225ae852c5053}}{$v7694f4a66316e53c8cdd9d9954bd611d}\n";--$this->level;}else {$this->result .= "{$v5db8dca30c2d7f0c2bc225ae852c5053}\"{$vde0366a04f7345d0b277b28f9e86f357}\": ";$this->chooseTranslator($v2063c1608d6e0baf80249c42e2be5804, $v518d8dec3947df909fe6e4c9940f98a6 == 'full' || getRequest('viewMode') == 'full');$this->result .= "{$v7694f4a66316e53c8cdd9d9954bd611d}";}}}}}protected function cleanupArray(array $vf1f713c9e000f5d3f280adbd124df4f5) {$result = [];foreach ($vf1f713c9e000f5d3f280adbd124df4f5 as $v3c6e0b8a9c15224a8228b9a98ca1531d => $v2063c1608d6e0baf80249c42e2be5804) {$result[$this->getRealKey($v3c6e0b8a9c15224a8228b9a98ca1531d)] = is_array($v2063c1608d6e0baf80249c42e2be5804) ? $this->cleanupArray($v2063c1608d6e0baf80249c42e2be5804) : $v2063c1608d6e0baf80249c42e2be5804;}return $result;}protected function translateBasic($v8d777f385d3dfec8815d20f7496026dc) {if (!is_string($v8d777f385d3dfec8815d20f7496026dc) && is_numeric($v8d777f385d3dfec8815d20f7496026dc)) {$this->result .= (float) $v8d777f385d3dfec8815d20f7496026dc;}else {if (function_exists('json_encode')) {$this->result .= json_encode($v8d777f385d3dfec8815d20f7496026dc);}else {$v4717d53ebfdfea8477f780ec66151dcb = ConnectionPool::getInstance()->getConnection();$this->result .= '"' . str_replace("'", "\'", $v4717d53ebfdfea8477f780ec66151dcb->escape($v8d777f385d3dfec8815d20f7496026dc)) . '"';}}}public function getRealKey($v3c6e0b8a9c15224a8228b9a98ca1531d) {$v8b04d5e3775d298e78455efc5ca404d5 = mb_substr($v3c6e0b8a9c15224a8228b9a98ca1531d, 0, 1);if (isset(self::$shortKeys[$v8b04d5e3775d298e78455efc5ca404d5])) {return mb_substr($v3c6e0b8a9c15224a8228b9a98ca1531d, 1);}$v5e0bdcbddccca4d66d74ba8c1cee1a68 = mb_strpos($v3c6e0b8a9c15224a8228b9a98ca1531d, ':');if ($v5e0bdcbddccca4d66d74ba8c1cee1a68) {++$v5e0bdcbddccca4d66d74ba8c1cee1a68;}else {$v5e0bdcbddccca4d66d74ba8c1cee1a68 = 0;}return mb_substr($v3c6e0b8a9c15224a8228b9a98ca1531d, $v5e0bdcbddccca4d66d74ba8c1cee1a68);}public function getSubKey($v3c6e0b8a9c15224a8228b9a98ca1531d) {$v8b04d5e3775d298e78455efc5ca404d5 = mb_substr($v3c6e0b8a9c15224a8228b9a98ca1531d, 0, 1);if (isset(self::$shortKeys[$v8b04d5e3775d298e78455efc5ca404d5])) {return self::$shortKeys[$v8b04d5e3775d298e78455efc5ca404d5];}$v5e0bdcbddccca4d66d74ba8c1cee1a68 = mb_strpos($v3c6e0b8a9c15224a8228b9a98ca1531d, ':');if ($v5e0bdcbddccca4d66d74ba8c1cee1a68) {return mb_substr($v3c6e0b8a9c15224a8228b9a98ca1531d, 0, $v5e0bdcbddccca4d66d74ba8c1cee1a68);}return false;}}