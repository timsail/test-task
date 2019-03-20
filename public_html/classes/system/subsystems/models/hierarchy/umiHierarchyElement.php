<?php
 use UmiCms\Service;class umiHierarchyElement extends umiEntinty implements iUmiHierarchyElement {const INSTANCE_ATTRIBUTE_COUNT = 21;private $rel;private $alt_name;private $ord;private $object_id;private $type_id;private $domain_id;private $lang_id;private $tpl_id;private $is_deleted = false;private $is_active = true;private $is_visible = true;private $is_default = false;private $update_time;private $fields;protected $store_type = 'element';public function getIsDeleted() {return $this->is_deleted;}public function getIsActive() {return $this->is_active;}public function getIsVisible() {return $this->is_visible;}public function getLangId() {return $this->lang_id;}public function getDomainId() {return $this->domain_id;}public function getTplId() {return $this->tpl_id;}public function getTypeId() {return $this->type_id;}public function getUpdateTime() {return $this->update_time;}public function getOrd() {return $this->ord;}public function getAltName() {return $this->alt_name;}public function getIsDefault() {return $this->is_default;}public function hasVirtualCopy() {$v16b2b26000987faccb260b9d39df1269 = (int) $this->getObjectId();$v1b1cc7f086b3f074da452bc3129981eb = <<<SQL
SELECT `id` FROM `cms3_hierarchy` WHERE `obj_id` = $v16b2b26000987faccb260b9d39df1269 LIMIT 0, 2
SQL;
SELECT `id` FROM `cms3_hierarchy` WHERE `obj_id` = $v16b2b26000987faccb260b9d39df1269 LIMIT 0, 1
SQL;
SELECT
	h.rel,
	h.type_id,
	h.lang_id,
	h.domain_id,
	h.tpl_id,
	h.obj_id,
	h.ord,
	h.alt_name,
	h.is_active,
	h.is_visible,
	h.is_deleted,
	h.updatetime,
	h.is_default,
	o.name,
	o.type_id,
	o.is_locked,
	o.owner_id,
	o.guid,
	t.guid,
	o.updatetime,
	o.ord
FROM cms3_hierarchy h, cms3_objects o, cms3_object_types t
WHERE 
	h.id = $v817f7de13f58df29b13a9570082097da 
	AND o.id = h.obj_id
	AND o.type_id = t.id
LIMIT 0,1
SQL;
UPDATE
	`cms3_hierarchy`
SET
	`is_default` = '0'
WHERE
	`is_default` = '1'
AND
	`lang_id` = $v694b5b6b5536d28285396c8ce7c268bc
AND
	`domain_id` = $v72ee76c5c29383b7c9f9225c1fa4d10b
SQL;
UPDATE
	`cms3_hierarchy`
SET
	`rel` = $vbfa030fe63bacd523dd70a76cfaed98a, `type_id` = $v5f694956811487225d15e973ca38fbab, `lang_id` = $v694b5b6b5536d28285396c8ce7c268bc, `domain_id` = $v72ee76c5c29383b7c9f9225c1fa4d10b,
	`tpl_id` = $v3200a31fc05da4e9d5a0465c36822e2f, `obj_id` = $v16b2b26000987faccb260b9d39df1269, `ord` = $v8bef1cc20ada3bef55fdf132cb2a1cb9, `alt_name` = '$v0330da281541887f65b0a60066351c91',
	`is_active` = $v367e854225a0810977297b3bedb2f309, `is_visible` = $v19fad0416b4b101ab72faccf4c323024, `is_deleted` = $va18b1057c4327b9cc46abc9fcf952bd8,
	`updatetime` = $v5fa40b2485d1096a170d2d7ecd0f7030, `is_default` = $ve558e63f3083922542d8745224a66eea
WHERE
	`id` = $va6eb4816205178e88dad66a16a19ff45
SQL;