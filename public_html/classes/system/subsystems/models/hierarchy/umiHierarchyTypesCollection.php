<?php
 class umiHierarchyTypesCollection extends singleton implements iSingleton, iUmiHierarchyTypesCollection {private $typeList = [];protected function __construct() {}public static function getInstance($v4a8a08f09d37b73795649038408b5f33 = null) {return parent::getInstance(__CLASS__);}public function getType($vb80bb7740288fda1f201890375a60c8f) {$v599dcce2998a6b40b1e38e8c6006cb0a = $this->getLoadedType($vb80bb7740288fda1f201890375a60c8f);if ($v599dcce2998a6b40b1e38e8c6006cb0a instanceof iUmiHierarchyType) {return $v599dcce2998a6b40b1e38e8c6006cb0a;}return false;}public function getTypeByName($vb068931cc450442b63f5b3d276ea4297, $vabf77184f55403d75b9d51d79162a7ca = false) {if ($vb068931cc450442b63f5b3d276ea4297 == 'content' and $vabf77184f55403d75b9d51d79162a7ca == 'page') {$vabf77184f55403d75b9d51d79162a7ca = false;}foreach ($this->getTypesList() as $v599dcce2998a6b40b1e38e8c6006cb0a) {if ($v599dcce2998a6b40b1e38e8c6006cb0a->getName() == $vb068931cc450442b63f5b3d276ea4297 && $vabf77184f55403d75b9d51d79162a7ca === false) {return $v599dcce2998a6b40b1e38e8c6006cb0a;}if ($v599dcce2998a6b40b1e38e8c6006cb0a->getName() == $vb068931cc450442b63f5b3d276ea4297 && $v599dcce2998a6b40b1e38e8c6006cb0a->getExt() == $vabf77184f55403d75b9d51d79162a7ca && $vabf77184f55403d75b9d51d79162a7ca !== false) {return $v599dcce2998a6b40b1e38e8c6006cb0a;}}return false;}public function getTypesByModules($v0eb9b3af2e4a00837a1b1a854c9ea18c) {$v0eb9b3af2e4a00837a1b1a854c9ea18c = (array) $v0eb9b3af2e4a00837a1b1a854c9ea18c;return array_filter(    $this->getTypesList(),    function ($v599dcce2998a6b40b1e38e8c6006cb0a) use ($v0eb9b3af2e4a00837a1b1a854c9ea18c) {return in_array($v599dcce2998a6b40b1e38e8c6006cb0a->getName(), $v0eb9b3af2e4a00837a1b1a854c9ea18c);});}public function addType($vb068931cc450442b63f5b3d276ea4297, $vd5d3db1765287eef77d7927cc956f50a, $vabf77184f55403d75b9d51d79162a7ca = '') {$v599dcce2998a6b40b1e38e8c6006cb0a = $this->getTypeByName($vb068931cc450442b63f5b3d276ea4297, $vabf77184f55403d75b9d51d79162a7ca);if ($v599dcce2998a6b40b1e38e8c6006cb0a instanceof iUmiHierarchyType) {$v599dcce2998a6b40b1e38e8c6006cb0a->setTitle($vd5d3db1765287eef77d7927cc956f50a);return $v599dcce2998a6b40b1e38e8c6006cb0a->getId();}$v4717d53ebfdfea8477f780ec66151dcb = ConnectionPool::getInstance()->getConnection();$v32409b63878fa9d5541998646b533159 = $v4717d53ebfdfea8477f780ec66151dcb->escape($vb068931cc450442b63f5b3d276ea4297);$vac5c74b64b4b8352ef2f181affb5ac2a = "INSERT INTO cms3_hierarchy_types (name) VALUES('{$v32409b63878fa9d5541998646b533159}')";$v4717d53ebfdfea8477f780ec66151dcb->query($vac5c74b64b4b8352ef2f181affb5ac2a);$v5f694956811487225d15e973ca38fbab = $v4717d53ebfdfea8477f780ec66151dcb->insertId();$v599dcce2998a6b40b1e38e8c6006cb0a = new umiHierarchyType($v5f694956811487225d15e973ca38fbab);$v599dcce2998a6b40b1e38e8c6006cb0a->setName($vb068931cc450442b63f5b3d276ea4297);$v599dcce2998a6b40b1e38e8c6006cb0a->setTitle($vd5d3db1765287eef77d7927cc956f50a);$v599dcce2998a6b40b1e38e8c6006cb0a->setExt($vabf77184f55403d75b9d51d79162a7ca);$v599dcce2998a6b40b1e38e8c6006cb0a->commit();$this->setLoadedType($v599dcce2998a6b40b1e38e8c6006cb0a);return $v5f694956811487225d15e973ca38fbab;}public function delType($vb80bb7740288fda1f201890375a60c8f) {if (!$this->isExists($vb80bb7740288fda1f201890375a60c8f)) {return false;}$this->unsetLoadedType($vb80bb7740288fda1f201890375a60c8f);$vb80bb7740288fda1f201890375a60c8f = (int) $vb80bb7740288fda1f201890375a60c8f;$vac5c74b64b4b8352ef2f181affb5ac2a = "DELETE FROM cms3_hierarchy_types WHERE id = $vb80bb7740288fda1f201890375a60c8f";ConnectionPool::getInstance()    ->getConnection()    ->query($vac5c74b64b4b8352ef2f181affb5ac2a);return true;}public function isExists($vb80bb7740288fda1f201890375a60c8f) {if (!is_string($vb80bb7740288fda1f201890375a60c8f) && !is_int($vb80bb7740288fda1f201890375a60c8f)) {return false;}return array_key_exists($vb80bb7740288fda1f201890375a60c8f, $this->getTypesList());}public function getTypesList() {if (empty($this->typeList)) {$this->loadTypeList();}return $this->typeList;}public function clearCache() {$this->typeList = [];$this->loadTypeList();}private function loadTypeList() {$vac5c74b64b4b8352ef2f181affb5ac2a = 'SELECT  `id`, `name`, `title`, `ext` FROM `cms3_hierarchy_types` ORDER BY `name`, `ext`';$result = ConnectionPool::getInstance()    ->getConnection()    ->queryResult($vac5c74b64b4b8352ef2f181affb5ac2a);$result->setFetchType(IQueryResult::FETCH_ROW);foreach ($result as $vf1965a857bc285d26fe22023aa5ab50d) {$vb80bb7740288fda1f201890375a60c8f = $vf1965a857bc285d26fe22023aa5ab50d[0];try {$v599dcce2998a6b40b1e38e8c6006cb0a = new umiHierarchyType($vb80bb7740288fda1f201890375a60c8f, $vf1965a857bc285d26fe22023aa5ab50d);}catch (privateException $ve1671797c52e15f763380b45e841ec32) {$ve1671797c52e15f763380b45e841ec32->unregister();continue;}$this->setLoadedType($v599dcce2998a6b40b1e38e8c6006cb0a);}return true;}private function unsetLoadedType($vb80bb7740288fda1f201890375a60c8f) {unset($this->typeList[$vb80bb7740288fda1f201890375a60c8f]);return $this;}private function setLoadedType(iUmiHierarchyType $v599dcce2998a6b40b1e38e8c6006cb0a) {$this->typeList[$v599dcce2998a6b40b1e38e8c6006cb0a->getId()] = $v599dcce2998a6b40b1e38e8c6006cb0a;return $this;}private function getLoadedType($vb80bb7740288fda1f201890375a60c8f) {if ($this->isExists($vb80bb7740288fda1f201890375a60c8f)) {return $this->typeList[$vb80bb7740288fda1f201890375a60c8f];}return null;}}