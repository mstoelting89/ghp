<?php

class News_action_detail_5a1420a8a8d33ad24f265a12a49a4de43e0e7093 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'rx' => 
  array (
    0 => 'Reelworx\\RxShariff\\ViewHelper',
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
$output289 = '';

$output289 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['newsItem'] = NULL;
$array298 = array (
);$arguments296['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array298);

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext)]);

$output295 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['section'] = NULL;
$arguments305['partial'] = NULL;
$arguments305['delegate'] = NULL;
$arguments305['renderable'] = NULL;
$arguments305['arguments'] = array (
);
$arguments305['optional'] = false;
$arguments305['default'] = NULL;
$arguments305['contentAs'] = NULL;
$arguments305['debug'] = true;
$arguments305['partial'] = 'Detail/Opengraph';
// Rendering Array
$array307 = array();
$array308 = array (
);$array307['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array308);
$array309 = array (
);$array307['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array309);
$arguments305['arguments'] = $array307;

$output304 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output304 .= '
				';
return $output304;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showMetaTags', $array302);

$expression303 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['__thenClosure'] = $renderChildrenClosure300;

$output295 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output295 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$array338 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array338);
};
$arguments336 = array();
$arguments336['value'] = NULL;
$arguments336['keepQuotes'] = false;
$arguments336['encoding'] = NULL;
$renderChildrenClosure337 = ($arguments336['value'] !== null) ? function() use ($arguments336) { return $arguments336['value']; } : $renderChildrenClosure337;
$output335 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output335 .= '
                        ';
return $output335;
};
$arguments333 = array();

$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext)]);

$output332 .= '
                    ';
return $output332;
};
$arguments330 = array();

$output329 .= '';

$output329 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$array347 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array347);
};
$arguments345 = array();
$arguments345['value'] = NULL;
$arguments345['keepQuotes'] = false;
$arguments345['encoding'] = NULL;
$renderChildrenClosure346 = ($arguments345['value'] !== null) ? function() use ($arguments345) { return $arguments345['value']; } : $renderChildrenClosure346;
$output344 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
                        ';
return $output344;
};
$arguments342 = array();

$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext)]);

$output341 .= '
                    ';
return $output341;
};
$arguments339 = array();
$arguments339['if'] = NULL;

$output329 .= '';

$output329 .= '
                ';
return $output329;
};
$arguments310 = array();
$arguments310['then'] = NULL;
$arguments310['else'] = NULL;
$arguments310['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array327);

$expression328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments310['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments310['__thenClosure'] = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$array318 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array318);
};
$arguments316 = array();
$arguments316['value'] = NULL;
$arguments316['keepQuotes'] = false;
$arguments316['encoding'] = NULL;
$renderChildrenClosure317 = ($arguments316['value'] !== null) ? function() use ($arguments316) { return $arguments316['value']; } : $renderChildrenClosure317;
$output315 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
                        ';
return $output315;
};
$arguments313 = array();

$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext)]);

$output312 .= '
                    ';
return $output312;
};
$arguments310['__elseClosures'][] = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$array325 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array325);
};
$arguments323 = array();
$arguments323['value'] = NULL;
$arguments323['keepQuotes'] = false;
$arguments323['encoding'] = NULL;
$renderChildrenClosure324 = ($arguments323['value'] !== null) ? function() use ($arguments323) { return $arguments323['value']; } : $renderChildrenClosure324;
$output322 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
                        ';
return $output322;
};
$arguments320 = array();

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output319 .= '
                    ';
return $output319;
};

$output295 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output295 .= '
			';
return $output295;
};
$arguments293 = array();

$output292 .= GeorgRinger\News\ViewHelpers\Format\NothingViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output292 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output353 = '';

$output353 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
						<ul class="pager">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
								<li class="previous">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
										<span aria-hidden="true">&larr; </span>';
$array376 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.prev.title', $array376)]);

$output375 .= '
									';
return $output375;
};
$arguments371 = array();
$arguments371['additionalAttributes'] = NULL;
$arguments371['data'] = NULL;
$arguments371['class'] = NULL;
$arguments371['dir'] = NULL;
$arguments371['id'] = NULL;
$arguments371['lang'] = NULL;
$arguments371['style'] = NULL;
$arguments371['title'] = NULL;
$arguments371['accesskey'] = NULL;
$arguments371['tabindex'] = NULL;
$arguments371['onclick'] = NULL;
$arguments371['newsItem'] = NULL;
$arguments371['settings'] = array (
);
$arguments371['uriOnly'] = false;
$arguments371['configuration'] = array (
);
$arguments371['content'] = '';
$arguments371['section'] = NULL;
$array373 = array (
);$arguments371['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array373);
$array374 = array (
);$arguments371['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array374);

$output370 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output370 .= '
								</li>
							';
return $output370;
};
$arguments365 = array();
$arguments365['then'] = NULL;
$arguments365['else'] = NULL;
$arguments365['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array367 = array();
$array368 = array (
);$array367['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array368);

$expression369 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments365['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression369(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array367)
					),
					$renderingContext
				);
$arguments365['__thenClosure'] = $renderChildrenClosure366;

$output364 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output364 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
								<li class="next">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
										';
$array388 = array (
);
$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.next.title', $array388)]);

$output387 .= ' <span aria-hidden="true"> &rarr;</span>
									';
return $output387;
};
$arguments383 = array();
$arguments383['additionalAttributes'] = NULL;
$arguments383['data'] = NULL;
$arguments383['class'] = NULL;
$arguments383['dir'] = NULL;
$arguments383['id'] = NULL;
$arguments383['lang'] = NULL;
$arguments383['style'] = NULL;
$arguments383['title'] = NULL;
$arguments383['accesskey'] = NULL;
$arguments383['tabindex'] = NULL;
$arguments383['onclick'] = NULL;
$arguments383['newsItem'] = NULL;
$arguments383['settings'] = array (
);
$arguments383['uriOnly'] = false;
$arguments383['configuration'] = array (
);
$arguments383['content'] = '';
$arguments383['section'] = NULL;
$array385 = array (
);$arguments383['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array385);
$array386 = array (
);$arguments383['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array386);
$arguments383['class'] = 'next';

$output382 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output382 .= '
								</li>
							';
return $output382;
};
$arguments377 = array();
$arguments377['then'] = NULL;
$arguments377['else'] = NULL;
$arguments377['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array380);

$expression381 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments377['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression381(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array379)
					),
					$renderingContext
				);
$arguments377['__thenClosure'] = $renderChildrenClosure378;

$output364 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output364 .= '
						</ul>
					';
return $output364;
};
$arguments359 = array();
$arguments359['then'] = NULL;
$arguments359['else'] = NULL;
$arguments359['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array361 = array();
$array362 = array (
);$array361['0'] = $renderingContext->getVariableProvider()->getByPath('paginated', $array362);

$expression363 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments359['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression363(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array361)
					),
					$renderingContext
				);
$arguments359['__thenClosure'] = $renderChildrenClosure360;

$output358 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output358 .= '
				';
return $output358;
};
$arguments354 = array();
$arguments354['news'] = NULL;
$arguments354['pidList'] = '';
$arguments354['sortField'] = 'datetime';
$arguments354['as'] = NULL;
$arguments354['includeInternalType'] = NULL;
$arguments354['includeExternalType'] = NULL;
$array356 = array (
);$arguments354['pidList'] = $renderingContext->getVariableProvider()->getByPath('newsItem.pid', $array356);
$array357 = array (
);$arguments354['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array357);
$arguments354['as'] = 'paginated';
$arguments354['sortField'] = 'datetime';

$output353 .= GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output353 .= '
			';
return $output353;
};
$arguments348 = array();
$arguments348['then'] = NULL;
$arguments348['else'] = NULL;
$arguments348['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array350 = array();
$array351 = array (
);$array350['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showPrevNext', $array351);

$expression352 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments348['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression352(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array350)
					),
					$renderingContext
				);
$arguments348['__thenClosure'] = $renderChildrenClosure349;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output292 .= '
			<div class="header">
				<h3 itemprop="headline">';
$array389 = array (
);
$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array389)]);

$output292 .= '</h3>
			</div>
			<div class="footer">
				<p>
					<!-- date -->
					<span class="news-list-date">
						<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['date'] = NULL;
$arguments390['format'] = '';
$arguments390['base'] = NULL;
$array392 = array (
);$arguments390['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array392);
$arguments390['format'] = 'Y-m-d';
$renderChildrenClosure391 = ($arguments390['date'] !== null) ? function() use ($arguments390) { return $arguments390['date']; } : $renderChildrenClosure391;
$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext)]);

$output292 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$array397 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array397);
};
$arguments393 = array();
$arguments393['date'] = NULL;
$arguments393['format'] = '';
$arguments393['base'] = NULL;
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
$arguments395['key'] = 'dateFormat';
$arguments393['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);
$renderChildrenClosure394 = ($arguments393['date'] !== null) ? function() use ($arguments393) { return $arguments393['date']; } : $renderChildrenClosure394;
$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext)]);

$output292 .= '
						</time>
					</span>

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['section'] = NULL;
$arguments404['partial'] = NULL;
$arguments404['delegate'] = NULL;
$arguments404['renderable'] = NULL;
$arguments404['arguments'] = array (
);
$arguments404['optional'] = false;
$arguments404['default'] = NULL;
$arguments404['contentAs'] = NULL;
$arguments404['debug'] = true;
$arguments404['partial'] = 'Category/Items';
// Rendering Array
$array406 = array();
$array407 = array (
);$array406['categories'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array407);
$array408 = array (
);$array406['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array408);
$arguments404['arguments'] = $array406;

$output403 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output403 .= '
					';
return $output403;
};
$arguments398 = array();
$arguments398['then'] = NULL;
$arguments398['else'] = NULL;
$arguments398['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array400 = array();
$array401 = array (
);$array400['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array401);

$expression402 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments398['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression402(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array400)
					),
					$renderingContext
				);
$arguments398['__thenClosure'] = $renderChildrenClosure399;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output292 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$output414 = '';

$output414 .= '
						<!-- Tags -->
						<span class="news-list-tags" itemprop="keywords">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
							';
$array419 = array (
);
$output418 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.title', $array419)]);

$output418 .= '
						';
return $output418;
};
$arguments415 = array();
$arguments415['each'] = NULL;
$arguments415['as'] = NULL;
$arguments415['key'] = NULL;
$arguments415['reverse'] = false;
$arguments415['iteration'] = NULL;
$array417 = array (
);$arguments415['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array417);
$arguments415['as'] = 'tag';

$output414 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output414 .= '
						</span>
					';
return $output414;
};
$arguments409 = array();
$arguments409['then'] = NULL;
$arguments409['else'] = NULL;
$arguments409['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array411 = array();
$array412 = array (
);$array411['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array412);

$expression413 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments409['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression413(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array411)
					),
					$renderingContext
				);
$arguments409['__thenClosure'] = $renderChildrenClosure410;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output292 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
						<!-- author -->
						<span class="news-list-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['key'] = NULL;
$arguments426['id'] = NULL;
$arguments426['default'] = NULL;
$arguments426['arguments'] = NULL;
$arguments426['extensionName'] = NULL;
$arguments426['languageKey'] = NULL;
$arguments426['alternativeLanguageKeys'] = NULL;
$arguments426['key'] = 'author_simple';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext)]);

$output425 .= ' <span itemprop="name">';
$array428 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.author', $array428)]);

$output425 .= '</span>
						</span>
					';
return $output425;
};
$arguments420 = array();
$arguments420['then'] = NULL;
$arguments420['else'] = NULL;
$arguments420['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array422 = array();
$array423 = array (
);$array422['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array423);

$expression424 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments420['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression424(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array422)
					),
					$renderingContext
				);
$arguments420['__thenClosure'] = $renderChildrenClosure421;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output292 .= '
				</p>
			</div>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RenderMediaViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
					<!-- teaser -->
					<div class="teaser-text" itemprop="description">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$array441 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array441);
};
$arguments439 = array();
$arguments439['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '
					</div>
				';
return $output438;
};
$arguments433 = array();
$arguments433['then'] = NULL;
$arguments433['else'] = NULL;
$arguments433['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array435 = array();
$array436 = array (
);$array435['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array436);

$expression437 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments433['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression437(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array435)
					),
					$renderingContext
				);
$arguments433['__thenClosure'] = $renderChildrenClosure434;

$output432 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output432 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
					<!-- content elements -->
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
$array450 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.contentElementIdList', $array450);
};
$arguments448 = array();
$arguments448['data'] = NULL;
$arguments448['typoscriptObjectPath'] = NULL;
$arguments448['currentValueKey'] = NULL;
$arguments448['table'] = '';
$arguments448['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$renderChildrenClosure449 = ($arguments448['data'] !== null) ? function() use ($arguments448) { return $arguments448['data']; } : $renderChildrenClosure449;
$output447 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output447 .= '
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
);$array444['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.contentElements', $array445);

$expression446 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression446(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array444)
					),
					$renderingContext
				);
$arguments442['__thenClosure'] = $renderChildrenClosure443;

$output432 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output432 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['section'] = NULL;
$arguments451['partial'] = NULL;
$arguments451['delegate'] = NULL;
$arguments451['renderable'] = NULL;
$arguments451['arguments'] = array (
);
$arguments451['optional'] = false;
$arguments451['default'] = NULL;
$arguments451['contentAs'] = NULL;
$arguments451['debug'] = true;
$arguments451['partial'] = 'Detail/MediaContainer';
// Rendering Array
$array453 = array();
$array454 = array (
);$array453['media'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array454);
$array455 = array (
);$array453['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array455);
$arguments451['arguments'] = $array453;

$output432 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output432 .= '

				<!-- main text -->
				<div class="news-text-wrap" itemprop="articleBody">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$array458 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array458);
};
$arguments456 = array();
$arguments456['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output432 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output432 .= '
				</div>
			';
return $output432;
};
$arguments429 = array();
$arguments429['news'] = NULL;
$arguments429['imgClass'] = NULL;
$arguments429['videoClass'] = NULL;
$arguments429['audioClass'] = NULL;
$array431 = array (
);$arguments429['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array431);
$arguments429['imgClass'] = 'img-responsive';
$arguments429['videoClass'] = 'video-wrapper';
$arguments429['audioClass'] = 'audio-wrapper';

$output292 .= GeorgRinger\News\ViewHelpers\RenderMediaViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output292 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
				<!-- Link Back -->
				<div class="news-backlink-wrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$output468 = '';

$output468 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments469 = array();
$arguments469['key'] = NULL;
$arguments469['id'] = NULL;
$arguments469['default'] = NULL;
$arguments469['arguments'] = NULL;
$arguments469['extensionName'] = NULL;
$arguments469['languageKey'] = NULL;
$arguments469['alternativeLanguageKeys'] = NULL;
$arguments469['key'] = 'back-link';

$output468 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext)]);

