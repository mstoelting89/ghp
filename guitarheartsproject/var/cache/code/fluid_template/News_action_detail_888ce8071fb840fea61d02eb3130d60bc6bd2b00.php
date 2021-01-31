<?php

class News_action_detail_888ce8071fb840fea61d02eb3130d60bc6bd2b00 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Detail';
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['newsItem'] = NULL;
$array12 = array (
);$arguments10['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array12);

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output9 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$arguments19['partial'] = 'Detail/Opengraph';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array22);
$array23 = array (
);$array21['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array23);
$arguments19['arguments'] = $array21;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
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
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showMetaTags', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output9 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                    ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$array52 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array52);
};
$arguments50 = array();
$arguments50['value'] = NULL;
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = NULL;
$renderChildrenClosure51 = ($arguments50['value'] !== null) ? function() use ($arguments50) { return $arguments50['value']; } : $renderChildrenClosure51;
$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                    ';
return $output49;
};
$arguments47 = array();

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output46 .= '
                ';
return $output46;
};
$arguments44 = array();

$output43 .= '';

$output43 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                    ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$array61 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array61);
};
$arguments59 = array();
$arguments59['value'] = NULL;
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$renderChildrenClosure60 = ($arguments59['value'] !== null) ? function() use ($arguments59) { return $arguments59['value']; } : $renderChildrenClosure60;
$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
                    ';
return $output58;
};
$arguments56 = array();

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '
                ';
return $output55;
};
$arguments53 = array();
$arguments53['if'] = NULL;

$output43 .= '';

$output43 .= '
            ';
return $output43;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                    ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$array32 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array32);
};
$arguments30 = array();
$arguments30['value'] = NULL;
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$renderChildrenClosure31 = ($arguments30['value'] !== null) ? function() use ($arguments30) { return $arguments30['value']; } : $renderChildrenClosure31;
$output29 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                    ';
return $output29;
};
$arguments27 = array();

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '
                ';
return $output26;
};
$arguments24['__elseClosures'][] = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                    ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$array39 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array39);
};
$arguments37 = array();
$arguments37['value'] = NULL;
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$renderChildrenClosure38 = ($arguments37['value'] !== null) ? function() use ($arguments37) { return $arguments37['value']; } : $renderChildrenClosure38;
$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
                    ';
return $output36;
};
$arguments34 = array();

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output33 .= '
                ';
return $output33;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output9 .= '
		';
return $output9;
};
$arguments7 = array();

$output6 .= GeorgRinger\News\ViewHelpers\Format\NothingViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
					<ul class="pager">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
							<li class="previous">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
									<span aria-hidden="true">&larr; </span>';
$array90 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.prev.title', $array90)]);

$output89 .= '
								';
return $output89;
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['newsItem'] = NULL;
$arguments85['settings'] = array (
);
$arguments85['uriOnly'] = false;
$arguments85['configuration'] = array (
);
$arguments85['content'] = '';
$arguments85['section'] = NULL;
$array87 = array (
);$arguments85['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array87);
$array88 = array (
);$arguments85['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array88);

$output84 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
							</li>
						';
return $output84;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
							<li class="next">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
									';
$array102 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.next.title', $array102)]);

$output101 .= ' <span aria-hidden="true"> &rarr;</span>
								';
return $output101;
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['newsItem'] = NULL;
$arguments97['settings'] = array (
);
$arguments97['uriOnly'] = false;
$arguments97['configuration'] = array (
);
$arguments97['content'] = '';
$arguments97['section'] = NULL;
$array99 = array (
);$arguments97['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array99);
$array100 = array (
);$arguments97['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array100);
$arguments97['class'] = 'next';

$output96 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
							</li>
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
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output78 .= '
					</ul>
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
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('paginated', $array76);

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
			';
return $output72;
};
$arguments68 = array();
$arguments68['news'] = NULL;
$arguments68['pidList'] = '';
$arguments68['sortField'] = 'datetime';
$arguments68['as'] = NULL;
$arguments68['includeInternalType'] = NULL;
$arguments68['includeExternalType'] = NULL;
$array70 = array (
);$arguments68['pidList'] = $renderingContext->getVariableProvider()->getByPath('newsItem.pid', $array70);
$array71 = array (
);$arguments68['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array71);
$arguments68['as'] = 'paginated';
$arguments68['sortField'] = 'datetime';

$output67 .= GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

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
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showPrevNext', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output6 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
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
$arguments140['section'] = 'headline';
$arguments140['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
				<div class="row">
					<div class="col-md-8 col-lg-12">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['section'] = NULL;
$arguments143['partial'] = NULL;
$arguments143['delegate'] = NULL;
$arguments143['renderable'] = NULL;
$arguments143['arguments'] = array (
);
$arguments143['optional'] = false;
$arguments143['default'] = NULL;
$arguments143['contentAs'] = NULL;
$arguments143['debug'] = true;
$arguments143['section'] = 'inner-content';
$arguments143['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output139 .= '
					</div>

					<div class="col-md-4">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
							<div class="thumbnail">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['alt'] = NULL;
$arguments150['file'] = NULL;
$arguments150['additionalConfig'] = array (
);
$arguments150['width'] = NULL;
$arguments150['height'] = NULL;
$arguments150['cropVariant'] = 'default';
$arguments150['fileExtension'] = NULL;
$arguments150['loading'] = NULL;
$array152 = array (
);$arguments150['file'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array152);
$arguments150['class'] = 'img-responsive';

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
									<div class="caption">
										';
$array159 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array159)]);

$output158 .= '
									</div>
								';
return $output158;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array156);

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['__thenClosure'] = $renderChildrenClosure154;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output149 .= '
							</div>
						';
return $output149;
};
$arguments146 = array();
$arguments146['each'] = NULL;
$arguments146['as'] = NULL;
$arguments146['key'] = NULL;
$arguments146['reverse'] = false;
$arguments146['iteration'] = NULL;
$array148 = array (
);$arguments146['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array148);
$arguments146['as'] = 'mediaElement';

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output139 .= '
					</div>

				</div>
			';
return $output139;
};
$arguments137 = array();

$output136 .= '';

$output136 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['section'] = NULL;
$arguments163['partial'] = NULL;
$arguments163['delegate'] = NULL;
$arguments163['renderable'] = NULL;
$arguments163['arguments'] = array (
);
$arguments163['optional'] = false;
$arguments163['default'] = NULL;
$arguments163['contentAs'] = NULL;
$arguments163['debug'] = true;
$arguments163['section'] = 'headline';
$arguments163['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
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
$arguments166['section'] = 'inner-content';
$arguments166['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output162 .= '
			';
return $output162;
};
$arguments160 = array();
$arguments160['if'] = NULL;

$output136 .= '';

$output136 .= '
		';
return $output136;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array134);

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['renderable'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['debug'] = true;
$arguments106['section'] = 'headline';
$arguments106['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
				<div class="row">
					<div class="col-md-8 col-lg-12">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['section'] = 'inner-content';
$arguments109['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output105 .= '
					</div>

					<div class="col-md-4">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
							<div class="thumbnail">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['alt'] = NULL;
$arguments116['file'] = NULL;
$arguments116['additionalConfig'] = array (
);
$arguments116['width'] = NULL;
$arguments116['height'] = NULL;
$arguments116['cropVariant'] = 'default';
$arguments116['fileExtension'] = NULL;
$arguments116['loading'] = NULL;
$array118 = array (
);$arguments116['file'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array118);
$arguments116['class'] = 'img-responsive';

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
									<div class="caption">
										';
$array125 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array125)]);

$output124 .= '
									</div>
								';
return $output124;
};
$arguments119 = array();
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array122);

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments119['__thenClosure'] = $renderChildrenClosure120;

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output115 .= '
							</div>
						';
