<?php

class Standard_action_Textpic_e06aa0f17d5e5e9028e1d844a2f708426f9a82ed extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['name'] = NULL;
$arguments1['name'] = 'Default';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['section'] = NULL;
$arguments30['partial'] = NULL;
$arguments30['delegate'] = NULL;
$arguments30['renderable'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['optional'] = false;
$arguments30['default'] = NULL;
$arguments30['contentAs'] = NULL;
$arguments30['debug'] = true;
$arguments30['partial'] = 'Textpic/0';
$arguments30['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
	';
return $output29;
};
$arguments27 = array();
$arguments27['value'] = NULL;
$arguments27['value'] = 0;

$output26 .= '';

$output26 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['renderable'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['debug'] = true;
$arguments36['partial'] = 'Textpic/1';
$arguments36['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
	';
return $output35;
};
$arguments33 = array();
$arguments33['value'] = NULL;
$arguments33['value'] = 1;

$output26 .= '';

$output26 .= '
';
return $output26;
};
$arguments3 = array();
$arguments3['expression'] = NULL;
$array25 = array (
);$arguments3['expression'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array25);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 0;
}): return call_user_func(function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['section'] = NULL;
$arguments6['partial'] = NULL;
$arguments6['delegate'] = NULL;
$arguments6['renderable'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['optional'] = false;
$arguments6['default'] = NULL;
$arguments6['contentAs'] = NULL;
$arguments6['debug'] = true;
$arguments6['partial'] = 'Textpic/0';
$arguments6['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
	';
return $output5;
});
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['debug'] = true;
$arguments16['partial'] = 'Textpic/1';
$arguments16['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
	';
return $output15;
});
}
}, array($arguments3));

$output0 .= '


';

return $output0;
}


}
#