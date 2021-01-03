<?php

class Search_action_search_ebca5a247f6729b57ab8d94534362c66554c6bd8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'is' => 
  array (
    0 => 'TYPO3\\CMS\\IndexedSearch\\ViewHelpers',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
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
$arguments6['partial'] = 'Form';
$arguments6['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
';
return $output5;
};
$arguments1 = array();
$arguments1['map'] = NULL;
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['sword'] = $renderingContext->getVariableProvider()->getByPath('searchParams.sword', $array4);
$arguments1['map'] = $array3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
		<h1 class="tx-indexedsearch-category">';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('result.categoryTitle', $array19)]);

$output18 .= '</h1>
	';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('result.categoryTitle', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
		<div class="tx-indexedsearch-info-sword">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$output51 = '';

$output51 .= 'searchFor.';
$array52 = array (
);
$output51 .= $renderingContext->getVariableProvider()->getByPath('searchWord.oper', $array52);
$arguments49['key'] = $output51;

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output48 .= '&nbsp;';
$array53 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchWord.sword', $array53)]);

$output48 .= '
					';
return $output48;
};
$arguments46 = array();

$output45 .= '';

$output45 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'searchFor';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '&nbsp;';
$array59 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchWord.sword', $array59)]);

$output56 .= '
					';
return $output56;
};
$arguments54 = array();
$arguments54['if'] = NULL;

$output45 .= '';

$output45 .= '
				';
return $output45;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('key', $array43);
$array42['1'] = ' > 0';

$expression44 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['languageKey'] = NULL;
$arguments33['alternativeLanguageKeys'] = NULL;
$output35 = '';

$output35 .= 'searchFor.';
$array36 = array (
);
$output35 .= $renderingContext->getVariableProvider()->getByPath('searchWord.oper', $array36);
$arguments33['key'] = $output35;

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '&nbsp;';
$array37 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchWord.sword', $array37)]);

$output32 .= '
					';
return $output32;
};
$arguments30['__elseClosures'][] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['languageKey'] = NULL;
$arguments39['alternativeLanguageKeys'] = NULL;
$arguments39['key'] = 'searchFor';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '&nbsp;';
$array41 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchWord.sword', $array41)]);

$output38 .= '
					';
return $output38;
};

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
			';
return $output29;
};
$arguments26 = array();
$arguments26['each'] = NULL;
$arguments26['as'] = NULL;
$arguments26['key'] = NULL;
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$array28 = array (
);$arguments26['each'] = $renderingContext->getVariableProvider()->getByPath('searchWords', $array28);
$arguments26['as'] = 'searchWord';
$arguments26['key'] = 'key';

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
		</div>
	';
return $output25;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array23);
$array22['1'] = ' > 0';

$expression24 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output12 .= '
	';
$array60 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('result.searchedInSectionInfo', $array60)]);

$output12 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
			<div class="tx-indexedsearch-browsebox">
				<p>
					';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingResultsViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['numberOfResults'] = NULL;
$arguments186['resultsPerPage'] = NULL;
$arguments186['currentPage'] = 1;
$array188 = array (
);$arguments186['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array188);
$array189 = array (
);$arguments186['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array189);
$array190 = array (
);$arguments186['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array190);

$output185 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingResultsViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
					';
$array191 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('result.sectionText', $array191)]);

$output185 .= '
				</p>
				<!-- render the anchor-links to the sections inside the displayed result rows -->
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
					<div class="tx-indexedsearch-sectionlinks">
						<table cellpadding="0" cellspacing="0" border="0" summary="Result links">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
								<tr>
									<td width="100%">--&gt;&nbsp;
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$array223 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sectionData.0', $array223)]);
};
$arguments221 = array();

$output220 .= '';

$output220 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['key'] = NULL;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$arguments226['languageKey'] = NULL;
$arguments226['alternativeLanguageKeys'] = NULL;
$arguments226['key'] = 'unnamedSection';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext)]);
};
$arguments224 = array();
$arguments224['if'] = NULL;

$output220 .= '';

$output220 .= '
											';
return $output220;
};
$arguments212 = array();
$arguments212['then'] = NULL;
$arguments212['else'] = NULL;
$arguments212['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array218 = array (
);$array217['0'] = $renderingContext->getVariableProvider()->getByPath('sectionData.0', $array218);

