<?php

class Review_action_index_c2cfacbcd109b25f99fa9502dbbc3f60776b6657 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'module';
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
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		<script type="text/javascript">
			top.TYPO3.ModuleMenu.App.refreshMenu();
			top.TYPO3.WorkspacesMenu.performWorkspaceSwitch(';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activeWorkspaceUid', $array7)]);

$output6 .= ', "';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activeWorkspaceTitle', $array8)]);

$output6 .= '");
		</script>
	';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('performWorkspaceSwitch', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['renderable'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['debug'] = true;
$arguments27['partial'] = 'WorkingTable';
$arguments27['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
		';
return $output26;
};
$arguments24 = array();

$output23 .= '';

$output23 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['message'] = NULL;
$arguments33['title'] = NULL;
$arguments33['state'] = -2;
$arguments33['iconName'] = NULL;
$arguments33['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['languageKey'] = NULL;
$arguments35['alternativeLanguageKeys'] = NULL;
$arguments35['key'] = 'editorInLive';
$arguments33['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);
$arguments33['state'] = -1;
$renderChildrenClosure34 = ($arguments33['message'] !== null) ? function() use ($arguments33) { return $arguments33['message']; } : $renderChildrenClosure34;
$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
		';
return $output32;
};
$arguments30 = array();
$arguments30['if'] = NULL;

$output23 .= '';

$output23 .= '
	';
return $output23;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('showGrid', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['renderable'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['debug'] = true;
$arguments12['partial'] = 'WorkingTable';
$arguments12['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
		';
return $output11;
};
$arguments9['__elseClosures'][] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['message'] = NULL;
$arguments16['title'] = NULL;
$arguments16['state'] = -2;
$arguments16['iconName'] = NULL;
$arguments16['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'editorInLive';
$arguments16['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);
$arguments16['state'] = -1;
$renderChildrenClosure17 = ($arguments16['message'] !== null) ? function() use ($arguments16) { return $arguments16['message']; } : $renderChildrenClosure17;
$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
		';
return $output15;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output37 = '';

$output37 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['name'] = NULL;
$arguments38['name'] = 'module';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output37 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
		<script type="text/javascript">
			top.TYPO3.ModuleMenu.App.refreshMenu();
			top.TYPO3.WorkspacesMenu.performWorkspaceSwitch(';
$array49 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activeWorkspaceUid', $array49)]);

$output48 .= ', "';
$array50 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activeWorkspaceTitle', $array50)]);

$output48 .= '");
		</script>
	';
return $output48;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('performWorkspaceSwitch', $array46);

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['section'] = NULL;
$arguments69['partial'] = NULL;
$arguments69['delegate'] = NULL;
$arguments69['renderable'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['optional'] = false;
$arguments69['default'] = NULL;
$arguments69['contentAs'] = NULL;
$arguments69['debug'] = true;
$arguments69['partial'] = 'WorkingTable';
$arguments69['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
		';
return $output68;
};
$arguments66 = array();

$output65 .= '';

$output65 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['message'] = NULL;
$arguments75['title'] = NULL;
$arguments75['state'] = -2;
$arguments75['iconName'] = NULL;
$arguments75['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$arguments77['key'] = 'editorInLive';
$arguments75['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);
$arguments75['state'] = -1;
$renderChildrenClosure76 = ($arguments75['message'] !== null) ? function() use ($arguments75) { return $arguments75['message']; } : $renderChildrenClosure76;
$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
		';
return $output74;
};
$arguments72 = array();
$arguments72['if'] = NULL;

$output65 .= '';

$output65 .= '
	';
return $output65;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('showGrid', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['section'] = NULL;
$arguments54['partial'] = NULL;
$arguments54['delegate'] = NULL;
$arguments54['renderable'] = NULL;
$arguments54['arguments'] = array (
);
$arguments54['optional'] = false;
$arguments54['default'] = NULL;
$arguments54['contentAs'] = NULL;
$arguments54['debug'] = true;
$arguments54['partial'] = 'WorkingTable';
$arguments54['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
		';
return $output53;
};
$arguments51['__elseClosures'][] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['message'] = NULL;
$arguments58['title'] = NULL;
$arguments58['state'] = -2;
$arguments58['iconName'] = NULL;
$arguments58['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'editorInLive';
$arguments58['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);
$arguments58['state'] = -1;
$renderChildrenClosure59 = ($arguments58['message'] !== null) ? function() use ($arguments58) { return $arguments58['message']; } : $renderChildrenClosure59;
$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
		';
return $output57;
};

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output42 .= '

';
return $output42;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'main';

$output37 .= NULL;

$output37 .= '
';

return $output37;
}


}
#