$output468 .= '
					';
return $output468;
};
$arguments465 = array();
$arguments465['additionalAttributes'] = NULL;
$arguments465['data'] = NULL;
$arguments465['class'] = NULL;
$arguments465['dir'] = NULL;
$arguments465['id'] = NULL;
$arguments465['lang'] = NULL;
$arguments465['style'] = NULL;
$arguments465['title'] = NULL;
$arguments465['accesskey'] = NULL;
$arguments465['tabindex'] = NULL;
$arguments465['onclick'] = NULL;
$arguments465['target'] = NULL;
$arguments465['rel'] = NULL;
$arguments465['pageUid'] = NULL;
$arguments465['pageType'] = NULL;
$arguments465['noCache'] = NULL;
$arguments465['noCacheHash'] = NULL;
$arguments465['section'] = NULL;
$arguments465['linkAccessRestrictedPages'] = NULL;
$arguments465['additionalParams'] = NULL;
$arguments465['absolute'] = NULL;
$arguments465['addQueryString'] = NULL;
$arguments465['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments465['addQueryStringMethod'] = NULL;
$array467 = array (
);$arguments465['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array467);

$output464 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output464 .= '
				</div>
			';
return $output464;
};
$arguments459 = array();
$arguments459['then'] = NULL;
$arguments459['else'] = NULL;
$arguments459['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array461 = array();
$array462 = array (
);$array461['0'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array462);

$expression463 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments459['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression463(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array461)
					),
					$renderingContext
				);
$arguments459['__thenClosure'] = $renderChildrenClosure460;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output292 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
$output476 = '';

$output476 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
return '
					Care about the privacy of your readers?
					Checkout https://typo3.org/extensions/repository/view/rx_shariff
					and it will be used automatically!
				';
};
$arguments477 = array();

$output476 .= NULL;

$output476 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments482 = array();
$arguments482['section'] = NULL;
$arguments482['partial'] = NULL;
$arguments482['delegate'] = NULL;
$arguments482['renderable'] = NULL;
$arguments482['arguments'] = array (
);
$arguments482['optional'] = false;
$arguments482['default'] = NULL;
$arguments482['contentAs'] = NULL;
$arguments482['debug'] = true;
$arguments482['partial'] = 'Detail/Shariff';

$output481 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output481 .= '
				';
return $output481;
};
$arguments479 = array();
$arguments479['extensionKey'] = NULL;
$arguments479['then'] = NULL;
$arguments479['else'] = NULL;
$arguments479['extensionKey'] = 'rx_shariff';
$arguments479['__thenClosure'] = $renderChildrenClosure480;

$output476 .= GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output476 .= '
			';
return $output476;
};
$arguments471 = array();
$arguments471['then'] = NULL;
$arguments471['else'] = NULL;
$arguments471['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array473 = array();
$array474 = array (
);$array473['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showSocialShareButtons', $array474);

$expression475 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments471['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression475(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array473)
					),
					$renderingContext
				);
$arguments471['__thenClosure'] = $renderChildrenClosure472;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output292 .= '

			<!-- related things -->
			<div class="news-related-wrap">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$output486 = '';

$output486 .= '
					Various options exist to fetch different related information:
					- ';
$array487 = array (
);
$output486 .= $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array487);

$output486 .= ': all related news, related und related from, sorted by date
					- ';
$array488 = array (
);
$output486 .= $renderingContext->getVariableProvider()->getByPath('newsItem.related', $array488);

$output486 .= ': all related
					- ';
$array489 = array (
);
$output486 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedSorted', $array489);

$output486 .= ': all related, sorted by date
					- ';
$array490 = array (
);
$output486 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFrom', $array490);

$output486 .= ': all related from
					- ';
$array491 = array (
);
$output486 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFromSorted', $array491);

$output486 .= ': all related from, sorted by date
				';
return $output486;
};
$arguments484 = array();

$output292 .= NULL;

$output292 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
$output497 = '';

$output497 .= '
					<!-- Related news records -->
					<div class="news-related news-related-news">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['key'] = NULL;
$arguments498['id'] = NULL;
$arguments498['default'] = NULL;
$arguments498['arguments'] = NULL;
$arguments498['extensionName'] = NULL;
$arguments498['languageKey'] = NULL;
$arguments498['alternativeLanguageKeys'] = NULL;
$arguments498['key'] = 'related-news';

$output497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext)]);

$output497 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output503 = '';

$output503 .= '
								<li>
									<span class="news-related-news-date">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$array508 = array (
);return $renderingContext->getVariableProvider()->getByPath('related.datetime', $array508);
};
$arguments504 = array();
$arguments504['date'] = NULL;
$arguments504['format'] = '';
$arguments504['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['key'] = NULL;
$arguments506['id'] = NULL;
$arguments506['default'] = NULL;
$arguments506['arguments'] = NULL;
$arguments506['extensionName'] = NULL;
$arguments506['languageKey'] = NULL;
$arguments506['alternativeLanguageKeys'] = NULL;
$arguments506['key'] = 'dateFormat';
$arguments504['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);
$renderChildrenClosure505 = ($arguments504['date'] !== null) ? function() use ($arguments504) { return $arguments504['date']; } : $renderChildrenClosure505;
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext)]);

$output503 .= '</span>
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output514 = '';

$output514 .= '
										';
$array515 = array (
);
$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('related.title', $array515)]);

$output514 .= '
									';
return $output514;
};
$arguments509 = array();
$arguments509['additionalAttributes'] = NULL;
$arguments509['data'] = NULL;
$arguments509['class'] = NULL;
$arguments509['dir'] = NULL;
$arguments509['id'] = NULL;
$arguments509['lang'] = NULL;
$arguments509['style'] = NULL;
$arguments509['title'] = NULL;
$arguments509['accesskey'] = NULL;
$arguments509['tabindex'] = NULL;
$arguments509['onclick'] = NULL;
$arguments509['newsItem'] = NULL;
$arguments509['settings'] = array (
);
$arguments509['uriOnly'] = false;
$arguments509['configuration'] = array (
);
$arguments509['content'] = '';
$arguments509['section'] = NULL;
$array511 = array (
);$arguments509['newsItem'] = $renderingContext->getVariableProvider()->getByPath('related', $array511);
$array512 = array (
);$arguments509['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array512);
$array513 = array (
);$arguments509['title'] = $renderingContext->getVariableProvider()->getByPath('related.title', $array513);

$output503 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$output503 .= '
								</li>

							';
return $output503;
};
$arguments500 = array();
$arguments500['each'] = NULL;
$arguments500['as'] = NULL;
$arguments500['key'] = NULL;
$arguments500['reverse'] = false;
$arguments500['iteration'] = NULL;
$array502 = array (
);$arguments500['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array502);
$arguments500['as'] = 'related';

$output497 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output497 .= '
						</ul>
					</div>
				';
return $output497;
};
$arguments492 = array();
$arguments492['then'] = NULL;
$arguments492['else'] = NULL;
$arguments492['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array494 = array();
$array495 = array (
);$array494['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array495);

$expression496 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments492['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression496(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array494)
					),
					$renderingContext
				);
$arguments492['__thenClosure'] = $renderChildrenClosure493;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output292 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
$output521 = '';

$output521 .= '
					<!-- related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['key'] = NULL;
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$arguments522['languageKey'] = NULL;
$arguments522['alternativeLanguageKeys'] = NULL;
$arguments522['key'] = 'related-files';

$output521 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext)]);

$output521 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output527 = '';

$output527 .= '
								<li>
									<span class="news-related-files-link">
										<a href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
$array531 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.publicUrl', $array531);
};
$arguments528 = array();
$arguments528['value'] = NULL;
$arguments528['keepQuotes'] = false;
$arguments528['encoding'] = 'UTF-8';
$arguments528['doubleEncode'] = true;
$value530 = ($arguments528['value'] !== NULL ? $arguments528['value'] : $renderChildrenClosure529());

$output527 .= !is_string($value530) && !(is_object($value530) && method_exists($value530, '__toString')) ? $value530 : htmlspecialchars($value530, ($arguments528['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments528['encoding'], $arguments528['doubleEncode']);

$output527 .= '" target="_blank">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments532 = array();
$arguments532['then'] = NULL;
$arguments532['else'] = NULL;
$arguments532['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array534 = array();
$array535 = array (
);$array534['0'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array535);

$expression536 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments532['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression536(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array534)
					),
					$renderingContext
				);
$array537 = array (
);$arguments532['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array537)]);
$array538 = array (
);$arguments532['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.name', $array538)]);

$output527 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output527 .= '
										</a>
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$array541 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.size', $array541);
};
$arguments539 = array();
$arguments539['value'] = NULL;
$arguments539['decimals'] = 0;
$arguments539['decimalSeparator'] = '.';
$arguments539['thousandsSeparator'] = ',';
$arguments539['units'] = NULL;
$renderChildrenClosure540 = ($arguments539['value'] !== null) ? function() use ($arguments539) { return $arguments539['value']; } : $renderChildrenClosure540;
$output527 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext)]);

$output527 .= '
									</span>
								</li>
							';
return $output527;
};
$arguments524 = array();
$arguments524['each'] = NULL;
$arguments524['as'] = NULL;
$arguments524['key'] = NULL;
$arguments524['reverse'] = false;
$arguments524['iteration'] = NULL;
$array526 = array (
);$arguments524['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array526);
$arguments524['as'] = 'relatedFile';

$output521 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output521 .= '
						</ul>
					</div>
				';
return $output521;
};
$arguments516 = array();
$arguments516['then'] = NULL;
$arguments516['else'] = NULL;
$arguments516['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array518 = array();
$array519 = array (
);$array518['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array519);

$expression520 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments516['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression520(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array518)
					),
					$renderingContext
				);
$arguments516['__thenClosure'] = $renderChildrenClosure517;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);

$output292 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$output547 = '';

$output547 .= '
					<!-- Related links -->
					<div class="news-related news-related-links">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments548 = array();
$arguments548['key'] = NULL;
$arguments548['id'] = NULL;
$arguments548['default'] = NULL;
$arguments548['arguments'] = NULL;
$arguments548['extensionName'] = NULL;
$arguments548['languageKey'] = NULL;
$arguments548['alternativeLanguageKeys'] = NULL;
$arguments548['key'] = 'related-links';

$output547 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext)]);

$output547 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$output553 = '';

$output553 .= '
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments561 = array();
$arguments561['then'] = NULL;
$arguments561['else'] = NULL;
$arguments561['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array563 = array();
$array564 = array (
);$array563['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array564);

$expression565 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments561['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression565(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array563)
					),
					$renderingContext
				);
$array566 = array (
);$arguments561['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array566)]);
$array567 = array (
);$arguments561['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array567)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);
};
$arguments554 = array();
$arguments554['parameter'] = NULL;
$arguments554['target'] = '';
$arguments554['class'] = '';
$arguments554['title'] = '';
$arguments554['additionalParams'] = '';
$arguments554['additionalAttributes'] = array (
);
$arguments554['useCacheHash'] = false;
$arguments554['addQueryString'] = false;
$arguments554['addQueryStringMethod'] = 'GET';
$arguments554['addQueryStringExclude'] = '';
$arguments554['absolute'] = false;
$array556 = array (
);$arguments554['parameter'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array556);
$array557 = array (
);$arguments554['title'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array557);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['link'] = NULL;
$array560 = array (
);$arguments558['link'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array560);
$arguments554['target'] = GeorgRinger\News\ViewHelpers\TargetLinkViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output553 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output553 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '<span>';
$array574 = array (
);
$output573 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array574)]);

$output573 .= '</span>';
return $output573;
};
$arguments568 = array();
$arguments568['then'] = NULL;
$arguments568['else'] = NULL;
$arguments568['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array570 = array();
$array571 = array (
);$array570['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array571);

$expression572 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments568['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression572(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array570)
					),
					$renderingContext
				);
$arguments568['__thenClosure'] = $renderChildrenClosure569;

$output553 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output553 .= '
								</li>
							';
return $output553;
};
$arguments550 = array();
$arguments550['each'] = NULL;
$arguments550['as'] = NULL;
$arguments550['key'] = NULL;
$arguments550['reverse'] = false;
$arguments550['iteration'] = NULL;
$array552 = array (
);$arguments550['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array552);
$arguments550['as'] = 'relatedLink';

$output547 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output547 .= '
						</ul>
					</div>
				';
return $output547;
};
$arguments542 = array();
$arguments542['then'] = NULL;
$arguments542['else'] = NULL;
$arguments542['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array544 = array();
$array545 = array (
);$array544['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array545);

$expression546 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments542['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression546(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array544)
					),
					$renderingContext
				);
$arguments542['__thenClosure'] = $renderChildrenClosure543;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output292 .= '
			</div>
		';
return $output292;
};
$arguments290 = array();

$output289 .= '';

$output289 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return '

		';
};
$arguments575 = array();
$arguments575['if'] = NULL;

$output289 .= '';

$output289 .= '
	';
return $output289;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array287);

$expression288 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression288(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array286)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['newsItem'] = NULL;
$array9 = array (
);$arguments7['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array9);

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
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
$arguments16['partial'] = 'Detail/Opengraph';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array19);
$array20 = array (
);$array18['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array20);
$arguments16['arguments'] = $array18;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
				';
return $output15;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showMetaTags', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array49);
};
$arguments47 = array();
$arguments47['value'] = NULL;
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$renderChildrenClosure48 = ($arguments47['value'] !== null) ? function() use ($arguments47) { return $arguments47['value']; } : $renderChildrenClosure48;
$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                        ';
return $output46;
};
$arguments44 = array();

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '
                    ';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array58);
};
$arguments56 = array();
$arguments56['value'] = NULL;
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = NULL;
$renderChildrenClosure57 = ($arguments56['value'] !== null) ? function() use ($arguments56) { return $arguments56['value']; } : $renderChildrenClosure57;
$output55 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                        ';
return $output55;
};
$arguments53 = array();

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output52 .= '
                    ';
return $output52;
};
$arguments50 = array();
$arguments50['if'] = NULL;

$output40 .= '';

$output40 .= '
                ';
return $output40;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array29);
};
$arguments27 = array();
$arguments27['value'] = NULL;
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;
$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                        ';
return $output26;
};
$arguments24 = array();

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output23 .= '
                    ';