return $output115;
};
$arguments112 = array();
$arguments112['each'] = NULL;
$arguments112['as'] = NULL;
$arguments112['key'] = NULL;
$arguments112['reverse'] = false;
$arguments112['iteration'] = NULL;
$array114 = array (
);$arguments112['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array114);
$arguments112['as'] = 'mediaElement';

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output105 .= '
					</div>

				</div>
			';
return $output105;
};
$arguments103['__elseClosures'][] = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['section'] = NULL;
$arguments127['partial'] = NULL;
$arguments127['delegate'] = NULL;
$arguments127['renderable'] = NULL;
$arguments127['arguments'] = array (
);
$arguments127['optional'] = false;
$arguments127['default'] = NULL;
$arguments127['contentAs'] = NULL;
$arguments127['debug'] = true;
$arguments127['section'] = 'headline';
$arguments127['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
				';
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
$arguments130['section'] = 'inner-content';
$arguments130['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output126 .= '
			';
return $output126;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output6 .= '
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array4);

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

return $output0;
}
/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output169 = '';

$output169 .= '
	<h1 itemprop="headline">';
$array170 = array (
);
$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array170)]);

$output169 .= '</h1>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['section'] = NULL;
$arguments171['partial'] = NULL;
$arguments171['delegate'] = NULL;
$arguments171['renderable'] = NULL;
$arguments171['arguments'] = array (
);
$arguments171['optional'] = false;
$arguments171['default'] = NULL;
$arguments171['contentAs'] = NULL;
$arguments171['debug'] = true;
$arguments171['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array174);
$array175 = array (
);$array173['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array175);
$arguments171['arguments'] = $array173;

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output169 .= '
';

return $output169;
}
/**
 * section inner-content
 */
public function section_f614ee6568201c42c4bc472ffd587e542a12a348(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output176 = '';

$output176 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RenderMediaViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
			<!-- teaser -->
			<div class="lead" itemprop="description">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$array189 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array189);
};
$arguments187 = array();
$arguments187['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
			</div>
		';
return $output186;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array184);

$expression185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$arguments181['__thenClosure'] = $renderChildrenClosure182;

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
			<!-- content elements -->
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$array198 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.contentElementIdList', $array198);
};
$arguments196 = array();
$arguments196['data'] = NULL;
$arguments196['typoscriptObjectPath'] = NULL;
$arguments196['currentValueKey'] = NULL;
$arguments196['table'] = '';
$arguments196['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$renderChildrenClosure197 = ($arguments196['data'] !== null) ? function() use ($arguments196) { return $arguments196['data']; } : $renderChildrenClosure197;
$output195 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
		';
return $output195;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.contentElements', $array193);

$expression194 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$arguments190['__thenClosure'] = $renderChildrenClosure191;

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output180 .= '

		<!-- main text -->
		<div class="news-text-wrap" itemprop="articleBody">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$array201 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array201);
};
$arguments199 = array();
$arguments199['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output180 .= '
		</div>
	';
return $output180;
};
$arguments177 = array();
$arguments177['news'] = NULL;
$arguments177['imgClass'] = NULL;
$arguments177['videoClass'] = NULL;
$arguments177['audioClass'] = NULL;
$array179 = array (
);$arguments177['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array179);
$arguments177['imgClass'] = 'img-responsive';
$arguments177['videoClass'] = 'video-wrapper';
$arguments177['audioClass'] = 'audio-wrapper';

$output176 .= GeorgRinger\News\ViewHelpers\RenderMediaViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
		<!-- Link Back -->
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['key'] = NULL;
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['languageKey'] = NULL;
$arguments212['alternativeLanguageKeys'] = NULL;
$arguments212['key'] = 'back-link';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);

$output211 .= '
		';
return $output211;
};
$arguments208 = array();
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['target'] = NULL;
$arguments208['rel'] = NULL;
$arguments208['pageUid'] = NULL;
$arguments208['pageType'] = NULL;
$arguments208['noCache'] = NULL;
$arguments208['language'] = NULL;
$arguments208['noCacheHash'] = NULL;
$arguments208['section'] = NULL;
$arguments208['linkAccessRestrictedPages'] = NULL;
$arguments208['additionalParams'] = NULL;
$arguments208['absolute'] = NULL;
$arguments208['addQueryString'] = NULL;
$arguments208['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments208['addQueryStringMethod'] = NULL;
$arguments208['class'] = 'btn btn-default';
$array210 = array (
);$arguments208['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array210);

$output207 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
	';
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output176 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return '
			Care about the privacy of your readers?
			Checkout https://typo3.org/extensions/repository/view/rx_shariff
			and it will be used automatically!
		';
};
$arguments220 = array();

$output219 .= NULL;

$output219 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['section'] = NULL;
$arguments225['partial'] = NULL;
$arguments225['delegate'] = NULL;
$arguments225['renderable'] = NULL;
$arguments225['arguments'] = array (
);
$arguments225['optional'] = false;
$arguments225['default'] = NULL;
$arguments225['contentAs'] = NULL;
$arguments225['debug'] = true;
$arguments225['partial'] = 'Detail/Shariff';

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output224 .= '
		';
return $output224;
};
$arguments222 = array();
$arguments222['extensionKey'] = NULL;
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$arguments222['extensionKey'] = 'rx_shariff';
$arguments222['__thenClosure'] = $renderChildrenClosure223;

$output219 .= GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output219 .= '
	';
return $output219;
};
$arguments214 = array();
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$arguments214['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array216 = array();
$array217 = array (
);$array216['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showSocialShareButtons', $array217);

$expression218 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments214['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array216)
					),
					$renderingContext
				);
$arguments214['__thenClosure'] = $renderChildrenClosure215;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output176 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
		Various options exist to fetch different related information:
		- ';
$array230 = array (
);
$output229 .= $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array230);

$output229 .= ': all related news, related und related from, sorted by date
		- ';
$array231 = array (
);
$output229 .= $renderingContext->getVariableProvider()->getByPath('newsItem.related', $array231);

