<?php

class partial_List_Item_967443c0f57a6f6bbfbb65099753670fbbcad288 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
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
<!--
	=====================
		Partials/List/Item.html
-->
<div class="article articletype-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array1)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['then'] = ' topnews';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['newsItem'] = NULL;
$array9 = array (
);$arguments7['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array9);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
	<!-- header -->
	<div class="header">
		<h3>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
				<span itemprop="headline">';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array16)]);

$output15 .= '</span>
			';
return $output15;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['newsItem'] = NULL;
$arguments10['settings'] = array (
);
$arguments10['uriOnly'] = false;
$arguments10['configuration'] = array (
);
$arguments10['content'] = '';
$arguments10['section'] = NULL;
$array12 = array (
);$arguments10['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array12);
$array13 = array (
);$arguments10['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array13);
$array14 = array (
);$arguments10['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array14);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
		</h3>
	</div>

	<!-- teaser -->
	<div class="teaser-text">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array54);
};
$arguments49 = array();
$arguments49['maxCharacters'] = NULL;
$arguments49['append'] = '&hellip;';
$arguments49['respectWordBoundaries'] = true;
$arguments49['respectHtml'] = true;
$array51 = array (
);$arguments49['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array51);
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array52['0'] = 1;

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);
};
$arguments47 = array();
$arguments47['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '</div>
			';
return $output46;
};
$arguments44 = array();

$output43 .= '';

$output43 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$array65 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array65);
};
$arguments60 = array();
$arguments60['maxCharacters'] = NULL;
$arguments60['append'] = '&hellip;';
$arguments60['respectWordBoundaries'] = true;
$arguments60['respectHtml'] = true;
$array62 = array (
);$arguments60['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array62);
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array63['0'] = 1;

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);
};
$arguments58 = array();
$arguments58['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '</div>
			';
return $output57;
};
$arguments55 = array();
$arguments55['if'] = NULL;

$output43 .= '';

$output43 .= '
		';
return $output43;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array30 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array30);
};
$arguments25 = array();
$arguments25['maxCharacters'] = NULL;
$arguments25['append'] = '&hellip;';
$arguments25['respectWordBoundaries'] = true;
$arguments25['respectHtml'] = true;
$array27 = array (
);$arguments25['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array27);
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array28['0'] = 1;

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
};
$arguments23 = array();
$arguments23['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '</div>
			';
return $output22;
};
$arguments20['__elseClosures'][] = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array39 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array39);
};
$arguments34 = array();
$arguments34['maxCharacters'] = NULL;
$arguments34['append'] = '&hellip;';
$arguments34['respectWordBoundaries'] = true;
$arguments34['respectHtml'] = true;
$array36 = array (
);$arguments34['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array36);
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array37['0'] = 1;

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);
};
$arguments32 = array();
$arguments32['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '</div>
			';
return $output31;
};

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
		';
return $output19;
};
$arguments17 = array();

$output0 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$arguments72['key'] = 'more-link';

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output71 .= '
		';
return $output71;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['newsItem'] = NULL;
$arguments66['settings'] = array (
);
$arguments66['uriOnly'] = false;
$arguments66['configuration'] = array (
);
$arguments66['content'] = '';
$arguments66['section'] = NULL;
$array68 = array (
);$arguments66['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array68);
$array69 = array (
);$arguments66['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array69);
$arguments66['class'] = 'more';
$array70 = array (
);$arguments66['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array70);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output0 .= '
	</div>

	<!-- footer information -->
	<div class="footer">
		<p>
			<!-- date -->
			<span class="news-list-date">
				<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['date'] = NULL;
$arguments74['format'] = '';
$arguments74['base'] = NULL;
$array76 = array (
);$arguments74['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array76);
$arguments74['format'] = 'Y-m-d';
$renderChildrenClosure75 = ($arguments74['date'] !== null) ? function() use ($arguments74) { return $arguments74['date']; } : $renderChildrenClosure75;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output0 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array81 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array81);
};
$arguments77 = array();
$arguments77['date'] = NULL;
$arguments77['format'] = '';
$arguments77['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['languageKey'] = NULL;
$arguments79['alternativeLanguageKeys'] = NULL;
$arguments79['key'] = 'dateFormat';
$arguments77['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);
$renderChildrenClosure78 = ($arguments77['date'] !== null) ? function() use ($arguments77) { return $arguments77['date']; } : $renderChildrenClosure78;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output0 .= '
				</time>
			</span>

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
				<!-- first category -->
				<span class="news-list-category">';
$array88 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.title', $array88)]);

$output87 .= '</span>
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
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output0 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
				<!-- Tags -->
				<span class="news-list-tags" itemprop="keywords">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
						';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.title', $array99)]);

$output98 .= '
					';
return $output98;
};
$arguments95 = array();
$arguments95['each'] = NULL;
$arguments95['as'] = NULL;
$arguments95['key'] = NULL;
$arguments95['reverse'] = false;
$arguments95['iteration'] = NULL;
$array97 = array (
);$arguments95['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array97);
$arguments95['as'] = 'tag';

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
				</span>
			';
return $output94;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array92);

$expression93 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);
$arguments89['__thenClosure'] = $renderChildrenClosure90;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output0 .= '

			<!-- author -->
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
				<span class="news-list-author">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['key'] = NULL;
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['languageKey'] = NULL;
$arguments106['alternativeLanguageKeys'] = NULL;
$arguments106['key'] = 'author';
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array109);
$arguments106['arguments'] = $array108;

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output105 .= '
				</span>
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
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array103);

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = $renderChildrenClosure101;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output0 .= '
		</p>
	</div>
</div>

';

return $output0;
}


}
#