return $output23;
};
$arguments21['__elseClosures'][] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array36 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array36);
};
$arguments34 = array();
$arguments34['value'] = NULL;
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$renderChildrenClosure35 = ($arguments34['value'] !== null) ? function() use ($arguments34) { return $arguments34['value']; } : $renderChildrenClosure35;
$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                        ';
return $output33;
};
$arguments31 = array();

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '
                    ';
return $output30;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output6 .= '
			';
return $output6;
};
$arguments4 = array();

$output3 .= GeorgRinger\News\ViewHelpers\Format\NothingViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
						<ul class="pager">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
								<li class="previous">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
										<span aria-hidden="true">&larr; </span>';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.prev.title', $array87)]);

$output86 .= '
									';
return $output86;
};
$arguments82 = array();
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['newsItem'] = NULL;
$arguments82['settings'] = array (
);
$arguments82['uriOnly'] = false;
$arguments82['configuration'] = array (
);
$arguments82['content'] = '';
$arguments82['section'] = NULL;
$array84 = array (
);$arguments82['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array84);
$array85 = array (
);$arguments82['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array85);

$output81 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
								</li>
							';
return $output81;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = $renderChildrenClosure77;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
								<li class="next">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
										';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.next.title', $array99)]);

$output98 .= ' <span aria-hidden="true"> &rarr;</span>
									';
return $output98;
};
$arguments94 = array();
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['newsItem'] = NULL;
$arguments94['settings'] = array (
);
$arguments94['uriOnly'] = false;
$arguments94['configuration'] = array (
);
$arguments94['content'] = '';
$arguments94['section'] = NULL;
$array96 = array (
);$arguments94['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array96);
$array97 = array (
);$arguments94['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array97);
$arguments94['class'] = 'next';

$output93 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
								</li>
							';
return $output93;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = $renderChildrenClosure89;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output75 .= '
						</ul>
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
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('paginated', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = $renderChildrenClosure71;

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
				';
return $output69;
};
$arguments65 = array();
$arguments65['news'] = NULL;
$arguments65['pidList'] = '';
$arguments65['sortField'] = 'datetime';
$arguments65['as'] = NULL;
$arguments65['includeInternalType'] = NULL;
$arguments65['includeExternalType'] = NULL;
$array67 = array (
);$arguments65['pidList'] = $renderingContext->getVariableProvider()->getByPath('newsItem.pid', $array67);
$array68 = array (
);$arguments65['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array68);
$arguments65['as'] = 'paginated';
$arguments65['sortField'] = 'datetime';

$output64 .= GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
			';
return $output64;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showPrevNext', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = $renderChildrenClosure60;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output3 .= '
			<div class="header">
				<h3 itemprop="headline">';
$array100 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array100)]);

$output3 .= '</h3>
			</div>
			<div class="footer">
				<p>
					<!-- date -->
					<span class="news-list-date">
						<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['date'] = NULL;
$arguments101['format'] = '';
$arguments101['base'] = NULL;
$array103 = array (
);$arguments101['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array103);
$arguments101['format'] = 'Y-m-d';
$renderChildrenClosure102 = ($arguments101['date'] !== null) ? function() use ($arguments101) { return $arguments101['date']; } : $renderChildrenClosure102;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output3 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array108);
};
$arguments104 = array();
$arguments104['date'] = NULL;
$arguments104['format'] = '';
$arguments104['base'] = NULL;
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
$arguments106['key'] = 'dateFormat';
$arguments104['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);
$renderChildrenClosure105 = ($arguments104['date'] !== null) ? function() use ($arguments104) { return $arguments104['date']; } : $renderChildrenClosure105;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output3 .= '
						</time>
					</span>

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['section'] = NULL;
$arguments115['partial'] = NULL;
$arguments115['delegate'] = NULL;
$arguments115['renderable'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['optional'] = false;
$arguments115['default'] = NULL;
$arguments115['contentAs'] = NULL;
$arguments115['debug'] = true;
$arguments115['partial'] = 'Category/Items';
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['categories'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array118);
$array119 = array (
);$array117['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array119);
$arguments115['arguments'] = $array117;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
					';
return $output114;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array112);

$expression113 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = $renderChildrenClosure110;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output3 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
						<!-- Tags -->
						<span class="news-list-tags" itemprop="keywords">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
							';
$array130 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.title', $array130)]);

$output129 .= '
						';
return $output129;
};
$arguments126 = array();
$arguments126['each'] = NULL;
$arguments126['as'] = NULL;
$arguments126['key'] = NULL;
$arguments126['reverse'] = false;
$arguments126['iteration'] = NULL;
$array128 = array (
);$arguments126['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array128);
$arguments126['as'] = 'tag';

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
						</span>
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
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = $renderChildrenClosure121;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output3 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
						<!-- author -->
						<span class="news-list-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'author_simple';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= ' <span itemprop="name">';
$array139 = array (
);
$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.author', $array139)]);

$output136 .= '</span>
						</span>
					';
return $output136;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array134);

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = $renderChildrenClosure132;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output3 .= '
				</p>
			</div>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RenderMediaViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
					<!-- teaser -->
					<div class="teaser-text" itemprop="description">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$array152 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array152);
};
$arguments150 = array();
$arguments150['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
					</div>
				';
return $output149;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output143 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
					<!-- content elements -->
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$array161 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.contentElementIdList', $array161);
};
$arguments159 = array();
$arguments159['data'] = NULL;
$arguments159['typoscriptObjectPath'] = NULL;
$arguments159['currentValueKey'] = NULL;
$arguments159['table'] = '';
$arguments159['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$renderChildrenClosure160 = ($arguments159['data'] !== null) ? function() use ($arguments159) { return $arguments159['data']; } : $renderChildrenClosure160;
$output158 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
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
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.contentElements', $array156);

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['__thenClosure'] = $renderChildrenClosure154;

$output143 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output143 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['section'] = NULL;
$arguments162['partial'] = NULL;
$arguments162['delegate'] = NULL;
$arguments162['renderable'] = NULL;
$arguments162['arguments'] = array (
);
$arguments162['optional'] = false;
$arguments162['default'] = NULL;
$arguments162['contentAs'] = NULL;
$arguments162['debug'] = true;
$arguments162['partial'] = 'Detail/MediaContainer';
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['media'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array165);
$array166 = array (
);$array164['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array166);
$arguments162['arguments'] = $array164;

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output143 .= '

				<!-- main text -->
				<div class="news-text-wrap" itemprop="articleBody">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$array169 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array169);
};
$arguments167 = array();
$arguments167['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output143 .= '
				</div>
			';
return $output143;
};
$arguments140 = array();
$arguments140['news'] = NULL;
$arguments140['imgClass'] = NULL;
$arguments140['videoClass'] = NULL;
$arguments140['audioClass'] = NULL;
$array142 = array (
);$arguments140['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array142);
$arguments140['imgClass'] = 'img-responsive';
$arguments140['videoClass'] = 'video-wrapper';
$arguments140['audioClass'] = 'audio-wrapper';

$output3 .= GeorgRinger\News\ViewHelpers\RenderMediaViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output3 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
				<!-- Link Back -->
				<div class="news-backlink-wrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'back-link';

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output179 .= '
					';
return $output179;
};
$arguments176 = array();
$arguments176['additionalAttributes'] = NULL;
$arguments176['data'] = NULL;
$arguments176['class'] = NULL;
$arguments176['dir'] = NULL;
$arguments176['id'] = NULL;
$arguments176['lang'] = NULL;
$arguments176['style'] = NULL;
$arguments176['title'] = NULL;
$arguments176['accesskey'] = NULL;
$arguments176['tabindex'] = NULL;
$arguments176['onclick'] = NULL;
$arguments176['target'] = NULL;
$arguments176['rel'] = NULL;
$arguments176['pageUid'] = NULL;
$arguments176['pageType'] = NULL;
$arguments176['noCache'] = NULL;
$arguments176['noCacheHash'] = NULL;
$arguments176['section'] = NULL;
$arguments176['linkAccessRestrictedPages'] = NULL;
$arguments176['additionalParams'] = NULL;
$arguments176['absolute'] = NULL;
$arguments176['addQueryString'] = NULL;
$arguments176['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments176['addQueryStringMethod'] = NULL;
$array178 = array (
);$arguments176['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array178);

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
				</div>
			';
return $output175;
};
$arguments170 = array();
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array173);

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments170['__thenClosure'] = $renderChildrenClosure171;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output3 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return '
					Care about the privacy of your readers?
					Checkout https://typo3.org/extensions/repository/view/rx_shariff
					and it will be used automatically!
				';
};
$arguments188 = array();

$output187 .= NULL;

$output187 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['section'] = NULL;
$arguments193['partial'] = NULL;
$arguments193['delegate'] = NULL;
$arguments193['renderable'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['optional'] = false;
$arguments193['default'] = NULL;
$arguments193['contentAs'] = NULL;
$arguments193['debug'] = true;
$arguments193['partial'] = 'Detail/Shariff';

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
				';
return $output192;
};
$arguments190 = array();
$arguments190['extensionKey'] = NULL;
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['extensionKey'] = 'rx_shariff';
$arguments190['__thenClosure'] = $renderChildrenClosure191;

$output187 .= GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output187 .= '
			';
return $output187;
};
$arguments182 = array();
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$arguments182['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array185 = array (
);$array184['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showSocialShareButtons', $array185);

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments182['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);
$arguments182['__thenClosure'] = $renderChildrenClosure183;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output3 .= '

			<!-- related things -->
			<div class="news-related-wrap">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
					Various options exist to fetch different related information:
					- ';
$array198 = array (
);
$output197 .= $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array198);

$output197 .= ': all related news, related und related from, sorted by date
					- ';
$array199 = array (
);
$output197 .= $renderingContext->getVariableProvider()->getByPath('newsItem.related', $array199);

$output197 .= ': all related
					- ';
$array200 = array (
);
$output197 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedSorted', $array200);

$output197 .= ': all related, sorted by date
					- ';
$array201 = array (
);
$output197 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFrom', $array201);

$output197 .= ': all related from
					- ';
$array202 = array (
);
$output197 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFromSorted', $array202);

$output197 .= ': all related from, sorted by date
				';
return $output197;
};
$arguments195 = array();

$output3 .= NULL;

$output3 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
					<!-- Related news records -->
					<div class="news-related news-related-news">
						<h4>
							';
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
$arguments209['key'] = 'related-news';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);

$output208 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
								<li>
									<span class="news-related-news-date">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$array219 = array (
);return $renderingContext->getVariableProvider()->getByPath('related.datetime', $array219);
};
$arguments215 = array();
$arguments215['date'] = NULL;
$arguments215['format'] = '';
$arguments215['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$arguments217['key'] = 'dateFormat';
$arguments215['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);
$renderChildrenClosure216 = ($arguments215['date'] !== null) ? function() use ($arguments215) { return $arguments215['date']; } : $renderChildrenClosure216;
$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output214 .= '</span>
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
										';
$array226 = array (
);
$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('related.title', $array226)]);

$output225 .= '
									';
return $output225;
};
$arguments220 = array();
$arguments220['additionalAttributes'] = NULL;
$arguments220['data'] = NULL;
$arguments220['class'] = NULL;
$arguments220['dir'] = NULL;
$arguments220['id'] = NULL;
$arguments220['lang'] = NULL;
$arguments220['style'] = NULL;
$arguments220['title'] = NULL;
$arguments220['accesskey'] = NULL;
$arguments220['tabindex'] = NULL;
$arguments220['onclick'] = NULL;
$arguments220['newsItem'] = NULL;
$arguments220['settings'] = array (
);
$arguments220['uriOnly'] = false;
$arguments220['configuration'] = array (
);
$arguments220['content'] = '';
$arguments220['section'] = NULL;
$array222 = array (
);$arguments220['newsItem'] = $renderingContext->getVariableProvider()->getByPath('related', $array222);
$array223 = array (
);$arguments220['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array223);
$array224 = array (
);$arguments220['title'] = $renderingContext->getVariableProvider()->getByPath('related.title', $array224);

$output214 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output214 .= '
								</li>

							';
return $output214;
};
$arguments211 = array();
$arguments211['each'] = NULL;
$arguments211['as'] = NULL;
$arguments211['key'] = NULL;
$arguments211['reverse'] = false;
$arguments211['iteration'] = NULL;
$array213 = array (
);$arguments211['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array213);
$arguments211['as'] = 'related';

$output208 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output208 .= '
						</ul>
					</div>
				';
return $output208;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array205 = array();
$array206 = array (
);$array205['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array206);

$expression207 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression207(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)
					),
					$renderingContext
				);
$arguments203['__thenClosure'] = $renderChildrenClosure204;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output3 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
					<!-- related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['languageKey'] = NULL;
$arguments233['alternativeLanguageKeys'] = NULL;
$arguments233['key'] = 'related-files';

$output232 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output232 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
								<li>
									<span class="news-related-files-link">
										<a href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$array242 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.publicUrl', $array242);
};
$arguments239 = array();
$arguments239['value'] = NULL;
$arguments239['keepQuotes'] = false;
$arguments239['encoding'] = 'UTF-8';
$arguments239['doubleEncode'] = true;
$value241 = ($arguments239['value'] !== NULL ? $arguments239['value'] : $renderChildrenClosure240());

$output238 .= !is_string($value241) && !(is_object($value241) && method_exists($value241, '__toString')) ? $value241 : htmlspecialchars($value241, ($arguments239['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments239['encoding'], $arguments239['doubleEncode']);

$output238 .= '" target="_blank">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array246);

$expression247 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$array248 = array (
);$arguments243['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array248)]);
$array249 = array (
);$arguments243['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.name', $array249)]);

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output238 .= '
										</a>
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$array252 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.size', $array252);
};
$arguments250 = array();
$arguments250['value'] = NULL;
$arguments250['decimals'] = 0;
$arguments250['decimalSeparator'] = '.';
$arguments250['thousandsSeparator'] = ',';
$arguments250['units'] = NULL;
$renderChildrenClosure251 = ($arguments250['value'] !== null) ? function() use ($arguments250) { return $arguments250['value']; } : $renderChildrenClosure251;
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output238 .= '
									</span>
								</li>
							';
return $output238;
};
$arguments235 = array();
$arguments235['each'] = NULL;
$arguments235['as'] = NULL;
$arguments235['key'] = NULL;
$arguments235['reverse'] = false;
$arguments235['iteration'] = NULL;
$array237 = array (
);$arguments235['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array237);
$arguments235['as'] = 'relatedFile';

$output232 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output232 .= '
						</ul>
					</div>
				';
return $output232;
};
$arguments227 = array();
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$arguments227['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array230);

$expression231 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments227['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments227['__thenClosure'] = $renderChildrenClosure228;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output3 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
					<!-- Related links -->
					<div class="news-related news-related-links">
						<h4>
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
$arguments259['key'] = 'related-links';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output258 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array275);

$expression276 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$array277 = array (
);$arguments272['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array277)]);
$array278 = array (
);$arguments272['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array278)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);
};
$arguments265 = array();
$arguments265['parameter'] = NULL;
$arguments265['target'] = '';
$arguments265['class'] = '';
$arguments265['title'] = '';
$arguments265['additionalParams'] = '';
$arguments265['additionalAttributes'] = array (
);
$arguments265['useCacheHash'] = false;
$arguments265['addQueryString'] = false;
$arguments265['addQueryStringMethod'] = 'GET';
$arguments265['addQueryStringExclude'] = '';
$arguments265['absolute'] = false;
$array267 = array (
);$arguments265['parameter'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array267);
$array268 = array (
);$arguments265['title'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array268);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['link'] = NULL;
$array271 = array (
);$arguments269['link'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array271);
$arguments265['target'] = GeorgRinger\News\ViewHelpers\TargetLinkViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output264 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '<span>';
$array285 = array (
);
$output284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array285)]);

