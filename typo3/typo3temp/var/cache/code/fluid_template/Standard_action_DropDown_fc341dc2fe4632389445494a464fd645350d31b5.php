<?php

class Standard_action_DropDown_fc341dc2fe4632389445494a464fd645350d31b5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section workspaceItem
 */
public function section_3136736770110067c0fd9c6eba2c629c3b8d6912(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="dropdown-table-row t3js-workspace-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('item.isActive', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['then'] = ' selected';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '">
		<div class="dropdown-table-column dropdown-table-icon">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['identifier'] = NULL;
$arguments18['size'] = 'small';
$arguments18['overlay'] = NULL;
$arguments18['state'] = 'default';
$arguments18['alternativeMarkupIdentifier'] = NULL;
$arguments18['identifier'] = 'status-status-checked';
$arguments18['size'] = 'small';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
};
$arguments16 = array();

$output15 .= '';

$output15 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['debug'] = true;
$arguments22['section'] = 'uncheckedIcon';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
};
$arguments20 = array();
$arguments20['if'] = NULL;

$output15 .= '';

$output15 .= '
			';
return $output15;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('item.isActive', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['identifier'] = NULL;
$arguments8['size'] = 'small';
$arguments8['overlay'] = NULL;
$arguments8['state'] = 'default';
$arguments8['alternativeMarkupIdentifier'] = NULL;
$arguments8['identifier'] = 'status-status-checked';
$arguments8['size'] = 'small';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
};
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['section'] = NULL;
$arguments10['partial'] = NULL;
$arguments10['delegate'] = NULL;
$arguments10['renderable'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$arguments10['default'] = NULL;
$arguments10['contentAs'] = NULL;
$arguments10['debug'] = true;
$arguments10['section'] = 'uncheckedIcon';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
		</div>
		<div class="dropdown-table-column">
			<a href="';
$array24 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output0 .= '" data-workspaceid="';
$array25 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.workspaceId', $array25)]);

$output0 .= '" class="t3js-workspaces-switchlink">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.label', $array29);
};
$arguments26 = array();
$arguments26['value'] = NULL;
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = 'UTF-8';
$arguments26['doubleEncode'] = true;
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output0 .= !is_string($value28) && !(is_object($value28) && method_exists($value28, '__toString')) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments26['encoding'], $arguments26['doubleEncode']);

$output0 .= '
			</a>
		</div>
	</div>
';

return $output0;
}
/**
 * section uncheckedIcon
 */
