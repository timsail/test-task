<?php
 abstract class umiEntinty implements iUmiEntinty {protected $id;protected $is_updated = false;protected $savingInDestructor;protected $store_type = 'entity';public function __construct($vb80bb7740288fda1f201890375a60c8f, $vf1965a857bc285d26fe22023aa5ab50d = false, $v8edb0ffce97546a0a77fa919df7f1b05 = true, $va8bd97d4992f85b7597e64fca3781ee1 = true) {$this->setId($vb80bb7740288fda1f201890375a60c8f)    ->setSavingInDestructor($va8bd97d4992f85b7597e64fca3781ee1);$this->is_updated = false;if ($v8edb0ffce97546a0a77fa919df7f1b05 && $this->loadInfo($vf1965a857bc285d26fe22023aa5ab50d) === false) {throw new privateException("Failed to load info for {$this->store_type} with id {$vb80bb7740288fda1f201890375a60c8f}");}}public function __clone() {throw new coreException('umiEntinty must not be cloned');}public function __destruct() {if (!$this->getSavingInDestructor()) {return;}$this->commit();}public function getId() {return $this->id;}protected function setId($vb80bb7740288fda1f201890375a60c8f) {$this->id = (int) $vb80bb7740288fda1f201890375a60c8f;return $this;}public function getIsUpdated() {return $this->is_updated;}public function setIsUpdated($v8de61324edc43f3acb1b73da3c63e89e = true) {$this->is_updated = (bool) $v8de61324edc43f3acb1b73da3c63e89e;}abstract protected function loadInfo($vf1965a857bc285d26fe22023aa5ab50d = false);abstract protected function save();public function commit() {if (!$this->getIsUpdated()) {return false;}$v9b207167e5381c47682c6b4f58a623fb = $this->save();$this->setIsUpdated(false);return $v9b207167e5381c47682c6b4f58a623fb;}public function update() {$v9b207167e5381c47682c6b4f58a623fb = $this->loadInfo();$this->setIsUpdated(false);return $v9b207167e5381c47682c6b4f58a623fb;}public static function filterInputString($vb45cffe084dd3d20d928bee85e7b0f21) {return ConnectionPool::getInstance()    ->getConnection()    ->escape($vb45cffe084dd3d20d928bee85e7b0f21);}public function __toString() {return (string) $this->getId();}public function getStoreType() {return $this->store_type;}public function translateLabel($vd304ba20e96d87411588eeabac850e34) {$v341be97d9aff90c9978347f66f945b77 = startsWith($vd304ba20e96d87411588eeabac850e34, 'i18n::') ? getLabel(mb_substr($vd304ba20e96d87411588eeabac850e34, 6)) : getLabel($vd304ba20e96d87411588eeabac850e34);return $v341be97d9aff90c9978347f66f945b77 === null ? $vd304ba20e96d87411588eeabac850e34 : $v341be97d9aff90c9978347f66f945b77;}public function setSavingInDestructor($v327a6c4304ad5938eaf0efb6cc3e53dc = true) {$this->savingInDestructor = $v327a6c4304ad5938eaf0efb6cc3e53dc;return $this;}protected function getSavingInDestructor() {return $this->savingInDestructor;}protected function translateI18n($v341be97d9aff90c9978347f66f945b77, $v240bf022e685b0ee30ad9fe9e1fb5d5b = '') {$vd304ba20e96d87411588eeabac850e34 = ulangStream::getI18n($v341be97d9aff90c9978347f66f945b77, $v240bf022e685b0ee30ad9fe9e1fb5d5b);return $vd304ba20e96d87411588eeabac850e34 === null ? $v341be97d9aff90c9978347f66f945b77 : $vd304ba20e96d87411588eeabac850e34;}public function beforeSerialize() {}public function afterSerialize() {}public function afterUnSerialize() {}}