$output284 .= '</span>';
return $output284;
};
$arguments279 = array();
$arguments279['then'] = NULL;
$arguments279['else'] = NULL;
$arguments279['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array281 = array();
$array282 = array (
);$array281['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array282);

$expression283 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments279['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression283(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array281)
					),
					$renderingContext
				);
$arguments279['__thenClosure'] = $renderChildrenClosure280;

$output264 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output264 .= '
								</li>
							';
return $output264;
};
$arguments261 = array();
$arguments261['each'] = NULL;
$arguments261['as'] = NULL;
$arguments261['key'] = NULL;
$arguments261['reverse'] = false;
$arguments261['iteration'] = NULL;
$array263 = array (
);$arguments261['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array263);
$arguments261['as'] = 'relatedLink';

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output258 .= '
						</ul>
					</div>
				';
return $output258;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array256);

$expression257 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = $renderChildrenClosure254;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output3 .= '
			</div>
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
return '

		';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output577 = '';

$output577 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['name'] = NULL;
$arguments578['name'] = 'Detail';

$output577 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output577 .= '

<!--
	=====================
		News/Detail.html
-->

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$output582 = '';

$output582 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
$output871 = '';

$output871 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
$output874 = '';

$output874 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$renderChildrenClosure876 = function() use ($renderingContext, $self) {
$output877 = '';

$output877 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure879 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments878 = array();
$arguments878['newsItem'] = NULL;
$array880 = array (
);$arguments878['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array880);

$output877 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments878, $renderChildrenClosure879, $renderingContext)]);

$output877 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure882 = function() use ($renderingContext, $self) {
$output886 = '';

$output886 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments887 = array();
$arguments887['section'] = NULL;
$arguments887['partial'] = NULL;
$arguments887['delegate'] = NULL;
$arguments887['renderable'] = NULL;
$arguments887['arguments'] = array (
);
$arguments887['optional'] = false;
$arguments887['default'] = NULL;
$arguments887['contentAs'] = NULL;
$arguments887['debug'] = true;
$arguments887['partial'] = 'Detail/Opengraph';
// Rendering Array
$array889 = array();
$array890 = array (
);$array889['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array890);
$array891 = array (
);$array889['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array891);
$arguments887['arguments'] = $array889;

$output886 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext);

$output886 .= '
				';
return $output886;
};
$arguments881 = array();
$arguments881['then'] = NULL;
$arguments881['else'] = NULL;
$arguments881['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array883 = array();
$array884 = array (
);$array883['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showMetaTags', $array884);

$expression885 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments881['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression885(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array883)
					),
					$renderingContext
				);
$arguments881['__thenClosure'] = $renderChildrenClosure882;

$output877 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments881, $renderChildrenClosure882, $renderingContext);

$output877 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure893 = function() use ($renderingContext, $self) {
$output911 = '';

$output911 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure913 = function() use ($renderingContext, $self) {
$output914 = '';

$output914 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure916 = function() use ($renderingContext, $self) {
$output917 = '';

$output917 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure919 = function() use ($renderingContext, $self) {
$array920 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array920);
};
$arguments918 = array();
$arguments918['value'] = NULL;
$arguments918['keepQuotes'] = false;
$arguments918['encoding'] = NULL;
$renderChildrenClosure919 = ($arguments918['value'] !== null) ? function() use ($arguments918) { return $arguments918['value']; } : $renderChildrenClosure919;
$output917 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments918, $renderChildrenClosure919, $renderingContext);

$output917 .= '
                        ';
return $output917;
};
$arguments915 = array();

$output914 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments915, $renderChildrenClosure916, $renderingContext)]);

$output914 .= '
                    ';
return $output914;
};
$arguments912 = array();

$output911 .= '';

$output911 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure922 = function() use ($renderingContext, $self) {
$output923 = '';

$output923 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure925 = function() use ($renderingContext, $self) {
$output926 = '';

$output926 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure928 = function() use ($renderingContext, $self) {
$array929 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array929);
};
$arguments927 = array();
$arguments927['value'] = NULL;
$arguments927['keepQuotes'] = false;
$arguments927['encoding'] = NULL;
$renderChildrenClosure928 = ($arguments927['value'] !== null) ? function() use ($arguments927) { return $arguments927['value']; } : $renderChildrenClosure928;
$output926 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments927, $renderChildrenClosure928, $renderingContext);

$output926 .= '
                        ';
return $output926;
};
$arguments924 = array();

$output923 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments924, $renderChildrenClosure925, $renderingContext)]);

$output923 .= '
                    ';
return $output923;
};
$arguments921 = array();
$arguments921['if'] = NULL;

$output911 .= '';

$output911 .= '
                ';
return $output911;
};
$arguments892 = array();
$arguments892['then'] = NULL;
$arguments892['else'] = NULL;
$arguments892['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array908 = array();
$array909 = array (
);$array908['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array909);

$expression910 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments892['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression910(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array908)
					),
					$renderingContext
				);
$arguments892['__thenClosure'] = function() use ($renderingContext, $self) {
$output894 = '';

$output894 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure896 = function() use ($renderingContext, $self) {
$output897 = '';

$output897 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure899 = function() use ($renderingContext, $self) {
$array900 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array900);
};
$arguments898 = array();
$arguments898['value'] = NULL;
$arguments898['keepQuotes'] = false;
$arguments898['encoding'] = NULL;
$renderChildrenClosure899 = ($arguments898['value'] !== null) ? function() use ($arguments898) { return $arguments898['value']; } : $renderChildrenClosure899;
$output897 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments898, $renderChildrenClosure899, $renderingContext);

$output897 .= '
                        ';
return $output897;
};
$arguments895 = array();

$output894 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments895, $renderChildrenClosure896, $renderingContext)]);

$output894 .= '
                    ';
return $output894;
};
$arguments892['__elseClosures'][] = function() use ($renderingContext, $self) {
$output901 = '';

$output901 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
$output904 = '';

$output904 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure906 = function() use ($renderingContext, $self) {
$array907 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array907);
};
$arguments905 = array();
$arguments905['value'] = NULL;
$arguments905['keepQuotes'] = false;
$arguments905['encoding'] = NULL;
$renderChildrenClosure906 = ($arguments905['value'] !== null) ? function() use ($arguments905) { return $arguments905['value']; } : $renderChildrenClosure906;
$output904 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments905, $renderChildrenClosure906, $renderingContext);

$output904 .= '
                        ';
return $output904;
};
$arguments902 = array();

$output901 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext)]);

$output901 .= '
                    ';
return $output901;
};

$output877 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments892, $renderChildrenClosure893, $renderingContext);

$output877 .= '
			';
return $output877;
};
$arguments875 = array();

$output874 .= GeorgRinger\News\ViewHelpers\Format\NothingViewHelper::renderStatic($arguments875, $renderChildrenClosure876, $renderingContext);

$output874 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure931 = function() use ($renderingContext, $self) {
$output935 = '';

$output935 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper
$renderChildrenClosure937 = function() use ($renderingContext, $self) {
$output940 = '';

$output940 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure942 = function() use ($renderingContext, $self) {
$output946 = '';

$output946 .= '
						<ul class="pager">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
$output952 = '';

$output952 .= '
								<li class="previous">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure954 = function() use ($renderingContext, $self) {
$output957 = '';

$output957 .= '
										<span aria-hidden="true">&larr; </span>';
$array958 = array (
);
$output957 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.prev.title', $array958)]);

$output957 .= '
									';
return $output957;
};
$arguments953 = array();
$arguments953['additionalAttributes'] = NULL;
$arguments953['data'] = NULL;
$arguments953['class'] = NULL;
$arguments953['dir'] = NULL;
$arguments953['id'] = NULL;
$arguments953['lang'] = NULL;
$arguments953['style'] = NULL;
$arguments953['title'] = NULL;
$arguments953['accesskey'] = NULL;
$arguments953['tabindex'] = NULL;
$arguments953['onclick'] = NULL;
$arguments953['newsItem'] = NULL;
$arguments953['settings'] = array (
);
$arguments953['uriOnly'] = false;
$arguments953['configuration'] = array (
);
$arguments953['content'] = '';
$arguments953['section'] = NULL;
$array955 = array (
);$arguments953['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array955);
$array956 = array (
);$arguments953['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array956);

$output952 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments953, $renderChildrenClosure954, $renderingContext);

$output952 .= '
								</li>
							';
return $output952;
};
$arguments947 = array();
$arguments947['then'] = NULL;
$arguments947['else'] = NULL;
$arguments947['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array949 = array();
$array950 = array (
);$array949['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array950);

$expression951 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments947['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression951(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array949)
					),
					$renderingContext
				);
$arguments947['__thenClosure'] = $renderChildrenClosure948;

$output946 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext);

$output946 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure960 = function() use ($renderingContext, $self) {
$output964 = '';

$output964 .= '
								<li class="next">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure966 = function() use ($renderingContext, $self) {
$output969 = '';

$output969 .= '
										';
$array970 = array (
);
$output969 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.next.title', $array970)]);

$output969 .= ' <span aria-hidden="true"> &rarr;</span>
									';
return $output969;
};
$arguments965 = array();
$arguments965['additionalAttributes'] = NULL;
$arguments965['data'] = NULL;
$arguments965['class'] = NULL;
$arguments965['dir'] = NULL;
$arguments965['id'] = NULL;
$arguments965['lang'] = NULL;
$arguments965['style'] = NULL;
$arguments965['title'] = NULL;
$arguments965['accesskey'] = NULL;
$arguments965['tabindex'] = NULL;
$arguments965['onclick'] = NULL;
$arguments965['newsItem'] = NULL;
$arguments965['settings'] = array (
);
$arguments965['uriOnly'] = false;
$arguments965['configuration'] = array (
);
$arguments965['content'] = '';
$arguments965['section'] = NULL;
$array967 = array (
);$arguments965['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array967);
$array968 = array (
);$arguments965['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array968);
$arguments965['class'] = 'next';

$output964 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments965, $renderChildrenClosure966, $renderingContext);

$output964 .= '
								</li>
							';
return $output964;
};
$arguments959 = array();
$arguments959['then'] = NULL;
$arguments959['else'] = NULL;
$arguments959['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array961 = array();
$array962 = array (
);$array961['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array962);

$expression963 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments959['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression963(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array961)
					),
					$renderingContext
				);
$arguments959['__thenClosure'] = $renderChildrenClosure960;

$output946 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments959, $renderChildrenClosure960, $renderingContext);

$output946 .= '
						</ul>
					';
return $output946;
};
$arguments941 = array();
$arguments941['then'] = NULL;
$arguments941['else'] = NULL;
$arguments941['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array943 = array();
$array944 = array (
);$array943['0'] = $renderingContext->getVariableProvider()->getByPath('paginated', $array944);

$expression945 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments941['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression945(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array943)
					),
					$renderingContext
				);
$arguments941['__thenClosure'] = $renderChildrenClosure942;

$output940 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments941, $renderChildrenClosure942, $renderingContext);

$output940 .= '
				';
return $output940;
};
$arguments936 = array();
$arguments936['news'] = NULL;
$arguments936['pidList'] = '';
$arguments936['sortField'] = 'datetime';
$arguments936['as'] = NULL;
$arguments936['includeInternalType'] = NULL;
$arguments936['includeExternalType'] = NULL;
$array938 = array (
);$arguments936['pidList'] = $renderingContext->getVariableProvider()->getByPath('newsItem.pid', $array938);
$array939 = array (
);$arguments936['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array939);
$arguments936['as'] = 'paginated';
$arguments936['sortField'] = 'datetime';

$output935 .= GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper::renderStatic($arguments936, $renderChildrenClosure937, $renderingContext);

$output935 .= '
			';
return $output935;
};
$arguments930 = array();
$arguments930['then'] = NULL;
$arguments930['else'] = NULL;
$arguments930['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array932 = array();
$array933 = array (
);$array932['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showPrevNext', $array933);

$expression934 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments930['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression934(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array932)
					),
					$renderingContext
				);
$arguments930['__thenClosure'] = $renderChildrenClosure931;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments930, $renderChildrenClosure931, $renderingContext);

$output874 .= '
			<div class="header">
				<h3 itemprop="headline">';
$array971 = array (
);
$output874 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array971)]);

$output874 .= '</h3>
			</div>
			<div class="footer">
				<p>
					<!-- date -->
					<span class="news-list-date">
						<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure973 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments972 = array();
$arguments972['date'] = NULL;
$arguments972['format'] = '';
$arguments972['base'] = NULL;
$array974 = array (
);$arguments972['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array974);
$arguments972['format'] = 'Y-m-d';
$renderChildrenClosure973 = ($arguments972['date'] !== null) ? function() use ($arguments972) { return $arguments972['date']; } : $renderChildrenClosure973;
$output874 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments972, $renderChildrenClosure973, $renderingContext)]);

