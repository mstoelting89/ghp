<?php

class Download_action_installFromTer_4a52365d9b986c12391fd735c8c1df9821d0c51f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['value'] = NULL;
$arguments2['forceObject'] = false;
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['result'] = $renderingContext->getVariableProvider()->getByPath('result', $array5);
$array6 = array (
);$array4['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array6);
$array7 = array (
);$array4['installationTypeLanguageKey'] = $renderingContext->getVariableProvider()->getByPath('installationTypeLanguageKey', $array7);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['subject'] = NULL;
$array10 = array (
);$arguments8['subject'] = $renderingContext->getVariableProvider()->getByPath('unresolvedDependencies', $array10);
$renderChildrenClosure9 = ($arguments8['subject'] !== null) ? function() use ($arguments8) { return $arguments8['subject']; } : $renderChildrenClosure9;$array4['errorCount'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'downloadExtension.dependencies.errorTitle';
$array4['errorTitle'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['debug'] = true;
$arguments13['partial'] = 'List/UnresolvedDependencies';
$arguments13['arguments'] = $renderingContext->getVariableProvider()->getAll();
$array4['errorMessage'] = TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['action'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['controller'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['pluginName'] = NULL;
$arguments16['pageUid'] = NULL;
$arguments16['pageType'] = 0;
$arguments16['noCache'] = false;
$arguments16['noCacheHash'] = false;
$arguments16['section'] = '';
$arguments16['format'] = '';
$arguments16['linkAccessRestrictedPages'] = false;
$arguments16['additionalParams'] = array (
);
$arguments16['absolute'] = false;
$arguments16['addQueryString'] = false;
$arguments16['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments16['addQueryStringMethod'] = NULL;
$arguments16['action'] = 'installExtensionWithoutSystemDependencyCheck';
$arguments16['format'] = 'json';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array19);
$arguments16['arguments'] = $array18;
$array4['skipDependencyUri'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
$arguments2['value'] = $array4;
$renderChildrenClosure3 = ($arguments2['value'] !== null) ? function() use ($arguments2) { return $arguments2['value']; } : $renderChildrenClosure3;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
};
$arguments0 = array();
$arguments0['value'] = NULL;

return isset($arguments0['value']) ? $arguments0['value'] : $renderChildrenClosure1();
}


}
#