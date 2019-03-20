<?php
 use UmiCms\Service;use UmiCms\System\MailTemplates\Parser;class MailTemplate implements  iUmiCollectionItem,  iUmiDataBaseInjector,  iUmiConstantMapInjector,  iClassConfigManager {use tUmiDataBaseInjector;use tCommonCollectionItem;use tUmiConstantMapInjector;use tClassConfigManager;private $notificationId;private $name;private $type;private $content;private static $classConfig = [   'fields' => [    [     'name' => 'ID_FIELD_NAME',     'required' => true,     'unchangeable' => true,     'setter' => 'setId',     'getter' => 'getId'    ],    [     'name' => 'NOTIFICATION_ID_FIELD_NAME',     'required' => true,     'setter' => 'setNotificationId',     'getter' => 'getNotificationId'    ],    [     'name' => 'NAME_FIELD_NAME',     'required' => true,     'setter' => 'setName',     'getter' => 'getName'    ],    [     'name' => 'TYPE_FIELD_NAME',     'required' => true,     'setter' => 'setType',     'getter' => 'getType'    ],    [     'name' => 'CONTENT_FIELD_NAME',     'required' => true,     'setter' => 'setContent',     'getter' => 'getContent'    ],   ]  ];public function getNotificationId() {return $this->notificationId;}public function setNotificationId($vb80bb7740288fda1f201890375a60c8f) {$this->setDifferentValue('notificationId', $vb80bb7740288fda1f201890375a60c8f, 'int');}public function getName() {return $this->name;}public function setName($vb068931cc450442b63f5b3d276ea4297) {$this->setDifferentValue('name', $vb068931cc450442b63f5b3d276ea4297, 'string');}public function getType() {return $this->type;}public function setType($v599dcce2998a6b40b1e38e8c6006cb0a) {$this->setDifferentValue('type', $v599dcce2998a6b40b1e38e8c6006cb0a, 'string');}public function getContent() {return $this->content;}public function setContent($v9a0364b9e99bb480dd25e1f0284c8555) {$this->setDifferentValue('content', $v9a0364b9e99bb480dd25e1f0284c8555, 'string');}public function getModule() {return $this->getNotification()->getModule();}public function getNotification() {$va03acd8943baebf6a00aeb6792340e18 = Service::MailNotifications();$v1d78dc8ed51214e518b5114fe24490ae = $va03acd8943baebf6a00aeb6792340e18->getMap();$result = $va03acd8943baebf6a00aeb6792340e18->get([    $v1d78dc8ed51214e518b5114fe24490ae->get('ID_FIELD_NAME') => $this->getNotificationId()   ]);if (umiCount($result) > 0) {return array_shift($result);}return false;}public function addVariable($ve04aa5104d082e4a51d241391941ba26) {if ($this->isVariableExist($ve04aa5104d082e4a51d241391941ba26)) {return false;}return $this->getMailVariablesCollection()    ->createVariable($ve04aa5104d082e4a51d241391941ba26, $this->getId());}public function deleteVariable($ve04aa5104d082e4a51d241391941ba26) {return $this->getMailVariablesCollection()    ->deleteVariable($ve04aa5104d082e4a51d241391941ba26, $this->getId());}public function getVariableList() {$v18ae806f7fea1b4f5669cb187f55b469 = $this->getMailVariablesCollection()    ->getByTemplateId($this->getId());$vb35eb796625a2e9a77dc3f4837a62c6a = [];foreach ($v18ae806f7fea1b4f5669cb187f55b469 as $ve04aa5104d082e4a51d241391941ba26) {$vb35eb796625a2e9a77dc3f4837a62c6a[] = $ve04aa5104d082e4a51d241391941ba26->getName();}return $vb35eb796625a2e9a77dc3f4837a62c6a;}public function commit() {if (!$this->isUpdated()) {return false;}$v1d78dc8ed51214e518b5114fe24490ae = $this->getMap();$v4717d53ebfdfea8477f780ec66151dcb = $this->getConnection();$v80071f37861c360a27b7327e132c911a = $v4717d53ebfdfea8477f780ec66151dcb->escape($v1d78dc8ed51214e518b5114fe24490ae->get('TABLE_NAME'));$vbb1df230a5150b8ac17121321b3b514c = $v4717d53ebfdfea8477f780ec66151dcb->escape($v1d78dc8ed51214e518b5114fe24490ae->get('ID_FIELD_NAME'));$v4a7c4f6ee82fce4661351b7b688db9c4 = $v4717d53ebfdfea8477f780ec66151dcb->escape($v1d78dc8ed51214e518b5114fe24490ae->get('NOTIFICATION_ID_FIELD_NAME'));$v83ea2c7be983b2f78a3ee8cfa6556bbc = $v4717d53ebfdfea8477f780ec66151dcb->escape($v1d78dc8ed51214e518b5114fe24490ae->get('NAME_FIELD_NAME'));$vce6ba6b4afd61be6d0f21f1e2a995213 = $v4717d53ebfdfea8477f780ec66151dcb->escape($v1d78dc8ed51214e518b5114fe24490ae->get('TYPE_FIELD_NAME'));$v5180805afcdc53d067cf7c6b96c68c9d = $v4717d53ebfdfea8477f780ec66151dcb->escape($v1d78dc8ed51214e518b5114fe24490ae->get('CONTENT_FIELD_NAME'));$vb80bb7740288fda1f201890375a60c8f = $this->getId();$v76690295a4352fcca9cc1524cad83d1b = $v4717d53ebfdfea8477f780ec66151dcb->escape($this->getNotificationId());$v599dcce2998a6b40b1e38e8c6006cb0a = $v4717d53ebfdfea8477f780ec66151dcb->escape($this->getType());$vb068931cc450442b63f5b3d276ea4297 = $v4717d53ebfdfea8477f780ec66151dcb->escape($this->getName());$v9a0364b9e99bb480dd25e1f0284c8555 = $v4717d53ebfdfea8477f780ec66151dcb->escape($this->getContent());$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
UPDATE `$v80071f37861c360a27b7327e132c911a`
	SET `$v4a7c4f6ee82fce4661351b7b688db9c4` = '$v76690295a4352fcca9cc1524cad83d1b', `$v83ea2c7be983b2f78a3ee8cfa6556bbc` = '$vb068931cc450442b63f5b3d276ea4297', 
		`$vce6ba6b4afd61be6d0f21f1e2a995213` = '$v599dcce2998a6b40b1e38e8c6006cb0a', `$v5180805afcdc53d067cf7c6b96c68c9d` = '$v9a0364b9e99bb480dd25e1f0284c8555'
		WHERE `$vbb1df230a5150b8ac17121321b3b514c` = $vb80bb7740288fda1f201890375a60c8f;
SQL;   $v4717d53ebfdfea8477f780ec66151dcb->query($vac5c74b64b4b8352ef2f181affb5ac2a);return true;}public function getVariableForRelatedTypeList() {return [    'umi-customer' => [     'users-user', 'emarket-customer'    ]   ];}public function parse(array $v21ffce5b8a6cc8cc6a41448dd69623c9 = [], array $v7beef54c8a75efe23880c9c3bfaf46d7 = []) {return (new Parser($this))->parse($v21ffce5b8a6cc8cc6a41448dd69623c9, $v7beef54c8a75efe23880c9c3bfaf46d7);}private function getMailVariablesCollection() {return Service::MailVariables();}private function isVariableExist($ve04aa5104d082e4a51d241391941ba26) {return in_array($ve04aa5104d082e4a51d241391941ba26, $this->getVariableList());}public function getProcessedContent(array $v21ffce5b8a6cc8cc6a41448dd69623c9 = []) {return $this->parse($v21ffce5b8a6cc8cc6a41448dd69623c9);}}