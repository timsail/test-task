<?php
 namespace UmiCms\System\Cache\Browser\Engine;use UmiCms\System\Cache\Browser\iEngine;interface iFactory {const LAST_MODIFIED = 'LastModified';const ENTITY_TAG = 'EntityTag';const EXPIRES = 'Expires';const NONE = 'None';public function __construct(\iServiceContainer $v06d419f75cbecf6df5a44ea9471105ba);public function create($vb068931cc450442b63f5b3d276ea4297);}