$output229 .= ': all related
		- ';
$array232 = array (
);
$output229 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedSorted', $array232);

$output229 .= ': all related, sorted by date
		- ';
$array233 = array (
);
$output229 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFrom', $array233);

$output229 .= ': all related from
		- ';
$array234 = array (
);
$output229 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFromSorted', $array234);

$output229 .= ': all related from, sorted by date
	';
return $output229;
};
$arguments227 = array();

$output176 .= NULL;

$output176 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
		<!-- Related news records -->
		<div class="news-related news-related-news">
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['languageKey'] = NULL;
$arguments241['alternativeLanguageKeys'] = NULL;
$arguments241['key'] = 'related-news';

$output240 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext)]);

$output240 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
					<li>
						<span class="news-related-news-date">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$array251 = array (
);return $renderingContext->getVariableProvider()->getByPath('related.datetime', $array251);
};
$arguments247 = array();
$arguments247['date'] = NULL;
$arguments247['format'] = '';
$arguments247['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['key'] = NULL;
$arguments249['id'] = NULL;
$arguments249['default'] = NULL;
$arguments249['arguments'] = NULL;
$arguments249['extensionName'] = NULL;
$arguments249['languageKey'] = NULL;
$arguments249['alternativeLanguageKeys'] = NULL;
$arguments249['key'] = 'dateFormat';
$arguments247['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);
$renderChildrenClosure248 = ($arguments247['date'] !== null) ? function() use ($arguments247) { return $arguments247['date']; } : $renderChildrenClosure248;
$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output246 .= '
						</span>
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
							';
$array258 = array (
);
$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('related.title', $array258)]);

$output257 .= '
						';
return $output257;
};
$arguments252 = array();
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['newsItem'] = NULL;
$arguments252['settings'] = array (
);
$arguments252['uriOnly'] = false;
$arguments252['configuration'] = array (
);
$arguments252['content'] = '';
$arguments252['section'] = NULL;
$array254 = array (
);$arguments252['newsItem'] = $renderingContext->getVariableProvider()->getByPath('related', $array254);
$array255 = array (
);$arguments252['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array255);
$array256 = array (
);$arguments252['title'] = $renderingContext->getVariableProvider()->getByPath('related.title', $array256);

$output246 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output246 .= '
					</li>

				';
return $output246;
};
$arguments243 = array();
$arguments243['each'] = NULL;
$arguments243['as'] = NULL;
$arguments243['key'] = NULL;
$arguments243['reverse'] = false;
$arguments243['iteration'] = NULL;
$array245 = array (
);$arguments243['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array245);
$arguments243['as'] = 'related';

$output240 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output240 .= '
			</ul>
		</div>
	';
return $output240;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array238);

$expression239 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
$arguments235['__thenClosure'] = $renderChildrenClosure236;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output176 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
		<!-- related files -->
		<div class="news-related news-related-files">
			<h4>
				';
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
$arguments265['key'] = 'related-files';

$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext)]);

$output264 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
					<li>
						<span class="news-related-files-link">
							<a href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$array274 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.publicUrl', $array274);
};
$arguments271 = array();
$arguments271['value'] = NULL;
$arguments271['keepQuotes'] = false;
$arguments271['encoding'] = 'UTF-8';
$arguments271['doubleEncode'] = true;
$value273 = ($arguments271['value'] !== NULL ? $arguments271['value'] : $renderChildrenClosure272());

$output270 .= !is_string($value273) && !(is_object($value273) && method_exists($value273, '__toString')) ? $value273 : htmlspecialchars($value273, ($arguments271['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments271['encoding'], $arguments271['doubleEncode']);

$output270 .= '" target="_blank">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$array280 = array (
);$arguments275['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array280)]);
$array281 = array (
);$arguments275['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.name', $array281)]);

$output270 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output270 .= '
							</a>
						</span>
						<span class="news-related-files-size"> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$array284 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.size', $array284);
};
$arguments282 = array();
$arguments282['value'] = NULL;
$arguments282['decimals'] = 0;
$arguments282['decimalSeparator'] = '.';
$arguments282['thousandsSeparator'] = ',';
$arguments282['units'] = NULL;
$renderChildrenClosure283 = ($arguments282['value'] !== null) ? function() use ($arguments282) { return $arguments282['value']; } : $renderChildrenClosure283;
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output270 .= ' </span>
					</li>
				';
return $output270;
};
$arguments267 = array();
$arguments267['each'] = NULL;
$arguments267['as'] = NULL;
$arguments267['key'] = NULL;
$arguments267['reverse'] = false;
$arguments267['iteration'] = NULL;
$array269 = array (
);$arguments267['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array269);
$arguments267['as'] = 'relatedFile';

$output264 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output264 .= '
			</ul>
		</div>
	';
return $output264;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array262);

$expression263 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output176 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
		<!-- Related links -->
		<div class="news-related news-related-links">
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['key'] = NULL;
$arguments291['id'] = NULL;
$arguments291['default'] = NULL;
$arguments291['arguments'] = NULL;
$arguments291['extensionName'] = NULL;
$arguments291['languageKey'] = NULL;
$arguments291['alternativeLanguageKeys'] = NULL;
$arguments291['key'] = 'related-links';

$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output290 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['then'] = NULL;
$arguments304['else'] = NULL;
$arguments304['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array306 = array();
$array307 = array (
);$array306['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array307);

$expression308 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments304['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array306)
					),
					$renderingContext
				);
$array309 = array (
);$arguments304['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array309)]);
$array310 = array (
);$arguments304['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array310)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);
};
$arguments297 = array();
$arguments297['parameter'] = NULL;
$arguments297['target'] = '';
$arguments297['class'] = '';
$arguments297['title'] = '';
$arguments297['language'] = NULL;
$arguments297['additionalParams'] = '';
$arguments297['additionalAttributes'] = array (
);
$arguments297['useCacheHash'] = NULL;
$arguments297['addQueryString'] = false;
$arguments297['addQueryStringMethod'] = 'GET';
$arguments297['addQueryStringExclude'] = '';
$arguments297['absolute'] = false;
$arguments297['parts-as'] = 'typoLinkParts';
$array299 = array (
);$arguments297['parameter'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array299);
$array300 = array (
);$arguments297['title'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array300);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['link'] = NULL;
$array303 = array (
);$arguments301['link'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array303);
$arguments297['target'] = GeorgRinger\News\ViewHelpers\TargetLinkViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output296 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output296 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '<span>';
$array317 = array (
);
$output316 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array317)]);

$output316 .= '</span>
						';
