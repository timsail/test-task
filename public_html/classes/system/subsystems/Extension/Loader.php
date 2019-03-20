<?php
 namespace UmiCms\System\Extension;use UmiCms\Classes\System\Entities\Directory\iFactory as DirectoryFactory;use UmiCms\Classes\System\Entities\File\iFactory as FileFactory;class Loader implements iLoader {private $directoryFactory;private $fileFactory;private $module;public function __construct(DirectoryFactory $vb7a82c37d8c13db7202ec4890aa47a7d, FileFactory $ve9d2ea3c13cc8f3b974ffbe8695cba02) {$this->directoryFactory = $vb7a82c37d8c13db7202ec4890aa47a7d;$this->fileFactory = $ve9d2ea3c13cc8f3b974ffbe8695cba02;}public function setModule(\def_module $v22884db148f0ffb0d830ba431102b0b5) {$this->module = $v22884db148f0ffb0d830ba431102b0b5;return $this;}public function loadCommon() {$v5f8f22b8cdbaeee8cf857673a9b6ba20 = $this->getDirectory();if (!$v5f8f22b8cdbaeee8cf857673a9b6ba20->isExists()) {return $this;}$this->includeList($v5f8f22b8cdbaeee8cf857673a9b6ba20, 'includes_*.php');$this->implementList($v5f8f22b8cdbaeee8cf857673a9b6ba20, 'common_*.php');return $this;}public function loadAdmin() {$v5f8f22b8cdbaeee8cf857673a9b6ba20 = $this->getDirectory();if (!$v5f8f22b8cdbaeee8cf857673a9b6ba20->isExists()) {return $this;}$this->implementList($v5f8f22b8cdbaeee8cf857673a9b6ba20, 'admin_*.php');return $this;}public function loadSite() {$v5f8f22b8cdbaeee8cf857673a9b6ba20 = $this->getDirectory();if (!$v5f8f22b8cdbaeee8cf857673a9b6ba20->isExists()) {return $this;}$this->implementList($v5f8f22b8cdbaeee8cf857673a9b6ba20, 'site_*.php');$this->implementList($v5f8f22b8cdbaeee8cf857673a9b6ba20, '__events_*.php');return $this;}private function getDirectory() {$vd6fe1d0be6347b8ef2427fa629c04485 = sprintf('%s%s/ext/', SYS_MODULES_PATH, get_class($this->getModule()));return $this->getDirectoryFactory()    ->create($vd6fe1d0be6347b8ef2427fa629c04485);}private function implementList(\iUmiDirectory $v5f8f22b8cdbaeee8cf857673a9b6ba20, $v240bf022e685b0ee30ad9fe9e1fb5d5b) {$ve9d2ea3c13cc8f3b974ffbe8695cba02 = $this->getFileFactory();$v22884db148f0ffb0d830ba431102b0b5 = $this->getModule();foreach ($v5f8f22b8cdbaeee8cf857673a9b6ba20->getList($v240bf022e685b0ee30ad9fe9e1fb5d5b) as $v47826cacc65c665212b821e6ff80b9b0) {$v8c7dd922ad47494fc02c388e12c00eac = $ve9d2ea3c13cc8f3b974ffbe8695cba02->create($v47826cacc65c665212b821e6ff80b9b0);$v5b063e275d506f65ebf1b02d926f19a4 = $v8c7dd922ad47494fc02c388e12c00eac->getFileName();$v6f66e878c62db60568a3487869695820 = str_replace('.php', '', $v5b063e275d506f65ebf1b02d926f19a4);$v22884db148f0ffb0d830ba431102b0b5->__loadLib($v5b063e275d506f65ebf1b02d926f19a4, $v5f8f22b8cdbaeee8cf857673a9b6ba20->getPath() . '/');$v22884db148f0ffb0d830ba431102b0b5->__implement($v6f66e878c62db60568a3487869695820, true);}}private function includeList(\iUmiDirectory $v5f8f22b8cdbaeee8cf857673a9b6ba20, $v240bf022e685b0ee30ad9fe9e1fb5d5b) {foreach ($v5f8f22b8cdbaeee8cf857673a9b6ba20->getList($v240bf022e685b0ee30ad9fe9e1fb5d5b) as $v47826cacc65c665212b821e6ff80b9b0) {require_once $v47826cacc65c665212b821e6ff80b9b0;}}private function getModule() {if (!$this->module instanceof \def_module) {throw new \DependencyNotInjectedException('You should inject module first!');}return $this->module;}private function getDirectoryFactory() {return $this->directoryFactory;}private function getFileFactory() {return $this->fileFactory;}}