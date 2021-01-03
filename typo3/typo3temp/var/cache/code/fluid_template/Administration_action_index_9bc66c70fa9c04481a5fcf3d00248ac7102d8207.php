<?php

class Administration_action_index_9bc66c70fa9c04481a5fcf3d00248ac7102d8207 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Backend/Default';
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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * section categoryTree
 */
public function section_fca14bbaa23e55bf6615b2e4fdf213505b61af98(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<ul class="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array1)]);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
			<li>
				<label title="';
$array6 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array6)]);

$output5 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.item.title', $array10);
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output5 .= !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments7['encoding'], $arguments7['doubleEncode']);

$output5 .= '">
					<input type="checkbox" ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['id'] = NULL;
$arguments11['categories'] = array (
);
$array13 = array (
);$arguments11['id'] = $renderingContext->getVariableProvider()->getByPath('category.item.uid', $array13);
$array14 = array (
);$arguments11['categories'] = $renderingContext->getVariableProvider()->getByPath('demand.selectedCategories', $array14);

$output5 .= GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output5 .= ' name="tx_news_web_newsadministration[demand][selectedCategories][]" value="';
$array15 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array15)]);

$output5 .= '" /> ';
$array16 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.title', $array16)]);

$output5 .= '
				</label>

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['debug'] = true;
$arguments23['section'] = 'categoryTree';
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['categories'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array26);
$array27 = array (
);$array25['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array27);
$arguments23['arguments'] = $array25;

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
				';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output5 .= '
			</li>
		';
return $output5;
};
$arguments2 = array();
$arguments2['each'] = NULL;
$arguments2['as'] = NULL;
$arguments2['key'] = NULL;
$arguments2['reverse'] = false;
$arguments2['iteration'] = NULL;
$array4 = array (
);$arguments2['each'] = $renderingContext->getVariableProvider()->getByPath('categories', $array4);
$arguments2['as'] = 'category';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
	</ul>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output28 = '';

$output28 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.title';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '
	</h1>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.why.text';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
			<br>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['identifier'] = NULL;
$arguments48['size'] = 'small';
$arguments48['overlay'] = NULL;
$arguments48['state'] = 'default';
$arguments48['alternativeMarkupIdentifier'] = NULL;
$arguments48['identifier'] = 'ext-news-donation';

$output47 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.link';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output47 .= '
				';
return $output47;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['name'] = NULL;
$arguments45['rel'] = NULL;
$arguments45['rev'] = NULL;
$arguments45['target'] = NULL;
$arguments45['action'] = NULL;
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = NULL;
$arguments45['noCache'] = NULL;
$arguments45['noCacheHash'] = NULL;
$arguments45['section'] = NULL;
$arguments45['format'] = NULL;
$arguments45['linkAccessRestrictedPages'] = NULL;
$arguments45['additionalParams'] = NULL;
$arguments45['absolute'] = NULL;
$arguments45['addQueryString'] = NULL;
$arguments45['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments45['addQueryStringMethod'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['action'] = 'donate';
$arguments45['class'] = 'btn btn-default';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
		';
return $output42;
};
$arguments37 = array();
$arguments37['message'] = NULL;
$arguments37['title'] = NULL;
$arguments37['state'] = -2;
$arguments37['iconName'] = NULL;
$arguments37['disableIcon'] = false;
$output39 = '';

$output39 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.support';

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);
$arguments37['title'] = $output39;
$arguments37['state'] = -1;
$renderChildrenClosure38 = ($arguments37['message'] !== null) ? function() use ($arguments37) { return $arguments37['message']; } : $renderChildrenClosure38;
$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
	';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('showSupportArea', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output28 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
		<div class="alert alert-info">
			<div class="message-body">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nopageselected';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
			</div>
		</div>
	';
return $output57;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array55);
$array54['1'] = ' == 0';

$expression56 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = $renderChildrenClosure53;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output28 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
			<input type="hidden" name="formSubmitted" value="1">
            <input type="hidden" name="route" value="/module/web/NewsAdministration/">
            <input type="hidden" name="token" value="';
$array72 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array72)]);

$output71 .= '">
			<input type="hidden" name="id" value="';
$array73 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page', $array73)]);

$output71 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['name'] = NULL;
$arguments74['value'] = NULL;
$arguments74['property'] = NULL;
$arguments74['disabled'] = NULL;
$arguments74['errorClass'] = 'f3-form-error';
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['checked'] = NULL;
$arguments74['multiple'] = false;
$arguments74['style'] = 'display:none';
$arguments74['property'] = 'selectedCategories';
$arguments74['value'] = 0;

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output71 .= '

			<div id="setting-container" style="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('hideForm', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['then'] = 'display:none';
$arguments76['else'] = '';

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output71 .= '">
				<div class="settings">
					<div class="row form-horizontal">
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
							<div class="form-group">
								<label for="searchWord" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.searchWord';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output86 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['name'] = NULL;
$arguments89['value'] = NULL;
$arguments89['property'] = NULL;
$arguments89['autofocus'] = NULL;
$arguments89['disabled'] = NULL;
$arguments89['maxlength'] = NULL;
$arguments89['readonly'] = NULL;
$arguments89['size'] = NULL;
$arguments89['placeholder'] = NULL;
$arguments89['pattern'] = NULL;
$arguments89['errorClass'] = 'f3-form-error';
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['required'] = false;
$arguments89['type'] = 'text';
$arguments89['property'] = 'searchWord';
$arguments89['id'] = 'searchWord';
$arguments89['class'] = 'form-control t3js-clearable';

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output86 .= '
								</div>
							</div>
							';