$expression219 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments212['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);
$arguments212['__thenClosure'] = function() use ($renderingContext, $self) {
$array214 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sectionData.0', $array214)]);
};
$arguments212['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['languageKey'] = NULL;
$arguments215['alternativeLanguageKeys'] = NULL;
$arguments215['key'] = 'unnamedSection';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);
};

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
											&nbsp;(';
$array228 = array (
);
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sectionData.1', $array228)]);

$output211 .= '&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
$array234 = array (
);$array233['0'] = $renderingContext->getVariableProvider()->getByPath('sectionData.1', $array234);
$array233['1'] = ' > 1';

$expression235 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments231['then'] = 'result.pages';
$arguments231['else'] = 'result.page';
$arguments229['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output211 .= ')
										';
return $output211;
};
$arguments202 = array();
$arguments202['additionalAttributes'] = NULL;
$arguments202['data'] = NULL;
$arguments202['class'] = NULL;
$arguments202['dir'] = NULL;
$arguments202['id'] = NULL;
$arguments202['lang'] = NULL;
$arguments202['style'] = NULL;
$arguments202['title'] = NULL;
$arguments202['accesskey'] = NULL;
$arguments202['tabindex'] = NULL;
$arguments202['onclick'] = NULL;
$arguments202['target'] = NULL;
$arguments202['rel'] = NULL;
$arguments202['pageUid'] = NULL;
$arguments202['pageType'] = NULL;
$arguments202['noCache'] = NULL;
$arguments202['noCacheHash'] = NULL;
$arguments202['section'] = NULL;
$arguments202['linkAccessRestrictedPages'] = NULL;
$arguments202['additionalParams'] = NULL;
$arguments202['absolute'] = NULL;
$arguments202['addQueryString'] = NULL;
$arguments202['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments202['addQueryStringMethod'] = NULL;
$output204 = '';

$output204 .= 'anchor_';
$array205 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('sectionId', $array205);
$arguments202['section'] = $output204;
// Rendering Boolean node
// Rendering Array
$array206 = array();
$array206['0'] = 1;

$expression207 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression207(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array206)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array208['0'] = 1;

$expression209 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['noCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
// Rendering Array
$array210 = array();
$array210['0'] = 'id';
$arguments202['argumentsToBeExcludedFromQueryString'] = $array210;

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
									</td>
								</tr>
							';
return $output201;
};
$arguments198 = array();
$arguments198['each'] = NULL;
$arguments198['as'] = NULL;
$arguments198['key'] = NULL;
$arguments198['reverse'] = false;
$arguments198['iteration'] = NULL;
$array200 = array (
);$arguments198['each'] = $renderingContext->getVariableProvider()->getByPath('result.affectedSections', $array200);
$arguments198['as'] = 'sectionData';
$arguments198['key'] = 'sectionId';

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
						</table>
					</div>
				';
return $output197;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['0'] = $renderingContext->getVariableProvider()->getByPath('result.affectedSections', $array195);

$expression196 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments192['__thenClosure'] = $renderChildrenClosure193;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output185 .= '
				';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['maximumNumberOfResultPages'] = NULL;
$arguments236['numberOfResults'] = NULL;
$arguments236['resultsPerPage'] = NULL;
$arguments236['currentPage'] = 0;
$arguments236['freeIndexUid'] = NULL;
$array238 = array (
);$arguments236['maximumNumberOfResultPages'] = $renderingContext->getVariableProvider()->getByPath('settings.page_links', $array238);
$array239 = array (
);$arguments236['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array239);
$array240 = array (
);$arguments236['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array240);
$array241 = array (
);$arguments236['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array241);

$output185 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output185 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
					<div id="anchor_';
$array273 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.sectionId', $array273)]);

$output272 .= '" class="tx-indexedsearch-sectionhead">
						<h2 class="tx-indexedsearch-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$array276 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.sectionTitle', $array276);
};
$arguments274 = array();
$arguments274['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output272 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output272 .= ' <span class="tx-indexedsearch-result-count">';
$array277 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array277)]);

$output272 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['key'] = NULL;
$arguments278['id'] = NULL;
$arguments278['default'] = NULL;
$arguments278['arguments'] = NULL;
$arguments278['extensionName'] = NULL;
$arguments278['languageKey'] = NULL;
$arguments278['alternativeLanguageKeys'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['then'] = NULL;
$arguments280['else'] = NULL;
$arguments280['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['0'] = $renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array283);
$array282['1'] = ' > 1';

$expression284 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments280['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
$arguments280['then'] = 'result.pages';
$arguments280['else'] = 'result.page';
$arguments278['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext)]);

$output272 .= '</span></h2>
					</div>
					';
return $output272;
};
$arguments270 = array();

$output269 .= '';

$output269 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['section'] = NULL;
$arguments288['partial'] = NULL;
$arguments288['delegate'] = NULL;
$arguments288['renderable'] = NULL;
$arguments288['arguments'] = array (
);
$arguments288['optional'] = false;
$arguments288['default'] = NULL;
$arguments288['contentAs'] = NULL;
$arguments288['debug'] = true;
$arguments288['partial'] = 'Searchresult';
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['row'] = $renderingContext->getVariableProvider()->getByPath('row', $array291);
$arguments288['arguments'] = $array290;

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
					';
return $output287;
};
$arguments285 = array();
$arguments285['if'] = NULL;

$output269 .= '';

$output269 .= '
				';
return $output269;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['0'] = $renderingContext->getVariableProvider()->getByPath('row.isSectionHeader', $array267);

$expression268 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
					<div id="anchor_';
$array249 = array (
);
$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.sectionId', $array249)]);

$output248 .= '" class="tx-indexedsearch-sectionhead">
						<h2 class="tx-indexedsearch-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$array252 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.sectionTitle', $array252);
};
$arguments250 = array();
$arguments250['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output248 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output248 .= ' <span class="tx-indexedsearch-result-count">';
$array253 = array (
);
$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array253)]);

