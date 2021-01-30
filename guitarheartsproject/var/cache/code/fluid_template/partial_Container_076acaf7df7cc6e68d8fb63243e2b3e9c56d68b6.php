<?php

class partial_Container_076acaf7df7cc6e68d8fb63243e2b3e9c56d68b6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div class="grid-container grid-container-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_gridelements_backend_layout', $array1)]);

$output0 .= '">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['debug'] = true;
$arguments97['partial'] = 'Rows';
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array100);
$array101 = array (
);$array99['rows'] = $renderingContext->getVariableProvider()->getByPath('children', $array101);
$array102 = array (
);$array99['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array102);
$array103 = array (
);$array99['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array103);
$arguments97['arguments'] = $array99;

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
                ';
return $output96;
};
$arguments94 = array();

$output93 .= '';

$output93 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['section'] = NULL;
$arguments107['partial'] = NULL;
$arguments107['delegate'] = NULL;
$arguments107['renderable'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['optional'] = false;
$arguments107['default'] = NULL;
$arguments107['contentAs'] = NULL;
$arguments107['debug'] = true;
$arguments107['partial'] = 'Columns';
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array110);
$array111 = array (
);$array109['columns'] = $renderingContext->getVariableProvider()->getByPath('children', $array111);
$array112 = array (
);$array109['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array112);
$array113 = array (
);$array109['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array113);
$arguments107['arguments'] = $array109;

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                ';
return $output106;
};
$arguments104 = array();
$arguments104['if'] = NULL;

$output93 .= '';

$output93 .= '
            ';
return $output93;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('options.respectRows', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['section'] = NULL;
$arguments75['partial'] = NULL;
$arguments75['delegate'] = NULL;
$arguments75['renderable'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['optional'] = false;
$arguments75['default'] = NULL;
$arguments75['contentAs'] = NULL;
$arguments75['debug'] = true;
$arguments75['partial'] = 'Rows';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array78);
$array79 = array (
);$array77['rows'] = $renderingContext->getVariableProvider()->getByPath('children', $array79);
$array80 = array (
);$array77['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array80);
$array81 = array (
);$array77['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array81);
$arguments75['arguments'] = $array77;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
                ';
return $output74;
};
$arguments72['__elseClosures'][] = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['section'] = NULL;
$arguments83['partial'] = NULL;
$arguments83['delegate'] = NULL;
$arguments83['renderable'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$arguments83['default'] = NULL;
$arguments83['contentAs'] = NULL;
$arguments83['debug'] = true;
$arguments83['partial'] = 'Columns';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array86);
$array87 = array (
);$array85['columns'] = $renderingContext->getVariableProvider()->getByPath('children', $array87);
$array88 = array (
);$array85['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array88);
$array89 = array (
);$array85['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array89);
$arguments83['arguments'] = $array85;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                ';
return $output82;
};

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
        ';
return $output71;
};
$arguments69 = array();

$output68 .= '';

$output68 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
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
$arguments127['partial'] = 'Child';
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['data'] = $renderingContext->getVariableProvider()->getByPath('child.data', $array130);
$array131 = array (
);$array129['children'] = $renderingContext->getVariableProvider()->getByPath('child.children', $array131);
$array132 = array (
);$array129['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array132);
$array133 = array (
);$array129['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array133);
$arguments127['arguments'] = $array129;

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                ';
return $output126;
};
$arguments123 = array();
$arguments123['each'] = NULL;
$arguments123['as'] = NULL;
$arguments123['key'] = NULL;
$arguments123['reverse'] = false;
$arguments123['iteration'] = NULL;
$array125 = array (
);$arguments123['each'] = $renderingContext->getVariableProvider()->getByPath('children', $array125);
$arguments123['as'] = 'child';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
            ';
return $output122;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('children', $array120);

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['__thenClosure'] = $renderChildrenClosure118;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
        ';
return $output116;
};
$arguments114 = array();
$arguments114['if'] = NULL;

$output68 .= '';

$output68 .= '
    ';
return $output68;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('options.respectColumns', $array66);

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments2['__thenClosure'] = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['section'] = NULL;
$arguments30['partial'] = NULL;
$arguments30['delegate'] = NULL;
$arguments30['renderable'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['optional'] = false;
$arguments30['default'] = NULL;
$arguments30['contentAs'] = NULL;
$arguments30['debug'] = true;
$arguments30['partial'] = 'Rows';
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array33);
$array34 = array (
);$array32['rows'] = $renderingContext->getVariableProvider()->getByPath('children', $array34);
$array35 = array (
);$array32['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array35);
$array36 = array (
);$array32['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array36);
$arguments30['arguments'] = $array32;

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                ';
return $output29;
};
$arguments27 = array();

$output26 .= '';

$output26 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['debug'] = true;
$arguments40['partial'] = 'Columns';
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array43);
$array44 = array (
);$array42['columns'] = $renderingContext->getVariableProvider()->getByPath('children', $array44);
$array45 = array (
);$array42['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array45);
$array46 = array (
);$array42['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array46);
$arguments40['arguments'] = $array42;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                ';
return $output39;
};
$arguments37 = array();
$arguments37['if'] = NULL;

$output26 .= '';

$output26 .= '
            ';
return $output26;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('options.respectRows', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['debug'] = true;
$arguments8['partial'] = 'Rows';
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array11);
$array12 = array (
);$array10['rows'] = $renderingContext->getVariableProvider()->getByPath('children', $array12);
$array13 = array (
);$array10['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array13);
$array14 = array (
);$array10['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array14);
$arguments8['arguments'] = $array10;

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
                ';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
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
$arguments16['partial'] = 'Columns';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array19);
$array20 = array (
);$array18['columns'] = $renderingContext->getVariableProvider()->getByPath('children', $array20);
$array21 = array (
);$array18['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array21);
$array22 = array (
);$array18['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array22);
$arguments16['arguments'] = $array18;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                ';
return $output15;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        ';
return $output4;
};
$arguments2['__elseClosures'][] = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
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
$arguments58['partial'] = 'Child';
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['data'] = $renderingContext->getVariableProvider()->getByPath('child.data', $array61);
$array62 = array (
);$array60['children'] = $renderingContext->getVariableProvider()->getByPath('child.children', $array62);
$array63 = array (
);$array60['options'] = $renderingContext->getVariableProvider()->getByPath('options', $array63);
$array64 = array (
);$array60['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array64);
$arguments58['arguments'] = $array60;

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
                ';
return $output57;
};
$arguments54 = array();
$arguments54['each'] = NULL;
$arguments54['as'] = NULL;
$arguments54['key'] = NULL;
$arguments54['reverse'] = false;
$arguments54['iteration'] = NULL;
$array56 = array (
);$arguments54['each'] = $renderingContext->getVariableProvider()->getByPath('children', $array56);
$arguments54['as'] = 'child';

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

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
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('children', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
        ';
return $output47;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
</div>

';

return $output0;
}


}
#