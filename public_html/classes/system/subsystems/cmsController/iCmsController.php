<?php
 interface iCmsController {public function getModule($v52a43e48ec4649dee819dadabcab1bde, $vbd354405a20aa635025421c9edb5d41d = false);public function getModulesList();public function isModule($v52a43e48ec4649dee819dadabcab1bde);public function installModule($v8e74155194666debb2f773d1de2ae7fe);public function getCurrentModule();public function setCurrentModule($v52a43e48ec4649dee819dadabcab1bde);public function getCurrentMethod();public function setCurrentMethod($vddaa6e8c8c412299272e183087b8f7b6);public function getCurrentElementId();public function setCurrentElementId($vb80bb7740288fda1f201890375a60c8f);public function getPreLang();public function setPreLang($v851f5ac9941d720844d143ed9cfcf60a);public function getCurrentTemplater($v2d101d1f0f03caaff97e0cebe2a51896 = false);public function getLangConstantList();public function setLangConstant($v22884db148f0ffb0d830ba431102b0b5, $vea9f6aca279138c58f705c8d4cb4b8ce, $vd304ba20e96d87411588eeabac850e34);public function getRequestId();public function calculateRefererUri();public function getCalculatedRefererUri();public function getResourcesDirectory($v64feae0988f5b61c96c305e3c3f04551 = false);public function getTemplatesDirectory();public function getGlobalVariables($v2d4260a0fcf0c77266e1b8f41bd4080c = false);public function executeStream($v9305b73d359bd06734fee0b3638079e1);public function getCurrentTemplate();public function detectCurrentDesignTemplate();public function analyzePath($v86266ee937d97f812a8e57d22b62ee29 = false);public function setAdminDataSet($v181746b262df9e42f6016b8637fc8c52);public function setUrlPrefix($v851f5ac9941d720844d143ed9cfcf60a = '');public function getUrlPrefix();public function getFirstAllowedModuleName();public static function doSomething();const ADMIN_MODE_ID = 'admin';}