$output874 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure976 = function() use ($renderingContext, $self) {
$array979 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array979);
};
$arguments975 = array();
$arguments975['date'] = NULL;
$arguments975['format'] = '';
$arguments975['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure978 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments977 = array();
$arguments977['key'] = NULL;
$arguments977['id'] = NULL;
$arguments977['default'] = NULL;
$arguments977['arguments'] = NULL;
$arguments977['extensionName'] = NULL;
$arguments977['languageKey'] = NULL;
$arguments977['alternativeLanguageKeys'] = NULL;
$arguments977['key'] = 'dateFormat';
$arguments975['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments977, $renderChildrenClosure978, $renderingContext);
$renderChildrenClosure976 = ($arguments975['date'] !== null) ? function() use ($arguments975) { return $arguments975['date']; } : $renderChildrenClosure976;
$output874 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments975, $renderChildrenClosure976, $renderingContext)]);

$output874 .= '
						</time>
					</span>

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure981 = function() use ($renderingContext, $self) {
$output985 = '';

$output985 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['section'] = NULL;
$arguments986['partial'] = NULL;
$arguments986['delegate'] = NULL;
$arguments986['renderable'] = NULL;
$arguments986['arguments'] = array (
);
$arguments986['optional'] = false;
$arguments986['default'] = NULL;
$arguments986['contentAs'] = NULL;
$arguments986['debug'] = true;
$arguments986['partial'] = 'Category/Items';
// Rendering Array
$array988 = array();
$array989 = array (
);$array988['categories'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array989);
$array990 = array (
);$array988['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array990);
$arguments986['arguments'] = $array988;

$output985 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext);

$output985 .= '
					';
return $output985;
};
$arguments980 = array();
$arguments980['then'] = NULL;
$arguments980['else'] = NULL;
$arguments980['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array982 = array();
$array983 = array (
);$array982['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array983);

$expression984 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments980['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression984(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array982)
					),
					$renderingContext
				);
$arguments980['__thenClosure'] = $renderChildrenClosure981;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments980, $renderChildrenClosure981, $renderingContext);

$output874 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure992 = function() use ($renderingContext, $self) {
$output996 = '';

$output996 .= '
						<!-- Tags -->
						<span class="news-list-tags" itemprop="keywords">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure998 = function() use ($renderingContext, $self) {
$output1000 = '';

$output1000 .= '
							';
$array1001 = array (
);
$output1000 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.title', $array1001)]);

$output1000 .= '
						';
return $output1000;
};
$arguments997 = array();
$arguments997['each'] = NULL;
$arguments997['as'] = NULL;
$arguments997['key'] = NULL;
$arguments997['reverse'] = false;
$arguments997['iteration'] = NULL;
$array999 = array (
);$arguments997['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array999);
$arguments997['as'] = 'tag';

$output996 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments997, $renderChildrenClosure998, $renderingContext);

$output996 .= '
						</span>
					';
return $output996;
};
$arguments991 = array();
$arguments991['then'] = NULL;
$arguments991['else'] = NULL;
$arguments991['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array993 = array();
$array994 = array (
);$array993['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array994);

$expression995 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments991['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression995(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array993)
					),
					$renderingContext
				);
$arguments991['__thenClosure'] = $renderChildrenClosure992;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments991, $renderChildrenClosure992, $renderingContext);

$output874 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1003 = function() use ($renderingContext, $self) {
$output1007 = '';

$output1007 .= '
						<!-- author -->
						<span class="news-list-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1009 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1008 = array();
$arguments1008['key'] = NULL;
$arguments1008['id'] = NULL;
$arguments1008['default'] = NULL;
$arguments1008['arguments'] = NULL;
$arguments1008['extensionName'] = NULL;
$arguments1008['languageKey'] = NULL;
$arguments1008['alternativeLanguageKeys'] = NULL;
$arguments1008['key'] = 'author_simple';

$output1007 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1008, $renderChildrenClosure1009, $renderingContext)]);

$output1007 .= ' <span itemprop="name">';
$array1010 = array (
);
$output1007 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.author', $array1010)]);

$output1007 .= '</span>
						</span>
					';
return $output1007;
};
$arguments1002 = array();
$arguments1002['then'] = NULL;
$arguments1002['else'] = NULL;
$arguments1002['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1004 = array();
$array1005 = array (
);$array1004['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array1005);

$expression1006 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1002['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1006(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1004)
					),
					$renderingContext
				);
$arguments1002['__thenClosure'] = $renderChildrenClosure1003;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1002, $renderChildrenClosure1003, $renderingContext);

$output874 .= '
				</p>
			</div>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RenderMediaViewHelper
$renderChildrenClosure1012 = function() use ($renderingContext, $self) {
$output1014 = '';

$output1014 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1016 = function() use ($renderingContext, $self) {
$output1020 = '';

$output1020 .= '
					<!-- teaser -->
					<div class="teaser-text" itemprop="description">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure1022 = function() use ($renderingContext, $self) {
$array1023 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1023);
};
$arguments1021 = array();
$arguments1021['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output1020 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1021, $renderChildrenClosure1022, $renderingContext);

$output1020 .= '
					</div>
				';
return $output1020;
};
$arguments1015 = array();
$arguments1015['then'] = NULL;
$arguments1015['else'] = NULL;
$arguments1015['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1017 = array();
$array1018 = array (
);$array1017['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1018);

$expression1019 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1015['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1019(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1017)
					),
					$renderingContext
				);
$arguments1015['__thenClosure'] = $renderChildrenClosure1016;

$output1014 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1015, $renderChildrenClosure1016, $renderingContext);

$output1014 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1025 = function() use ($renderingContext, $self) {
$output1029 = '';

$output1029 .= '
					<!-- content elements -->
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1031 = function() use ($renderingContext, $self) {
$array1032 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.contentElementIdList', $array1032);
};
$arguments1030 = array();
$arguments1030['data'] = NULL;
$arguments1030['typoscriptObjectPath'] = NULL;
$arguments1030['currentValueKey'] = NULL;
$arguments1030['table'] = '';
$arguments1030['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$renderChildrenClosure1031 = ($arguments1030['data'] !== null) ? function() use ($arguments1030) { return $arguments1030['data']; } : $renderChildrenClosure1031;
$output1029 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1030, $renderChildrenClosure1031, $renderingContext);

$output1029 .= '
				';
return $output1029;
};
$arguments1024 = array();
$arguments1024['then'] = NULL;
$arguments1024['else'] = NULL;
$arguments1024['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1026 = array();
$array1027 = array (
);$array1026['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.contentElements', $array1027);

$expression1028 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1024['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1028(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1026)
					),
					$renderingContext
				);
$arguments1024['__thenClosure'] = $renderChildrenClosure1025;

$output1014 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1024, $renderChildrenClosure1025, $renderingContext);

$output1014 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1034 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1033 = array();
$arguments1033['section'] = NULL;
$arguments1033['partial'] = NULL;
$arguments1033['delegate'] = NULL;
$arguments1033['renderable'] = NULL;
$arguments1033['arguments'] = array (
);
$arguments1033['optional'] = false;
$arguments1033['default'] = NULL;
$arguments1033['contentAs'] = NULL;
$arguments1033['debug'] = true;
$arguments1033['partial'] = 'Detail/MediaContainer';
// Rendering Array
$array1035 = array();
$array1036 = array (
);$array1035['media'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array1036);
$array1037 = array (
);$array1035['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1037);
$arguments1033['arguments'] = $array1035;

$output1014 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1033, $renderChildrenClosure1034, $renderingContext);

$output1014 .= '

				<!-- main text -->
				<div class="news-text-wrap" itemprop="articleBody">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure1039 = function() use ($renderingContext, $self) {
$array1040 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array1040);
};
$arguments1038 = array();
$arguments1038['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output1014 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1038, $renderChildrenClosure1039, $renderingContext);

$output1014 .= '
				</div>
			';
return $output1014;
};
$arguments1011 = array();
$arguments1011['news'] = NULL;
$arguments1011['imgClass'] = NULL;
$arguments1011['videoClass'] = NULL;
$arguments1011['audioClass'] = NULL;
$array1013 = array (
);$arguments1011['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1013);
$arguments1011['imgClass'] = 'img-responsive';
$arguments1011['videoClass'] = 'video-wrapper';
$arguments1011['audioClass'] = 'audio-wrapper';

$output874 .= GeorgRinger\News\ViewHelpers\RenderMediaViewHelper::renderStatic($arguments1011, $renderChildrenClosure1012, $renderingContext);

$output874 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1042 = function() use ($renderingContext, $self) {
$output1046 = '';

$output1046 .= '
				<!-- Link Back -->
				<div class="news-backlink-wrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure1048 = function() use ($renderingContext, $self) {
$output1050 = '';

$output1050 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1052 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1051 = array();
$arguments1051['key'] = NULL;
$arguments1051['id'] = NULL;
$arguments1051['default'] = NULL;
$arguments1051['arguments'] = NULL;
$arguments1051['extensionName'] = NULL;
$arguments1051['languageKey'] = NULL;
$arguments1051['alternativeLanguageKeys'] = NULL;
$arguments1051['key'] = 'back-link';

$output1050 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1051, $renderChildrenClosure1052, $renderingContext)]);

$output1050 .= '
					';
return $output1050;
};
$arguments1047 = array();
$arguments1047['additionalAttributes'] = NULL;
$arguments1047['data'] = NULL;
$arguments1047['class'] = NULL;
$arguments1047['dir'] = NULL;
$arguments1047['id'] = NULL;
$arguments1047['lang'] = NULL;
$arguments1047['style'] = NULL;
$arguments1047['title'] = NULL;
$arguments1047['accesskey'] = NULL;
$arguments1047['tabindex'] = NULL;
$arguments1047['onclick'] = NULL;
$arguments1047['target'] = NULL;
$arguments1047['rel'] = NULL;
$arguments1047['pageUid'] = NULL;
$arguments1047['pageType'] = NULL;
$arguments1047['noCache'] = NULL;
$arguments1047['noCacheHash'] = NULL;
$arguments1047['section'] = NULL;
$arguments1047['linkAccessRestrictedPages'] = NULL;
$arguments1047['additionalParams'] = NULL;
$arguments1047['absolute'] = NULL;
$arguments1047['addQueryString'] = NULL;
$arguments1047['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1047['addQueryStringMethod'] = NULL;
$array1049 = array (
);$arguments1047['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array1049);

$output1046 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments1047, $renderChildrenClosure1048, $renderingContext);

$output1046 .= '
				</div>
			';
return $output1046;
};
$arguments1041 = array();
$arguments1041['then'] = NULL;
$arguments1041['else'] = NULL;
$arguments1041['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1043 = array();
$array1044 = array (
);$array1043['0'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array1044);

$expression1045 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1041['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1045(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1043)
					),
					$renderingContext
				);
$arguments1041['__thenClosure'] = $renderChildrenClosure1042;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1041, $renderChildrenClosure1042, $renderingContext);

$output874 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1054 = function() use ($renderingContext, $self) {
$output1058 = '';

$output1058 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure1060 = function() use ($renderingContext, $self) {
return '
					Care about the privacy of your readers?
					Checkout https://typo3.org/extensions/repository/view/rx_shariff
					and it will be used automatically!
				';
};
$arguments1059 = array();

$output1058 .= NULL;

$output1058 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper
$renderChildrenClosure1062 = function() use ($renderingContext, $self) {
$output1063 = '';

$output1063 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1065 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1064 = array();
$arguments1064['section'] = NULL;
$arguments1064['partial'] = NULL;
$arguments1064['delegate'] = NULL;
$arguments1064['renderable'] = NULL;
$arguments1064['arguments'] = array (
);
$arguments1064['optional'] = false;
$arguments1064['default'] = NULL;
$arguments1064['contentAs'] = NULL;
$arguments1064['debug'] = true;
$arguments1064['partial'] = 'Detail/Shariff';

$output1063 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1064, $renderChildrenClosure1065, $renderingContext);

$output1063 .= '
				';
return $output1063;
};
$arguments1061 = array();
$arguments1061['extensionKey'] = NULL;
$arguments1061['then'] = NULL;
$arguments1061['else'] = NULL;
$arguments1061['extensionKey'] = 'rx_shariff';
$arguments1061['__thenClosure'] = $renderChildrenClosure1062;

$output1058 .= GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper::renderStatic($arguments1061, $renderChildrenClosure1062, $renderingContext);

$output1058 .= '
			';
return $output1058;
};
$arguments1053 = array();
$arguments1053['then'] = NULL;
$arguments1053['else'] = NULL;
$arguments1053['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1055 = array();
$array1056 = array (
);$array1055['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showSocialShareButtons', $array1056);

$expression1057 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1053['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1057(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1055)
					),
					$renderingContext
				);
$arguments1053['__thenClosure'] = $renderChildrenClosure1054;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1053, $renderChildrenClosure1054, $renderingContext);

$output874 .= '

			<!-- related things -->
			<div class="news-related-wrap">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure1067 = function() use ($renderingContext, $self) {
$output1068 = '';

$output1068 .= '
					Various options exist to fetch different related information:
					- ';
$array1069 = array (
);
$output1068 .= $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array1069);

$output1068 .= ': all related news, related und related from, sorted by date
					- ';
$array1070 = array (
);
$output1068 .= $renderingContext->getVariableProvider()->getByPath('newsItem.related', $array1070);

$output1068 .= ': all related
					- ';
$array1071 = array (
);
$output1068 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedSorted', $array1071);

$output1068 .= ': all related, sorted by date
					- ';
$array1072 = array (
);
$output1068 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFrom', $array1072);

$output1068 .= ': all related from
					- ';
$array1073 = array (
);
$output1068 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFromSorted', $array1073);

$output1068 .= ': all related from, sorted by date
				';
return $output1068;
};
$arguments1066 = array();

$output874 .= NULL;

$output874 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1075 = function() use ($renderingContext, $self) {
$output1079 = '';

$output1079 .= '
					<!-- Related news records -->
					<div class="news-related news-related-news">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1081 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1080 = array();
$arguments1080['key'] = NULL;
$arguments1080['id'] = NULL;
$arguments1080['default'] = NULL;
$arguments1080['arguments'] = NULL;
$arguments1080['extensionName'] = NULL;
$arguments1080['languageKey'] = NULL;
$arguments1080['alternativeLanguageKeys'] = NULL;
$arguments1080['key'] = 'related-news';

$output1079 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1080, $renderChildrenClosure1081, $renderingContext)]);

