<?php

class partial_Property_htmlt_6d0bf34d1befb0da27ecfa2c7727a10ef7855d48 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'k' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output351 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$array354 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array354);
};
$arguments352 = array();

$output351 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output351 .= '.';
$array355 = array (
);
$output351 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array355);
return $output351;
};
$arguments349 = array();

$output348 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '" as="image" ';
return $output348;
};
$arguments346 = array();

$output345 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return 'image.originalResource.publicUrl';
};
$arguments359 = array();

$output358 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output358 .= '" width="200"/';
return $output358;
};
$arguments356 = array();

$output345 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output345 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments361 = array();

$output345 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output345 .= '
			';
return $output345;
};
$arguments343 = array();

$output342 .= '';

$output342 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$output365 = '';

$output365 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output371 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$array374 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array374);
};
$arguments372 = array();

$output371 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '.';
$array375 = array (
);
$output371 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array375);

$output371 .= '.originalResource.publicUrl';
return $output371;
};
$arguments369 = array();

$output368 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '" width="200"/';
return $output368;
};
$arguments366 = array();

$output365 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output365 .= '
			';
return $output365;
};
$arguments363 = array();
$arguments363['if'] = NULL;

$output342 .= '';

$output342 .= '
		';
return $output342;
};
$arguments308 = array();
$arguments308['then'] = NULL;
$arguments308['else'] = NULL;
$arguments308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array339 = array();
$array340 = array (
);$array339['0'] = $renderingContext->getVariableProvider()->getByPath('property.zeroToManyRelation', $array340);

$expression341 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression341(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array339)
					),
					$renderingContext
				);
$arguments308['__thenClosure'] = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output316 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$array319 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array319);
};
$arguments317 = array();

$output316 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output316 .= '.';
$array320 = array (
);
$output316 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array320);
return $output316;
};
$arguments314 = array();

$output313 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '" as="image" ';
return $output313;
};
$arguments311 = array();

$output310 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output310 .= '
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return 'image.originalResource.publicUrl';
};
$arguments324 = array();

$output323 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '" width="200"/';
return $output323;
};
$arguments321 = array();

$output310 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output310 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments326 = array();

$output310 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output310 .= '
			';
return $output310;
};
$arguments308['__elseClosures'][] = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$output334 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$array337 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array337);
};
$arguments335 = array();

$output334 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '.';
$array338 = array (
);
$output334 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array338);

$output334 .= '.originalResource.publicUrl';
return $output334;
};
$arguments332 = array();

$output331 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '" width="200"/';
return $output331;
};
$arguments329 = array();

$output328 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output328 .= '
			';
return $output328;
};

$output307 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
	';
return $output307;
};
$arguments305 = array();
$arguments305['value'] = NULL;
$arguments305['value'] = 'Image';

$output304 .= '';

$output304 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$output425 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$array428 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array428);
};
$arguments426 = array();

$output425 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output425 .= '.';
$array429 = array (
);
$output425 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array429);
return $output425;
};
$arguments423 = array();

$output422 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output422 .= '" as="file" ';
return $output422;
};
$arguments420 = array();

$output419 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
					<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return 'file.originalResource.publicUrl';
};
$arguments430 = array();

$output419 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output419 .= '">
						';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return 'file.originalResource.name';
};
$arguments432 = array();

$output419 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output419 .= '
					</a>
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments434 = array();

$output419 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output419 .= '
			';
return $output419;
};
$arguments417 = array();

$output416 .= '';

$output416 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
				<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output441 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$array444 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array444);
};
$arguments442 = array();

$output441 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output441 .= '.';
$array445 = array (
);
$output441 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array445);

$output441 .= '.originalResource.publicUrl';
return $output441;
};
$arguments439 = array();

$output438 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '">
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
$output448 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$array451 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array451);
};
$arguments449 = array();

$output448 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output448 .= '.';
$array452 = array (
);
$output448 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array452);

$output448 .= '.originalResource.name';
return $output448;
};
$arguments446 = array();

$output438 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output438 .= '
				</a>
			';
return $output438;
};
$arguments436 = array();
$arguments436['if'] = NULL;

$output416 .= '';

$output416 .= '
		';
return $output416;
};
$arguments379 = array();
$arguments379['then'] = NULL;
$arguments379['else'] = NULL;
$arguments379['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array413 = array();
$array414 = array (
);$array413['0'] = $renderingContext->getVariableProvider()->getByPath('property.zeroToManyRelation', $array414);

$expression415 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments379['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression415(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array413)
					),
					$renderingContext
				);
$arguments379['__thenClosure'] = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output387 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$array390 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array390);
};
$arguments388 = array();

$output387 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output387 .= '.';
$array391 = array (
);
$output387 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array391);
return $output387;
};
$arguments385 = array();

$output384 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output384 .= '" as="file" ';
return $output384;
};
$arguments382 = array();

$output381 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
					<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return 'file.originalResource.publicUrl';
};
$arguments392 = array();

$output381 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output381 .= '">
						';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return 'file.originalResource.name';
};
$arguments394 = array();

$output381 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output381 .= '
					</a>
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments396 = array();

$output381 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output381 .= '
			';
return $output381;
};
$arguments379['__elseClosures'][] = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
				<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output401 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$array404 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array404);
};
$arguments402 = array();

$output401 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '.';
$array405 = array (
);
$output401 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array405);

$output401 .= '.originalResource.publicUrl';
return $output401;
};
$arguments399 = array();

$output398 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output398 .= '">
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output408 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$array411 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array411);
};
$arguments409 = array();

$output408 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '.';
$array412 = array (
);
$output408 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array412);