public function section_707f8f84d5f28e6c8ab3e05f2315cad5d2e0cb72(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output30 = '';

$output30 .= '
	<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$arguments31['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_inactive';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['identifier'] = NULL;
$arguments33['size'] = 'small';
$arguments33['overlay'] = NULL;
$arguments33['state'] = 'default';
$arguments33['alternativeMarkupIdentifier'] = NULL;
$arguments33['identifier'] = 'empty-empty';
$arguments33['size'] = 'small';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output30 .= '
	</span>
';

return $output30;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output35 = '';

$output35 .= '
<h3 class="dropdown-headline">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$arguments36['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.workspace';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
</h3>

<hr>

<div class="dropdown-table">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
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
$arguments69['section'] = 'workspaceItem';
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['item'] = $renderingContext->getVariableProvider()->getByPath('topItem', $array72);
$arguments69['arguments'] = $array71;

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
				<div class="dropdown-table-row">
					<div class="dropdown-table-column dropdown-table-icon">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['section'] = NULL;
$arguments79['partial'] = NULL;
$arguments79['delegate'] = NULL;
$arguments79['renderable'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['optional'] = false;
$arguments79['default'] = NULL;
$arguments79['contentAs'] = NULL;
$arguments79['debug'] = true;
$arguments79['section'] = 'uncheckedIcon';

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
					</div>
					<div class="dropdown-table-column">
						<a href="#" target="list_frame" data-module="web_WorkspacesWorkspaces" class="t3js-workspaces-modulelink">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_workspace';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output78 .= '
						</a>
					</div>
				</div>
			';
return $output78;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('showLinkToModule', $array76);

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output68 .= '
		';
return $output68;
};
$arguments66 = array();

$output65 .= '';

$output65 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return 'no items on top (= no workspace to work in)';
};
$arguments86 = array();

$output85 .= NULL;

$output85 .= '
			<div class="dropdown-table-row">
				<div class="dropdown-table-column dropdown-table-icon">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['debug'] = true;
$arguments88['section'] = 'uncheckedIcon';

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output85 .= '
				</div>
				<div class="dropdown-table-column">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['languageKey'] = NULL;
$arguments90['alternativeLanguageKeys'] = NULL;
$arguments90['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_noWSfound';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output85 .= '
				</div>
			</div>
		';
return $output85;
};
$arguments83 = array();
$arguments83['if'] = NULL;

$output65 .= '';

$output65 .= '
	';
return $output65;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('topItem', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments38['__thenClosure'] = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['section'] = NULL;
$arguments41['partial'] = NULL;
$arguments41['delegate'] = NULL;
$arguments41['renderable'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['optional'] = false;
$arguments41['default'] = NULL;
$arguments41['contentAs'] = NULL;
$arguments41['debug'] = true;
$arguments41['section'] = 'workspaceItem';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['item'] = $renderingContext->getVariableProvider()->getByPath('topItem', $array44);
$arguments41['arguments'] = $array43;

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
				<div class="dropdown-table-row">
					<div class="dropdown-table-column dropdown-table-icon">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['section'] = NULL;
$arguments51['partial'] = NULL;
$arguments51['delegate'] = NULL;
$arguments51['renderable'] = NULL;
$arguments51['arguments'] = array (
);
$arguments51['optional'] = false;
$arguments51['default'] = NULL;
$arguments51['contentAs'] = NULL;
$arguments51['debug'] = true;
$arguments51['section'] = 'uncheckedIcon';

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
					</div>
					<div class="dropdown-table-column">
						<a href="#" target="list_frame" data-module="web_WorkspacesWorkspaces" class="t3js-workspaces-modulelink">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['key'] = NULL;
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['languageKey'] = NULL;
$arguments53['alternativeLanguageKeys'] = NULL;
$arguments53['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_workspace';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output50 .= '
						</a>
					</div>
				</div>
			';
return $output50;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('showLinkToModule', $array48);

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = $renderChildrenClosure46;

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output40 .= '
		';
return $output40;
};
$arguments38['__elseClosures'][] = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return 'no items on top (= no workspace to work in)';
};
$arguments56 = array();

$output55 .= NULL;

$output55 .= '
			<div class="dropdown-table-row">
				<div class="dropdown-table-column dropdown-table-icon">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['section'] = NULL;
$arguments58['partial'] = NULL;
$arguments58['delegate'] = NULL;
$arguments58['renderable'] = NULL;
$arguments58['arguments'] = array (
);
$arguments58['optional'] = false;
$arguments58['default'] = NULL;
$arguments58['contentAs'] = NULL;
$arguments58['debug'] = true;
$arguments58['section'] = 'uncheckedIcon';

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output55 .= '
				</div>
				<div class="dropdown-table-column">
					';
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
$arguments60['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_noWSfound';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output55 .= '
				</div>
			</div>
		';
return $output55;
};

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output35 .= '
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '

	<hr>

	<div class="dropdown-table">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['section'] = NULL;
$arguments102['partial'] = NULL;
$arguments102['delegate'] = NULL;
$arguments102['renderable'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['optional'] = false;
$arguments102['default'] = NULL;
$arguments102['contentAs'] = NULL;
$arguments102['debug'] = true;
$arguments102['section'] = 'workspaceItem';
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array105);
$arguments102['arguments'] = $array104;

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
		';
return $output101;
};
$arguments98 = array();
$arguments98['each'] = NULL;
$arguments98['as'] = NULL;
$arguments98['key'] = NULL;
$arguments98['reverse'] = false;
$arguments98['iteration'] = NULL;
$array100 = array (
);$arguments98['each'] = $renderingContext->getVariableProvider()->getByPath('additionalItems', $array100);
$arguments98['as'] = 'item';

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
	</div>
';
return $output97;
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('additionalItems', $array95);

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments92['__thenClosure'] = $renderChildrenClosure93;

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output35 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
	<div class="dropdown-table-row t3js-workspace-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('item.isActive', $array112);

$expression113 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['then'] = ' selected';

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '">
		<div class="dropdown-table-column dropdown-table-icon">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['identifier'] = NULL;
$arguments126['size'] = 'small';
$arguments126['overlay'] = NULL;
$arguments126['state'] = 'default';
$arguments126['alternativeMarkupIdentifier'] = NULL;
$arguments126['identifier'] = 'status-status-checked';
$arguments126['size'] = 'small';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);
};
$arguments124 = array();

