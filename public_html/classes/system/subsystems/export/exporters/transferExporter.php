<?php
 use UmiCms\Service;class transferExporter extends umiExporter {public function export($v6f017b01ac7b836b216574ebb3f5d73c, $vd1051e3a7d64c17a9cba77188937d2cd) {set_time_limit(0);if (!umiCount($v6f017b01ac7b836b216574ebb3f5d73c)) {$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('pages');$v8be74552df93e31bbdd6b36ed74bdb6a->where('hierarchy')->page(0)->level(1);$v6f017b01ac7b836b216574ebb3f5d73c = (array) $v8be74552df93e31bbdd6b36ed74bdb6a->result();}if (getRequest('as_file') === '0') {$ved780287e302ec3b9fd3c5e78771919f = new xmlExporter($this->getSourceName());$ved780287e302ec3b9fd3c5e78771919f->addBranches($v6f017b01ac7b836b216574ebb3f5d73c);$ved780287e302ec3b9fd3c5e78771919f->excludeBranches($vd1051e3a7d64c17a9cba77188937d2cd);$ved780287e302ec3b9fd3c5e78771919f = $this->putSettings($ved780287e302ec3b9fd3c5e78771919f);$ved780287e302ec3b9fd3c5e78771919f = $this->putEntities($ved780287e302ec3b9fd3c5e78771919f);$result = $ved780287e302ec3b9fd3c5e78771919f->execute();return $result->saveXML();}$v857a5246dff0c3c79e476b004684f6d3 = $this->getExportPath();$vb80bb7740288fda1f201890375a60c8f = getRequest('param0');$v97fd815a3803a0588876bdd862014fed = $v857a5246dff0c3c79e476b004684f6d3 . $vb80bb7740288fda1f201890375a60c8f . '.' . parent::getFileExt();$v6990a54322d9232390a784c5c9247dd6 = $v857a5246dff0c3c79e476b004684f6d3 . $vb80bb7740288fda1f201890375a60c8f;if (!is_dir($v6990a54322d9232390a784c5c9247dd6)) {mkdir($v6990a54322d9232390a784c5c9247dd6, 0777, true);}if (file_exists($v97fd815a3803a0588876bdd862014fed) && !file_exists(SYS_TEMP_PATH . '/runtime-cache/' . md5($this->getSourceName()))) {unlink($v97fd815a3803a0588876bdd862014fed);}if ($v6f017b01ac7b836b216574ebb3f5d73c) {$v33030abc929f083da5f6c3f755b46034 = [     './tpls/',     './xsltTpls/',     './css/',     './js/',     './usels/',     './umaps/',     './templates/',    ];foreach ($v33030abc929f083da5f6c3f755b46034 as $v100664c6e2c0333b19a729f2f3ddb7dd) {if (is_dir($v100664c6e2c0333b19a729f2f3ddb7dd)) {$v736007832d2167baaae763fd3a3f3cf1 = new umiDirectory($v100664c6e2c0333b19a729f2f3ddb7dd);$v45b963397aa40d4a0063e0d85e4fe7a1 = $v736007832d2167baaae763fd3a3f3cf1->getAllFiles(1);foreach ($v45b963397aa40d4a0063e0d85e4fe7a1 as $vd6fe1d0be6347b8ef2427fa629c04485 => $vb068931cc450442b63f5b3d276ea4297) {$v8c7dd922ad47494fc02c388e12c00eac = new umiFile($vd6fe1d0be6347b8ef2427fa629c04485);if (!is_dir($v6990a54322d9232390a784c5c9247dd6 . ltrim($v8c7dd922ad47494fc02c388e12c00eac->getDirName(), '.'))) {mkdir($v6990a54322d9232390a784c5c9247dd6 . ltrim($v8c7dd922ad47494fc02c388e12c00eac->getDirName(), '.'), 0777, true);}copy($v8c7dd922ad47494fc02c388e12c00eac->getFilePath(), $v6990a54322d9232390a784c5c9247dd6 . $v8c7dd922ad47494fc02c388e12c00eac->getFilePath(true));}}}}$v71b70dd1e455c477220693d84ccd5682 = $v97fd815a3803a0588876bdd862014fed . '.tmp';$ved780287e302ec3b9fd3c5e78771919f = new xmlExporter($this->getSourceName(), $this->getLimit());$ved780287e302ec3b9fd3c5e78771919f->addBranches($v6f017b01ac7b836b216574ebb3f5d73c);$ved780287e302ec3b9fd3c5e78771919f->excludeBranches($vd1051e3a7d64c17a9cba77188937d2cd);$ved780287e302ec3b9fd3c5e78771919f = $this->putSettings($ved780287e302ec3b9fd3c5e78771919f);$ved780287e302ec3b9fd3c5e78771919f = $this->putEntities($ved780287e302ec3b9fd3c5e78771919f);$vdd988cfd769c9f7fbd795a0f5da8e751 = $ved780287e302ec3b9fd3c5e78771919f->execute();if (file_exists($v97fd815a3803a0588876bdd862014fed)) {$v1de9b0a30075ae8c303eb420c103c320 = new XMLReader;$va82feee3cc1af8bcabda979e8775ef0f = new XMLWriter;$v1de9b0a30075ae8c303eb420c103c320->open($v97fd815a3803a0588876bdd862014fed);$va82feee3cc1af8bcabda979e8775ef0f->openURI($v71b70dd1e455c477220693d84ccd5682);$va82feee3cc1af8bcabda979e8775ef0f->startDocument('1.0', 'utf-8');$va82feee3cc1af8bcabda979e8775ef0f->startElement('umidump');$va82feee3cc1af8bcabda979e8775ef0f->writeAttribute('version', '2.0');$va82feee3cc1af8bcabda979e8775ef0f->writeAttribute('xmlns:xlink', 'http://www.w3.org/TR/xlink');$v7aa28ed115707345d0274032757e8991 = $v1de9b0a30075ae8c303eb420c103c320->read();while ($v7aa28ed115707345d0274032757e8991) {if ($v1de9b0a30075ae8c303eb420c103c320->nodeType == XMLReader::ELEMENT) {$ve24455211a964330063a18670d943835 = $v1de9b0a30075ae8c303eb420c103c320->name;if ($ve24455211a964330063a18670d943835 != 'umidump') {$va82feee3cc1af8bcabda979e8775ef0f->startElement($ve24455211a964330063a18670d943835);if ($ve24455211a964330063a18670d943835 != 'meta') {if (!$v1de9b0a30075ae8c303eb420c103c320->isEmptyElement) {$v7852ddca47412c0d947ebf27eb83ed3a = $v1de9b0a30075ae8c303eb420c103c320->read();while ($v7852ddca47412c0d947ebf27eb83ed3a) {if ($v1de9b0a30075ae8c303eb420c103c320->nodeType == XMLReader::ELEMENT) {$vcf7f5c76225a101e6320a96c02f92fc1 = $v1de9b0a30075ae8c303eb420c103c320->name;$va82feee3cc1af8bcabda979e8775ef0f->writeRaw($v1de9b0a30075ae8c303eb420c103c320->readOuterXML());$v7852ddca47412c0d947ebf27eb83ed3a = $v1de9b0a30075ae8c303eb420c103c320->next();}elseif ($v1de9b0a30075ae8c303eb420c103c320->nodeType == XMLReader::END_ELEMENT &&           $v1de9b0a30075ae8c303eb420c103c320->name == $ve24455211a964330063a18670d943835) {$v7852ddca47412c0d947ebf27eb83ed3a = false;}else {$v7852ddca47412c0d947ebf27eb83ed3a = $v1de9b0a30075ae8c303eb420c103c320->next();}}}if ($vdd988cfd769c9f7fbd795a0f5da8e751->getElementsByTagName($ve24455211a964330063a18670d943835)->item(0)->hasChildNodes()) {$v268184c12df027f536154d099d497b31 = $vdd988cfd769c9f7fbd795a0f5da8e751->getElementsByTagName($ve24455211a964330063a18670d943835)->item(0)->childNodes;foreach ($v268184c12df027f536154d099d497b31 as $v1b7d5726533ab525a8760351e9b5e415) {$va5e171f642af8e3bd24c50cdc4d66fe3 = new DOMDocument;$va5e171f642af8e3bd24c50cdc4d66fe3->formatOutput = true;$v36c4536996ca5615dcf9911f068786dc = $va5e171f642af8e3bd24c50cdc4d66fe3->importNode($v1b7d5726533ab525a8760351e9b5e415, true);$va5e171f642af8e3bd24c50cdc4d66fe3->appendChild($v36c4536996ca5615dcf9911f068786dc);$va82feee3cc1af8bcabda979e8775ef0f->writeRaw($va5e171f642af8e3bd24c50cdc4d66fe3->saveXML($v36c4536996ca5615dcf9911f068786dc, LIBXML_NOXMLDECL));}}}elseif ($ve24455211a964330063a18670d943835 == 'meta') {$va82feee3cc1af8bcabda979e8775ef0f->writeRaw($v1de9b0a30075ae8c303eb420c103c320->readInnerXML());$v6f017b01ac7b836b216574ebb3f5d73c = $vdd988cfd769c9f7fbd795a0f5da8e751->getElementsByTagName('branches');if ($v6f017b01ac7b836b216574ebb3f5d73c->item(0)) {$va82feee3cc1af8bcabda979e8775ef0f->writeRaw($vdd988cfd769c9f7fbd795a0f5da8e751->saveXML($v6f017b01ac7b836b216574ebb3f5d73c->item(0), LIBXML_NOXMLDECL));}}$va82feee3cc1af8bcabda979e8775ef0f->fullEndElement();$v7aa28ed115707345d0274032757e8991 = $v1de9b0a30075ae8c303eb420c103c320->next();continue;}}$v7aa28ed115707345d0274032757e8991 = $v1de9b0a30075ae8c303eb420c103c320->read();}$va82feee3cc1af8bcabda979e8775ef0f->fullEndElement();$v1de9b0a30075ae8c303eb420c103c320->close();$va82feee3cc1af8bcabda979e8775ef0f->endDocument();$va82feee3cc1af8bcabda979e8775ef0f->flush();unlink($v97fd815a3803a0588876bdd862014fed);rename($v71b70dd1e455c477220693d84ccd5682, $v97fd815a3803a0588876bdd862014fed);}else {file_put_contents($v97fd815a3803a0588876bdd862014fed, $vdd988cfd769c9f7fbd795a0f5da8e751->saveXML());}$this->completed = $ved780287e302ec3b9fd3c5e78771919f->isCompleted();return false;}protected function putSettings(iXmlExporter $ved780287e302ec3b9fd3c5e78771919f) {$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();if ($v8b1dc169bf460ee884fceef66c6607d6->isModule('umiSettings')) {$v8b1dc169bf460ee884fceef66c6607d6->getModule('umiSettings');$vfb4c7746ae9e332cc8fbdeb050d88afe = Service::SelectorFactory()     ->createObjectTypeGuid(umiSettings::ROOT_TYPE_GUID)     ->result();$ved780287e302ec3b9fd3c5e78771919f->addObjects($vfb4c7746ae9e332cc8fbdeb050d88afe);}return $ved780287e302ec3b9fd3c5e78771919f;}protected function putEntities(iXmlExporter $ved780287e302ec3b9fd3c5e78771919f) {$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();if ($v8b1dc169bf460ee884fceef66c6607d6->isModule('appointment')) {$v8b1dc169bf460ee884fceef66c6607d6->getModule('appointment');$ved780287e302ec3b9fd3c5e78771919f->addEntities([     'AppointmentServiceGroups' => [],     'AppointmentServices' => [],     'AppointmentEmployees' => [],     'AppointmentEmployeesServices' => [],     'AppointmentEmployeesSchedules' => [],     'AppointmentOrders' => []    ]);}if ($v8b1dc169bf460ee884fceef66c6607d6->isModule('umiSliders')) {$v8b1dc169bf460ee884fceef66c6607d6->getModule('umiSliders');$ved780287e302ec3b9fd3c5e78771919f->addEntities([     'SlidersCollection' => [],     'SlidesCollection' => []    ]);}if ($v8b1dc169bf460ee884fceef66c6607d6->isModule('umiNotifications')) {$v8b1dc169bf460ee884fceef66c6607d6->getModule('umiNotifications');$ved780287e302ec3b9fd3c5e78771919f->addEntities([     'MailNotifications' => [],     'MailTemplates' => [],     'MailVariables' => [],    ]);}if ($v8b1dc169bf460ee884fceef66c6607d6->isModule('umiRedirects')) {$v8b1dc169bf460ee884fceef66c6607d6->getModule('umiRedirects');$ved780287e302ec3b9fd3c5e78771919f->addEntities([     'Redirects' => []    ]);}return $ved780287e302ec3b9fd3c5e78771919f;}}