$output1079 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1083 = function() use ($renderingContext, $self) {
$output1085 = '';

$output1085 .= '
								<li>
									<span class="news-related-news-date">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure1087 = function() use ($renderingContext, $self) {
$array1090 = array (
);return $renderingContext->getVariableProvider()->getByPath('related.datetime', $array1090);
};
$arguments1086 = array();
$arguments1086['date'] = NULL;
$arguments1086['format'] = '';
$arguments1086['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1089 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1088 = array();
$arguments1088['key'] = NULL;
$arguments1088['id'] = NULL;
$arguments1088['default'] = NULL;
$arguments1088['arguments'] = NULL;
$arguments1088['extensionName'] = NULL;
$arguments1088['languageKey'] = NULL;
$arguments1088['alternativeLanguageKeys'] = NULL;
$arguments1088['key'] = 'dateFormat';
$arguments1086['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1088, $renderChildrenClosure1089, $renderingContext);
$renderChildrenClosure1087 = ($arguments1086['date'] !== null) ? function() use ($arguments1086) { return $arguments1086['date']; } : $renderChildrenClosure1087;
$output1085 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments1086, $renderChildrenClosure1087, $renderingContext)]);

$output1085 .= '</span>
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
$output1096 = '';

$output1096 .= '
										';
$array1097 = array (
);
$output1096 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('related.title', $array1097)]);

$output1096 .= '
									';
return $output1096;
};
$arguments1091 = array();
$arguments1091['additionalAttributes'] = NULL;
$arguments1091['data'] = NULL;
$arguments1091['class'] = NULL;
$arguments1091['dir'] = NULL;
$arguments1091['id'] = NULL;
$arguments1091['lang'] = NULL;
$arguments1091['style'] = NULL;
$arguments1091['title'] = NULL;
$arguments1091['accesskey'] = NULL;
$arguments1091['tabindex'] = NULL;
$arguments1091['onclick'] = NULL;
$arguments1091['newsItem'] = NULL;
$arguments1091['settings'] = array (
);
$arguments1091['uriOnly'] = false;
$arguments1091['configuration'] = array (
);
$arguments1091['content'] = '';
$arguments1091['section'] = NULL;
$array1093 = array (
);$arguments1091['newsItem'] = $renderingContext->getVariableProvider()->getByPath('related', $array1093);
$array1094 = array (
);$arguments1091['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1094);
$array1095 = array (
);$arguments1091['title'] = $renderingContext->getVariableProvider()->getByPath('related.title', $array1095);

$output1085 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1091, $renderChildrenClosure1092, $renderingContext);

$output1085 .= '
								</li>

							';
return $output1085;
};
$arguments1082 = array();
$arguments1082['each'] = NULL;
$arguments1082['as'] = NULL;
$arguments1082['key'] = NULL;
$arguments1082['reverse'] = false;
$arguments1082['iteration'] = NULL;
$array1084 = array (
);$arguments1082['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array1084);
$arguments1082['as'] = 'related';

$output1079 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1082, $renderChildrenClosure1083, $renderingContext);

$output1079 .= '
						</ul>
					</div>
				';
return $output1079;
};
$arguments1074 = array();
$arguments1074['then'] = NULL;
$arguments1074['else'] = NULL;
$arguments1074['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1076 = array();
$array1077 = array (
);$array1076['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array1077);

$expression1078 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1074['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1078(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1076)
					),
					$renderingContext
				);
$arguments1074['__thenClosure'] = $renderChildrenClosure1075;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1074, $renderChildrenClosure1075, $renderingContext);

$output874 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1099 = function() use ($renderingContext, $self) {
$output1103 = '';

$output1103 .= '
					<!-- related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1104 = array();
$arguments1104['key'] = NULL;
$arguments1104['id'] = NULL;
$arguments1104['default'] = NULL;
$arguments1104['arguments'] = NULL;
$arguments1104['extensionName'] = NULL;
$arguments1104['languageKey'] = NULL;
$arguments1104['alternativeLanguageKeys'] = NULL;
$arguments1104['key'] = 'related-files';

$output1103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1104, $renderChildrenClosure1105, $renderingContext)]);

$output1103 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1107 = function() use ($renderingContext, $self) {
$output1109 = '';

$output1109 .= '
								<li>
									<span class="news-related-files-link">
										<a href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure1111 = function() use ($renderingContext, $self) {
$array1113 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.publicUrl', $array1113);
};
$arguments1110 = array();
$arguments1110['value'] = NULL;
$arguments1110['keepQuotes'] = false;
$arguments1110['encoding'] = 'UTF-8';
$arguments1110['doubleEncode'] = true;
$value1112 = ($arguments1110['value'] !== NULL ? $arguments1110['value'] : $renderChildrenClosure1111());

$output1109 .= !is_string($value1112) && !(is_object($value1112) && method_exists($value1112, '__toString')) ? $value1112 : htmlspecialchars($value1112, ($arguments1110['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments1110['encoding'], $arguments1110['doubleEncode']);

$output1109 .= '" target="_blank">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1114 = array();
$arguments1114['then'] = NULL;
$arguments1114['else'] = NULL;
$arguments1114['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1116 = array();
$array1117 = array (
);$array1116['0'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array1117);

$expression1118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1114['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1116)
					),
					$renderingContext
				);
$array1119 = array (
);$arguments1114['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array1119)]);
$array1120 = array (
);$arguments1114['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.name', $array1120)]);

$output1109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1114, $renderChildrenClosure1115, $renderingContext);

$output1109 .= '
										</a>
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1122 = function() use ($renderingContext, $self) {
$array1123 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.size', $array1123);
};
$arguments1121 = array();
$arguments1121['value'] = NULL;
$arguments1121['decimals'] = 0;
$arguments1121['decimalSeparator'] = '.';
$arguments1121['thousandsSeparator'] = ',';
$arguments1121['units'] = NULL;
$renderChildrenClosure1122 = ($arguments1121['value'] !== null) ? function() use ($arguments1121) { return $arguments1121['value']; } : $renderChildrenClosure1122;
$output1109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1121, $renderChildrenClosure1122, $renderingContext)]);

$output1109 .= '
									</span>
								</li>
							';
return $output1109;
};
$arguments1106 = array();
$arguments1106['each'] = NULL;
$arguments1106['as'] = NULL;
$arguments1106['key'] = NULL;
$arguments1106['reverse'] = false;
$arguments1106['iteration'] = NULL;
$array1108 = array (
);$arguments1106['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array1108);
$arguments1106['as'] = 'relatedFile';

$output1103 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1106, $renderChildrenClosure1107, $renderingContext);

$output1103 .= '
						</ul>
					</div>
				';
return $output1103;
};
$arguments1098 = array();
$arguments1098['then'] = NULL;
$arguments1098['else'] = NULL;
$arguments1098['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1100 = array();
$array1101 = array (
);$array1100['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array1101);

$expression1102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1098['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1100)
					),
					$renderingContext
				);
$arguments1098['__thenClosure'] = $renderChildrenClosure1099;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1098, $renderChildrenClosure1099, $renderingContext);

$output874 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1125 = function() use ($renderingContext, $self) {
$output1129 = '';

$output1129 .= '
					<!-- Related links -->
					<div class="news-related news-related-links">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1130 = array();
$arguments1130['key'] = NULL;
$arguments1130['id'] = NULL;
$arguments1130['default'] = NULL;
$arguments1130['arguments'] = NULL;
$arguments1130['extensionName'] = NULL;
$arguments1130['languageKey'] = NULL;
$arguments1130['alternativeLanguageKeys'] = NULL;
$arguments1130['key'] = 'related-links';

$output1129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1130, $renderChildrenClosure1131, $renderingContext)]);

$output1129 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
$output1135 = '';

$output1135 .= '
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure1137 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1143 = array();
$arguments1143['then'] = NULL;
$arguments1143['else'] = NULL;
$arguments1143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1145 = array();
$array1146 = array (
);$array1145['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array1146);

$expression1147 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1145)
					),
					$renderingContext
				);
$array1148 = array (
);$arguments1143['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array1148)]);
$array1149 = array (
);$arguments1143['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array1149)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1143, $renderChildrenClosure1144, $renderingContext);
};
$arguments1136 = array();
$arguments1136['parameter'] = NULL;
$arguments1136['target'] = '';
$arguments1136['class'] = '';
$arguments1136['title'] = '';
$arguments1136['additionalParams'] = '';
$arguments1136['additionalAttributes'] = array (
);
$arguments1136['useCacheHash'] = false;
$arguments1136['addQueryString'] = false;
$arguments1136['addQueryStringMethod'] = 'GET';
$arguments1136['addQueryStringExclude'] = '';
$arguments1136['absolute'] = false;
$array1138 = array (
);$arguments1136['parameter'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array1138);
$array1139 = array (
);$arguments1136['title'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array1139);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$renderChildrenClosure1141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1140 = array();
$arguments1140['link'] = NULL;
$array1142 = array (
);$arguments1140['link'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array1142);
$arguments1136['target'] = GeorgRinger\News\ViewHelpers\TargetLinkViewHelper::renderStatic($arguments1140, $renderChildrenClosure1141, $renderingContext);

$output1135 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments1136, $renderChildrenClosure1137, $renderingContext);

$output1135 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1151 = function() use ($renderingContext, $self) {
$output1155 = '';

$output1155 .= '<span>';
$array1156 = array (
);
$output1155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array1156)]);

$output1155 .= '</span>';
return $output1155;
};
$arguments1150 = array();
$arguments1150['then'] = NULL;
$arguments1150['else'] = NULL;
$arguments1150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1152 = array();
$array1153 = array (
);$array1152['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array1153);

$expression1154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1152)
					),
					$renderingContext
				);
$arguments1150['__thenClosure'] = $renderChildrenClosure1151;

$output1135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1150, $renderChildrenClosure1151, $renderingContext);

$output1135 .= '
								</li>
							';
return $output1135;
};
$arguments1132 = array();
$arguments1132['each'] = NULL;
$arguments1132['as'] = NULL;
$arguments1132['key'] = NULL;
$arguments1132['reverse'] = false;
$arguments1132['iteration'] = NULL;
$array1134 = array (
);$arguments1132['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array1134);
$arguments1132['as'] = 'relatedLink';

$output1129 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1132, $renderChildrenClosure1133, $renderingContext);

$output1129 .= '
						</ul>
					</div>
				';
return $output1129;
};
$arguments1124 = array();
$arguments1124['then'] = NULL;
$arguments1124['else'] = NULL;
$arguments1124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1126 = array();
$array1127 = array (
);$array1126['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array1127);

$expression1128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1126)
					),
					$renderingContext
				);
$arguments1124['__thenClosure'] = $renderChildrenClosure1125;

$output874 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1124, $renderChildrenClosure1125, $renderingContext);

$output874 .= '
			</div>
		';
return $output874;
};
$arguments872 = array();

$output871 .= '';

$output871 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1158 = function() use ($renderingContext, $self) {
return '

		';
};
$arguments1157 = array();
$arguments1157['if'] = NULL;

$output871 .= '';

$output871 .= '
	';
return $output871;
};
$arguments583 = array();
$arguments583['then'] = NULL;
$arguments583['else'] = NULL;
$arguments583['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array868 = array();
$array869 = array (
);$array868['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array869);

$expression870 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments583['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression870(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array868)
					),
					$renderingContext
				);
$arguments583['__thenClosure'] = function() use ($renderingContext, $self) {
$output585 = '';

$output585 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$output588 = '';

$output588 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments589 = array();
$arguments589['newsItem'] = NULL;
$array591 = array (
);$arguments589['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array591);

$output588 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext)]);

$output588 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['section'] = NULL;
$arguments598['partial'] = NULL;
$arguments598['delegate'] = NULL;
$arguments598['renderable'] = NULL;
$arguments598['arguments'] = array (
);
$arguments598['optional'] = false;
$arguments598['default'] = NULL;
$arguments598['contentAs'] = NULL;
$arguments598['debug'] = true;
$arguments598['partial'] = 'Detail/Opengraph';
// Rendering Array
$array600 = array();
$array601 = array (
);$array600['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array601);
$array602 = array (
);$array600['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array602);
$arguments598['arguments'] = $array600;

$output597 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext);

$output597 .= '
				';
return $output597;
};
$arguments592 = array();
$arguments592['then'] = NULL;
$arguments592['else'] = NULL;
$arguments592['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array594 = array();
$array595 = array (
);$array594['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showMetaTags', $array595);

$expression596 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments592['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression596(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array594)
					),
					$renderingContext
				);
$arguments592['__thenClosure'] = $renderChildrenClosure593;

$output588 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output588 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
$output622 = '';

$output622 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
$output625 = '';

$output625 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
$output628 = '';

$output628 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
$array631 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array631);
};
$arguments629 = array();
$arguments629['value'] = NULL;
$arguments629['keepQuotes'] = false;
$arguments629['encoding'] = NULL;
$renderChildrenClosure630 = ($arguments629['value'] !== null) ? function() use ($arguments629) { return $arguments629['value']; } : $renderChildrenClosure630;
$output628 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);

$output628 .= '
                        ';
return $output628;
};
$arguments626 = array();

$output625 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext)]);

$output625 .= '
                    ';
return $output625;
};
$arguments623 = array();

$output622 .= '';

$output622 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
$output634 = '';

$output634 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
$output637 = '';

$output637 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure639 = function() use ($renderingContext, $self) {
$array640 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array640);
};
$arguments638 = array();
$arguments638['value'] = NULL;
$arguments638['keepQuotes'] = false;
$arguments638['encoding'] = NULL;
$renderChildrenClosure639 = ($arguments638['value'] !== null) ? function() use ($arguments638) { return $arguments638['value']; } : $renderChildrenClosure639;
$output637 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments638, $renderChildrenClosure639, $renderingContext);

$output637 .= '
                        ';
return $output637;
};
$arguments635 = array();

$output634 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext)]);

$output634 .= '
                    ';
return $output634;
};
$arguments632 = array();
$arguments632['if'] = NULL;

$output622 .= '';

$output622 .= '
                ';
return $output622;
};
$arguments603 = array();
$arguments603['then'] = NULL;
$arguments603['else'] = NULL;
$arguments603['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array619 = array();
$array620 = array (
);$array619['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array620);

$expression621 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments603['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression621(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array619)
					),
					$renderingContext
				);
$arguments603['__thenClosure'] = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
$array611 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array611);
};
$arguments609 = array();
$arguments609['value'] = NULL;
$arguments609['keepQuotes'] = false;
$arguments609['encoding'] = NULL;
$renderChildrenClosure610 = ($arguments609['value'] !== null) ? function() use ($arguments609) { return $arguments609['value']; } : $renderChildrenClosure610;
$output608 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output608 .= '
                        ';
return $output608;
};
$arguments606 = array();

$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext)]);

$output605 .= '
                    ';