$output248 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['key'] = NULL;
$arguments254['id'] = NULL;
$arguments254['default'] = NULL;
$arguments254['arguments'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['languageKey'] = NULL;
$arguments254['alternativeLanguageKeys'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['then'] = NULL;
$arguments256['else'] = NULL;
$arguments256['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['0'] = $renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array259);
$array258['1'] = ' > 1';

$expression260 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments256['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression260(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array258)
					),
					$renderingContext
				);
$arguments256['then'] = 'result.pages';
$arguments256['else'] = 'result.page';
$arguments254['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext)]);

$output248 .= '</span></h2>
					</div>
					';
return $output248;
};
$arguments246['__elseClosures'][] = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['section'] = NULL;
$arguments262['partial'] = NULL;
$arguments262['delegate'] = NULL;
$arguments262['renderable'] = NULL;
$arguments262['arguments'] = array (
);
$arguments262['optional'] = false;
$arguments262['default'] = NULL;
$arguments262['contentAs'] = NULL;
$arguments262['debug'] = true;
$arguments262['partial'] = 'Searchresult';
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['row'] = $renderingContext->getVariableProvider()->getByPath('row', $array265);
$arguments262['arguments'] = $array264;

$output261 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output261 .= '
					';
return $output261;
};

$output245 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output245 .= '
			';
return $output245;
};
$arguments242 = array();
$arguments242['each'] = NULL;
$arguments242['as'] = NULL;
$arguments242['key'] = NULL;
$arguments242['reverse'] = false;
$arguments242['iteration'] = NULL;
$array244 = array (
);$arguments242['each'] = $renderingContext->getVariableProvider()->getByPath('result.rows', $array244);
$arguments242['as'] = 'row';

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output185 .= '
			<div class="tx-indexedsearch-browsebox">
				';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['maximumNumberOfResultPages'] = NULL;
$arguments292['numberOfResults'] = NULL;
$arguments292['resultsPerPage'] = NULL;
$arguments292['currentPage'] = 0;
$arguments292['freeIndexUid'] = NULL;
$array294 = array (
);$arguments292['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array294);
$array295 = array (
);$arguments292['maximumNumberOfResultPages'] = $renderingContext->getVariableProvider()->getByPath('settings.page_links', $array295);
$array296 = array (
);$arguments292['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array296);
$array297 = array (
);$arguments292['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array297);

$output185 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output185 .= '
			</div>
		';
return $output185;
};
$arguments183 = array();

$output182 .= '';

$output182 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
			<div class="tx-indexedsearch-info-noresult">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['key'] = NULL;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['languageKey'] = NULL;
$arguments301['alternativeLanguageKeys'] = NULL;
$arguments301['key'] = 'result.noResult';

$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output300 .= '
			</div>
		';
return $output300;
};
$arguments298 = array();
$arguments298['if'] = NULL;

$output182 .= '';

$output182 .= '
	';
return $output182;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['0'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array180);
$array179['1'] = ' > 0';

$expression181 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array179)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
			<div class="tx-indexedsearch-browsebox">
				<p>
					';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingResultsViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['numberOfResults'] = NULL;