return $output316;
};
$arguments311 = array();
$arguments311['then'] = NULL;
$arguments311['else'] = NULL;
$arguments311['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array313 = array();
$array314 = array (
);$array313['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array314);

$expression315 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments311['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array313)
					),
					$renderingContext
				);
$arguments311['__thenClosure'] = $renderChildrenClosure312;

$output296 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output296 .= '
					</li>
				';
return $output296;
};
$arguments293 = array();
$arguments293['each'] = NULL;
$arguments293['as'] = NULL;
$arguments293['key'] = NULL;
$arguments293['reverse'] = false;
$arguments293['iteration'] = NULL;
$array295 = array (
);$arguments293['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array295);
$arguments293['as'] = 'relatedLink';

$output290 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output290 .= '
			</ul>
		</div>
	';
return $output290;
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array288);

$expression289 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments285['__thenClosure'] = $renderChildrenClosure286;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output176 .= '
';

return $output176;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output318 = '';

$output318 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['name'] = NULL;
$arguments319['name'] = 'Detail';

$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output318 .= '

<!--
	=====================
		News/Detail.html
-->

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments333 = array();
$arguments333['newsItem'] = NULL;
$array335 = array (
);$arguments333['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array335);

$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext)]);

$output332 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['section'] = NULL;
$arguments342['partial'] = NULL;
$arguments342['delegate'] = NULL;
$arguments342['renderable'] = NULL;
$arguments342['arguments'] = array (
);
$arguments342['optional'] = false;
$arguments342['default'] = NULL;
$arguments342['contentAs'] = NULL;
$arguments342['debug'] = true;
$arguments342['partial'] = 'Detail/Opengraph';
// Rendering Array
$array344 = array();
$array345 = array (
);$array344['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array345);
$array346 = array (
);$array344['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array346);
$arguments342['arguments'] = $array344;

$output341 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output341 .= '
			';
return $output341;
};
$arguments336 = array();
$arguments336['then'] = NULL;
$arguments336['else'] = NULL;
$arguments336['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array338 = array();
$array339 = array (
);$array338['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showMetaTags', $array339);

$expression340 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments336['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression340(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array338)
					),
					$renderingContext
				);
$arguments336['__thenClosure'] = $renderChildrenClosure337;

$output332 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output332 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$output366 = '';

$output366 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
                    ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$array375 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array375);
};
$arguments373 = array();
$arguments373['value'] = NULL;
$arguments373['keepQuotes'] = false;
$arguments373['encoding'] = NULL;
$renderChildrenClosure374 = ($arguments373['value'] !== null) ? function() use ($arguments373) { return $arguments373['value']; } : $renderChildrenClosure374;
$output372 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output372 .= '
                    ';
return $output372;
};
$arguments370 = array();

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext)]);

$output369 .= '
                ';
return $output369;
};
$arguments367 = array();

$output366 .= '';

$output366 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
                    ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$array384 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array384);
};
$arguments382 = array();
$arguments382['value'] = NULL;
$arguments382['keepQuotes'] = false;
$arguments382['encoding'] = NULL;
$renderChildrenClosure383 = ($arguments382['value'] !== null) ? function() use ($arguments382) { return $arguments382['value']; } : $renderChildrenClosure383;
$output381 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
                    ';
return $output381;
};
$arguments379 = array();

$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext)]);

$output378 .= '
                ';
return $output378;
};
$arguments376 = array();
$arguments376['if'] = NULL;

$output366 .= '';

$output366 .= '
            ';
return $output366;
};
$arguments347 = array();
$arguments347['then'] = NULL;
$arguments347['else'] = NULL;
$arguments347['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array363 = array();
$array364 = array (
);$array363['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array364);

$expression365 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments347['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression365(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array363)
					),
					$renderingContext
				);
$arguments347['__thenClosure'] = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
                    ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$array355 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array355);
};
$arguments353 = array();
$arguments353['value'] = NULL;
$arguments353['keepQuotes'] = false;
$arguments353['encoding'] = NULL;
$renderChildrenClosure354 = ($arguments353['value'] !== null) ? function() use ($arguments353) { return $arguments353['value']; } : $renderChildrenClosure354;
$output352 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output352 .= '
                    ';
return $output352;
};
$arguments350 = array();

$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext)]);

$output349 .= '
                ';
return $output349;
};
$arguments347['__elseClosures'][] = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
                    ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
$array362 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array362);
};
$arguments360 = array();
$arguments360['value'] = NULL;
$arguments360['keepQuotes'] = false;
$arguments360['encoding'] = NULL;
$renderChildrenClosure361 = ($arguments360['value'] !== null) ? function() use ($arguments360) { return $arguments360['value']; } : $renderChildrenClosure361;
$output359 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output359 .= '
                    ';
return $output359;
};
$arguments357 = array();

$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext)]);

$output356 .= '
                ';
return $output356;
};

$output332 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output332 .= '
		';
return $output332;
};
$arguments330 = array();

$output329 .= GeorgRinger\News\ViewHelpers\Format\NothingViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output329 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output390 = '';

$output390 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
					<ul class="pager">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '
							<li class="previous">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
									<span aria-hidden="true">&larr; </span>';
$array413 = array (
);
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.prev.title', $array413)]);

$output412 .= '
								';
