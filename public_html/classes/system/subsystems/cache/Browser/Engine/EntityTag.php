<?php
 namespace UmiCms\System\Cache\Browser\Engine;use UmiCms\System\Cache\Browser\Engine;class EntityTag extends Engine {public function process() {$v7f2db423a49b305459147332fb01cf87 = $this->getResponse()    ->getCurrentBuffer();$vbf2c63393dc4b17f2f6428ebe8608ddc = $this->getTag();$v7f2db423a49b305459147332fb01cf87->setHeader('ETag', $vbf2c63393dc4b17f2f6428ebe8608ddc);$v7f2db423a49b305459147332fb01cf87->setHeader('Cache-Control', $this->getCacheControl());$v7f2db423a49b305459147332fb01cf87->setHeader('Pragma', $this->getPragma());if ($this->isFresh($vbf2c63393dc4b17f2f6428ebe8608ddc)) {$this->sendNotModified();}}protected function getCacheControl() {return sprintf('%s, no-cache, must-revalidate', $this->getCacheControlPrivacy());}protected function getPragma() {return 'no-cache';}private function getTag() {return sprintf('W/"%s"', sha1($this->getResponse()->getUpdateTime()));}private function isFresh($vbf2c63393dc4b17f2f6428ebe8608ddc) {$vcf1e8c14e54505f60aa10ceb8d5d8ab3 = $this->getRequest()    ->Server();$v37821b2a5fbd5aedd68cd165350a1b6b = 'HTTP_IF_NONE_MATCH';return $vcf1e8c14e54505f60aa10ceb8d5d8ab3->isExist($v37821b2a5fbd5aedd68cd165350a1b6b) && $vcf1e8c14e54505f60aa10ceb8d5d8ab3->get($v37821b2a5fbd5aedd68cd165350a1b6b) == $vbf2c63393dc4b17f2f6428ebe8608ddc;}}