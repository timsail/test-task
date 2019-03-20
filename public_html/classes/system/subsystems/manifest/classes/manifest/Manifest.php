<?php
 use UmiCms\Service;class Manifest implements iManifest, iStateFileWorker {use tStateFileWorker;use tReadinessWorker;protected $config;protected $callback;protected $transactionList = [];protected $params = [];protected $source;public function __construct(iBaseXmlConfig $v2245023265ae4cf87d02c8b6ba991139, iManifestSource $v36cd38f49b9afa08222c0dc9ebfe35eb, array $v21ffce5b8a6cc8cc6a41448dd69623c9 = []) {$this->config = $v2245023265ae4cf87d02c8b6ba991139;$this->source = $v36cd38f49b9afa08222c0dc9ebfe35eb;$this->params = $v21ffce5b8a6cc8cc6a41448dd69623c9;}public function setCallback(iAtomicOperationCallback $v924a8ceeac17f54d3be3f8cdf1c04eb2) {$this->callback = $v924a8ceeac17f54d3be3f8cdf1c04eb2;}public function execute() {$this->getCallback()->onBeforeExecute($this);$vb3bd7ee1d18d0e6663190bec01278879 = $this->getReadyList();foreach ($this->transactionList as $vf4d5b76a2418eba4baeabc1ed9142b54) {if (in_array($vf4d5b76a2418eba4baeabc1ed9142b54->getName(), $vb3bd7ee1d18d0e6663190bec01278879)) {continue;}try {$this->executeTransaction($vf4d5b76a2418eba4baeabc1ed9142b54);}catch (Exception $v42552b1f133f9f8eb406d4f306ea9fd1) {$this->getCallback()->onException($this, $v42552b1f133f9f8eb406d4f306ea9fd1);$this->rollback();throw $v42552b1f133f9f8eb406d4f306ea9fd1;}if ($vf4d5b76a2418eba4baeabc1ed9142b54->isReady()) {$vb3bd7ee1d18d0e6663190bec01278879[] = $vf4d5b76a2418eba4baeabc1ed9142b54->getName();}}$this->setReadyList($vb3bd7ee1d18d0e6663190bec01278879);if (umiCount($this->getReadyList()) == umiCount($this->transactionList)) {$this->setIsReady();$this->resetState();}$this->saveState();$this->getCallback()->onAfterExecute($this);return $this;}public function rollback() {$this->getCallback()->onBeforeRollback($this);$vecd8c7636815f81e0ffed9cc6c0941c0 = array_reverse($this->getReadyList());foreach ($vecd8c7636815f81e0ffed9cc6c0941c0 as $vc995ed7d342223eb83a2f308c1937fb4) {try {$vf4d5b76a2418eba4baeabc1ed9142b54 = $this->transactionList[$vc995ed7d342223eb83a2f308c1937fb4];$vf4d5b76a2418eba4baeabc1ed9142b54->rollback();}catch (Exception $v42552b1f133f9f8eb406d4f306ea9fd1) {$this->getCallback()->onException($this, $v42552b1f133f9f8eb406d4f306ea9fd1);}}$this->resetState();$this->saveState();$this->getCallback()->onAfterRollback($this);}public function getName() {return $this->config->getName();}public function loadTransactions() {$vfdf2e6c701213343ba30117f278528dd = [    'name' => '@name'   ];$vc15b977dd99332ca8623fbdfb86827e8 = $this->config->getList('//transaction', $vfdf2e6c701213343ba30117f278528dd);$v1ce34e758c1b888ee2e310c7a8a3a89c = Service::TransactionFactory();foreach ($vc15b977dd99332ca8623fbdfb86827e8 as $vcaf9b6b99962bf5c2264824231d7a40c) {$vb068931cc450442b63f5b3d276ea4297 = $vcaf9b6b99962bf5c2264824231d7a40c['name'];$vf4d5b76a2418eba4baeabc1ed9142b54 = $v1ce34e758c1b888ee2e310c7a8a3a89c->create($vb068931cc450442b63f5b3d276ea4297);$vf4d5b76a2418eba4baeabc1ed9142b54->setCallback($this->getCallback());$this->loadActions($vf4d5b76a2418eba4baeabc1ed9142b54);$this->transactionList[$vf4d5b76a2418eba4baeabc1ed9142b54->getName()] = $vf4d5b76a2418eba4baeabc1ed9142b54;}}public function getLog() {return $this->getCallback()    ->getLog();}protected function getReadyList() {$vb3bd7ee1d18d0e6663190bec01278879 = $this->getStatePart('ready');return is_array($vb3bd7ee1d18d0e6663190bec01278879) ? $vb3bd7ee1d18d0e6663190bec01278879 : [];}protected function setReadyList(array $vb3bd7ee1d18d0e6663190bec01278879) {return $this->setStatePart('ready', $vb3bd7ee1d18d0e6663190bec01278879);}protected function getParams() {return $this->params;}protected function executeTransaction(iTransaction $vf4d5b76a2418eba4baeabc1ed9142b54) {try {$this->getCallback()->onBeforeExecute($vf4d5b76a2418eba4baeabc1ed9142b54);$vf4d5b76a2418eba4baeabc1ed9142b54->execute();$this->getCallback()->onAfterExecute($vf4d5b76a2418eba4baeabc1ed9142b54);}catch (Exception $v42552b1f133f9f8eb406d4f306ea9fd1) {$this->getCallback()->onException($vf4d5b76a2418eba4baeabc1ed9142b54, $v42552b1f133f9f8eb406d4f306ea9fd1);$vf4d5b76a2418eba4baeabc1ed9142b54->rollback();throw $v42552b1f133f9f8eb406d4f306ea9fd1;}}protected function loadActions(iTransaction $vf4d5b76a2418eba4baeabc1ed9142b54) {$vfdf2e6c701213343ba30117f278528dd = [    'name' => '@name',    'params' => '+params'   ];$vebb67a4271abe715344471b0f16321f6 = $this->config->getList(    "//transaction[@name = '{$vf4d5b76a2418eba4baeabc1ed9142b54->getName()}']/action",    $vfdf2e6c701213343ba30117f278528dd   );$v01d458458d7810205efb9e7f05cd1024 = Service::ActionFactory();$v9816255e6f35ca6ecc2814eb7eb6078f = $this->getParams();foreach ($vebb67a4271abe715344471b0f16321f6 as $v418c5509e2171d55b0aee5c2ea4442b5) {$vb068931cc450442b63f5b3d276ea4297 = $v418c5509e2171d55b0aee5c2ea4442b5['name'];$vdca898f4bfe7f3ec31bed06a9b4119eb = $v418c5509e2171d55b0aee5c2ea4442b5['params'];$vc17ae8efa1d4c532b644ff6eb4b11435 = $this->replacePlaceholders($vdca898f4bfe7f3ec31bed06a9b4119eb, $v9816255e6f35ca6ecc2814eb7eb6078f);try {$vdb612a27cc59da1a68696c606a9c5ab4 = $this->getSource()      ->getActionFilePath($vb068931cc450442b63f5b3d276ea4297);$v418c5509e2171d55b0aee5c2ea4442b5 = $v01d458458d7810205efb9e7f05cd1024->create($vb068931cc450442b63f5b3d276ea4297, $vc17ae8efa1d4c532b644ff6eb4b11435, $vdb612a27cc59da1a68696c606a9c5ab4);$v418c5509e2171d55b0aee5c2ea4442b5->setCallback($this->getCallback());$vf4d5b76a2418eba4baeabc1ed9142b54->addAction($v418c5509e2171d55b0aee5c2ea4442b5);}catch (Exception $ve1671797c52e15f763380b45e841ec32) {$this->getCallback()->onException($vf4d5b76a2418eba4baeabc1ed9142b54, $ve1671797c52e15f763380b45e841ec32);throw $ve1671797c52e15f763380b45e841ec32;}}}protected function replacePlaceholders(array $vdca898f4bfe7f3ec31bed06a9b4119eb, array $v993fcb1e163e40a45771f626d3ea0f0f) {$v21ffce5b8a6cc8cc6a41448dd69623c9 = [];foreach ($vdca898f4bfe7f3ec31bed06a9b4119eb as $v6a992d5529f459a44fee58c733255e86 => $v6a99c575ab87f8c7d1ed1e52e7e349ce) {foreach ($v993fcb1e163e40a45771f626d3ea0f0f as $vb068931cc450442b63f5b3d276ea4297 => $v2063c1608d6e0baf80249c42e2be5804) {$v6a99c575ab87f8c7d1ed1e52e7e349ce = str_replace('{' . $vb068931cc450442b63f5b3d276ea4297 . '}', $v2063c1608d6e0baf80249c42e2be5804, $v6a99c575ab87f8c7d1ed1e52e7e349ce);}$v2063c1608d6e0baf80249c42e2be5804 = json_decode($v6a99c575ab87f8c7d1ed1e52e7e349ce, true);if ($v2063c1608d6e0baf80249c42e2be5804 !== null) {$v21ffce5b8a6cc8cc6a41448dd69623c9[$v6a992d5529f459a44fee58c733255e86] = $v2063c1608d6e0baf80249c42e2be5804;continue;}$v21ffce5b8a6cc8cc6a41448dd69623c9[$v6a992d5529f459a44fee58c733255e86] = $this->replaceDateFormat($v6a99c575ab87f8c7d1ed1e52e7e349ce);}return $v21ffce5b8a6cc8cc6a41448dd69623c9;}protected function replaceDateFormat($va1cae1a6bcf90965e28ea7aa60cd708e) {$result = $va1cae1a6bcf90965e28ea7aa60cd708e;if (preg_match_all("/\{([^\}]+)\}/", $result, $vc68271a63ddbc431c307beb7d2918275)) {foreach ($vc68271a63ddbc431c307beb7d2918275[1] as $v240bf022e685b0ee30ad9fe9e1fb5d5b) {$result = str_replace('{' . $v240bf022e685b0ee30ad9fe9e1fb5d5b . '}', date($v240bf022e685b0ee30ad9fe9e1fb5d5b), $result);}}return $result;}protected function getCallback() {if (!$this->callback instanceof iAtomicOperationCallback) {throw new Exception('You should set iAtomicOperationCallback before use it');}return $this->callback;}protected function getSource() {return $this->source;}}