$arguments64['resultsPerPage'] = NULL;
$arguments64['currentPage'] = 1;
$array66 = array (
);$arguments64['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array66);
$array67 = array (
);$arguments64['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array67);
$array68 = array (
);$arguments64['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array68);

$output63 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingResultsViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
					';
$array69 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('result.sectionText', $array69)]);

$output63 .= '
				</p>
				<!-- render the anchor-links to the sections inside the displayed result rows -->
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
					<div class="tx-indexedsearch-sectionlinks">
						<table cellpadding="0" cellspacing="0" border="0" summary="Result links">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
								<tr>
									<td width="100%">--&gt;&nbsp;
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array101 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sectionData.0', $array101)]);
};
$arguments99 = array();

$output98 .= '';

$output98 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['key'] = NULL;
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['languageKey'] = NULL;
$arguments104['alternativeLanguageKeys'] = NULL;
$arguments104['key'] = 'unnamedSection';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);
};
$arguments102 = array();
$arguments102['if'] = NULL;

$output98 .= '';

$output98 .= '
											';
return $output98;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('sectionData.0', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = function() use ($renderingContext, $self) {
$array92 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sectionData.0', $array92)]);
};
$arguments90['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'unnamedSection';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);
};

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
											&nbsp;(';
$array106 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sectionData.1', $array106)]);

$output89 .= '&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['key'] = NULL;
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['languageKey'] = NULL;
$arguments107['alternativeLanguageKeys'] = NULL;
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
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('sectionData.1', $array112);
$array111['1'] = ' > 1';

$expression113 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['then'] = 'result.pages';
$arguments109['else'] = 'result.page';
$arguments107['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output89 .= ')
										';
return $output89;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['target'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['pageUid'] = NULL;
$arguments80['pageType'] = NULL;
$arguments80['noCache'] = NULL;
$arguments80['noCacheHash'] = NULL;
$arguments80['section'] = NULL;
$arguments80['linkAccessRestrictedPages'] = NULL;
$arguments80['additionalParams'] = NULL;
$arguments80['absolute'] = NULL;
$arguments80['addQueryString'] = NULL;
$arguments80['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments80['addQueryStringMethod'] = NULL;
$output82 = '';

$output82 .= 'anchor_';
$array83 = array (
);
$output82 .= $renderingContext->getVariableProvider()->getByPath('sectionId', $array83);
$arguments80['section'] = $output82;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array84['0'] = 1;

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array86['0'] = 1;

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['noCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
// Rendering Array
$array88 = array();
$array88['0'] = 'id';
$arguments80['argumentsToBeExcludedFromQueryString'] = $array88;

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
									</td>
								</tr>
							';
return $output79;
};
$arguments76 = array();
$arguments76['each'] = NULL;
$arguments76['as'] = NULL;
$arguments76['key'] = NULL;
$arguments76['reverse'] = false;
$arguments76['iteration'] = NULL;
$array78 = array (
);$arguments76['each'] = $renderingContext->getVariableProvider()->getByPath('result.affectedSections', $array78);
$arguments76['as'] = 'sectionData';
$arguments76['key'] = 'sectionId';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
						</table>
					</div>
				';
return $output75;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('result.affectedSections', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = $renderChildrenClosure71;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output63 .= '
				';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['maximumNumberOfResultPages'] = NULL;
$arguments114['numberOfResults'] = NULL;
$arguments114['resultsPerPage'] = NULL;
$arguments114['currentPage'] = 0;
$arguments114['freeIndexUid'] = NULL;
$array116 = array (
);$arguments114['maximumNumberOfResultPages'] = $renderingContext->getVariableProvider()->getByPath('settings.page_links', $array116);
$array117 = array (
);$arguments114['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array117);
$array118 = array (
);$arguments114['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array118);
$array119 = array (
);$arguments114['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array119);

$output63 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output63 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
					<div id="anchor_';
$array151 = array (
);
$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.sectionId', $array151)]);

$output150 .= '" class="tx-indexedsearch-sectionhead">
						<h2 class="tx-indexedsearch-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$array154 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.sectionTitle', $array154);
};
$arguments152 = array();
$arguments152['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output150 .= ' <span class="tx-indexedsearch-result-count">';
$array155 = array (
);
$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array155)]);

$output150 .= ' ';
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array161 = array (
);$array160['0'] = $renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array161);
$array160['1'] = ' > 1';

$expression162 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
					),
					$renderingContext
				);
$arguments158['then'] = 'result.pages';
$arguments158['else'] = 'result.page';
$arguments156['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output150 .= '</span></h2>
					</div>
					';
return $output150;
};
$arguments148 = array();

$output147 .= '';

$output147 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['section'] = NULL;
$arguments166['partial'] = NULL;
$arguments166['delegate'] = NULL;
$arguments166['renderable'] = NULL;
$arguments166['arguments'] = array (
);
$arguments166['optional'] = false;
$arguments166['default'] = NULL;
$arguments166['contentAs'] = NULL;
$arguments166['debug'] = true;
$arguments166['partial'] = 'Searchresult';
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['row'] = $renderingContext->getVariableProvider()->getByPath('row', $array169);
$arguments166['arguments'] = $array168;

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '
					';
return $output165;
};
$arguments163 = array();
$arguments163['if'] = NULL;

$output147 .= '';

$output147 .= '
				';
return $output147;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('row.isSectionHeader', $array145);

$expression146 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
					<div id="anchor_';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.sectionId', $array127)]);

$output126 .= '" class="tx-indexedsearch-sectionhead">
						<h2 class="tx-indexedsearch-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array130 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.sectionTitle', $array130);
};
$arguments128 = array();
$arguments128['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output126 .= ' <span class="tx-indexedsearch-result-count">';
$array131 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array131)]);