return $output412;
};
$arguments408 = array();
$arguments408['additionalAttributes'] = NULL;
$arguments408['data'] = NULL;
$arguments408['class'] = NULL;
$arguments408['dir'] = NULL;
$arguments408['id'] = NULL;
$arguments408['lang'] = NULL;
$arguments408['style'] = NULL;
$arguments408['title'] = NULL;
$arguments408['accesskey'] = NULL;
$arguments408['tabindex'] = NULL;
$arguments408['onclick'] = NULL;
$arguments408['newsItem'] = NULL;
$arguments408['settings'] = array (
);
$arguments408['uriOnly'] = false;
$arguments408['configuration'] = array (
);
$arguments408['content'] = '';
$arguments408['section'] = NULL;
$array410 = array (
);$arguments408['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array410);
$array411 = array (
);$arguments408['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array411);

$output407 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output407 .= '
							</li>
						';
return $output407;
};
$arguments402 = array();
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$arguments402['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array404 = array();
$array405 = array (
);$array404['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array405);

$expression406 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments402['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression406(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array404)
					),
					$renderingContext
				);
$arguments402['__thenClosure'] = $renderChildrenClosure403;

$output401 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
							<li class="next">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
									';
$array425 = array (
);
$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.next.title', $array425)]);

$output424 .= ' <span aria-hidden="true"> &rarr;</span>
								';
return $output424;
};
$arguments420 = array();
$arguments420['additionalAttributes'] = NULL;
$arguments420['data'] = NULL;
$arguments420['class'] = NULL;
$arguments420['dir'] = NULL;
$arguments420['id'] = NULL;
$arguments420['lang'] = NULL;
$arguments420['style'] = NULL;
$arguments420['title'] = NULL;
$arguments420['accesskey'] = NULL;
$arguments420['tabindex'] = NULL;
$arguments420['onclick'] = NULL;
$arguments420['newsItem'] = NULL;
$arguments420['settings'] = array (
);
$arguments420['uriOnly'] = false;
$arguments420['configuration'] = array (
);
$arguments420['content'] = '';
$arguments420['section'] = NULL;
$array422 = array (
);$arguments420['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array422);
$array423 = array (
);$arguments420['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array423);
$arguments420['class'] = 'next';

$output419 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
							</li>
						';
return $output419;
};
$arguments414 = array();
$arguments414['then'] = NULL;
$arguments414['else'] = NULL;
$arguments414['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array416 = array();
$array417 = array (
);$array416['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array417);

$expression418 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments414['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression418(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array416)
					),
					$renderingContext
				);
$arguments414['__thenClosure'] = $renderChildrenClosure415;

$output401 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output401 .= '
					</ul>
				';
return $output401;
};
$arguments396 = array();
$arguments396['then'] = NULL;
$arguments396['else'] = NULL;
$arguments396['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('paginated', $array399);

$expression400 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments396['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments396['__thenClosure'] = $renderChildrenClosure397;

$output395 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
			';
return $output395;
};
$arguments391 = array();
$arguments391['news'] = NULL;
$arguments391['pidList'] = '';
$arguments391['sortField'] = 'datetime';
$arguments391['as'] = NULL;
$arguments391['includeInternalType'] = NULL;
$arguments391['includeExternalType'] = NULL;
$array393 = array (
);$arguments391['pidList'] = $renderingContext->getVariableProvider()->getByPath('newsItem.pid', $array393);
$array394 = array (
);$arguments391['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array394);
$arguments391['as'] = 'paginated';
$arguments391['sortField'] = 'datetime';

$output390 .= GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output390 .= '
		';
return $output390;
};
$arguments385 = array();
$arguments385['then'] = NULL;
$arguments385['else'] = NULL;
$arguments385['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array387 = array();
$array388 = array (
);$array387['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showPrevNext', $array388);

$expression389 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments385['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression389(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array387)
					),
					$renderingContext
				);
$arguments385['__thenClosure'] = $renderChildrenClosure386;

$output329 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output329 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['section'] = NULL;
$arguments463['partial'] = NULL;
$arguments463['delegate'] = NULL;
$arguments463['renderable'] = NULL;
$arguments463['arguments'] = array (
);
$arguments463['optional'] = false;
$arguments463['default'] = NULL;
$arguments463['contentAs'] = NULL;
$arguments463['debug'] = true;
$arguments463['section'] = 'headline';
$arguments463['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output462 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output462 .= '
				<div class="row">
					<div class="col-md-8 col-lg-12">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['section'] = NULL;
$arguments466['partial'] = NULL;
$arguments466['delegate'] = NULL;
$arguments466['renderable'] = NULL;
$arguments466['arguments'] = array (
);
$arguments466['optional'] = false;
$arguments466['default'] = NULL;
$arguments466['contentAs'] = NULL;
$arguments466['debug'] = true;
$arguments466['section'] = 'inner-content';
$arguments466['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output462 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output462 .= '
					</div>

					<div class="col-md-4">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
							<div class="thumbnail">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments473 = array();
$arguments473['additionalAttributes'] = NULL;
$arguments473['data'] = NULL;
$arguments473['class'] = NULL;
$arguments473['dir'] = NULL;
$arguments473['id'] = NULL;
$arguments473['lang'] = NULL;
$arguments473['style'] = NULL;
$arguments473['title'] = NULL;
$arguments473['accesskey'] = NULL;
$arguments473['tabindex'] = NULL;
$arguments473['onclick'] = NULL;
$arguments473['alt'] = NULL;
$arguments473['file'] = NULL;
$arguments473['additionalConfig'] = array (
);
$arguments473['width'] = NULL;
$arguments473['height'] = NULL;
$arguments473['cropVariant'] = 'default';
$arguments473['fileExtension'] = NULL;
$arguments473['loading'] = NULL;
$array475 = array (
);$arguments473['file'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array475);
$arguments473['class'] = 'img-responsive';

$output472 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output472 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
									<div class="caption">
										';
$array482 = array (
);
$output481 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array482)]);

$output481 .= '
									</div>
								';
return $output481;
};
$arguments476 = array();
$arguments476['then'] = NULL;
$arguments476['else'] = NULL;
$arguments476['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array478 = array();
$array479 = array (
);$array478['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array479);

$expression480 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments476['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression480(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array478)
					),
					$renderingContext
				);
$arguments476['__thenClosure'] = $renderChildrenClosure477;

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output472 .= '
							</div>
						';
return $output472;
};
$arguments469 = array();
$arguments469['each'] = NULL;
$arguments469['as'] = NULL;
$arguments469['key'] = NULL;
$arguments469['reverse'] = false;
$arguments469['iteration'] = NULL;
$array471 = array (
);$arguments469['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array471);
$arguments469['as'] = 'mediaElement';

$output462 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext);

$output462 .= '
					</div>

				</div>
			';
return $output462;
};
$arguments460 = array();

$output459 .= '';

$output459 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['section'] = NULL;
$arguments486['partial'] = NULL;
$arguments486['delegate'] = NULL;
$arguments486['renderable'] = NULL;
$arguments486['arguments'] = array (
);
$arguments486['optional'] = false;
$arguments486['default'] = NULL;
$arguments486['contentAs'] = NULL;
$arguments486['debug'] = true;
$arguments486['section'] = 'headline';
$arguments486['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output485 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output485 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['section'] = NULL;
$arguments489['partial'] = NULL;
$arguments489['delegate'] = NULL;
$arguments489['renderable'] = NULL;
$arguments489['arguments'] = array (
);
$arguments489['optional'] = false;
$arguments489['default'] = NULL;
$arguments489['contentAs'] = NULL;
$arguments489['debug'] = true;
$arguments489['section'] = 'inner-content';
$arguments489['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output485 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext);

$output485 .= '
			';
return $output485;
};
$arguments483 = array();
$arguments483['if'] = NULL;

$output459 .= '';

$output459 .= '
		';
return $output459;
};
$arguments426 = array();
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array456 = array();
$array457 = array (
);$array456['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array457);

$expression458 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression458(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array456)
					),
					$renderingContext
				);
