<?php

class partial_Form_8142d4ead93d3305b6ebcf6186917220bb4cf747 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="tx-indexedsearch-searchbox">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
		<div class="tx-indexedsearch-hidden-fields">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['name'] = NULL;
$arguments5['value'] = NULL;
$arguments5['property'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['name'] = 'search[_sections]';
$arguments5['value'] = 0;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = 'search[_freeIndexUid]';
$arguments7['id'] = 'tx_indexedsearch_freeIndexUid';
$arguments7['value'] = '_';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['name'] = NULL;
$arguments9['value'] = NULL;
$arguments9['property'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['name'] = 'search[pointer]';
$arguments9['id'] = 'tx_indexedsearch_pointer';
$arguments9['value'] = 0;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['name'] = NULL;
$arguments11['value'] = NULL;
$arguments11['property'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['name'] = 'search[ext]';
$array13 = array (
);$arguments11['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.ext', $array13);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['name'] = NULL;
$arguments14['value'] = NULL;
$arguments14['property'] = NULL;
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['name'] = 'search[searchType]';
$array16 = array (
);$arguments14['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.searchType', $array16);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['property'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = 'search[defaultOperand]';
$array19 = array (
);$arguments17['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.defaultOperand', $array19);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['name'] = NULL;
$arguments20['value'] = NULL;
$arguments20['property'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['name'] = 'search[mediaType]';
$array22 = array (
);$arguments20['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.mediaType', $array22);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['name'] = NULL;
$arguments23['value'] = NULL;
$arguments23['property'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['name'] = 'search[sortOrder]';
$array25 = array (
);$arguments23['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.sortOrder', $array25);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['property'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = 'search[group]';
$array28 = array (
);$arguments26['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.group', $array28);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['name'] = NULL;
$arguments29['value'] = NULL;
$arguments29['property'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = 'search[languageUid]';
$array31 = array (
);$arguments29['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.languageUid', $array31);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['name'] = NULL;
$arguments32['value'] = NULL;
$arguments32['property'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['name'] = 'search[desc]';
$array34 = array (
);$arguments32['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.desc', $array34);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['name'] = NULL;
$arguments35['value'] = NULL;
$arguments35['property'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['name'] = 'search[numberOfResults]';
$array37 = array (
);$arguments35['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array37);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['name'] = NULL;
$arguments38['value'] = NULL;
$arguments38['property'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['name'] = 'search[extendedSearch]';
$array40 = array (
);$arguments38['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.extendedSearch', $array40);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output4 .= '
		</div>
		<fieldset>
			<legend>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = 'form.legend';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output4 .= '</legend>
			<div class="tx-indexedsearch-form">
				<label for="tx-indexedsearch-searchbox-sword">';
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
$arguments43['key'] = 'form.searchFor';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output4 .= ':</label>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['autofocus'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['maxlength'] = NULL;
$arguments45['readonly'] = NULL;
$arguments45['size'] = NULL;
$arguments45['placeholder'] = NULL;
$arguments45['pattern'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['required'] = false;
$arguments45['type'] = 'text';
$arguments45['name'] = 'search[sword]';
$array47 = array (
);$arguments45['value'] = $renderingContext->getVariableProvider()->getByPath('sword', $array47);
$arguments45['id'] = 'tx-indexedsearch-searchbox-sword';
$arguments45['class'] = 'tx-indexedsearch-searchbox-sword';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output4 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
					<div class="tx-indexedsearch-search-for">
						<label for="tx-indexedsearch-selectbox-searchtype">';
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
$arguments60['key'] = 'form.match';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= ':</label>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['name'] = NULL;
$arguments68['value'] = NULL;
$arguments68['property'] = NULL;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['size'] = NULL;
$arguments68['disabled'] = NULL;
$arguments68['options'] = NULL;
$arguments68['optionsAfterContent'] = false;
$arguments68['optionValueField'] = NULL;
$arguments68['optionLabelField'] = NULL;
$arguments68['sortByOptionLabel'] = false;
$arguments68['selectAllByDefault'] = false;
$arguments68['errorClass'] = 'f3-form-error';
$arguments68['prependOptionLabel'] = NULL;
$arguments68['prependOptionValue'] = NULL;
$arguments68['multiple'] = false;
$arguments68['required'] = false;
$arguments68['name'] = 'search[searchType]';
$array70 = array (
);$arguments68['options'] = $renderingContext->getVariableProvider()->getByPath('allSearchTypes', $array70);
$array71 = array (
);$arguments68['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.searchType', $array71);
$arguments68['id'] = 'tx-indexedsearch-selectbox-searchtype';
$arguments68['class'] = 'tx-indexedsearch-selectbox-searchtype';

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
						';
return $output67;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('allSearchTypes', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output59 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['name'] = NULL;
$arguments78['value'] = NULL;
$arguments78['property'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['size'] = NULL;
$arguments78['disabled'] = NULL;
$arguments78['options'] = NULL;
$arguments78['optionsAfterContent'] = false;
$arguments78['optionValueField'] = NULL;
$arguments78['optionLabelField'] = NULL;
$arguments78['sortByOptionLabel'] = false;
$arguments78['selectAllByDefault'] = false;
$arguments78['errorClass'] = 'f3-form-error';
$arguments78['prependOptionLabel'] = NULL;
$arguments78['prependOptionValue'] = NULL;
$arguments78['multiple'] = false;
$arguments78['required'] = false;
$arguments78['name'] = 'search[defaultOperand]';
$array80 = array (
);$arguments78['options'] = $renderingContext->getVariableProvider()->getByPath('allDefaultOperands', $array80);
$array81 = array (
);$arguments78['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.defaultOperand', $array81);
$arguments78['id'] = 'tx-indexedsearch-selectbox-defaultoperand';
$arguments78['class'] = 'tx-indexedsearch-selectbox-defaultoperand';

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
						';
return $output77;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('allDefaultOperands', $array75);

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = $renderChildrenClosure73;

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output59 .= '
					</div>
				';
return $output59;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('showTypeSearch', $array57);

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['__thenClosure'] = $renderChildrenClosure55;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
					<div class="tx-indexedsearch-search-in">
						<label for="tx-indexedsearch-selectbox-media">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['languageKey'] = NULL;
$arguments88['alternativeLanguageKeys'] = NULL;
$arguments88['key'] = 'form.searchIn';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output87 .= ':</label>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['name'] = NULL;
$arguments96['value'] = NULL;
$arguments96['property'] = NULL;
$arguments96['class'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['size'] = NULL;
$arguments96['disabled'] = NULL;
$arguments96['options'] = NULL;
$arguments96['optionsAfterContent'] = false;
$arguments96['optionValueField'] = NULL;
$arguments96['optionLabelField'] = NULL;
$arguments96['sortByOptionLabel'] = false;
$arguments96['selectAllByDefault'] = false;
$arguments96['errorClass'] = 'f3-form-error';
$arguments96['prependOptionLabel'] = NULL;
$arguments96['prependOptionValue'] = NULL;
$arguments96['multiple'] = false;
$arguments96['required'] = false;
$arguments96['name'] = 'search[mediaType]';
$array98 = array (
);$arguments96['options'] = $renderingContext->getVariableProvider()->getByPath('allMediaTypes', $array98);
$array99 = array (
);$arguments96['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.mediaType', $array99);
$arguments96['id'] = 'tx-indexedsearch-selectbox-media';
$arguments96['class'] = 'tx-indexedsearch-selectbox-media media';

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
						';
return $output95;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('allMediaTypes', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output87 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['name'] = NULL;
$arguments106['value'] = NULL;
$arguments106['property'] = NULL;
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$arguments106['size'] = NULL;
$arguments106['disabled'] = NULL;
$arguments106['options'] = NULL;
$arguments106['optionsAfterContent'] = false;
$arguments106['optionValueField'] = NULL;
$arguments106['optionLabelField'] = NULL;
$arguments106['sortByOptionLabel'] = false;
$arguments106['selectAllByDefault'] = false;
$arguments106['errorClass'] = 'f3-form-error';
$arguments106['prependOptionLabel'] = NULL;
$arguments106['prependOptionValue'] = NULL;
$arguments106['multiple'] = false;
$arguments106['required'] = false;
$arguments106['name'] = 'search[languageUid]';
$array108 = array (
);$arguments106['options'] = $renderingContext->getVariableProvider()->getByPath('allLanguageUids', $array108);
$array109 = array (
);$arguments106['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.languageUid', $array109);
$arguments106['id'] = 'tx-indexedsearch-selectbox-lang';
$arguments106['class'] = 'tx-indexedsearch-selectbox-lang lang';

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
						';
return $output105;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('allLanguageUids', $array103);

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = $renderChildrenClosure101;

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output87 .= '
					</div>
				';
return $output87;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('showMediaAndLanguageSearch', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output53 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
					<div class="tx-indexedsearch-search-select-section">
						<label for="tx-indexedsearch-selectbox-sections">';
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
$arguments116['key'] = 'form.fromSection';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output115 .= ':</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['name'] = NULL;
$arguments118['value'] = NULL;
$arguments118['property'] = NULL;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['size'] = NULL;
$arguments118['disabled'] = NULL;
$arguments118['options'] = NULL;
$arguments118['optionsAfterContent'] = false;
$arguments118['optionValueField'] = NULL;
$arguments118['optionLabelField'] = NULL;
$arguments118['sortByOptionLabel'] = false;
$arguments118['selectAllByDefault'] = false;
$arguments118['errorClass'] = 'f3-form-error';
$arguments118['prependOptionLabel'] = NULL;
$arguments118['prependOptionValue'] = NULL;
$arguments118['multiple'] = false;
$arguments118['required'] = false;
$arguments118['name'] = 'search[sections]';
$array120 = array (
);$arguments118['options'] = $renderingContext->getVariableProvider()->getByPath('allSections', $array120);
$array121 = array (
);$arguments118['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.sections', $array121);
$arguments118['id'] = 'tx-indexedsearch-selectbox-sections';
$arguments118['class'] = 'tx-indexedsearch-selectbox-sections';

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output115 .= '
					</div>
				';
return $output115;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('allSections', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['__thenClosure'] = $renderChildrenClosure111;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output53 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
					<div class="tx-indexedsearch-search-freeindexuid">
						<label for="tx-indexedsearch-selectbox-freeIndexUid">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'form.freeIndexUid';

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output127 .= ':</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['name'] = NULL;
$arguments130['value'] = NULL;
$arguments130['property'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['size'] = NULL;
$arguments130['disabled'] = NULL;
$arguments130['options'] = NULL;
$arguments130['optionsAfterContent'] = false;
$arguments130['optionValueField'] = NULL;
$arguments130['optionLabelField'] = NULL;
$arguments130['sortByOptionLabel'] = false;
$arguments130['selectAllByDefault'] = false;
$arguments130['errorClass'] = 'f3-form-error';
$arguments130['prependOptionLabel'] = NULL;
$arguments130['prependOptionValue'] = NULL;
$arguments130['multiple'] = false;
$arguments130['required'] = false;
$arguments130['name'] = 'search[freeIndexUid]';
$array132 = array (
);$arguments130['options'] = $renderingContext->getVariableProvider()->getByPath('allIndexConfigurations', $array132);
$array133 = array (
);$arguments130['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.freeIndexUid', $array133);
$arguments130['id'] = 'tx-indexedsearch-selectbox-freeIndexUid';
$arguments130['class'] = 'tx-indexedsearch-selectbox-freeIndexUid';

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output127 .= '
					</div>
				';
return $output127;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('allIndexConfigurations', $array125);

$expression126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = $renderChildrenClosure123;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output53 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
					<div class="tx-indexedsearch-search-select-order">
						<label for="tx-indexedsearch-selectbox-order">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['key'] = NULL;
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['languageKey'] = NULL;
$arguments140['alternativeLanguageKeys'] = NULL;
$arguments140['key'] = 'form.orderBy';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output139 .= ':</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['name'] = NULL;
$arguments142['value'] = NULL;
$arguments142['property'] = NULL;
$arguments142['class'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$arguments142['size'] = NULL;
$arguments142['disabled'] = NULL;
$arguments142['options'] = NULL;
$arguments142['optionsAfterContent'] = false;
$arguments142['optionValueField'] = NULL;
$arguments142['optionLabelField'] = NULL;
$arguments142['sortByOptionLabel'] = false;
$arguments142['selectAllByDefault'] = false;
$arguments142['errorClass'] = 'f3-form-error';
$arguments142['prependOptionLabel'] = NULL;
$arguments142['prependOptionValue'] = NULL;
$arguments142['multiple'] = false;
$arguments142['required'] = false;
$arguments142['name'] = 'search[sortOrder]';
$array144 = array (
);$arguments142['options'] = $renderingContext->getVariableProvider()->getByPath('allSortOrders', $array144);
$array145 = array (
);$arguments142['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.sortOrder', $array145);
$arguments142['id'] = 'tx-indexedsearch-selectbox-order';
$arguments142['class'] = 'tx-indexedsearch-selectbox-order';

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output139 .= '&nbsp;
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['additionalAttributes'] = NULL;
$arguments146['data'] = NULL;
$arguments146['name'] = NULL;
$arguments146['value'] = NULL;
$arguments146['property'] = NULL;
$arguments146['class'] = NULL;
$arguments146['dir'] = NULL;
$arguments146['id'] = NULL;
$arguments146['lang'] = NULL;
$arguments146['style'] = NULL;
$arguments146['title'] = NULL;
$arguments146['accesskey'] = NULL;
$arguments146['tabindex'] = NULL;
$arguments146['onclick'] = NULL;
$arguments146['size'] = NULL;
$arguments146['disabled'] = NULL;
$arguments146['options'] = NULL;
$arguments146['optionsAfterContent'] = false;
$arguments146['optionValueField'] = NULL;
$arguments146['optionLabelField'] = NULL;
$arguments146['sortByOptionLabel'] = false;
$arguments146['selectAllByDefault'] = false;
$arguments146['errorClass'] = 'f3-form-error';
$arguments146['prependOptionLabel'] = NULL;
$arguments146['prependOptionValue'] = NULL;
$arguments146['multiple'] = false;
$arguments146['required'] = false;
$arguments146['name'] = 'search[sortDesc]';
$array148 = array (
);$arguments146['options'] = $renderingContext->getVariableProvider()->getByPath('allSortDescendings', $array148);
$array149 = array (
);$arguments146['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.sortDesc', $array149);
$arguments146['id'] = 'tx-indexedsearch-selectbox-desc';
$arguments146['class'] = 'tx-indexedsearch-selectbox-desc';

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output139 .= '
					</div>
				';
return $output139;
};
$arguments134 = array();
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$arguments134['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('showSortOrders', $array137);

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments134['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$arguments134['__thenClosure'] = $renderChildrenClosure135;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output53 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
					<div class="tx-indexedsearch-search-select-results">
						<label for="tx-indexedsearch-selectbox-results">';
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
$arguments156['key'] = 'form.atATime';

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output155 .= '</label>
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
$arguments158['name'] = 'search[numberOfResults]';
$array160 = array (
);$arguments158['options'] = $renderingContext->getVariableProvider()->getByPath('allNumberOfResults', $array160);
$array161 = array (
);$arguments158['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array161);
$arguments158['id'] = 'tx-indexedsearch-selectbox-results';
$arguments158['class'] = 'tx-indexedsearch-selectbox-results';

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output155 .= '
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
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('allNumberOfResults', $array153);

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments150['__thenClosure'] = $renderChildrenClosure151;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output53 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
					<div class="tx-indexedsearch-search-select-group">
						<label for="tx-indexedsearch-selectbox-group">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['key'] = NULL;
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$arguments168['languageKey'] = NULL;
$arguments168['alternativeLanguageKeys'] = NULL;
$arguments168['key'] = 'form.style';

$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output167 .= ':</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['additionalAttributes'] = NULL;
$arguments170['data'] = NULL;
$arguments170['name'] = NULL;
$arguments170['value'] = NULL;
$arguments170['property'] = NULL;
$arguments170['class'] = NULL;
$arguments170['dir'] = NULL;
$arguments170['id'] = NULL;
$arguments170['lang'] = NULL;
$arguments170['style'] = NULL;
$arguments170['title'] = NULL;
$arguments170['accesskey'] = NULL;
$arguments170['tabindex'] = NULL;
$arguments170['onclick'] = NULL;
$arguments170['size'] = NULL;
$arguments170['disabled'] = NULL;
$arguments170['options'] = NULL;
$arguments170['optionsAfterContent'] = false;
$arguments170['optionValueField'] = NULL;
$arguments170['optionLabelField'] = NULL;
$arguments170['sortByOptionLabel'] = false;
$arguments170['selectAllByDefault'] = false;
$arguments170['errorClass'] = 'f3-form-error';
$arguments170['prependOptionLabel'] = NULL;
$arguments170['prependOptionValue'] = NULL;
$arguments170['multiple'] = false;
$arguments170['required'] = false;
$arguments170['name'] = 'search[group]';
$array172 = array (
);$arguments170['options'] = $renderingContext->getVariableProvider()->getByPath('allGroups', $array172);
$array173 = array (
);$arguments170['value'] = $renderingContext->getVariableProvider()->getByPath('searchParams.group', $array173);
$arguments170['id'] = 'tx-indexedsearch-selectbox-group';
$arguments170['class'] = 'tx-indexedsearch-selectbox-group';

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output167 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['name'] = NULL;
$arguments180['value'] = NULL;
$arguments180['property'] = NULL;
$arguments180['disabled'] = NULL;
$arguments180['errorClass'] = 'f3-form-error';
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['checked'] = NULL;
$arguments180['multiple'] = false;
$arguments180['name'] = 'search[extResume]';
$arguments180['id'] = 'tx_indexedsearch_extResume';
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('searchParams.extResume', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments180['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments180['value'] = 1;

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
						';
return $output179;
};
$arguments174 = array();
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$arguments174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['0'] = $renderingContext->getVariableProvider()->getByPath('settings.blind.extResume', $array177);
$array176['1'] = ' == 0';

$expression178 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);
$arguments174['__thenClosure'] = $renderChildrenClosure175;

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output167 .= '
					</div>
				';
return $output167;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('allGroups', $array165);

$expression166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = $renderChildrenClosure163;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output53 .= '
			';
return $output53;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('searchParams.extendedSearch', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output4 .= '
			<div class="tx-indexedsearch-search-submit">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['additionalAttributes'] = NULL;
$arguments185['data'] = NULL;
$arguments185['name'] = NULL;
$arguments185['value'] = NULL;
$arguments185['property'] = NULL;
$arguments185['disabled'] = NULL;
$arguments185['class'] = NULL;
$arguments185['dir'] = NULL;
$arguments185['id'] = NULL;
$arguments185['lang'] = NULL;
$arguments185['style'] = NULL;
$arguments185['title'] = NULL;
$arguments185['accesskey'] = NULL;
$arguments185['tabindex'] = NULL;
$arguments185['onclick'] = NULL;
$arguments185['name'] = 'search[submitButton]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['languageKey'] = NULL;
$arguments187['alternativeLanguageKeys'] = NULL;
$arguments187['key'] = 'form.submit';
$arguments185['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);
$arguments185['id'] = 'tx-indexedsearch-searchbox-button-submit';
$arguments185['class'] = 'tx-indexedsearch-searchbox-button';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output4 .= '
			</div>
		</fieldset>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
			<p>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['key'] = NULL;
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$arguments222['languageKey'] = NULL;
$arguments222['alternativeLanguageKeys'] = NULL;
$arguments222['key'] = 'form.linkToRegularSearch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext)]);
};
$arguments218 = array();
$arguments218['additionalAttributes'] = NULL;
$arguments218['data'] = NULL;
$arguments218['class'] = NULL;
$arguments218['dir'] = NULL;
$arguments218['id'] = NULL;
$arguments218['lang'] = NULL;
$arguments218['style'] = NULL;
$arguments218['title'] = NULL;
$arguments218['accesskey'] = NULL;
$arguments218['tabindex'] = NULL;
$arguments218['onclick'] = NULL;
$arguments218['name'] = NULL;
$arguments218['rel'] = NULL;
$arguments218['rev'] = NULL;
$arguments218['target'] = NULL;
$arguments218['action'] = NULL;
$arguments218['controller'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['pluginName'] = NULL;
$arguments218['pageUid'] = NULL;
$arguments218['pageType'] = NULL;
$arguments218['noCache'] = NULL;
$arguments218['noCacheHash'] = NULL;
$arguments218['section'] = NULL;
$arguments218['format'] = NULL;
$arguments218['linkAccessRestrictedPages'] = NULL;
$arguments218['additionalParams'] = NULL;
$arguments218['absolute'] = NULL;
$arguments218['addQueryString'] = NULL;
$arguments218['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments218['addQueryStringMethod'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['action'] = 'form';
// Rendering Array
$array220 = array();
// Rendering Array
$array221 = array();
$array221['extendedSearch'] = 0;
$array220['search'] = $array221;
$arguments218['arguments'] = $array220;

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
				';
return $output217;
};
$arguments215 = array();

$output214 .= '';

$output214 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$arguments231['languageKey'] = NULL;
$arguments231['alternativeLanguageKeys'] = NULL;
$arguments231['key'] = 'form.linkToAdvancedSearch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);
};
$arguments227 = array();
$arguments227['additionalAttributes'] = NULL;
$arguments227['data'] = NULL;
$arguments227['class'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$arguments227['name'] = NULL;
$arguments227['rel'] = NULL;
$arguments227['rev'] = NULL;
$arguments227['target'] = NULL;
$arguments227['action'] = NULL;
$arguments227['controller'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['pluginName'] = NULL;
$arguments227['pageUid'] = NULL;
$arguments227['pageType'] = NULL;
$arguments227['noCache'] = NULL;
$arguments227['noCacheHash'] = NULL;
$arguments227['section'] = NULL;
$arguments227['format'] = NULL;
$arguments227['linkAccessRestrictedPages'] = NULL;
$arguments227['additionalParams'] = NULL;
$arguments227['absolute'] = NULL;
$arguments227['addQueryString'] = NULL;
$arguments227['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments227['addQueryStringMethod'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['action'] = 'form';
// Rendering Array
$array229 = array();
// Rendering Array
$array230 = array();
$array230['extendedSearch'] = 1;
$array229['search'] = $array230;
$arguments227['arguments'] = $array229;

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
				';
return $output226;
};
$arguments224 = array();
$arguments224['if'] = NULL;

$output214 .= '';

$output214 .= '
			';
return $output214;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array211 = array();
$array212 = array (
);$array211['0'] = $renderingContext->getVariableProvider()->getByPath('searchParams.extendedSearch', $array212);

$expression213 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array211)
					),
					$renderingContext
				);
$arguments195['__thenClosure'] = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['key'] = NULL;
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$arguments202['languageKey'] = NULL;
$arguments202['alternativeLanguageKeys'] = NULL;
$arguments202['key'] = 'form.linkToRegularSearch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);
};
$arguments198 = array();
$arguments198['additionalAttributes'] = NULL;
$arguments198['data'] = NULL;
$arguments198['class'] = NULL;
$arguments198['dir'] = NULL;
$arguments198['id'] = NULL;
$arguments198['lang'] = NULL;
$arguments198['style'] = NULL;
$arguments198['title'] = NULL;
$arguments198['accesskey'] = NULL;
$arguments198['tabindex'] = NULL;
$arguments198['onclick'] = NULL;
$arguments198['name'] = NULL;
$arguments198['rel'] = NULL;
$arguments198['rev'] = NULL;
$arguments198['target'] = NULL;
$arguments198['action'] = NULL;
$arguments198['controller'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['pluginName'] = NULL;
$arguments198['pageUid'] = NULL;
$arguments198['pageType'] = NULL;
$arguments198['noCache'] = NULL;
$arguments198['noCacheHash'] = NULL;
$arguments198['section'] = NULL;
$arguments198['format'] = NULL;
$arguments198['linkAccessRestrictedPages'] = NULL;
$arguments198['additionalParams'] = NULL;
$arguments198['absolute'] = NULL;
$arguments198['addQueryString'] = NULL;
$arguments198['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments198['addQueryStringMethod'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['action'] = 'form';
// Rendering Array
$array200 = array();
// Rendering Array
$array201 = array();
$array201['extendedSearch'] = 0;
$array200['search'] = $array201;
$arguments198['arguments'] = $array200;

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
				';
return $output197;
};
$arguments195['__elseClosures'][] = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['languageKey'] = NULL;
$arguments209['alternativeLanguageKeys'] = NULL;
$arguments209['key'] = 'form.linkToAdvancedSearch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);
};
$arguments205 = array();
$arguments205['additionalAttributes'] = NULL;
$arguments205['data'] = NULL;
$arguments205['class'] = NULL;
$arguments205['dir'] = NULL;
$arguments205['id'] = NULL;
$arguments205['lang'] = NULL;
$arguments205['style'] = NULL;
$arguments205['title'] = NULL;
$arguments205['accesskey'] = NULL;
$arguments205['tabindex'] = NULL;
$arguments205['onclick'] = NULL;
$arguments205['name'] = NULL;
$arguments205['rel'] = NULL;
$arguments205['rev'] = NULL;
$arguments205['target'] = NULL;
$arguments205['action'] = NULL;
$arguments205['controller'] = NULL;
$arguments205['extensionName'] = NULL;
$arguments205['pluginName'] = NULL;
$arguments205['pageUid'] = NULL;
$arguments205['pageType'] = NULL;
$arguments205['noCache'] = NULL;
$arguments205['noCacheHash'] = NULL;
$arguments205['section'] = NULL;
$arguments205['format'] = NULL;
$arguments205['linkAccessRestrictedPages'] = NULL;
$arguments205['additionalParams'] = NULL;
$arguments205['absolute'] = NULL;
$arguments205['addQueryString'] = NULL;
$arguments205['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments205['addQueryStringMethod'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['action'] = 'form';
// Rendering Array
$array207 = array();
// Rendering Array
$array208 = array();
$array208['extendedSearch'] = 1;
$array207['search'] = $array208;
$arguments205['arguments'] = $array207;

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
				';
return $output204;
};

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
			</p>
		';
return $output194;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayAdvancedSearchLink', $array192);

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$arguments189['__thenClosure'] = $renderChildrenClosure190;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output4 .= '
	';
return $output4;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['action'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['object'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = 'GET';
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['hiddenFieldClassName'] = NULL;
$arguments1['enctype'] = NULL;
$arguments1['method'] = NULL;
$arguments1['name'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['target'] = NULL;
$arguments1['novalidate'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['action'] = 'search';
$arguments1['method'] = 'post';
$arguments1['id'] = 'tx_indexedsearch';
$array3 = array (
);$arguments1['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.targetPid', $array3);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['section'] = NULL;
$arguments233['partial'] = NULL;
$arguments233['delegate'] = NULL;
$arguments233['renderable'] = NULL;
$arguments233['arguments'] = array (
);
$arguments233['optional'] = false;
$arguments233['default'] = NULL;
$arguments233['contentAs'] = NULL;
$arguments233['debug'] = true;
$arguments233['partial'] = 'Rules';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#