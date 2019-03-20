<?php
 namespace UmiCms\Classes\System\Utils\Seo\Settings;use UmiCms\Classes\System\Utils\Settings\Common as SettingsCommon;class Common extends SettingsCommon implements iSettings {use \tUmiRegistryInjector;public function getTitlePrefix() {return (string) $this->getRegistry()    ->get("{$this->getPrefix()}/title_prefix");}public function setTitlePrefix($v851f5ac9941d720844d143ed9cfcf60a) {$this->getRegistry()->set("{$this->getPrefix()}/title_prefix", $v851f5ac9941d720844d143ed9cfcf60a);return $this;}public function getDefaultTitle() {return (string) $this->getRegistry()    ->get("{$this->getPrefix()}/default_title");}public function setDefaultTitle($vd5d3db1765287eef77d7927cc956f50a) {$this->getRegistry()->set("{$this->getPrefix()}/default_title", $vd5d3db1765287eef77d7927cc956f50a);return $this;}public function getDefaultKeywords() {return (string) $this->getRegistry()    ->get("{$this->getPrefix()}/meta_keywords");}public function setDefaultKeywords($v59aeb2c9970b7b25be2fab2317e31fcb) {$this->getRegistry()->set("{$this->getPrefix()}/meta_keywords", $v59aeb2c9970b7b25be2fab2317e31fcb);return $this;}public function getDefaultDescription() {return (string) $this->getRegistry()    ->get("{$this->getPrefix()}/meta_description");}public function setDefaultDescription($v67daf92c833c41c95db874e18fcb2786) {$this->getRegistry()->set("{$this->getPrefix()}/meta_description", $v67daf92c833c41c95db874e18fcb2786);return $this;}public function isCaseSensitive() {return (bool) $this->getRegistry()->get("{$this->getPrefix()}/case-sensitive");}public function setCaseSensitive($v2063c1608d6e0baf80249c42e2be5804) {$this->getRegistry()->set("{$this->getPrefix()}/case-sensitive", $v2063c1608d6e0baf80249c42e2be5804);return $this;}public function getCaseSensitiveStatus() {return (bool) $this->getRegistry()->get("{$this->getPrefix()}/case-sensitive-status");}public function setCaseSensitiveStatus($v2063c1608d6e0baf80249c42e2be5804) {$this->getRegistry()->set("{$this->getPrefix()}/case-sensitive-status", $v2063c1608d6e0baf80249c42e2be5804);return $this;}public function isProcessRepeatedSlashes() {return (bool) $this->getRegistry()->get("{$this->getPrefix()}/process-slashes");}public function setProcessRepeatedSlashes($v2063c1608d6e0baf80249c42e2be5804) {$this->getRegistry()->set("{$this->getPrefix()}/process-slashes", $v2063c1608d6e0baf80249c42e2be5804);return $this;}public function getProcessRepeatedSlashesStatus() {return (int) $this->getRegistry()->get("{$this->getPrefix()}/process-slashes-status");}public function setProcessRepeatedSlashesStatus($v9acb44549b41563697bb490144ec6258) {$this->getRegistry()->set("{$this->getPrefix()}/process-slashes-status", $v9acb44549b41563697bb490144ec6258);return $this;}public function isAddIdToDuplicateAltName() {return (bool) $this->getRegistry()->get("{$this->getPrefix()}/add-id-to-alt-name");}public function setAddIdToDuplicateAltName($v2063c1608d6e0baf80249c42e2be5804) {$this->getRegistry()->set("{$this->getPrefix()}/add-id-to-alt-name", $v2063c1608d6e0baf80249c42e2be5804);return $this;}protected function getPrefix() {return "//settings/seo/";}}