return $output86;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('filters.searchWord', $array84);

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = $renderChildrenClosure82;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['key'] = NULL;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['languageKey'] = NULL;
$arguments97['alternativeLanguageKeys'] = NULL;
$arguments97['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.timeRange';

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output96 .= '
								</label>

								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['name'] = NULL;
$arguments99['value'] = NULL;
$arguments99['property'] = NULL;
$arguments99['autofocus'] = NULL;
$arguments99['disabled'] = NULL;
$arguments99['maxlength'] = NULL;
$arguments99['readonly'] = NULL;
$arguments99['size'] = NULL;
$arguments99['placeholder'] = NULL;
$arguments99['pattern'] = NULL;
$arguments99['errorClass'] = 'f3-form-error';
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['required'] = false;
$arguments99['type'] = 'text';
$arguments99['type'] = 'datetime';
$arguments99['property'] = 'timeRestriction';
$arguments99['id'] = 'timeRestriction';
$arguments99['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array101 = array();
$array101['date-type'] = 'datetime';
$array101['date-offset'] = 0;
$arguments99['data'] = $array101;

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output96 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestriction">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									-
								</label>
								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['name'] = NULL;
$arguments102['value'] = NULL;
$arguments102['property'] = NULL;
$arguments102['autofocus'] = NULL;
$arguments102['disabled'] = NULL;
$arguments102['maxlength'] = NULL;
$arguments102['readonly'] = NULL;
$arguments102['size'] = NULL;
$arguments102['placeholder'] = NULL;
$arguments102['pattern'] = NULL;
$arguments102['errorClass'] = 'f3-form-error';
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['required'] = false;
$arguments102['type'] = 'text';
$arguments102['type'] = 'datetime';
$arguments102['property'] = 'timeRestrictionHigh';
$arguments102['id'] = 'timeRestrictionHigh';
$arguments102['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array104 = array();
$array104['date-type'] = 'datetime';
$array104['date-offset'] = 0;
$arguments102['data'] = $array104;

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output96 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestrictionHigh">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('filters.timeRestriction', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
							<div class="form-group">
								<label for="topNewsRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['key'] = NULL;
$arguments111['id'] = NULL;
$arguments111['default'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['languageKey'] = NULL;
$arguments111['alternativeLanguageKeys'] = NULL;
$arguments111['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['name'] = NULL;
$arguments113['value'] = NULL;
$arguments113['property'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['size'] = NULL;
$arguments113['disabled'] = NULL;
$arguments113['options'] = NULL;
$arguments113['optionsAfterContent'] = false;
$arguments113['optionValueField'] = NULL;
$arguments113['optionLabelField'] = NULL;
$arguments113['sortByOptionLabel'] = false;
$arguments113['selectAllByDefault'] = false;
$arguments113['errorClass'] = 'f3-form-error';
$arguments113['prependOptionLabel'] = NULL;
$arguments113['prependOptionValue'] = NULL;
$arguments113['multiple'] = false;
$arguments113['required'] = false;
$arguments113['property'] = 'topNewsRestriction';
$arguments113['class'] = 'form-control';
// Rendering Array
$array115 = array();
$array115['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.1';
$array115['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$arguments118['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.2';
$array115['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
$arguments113['options'] = $array115;
$arguments113['id'] = 'topNewsRestriction';

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output110 .= '
								</div>
							</div>
							';
return $output110;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['0'] = $renderingContext->getVariableProvider()->getByPath('filters.topNewsRestriction', $array108);

$expression109 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$arguments105['__thenClosure'] = $renderChildrenClosure106;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
							<div class="form-group">
								<label for="hidden" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['languageKey'] = NULL;
$arguments126['alternativeLanguageKeys'] = NULL;
$arguments126['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output125 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['name'] = NULL;
$arguments128['value'] = NULL;
$arguments128['property'] = NULL;
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['title'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['size'] = NULL;
$arguments128['disabled'] = NULL;
$arguments128['options'] = NULL;
$arguments128['optionsAfterContent'] = false;
$arguments128['optionValueField'] = NULL;
$arguments128['optionLabelField'] = NULL;
$arguments128['sortByOptionLabel'] = false;
$arguments128['selectAllByDefault'] = false;
$arguments128['errorClass'] = 'f3-form-error';
$arguments128['prependOptionLabel'] = NULL;
$arguments128['prependOptionValue'] = NULL;
$arguments128['multiple'] = false;
$arguments128['required'] = false;
$arguments128['property'] = 'hidden';
$arguments128['class'] = 'form-control';
// Rendering Array
$array130 = array();
$array130['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['key'] = NULL;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['languageKey'] = NULL;
$arguments131['alternativeLanguageKeys'] = NULL;
$arguments131['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.hidden';
$array130['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.nonHidden';
$array130['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
$arguments128['options'] = $array130;
$arguments128['id'] = 'hidden';

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output125 .= '
								</div>
							</div>
							';
return $output125;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('filters.hidden', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = $renderChildrenClosure121;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
							<div class="form-group">
								<label for="archived" class="col-xs-4 control-label">
									';
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
$arguments141['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction';

$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output140 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['additionalAttributes'] = NULL;
$arguments143['data'] = NULL;
$arguments143['name'] = NULL;
$arguments143['value'] = NULL;
$arguments143['property'] = NULL;
$arguments143['class'] = NULL;
$arguments143['dir'] = NULL;
$arguments143['id'] = NULL;
$arguments143['lang'] = NULL;
$arguments143['style'] = NULL;
$arguments143['title'] = NULL;
$arguments143['accesskey'] = NULL;
$arguments143['tabindex'] = NULL;
$arguments143['onclick'] = NULL;
$arguments143['size'] = NULL;
$arguments143['disabled'] = NULL;
$arguments143['options'] = NULL;
$arguments143['optionsAfterContent'] = false;
$arguments143['optionValueField'] = NULL;
$arguments143['optionLabelField'] = NULL;
$arguments143['sortByOptionLabel'] = false;
$arguments143['selectAllByDefault'] = false;
$arguments143['errorClass'] = 'f3-form-error';
$arguments143['prependOptionLabel'] = NULL;
$arguments143['prependOptionValue'] = NULL;
$arguments143['multiple'] = false;
$arguments143['required'] = false;
$arguments143['property'] = 'archived';
$arguments143['class'] = 'form-control';
// Rendering Array
$array145 = array();
$array145['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['languageKey'] = NULL;
$arguments146['alternativeLanguageKeys'] = NULL;
$arguments146['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.active';
$array145['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['key'] = NULL;
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$arguments148['languageKey'] = NULL;
$arguments148['alternativeLanguageKeys'] = NULL;
$arguments148['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.archived';
$array145['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
$arguments143['options'] = $array145;
$arguments143['id'] = 'archived';

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output140 .= '
								</div>
							</div>
							';
return $output140;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array138 = array (
);$array137['0'] = $renderingContext->getVariableProvider()->getByPath('filters.archived', $array138);

$expression139 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);
$arguments135['__thenClosure'] = $renderChildrenClosure136;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
							<div class="form-group">
								<label for="sortingField" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['key'] = NULL;
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['languageKey'] = NULL;
$arguments156['alternativeLanguageKeys'] = NULL;
$arguments156['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy';

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output155 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['additionalAttributes'] = NULL;
$arguments158['data'] = NULL;
$arguments158['name'] = NULL;
$arguments158['value'] = NULL;
$arguments158['property'] = NULL;
$arguments158['class'] = NULL;
$arguments158['dir'] = NULL;
$arguments158['id'] = NULL;
$arguments158['lang'] = NULL;
$arguments158['style'] = NULL;
$arguments158['title'] = NULL;
$arguments158['accesskey'] = NULL;
$arguments158['tabindex'] = NULL;
$arguments158['onclick'] = NULL;
$arguments158['size'] = NULL;
$arguments158['disabled'] = NULL;
$arguments158['options'] = NULL;
$arguments158['optionsAfterContent'] = false;
$arguments158['optionValueField'] = NULL;
$arguments158['optionLabelField'] = NULL;
$arguments158['sortByOptionLabel'] = false;
$arguments158['selectAllByDefault'] = false;
$arguments158['errorClass'] = 'f3-form-error';
$arguments158['prependOptionLabel'] = NULL;
$arguments158['prependOptionValue'] = NULL;
$arguments158['multiple'] = false;
$arguments158['required'] = false;
$arguments158['class'] = 'form-control';
$arguments158['property'] = 'sortingField';
// Rendering Array
$array160 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['languageKey'] = NULL;
$arguments161['alternativeLanguageKeys'] = NULL;
$arguments161['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.title';
$array160['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['key'] = NULL;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['languageKey'] = NULL;
$arguments163['alternativeLanguageKeys'] = NULL;
$arguments163['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.datetime';
$array160['datetime'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['key'] = NULL;
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['languageKey'] = NULL;
$arguments165['alternativeLanguageKeys'] = NULL;
$arguments165['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.tstamp';
$array160['tstamp'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['key'] = NULL;
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['languageKey'] = NULL;
$arguments167['alternativeLanguageKeys'] = NULL;
$arguments167['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive';
$array160['archive'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['key'] = NULL;
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['languageKey'] = NULL;
$arguments169['alternativeLanguageKeys'] = NULL;
$arguments169['key'] = 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel';
$array160['author'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);
$arguments158['options'] = $array160;
$arguments158['id'] = 'sortingField';

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output155 .= '
								</div>
								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['name'] = NULL;
$arguments171['value'] = NULL;
$arguments171['property'] = NULL;
$arguments171['class'] = NULL;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['title'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$arguments171['size'] = NULL;
$arguments171['disabled'] = NULL;
$arguments171['options'] = NULL;
$arguments171['optionsAfterContent'] = false;
$arguments171['optionValueField'] = NULL;
$arguments171['optionLabelField'] = NULL;
$arguments171['sortByOptionLabel'] = false;
$arguments171['selectAllByDefault'] = false;
$arguments171['errorClass'] = 'f3-form-error';
$arguments171['prependOptionLabel'] = NULL;
$arguments171['prependOptionValue'] = NULL;
$arguments171['multiple'] = false;
$arguments171['required'] = false;
$arguments171['class'] = 'form-control';
$arguments171['property'] = 'sortingDirection';
// Rendering Array
$array173 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$arguments174['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.asc';
$array173['asc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['key'] = NULL;
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['languageKey'] = NULL;
$arguments176['alternativeLanguageKeys'] = NULL;
$arguments176['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.desc';
$array173['desc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
$arguments171['options'] = $array173;
$arguments171['id'] = 'sortingDirection';

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output155 .= '
								</div>
							</div>
							';
return $output155;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('filters.sortingField', $array153);

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments150['__thenClosure'] = $renderChildrenClosure151;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
							<div class="form-group">
								<label for="recursive" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['key'] = NULL;
$arguments184['id'] = NULL;
$arguments184['default'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['extensionName'] = NULL;
$arguments184['languageKey'] = NULL;
$arguments184['alternativeLanguageKeys'] = NULL;
$arguments184['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.recursive';

$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);

$output183 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['additionalAttributes'] = NULL;
$arguments186['data'] = NULL;
$arguments186['name'] = NULL;
$arguments186['value'] = NULL;
$arguments186['property'] = NULL;
$arguments186['autofocus'] = NULL;
$arguments186['disabled'] = NULL;
$arguments186['maxlength'] = NULL;
$arguments186['readonly'] = NULL;
$arguments186['size'] = NULL;
$arguments186['placeholder'] = NULL;
$arguments186['pattern'] = NULL;
$arguments186['errorClass'] = 'f3-form-error';
$arguments186['class'] = NULL;
$arguments186['dir'] = NULL;
$arguments186['id'] = NULL;
$arguments186['lang'] = NULL;
$arguments186['style'] = NULL;
$arguments186['title'] = NULL;
$arguments186['accesskey'] = NULL;
$arguments186['tabindex'] = NULL;
$arguments186['onclick'] = NULL;
$arguments186['required'] = false;
$arguments186['type'] = 'text';
$arguments186['type'] = 'number';
// Rendering Array
$array188 = array();
$array188['min'] = 0;
$arguments186['additionalAttributes'] = $array188;
$arguments186['property'] = 'recursive';
$arguments186['id'] = 'recursive';
$arguments186['class'] = 'form-control';

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output183 .= '
								</div>
							</div>
							';
return $output183;
};
$arguments178 = array();
$arguments178['then'] = NULL;
$arguments178['else'] = NULL;
$arguments178['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array181 = array (
);$array180['0'] = $renderingContext->getVariableProvider()->getByPath('filters.number', $array181);

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments178['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$arguments178['__thenClosure'] = $renderChildrenClosure179;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output71 .= '
							<div class="form-group">
								<div class="col-xs-offset-4 col-xs-8">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['name'] = NULL;
$arguments189['value'] = NULL;
$arguments189['property'] = NULL;
$arguments189['disabled'] = NULL;
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['languageKey'] = NULL;
$arguments191['alternativeLanguageKeys'] = NULL;
$arguments191['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments189['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);
$arguments189['class'] = 'btn btn-primary';

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output71 .= '
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
							<div class="category-tree">
								<div class="form-group">
									<div class="tree-wrapper">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['section'] = NULL;
$arguments199['partial'] = NULL;
$arguments199['delegate'] = NULL;
$arguments199['renderable'] = NULL;
$arguments199['arguments'] = array (
);
$arguments199['optional'] = false;
$arguments199['default'] = NULL;
$arguments199['contentAs'] = NULL;
$arguments199['debug'] = true;
$arguments199['section'] = 'categoryTree';
// Rendering Array
$array201 = array();
$array202 = array (
);$array201['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array202);
$array203 = array (
);$array201['categories'] = $renderingContext->getVariableProvider()->getByPath('categories', $array203);
$array201['class'] = 'list-tree';
$arguments199['arguments'] = $array201;

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
									</div>
								</div>

								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
									<div class="form-group">
										<label for="categoryConjunction" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['languageKey'] = NULL;
$arguments216['alternativeLanguageKeys'] = NULL;
$arguments216['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.categoryConjunction';

$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output215 .= '
										</label>

										<div class="col-xs-4">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['additionalAttributes'] = NULL;
$arguments218['data'] = NULL;
$arguments218['name'] = NULL;
$arguments218['value'] = NULL;
$arguments218['property'] = NULL;
$arguments218['class'] = NULL;
$arguments218['dir'] = NULL;
$arguments218['id'] = NULL;
$arguments218['lang'] = NULL;
$arguments218['style'] = NULL;
$arguments218['title'] = NULL;
$arguments218['accesskey'] = NULL;
$arguments218['tabindex'] = NULL;
$arguments218['onclick'] = NULL;
$arguments218['size'] = NULL;
$arguments218['disabled'] = NULL;
$arguments218['options'] = NULL;
$arguments218['optionsAfterContent'] = false;
$arguments218['optionValueField'] = NULL;
$arguments218['optionLabelField'] = NULL;
$arguments218['sortByOptionLabel'] = false;
$arguments218['selectAllByDefault'] = false;
$arguments218['errorClass'] = 'f3-form-error';
$arguments218['prependOptionLabel'] = NULL;
$arguments218['prependOptionValue'] = NULL;
$arguments218['multiple'] = false;
$arguments218['required'] = false;
$arguments218['class'] = 'form-control';
$arguments218['property'] = 'categoryConjunction';
$arguments218['id'] = 'categoryConjunction';
// Rendering Array
$array220 = array();
$array220['AND'] = 'AND';
$array220['OR'] = 'OR';
$array220['notor'] = 'notor';
$array220['notand'] = 'notand';
$arguments218['options'] = $array220;

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output215 .= '
										</div>
									</div>
									';
return $output215;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categoryConjunction', $array213);

$expression214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = $renderChildrenClosure211;

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '

									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
									<div class="form-group">
										<label for="includeSubCategories" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.includeSubCategories';

$output226 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output226 .= '
										</label>

										<div class="col-xs-8">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['additionalAttributes'] = NULL;
$arguments229['data'] = NULL;
$arguments229['name'] = NULL;
$arguments229['value'] = NULL;
$arguments229['property'] = NULL;
$arguments229['disabled'] = NULL;
$arguments229['errorClass'] = 'f3-form-error';
$arguments229['class'] = NULL;
$arguments229['dir'] = NULL;
$arguments229['id'] = NULL;
$arguments229['lang'] = NULL;
$arguments229['style'] = NULL;
$arguments229['title'] = NULL;
$arguments229['accesskey'] = NULL;
$arguments229['tabindex'] = NULL;
$arguments229['onclick'] = NULL;
$arguments229['checked'] = NULL;
$arguments229['multiple'] = false;
$arguments229['class'] = 'checkbox';
$arguments229['property'] = 'includeSubCategories';
$arguments229['value'] = 1;
$arguments229['id'] = 'includeSubCategories';

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output226 .= '
										</div>
									</div>
									';
return $output226;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('filters.includeSubCategories', $array224);

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = $renderChildrenClosure222;

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output209 .= '
								';
return $output209;
};
$arguments204 = array();
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$arguments204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['0'] = $renderingContext->getVariableProvider()->getByPath('categories', $array207);

$expression208 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array206)
					),
					$renderingContext
				);
$arguments204['__thenClosure'] = $renderChildrenClosure205;

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output198 .= '
							</div>
							';
return $output198;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categories', $array196);

$expression197 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$arguments193['__thenClosure'] = $renderChildrenClosure194;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output71 .= '
						</div>
					</div>
				</div>
			</div>
		';
return $output71;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['action'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['controller'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['pluginName'] = NULL;
$arguments66['pageUid'] = NULL;
$arguments66['object'] = NULL;
$arguments66['pageType'] = 0;
$arguments66['noCache'] = false;
$arguments66['noCacheHash'] = false;
$arguments66['section'] = '';
$arguments66['format'] = '';
$arguments66['additionalParams'] = array (
);
$arguments66['absolute'] = false;
$arguments66['addQueryString'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['addQueryStringMethod'] = 'GET';
$arguments66['fieldNamePrefix'] = NULL;
$arguments66['actionUri'] = NULL;
$arguments66['objectName'] = NULL;
$arguments66['hiddenFieldClassName'] = NULL;
$arguments66['enctype'] = NULL;
$arguments66['method'] = NULL;
$arguments66['name'] = NULL;
$arguments66['onreset'] = NULL;
$arguments66['onsubmit'] = NULL;
$arguments66['target'] = NULL;
$arguments66['novalidate'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['id'] = 'administrationForm';
$arguments66['name'] = 'demand';
$array68 = array (
);$arguments66['object'] = $renderingContext->getVariableProvider()->getByPath('demand', $array68);
$arguments66['method'] = 'get';
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['autoSubmitForm'] = $renderingContext->getVariableProvider()->getByPath('autoSubmitForm', $array70);
$arguments66['data'] = $array69;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
	';
return $output65;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('showSearchForm', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments60['__thenClosure'] = $renderChildrenClosure61;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output28 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$array255 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array255);
};
$arguments253 = array();
$arguments253['value'] = NULL;

$output252 .= isset($arguments253['value']) ? $arguments253['value'] : $renderChildrenClosure254();

$output252 .= '
			</div>
		';
return $output252;
};
$arguments250 = array();

$output249 .= '';

$output249 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['key'] = NULL;
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['languageKey'] = NULL;
$arguments259['alternativeLanguageKeys'] = NULL;
$arguments259['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output258 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['key'] = NULL;
$arguments261['id'] = NULL;
$arguments261['default'] = NULL;
$arguments261['arguments'] = NULL;
$arguments261['extensionName'] = NULL;
$arguments261['languageKey'] = NULL;
$arguments261['alternativeLanguageKeys'] = NULL;
$arguments261['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext)]);

$output258 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['key'] = NULL;
$arguments265['id'] = NULL;
$arguments265['default'] = NULL;
$arguments265['arguments'] = NULL;
$arguments265['extensionName'] = NULL;
$arguments265['languageKey'] = NULL;
$arguments265['alternativeLanguageKeys'] = NULL;
$arguments265['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext)]);
};
$arguments263 = array();
$arguments263['additionalAttributes'] = NULL;
$arguments263['data'] = NULL;
$arguments263['class'] = NULL;
$arguments263['dir'] = NULL;
$arguments263['id'] = NULL;
$arguments263['lang'] = NULL;
$arguments263['style'] = NULL;
$arguments263['title'] = NULL;
$arguments263['accesskey'] = NULL;
$arguments263['tabindex'] = NULL;
$arguments263['onclick'] = NULL;
$arguments263['name'] = NULL;
$arguments263['rel'] = NULL;
$arguments263['rev'] = NULL;
$arguments263['target'] = NULL;
$arguments263['action'] = NULL;
$arguments263['controller'] = NULL;
$arguments263['extensionName'] = NULL;
$arguments263['pluginName'] = NULL;
$arguments263['pageUid'] = NULL;
$arguments263['pageType'] = NULL;
$arguments263['noCache'] = NULL;
$arguments263['noCacheHash'] = NULL;
$arguments263['section'] = NULL;
$arguments263['format'] = NULL;
$arguments263['linkAccessRestrictedPages'] = NULL;
$arguments263['additionalParams'] = NULL;
$arguments263['absolute'] = NULL;
$arguments263['addQueryString'] = NULL;
$arguments263['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments263['addQueryStringMethod'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['action'] = 'newsPidListing';
$arguments263['class'] = 'btn btn-info';

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output258 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output258;
};
$arguments256 = array();
$arguments256['if'] = NULL;

$output249 .= '';

$output249 .= '
	';
return $output249;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['0'] = $renderingContext->getVariableProvider()->getByPath('newsCount', $array247);

$expression248 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array246)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$array236 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array236);
};
$arguments234 = array();
$arguments234['value'] = NULL;

$output233 .= isset($arguments234['value']) ? $arguments234['value'] : $renderChildrenClosure235();

$output233 .= '
			</div>
		';
return $output233;
};
$arguments231['__elseClosures'][] = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['key'] = NULL;
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$arguments238['languageKey'] = NULL;
$arguments238['alternativeLanguageKeys'] = NULL;
$arguments238['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext)]);

$output237 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['languageKey'] = NULL;
$arguments240['alternativeLanguageKeys'] = NULL;
$arguments240['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output237 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['key'] = NULL;
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['languageKey'] = NULL;
$arguments244['alternativeLanguageKeys'] = NULL;
$arguments244['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext)]);
};
$arguments242 = array();
$arguments242['additionalAttributes'] = NULL;
$arguments242['data'] = NULL;
$arguments242['class'] = NULL;
$arguments242['dir'] = NULL;
$arguments242['id'] = NULL;
$arguments242['lang'] = NULL;
$arguments242['style'] = NULL;
$arguments242['title'] = NULL;
$arguments242['accesskey'] = NULL;
$arguments242['tabindex'] = NULL;
$arguments242['onclick'] = NULL;
$arguments242['name'] = NULL;
$arguments242['rel'] = NULL;
$arguments242['rev'] = NULL;
$arguments242['target'] = NULL;
$arguments242['action'] = NULL;
$arguments242['controller'] = NULL;
$arguments242['extensionName'] = NULL;
$arguments242['pluginName'] = NULL;
$arguments242['pageUid'] = NULL;
$arguments242['pageType'] = NULL;
$arguments242['noCache'] = NULL;
$arguments242['noCacheHash'] = NULL;
$arguments242['section'] = NULL;
$arguments242['format'] = NULL;
$arguments242['linkAccessRestrictedPages'] = NULL;
$arguments242['additionalParams'] = NULL;
$arguments242['absolute'] = NULL;
$arguments242['addQueryString'] = NULL;
$arguments242['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments242['addQueryStringMethod'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['action'] = 'newsPidListing';
$arguments242['class'] = 'btn btn-info';

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output237 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output237;
};

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output28 .= '
	<script type="text/javascript">
		T3_THIS_LOCATION = ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$array269 = array (
);return $renderingContext->getVariableProvider()->getByPath('requestUri', $array269);
};
$arguments267 = array();
$arguments267['value'] = NULL;

$output28 .= isset($arguments267['value']) ? $arguments267['value'] : $renderChildrenClosure268();

$output28 .= ';

        function jumpToUrl(URL) {
            window.location.href = URL;
            return false;
        }
        function jumpExt(URL,anchor) {	//
            var anc = anchor?anchor:"";
            window.location.href = URL+(T3_THIS_LOCATION?"&returnUrl="+T3_THIS_LOCATION:"")+anc;
            return false;
        }
        function jumpSelf(URL) {	//
            window.location.href = URL+(T3_RETURN_URL?"&returnUrl="+T3_RETURN_URL:"");
            return false;
        }
	</script>
';

return $output28;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output270 = '';

$output270 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['name'] = NULL;
$arguments271['name'] = 'Backend/Default';

$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output270 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
	<ul class="';
$array276 = array (
);
$output275 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array276)]);

$output275 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
			<li>
				<label title="';
$array281 = array (
);
$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array281)]);

$output280 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$array285 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.item.title', $array285);
};
$arguments282 = array();
$arguments282['value'] = NULL;
$arguments282['keepQuotes'] = false;
$arguments282['encoding'] = 'UTF-8';
$arguments282['doubleEncode'] = true;
$value284 = ($arguments282['value'] !== NULL ? $arguments282['value'] : $renderChildrenClosure283());

$output280 .= !is_string($value284) && !(is_object($value284) && method_exists($value284, '__toString')) ? $value284 : htmlspecialchars($value284, ($arguments282['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments282['encoding'], $arguments282['doubleEncode']);

$output280 .= '">
					<input type="checkbox" ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['id'] = NULL;
$arguments286['categories'] = array (
);
$array288 = array (
);$arguments286['id'] = $renderingContext->getVariableProvider()->getByPath('category.item.uid', $array288);
$array289 = array (
);$arguments286['categories'] = $renderingContext->getVariableProvider()->getByPath('demand.selectedCategories', $array289);

$output280 .= GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output280 .= ' name="tx_news_web_newsadministration[demand][selectedCategories][]" value="';
$array290 = array (
);
$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array290)]);

$output280 .= '" /> ';
$array291 = array (
);
$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.title', $array291)]);

$output280 .= '
				</label>

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['section'] = NULL;
$arguments298['partial'] = NULL;
$arguments298['delegate'] = NULL;
$arguments298['renderable'] = NULL;
$arguments298['arguments'] = array (
);
$arguments298['optional'] = false;
$arguments298['default'] = NULL;
$arguments298['contentAs'] = NULL;
$arguments298['debug'] = true;
$arguments298['section'] = 'categoryTree';
// Rendering Array
$array300 = array();
$array301 = array (
);$array300['categories'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array301);
$array302 = array (
);$array300['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array302);
$arguments298['arguments'] = $array300;

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output297 .= '
				';
return $output297;
};
$arguments292 = array();
$arguments292['then'] = NULL;
$arguments292['else'] = NULL;
$arguments292['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array295);

$expression296 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments292['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$arguments292['__thenClosure'] = $renderChildrenClosure293;

$output280 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output280 .= '
			</li>
		';
return $output280;
};
$arguments277 = array();
$arguments277['each'] = NULL;
$arguments277['as'] = NULL;
$arguments277['key'] = NULL;
$arguments277['reverse'] = false;
$arguments277['iteration'] = NULL;
$array279 = array (
);$arguments277['each'] = $renderingContext->getVariableProvider()->getByPath('categories', $array279);
$arguments277['as'] = 'category';

$output275 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output275 .= '
	</ul>
';
return $output275;
};
$arguments273 = array();
$arguments273['name'] = NULL;
$arguments273['name'] = 'categoryTree';

$output270 .= NULL;

$output270 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['key'] = NULL;
$arguments306['id'] = NULL;
$arguments306['default'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['languageKey'] = NULL;
$arguments306['alternativeLanguageKeys'] = NULL;
$arguments306['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.title';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext)]);

$output305 .= '
	</h1>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$arguments320['languageKey'] = NULL;
$arguments320['alternativeLanguageKeys'] = NULL;
$arguments320['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.why.text';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output319 .= '
			<br>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['identifier'] = NULL;
$arguments325['size'] = 'small';
$arguments325['overlay'] = NULL;
$arguments325['state'] = 'default';
$arguments325['alternativeMarkupIdentifier'] = NULL;
$arguments325['identifier'] = 'ext-news-donation';

$output324 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['key'] = NULL;
$arguments327['id'] = NULL;
$arguments327['default'] = NULL;
$arguments327['arguments'] = NULL;
$arguments327['extensionName'] = NULL;
$arguments327['languageKey'] = NULL;
$arguments327['alternativeLanguageKeys'] = NULL;
$arguments327['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.link';

$output324 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext)]);

$output324 .= '
				';
return $output324;
};
$arguments322 = array();
$arguments322['additionalAttributes'] = NULL;
$arguments322['data'] = NULL;
$arguments322['class'] = NULL;
$arguments322['dir'] = NULL;
$arguments322['id'] = NULL;
$arguments322['lang'] = NULL;
$arguments322['style'] = NULL;
$arguments322['title'] = NULL;
$arguments322['accesskey'] = NULL;
$arguments322['tabindex'] = NULL;
$arguments322['onclick'] = NULL;
$arguments322['name'] = NULL;
$arguments322['rel'] = NULL;
$arguments322['rev'] = NULL;
$arguments322['target'] = NULL;
$arguments322['action'] = NULL;
$arguments322['controller'] = NULL;
$arguments322['extensionName'] = NULL;
$arguments322['pluginName'] = NULL;
$arguments322['pageUid'] = NULL;
$arguments322['pageType'] = NULL;
$arguments322['noCache'] = NULL;
$arguments322['noCacheHash'] = NULL;
$arguments322['section'] = NULL;
$arguments322['format'] = NULL;
$arguments322['linkAccessRestrictedPages'] = NULL;
$arguments322['additionalParams'] = NULL;
$arguments322['absolute'] = NULL;
$arguments322['addQueryString'] = NULL;
$arguments322['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments322['addQueryStringMethod'] = NULL;
$arguments322['arguments'] = NULL;
$arguments322['action'] = 'donate';
$arguments322['class'] = 'btn btn-default';

$output319 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output319 .= '
		';
return $output319;
};
$arguments314 = array();
$arguments314['message'] = NULL;
$arguments314['title'] = NULL;
$arguments314['state'] = -2;
$arguments314['iconName'] = NULL;
$arguments314['disableIcon'] = false;
$output316 = '';

$output316 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['key'] = NULL;
$arguments317['id'] = NULL;
$arguments317['default'] = NULL;
$arguments317['arguments'] = NULL;
$arguments317['extensionName'] = NULL;
$arguments317['languageKey'] = NULL;
$arguments317['alternativeLanguageKeys'] = NULL;
$arguments317['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.support';

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);
$arguments314['title'] = $output316;
$arguments314['state'] = -1;
$renderChildrenClosure315 = ($arguments314['message'] !== null) ? function() use ($arguments314) { return $arguments314['message']; } : $renderChildrenClosure315;
$output313 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
	';
return $output313;
};
$arguments308 = array();
$arguments308['then'] = NULL;
$arguments308['else'] = NULL;
$arguments308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['0'] = $renderingContext->getVariableProvider()->getByPath('showSupportArea', $array311);

$expression312 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array310)
					),
					$renderingContext
				);
$arguments308['__thenClosure'] = $renderChildrenClosure309;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output305 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output334 = '';

$output334 .= '
		<div class="alert alert-info">
			<div class="message-body">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['key'] = NULL;
$arguments335['id'] = NULL;
$arguments335['default'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['extensionName'] = NULL;
$arguments335['languageKey'] = NULL;
$arguments335['alternativeLanguageKeys'] = NULL;
$arguments335['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nopageselected';

$output334 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext)]);

$output334 .= '
			</div>
		</div>
	';
return $output334;
};
$arguments329 = array();
$arguments329['then'] = NULL;
$arguments329['else'] = NULL;
$arguments329['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array331 = array();
$array332 = array (
);$array331['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array332);
$array331['1'] = ' == 0';

$expression333 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments329['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression333(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array331)
					),
					$renderingContext
				);
$arguments329['__thenClosure'] = $renderChildrenClosure330;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output305 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
			<input type="hidden" name="formSubmitted" value="1">
            <input type="hidden" name="route" value="/module/web/NewsAdministration/">
            <input type="hidden" name="token" value="';
$array349 = array (
);
$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array349)]);

$output348 .= '">
			<input type="hidden" name="id" value="';
$array350 = array (
);
$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page', $array350)]);

$output348 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['additionalAttributes'] = NULL;
$arguments351['data'] = NULL;
$arguments351['name'] = NULL;
$arguments351['value'] = NULL;
$arguments351['property'] = NULL;
$arguments351['disabled'] = NULL;
$arguments351['errorClass'] = 'f3-form-error';
$arguments351['class'] = NULL;
$arguments351['dir'] = NULL;
$arguments351['id'] = NULL;
$arguments351['lang'] = NULL;
$arguments351['style'] = NULL;
$arguments351['title'] = NULL;
$arguments351['accesskey'] = NULL;
$arguments351['tabindex'] = NULL;
$arguments351['onclick'] = NULL;
$arguments351['checked'] = NULL;
$arguments351['multiple'] = false;
$arguments351['style'] = 'display:none';
$arguments351['property'] = 'selectedCategories';
$arguments351['value'] = 0;

$output348 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output348 .= '

			<div id="setting-container" style="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$arguments353['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('hideForm', $array356);

$expression357 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments353['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array355)
					),
					$renderingContext
				);
$arguments353['then'] = 'display:none';
$arguments353['else'] = '';

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output348 .= '">
				<div class="settings">
					<div class="row form-horizontal">
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
							<div class="form-group">
								<label for="searchWord" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['key'] = NULL;
$arguments364['id'] = NULL;
$arguments364['default'] = NULL;
$arguments364['arguments'] = NULL;
$arguments364['extensionName'] = NULL;
$arguments364['languageKey'] = NULL;
$arguments364['alternativeLanguageKeys'] = NULL;
$arguments364['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.searchWord';

$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output363 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['additionalAttributes'] = NULL;
$arguments366['data'] = NULL;
$arguments366['name'] = NULL;
$arguments366['value'] = NULL;
$arguments366['property'] = NULL;
$arguments366['autofocus'] = NULL;
$arguments366['disabled'] = NULL;
$arguments366['maxlength'] = NULL;
$arguments366['readonly'] = NULL;
$arguments366['size'] = NULL;
$arguments366['placeholder'] = NULL;
$arguments366['pattern'] = NULL;
$arguments366['errorClass'] = 'f3-form-error';
$arguments366['class'] = NULL;
$arguments366['dir'] = NULL;
$arguments366['id'] = NULL;
$arguments366['lang'] = NULL;
$arguments366['style'] = NULL;
$arguments366['title'] = NULL;
$arguments366['accesskey'] = NULL;
$arguments366['tabindex'] = NULL;
$arguments366['onclick'] = NULL;
$arguments366['required'] = false;
$arguments366['type'] = 'text';
$arguments366['property'] = 'searchWord';
$arguments366['id'] = 'searchWord';
$arguments366['class'] = 'form-control t3js-clearable';

$output363 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output363 .= '
								</div>
							</div>
							';
return $output363;
};
$arguments358 = array();
$arguments358['then'] = NULL;
$arguments358['else'] = NULL;
$arguments358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('filters.searchWord', $array361);

$expression362 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array360)
					),
					$renderingContext
				);
$arguments358['__thenClosure'] = $renderChildrenClosure359;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output348 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['key'] = NULL;
$arguments374['id'] = NULL;
$arguments374['default'] = NULL;
$arguments374['arguments'] = NULL;
$arguments374['extensionName'] = NULL;
$arguments374['languageKey'] = NULL;
$arguments374['alternativeLanguageKeys'] = NULL;
$arguments374['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.timeRange';

$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output373 .= '
								</label>

								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['additionalAttributes'] = NULL;
$arguments376['data'] = NULL;
$arguments376['name'] = NULL;
$arguments376['value'] = NULL;
$arguments376['property'] = NULL;
$arguments376['autofocus'] = NULL;
$arguments376['disabled'] = NULL;
$arguments376['maxlength'] = NULL;
$arguments376['readonly'] = NULL;
$arguments376['size'] = NULL;
$arguments376['placeholder'] = NULL;
$arguments376['pattern'] = NULL;
$arguments376['errorClass'] = 'f3-form-error';
$arguments376['class'] = NULL;
$arguments376['dir'] = NULL;
$arguments376['id'] = NULL;
$arguments376['lang'] = NULL;
$arguments376['style'] = NULL;
$arguments376['title'] = NULL;
$arguments376['accesskey'] = NULL;
$arguments376['tabindex'] = NULL;
$arguments376['onclick'] = NULL;
$arguments376['required'] = false;
$arguments376['type'] = 'text';
$arguments376['type'] = 'datetime';
$arguments376['property'] = 'timeRestriction';
$arguments376['id'] = 'timeRestriction';
$arguments376['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array378 = array();
$array378['date-type'] = 'datetime';
$array378['date-offset'] = 0;
$arguments376['data'] = $array378;

$output373 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output373 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestriction">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									-
								</label>
								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments379 = array();
$arguments379['additionalAttributes'] = NULL;
$arguments379['data'] = NULL;
$arguments379['name'] = NULL;
$arguments379['value'] = NULL;
$arguments379['property'] = NULL;
$arguments379['autofocus'] = NULL;
$arguments379['disabled'] = NULL;
$arguments379['maxlength'] = NULL;
$arguments379['readonly'] = NULL;
$arguments379['size'] = NULL;
$arguments379['placeholder'] = NULL;
$arguments379['pattern'] = NULL;
$arguments379['errorClass'] = 'f3-form-error';
$arguments379['class'] = NULL;
$arguments379['dir'] = NULL;
$arguments379['id'] = NULL;
$arguments379['lang'] = NULL;
$arguments379['style'] = NULL;
$arguments379['title'] = NULL;
$arguments379['accesskey'] = NULL;
$arguments379['tabindex'] = NULL;
$arguments379['onclick'] = NULL;
$arguments379['required'] = false;
$arguments379['type'] = 'text';
$arguments379['type'] = 'datetime';
$arguments379['property'] = 'timeRestrictionHigh';
$arguments379['id'] = 'timeRestrictionHigh';
$arguments379['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array381 = array();
$array381['date-type'] = 'datetime';
$array381['date-offset'] = 0;
$arguments379['data'] = $array381;

$output373 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output373 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestrictionHigh">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							';
return $output373;
};
$arguments368 = array();
$arguments368['then'] = NULL;
$arguments368['else'] = NULL;
$arguments368['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['0'] = $renderingContext->getVariableProvider()->getByPath('filters.timeRestriction', $array371);

$expression372 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments368['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array370)
					),
					$renderingContext
				);
$arguments368['__thenClosure'] = $renderChildrenClosure369;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output348 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
							<div class="form-group">
								<label for="topNewsRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['key'] = NULL;
$arguments388['id'] = NULL;
$arguments388['default'] = NULL;
$arguments388['arguments'] = NULL;
$arguments388['extensionName'] = NULL;
$arguments388['languageKey'] = NULL;
$arguments388['alternativeLanguageKeys'] = NULL;
$arguments388['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction';

$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext)]);

$output387 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['additionalAttributes'] = NULL;
$arguments390['data'] = NULL;
$arguments390['name'] = NULL;
$arguments390['value'] = NULL;
$arguments390['property'] = NULL;
$arguments390['class'] = NULL;
$arguments390['dir'] = NULL;
$arguments390['id'] = NULL;
$arguments390['lang'] = NULL;
$arguments390['style'] = NULL;
$arguments390['title'] = NULL;
$arguments390['accesskey'] = NULL;
$arguments390['tabindex'] = NULL;
$arguments390['onclick'] = NULL;
$arguments390['size'] = NULL;
$arguments390['disabled'] = NULL;
$arguments390['options'] = NULL;
$arguments390['optionsAfterContent'] = false;
$arguments390['optionValueField'] = NULL;
$arguments390['optionLabelField'] = NULL;
$arguments390['sortByOptionLabel'] = false;
$arguments390['selectAllByDefault'] = false;
$arguments390['errorClass'] = 'f3-form-error';
$arguments390['prependOptionLabel'] = NULL;
$arguments390['prependOptionValue'] = NULL;
$arguments390['multiple'] = false;
$arguments390['required'] = false;
$arguments390['property'] = 'topNewsRestriction';
$arguments390['class'] = 'form-control';
// Rendering Array
$array392 = array();
$array392['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['key'] = NULL;
$arguments393['id'] = NULL;
$arguments393['default'] = NULL;
$arguments393['arguments'] = NULL;
$arguments393['extensionName'] = NULL;
$arguments393['languageKey'] = NULL;
$arguments393['alternativeLanguageKeys'] = NULL;
$arguments393['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.1';
$array392['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments395 = array();
$arguments395['key'] = NULL;
$arguments395['id'] = NULL;
$arguments395['default'] = NULL;
$arguments395['arguments'] = NULL;
$arguments395['extensionName'] = NULL;
$arguments395['languageKey'] = NULL;
$arguments395['alternativeLanguageKeys'] = NULL;
$arguments395['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.2';
$array392['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);
$arguments390['options'] = $array392;
$arguments390['id'] = 'topNewsRestriction';

$output387 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output387 .= '
								</div>
							</div>
							';
return $output387;
};
$arguments382 = array();
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['0'] = $renderingContext->getVariableProvider()->getByPath('filters.topNewsRestriction', $array385);

$expression386 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array384)
					),
					$renderingContext
				);
$arguments382['__thenClosure'] = $renderChildrenClosure383;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output348 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
							<div class="form-group">
								<label for="hidden" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['key'] = NULL;
$arguments403['id'] = NULL;
$arguments403['default'] = NULL;
$arguments403['arguments'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['languageKey'] = NULL;
$arguments403['alternativeLanguageKeys'] = NULL;
$arguments403['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext)]);

$output402 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['additionalAttributes'] = NULL;
$arguments405['data'] = NULL;
$arguments405['name'] = NULL;
$arguments405['value'] = NULL;
$arguments405['property'] = NULL;
$arguments405['class'] = NULL;
$arguments405['dir'] = NULL;
$arguments405['id'] = NULL;
$arguments405['lang'] = NULL;
$arguments405['style'] = NULL;
$arguments405['title'] = NULL;
$arguments405['accesskey'] = NULL;
$arguments405['tabindex'] = NULL;
$arguments405['onclick'] = NULL;
$arguments405['size'] = NULL;
$arguments405['disabled'] = NULL;
$arguments405['options'] = NULL;
$arguments405['optionsAfterContent'] = false;
$arguments405['optionValueField'] = NULL;
$arguments405['optionLabelField'] = NULL;
$arguments405['sortByOptionLabel'] = false;
$arguments405['selectAllByDefault'] = false;
$arguments405['errorClass'] = 'f3-form-error';
$arguments405['prependOptionLabel'] = NULL;
$arguments405['prependOptionValue'] = NULL;
$arguments405['multiple'] = false;
$arguments405['required'] = false;
$arguments405['property'] = 'hidden';
$arguments405['class'] = 'form-control';
// Rendering Array
$array407 = array();
$array407['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['key'] = NULL;
$arguments408['id'] = NULL;
$arguments408['default'] = NULL;
$arguments408['arguments'] = NULL;
$arguments408['extensionName'] = NULL;
$arguments408['languageKey'] = NULL;
$arguments408['alternativeLanguageKeys'] = NULL;
$arguments408['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.hidden';
$array407['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['key'] = NULL;
$arguments410['id'] = NULL;
$arguments410['default'] = NULL;
$arguments410['arguments'] = NULL;
$arguments410['extensionName'] = NULL;
$arguments410['languageKey'] = NULL;
$arguments410['alternativeLanguageKeys'] = NULL;
$arguments410['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.nonHidden';
$array407['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);
$arguments405['options'] = $array407;
$arguments405['id'] = 'hidden';

$output402 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output402 .= '
								</div>
							</div>
							';
return $output402;
};
$arguments397 = array();
$arguments397['then'] = NULL;
$arguments397['else'] = NULL;
$arguments397['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['0'] = $renderingContext->getVariableProvider()->getByPath('filters.hidden', $array400);

$expression401 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments397['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression401(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array399)
					),
					$renderingContext
				);
$arguments397['__thenClosure'] = $renderChildrenClosure398;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output348 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
							<div class="form-group">
								<label for="archived" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['key'] = NULL;
$arguments418['id'] = NULL;
$arguments418['default'] = NULL;
$arguments418['arguments'] = NULL;
$arguments418['extensionName'] = NULL;
$arguments418['languageKey'] = NULL;
$arguments418['alternativeLanguageKeys'] = NULL;
$arguments418['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction';

$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);

$output417 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['additionalAttributes'] = NULL;
$arguments420['data'] = NULL;
$arguments420['name'] = NULL;
$arguments420['value'] = NULL;
$arguments420['property'] = NULL;
$arguments420['class'] = NULL;
$arguments420['dir'] = NULL;
$arguments420['id'] = NULL;
$arguments420['lang'] = NULL;
$arguments420['style'] = NULL;
$arguments420['title'] = NULL;
$arguments420['accesskey'] = NULL;
$arguments420['tabindex'] = NULL;
$arguments420['onclick'] = NULL;
$arguments420['size'] = NULL;
$arguments420['disabled'] = NULL;
$arguments420['options'] = NULL;
$arguments420['optionsAfterContent'] = false;
$arguments420['optionValueField'] = NULL;
$arguments420['optionLabelField'] = NULL;
$arguments420['sortByOptionLabel'] = false;
$arguments420['selectAllByDefault'] = false;
$arguments420['errorClass'] = 'f3-form-error';
$arguments420['prependOptionLabel'] = NULL;
$arguments420['prependOptionValue'] = NULL;
$arguments420['multiple'] = false;
$arguments420['required'] = false;
$arguments420['property'] = 'archived';
$arguments420['class'] = 'form-control';
// Rendering Array
$array422 = array();
$array422['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['key'] = NULL;
$arguments423['id'] = NULL;
$arguments423['default'] = NULL;
$arguments423['arguments'] = NULL;
$arguments423['extensionName'] = NULL;
$arguments423['languageKey'] = NULL;
$arguments423['alternativeLanguageKeys'] = NULL;
$arguments423['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.active';
$array422['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['key'] = NULL;
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['languageKey'] = NULL;
$arguments425['alternativeLanguageKeys'] = NULL;
$arguments425['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.archived';
$array422['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);
$arguments420['options'] = $array422;
$arguments420['id'] = 'archived';

$output417 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output417 .= '
								</div>
							</div>
							';
return $output417;
};
$arguments412 = array();
$arguments412['then'] = NULL;
$arguments412['else'] = NULL;
$arguments412['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['0'] = $renderingContext->getVariableProvider()->getByPath('filters.archived', $array415);

$expression416 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments412['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression416(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)
					),
					$renderingContext
				);
$arguments412['__thenClosure'] = $renderChildrenClosure413;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output348 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
							<div class="form-group">
								<label for="sortingField" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['key'] = NULL;
$arguments433['id'] = NULL;
$arguments433['default'] = NULL;
$arguments433['arguments'] = NULL;
$arguments433['extensionName'] = NULL;
$arguments433['languageKey'] = NULL;
$arguments433['alternativeLanguageKeys'] = NULL;
$arguments433['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy';

$output432 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext)]);

$output432 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments435 = array();
$arguments435['additionalAttributes'] = NULL;
$arguments435['data'] = NULL;
$arguments435['name'] = NULL;
$arguments435['value'] = NULL;
$arguments435['property'] = NULL;
$arguments435['class'] = NULL;
$arguments435['dir'] = NULL;
$arguments435['id'] = NULL;
$arguments435['lang'] = NULL;
$arguments435['style'] = NULL;
$arguments435['title'] = NULL;
$arguments435['accesskey'] = NULL;
$arguments435['tabindex'] = NULL;
$arguments435['onclick'] = NULL;
$arguments435['size'] = NULL;
$arguments435['disabled'] = NULL;
$arguments435['options'] = NULL;
$arguments435['optionsAfterContent'] = false;
$arguments435['optionValueField'] = NULL;
$arguments435['optionLabelField'] = NULL;
$arguments435['sortByOptionLabel'] = false;
$arguments435['selectAllByDefault'] = false;
$arguments435['errorClass'] = 'f3-form-error';
$arguments435['prependOptionLabel'] = NULL;
$arguments435['prependOptionValue'] = NULL;
$arguments435['multiple'] = false;
$arguments435['required'] = false;
$arguments435['class'] = 'form-control';
$arguments435['property'] = 'sortingField';
// Rendering Array
$array437 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['key'] = NULL;
$arguments438['id'] = NULL;
$arguments438['default'] = NULL;
$arguments438['arguments'] = NULL;
$arguments438['extensionName'] = NULL;
$arguments438['languageKey'] = NULL;
$arguments438['alternativeLanguageKeys'] = NULL;
$arguments438['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.title';
$array437['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments440 = array();
$arguments440['key'] = NULL;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$arguments440['languageKey'] = NULL;
$arguments440['alternativeLanguageKeys'] = NULL;
$arguments440['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.datetime';
$array437['datetime'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments442 = array();
$arguments442['key'] = NULL;
$arguments442['id'] = NULL;
$arguments442['default'] = NULL;
$arguments442['arguments'] = NULL;
$arguments442['extensionName'] = NULL;
$arguments442['languageKey'] = NULL;
$arguments442['alternativeLanguageKeys'] = NULL;
$arguments442['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.tstamp';
$array437['tstamp'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments444 = array();
$arguments444['key'] = NULL;
$arguments444['id'] = NULL;
$arguments444['default'] = NULL;
$arguments444['arguments'] = NULL;
$arguments444['extensionName'] = NULL;
$arguments444['languageKey'] = NULL;
$arguments444['alternativeLanguageKeys'] = NULL;
$arguments444['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive';
$array437['archive'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['key'] = NULL;
$arguments446['id'] = NULL;
$arguments446['default'] = NULL;
$arguments446['arguments'] = NULL;
$arguments446['extensionName'] = NULL;
$arguments446['languageKey'] = NULL;
$arguments446['alternativeLanguageKeys'] = NULL;
$arguments446['key'] = 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel';
$array437['author'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);
$arguments435['options'] = $array437;
$arguments435['id'] = 'sortingField';

$output432 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output432 .= '
								</div>
								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['additionalAttributes'] = NULL;
$arguments448['data'] = NULL;
$arguments448['name'] = NULL;
$arguments448['value'] = NULL;
$arguments448['property'] = NULL;
$arguments448['class'] = NULL;
$arguments448['dir'] = NULL;
$arguments448['id'] = NULL;
$arguments448['lang'] = NULL;
$arguments448['style'] = NULL;
$arguments448['title'] = NULL;
$arguments448['accesskey'] = NULL;
$arguments448['tabindex'] = NULL;
$arguments448['onclick'] = NULL;
$arguments448['size'] = NULL;
$arguments448['disabled'] = NULL;
$arguments448['options'] = NULL;
$arguments448['optionsAfterContent'] = false;
$arguments448['optionValueField'] = NULL;
$arguments448['optionLabelField'] = NULL;
$arguments448['sortByOptionLabel'] = false;
$arguments448['selectAllByDefault'] = false;
$arguments448['errorClass'] = 'f3-form-error';
$arguments448['prependOptionLabel'] = NULL;
$arguments448['prependOptionValue'] = NULL;
$arguments448['multiple'] = false;
$arguments448['required'] = false;
$arguments448['class'] = 'form-control';
$arguments448['property'] = 'sortingDirection';
// Rendering Array
$array450 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['key'] = NULL;
$arguments451['id'] = NULL;
$arguments451['default'] = NULL;
$arguments451['arguments'] = NULL;
$arguments451['extensionName'] = NULL;
$arguments451['languageKey'] = NULL;
$arguments451['alternativeLanguageKeys'] = NULL;
$arguments451['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.asc';
$array450['asc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['key'] = NULL;
$arguments453['id'] = NULL;
$arguments453['default'] = NULL;
$arguments453['arguments'] = NULL;
$arguments453['extensionName'] = NULL;
$arguments453['languageKey'] = NULL;
$arguments453['alternativeLanguageKeys'] = NULL;
$arguments453['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.desc';
$array450['desc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);
$arguments448['options'] = $array450;
$arguments448['id'] = 'sortingDirection';

$output432 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output432 .= '
								</div>
							</div>
							';
return $output432;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
$array430 = array (
);$array429['0'] = $renderingContext->getVariableProvider()->getByPath('filters.sortingField', $array430);

$expression431 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression431(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments427['__thenClosure'] = $renderChildrenClosure428;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output348 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
							<div class="form-group">
								<label for="recursive" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments461 = array();
$arguments461['key'] = NULL;
$arguments461['id'] = NULL;
$arguments461['default'] = NULL;
$arguments461['arguments'] = NULL;
$arguments461['extensionName'] = NULL;
$arguments461['languageKey'] = NULL;
$arguments461['alternativeLanguageKeys'] = NULL;
$arguments461['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.recursive';

$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext)]);

$output460 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['additionalAttributes'] = NULL;
$arguments463['data'] = NULL;
$arguments463['name'] = NULL;
$arguments463['value'] = NULL;
$arguments463['property'] = NULL;
$arguments463['autofocus'] = NULL;
$arguments463['disabled'] = NULL;
$arguments463['maxlength'] = NULL;
$arguments463['readonly'] = NULL;
$arguments463['size'] = NULL;
$arguments463['placeholder'] = NULL;
$arguments463['pattern'] = NULL;
$arguments463['errorClass'] = 'f3-form-error';
$arguments463['class'] = NULL;
$arguments463['dir'] = NULL;
$arguments463['id'] = NULL;
$arguments463['lang'] = NULL;
$arguments463['style'] = NULL;
$arguments463['title'] = NULL;
$arguments463['accesskey'] = NULL;
$arguments463['tabindex'] = NULL;
$arguments463['onclick'] = NULL;
$arguments463['required'] = false;
$arguments463['type'] = 'text';
$arguments463['type'] = 'number';
// Rendering Array
$array465 = array();
$array465['min'] = 0;
$arguments463['additionalAttributes'] = $array465;
$arguments463['property'] = 'recursive';
$arguments463['id'] = 'recursive';
$arguments463['class'] = 'form-control';

$output460 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output460 .= '
								</div>
							</div>
							';
return $output460;
};
$arguments455 = array();
$arguments455['then'] = NULL;
$arguments455['else'] = NULL;
$arguments455['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array457 = array();
$array458 = array (
);$array457['0'] = $renderingContext->getVariableProvider()->getByPath('filters.number', $array458);

$expression459 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments455['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression459(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array457)
					),
					$renderingContext
				);
$arguments455['__thenClosure'] = $renderChildrenClosure456;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output348 .= '
							<div class="form-group">
								<div class="col-xs-offset-4 col-xs-8">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['additionalAttributes'] = NULL;
$arguments466['data'] = NULL;
$arguments466['name'] = NULL;
$arguments466['value'] = NULL;
$arguments466['property'] = NULL;
$arguments466['disabled'] = NULL;
$arguments466['class'] = NULL;
$arguments466['dir'] = NULL;
$arguments466['id'] = NULL;
$arguments466['lang'] = NULL;
$arguments466['style'] = NULL;
$arguments466['title'] = NULL;
$arguments466['accesskey'] = NULL;
$arguments466['tabindex'] = NULL;
$arguments466['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['key'] = NULL;
$arguments468['id'] = NULL;
$arguments468['default'] = NULL;
$arguments468['arguments'] = NULL;
$arguments468['extensionName'] = NULL;
$arguments468['languageKey'] = NULL;
$arguments468['alternativeLanguageKeys'] = NULL;
$arguments468['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments466['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);
$arguments466['class'] = 'btn btn-primary';

$output348 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output348 .= '
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output475 = '';

$output475 .= '
							<div class="category-tree">
								<div class="form-group">
									<div class="tree-wrapper">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['section'] = NULL;
$arguments476['partial'] = NULL;
$arguments476['delegate'] = NULL;
$arguments476['renderable'] = NULL;
$arguments476['arguments'] = array (
);
$arguments476['optional'] = false;
$arguments476['default'] = NULL;
$arguments476['contentAs'] = NULL;
$arguments476['debug'] = true;
$arguments476['section'] = 'categoryTree';
// Rendering Array
$array478 = array();
$array479 = array (
);$array478['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array479);
$array480 = array (
);$array478['categories'] = $renderingContext->getVariableProvider()->getByPath('categories', $array480);
$array478['class'] = 'list-tree';
$arguments476['arguments'] = $array478;

$output475 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output475 .= '
									</div>
								</div>

								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$output486 = '';

$output486 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$output492 = '';

$output492 .= '
									<div class="form-group">
										<label for="categoryConjunction" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['key'] = NULL;
$arguments493['id'] = NULL;
$arguments493['default'] = NULL;
$arguments493['arguments'] = NULL;
$arguments493['extensionName'] = NULL;
$arguments493['languageKey'] = NULL;
$arguments493['alternativeLanguageKeys'] = NULL;
$arguments493['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.categoryConjunction';

$output492 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext)]);

$output492 .= '
										</label>

										<div class="col-xs-4">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['additionalAttributes'] = NULL;
$arguments495['data'] = NULL;
$arguments495['name'] = NULL;
$arguments495['value'] = NULL;
$arguments495['property'] = NULL;
$arguments495['class'] = NULL;
$arguments495['dir'] = NULL;
$arguments495['id'] = NULL;
$arguments495['lang'] = NULL;
$arguments495['style'] = NULL;
$arguments495['title'] = NULL;
$arguments495['accesskey'] = NULL;
$arguments495['tabindex'] = NULL;
$arguments495['onclick'] = NULL;
$arguments495['size'] = NULL;
$arguments495['disabled'] = NULL;
$arguments495['options'] = NULL;
$arguments495['optionsAfterContent'] = false;
$arguments495['optionValueField'] = NULL;
$arguments495['optionLabelField'] = NULL;
$arguments495['sortByOptionLabel'] = false;
$arguments495['selectAllByDefault'] = false;
$arguments495['errorClass'] = 'f3-form-error';
$arguments495['prependOptionLabel'] = NULL;
$arguments495['prependOptionValue'] = NULL;
$arguments495['multiple'] = false;
$arguments495['required'] = false;
$arguments495['class'] = 'form-control';
$arguments495['property'] = 'categoryConjunction';
$arguments495['id'] = 'categoryConjunction';
// Rendering Array
$array497 = array();
$array497['AND'] = 'AND';
$array497['OR'] = 'OR';
$array497['notor'] = 'notor';
$array497['notand'] = 'notand';
$arguments495['options'] = $array497;

$output492 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output492 .= '
										</div>
									</div>
									';
return $output492;
};
$arguments487 = array();
$arguments487['then'] = NULL;
$arguments487['else'] = NULL;
$arguments487['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array489 = array();
$array490 = array (
);$array489['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categoryConjunction', $array490);

$expression491 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments487['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression491(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array489)
					),
					$renderingContext
				);
$arguments487['__thenClosure'] = $renderChildrenClosure488;

$output486 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output486 .= '

									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$output503 = '';

$output503 .= '
									<div class="form-group">
										<label for="includeSubCategories" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['key'] = NULL;
$arguments504['id'] = NULL;
$arguments504['default'] = NULL;
$arguments504['arguments'] = NULL;
$arguments504['extensionName'] = NULL;
$arguments504['languageKey'] = NULL;
$arguments504['alternativeLanguageKeys'] = NULL;
$arguments504['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.includeSubCategories';

$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext)]);

$output503 .= '
										</label>

										<div class="col-xs-8">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['additionalAttributes'] = NULL;
$arguments506['data'] = NULL;
$arguments506['name'] = NULL;
$arguments506['value'] = NULL;
$arguments506['property'] = NULL;
$arguments506['disabled'] = NULL;
$arguments506['errorClass'] = 'f3-form-error';
$arguments506['class'] = NULL;
$arguments506['dir'] = NULL;
$arguments506['id'] = NULL;
$arguments506['lang'] = NULL;
$arguments506['style'] = NULL;
$arguments506['title'] = NULL;
$arguments506['accesskey'] = NULL;
$arguments506['tabindex'] = NULL;
$arguments506['onclick'] = NULL;
$arguments506['checked'] = NULL;
$arguments506['multiple'] = false;
$arguments506['class'] = 'checkbox';
$arguments506['property'] = 'includeSubCategories';
$arguments506['value'] = 1;
$arguments506['id'] = 'includeSubCategories';

$output503 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output503 .= '
										</div>
									</div>
									';
return $output503;
};
$arguments498 = array();
$arguments498['then'] = NULL;
$arguments498['else'] = NULL;
$arguments498['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array500 = array();
$array501 = array (
);$array500['0'] = $renderingContext->getVariableProvider()->getByPath('filters.includeSubCategories', $array501);

$expression502 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments498['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression502(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array500)
					),
					$renderingContext
				);
$arguments498['__thenClosure'] = $renderChildrenClosure499;

$output486 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output486 .= '
								';
return $output486;
};
$arguments481 = array();
$arguments481['then'] = NULL;
$arguments481['else'] = NULL;
$arguments481['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array483 = array();
$array484 = array (
);$array483['0'] = $renderingContext->getVariableProvider()->getByPath('categories', $array484);

$expression485 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments481['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression485(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array483)
					),
					$renderingContext
				);
$arguments481['__thenClosure'] = $renderChildrenClosure482;

$output475 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output475 .= '
							</div>
							';
return $output475;
};
$arguments470 = array();
$arguments470['then'] = NULL;
$arguments470['else'] = NULL;
$arguments470['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array472 = array();
$array473 = array (
);$array472['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categories', $array473);

$expression474 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments470['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression474(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array472)
					),
					$renderingContext
				);
$arguments470['__thenClosure'] = $renderChildrenClosure471;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output348 .= '
						</div>
					</div>
				</div>
			</div>
		';
return $output348;
};
$arguments343 = array();
$arguments343['additionalAttributes'] = NULL;
$arguments343['data'] = NULL;
$arguments343['action'] = NULL;
$arguments343['arguments'] = array (
);
$arguments343['controller'] = NULL;
$arguments343['extensionName'] = NULL;
$arguments343['pluginName'] = NULL;
$arguments343['pageUid'] = NULL;
$arguments343['object'] = NULL;
$arguments343['pageType'] = 0;
$arguments343['noCache'] = false;
$arguments343['noCacheHash'] = false;
$arguments343['section'] = '';
$arguments343['format'] = '';
$arguments343['additionalParams'] = array (
);
$arguments343['absolute'] = false;
$arguments343['addQueryString'] = false;
$arguments343['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments343['addQueryStringMethod'] = 'GET';
$arguments343['fieldNamePrefix'] = NULL;
$arguments343['actionUri'] = NULL;
$arguments343['objectName'] = NULL;
$arguments343['hiddenFieldClassName'] = NULL;
$arguments343['enctype'] = NULL;
$arguments343['method'] = NULL;
$arguments343['name'] = NULL;
$arguments343['onreset'] = NULL;
$arguments343['onsubmit'] = NULL;
$arguments343['target'] = NULL;
$arguments343['novalidate'] = NULL;
$arguments343['class'] = NULL;
$arguments343['dir'] = NULL;
$arguments343['id'] = NULL;
$arguments343['lang'] = NULL;
$arguments343['style'] = NULL;
$arguments343['title'] = NULL;
$arguments343['accesskey'] = NULL;
$arguments343['tabindex'] = NULL;
$arguments343['onclick'] = NULL;
$arguments343['id'] = 'administrationForm';
$arguments343['name'] = 'demand';
$array345 = array (
);$arguments343['object'] = $renderingContext->getVariableProvider()->getByPath('demand', $array345);
$arguments343['method'] = 'get';
// Rendering Array
$array346 = array();
$array347 = array (
);$array346['autoSubmitForm'] = $renderingContext->getVariableProvider()->getByPath('autoSubmitForm', $array347);
$arguments343['data'] = $array346;

$output342 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output342 .= '
	';
return $output342;
};
$arguments337 = array();
$arguments337['then'] = NULL;
$arguments337['else'] = NULL;
$arguments337['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array339 = array();
$array340 = array (
);$array339['0'] = $renderingContext->getVariableProvider()->getByPath('showSearchForm', $array340);

$expression341 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments337['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression341(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array339)
					),
					$renderingContext
				);
$arguments337['__thenClosure'] = $renderChildrenClosure338;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output305 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
$output529 = '';

$output529 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
$array532 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array532);
};
$arguments530 = array();
$arguments530['value'] = NULL;

$output529 .= isset($arguments530['value']) ? $arguments530['value'] : $renderChildrenClosure531();

$output529 .= '
			</div>
		';
return $output529;
};
$arguments527 = array();

$output526 .= '';

$output526 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
$output535 = '';

$output535 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['key'] = NULL;
$arguments536['id'] = NULL;
$arguments536['default'] = NULL;
$arguments536['arguments'] = NULL;
$arguments536['extensionName'] = NULL;
$arguments536['languageKey'] = NULL;
$arguments536['alternativeLanguageKeys'] = NULL;
$arguments536['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext)]);

$output535 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments538 = array();
$arguments538['key'] = NULL;
$arguments538['id'] = NULL;
$arguments538['default'] = NULL;
$arguments538['arguments'] = NULL;
$arguments538['extensionName'] = NULL;
$arguments538['languageKey'] = NULL;
$arguments538['alternativeLanguageKeys'] = NULL;
$arguments538['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext)]);

$output535 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['key'] = NULL;
$arguments542['id'] = NULL;
$arguments542['default'] = NULL;
$arguments542['arguments'] = NULL;
$arguments542['extensionName'] = NULL;
$arguments542['languageKey'] = NULL;
$arguments542['alternativeLanguageKeys'] = NULL;
$arguments542['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext)]);
};
$arguments540 = array();
$arguments540['additionalAttributes'] = NULL;
$arguments540['data'] = NULL;
$arguments540['class'] = NULL;
$arguments540['dir'] = NULL;
$arguments540['id'] = NULL;
$arguments540['lang'] = NULL;
$arguments540['style'] = NULL;
$arguments540['title'] = NULL;
$arguments540['accesskey'] = NULL;
$arguments540['tabindex'] = NULL;
$arguments540['onclick'] = NULL;
$arguments540['name'] = NULL;
$arguments540['rel'] = NULL;
$arguments540['rev'] = NULL;
$arguments540['target'] = NULL;
$arguments540['action'] = NULL;
$arguments540['controller'] = NULL;
$arguments540['extensionName'] = NULL;
$arguments540['pluginName'] = NULL;
$arguments540['pageUid'] = NULL;
$arguments540['pageType'] = NULL;
$arguments540['noCache'] = NULL;
$arguments540['noCacheHash'] = NULL;
$arguments540['section'] = NULL;
$arguments540['format'] = NULL;
$arguments540['linkAccessRestrictedPages'] = NULL;
$arguments540['additionalParams'] = NULL;
$arguments540['absolute'] = NULL;
$arguments540['addQueryString'] = NULL;
$arguments540['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments540['addQueryStringMethod'] = NULL;
$arguments540['arguments'] = NULL;
$arguments540['action'] = 'newsPidListing';
$arguments540['class'] = 'btn btn-info';

$output535 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output535 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output535;
};
$arguments533 = array();
$arguments533['if'] = NULL;

$output526 .= '';

$output526 .= '
	';
return $output526;
};
$arguments508 = array();
$arguments508['then'] = NULL;
$arguments508['else'] = NULL;
$arguments508['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array523 = array();
$array524 = array (
);$array523['0'] = $renderingContext->getVariableProvider()->getByPath('newsCount', $array524);

$expression525 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments508['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression525(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array523)
					),
					$renderingContext
				);
$arguments508['__thenClosure'] = function() use ($renderingContext, $self) {
$output510 = '';

$output510 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
$array513 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array513);
};
$arguments511 = array();
$arguments511['value'] = NULL;

$output510 .= isset($arguments511['value']) ? $arguments511['value'] : $renderChildrenClosure512();

$output510 .= '
			</div>
		';
return $output510;
};
$arguments508['__elseClosures'][] = function() use ($renderingContext, $self) {
$output514 = '';

$output514 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['key'] = NULL;
$arguments515['id'] = NULL;
$arguments515['default'] = NULL;
$arguments515['arguments'] = NULL;
$arguments515['extensionName'] = NULL;
$arguments515['languageKey'] = NULL;
$arguments515['alternativeLanguageKeys'] = NULL;
$arguments515['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext)]);

$output514 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments517 = array();
$arguments517['key'] = NULL;
$arguments517['id'] = NULL;
$arguments517['default'] = NULL;
$arguments517['arguments'] = NULL;
$arguments517['extensionName'] = NULL;
$arguments517['languageKey'] = NULL;
$arguments517['alternativeLanguageKeys'] = NULL;
$arguments517['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext)]);

$output514 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['key'] = NULL;
$arguments521['id'] = NULL;
$arguments521['default'] = NULL;
$arguments521['arguments'] = NULL;
$arguments521['extensionName'] = NULL;
$arguments521['languageKey'] = NULL;
$arguments521['alternativeLanguageKeys'] = NULL;
$arguments521['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext)]);
};
$arguments519 = array();
$arguments519['additionalAttributes'] = NULL;
$arguments519['data'] = NULL;
$arguments519['class'] = NULL;
$arguments519['dir'] = NULL;
$arguments519['id'] = NULL;
$arguments519['lang'] = NULL;
$arguments519['style'] = NULL;
$arguments519['title'] = NULL;
$arguments519['accesskey'] = NULL;
$arguments519['tabindex'] = NULL;
$arguments519['onclick'] = NULL;
$arguments519['name'] = NULL;
$arguments519['rel'] = NULL;
$arguments519['rev'] = NULL;
$arguments519['target'] = NULL;
$arguments519['action'] = NULL;
$arguments519['controller'] = NULL;
$arguments519['extensionName'] = NULL;
$arguments519['pluginName'] = NULL;
$arguments519['pageUid'] = NULL;
$arguments519['pageType'] = NULL;
$arguments519['noCache'] = NULL;
$arguments519['noCacheHash'] = NULL;
$arguments519['section'] = NULL;
$arguments519['format'] = NULL;
$arguments519['linkAccessRestrictedPages'] = NULL;
$arguments519['additionalParams'] = NULL;
$arguments519['absolute'] = NULL;
$arguments519['addQueryString'] = NULL;
$arguments519['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments519['addQueryStringMethod'] = NULL;
$arguments519['arguments'] = NULL;
$arguments519['action'] = 'newsPidListing';
$arguments519['class'] = 'btn btn-info';

$output514 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$output514 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output514;
};

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output305 .= '
	<script type="text/javascript">
		T3_THIS_LOCATION = ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
$array546 = array (
);return $renderingContext->getVariableProvider()->getByPath('requestUri', $array546);
};
$arguments544 = array();
$arguments544['value'] = NULL;

$output305 .= isset($arguments544['value']) ? $arguments544['value'] : $renderChildrenClosure545();

$output305 .= ';

        function jumpToUrl(URL) {
            window.location.href = URL;
            return false;
        }
        function jumpExt(URL,anchor) {	//
            var anc = anchor?anchor:"";
            window.location.href = URL+(T3_THIS_LOCATION?"&returnUrl="+T3_THIS_LOCATION:"")+anc;
            return false;
        }
        function jumpSelf(URL) {	//
            window.location.href = URL+(T3_RETURN_URL?"&returnUrl="+T3_RETURN_URL:"");
            return false;
        }
	</script>
';
return $output305;
};
$arguments303 = array();
$arguments303['name'] = NULL;
$arguments303['name'] = 'content';

$output270 .= NULL;

$output270 .= '

';

return $output270;
}


}
#