$output408 .= '.originalResource.name';
return $output408;
};
$arguments406 = array();

$output398 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output398 .= '
				</a>
			';
return $output398;
};

$output378 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output378 .= '
	';
return $output378;
};
$arguments376 = array();
$arguments376['value'] = NULL;
$arguments376['value'] = 'File';

$output304 .= '';

$output304 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$output458 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$array461 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array461);
};
$arguments459 = array();

$output458 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output458 .= '.';
$array462 = array (
);
$output458 .= $renderingContext->getVariableProvider()->getByPath('property.nameToBeDisplayedInFluidTemplate', $array462);
return $output458;
};
$arguments456 = array();

$output455 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
	';
return $output455;
};
$arguments453 = array();

$output304 .= '';

$output304 .= '
';
return $output304;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array303 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('property.type', $array303);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'Image';
}): return call_user_func(function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array50);
};
$arguments48 = array();

$output47 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '.';
$array51 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array51);
return $output47;
};
$arguments45 = array();

$output44 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '" as="image" ';
return $output44;
};
$arguments42 = array();

$output41 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return 'image.originalResource.publicUrl';
};
$arguments55 = array();

$output54 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '" width="200"/';
return $output54;
};
$arguments52 = array();

$output41 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output41 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments57 = array();

$output41 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output41 .= '
			';
return $output41;
};
$arguments39 = array();

$output38 .= '';

$output38 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$array70 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array70);
};
$arguments68 = array();

$output67 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '.';
$array71 = array (
);
$output67 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array71);

$output67 .= '.originalResource.publicUrl';
return $output67;
};
$arguments65 = array();

$output64 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '" width="200"/';
return $output64;
};
$arguments62 = array();

$output61 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
			';
return $output61;
};
$arguments59 = array();
$arguments59['if'] = NULL;

$output38 .= '';

$output38 .= '
		';
return $output38;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('property.zeroToManyRelation', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array15);
};
$arguments13 = array();

$output12 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '.';
$array16 = array (
);
$output12 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array16);
return $output12;
};
$arguments10 = array();

$output9 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '" as="image" ';
return $output9;
};
$arguments7 = array();

$output6 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return 'image.originalResource.publicUrl';
};
$arguments20 = array();

$output19 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '" width="200"/';
return $output19;
};
$arguments17 = array();

$output6 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments22 = array();

$output6 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output6 .= '
			';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$array33 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array33);
};
$arguments31 = array();

$output30 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '.';
$array34 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array34);

$output30 .= '.originalResource.publicUrl';
return $output30;
};
$arguments28 = array();

$output27 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '" width="200"/';
return $output27;
};
$arguments25 = array();

$output24 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
			';
return $output24;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'File';
}): return call_user_func(function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output190 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$array193 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array193);
};
$arguments191 = array();

$output190 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '.';
$array194 = array (
);
$output190 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array194);
return $output190;
};
$arguments188 = array();

$output187 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '" as="file" ';
return $output187;
};
$arguments185 = array();

$output184 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
					<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return 'file.originalResource.publicUrl';
};
$arguments195 = array();

$output184 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output184 .= '">
						';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return 'file.originalResource.name';
};
$arguments197 = array();

$output184 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output184 .= '
					</a>
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments199 = array();

$output184 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output184 .= '
			';
return $output184;
};
$arguments182 = array();

$output181 .= '';

$output181 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
				<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output206 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$array209 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array209);
};
$arguments207 = array();

$output206 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '.';
$array210 = array (
);
$output206 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array210);

$output206 .= '.originalResource.publicUrl';
return $output206;
};
$arguments204 = array();

$output203 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '">
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output213 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$array216 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array216);
};
$arguments214 = array();

$output213 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '.';
$array217 = array (
);
$output213 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array217);

$output213 .= '.originalResource.name';
return $output213;
};
$arguments211 = array();

$output203 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output203 .= '
				</a>
			';
return $output203;
};
$arguments201 = array();
$arguments201['if'] = NULL;

$output181 .= '';

$output181 .= '
		';
return $output181;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('property.zeroToManyRelation', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$array155 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array155);
};
$arguments153 = array();

$output152 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '.';
$array156 = array (
);
$output152 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array156);
return $output152;
};
$arguments150 = array();

$output149 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '" as="file" ';
return $output149;
};
$arguments147 = array();

$output146 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
					<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return 'file.originalResource.publicUrl';
};
$arguments157 = array();

$output146 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output146 .= '">
						';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return 'file.originalResource.name';
};
$arguments159 = array();

$output146 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output146 .= '
					</a>
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments161 = array();

$output146 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output146 .= '
			';
return $output146;
};
$arguments144['__elseClosures'][] = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
				<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output166 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$array169 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array169);
};
$arguments167 = array();

$output166 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '.';
$array170 = array (
);
$output166 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array170);

$output166 .= '.originalResource.publicUrl';
return $output166;
};
$arguments164 = array();

$output163 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '">
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output173 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array176 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array176);
};
$arguments174 = array();

$output173 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '.';
$array177 = array (
);
$output173 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array177);

$output173 .= '.originalResource.name';
return $output173;
};
$arguments171 = array();

$output163 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output163 .= '
				</a>
			';
return $output163;
};

$output143 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '
	';
return $output143;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output298 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$array301 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array301);
};
$arguments299 = array();

$output298 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '.';
$array302 = array (
);
$output298 .= $renderingContext->getVariableProvider()->getByPath('property.nameToBeDisplayedInFluidTemplate', $array302);
return $output298;
};
$arguments296 = array();

$output295 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
	';
return $output295;
});
}
}, array($arguments1));

$output0 .= '
';

return $output0;
}


}
#