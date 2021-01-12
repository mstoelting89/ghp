<?php

class partial_Nav_Sitebaritem_20dc9599d82c7079019c6452e70059df0aab5719 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output0 = '';

$output0 .= '

<div class="sidebar-item">
    <div class="sidebar-title">
        ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sidebar.data.title', $array1)]);

$output0 .= '
    </div>
    <div class="sidebar-content">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['data'] = NULL;
$arguments2['typoscriptObjectPath'] = NULL;
$arguments2['currentValueKey'] = NULL;
$arguments2['table'] = '';
$arguments2['typoscriptObjectPath'] = 'lib.sidebarcontent';
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['uid'] = $renderingContext->getVariableProvider()->getByPath('sidebar.data.uid', $array5);
$arguments2['data'] = $array4;
$renderChildrenClosure3 = ($arguments2['data'] !== null) ? function() use ($arguments2) { return $arguments2['data']; } : $renderChildrenClosure3;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
    </div>
</div>';

return $output0;
}


}
#