$output126 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['key'] = NULL;
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['arguments'] = NULL;
$arguments132['extensionName'] = NULL;
$arguments132['languageKey'] = NULL;
$arguments132['alternativeLanguageKeys'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$arguments134['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array137);
$array136['1'] = ' > 1';

$expression138 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments134['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$arguments134['then'] = 'result.pages';
$arguments134['else'] = 'result.page';
$arguments132['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext)]);

$output126 .= '</span></h2>
					</div>
					';
return $output126;
};
$arguments124['__elseClosures'][] = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['section'] = NULL;
$arguments140['partial'] = NULL;
$arguments140['delegate'] = NULL;
$arguments140['renderable'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['optional'] = false;
$arguments140['default'] = NULL;
$arguments140['contentAs'] = NULL;
$arguments140['debug'] = true;
$arguments140['partial'] = 'Searchresult';
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['row'] = $renderingContext->getVariableProvider()->getByPath('row', $array143);
$arguments140['arguments'] = $array142;

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
					';
return $output139;
};

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
			';
return $output123;
};
$arguments120 = array();
$arguments120['each'] = NULL;
$arguments120['as'] = NULL;
$arguments120['key'] = NULL;
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$array122 = array (
);$arguments120['each'] = $renderingContext->getVariableProvider()->getByPath('result.rows', $array122);
$arguments120['as'] = 'row';

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output63 .= '
			<div class="tx-indexedsearch-browsebox">
				';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['maximumNumberOfResultPages'] = NULL;
$arguments170['numberOfResults'] = NULL;
$arguments170['resultsPerPage'] = NULL;
$arguments170['currentPage'] = 0;
$arguments170['freeIndexUid'] = NULL;
$array172 = array (
);$arguments170['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array172);
$array173 = array (
);$arguments170['maximumNumberOfResultPages'] = $renderingContext->getVariableProvider()->getByPath('settings.page_links', $array173);
$array174 = array (
);$arguments170['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array174);
$array175 = array (
);$arguments170['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array175);

$output63 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output63 .= '
			</div>
		';
return $output63;
};
$arguments61['__elseClosures'][] = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
			<div class="tx-indexedsearch-info-noresult">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['languageKey'] = NULL;
$arguments177['alternativeLanguageKeys'] = NULL;
$arguments177['key'] = 'result.noResult';

$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output176 .= '
			</div>
		';
return $output176;
};

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output12 .= '
';
return $output12;
};
$arguments9 = array();
$arguments9['each'] = NULL;
$arguments9['as'] = NULL;
$arguments9['key'] = NULL;
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$array11 = array (
);$arguments9['each'] = $renderingContext->getVariableProvider()->getByPath('resultsets', $array11);
$arguments9['as'] = 'result';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#