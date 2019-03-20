<?php
 namespace UmiCms\System\Response;use UmiCms\System\Response\Buffer\iCollection;use UmiCms\System\Response\Buffer\iDetector;use UmiCms\System\Response\Buffer\iFactory;use UmiCms\System\Response\UpdateTime\iCalculator;interface iFacade {const HTTP = 'HTTP';const CLI = 'CLI';const HTTP_DOC = 'HTTPDoc';public function __construct(   iFactory $v9549dd6065d019211460c59a86dd6536,   iDetector $v21aed3df2077b5d91ce46bf123446731,   iCollection $vdb6d9b451b818ccc9a449383f2f0c450,   iCalculator $v4880766485de7821db13940395a913c8  );public function getCurrentBuffer();public function getBuffer($vb068931cc450442b63f5b3d276ea4297);public function getBufferByClass($va2f2ed4f8ebc2cbb4c21a29dc40ab61d);public function getHttpBuffer();public function getCliBuffer();public function getHttpDocBuffer();public function printJson($v8d777f385d3dfec8815d20f7496026dc, $v9acb44549b41563697bb490144ec6258 = '200 OK');public function printXml(\DOMDocument $vfdc3bdefb79cec8eb8211d2499e04704, $v9acb44549b41563697bb490144ec6258 = '200 OK');public function download(\iUmiFile $v8c7dd922ad47494fc02c388e12c00eac);public function downloadAndDelete(\iUmiFile $v8c7dd922ad47494fc02c388e12c00eac);public function getUpdateTime();public function isCorrect();}