$output123 .= '';

$output123 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['section'] = NULL;
$arguments130['partial'] = NULL;
$arguments130['delegate'] = NULL;
$arguments130['renderable'] = NULL;
$arguments130['arguments'] = array (
);
$arguments130['optional'] = false;
$arguments130['default'] = NULL;
$arguments130['contentAs'] = NULL;
$arguments130['debug'] = true;
$arguments130['section'] = 'uncheckedIcon';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output123 .= '';

$output123 .= '
			';
return $output123;
};
$arguments114 = array();
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$arguments114['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('item.isActive', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments114['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments114['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['identifier'] = NULL;
$arguments116['size'] = 'small';
$arguments116['overlay'] = NULL;
$arguments116['state'] = 'default';
$arguments116['alternativeMarkupIdentifier'] = NULL;
$arguments116['identifier'] = 'status-status-checked';
$arguments116['size'] = 'small';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
};
$arguments114['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['section'] = NULL;
$arguments118['partial'] = NULL;
$arguments118['delegate'] = NULL;
$arguments118['renderable'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['optional'] = false;
$arguments118['default'] = NULL;
$arguments118['contentAs'] = NULL;
$arguments118['debug'] = true;
$arguments118['section'] = 'uncheckedIcon';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
};

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output108 .= '
		</div>
		<div class="dropdown-table-column">
			<a href="';
$array132 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array132)]);

$output108 .= '" data-workspaceid="';
$array133 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.workspaceId', $array133)]);

$output108 .= '" class="t3js-workspaces-switchlink">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$array137 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.label', $array137);
};
$arguments134 = array();
$arguments134['value'] = NULL;
$arguments134['keepQuotes'] = false;
$arguments134['encoding'] = 'UTF-8';
$arguments134['doubleEncode'] = true;
$value136 = ($arguments134['value'] !== NULL ? $arguments134['value'] : $renderChildrenClosure135());

$output108 .= !is_string($value136) && !(is_object($value136) && method_exists($value136, '__toString')) ? $value136 : htmlspecialchars($value136, ($arguments134['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments134['encoding'], $arguments134['doubleEncode']);

$output108 .= '
			</a>
		</div>
	</div>
';
return $output108;
};
$arguments106 = array();
$arguments106['name'] = NULL;
$arguments106['name'] = 'workspaceItem';

$output35 .= NULL;

$output35 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
	<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['key'] = NULL;
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['languageKey'] = NULL;
$arguments141['alternativeLanguageKeys'] = NULL;
$arguments141['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_inactive';

$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output140 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['identifier'] = NULL;
$arguments143['size'] = 'small';
$arguments143['overlay'] = NULL;
$arguments143['state'] = 'default';
$arguments143['alternativeMarkupIdentifier'] = NULL;
$arguments143['identifier'] = 'empty-empty';
$arguments143['size'] = 'small';

$output140 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output140 .= '
	</span>
';
return $output140;
};
$arguments138 = array();
$arguments138['name'] = NULL;
$arguments138['name'] = 'uncheckedIcon';

$output35 .= NULL;

$output35 .= '

';

return $output35;
}


}
#