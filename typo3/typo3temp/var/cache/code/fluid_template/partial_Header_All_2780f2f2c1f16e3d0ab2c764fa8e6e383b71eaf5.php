<?php

class partial_Header_All_2780f2f2c1f16e3d0ab2c764fa8e6e383b71eaf5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$array8 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.header', $array8);
};
$arguments6 = array();
$arguments6['title'] = NULL;
$arguments6['maxDepth'] = 8;
$arguments6['plainText'] = false;
$arguments6['ansiColors'] = false;
$arguments6['inline'] = false;
$arguments6['blacklistedClassNames'] = NULL;
$arguments6['blacklistedPropertyNames'] = NULL;

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
            <div class="page-header">
                <h1>';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array68)]);

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                        <small>';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.subheader', $array75)]);

$output74 .= '</small>
                    ';
return $output74;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('data.subheader', $array72);

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output67 .= '
                </h1>
            </div>
        ';
return $output67;
};
$arguments65 = array();
$arguments65['value'] = NULL;
$arguments65['value'] = 1;

$output64 .= '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
            <h2>';
$array79 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array79)]);

$output78 .= '</h2>
        ';
return $output78;
};
$arguments76 = array();
$arguments76['value'] = NULL;
$arguments76['value'] = 2;

$output64 .= '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
            <h3>';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array83)]);

$output82 .= '</h3>
        ';
return $output82;
};
$arguments80 = array();
$arguments80['value'] = NULL;
$arguments80['value'] = 3;

$output64 .= '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
            <h4>';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array87)]);

$output86 .= '</h4>
        ';
return $output86;
};
$arguments84 = array();
$arguments84['value'] = NULL;
$arguments84['value'] = 4;

$output64 .= '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
            <h5>';
$array91 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array91)]);

$output90 .= '</h5>
        ';
return $output90;
};
$arguments88 = array();
$arguments88['value'] = NULL;
$arguments88['value'] = 5;

$output64 .= '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
            <h6>';
$array95 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array95)]);

$output94 .= '</h6>
        ';
return $output94;
};
$arguments92 = array();
$arguments92['value'] = NULL;
$arguments92['value'] = 6;

$output64 .= '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
            <h2>';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array99)]);

$output98 .= '</h2>
        ';
return $output98;
};
$arguments96 = array();

$output64 .= '';

$output64 .= '
    ';
return $output64;
};
$arguments9 = array();
$arguments9['expression'] = NULL;
$array63 = array (
);$arguments9['expression'] = $renderingContext->getVariableProvider()->getByPath('data.header_layout', $array63);

$output5 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
            <div class="page-header">
                <h1>';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array12)]);

$output11 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                        <small>';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.subheader', $array19)]);

$output18 .= '</small>
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
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('data.subheader', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output11 .= '
                </h1>
            </div>
        ';
return $output11;
});
case call_user_func(function() use ($renderingContext, $self) {

return 2;
}): return call_user_func(function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
            <h2>';
$array32 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array32)]);

$output31 .= '</h2>
        ';
return $output31;
});
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
            <h3>';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array38)]);

$output37 .= '</h3>
        ';
return $output37;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
            <h4>';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array44)]);

$output43 .= '</h4>
        ';
return $output43;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
            <h5>';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array50)]);

$output49 .= '</h5>
        ';
return $output49;
});
case call_user_func(function() use ($renderingContext, $self) {

return 6;
}): return call_user_func(function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
            <h6>';
$array56 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array56)]);

$output55 .= '</h6>
        ';
return $output55;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
            <h2>';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array62)]);

$output61 .= '</h2>
        ';
return $output61;
});
}
}, array($arguments9));

$output5 .= '


';
return $output5;
};
$arguments0 = array();
$arguments0['then'] = NULL;
$arguments0['else'] = NULL;
$arguments0['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2 = array();
$array3 = array (
);$array2['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array3);

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments0['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)
					),
					$renderingContext
				);
$arguments0['__thenClosure'] = $renderChildrenClosure1;

return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments0, $renderChildrenClosure1, $renderingContext);
}


}
#