$arguments426['__thenClosure'] = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['section'] = NULL;
$arguments429['partial'] = NULL;
$arguments429['delegate'] = NULL;
$arguments429['renderable'] = NULL;
$arguments429['arguments'] = array (
);
$arguments429['optional'] = false;
$arguments429['default'] = NULL;
$arguments429['contentAs'] = NULL;
$arguments429['debug'] = true;
$arguments429['section'] = 'headline';
$arguments429['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output428 .= '
				<div class="row">
					<div class="col-md-8 col-lg-12">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['section'] = NULL;
$arguments432['partial'] = NULL;
$arguments432['delegate'] = NULL;
$arguments432['renderable'] = NULL;
$arguments432['arguments'] = array (
);
$arguments432['optional'] = false;
$arguments432['default'] = NULL;
$arguments432['contentAs'] = NULL;
$arguments432['debug'] = true;
$arguments432['section'] = 'inner-content';
$arguments432['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output428 .= '
					</div>

					<div class="col-md-4">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
							<div class="thumbnail">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['additionalAttributes'] = NULL;
$arguments439['data'] = NULL;
$arguments439['class'] = NULL;
$arguments439['dir'] = NULL;
$arguments439['id'] = NULL;
$arguments439['lang'] = NULL;
$arguments439['style'] = NULL;
$arguments439['title'] = NULL;
$arguments439['accesskey'] = NULL;
$arguments439['tabindex'] = NULL;
$arguments439['onclick'] = NULL;
$arguments439['alt'] = NULL;
$arguments439['file'] = NULL;
$arguments439['additionalConfig'] = array (
);
$arguments439['width'] = NULL;
$arguments439['height'] = NULL;
$arguments439['cropVariant'] = 'default';
$arguments439['fileExtension'] = NULL;
$arguments439['loading'] = NULL;
$array441 = array (
);$arguments439['file'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array441);
$arguments439['class'] = 'img-responsive';

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
									<div class="caption">
										';
$array448 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array448)]);

$output447 .= '
									</div>
								';
return $output447;
};
$arguments442 = array();
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$arguments442['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array444 = array();
$array445 = array (
);$array444['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array445);

$expression446 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression446(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array444)
					),
					$renderingContext
				);
$arguments442['__thenClosure'] = $renderChildrenClosure443;

$output438 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output438 .= '
							</div>
						';
return $output438;
};
$arguments435 = array();
$arguments435['each'] = NULL;
$arguments435['as'] = NULL;
$arguments435['key'] = NULL;
$arguments435['reverse'] = false;
$arguments435['iteration'] = NULL;
$array437 = array (
);$arguments435['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array437);
$arguments435['as'] = 'mediaElement';

$output428 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output428 .= '
					</div>

				</div>
			';
return $output428;
};
$arguments426['__elseClosures'][] = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['section'] = NULL;
$arguments450['partial'] = NULL;
$arguments450['delegate'] = NULL;
$arguments450['renderable'] = NULL;
$arguments450['arguments'] = array (
);
$arguments450['optional'] = false;
$arguments450['default'] = NULL;
$arguments450['contentAs'] = NULL;
$arguments450['debug'] = true;
$arguments450['section'] = 'headline';
$arguments450['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['section'] = NULL;
$arguments453['partial'] = NULL;
$arguments453['delegate'] = NULL;
$arguments453['renderable'] = NULL;
$arguments453['arguments'] = array (
);
$arguments453['optional'] = false;
$arguments453['default'] = NULL;
$arguments453['contentAs'] = NULL;
$arguments453['debug'] = true;
$arguments453['section'] = 'inner-content';
$arguments453['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output449 .= '
			';
return $output449;
};

$output329 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output329 .= '
	';
return $output329;
};
$arguments324 = array();
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$arguments324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array327);

$expression328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments324['__thenClosure'] = $renderChildrenClosure325;

$output323 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
';
return $output323;
};
$arguments321 = array();
$arguments321['name'] = NULL;
$arguments321['name'] = 'content';

$output318 .= NULL;

$output318 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '
	<h1 itemprop="headline">';
$array495 = array (
);
$output494 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array495)]);

$output494 .= '</h1>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['section'] = NULL;
$arguments496['partial'] = NULL;
$arguments496['delegate'] = NULL;
$arguments496['renderable'] = NULL;
$arguments496['arguments'] = array (
);
$arguments496['optional'] = false;
$arguments496['default'] = NULL;
$arguments496['contentAs'] = NULL;
$arguments496['debug'] = true;
$arguments496['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array498 = array();
$array499 = array (
);$array498['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array499);
$array500 = array (
);$array498['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array500);
$arguments496['arguments'] = $array498;

$output494 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output494 .= '
';
return $output494;
};
$arguments492 = array();
$arguments492['name'] = NULL;
$arguments492['name'] = 'headline';

$output318 .= NULL;

$output318 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output503 = '';

$output503 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RenderMediaViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$output507 = '';

$output507 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
			<!-- teaser -->
			<div class="lead" itemprop="description">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$array516 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array516);
};
$arguments514 = array();
$arguments514['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output513 .= '
			</div>
		';
return $output513;
};
$arguments508 = array();
$arguments508['then'] = NULL;
$arguments508['else'] = NULL;
$arguments508['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array510 = array();
$array511 = array (
);$array510['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array511);

$expression512 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments508['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression512(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array510)
					),
					$renderingContext
				);
$arguments508['__thenClosure'] = $renderChildrenClosure509;

$output507 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output507 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$output522 = '';

$output522 .= '
			<!-- content elements -->
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
$array525 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.contentElementIdList', $array525);
};
$arguments523 = array();
$arguments523['data'] = NULL;
$arguments523['typoscriptObjectPath'] = NULL;
$arguments523['currentValueKey'] = NULL;
$arguments523['table'] = '';
$arguments523['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$renderChildrenClosure524 = ($arguments523['data'] !== null) ? function() use ($arguments523) { return $arguments523['data']; } : $renderChildrenClosure524;
$output522 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output522 .= '
		';
return $output522;
};
$arguments517 = array();
$arguments517['then'] = NULL;
$arguments517['else'] = NULL;
$arguments517['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array519 = array();
$array520 = array (
);$array519['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.contentElements', $array520);

$expression521 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments517['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression521(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array519)
					),
					$renderingContext
				);
$arguments517['__thenClosure'] = $renderChildrenClosure518;

$output507 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output507 .= '

		<!-- main text -->
		<div class="news-text-wrap" itemprop="articleBody">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$array528 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array528);
};
$arguments526 = array();
$arguments526['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output507 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output507 .= '
		</div>
	';
return $output507;
};
$arguments504 = array();
$arguments504['news'] = NULL;
$arguments504['imgClass'] = NULL;
$arguments504['videoClass'] = NULL;
$arguments504['audioClass'] = NULL;
$array506 = array (
);$arguments504['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array506);
$arguments504['imgClass'] = 'img-responsive';
$arguments504['videoClass'] = 'video-wrapper';
$arguments504['audioClass'] = 'audio-wrapper';

$output503 .= GeorgRinger\News\ViewHelpers\RenderMediaViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output503 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
$output534 = '';

$output534 .= '
		<!-- Link Back -->
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments539 = array();
$arguments539['key'] = NULL;
$arguments539['id'] = NULL;
$arguments539['default'] = NULL;
$arguments539['arguments'] = NULL;
$arguments539['extensionName'] = NULL;
$arguments539['languageKey'] = NULL;
$arguments539['alternativeLanguageKeys'] = NULL;
$arguments539['key'] = 'back-link';

$output538 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext)]);

