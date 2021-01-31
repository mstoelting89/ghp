<?php

class partial_List_Item_5cafd94b9715bc5ff6473ccf45ca620c007ab963 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['newsItem'] = NULL;
$array3 = array (
);$arguments1['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array3);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
<div class="row news-list-item">
	<!--
	<div class="col-md-3">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['alt'] = NULL;
$arguments50['file'] = NULL;
$arguments50['additionalConfig'] = array (
);
$arguments50['width'] = NULL;
$arguments50['height'] = NULL;
$arguments50['cropVariant'] = 'default';
$arguments50['fileExtension'] = NULL;
$arguments50['loading'] = NULL;
$arguments50['class'] = 'img-responsive';
$array52 = array (
);$arguments50['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array52);
$array53 = array (
);$arguments50['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array53);
$array54 = array (
);$arguments50['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array54);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array58);

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$array60 = array (
);$arguments55['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array60);
$array61 = array (
);$arguments55['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array61);
$arguments50['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$array67 = array (
);$arguments62['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array67);
$arguments62['else'] = '';
$arguments50['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
				';
return $output49;
};
$arguments47 = array();

$output46 .= '';

$output46 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['alt'] = NULL;
$arguments77['ismap'] = NULL;
$arguments77['longdesc'] = NULL;
$arguments77['usemap'] = NULL;
$arguments77['loading'] = NULL;
$arguments77['src'] = '';
$arguments77['treatIdAsReference'] = false;
$arguments77['image'] = NULL;
$arguments77['crop'] = NULL;
$arguments77['cropVariant'] = 'default';
$arguments77['fileExtension'] = NULL;
$arguments77['width'] = NULL;
$arguments77['height'] = NULL;
$arguments77['minWidth'] = NULL;
$arguments77['minHeight'] = NULL;
$arguments77['maxWidth'] = NULL;
$arguments77['maxHeight'] = NULL;
$arguments77['absolute'] = false;
$arguments77['class'] = 'img-dummy img-responsive';
$array79 = array (
);$arguments77['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array79);
$arguments77['title'] = '';
$arguments77['alt'] = '';
$array80 = array (
);$arguments77['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array80);
$array81 = array (
);$arguments77['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array81);

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
					';
return $output76;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = $renderChildrenClosure72;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
				';
return $output70;
};
$arguments68 = array();
$arguments68['if'] = NULL;

$output46 .= '';

$output46 .= '
			';
return $output46;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['alt'] = NULL;
$arguments13['file'] = NULL;
$arguments13['additionalConfig'] = array (
);
$arguments13['width'] = NULL;
$arguments13['height'] = NULL;
$arguments13['cropVariant'] = 'default';
$arguments13['fileExtension'] = NULL;
$arguments13['loading'] = NULL;
$arguments13['class'] = 'img-responsive';
$array15 = array (
);$arguments13['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array15);
$array16 = array (
);$arguments13['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array16);
$array17 = array (
);$arguments13['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array17);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$array23 = array (
);$arguments18['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array23);
$array24 = array (
);$arguments18['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array24);
$arguments13['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$array30 = array (
);$arguments25['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array30);
$arguments25['else'] = '';
$arguments13['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
				';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['alt'] = NULL;
$arguments38['ismap'] = NULL;
$arguments38['longdesc'] = NULL;
$arguments38['usemap'] = NULL;
$arguments38['loading'] = NULL;
$arguments38['src'] = '';
$arguments38['treatIdAsReference'] = false;
$arguments38['image'] = NULL;
$arguments38['crop'] = NULL;
$arguments38['cropVariant'] = 'default';
$arguments38['fileExtension'] = NULL;
$arguments38['width'] = NULL;
$arguments38['height'] = NULL;
$arguments38['minWidth'] = NULL;
$arguments38['minHeight'] = NULL;
$arguments38['maxWidth'] = NULL;
$arguments38['maxHeight'] = NULL;
$arguments38['absolute'] = false;
$arguments38['class'] = 'img-dummy img-responsive';
$array40 = array (
);$arguments38['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array40);
$arguments38['title'] = '';
$arguments38['alt'] = '';
$array41 = array (
);$arguments38['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array41);
$array42 = array (
);$arguments38['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array42);

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
					';
return $output37;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
				';
return $output31;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
		';
return $output9;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['newsItem'] = NULL;
$arguments4['settings'] = array (
);
$arguments4['uriOnly'] = false;
$arguments4['configuration'] = array (
);
$arguments4['content'] = '';
$arguments4['section'] = NULL;
$array6 = array (
);$arguments4['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array6);
$array7 = array (
);$arguments4['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array7);
$array8 = array (
);$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array8);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	</div>
	-->
	<div class="col-md-12 articletype-';
$array82 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array82)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array86);

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments83['then'] = ' topnews';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
		<div class="news-header">
			<h5 itemprop="headline">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
					';
$array94 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array94)]);

$output93 .= '
				';
return $output93;
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['newsItem'] = NULL;
$arguments88['settings'] = array (
);
$arguments88['uriOnly'] = false;
$arguments88['configuration'] = array (
);
$arguments88['content'] = '';
$arguments88['section'] = NULL;
$array90 = array (
);$arguments88['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array90);
$array91 = array (
);$arguments88['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array91);
$array92 = array (
);$arguments88['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array92);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output0 .= '
			</h5>
		</div>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['section'] = NULL;
$arguments95['partial'] = NULL;
$arguments95['delegate'] = NULL;
$arguments95['renderable'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['optional'] = false;
$arguments95['default'] = NULL;
$arguments95['contentAs'] = NULL;
$arguments95['debug'] = true;
$arguments95['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array98);
$array99 = array (
);$array97['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array99);
$arguments95['arguments'] = $array97;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output0 .= '

		<div class="news-media">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['alt'] = NULL;
$arguments133['file'] = NULL;
$arguments133['additionalConfig'] = array (
);
$arguments133['width'] = NULL;
$arguments133['height'] = NULL;
$arguments133['cropVariant'] = 'default';
$arguments133['fileExtension'] = NULL;
$arguments133['loading'] = NULL;
$arguments133['class'] = 'img-responsive';
$array135 = array (
);$arguments133['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array135);
$array136 = array (
);$arguments133['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array136);
$array137 = array (
);$arguments133['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array137);
$arguments133['width'] = 150;
$arguments133['height'] = 150;

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
					';
return $output132;
};
$arguments130 = array();

$output129 .= '';

$output129 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['additionalAttributes'] = NULL;
$arguments147['data'] = NULL;
$arguments147['class'] = NULL;
$arguments147['dir'] = NULL;
$arguments147['id'] = NULL;
$arguments147['lang'] = NULL;
$arguments147['style'] = NULL;
$arguments147['title'] = NULL;
$arguments147['accesskey'] = NULL;
$arguments147['tabindex'] = NULL;
$arguments147['onclick'] = NULL;
$arguments147['alt'] = NULL;
$arguments147['ismap'] = NULL;
$arguments147['longdesc'] = NULL;
$arguments147['usemap'] = NULL;
$arguments147['loading'] = NULL;
$arguments147['src'] = '';
$arguments147['treatIdAsReference'] = false;
$arguments147['image'] = NULL;
$arguments147['crop'] = NULL;
$arguments147['cropVariant'] = 'default';
$arguments147['fileExtension'] = NULL;
$arguments147['width'] = NULL;
$arguments147['height'] = NULL;
$arguments147['minWidth'] = NULL;
$arguments147['minHeight'] = NULL;
$arguments147['maxWidth'] = NULL;
$arguments147['maxHeight'] = NULL;
$arguments147['absolute'] = false;
$arguments147['class'] = 'img-dummy img-responsive';
$array149 = array (
);$arguments147['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array149);
$arguments147['title'] = '';
$arguments147['alt'] = '';
$array150 = array (
);$arguments147['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array150);
$array151 = array (
);$arguments147['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array151);

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
						';
return $output146;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array144);

$expression145 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments141['__thenClosure'] = $renderChildrenClosure142;

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
					';
return $output140;
};
$arguments138 = array();
$arguments138['if'] = NULL;

$output129 .= '';

$output129 .= '
				';
return $output129;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['additionalAttributes'] = NULL;
$arguments109['data'] = NULL;
$arguments109['class'] = NULL;
$arguments109['dir'] = NULL;
$arguments109['id'] = NULL;
$arguments109['lang'] = NULL;
$arguments109['style'] = NULL;
$arguments109['title'] = NULL;
$arguments109['accesskey'] = NULL;
$arguments109['tabindex'] = NULL;
$arguments109['onclick'] = NULL;
$arguments109['alt'] = NULL;
$arguments109['file'] = NULL;
$arguments109['additionalConfig'] = array (
);
$arguments109['width'] = NULL;
$arguments109['height'] = NULL;
$arguments109['cropVariant'] = 'default';
$arguments109['fileExtension'] = NULL;
$arguments109['loading'] = NULL;
$arguments109['class'] = 'img-responsive';
$array111 = array (
);$arguments109['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array111);
$array112 = array (
);$arguments109['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array112);
$array113 = array (
);$arguments109['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array113);
$arguments109['width'] = 150;
$arguments109['height'] = 150;

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
					';
return $output108;
};
$arguments106['__elseClosures'][] = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['additionalAttributes'] = NULL;
$arguments121['data'] = NULL;
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['id'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$arguments121['alt'] = NULL;
$arguments121['ismap'] = NULL;
$arguments121['longdesc'] = NULL;
$arguments121['usemap'] = NULL;
$arguments121['loading'] = NULL;
$arguments121['src'] = '';
$arguments121['treatIdAsReference'] = false;
$arguments121['image'] = NULL;
$arguments121['crop'] = NULL;
$arguments121['cropVariant'] = 'default';
$arguments121['fileExtension'] = NULL;
$arguments121['width'] = NULL;
$arguments121['height'] = NULL;
$arguments121['minWidth'] = NULL;
$arguments121['minHeight'] = NULL;
$arguments121['maxWidth'] = NULL;
$arguments121['maxHeight'] = NULL;
$arguments121['absolute'] = false;
$arguments121['class'] = 'img-dummy img-responsive';
$array123 = array (
);$arguments121['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array123);
$arguments121['title'] = '';
$arguments121['alt'] = '';
$array124 = array (
);$arguments121['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array124);
$array125 = array (
);$arguments121['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array125);

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
						';
return $output120;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments115['__thenClosure'] = $renderChildrenClosure116;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
					';
return $output114;
};

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
			';
return $output105;
};
$arguments100 = array();
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['newsItem'] = NULL;
$arguments100['settings'] = array (
);
$arguments100['uriOnly'] = false;
$arguments100['configuration'] = array (
);
$arguments100['content'] = '';
$arguments100['section'] = NULL;
$array102 = array (
);$arguments100['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array102);
$array103 = array (
);$arguments100['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array103);
$array104 = array (
);$arguments100['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array104);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output0 .= '
		</div>


		<!-- teaser -->
		<div class="lead" itemprop="description">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$array189 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array189);
};
$arguments184 = array();
$arguments184['maxCharacters'] = NULL;
$arguments184['append'] = '&hellip;';
$arguments184['respectWordBoundaries'] = true;
$arguments184['respectHtml'] = true;
$array186 = array (
);$arguments184['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array186);
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array187['0'] = 1;

$expression188 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments184['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);
};
$arguments182 = array();
$arguments182['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
					';
return $output181;
};
$arguments179 = array();

$output178 .= '';

$output178 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$array200 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array200);
};
$arguments195 = array();
$arguments195['maxCharacters'] = NULL;
$arguments195['append'] = '&hellip;';
$arguments195['respectWordBoundaries'] = true;
$arguments195['respectHtml'] = true;
$array197 = array (
);$arguments195['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array197);
// Rendering Boolean node
// Rendering Array
$array198 = array();
$array198['0'] = 1;

$expression199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments195['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array198)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);
};
$arguments193 = array();
$arguments193['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
					';
return $output192;
};
$arguments190 = array();
$arguments190['if'] = NULL;

$output178 .= '';

$output178 .= '
				';
return $output178;
};
$arguments155 = array();
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array176);

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$array165 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array165);
};
$arguments160 = array();
$arguments160['maxCharacters'] = NULL;
$arguments160['append'] = '&hellip;';
$arguments160['respectWordBoundaries'] = true;
$arguments160['respectHtml'] = true;
$array162 = array (
);$arguments160['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array162);
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array163['0'] = 1;

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments160['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);
};
$arguments158 = array();
$arguments158['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
					';
return $output157;
};
$arguments155['__elseClosures'][] = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$array174 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array174);
};
$arguments169 = array();
$arguments169['maxCharacters'] = NULL;
$arguments169['append'] = '&hellip;';
$arguments169['respectWordBoundaries'] = true;
$arguments169['respectHtml'] = true;
$array171 = array (
);$arguments169['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array171);
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array172['0'] = 1;

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments169['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);
};
$arguments167 = array();
$arguments167['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
					';
return $output166;
};

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
			';
return $output154;
};
$arguments152 = array();

$output0 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output0 .= '
		</div>
		<div class="news-further-link">
			<span class="glyphicon glyphicon-circle-arrow-right"></span>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['languageKey'] = NULL;
$arguments207['alternativeLanguageKeys'] = NULL;
$arguments207['key'] = 'more-link';

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output206 .= '
			';
return $output206;
};
$arguments201 = array();
$arguments201['additionalAttributes'] = NULL;
$arguments201['data'] = NULL;
$arguments201['class'] = NULL;
$arguments201['dir'] = NULL;
$arguments201['id'] = NULL;
$arguments201['lang'] = NULL;
$arguments201['style'] = NULL;
$arguments201['title'] = NULL;
$arguments201['accesskey'] = NULL;
$arguments201['tabindex'] = NULL;
$arguments201['onclick'] = NULL;
$arguments201['newsItem'] = NULL;
$arguments201['settings'] = array (
);
$arguments201['uriOnly'] = false;
$arguments201['configuration'] = array (
);
$arguments201['content'] = '';
$arguments201['section'] = NULL;
$array203 = array (
);$arguments201['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array203);
$array204 = array (
);$arguments201['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array204);
$arguments201['class'] = 'btn btn-default btn-read-more';
$array205 = array (
);$arguments201['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array205);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output0 .= '
		</div>

	</div>
</div>
';

return $output0;
}


}
#