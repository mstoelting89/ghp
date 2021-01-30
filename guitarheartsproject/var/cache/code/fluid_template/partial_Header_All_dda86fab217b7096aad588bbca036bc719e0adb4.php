<?php

class partial_Header_All_dda86fab217b7096aad588bbca036bc719e0adb4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
            <div class="page-header">
                <h1>';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array66)]);

$output65 .= '</h1>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                    <h4>';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.subheader', $array73)]);

$output72 .= '</h4>
                ';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('data.subheader', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output65 .= '
            </div>
        ';
return $output65;
};
$arguments63 = array();
$arguments63['value'] = NULL;
$arguments63['value'] = 1;

$output62 .= '';

$output62 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
            <h2>';
$array77 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array77)]);

$output76 .= '</h2>
        ';
return $output76;
};
$arguments74 = array();
$arguments74['value'] = NULL;
$arguments74['value'] = 2;

$output62 .= '';

$output62 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
            <h3>';
$array81 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array81)]);

$output80 .= '</h3>
        ';
return $output80;
};
$arguments78 = array();
$arguments78['value'] = NULL;
$arguments78['value'] = 3;

$output62 .= '';

$output62 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
            <h4>';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array85)]);

$output84 .= '</h4>
        ';
return $output84;
};
$arguments82 = array();
$arguments82['value'] = NULL;
$arguments82['value'] = 4;

$output62 .= '';

$output62 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
            <h5>';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array89)]);

$output88 .= '</h5>
        ';
return $output88;
};
$arguments86 = array();
$arguments86['value'] = NULL;
$arguments86['value'] = 5;

$output62 .= '';

$output62 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
            <div class="firstWord">';
$array93 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array93)]);

$output92 .= '</div>
        ';
return $output92;
};
$arguments90 = array();
$arguments90['value'] = NULL;
$arguments90['value'] = 6;

$output62 .= '';

$output62 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
            <h2>';
$array97 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array97)]);

$output96 .= '</h2>
        ';
return $output96;
};
$arguments94 = array();

$output62 .= '';

$output62 .= '
    ';
return $output62;
};
$arguments7 = array();
$arguments7['expression'] = NULL;
$array61 = array (
);$arguments7['expression'] = $renderingContext->getVariableProvider()->getByPath('data.header_layout', $array61);

$output6 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
            <div class="page-header">
                <h1>';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array10)]);

$output9 .= '</h1>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                    <h4>';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.subheader', $array17)]);

$output16 .= '</h4>
                ';
return $output16;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('data.subheader', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output9 .= '
            </div>
        ';
return $output9;
});
case call_user_func(function() use ($renderingContext, $self) {

return 2;
}): return call_user_func(function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
            <h2>';
$array30 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array30)]);

$output29 .= '</h2>
        ';
return $output29;
});
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
            <h3>';
$array36 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array36)]);

$output35 .= '</h3>
        ';
return $output35;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
            <h4>';
$array42 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array42)]);

$output41 .= '</h4>
        ';
return $output41;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
            <h5>';
$array48 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array48)]);

$output47 .= '</h5>
        ';
return $output47;
});
case call_user_func(function() use ($renderingContext, $self) {

return 6;
}): return call_user_func(function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
            <div class="firstWord">';
$array54 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array54)]);

$output53 .= '</div>
        ';
return $output53;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
            <h2>';
$array60 = array (
);
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array60)]);

$output59 .= '</h2>
        ';
return $output59;
});
}
}, array($arguments7));

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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array4);

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


}
#