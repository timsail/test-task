<?php
 namespace UmiCms\System\Trade\Offer\Price\Currency;use UmiCms\System\Trade\Offer\Price\iCurrency;interface iCollection {public function getBy($vb068931cc450442b63f5b3d276ea4297, $v2063c1608d6e0baf80249c42e2be5804);public function getAll();public function load(iCurrency $v1af0389838508d7016a9841eb6273962);public function loadList(array $vd4800b2094077e3751d7ea14924de3bb);public function unload($vb80bb7740288fda1f201890375a60c8f);public function isLoaded($vb80bb7740288fda1f201890375a60c8f);}