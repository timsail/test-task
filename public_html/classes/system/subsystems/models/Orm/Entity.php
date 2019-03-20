<?php
 namespace UmiCms\System\Orm;abstract class Entity implements iEntity {private $id;private $isUpdated = false;public function getId() {return $this->id;}public function setId($vb80bb7740288fda1f201890375a60c8f) {if (!is_int($vb80bb7740288fda1f201890375a60c8f) || $vb80bb7740288fda1f201890375a60c8f <= 0) {throw new \ErrorException('Incorrect entity id given');}return $this->setDifferentValue('id', $vb80bb7740288fda1f201890375a60c8f);}public function hasId() {return $this->getId() !== null;}public function isUpdated() {return $this->isUpdated;}public function setUpdated($v327a6c4304ad5938eaf0efb6cc3e53dc = true) {if (!is_bool($v327a6c4304ad5938eaf0efb6cc3e53dc)) {throw new \ErrorException('Incorrect entity update status given');}$this->isUpdated = $v327a6c4304ad5938eaf0efb6cc3e53dc;return $this;}protected function setDifferentValue($v1a8db4c996d8ed8289da5f957879ab94, $v2063c1608d6e0baf80249c42e2be5804) {if ($this->$v1a8db4c996d8ed8289da5f957879ab94 !== $v2063c1608d6e0baf80249c42e2be5804) {$this->$v1a8db4c996d8ed8289da5f957879ab94 = $v2063c1608d6e0baf80249c42e2be5804;$this->setUpdated();}return $this;}}