return $output605;
};
$arguments603['__elseClosures'][] = function() use ($renderingContext, $self) {
$output612 = '';

$output612 .= '
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output615 = '';

$output615 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
$array618 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array618);
};
$arguments616 = array();
$arguments616['value'] = NULL;
$arguments616['keepQuotes'] = false;
$arguments616['encoding'] = NULL;
$renderChildrenClosure617 = ($arguments616['value'] !== null) ? function() use ($arguments616) { return $arguments616['value']; } : $renderChildrenClosure617;
$output615 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments616, $renderChildrenClosure617, $renderingContext);

$output615 .= '
                        ';
return $output615;
};
$arguments613 = array();

$output612 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments613, $renderChildrenClosure614, $renderingContext)]);

$output612 .= '
                    ';
return $output612;
};

$output588 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext);

$output588 .= '
			';
return $output588;
};
$arguments586 = array();

$output585 .= GeorgRinger\News\ViewHelpers\Format\NothingViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output585 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
$output651 = '';

$output651 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
$output657 = '';

$output657 .= '
						<ul class="pager">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
$output663 = '';

$output663 .= '
								<li class="previous">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$output668 = '';

$output668 .= '
										<span aria-hidden="true">&larr; </span>';
$array669 = array (
);
$output668 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.prev.title', $array669)]);

$output668 .= '
									';
return $output668;
};
$arguments664 = array();
$arguments664['additionalAttributes'] = NULL;
$arguments664['data'] = NULL;
$arguments664['class'] = NULL;
$arguments664['dir'] = NULL;
$arguments664['id'] = NULL;
$arguments664['lang'] = NULL;
$arguments664['style'] = NULL;
$arguments664['title'] = NULL;
$arguments664['accesskey'] = NULL;
$arguments664['tabindex'] = NULL;
$arguments664['onclick'] = NULL;
$arguments664['newsItem'] = NULL;
$arguments664['settings'] = array (
);
$arguments664['uriOnly'] = false;
$arguments664['configuration'] = array (
);
$arguments664['content'] = '';
$arguments664['section'] = NULL;
$array666 = array (
);$arguments664['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array666);
$array667 = array (
);$arguments664['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array667);

$output663 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);

$output663 .= '
								</li>
							';
return $output663;
};
$arguments658 = array();
$arguments658['then'] = NULL;
$arguments658['else'] = NULL;
$arguments658['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array660 = array();
$array661 = array (
);$array660['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array661);

$expression662 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments658['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression662(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array660)
					),
					$renderingContext
				);
$arguments658['__thenClosure'] = $renderChildrenClosure659;

$output657 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output657 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
$output675 = '';

$output675 .= '
								<li class="next">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$output680 = '';

$output680 .= '
										';
$array681 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.next.title', $array681)]);

$output680 .= ' <span aria-hidden="true"> &rarr;</span>
									';
return $output680;
};
$arguments676 = array();
$arguments676['additionalAttributes'] = NULL;
$arguments676['data'] = NULL;
$arguments676['class'] = NULL;
$arguments676['dir'] = NULL;
$arguments676['id'] = NULL;
$arguments676['lang'] = NULL;
$arguments676['style'] = NULL;
$arguments676['title'] = NULL;
$arguments676['accesskey'] = NULL;
$arguments676['tabindex'] = NULL;
$arguments676['onclick'] = NULL;
$arguments676['newsItem'] = NULL;
$arguments676['settings'] = array (
);
$arguments676['uriOnly'] = false;
$arguments676['configuration'] = array (
);
$arguments676['content'] = '';
$arguments676['section'] = NULL;
$array678 = array (
);$arguments676['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array678);
$array679 = array (
);$arguments676['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array679);
$arguments676['class'] = 'next';

$output675 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output675 .= '
								</li>
							';
return $output675;
};
$arguments670 = array();
$arguments670['then'] = NULL;
$arguments670['else'] = NULL;
$arguments670['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array672 = array();
$array673 = array (
);$array672['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array673);

$expression674 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments670['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression674(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array672)
					),
					$renderingContext
				);
$arguments670['__thenClosure'] = $renderChildrenClosure671;

$output657 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);

$output657 .= '
						</ul>
					';
return $output657;
};
$arguments652 = array();
$arguments652['then'] = NULL;
$arguments652['else'] = NULL;
$arguments652['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array654 = array();
$array655 = array (
);$array654['0'] = $renderingContext->getVariableProvider()->getByPath('paginated', $array655);

$expression656 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments652['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression656(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array654)
					),
					$renderingContext
				);
$arguments652['__thenClosure'] = $renderChildrenClosure653;

$output651 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);

$output651 .= '
				';
return $output651;
};
$arguments647 = array();
$arguments647['news'] = NULL;
$arguments647['pidList'] = '';
$arguments647['sortField'] = 'datetime';
$arguments647['as'] = NULL;
$arguments647['includeInternalType'] = NULL;
$arguments647['includeExternalType'] = NULL;
$array649 = array (
);$arguments647['pidList'] = $renderingContext->getVariableProvider()->getByPath('newsItem.pid', $array649);
$array650 = array (
);$arguments647['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array650);
$arguments647['as'] = 'paginated';
$arguments647['sortField'] = 'datetime';

$output646 .= GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext);

$output646 .= '
			';
return $output646;
};
$arguments641 = array();
$arguments641['then'] = NULL;
$arguments641['else'] = NULL;
$arguments641['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array643 = array();
$array644 = array (
);$array643['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showPrevNext', $array644);

$expression645 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments641['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression645(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array643)
					),
					$renderingContext
				);
$arguments641['__thenClosure'] = $renderChildrenClosure642;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext);

$output585 .= '
			<div class="header">
				<h3 itemprop="headline">';
$array682 = array (
);
$output585 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array682)]);

$output585 .= '</h3>
			</div>
			<div class="footer">
				<p>
					<!-- date -->
					<span class="news-list-date">
						<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['date'] = NULL;
$arguments683['format'] = '';
$arguments683['base'] = NULL;
$array685 = array (
);$arguments683['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array685);
$arguments683['format'] = 'Y-m-d';
$renderChildrenClosure684 = ($arguments683['date'] !== null) ? function() use ($arguments683) { return $arguments683['date']; } : $renderChildrenClosure684;
$output585 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext)]);

$output585 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
$array690 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array690);
};
$arguments686 = array();
$arguments686['date'] = NULL;
$arguments686['format'] = '';
$arguments686['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments688 = array();
$arguments688['key'] = NULL;
$arguments688['id'] = NULL;
$arguments688['default'] = NULL;
$arguments688['arguments'] = NULL;
$arguments688['extensionName'] = NULL;
$arguments688['languageKey'] = NULL;
$arguments688['alternativeLanguageKeys'] = NULL;
$arguments688['key'] = 'dateFormat';
$arguments686['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext);
$renderChildrenClosure687 = ($arguments686['date'] !== null) ? function() use ($arguments686) { return $arguments686['date']; } : $renderChildrenClosure687;
$output585 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext)]);

$output585 .= '
						</time>
					</span>

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
$output696 = '';

$output696 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments697 = array();
$arguments697['section'] = NULL;
$arguments697['partial'] = NULL;
$arguments697['delegate'] = NULL;
$arguments697['renderable'] = NULL;
$arguments697['arguments'] = array (
);
$arguments697['optional'] = false;
$arguments697['default'] = NULL;
$arguments697['contentAs'] = NULL;
$arguments697['debug'] = true;
$arguments697['partial'] = 'Category/Items';
// Rendering Array
$array699 = array();
$array700 = array (
);$array699['categories'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array700);
$array701 = array (
);$array699['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array701);
$arguments697['arguments'] = $array699;

$output696 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output696 .= '
					';
return $output696;
};
$arguments691 = array();
$arguments691['then'] = NULL;
$arguments691['else'] = NULL;
$arguments691['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array693 = array();
$array694 = array (
);$array693['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array694);

$expression695 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments691['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression695(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array693)
					),
					$renderingContext
				);
$arguments691['__thenClosure'] = $renderChildrenClosure692;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext);

$output585 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
$output707 = '';

$output707 .= '
						<!-- Tags -->
						<span class="news-list-tags" itemprop="keywords">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$output711 = '';

$output711 .= '
							';
$array712 = array (
);
$output711 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.title', $array712)]);

$output711 .= '
						';
return $output711;
};
$arguments708 = array();
$arguments708['each'] = NULL;
$arguments708['as'] = NULL;
$arguments708['key'] = NULL;
$arguments708['reverse'] = false;
$arguments708['iteration'] = NULL;
$array710 = array (
);$arguments708['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array710);
$arguments708['as'] = 'tag';

$output707 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);

$output707 .= '
						</span>
					';
return $output707;
};
$arguments702 = array();
$arguments702['then'] = NULL;
$arguments702['else'] = NULL;
$arguments702['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array704 = array();
$array705 = array (
);$array704['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array705);

$expression706 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments702['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression706(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array704)
					),
					$renderingContext
				);
$arguments702['__thenClosure'] = $renderChildrenClosure703;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext);

$output585 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
$output718 = '';

$output718 .= '
						<!-- author -->
						<span class="news-list-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments719 = array();
$arguments719['key'] = NULL;
$arguments719['id'] = NULL;
$arguments719['default'] = NULL;
$arguments719['arguments'] = NULL;
$arguments719['extensionName'] = NULL;
$arguments719['languageKey'] = NULL;
$arguments719['alternativeLanguageKeys'] = NULL;
$arguments719['key'] = 'author_simple';

$output718 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext)]);

$output718 .= ' <span itemprop="name">';
$array721 = array (
);
$output718 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.author', $array721)]);

$output718 .= '</span>
						</span>
					';
return $output718;
};
$arguments713 = array();
$arguments713['then'] = NULL;
$arguments713['else'] = NULL;
$arguments713['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array715 = array();
$array716 = array (
);$array715['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array716);

$expression717 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments713['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression717(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array715)
					),
					$renderingContext
				);
$arguments713['__thenClosure'] = $renderChildrenClosure714;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output585 .= '
				</p>
			</div>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RenderMediaViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
$output725 = '';

$output725 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
$output731 = '';

$output731 .= '
					<!-- teaser -->
					<div class="teaser-text" itemprop="description">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure733 = function() use ($renderingContext, $self) {
$array734 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array734);
};
$arguments732 = array();
$arguments732['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output731 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments732, $renderChildrenClosure733, $renderingContext);

$output731 .= '
					</div>
				';
return $output731;
};
$arguments726 = array();
$arguments726['then'] = NULL;
$arguments726['else'] = NULL;
$arguments726['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array728 = array();
$array729 = array (
);$array728['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array729);

$expression730 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments726['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression730(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array728)
					),
					$renderingContext
				);
$arguments726['__thenClosure'] = $renderChildrenClosure727;

$output725 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);

$output725 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
$output740 = '';

$output740 .= '
					<!-- content elements -->
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
$array743 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.contentElementIdList', $array743);
};
$arguments741 = array();
$arguments741['data'] = NULL;
$arguments741['typoscriptObjectPath'] = NULL;
$arguments741['currentValueKey'] = NULL;
$arguments741['table'] = '';
$arguments741['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$renderChildrenClosure742 = ($arguments741['data'] !== null) ? function() use ($arguments741) { return $arguments741['data']; } : $renderChildrenClosure742;
$output740 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments741, $renderChildrenClosure742, $renderingContext);

$output740 .= '
				';
return $output740;
};
$arguments735 = array();
$arguments735['then'] = NULL;
$arguments735['else'] = NULL;
$arguments735['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array737 = array();
$array738 = array (
);$array737['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.contentElements', $array738);

$expression739 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments735['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression739(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array737)
					),
					$renderingContext
				);
$arguments735['__thenClosure'] = $renderChildrenClosure736;

$output725 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);

$output725 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure745 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments744 = array();
$arguments744['section'] = NULL;
$arguments744['partial'] = NULL;
$arguments744['delegate'] = NULL;
$arguments744['renderable'] = NULL;
$arguments744['arguments'] = array (
);
$arguments744['optional'] = false;
$arguments744['default'] = NULL;
$arguments744['contentAs'] = NULL;
$arguments744['debug'] = true;
$arguments744['partial'] = 'Detail/MediaContainer';
// Rendering Array
$array746 = array();
$array747 = array (
);$array746['media'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array747);
$array748 = array (
);$array746['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array748);
$arguments744['arguments'] = $array746;

$output725 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments744, $renderChildrenClosure745, $renderingContext);

$output725 .= '

				<!-- main text -->
				<div class="news-text-wrap" itemprop="articleBody">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure750 = function() use ($renderingContext, $self) {
$array751 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array751);
};
$arguments749 = array();
$arguments749['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output725 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments749, $renderChildrenClosure750, $renderingContext);

$output725 .= '
				</div>
			';
return $output725;
};
$arguments722 = array();
$arguments722['news'] = NULL;
$arguments722['imgClass'] = NULL;
$arguments722['videoClass'] = NULL;
$arguments722['audioClass'] = NULL;
$array724 = array (
);$arguments722['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array724);
$arguments722['imgClass'] = 'img-responsive';
$arguments722['videoClass'] = 'video-wrapper';
$arguments722['audioClass'] = 'audio-wrapper';

$output585 .= GeorgRinger\News\ViewHelpers\RenderMediaViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext);

$output585 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
$output757 = '';

$output757 .= '
				<!-- Link Back -->
				<div class="news-backlink-wrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure759 = function() use ($renderingContext, $self) {
$output761 = '';

$output761 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments762 = array();
$arguments762['key'] = NULL;
$arguments762['id'] = NULL;
$arguments762['default'] = NULL;
$arguments762['arguments'] = NULL;
$arguments762['extensionName'] = NULL;
$arguments762['languageKey'] = NULL;
$arguments762['alternativeLanguageKeys'] = NULL;
$arguments762['key'] = 'back-link';

$output761 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments762, $renderChildrenClosure763, $renderingContext)]);

$output761 .= '
					';
return $output761;
};
$arguments758 = array();
$arguments758['additionalAttributes'] = NULL;
$arguments758['data'] = NULL;
$arguments758['class'] = NULL;
$arguments758['dir'] = NULL;
$arguments758['id'] = NULL;
$arguments758['lang'] = NULL;
$arguments758['style'] = NULL;
$arguments758['title'] = NULL;
$arguments758['accesskey'] = NULL;
$arguments758['tabindex'] = NULL;
$arguments758['onclick'] = NULL;
$arguments758['target'] = NULL;
$arguments758['rel'] = NULL;
$arguments758['pageUid'] = NULL;
$arguments758['pageType'] = NULL;
$arguments758['noCache'] = NULL;
$arguments758['noCacheHash'] = NULL;
$arguments758['section'] = NULL;
$arguments758['linkAccessRestrictedPages'] = NULL;
$arguments758['additionalParams'] = NULL;
$arguments758['absolute'] = NULL;
$arguments758['addQueryString'] = NULL;
$arguments758['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments758['addQueryStringMethod'] = NULL;
$array760 = array (
);$arguments758['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array760);

$output757 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments758, $renderChildrenClosure759, $renderingContext);

$output757 .= '
				</div>
			';
return $output757;
};
$arguments752 = array();
$arguments752['then'] = NULL;
$arguments752['else'] = NULL;
$arguments752['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array754 = array();
$array755 = array (
);$array754['0'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array755);

$expression756 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments752['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression756(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array754)
					),
					$renderingContext
				);
