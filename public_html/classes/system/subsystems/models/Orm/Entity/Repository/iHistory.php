<?php
 namespace UmiCms\System\Orm\Entity\Repository;interface iHistory {public function logCreate($vb80bb7740288fda1f201890375a60c8f);public function logUpdate($vb80bb7740288fda1f201890375a60c8f);public function logDelete($vb80bb7740288fda1f201890375a60c8f);public function logGet($vb068931cc450442b63f5b3d276ea4297, $v2063c1608d6e0baf80249c42e2be5804);public function logGetAll($ve2942a04780e223b215eb8b663cf5353);public function isCreationLogged($vb80bb7740288fda1f201890375a60c8f);public function isUpdatingLogged($vb80bb7740288fda1f201890375a60c8f);public function isDeletionLogged($vb80bb7740288fda1f201890375a60c8f);public function isGettingLogged($vb068931cc450442b63f5b3d276ea4297, $v2063c1608d6e0baf80249c42e2be5804);public function isGetAllLogged();public function readCreateLog();public function readUpdateLog();public function readDeleteLog();public function readGetLog();public function readGetAllLog();public function clear();}