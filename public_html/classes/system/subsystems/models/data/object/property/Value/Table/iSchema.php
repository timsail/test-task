<?php
 namespace UmiCms\System\Data\Object\Property\Value\Table;interface iSchema {const IMAGES_TABLE_NAME = 'cms3_object_images';const COUNTER_TABLE_NAME = 'cms3_object_content_cnt';const DOMAIN_ID_TABLE_NAME = 'cms3_object_domain_id_list';const DEFAULT_TABLE_NAME = 'cms3_object_content';const OFFER_ID_TABLE_NAME = 'cms3_object_offer_id_list';public function getTable(\iUmiObjectProperty $v1a8db4c996d8ed8289da5f957879ab94);public function getTableByDataType($v870b60148237c1452dfb337fdd19c314);public function getTableList();public function getImagesTable();public function getCounterTable();public function getDomainIdTable();public function getOfferIdTable();public function getDefaultTable();}