$output538 .= '
		';
return $output538;
};
$arguments535 = array();
$arguments535['additionalAttributes'] = NULL;
$arguments535['data'] = NULL;
$arguments535['class'] = NULL;
$arguments535['dir'] = NULL;
$arguments535['id'] = NULL;
$arguments535['lang'] = NULL;
$arguments535['style'] = NULL;
$arguments535['title'] = NULL;
$arguments535['accesskey'] = NULL;
$arguments535['tabindex'] = NULL;
$arguments535['onclick'] = NULL;
$arguments535['target'] = NULL;
$arguments535['rel'] = NULL;
$arguments535['pageUid'] = NULL;
$arguments535['pageType'] = NULL;
$arguments535['noCache'] = NULL;
$arguments535['language'] = NULL;
$arguments535['noCacheHash'] = NULL;
$arguments535['section'] = NULL;
$arguments535['linkAccessRestrictedPages'] = NULL;
$arguments535['additionalParams'] = NULL;
$arguments535['absolute'] = NULL;
$arguments535['addQueryString'] = NULL;
$arguments535['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments535['addQueryStringMethod'] = NULL;
$arguments535['class'] = 'btn btn-default';
$array537 = array (
);$arguments535['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array537);

$output534 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext);

$output534 .= '
	';
return $output534;
};
$arguments529 = array();
$arguments529['then'] = NULL;
$arguments529['else'] = NULL;
$arguments529['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array531 = array();
$array532 = array (
);$array531['0'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array532);

$expression533 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments529['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression533(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array531)
					),
					$renderingContext
				);
$arguments529['__thenClosure'] = $renderChildrenClosure530;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output503 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
$output546 = '';

$output546 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return '
			Care about the privacy of your readers?
			Checkout https://typo3.org/extensions/repository/view/rx_shariff
			and it will be used automatically!
		';
};
$arguments547 = array();

$output546 .= NULL;

$output546 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
$output551 = '';

$output551 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments552 = array();
$arguments552['section'] = NULL;
$arguments552['partial'] = NULL;
$arguments552['delegate'] = NULL;
$arguments552['renderable'] = NULL;
$arguments552['arguments'] = array (
);
$arguments552['optional'] = false;
$arguments552['default'] = NULL;
$arguments552['contentAs'] = NULL;
$arguments552['debug'] = true;
$arguments552['partial'] = 'Detail/Shariff';

$output551 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output551 .= '
		';
return $output551;
};
$arguments549 = array();
$arguments549['extensionKey'] = NULL;
$arguments549['then'] = NULL;
$arguments549['else'] = NULL;
$arguments549['extensionKey'] = 'rx_shariff';
$arguments549['__thenClosure'] = $renderChildrenClosure550;

$output546 .= GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output546 .= '
	';
return $output546;
};
$arguments541 = array();
$arguments541['then'] = NULL;
$arguments541['else'] = NULL;
$arguments541['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array543 = array();
$array544 = array (
);$array543['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showSocialShareButtons', $array544);

$expression545 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments541['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression545(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array543)
					),
					$renderingContext
				);
$arguments541['__thenClosure'] = $renderChildrenClosure542;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output503 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
$output556 = '';

$output556 .= '
		Various options exist to fetch different related information:
		- ';
$array557 = array (
);
$output556 .= $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array557);

$output556 .= ': all related news, related und related from, sorted by date
		- ';
$array558 = array (
);
$output556 .= $renderingContext->getVariableProvider()->getByPath('newsItem.related', $array558);

$output556 .= ': all related
		- ';
$array559 = array (
);
$output556 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedSorted', $array559);

$output556 .= ': all related, sorted by date
		- ';
$array560 = array (
);
$output556 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFrom', $array560);

$output556 .= ': all related from
		- ';
$array561 = array (
);
$output556 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFromSorted', $array561);

$output556 .= ': all related from, sorted by date
	';
return $output556;
};
$arguments554 = array();

$output503 .= NULL;

$output503 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '
		<!-- Related news records -->
		<div class="news-related news-related-news">
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments568 = array();
$arguments568['key'] = NULL;
$arguments568['id'] = NULL;
$arguments568['default'] = NULL;
$arguments568['arguments'] = NULL;
$arguments568['extensionName'] = NULL;
$arguments568['languageKey'] = NULL;
$arguments568['alternativeLanguageKeys'] = NULL;
$arguments568['key'] = 'related-news';

$output567 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext)]);

$output567 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '
					<li>
						<span class="news-related-news-date">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
$array578 = array (
);return $renderingContext->getVariableProvider()->getByPath('related.datetime', $array578);
};
$arguments574 = array();
$arguments574['date'] = NULL;
$arguments574['format'] = '';
$arguments574['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments576 = array();
$arguments576['key'] = NULL;
$arguments576['id'] = NULL;
$arguments576['default'] = NULL;
$arguments576['arguments'] = NULL;
$arguments576['extensionName'] = NULL;
$arguments576['languageKey'] = NULL;
$arguments576['alternativeLanguageKeys'] = NULL;
$arguments576['key'] = 'dateFormat';
$arguments574['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext);
$renderChildrenClosure575 = ($arguments574['date'] !== null) ? function() use ($arguments574) { return $arguments574['date']; } : $renderChildrenClosure575;
$output573 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext)]);

$output573 .= '
						</span>
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
$output584 = '';

$output584 .= '
							';
$array585 = array (
);
$output584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('related.title', $array585)]);

$output584 .= '
						';
return $output584;
};
$arguments579 = array();
$arguments579['additionalAttributes'] = NULL;
$arguments579['data'] = NULL;
$arguments579['class'] = NULL;
$arguments579['dir'] = NULL;
$arguments579['id'] = NULL;
$arguments579['lang'] = NULL;
$arguments579['style'] = NULL;
$arguments579['title'] = NULL;
$arguments579['accesskey'] = NULL;
$arguments579['tabindex'] = NULL;
$arguments579['onclick'] = NULL;
$arguments579['newsItem'] = NULL;
$arguments579['settings'] = array (
);
$arguments579['uriOnly'] = false;
$arguments579['configuration'] = array (
);
$arguments579['content'] = '';
$arguments579['section'] = NULL;
$array581 = array (
);$arguments579['newsItem'] = $renderingContext->getVariableProvider()->getByPath('related', $array581);
$array582 = array (
);$arguments579['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array582);
$array583 = array (
);$arguments579['title'] = $renderingContext->getVariableProvider()->getByPath('related.title', $array583);

$output573 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext);

$output573 .= '
					</li>

				';
