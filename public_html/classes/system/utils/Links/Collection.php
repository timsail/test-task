<?php
 namespace UmiCms\Classes\System\Utils\Links;class Collection implements  iCollection,  \iUmiDataBaseInjector,  \iUmiService,  \iUmiConstantMapInjector,  \iClassConfigManager {use \tUmiDataBaseInjector;use \tUmiService;use \tCommonCollection;use \tUmiConstantMapInjector;use \tClassConfigManager;private $collectionItemClass = 'UmiCms\Classes\System\Utils\Links\Entity';private static $classConfig = [   'service' => 'Links',   'fields' => [    [     'name' => 'ID_FIELD_NAME',     'type' => 'INTEGER_FIELD_TYPE',     'used-in-creation' => false,    ],    [     'name' => 'ADDRESS_FIELD_NAME',     'type' => 'STRING_FIELD_TYPE',     'required' => true,    ],    [     'name' => 'ADDRESS_HASH_FIELD_NAME',     'type' => 'STRING_FIELD_TYPE',     'required' => true,    ],    [     'name' => 'PLACE_FIELD_NAME',     'type' => 'STRING_FIELD_TYPE',     'required' => true,    ],    [     'name' => 'BROKEN_FIELD_NAME',     'type' => 'INTEGER_FIELD_TYPE',     'required' => false,    ]   ]  ];public function getCollectionItemClass() {return $this->collectionItemClass;}public function getTableName() {return $this->getMap()->get('TABLE_NAME');}public function createByAddressAndPlace($v884d9804999fc47a3c2694e49ad2536a, $vebed715e82a0a0f3e950ef6565cdc4a8) {if (!is_string($v884d9804999fc47a3c2694e49ad2536a)) {throw new \wrongParamException('Wrong value for address given');}if (!is_string($vebed715e82a0a0f3e950ef6565cdc4a8)) {throw new \wrongParamException('Wrong value for place given');}$vf8f04d92e325e16edbc1e588f7e2b1df = $this->getMap();$vb5ffe8173b212427b5e0913bf0948ac2 = [    $vf8f04d92e325e16edbc1e588f7e2b1df->get('ADDRESS_FIELD_NAME') => $v884d9804999fc47a3c2694e49ad2536a,    $vf8f04d92e325e16edbc1e588f7e2b1df->get('ADDRESS_HASH_FIELD_NAME') => $this->hashAddress($v884d9804999fc47a3c2694e49ad2536a),    $vf8f04d92e325e16edbc1e588f7e2b1df->get('PLACE_FIELD_NAME') => $vebed715e82a0a0f3e950ef6565cdc4a8,    $vf8f04d92e325e16edbc1e588f7e2b1df->get('BROKEN_FIELD_NAME') => false,   ];return $this->create($vb5ffe8173b212427b5e0913bf0948ac2);}public function getByAddress($v884d9804999fc47a3c2694e49ad2536a) {if (!is_string($v884d9804999fc47a3c2694e49ad2536a)) {throw new \wrongParamException('Wrong value for address given');}return $this->getBy(    $this->getMap()->get('ADDRESS_HASH_FIELD_NAME'),    $this->hashAddress($v884d9804999fc47a3c2694e49ad2536a)   );}public function exportBrokenLinks($v7a86c157ee9713c34fbd7a1ee40f0c5a = 0, $vaa9f73eea60a006820d0f8768bc8a3fc = self::DEFAULT_RESULT_ITEMS_LIMIT) {$vf8f04d92e325e16edbc1e588f7e2b1df = $this->getMap();$vf7cc8e4882789cf3335d9ed97f208c6f = [    $vf8f04d92e325e16edbc1e588f7e2b1df->get('BROKEN_FIELD_NAME') => true,    $vf8f04d92e325e16edbc1e588f7e2b1df->get('OFFSET_KEY') => (int) $v7a86c157ee9713c34fbd7a1ee40f0c5a,    $vf8f04d92e325e16edbc1e588f7e2b1df->get('LIMIT_KEY') => (int) $vaa9f73eea60a006820d0f8768bc8a3fc   ];return $this->export($vf7cc8e4882789cf3335d9ed97f208c6f);}public function countBrokenLinks() {$vf8f04d92e325e16edbc1e588f7e2b1df = $this->getMap();$vf7cc8e4882789cf3335d9ed97f208c6f = [    $vf8f04d92e325e16edbc1e588f7e2b1df->get('BROKEN_FIELD_NAME') => true,    $vf8f04d92e325e16edbc1e588f7e2b1df->get('CALCULATE_ONLY_KEY') => true,   ];return $this->count($vf7cc8e4882789cf3335d9ed97f208c6f);}public function getCorrectLinks($v7a86c157ee9713c34fbd7a1ee40f0c5a = 0, $vaa9f73eea60a006820d0f8768bc8a3fc = self::DEFAULT_RESULT_ITEMS_LIMIT) {$vf8f04d92e325e16edbc1e588f7e2b1df = $this->getMap();$v21ffce5b8a6cc8cc6a41448dd69623c9 = [    $vf8f04d92e325e16edbc1e588f7e2b1df->get('BROKEN_FIELD_NAME') => false,    $vf8f04d92e325e16edbc1e588f7e2b1df->get('OFFSET_KEY') => (int) $v7a86c157ee9713c34fbd7a1ee40f0c5a,    $vf8f04d92e325e16edbc1e588f7e2b1df->get('LIMIT_KEY') => (int) $vaa9f73eea60a006820d0f8768bc8a3fc   ];return $this->get($v21ffce5b8a6cc8cc6a41448dd69623c9);}private function hashAddress($v884d9804999fc47a3c2694e49ad2536a) {return md5($v884d9804999fc47a3c2694e49ad2536a);}}