$arguments752['__thenClosure'] = $renderChildrenClosure753;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments752, $renderChildrenClosure753, $renderingContext);

$output585 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure765 = function() use ($renderingContext, $self) {
$output769 = '';

$output769 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure771 = function() use ($renderingContext, $self) {
return '
					Care about the privacy of your readers?
					Checkout https://typo3.org/extensions/repository/view/rx_shariff
					and it will be used automatically!
				';
};
$arguments770 = array();

$output769 .= NULL;

$output769 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper
$renderChildrenClosure773 = function() use ($renderingContext, $self) {
$output774 = '';

$output774 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure776 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments775 = array();
$arguments775['section'] = NULL;
$arguments775['partial'] = NULL;
$arguments775['delegate'] = NULL;
$arguments775['renderable'] = NULL;
$arguments775['arguments'] = array (
);
$arguments775['optional'] = false;
$arguments775['default'] = NULL;
$arguments775['contentAs'] = NULL;
$arguments775['debug'] = true;
$arguments775['partial'] = 'Detail/Shariff';

$output774 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments775, $renderChildrenClosure776, $renderingContext);

$output774 .= '
				';
return $output774;
};
$arguments772 = array();
$arguments772['extensionKey'] = NULL;
$arguments772['then'] = NULL;
$arguments772['else'] = NULL;
$arguments772['extensionKey'] = 'rx_shariff';
$arguments772['__thenClosure'] = $renderChildrenClosure773;

$output769 .= GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper::renderStatic($arguments772, $renderChildrenClosure773, $renderingContext);

$output769 .= '
			';
return $output769;
};
$arguments764 = array();
$arguments764['then'] = NULL;
$arguments764['else'] = NULL;
$arguments764['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array766 = array();
$array767 = array (
);$array766['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showSocialShareButtons', $array767);

$expression768 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments764['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression768(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array766)
					),
					$renderingContext
				);
$arguments764['__thenClosure'] = $renderChildrenClosure765;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments764, $renderChildrenClosure765, $renderingContext);

$output585 .= '

			<!-- related things -->
			<div class="news-related-wrap">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
$output779 = '';

$output779 .= '
					Various options exist to fetch different related information:
					- ';
$array780 = array (
);
$output779 .= $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array780);

$output779 .= ': all related news, related und related from, sorted by date
					- ';
$array781 = array (
);
$output779 .= $renderingContext->getVariableProvider()->getByPath('newsItem.related', $array781);

$output779 .= ': all related
					- ';
$array782 = array (
);
$output779 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedSorted', $array782);

$output779 .= ': all related, sorted by date
					- ';
$array783 = array (
);
$output779 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFrom', $array783);

$output779 .= ': all related from
					- ';
$array784 = array (
);
$output779 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFromSorted', $array784);

$output779 .= ': all related from, sorted by date
				';
return $output779;
};
$arguments777 = array();

$output585 .= NULL;

$output585 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
$output790 = '';

$output790 .= '
					<!-- Related news records -->
					<div class="news-related news-related-news">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure792 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments791 = array();
$arguments791['key'] = NULL;
$arguments791['id'] = NULL;
$arguments791['default'] = NULL;
$arguments791['arguments'] = NULL;
$arguments791['extensionName'] = NULL;
$arguments791['languageKey'] = NULL;
$arguments791['alternativeLanguageKeys'] = NULL;
$arguments791['key'] = 'related-news';

$output790 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments791, $renderChildrenClosure792, $renderingContext)]);

$output790 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure794 = function() use ($renderingContext, $self) {
$output796 = '';

$output796 .= '
								<li>
									<span class="news-related-news-date">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure798 = function() use ($renderingContext, $self) {
$array801 = array (
);return $renderingContext->getVariableProvider()->getByPath('related.datetime', $array801);
};
$arguments797 = array();
$arguments797['date'] = NULL;
$arguments797['format'] = '';
$arguments797['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure800 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments799 = array();
$arguments799['key'] = NULL;
$arguments799['id'] = NULL;
$arguments799['default'] = NULL;
$arguments799['arguments'] = NULL;
$arguments799['extensionName'] = NULL;
$arguments799['languageKey'] = NULL;
$arguments799['alternativeLanguageKeys'] = NULL;
$arguments799['key'] = 'dateFormat';
$arguments797['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments799, $renderChildrenClosure800, $renderingContext);
$renderChildrenClosure798 = ($arguments797['date'] !== null) ? function() use ($arguments797) { return $arguments797['date']; } : $renderChildrenClosure798;
$output796 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments797, $renderChildrenClosure798, $renderingContext)]);

$output796 .= '</span>
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
$output807 = '';

$output807 .= '
										';
$array808 = array (
);
$output807 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('related.title', $array808)]);

$output807 .= '
									';
return $output807;
};
$arguments802 = array();
$arguments802['additionalAttributes'] = NULL;
$arguments802['data'] = NULL;
$arguments802['class'] = NULL;
$arguments802['dir'] = NULL;
$arguments802['id'] = NULL;
$arguments802['lang'] = NULL;
$arguments802['style'] = NULL;
$arguments802['title'] = NULL;
$arguments802['accesskey'] = NULL;
$arguments802['tabindex'] = NULL;
$arguments802['onclick'] = NULL;
$arguments802['newsItem'] = NULL;
$arguments802['settings'] = array (
);
$arguments802['uriOnly'] = false;
$arguments802['configuration'] = array (
);
$arguments802['content'] = '';
$arguments802['section'] = NULL;
$array804 = array (
);$arguments802['newsItem'] = $renderingContext->getVariableProvider()->getByPath('related', $array804);
$array805 = array (
);$arguments802['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array805);
$array806 = array (
);$arguments802['title'] = $renderingContext->getVariableProvider()->getByPath('related.title', $array806);

$output796 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments802, $renderChildrenClosure803, $renderingContext);

$output796 .= '
								</li>

							';
return $output796;
};
$arguments793 = array();
$arguments793['each'] = NULL;
$arguments793['as'] = NULL;
$arguments793['key'] = NULL;
$arguments793['reverse'] = false;
$arguments793['iteration'] = NULL;
$array795 = array (
);$arguments793['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array795);
$arguments793['as'] = 'related';

$output790 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments793, $renderChildrenClosure794, $renderingContext);

$output790 .= '
						</ul>
					</div>
				';
return $output790;
};
$arguments785 = array();
$arguments785['then'] = NULL;
$arguments785['else'] = NULL;
$arguments785['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array787 = array();
$array788 = array (
);$array787['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array788);

$expression789 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments785['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression789(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array787)
					),
					$renderingContext
				);
$arguments785['__thenClosure'] = $renderChildrenClosure786;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments785, $renderChildrenClosure786, $renderingContext);

$output585 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure810 = function() use ($renderingContext, $self) {
$output814 = '';

$output814 .= '
					<!-- related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments815 = array();
$arguments815['key'] = NULL;
$arguments815['id'] = NULL;
$arguments815['default'] = NULL;
$arguments815['arguments'] = NULL;
$arguments815['extensionName'] = NULL;
$arguments815['languageKey'] = NULL;
$arguments815['alternativeLanguageKeys'] = NULL;
$arguments815['key'] = 'related-files';

$output814 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments815, $renderChildrenClosure816, $renderingContext)]);

$output814 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure818 = function() use ($renderingContext, $self) {
$output820 = '';

$output820 .= '
								<li>
									<span class="news-related-files-link">
										<a href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
$array824 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.publicUrl', $array824);
};
$arguments821 = array();
$arguments821['value'] = NULL;
$arguments821['keepQuotes'] = false;
$arguments821['encoding'] = 'UTF-8';
$arguments821['doubleEncode'] = true;
$value823 = ($arguments821['value'] !== NULL ? $arguments821['value'] : $renderChildrenClosure822());

$output820 .= !is_string($value823) && !(is_object($value823) && method_exists($value823, '__toString')) ? $value823 : htmlspecialchars($value823, ($arguments821['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments821['encoding'], $arguments821['doubleEncode']);

$output820 .= '" target="_blank">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments825 = array();
$arguments825['then'] = NULL;
$arguments825['else'] = NULL;
$arguments825['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array827 = array();
$array828 = array (
);$array827['0'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array828);

$expression829 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments825['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression829(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array827)
					),
					$renderingContext
				);
$array830 = array (
);$arguments825['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array830)]);
$array831 = array (
);$arguments825['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.name', $array831)]);

$output820 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments825, $renderChildrenClosure826, $renderingContext);

$output820 .= '
										</a>
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
$array834 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.size', $array834);
};
$arguments832 = array();
$arguments832['value'] = NULL;
$arguments832['decimals'] = 0;
$arguments832['decimalSeparator'] = '.';
$arguments832['thousandsSeparator'] = ',';
$arguments832['units'] = NULL;
$renderChildrenClosure833 = ($arguments832['value'] !== null) ? function() use ($arguments832) { return $arguments832['value']; } : $renderChildrenClosure833;
$output820 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments832, $renderChildrenClosure833, $renderingContext)]);

$output820 .= '
									</span>
								</li>
							';
return $output820;
};
$arguments817 = array();
$arguments817['each'] = NULL;
$arguments817['as'] = NULL;
$arguments817['key'] = NULL;
$arguments817['reverse'] = false;
$arguments817['iteration'] = NULL;
$array819 = array (
);$arguments817['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array819);
$arguments817['as'] = 'relatedFile';

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments817, $renderChildrenClosure818, $renderingContext);

$output814 .= '
						</ul>
					</div>
				';
return $output814;
};
$arguments809 = array();
$arguments809['then'] = NULL;
$arguments809['else'] = NULL;
$arguments809['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array811 = array();
$array812 = array (
);$array811['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array812);

$expression813 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments809['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression813(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array811)
					),
					$renderingContext
				);
$arguments809['__thenClosure'] = $renderChildrenClosure810;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments809, $renderChildrenClosure810, $renderingContext);

$output585 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
$output840 = '';

$output840 .= '
					<!-- Related links -->
					<div class="news-related news-related-links">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure842 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments841 = array();
$arguments841['key'] = NULL;
$arguments841['id'] = NULL;
$arguments841['default'] = NULL;
$arguments841['arguments'] = NULL;
$arguments841['extensionName'] = NULL;
$arguments841['languageKey'] = NULL;
$arguments841['alternativeLanguageKeys'] = NULL;
$arguments841['key'] = 'related-links';

$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments841, $renderChildrenClosure842, $renderingContext)]);

$output840 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure844 = function() use ($renderingContext, $self) {
$output846 = '';

$output846 .= '
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure848 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure855 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments854 = array();
$arguments854['then'] = NULL;
$arguments854['else'] = NULL;
$arguments854['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array856 = array();
$array857 = array (
);$array856['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array857);

$expression858 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments854['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression858(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array856)
					),
					$renderingContext
				);
$array859 = array (
);$arguments854['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array859)]);
$array860 = array (
);$arguments854['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array860)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments854, $renderChildrenClosure855, $renderingContext);
};
$arguments847 = array();
$arguments847['parameter'] = NULL;
$arguments847['target'] = '';
$arguments847['class'] = '';
$arguments847['title'] = '';
$arguments847['additionalParams'] = '';
$arguments847['additionalAttributes'] = array (
);
$arguments847['useCacheHash'] = false;
$arguments847['addQueryString'] = false;
$arguments847['addQueryStringMethod'] = 'GET';
$arguments847['addQueryStringExclude'] = '';
$arguments847['absolute'] = false;
$array849 = array (
);$arguments847['parameter'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array849);
$array850 = array (
);$arguments847['title'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array850);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$renderChildrenClosure852 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments851 = array();
$arguments851['link'] = NULL;
$array853 = array (
);$arguments851['link'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array853);
$arguments847['target'] = GeorgRinger\News\ViewHelpers\TargetLinkViewHelper::renderStatic($arguments851, $renderChildrenClosure852, $renderingContext);

$output846 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments847, $renderChildrenClosure848, $renderingContext);

$output846 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure862 = function() use ($renderingContext, $self) {
$output866 = '';

$output866 .= '<span>';
$array867 = array (
);
$output866 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array867)]);

$output866 .= '</span>';
return $output866;
};
$arguments861 = array();
$arguments861['then'] = NULL;
$arguments861['else'] = NULL;
$arguments861['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array863 = array();
$array864 = array (
);$array863['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array864);

$expression865 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments861['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression865(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array863)
					),
					$renderingContext
				);
$arguments861['__thenClosure'] = $renderChildrenClosure862;

$output846 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments861, $renderChildrenClosure862, $renderingContext);

$output846 .= '
								</li>
							';
return $output846;
};
$arguments843 = array();
$arguments843['each'] = NULL;
$arguments843['as'] = NULL;
$arguments843['key'] = NULL;
$arguments843['reverse'] = false;
$arguments843['iteration'] = NULL;
$array845 = array (
);$arguments843['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array845);
$arguments843['as'] = 'relatedLink';

$output840 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments843, $renderChildrenClosure844, $renderingContext);

$output840 .= '
						</ul>
					</div>
				';
return $output840;
};
$arguments835 = array();
$arguments835['then'] = NULL;
$arguments835['else'] = NULL;
$arguments835['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array837 = array();
$array838 = array (
);$array837['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array838);

$expression839 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments835['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression839(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array837)
					),
					$renderingContext
				);
$arguments835['__thenClosure'] = $renderChildrenClosure836;

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments835, $renderChildrenClosure836, $renderingContext);

$output585 .= '
			</div>
		';
return $output585;
};
$arguments583['__elseClosures'][] = function() use ($renderingContext, $self) {
return '

		';
};

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext);

$output582 .= '
';
return $output582;
};
$arguments580 = array();
$arguments580['name'] = NULL;
$arguments580['name'] = 'content';

$output577 .= NULL;

$output577 .= '

';

return $output577;
}


}
#