return $output573;
};
$arguments570 = array();
$arguments570['each'] = NULL;
$arguments570['as'] = NULL;
$arguments570['key'] = NULL;
$arguments570['reverse'] = false;
$arguments570['iteration'] = NULL;
$array572 = array (
);$arguments570['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array572);
$arguments570['as'] = 'related';

$output567 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output567 .= '
			</ul>
		</div>
	';
return $output567;
};
$arguments562 = array();
$arguments562['then'] = NULL;
$arguments562['else'] = NULL;
$arguments562['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array564 = array();
$array565 = array (
);$array564['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array565);

$expression566 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments562['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression566(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array564)
					),
					$renderingContext
				);
$arguments562['__thenClosure'] = $renderChildrenClosure563;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output503 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
		<!-- related files -->
		<div class="news-related news-related-files">
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['key'] = NULL;
$arguments592['id'] = NULL;
$arguments592['default'] = NULL;
$arguments592['arguments'] = NULL;
$arguments592['extensionName'] = NULL;
$arguments592['languageKey'] = NULL;
$arguments592['alternativeLanguageKeys'] = NULL;
$arguments592['key'] = 'related-files';

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output591 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
					<li>
						<span class="news-related-files-link">
							<a href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
$array601 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.publicUrl', $array601);
};
$arguments598 = array();
$arguments598['value'] = NULL;
$arguments598['keepQuotes'] = false;
$arguments598['encoding'] = 'UTF-8';
$arguments598['doubleEncode'] = true;
$value600 = ($arguments598['value'] !== NULL ? $arguments598['value'] : $renderChildrenClosure599());

$output597 .= !is_string($value600) && !(is_object($value600) && method_exists($value600, '__toString')) ? $value600 : htmlspecialchars($value600, ($arguments598['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments598['encoding'], $arguments598['doubleEncode']);

$output597 .= '" target="_blank">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['then'] = NULL;
$arguments602['else'] = NULL;
$arguments602['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array604 = array();
$array605 = array (
);$array604['0'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array605);

$expression606 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments602['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression606(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array604)
					),
					$renderingContext
				);
$array607 = array (
);$arguments602['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array607)]);
$array608 = array (
);$arguments602['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.name', $array608)]);

$output597 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output597 .= '
							</a>
						</span>
						<span class="news-related-files-size"> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
$array611 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.size', $array611);
};
$arguments609 = array();
$arguments609['value'] = NULL;
$arguments609['decimals'] = 0;
$arguments609['decimalSeparator'] = '.';
$arguments609['thousandsSeparator'] = ',';
$arguments609['units'] = NULL;
$renderChildrenClosure610 = ($arguments609['value'] !== null) ? function() use ($arguments609) { return $arguments609['value']; } : $renderChildrenClosure610;
$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext)]);

$output597 .= ' </span>
					</li>
				';
return $output597;
};
$arguments594 = array();
$arguments594['each'] = NULL;
$arguments594['as'] = NULL;
$arguments594['key'] = NULL;
$arguments594['reverse'] = false;
$arguments594['iteration'] = NULL;
$array596 = array (
);$arguments594['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array596);
$arguments594['as'] = 'relatedFile';

$output591 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output591 .= '
			</ul>
		</div>
	';
return $output591;
};
$arguments586 = array();
$arguments586['then'] = NULL;
$arguments586['else'] = NULL;
$arguments586['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array588 = array();
$array589 = array (
);$array588['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array589);

$expression590 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments586['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression590(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array588)
					),
					$renderingContext
				);
$arguments586['__thenClosure'] = $renderChildrenClosure587;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output503 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$output617 = '';

$output617 .= '
		<!-- Related links -->
		<div class="news-related news-related-links">
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments618 = array();
$arguments618['key'] = NULL;
$arguments618['id'] = NULL;
$arguments618['default'] = NULL;
$arguments618['arguments'] = NULL;
$arguments618['extensionName'] = NULL;
$arguments618['languageKey'] = NULL;
$arguments618['alternativeLanguageKeys'] = NULL;
$arguments618['key'] = 'related-links';

$output617 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext)]);

$output617 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
$output623 = '';

$output623 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments631 = array();
$arguments631['then'] = NULL;
$arguments631['else'] = NULL;
$arguments631['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array633 = array();
$array634 = array (
);$array633['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array634);

$expression635 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments631['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression635(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array633)
					),
					$renderingContext
				);
$array636 = array (
);$arguments631['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array636)]);
$array637 = array (
);$arguments631['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array637)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments631, $renderChildrenClosure632, $renderingContext);
};
$arguments624 = array();
$arguments624['parameter'] = NULL;
$arguments624['target'] = '';
$arguments624['class'] = '';
$arguments624['title'] = '';
$arguments624['language'] = NULL;
$arguments624['additionalParams'] = '';
$arguments624['additionalAttributes'] = array (
);
$arguments624['useCacheHash'] = NULL;
$arguments624['addQueryString'] = false;
$arguments624['addQueryStringMethod'] = 'GET';
$arguments624['addQueryStringExclude'] = '';
$arguments624['absolute'] = false;
$arguments624['parts-as'] = 'typoLinkParts';
$array626 = array (
);$arguments624['parameter'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array626);
$array627 = array (
);$arguments624['title'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array627);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments628 = array();
$arguments628['link'] = NULL;
$array630 = array (
);$arguments628['link'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array630);
$arguments624['target'] = GeorgRinger\News\ViewHelpers\TargetLinkViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);

$output623 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);

$output623 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure639 = function() use ($renderingContext, $self) {
$output643 = '';

$output643 .= '<span>';
$array644 = array (
);
$output643 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array644)]);

$output643 .= '</span>
						';
return $output643;
};
$arguments638 = array();
$arguments638['then'] = NULL;
$arguments638['else'] = NULL;
$arguments638['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array640 = array();
$array641 = array (
);$array640['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array641);

$expression642 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments638['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression642(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array640)
					),
					$renderingContext
				);
$arguments638['__thenClosure'] = $renderChildrenClosure639;

$output623 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments638, $renderChildrenClosure639, $renderingContext);

$output623 .= '
					</li>
				';
return $output623;
};
$arguments620 = array();
$arguments620['each'] = NULL;
$arguments620['as'] = NULL;
$arguments620['key'] = NULL;
$arguments620['reverse'] = false;
$arguments620['iteration'] = NULL;
$array622 = array (
);$arguments620['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array622);
$arguments620['as'] = 'relatedLink';

$output617 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);

$output617 .= '
			</ul>
		</div>
	';
return $output617;
};
$arguments612 = array();
$arguments612['then'] = NULL;
$arguments612['else'] = NULL;
$arguments612['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array614 = array();
$array615 = array (
);$array614['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array615);

$expression616 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments612['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression616(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array614)
					),
					$renderingContext
				);
$arguments612['__thenClosure'] = $renderChildrenClosure613;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output503 .= '
';
return $output503;
};
$arguments501 = array();
$arguments501['name'] = NULL;
$arguments501['name'] = 'inner-content';

$output318 .= NULL;

$output318 .= '

';

return $output318;
}


}
#