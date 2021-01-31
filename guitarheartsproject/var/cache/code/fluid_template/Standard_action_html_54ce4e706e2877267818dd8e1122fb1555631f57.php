<?php

class Standard_action_html_54ce4e706e2877267818dd8e1122fb1555631f57 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="format-detection" content="telephone=no">
</head>
<body>
    <table width="600" cellpadding="0" cellspacing="0" border="0">
        ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
            <tr>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                        <td colspan="2"><b>';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['element'] = NULL;
$arguments94['property'] = NULL;
$arguments94['renderingOptionProperty'] = NULL;
$array96 = array (
);$arguments94['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array96);
$arguments94['property'] = 'label';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output93 .= '</b></td>
                    ';
return $output93;
};
$arguments91 = array();

$output90 .= '';

$output90 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                        <td width="600" valign="top" align="left">';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['element'] = NULL;
$arguments100['property'] = NULL;
$arguments100['renderingOptionProperty'] = NULL;
$array102 = array (
);$arguments100['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array102);
$arguments100['property'] = 'label';

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '</td>
                        <td width="600" valign="top" align="left">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
                                            <table cellspacing="0" border="0">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
                                                    <tr>
                                                        <td>';
$array166 = array (
);
$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array166)]);

$output165 .= '</td>
                                                    </tr>
                                                ';
return $output165;
};
$arguments162 = array();
$arguments162['each'] = NULL;
$arguments162['as'] = NULL;
$arguments162['key'] = NULL;
$arguments162['reverse'] = false;
$arguments162['iteration'] = NULL;
$array164 = array (
);$arguments162['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array164);
$arguments162['as'] = 'value';

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
                                            </table>
                                        ';
return $output161;
};
$arguments159 = array();

$output158 .= '';

$output158 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                                            <table cellspacing="0" border="0">
                                                <tr>
                                                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array172 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array172)]);
};
$arguments170 = array();
$arguments170['value'] = NULL;
$renderChildrenClosure171 = ($arguments170['value'] !== null) ? function() use ($arguments170) { return $arguments170['value']; } : $renderChildrenClosure171;
$output169 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '</td>
                                                </tr>
                                            </table>
                                        ';
return $output169;
};
$arguments167 = array();
$arguments167['if'] = NULL;

$output158 .= '';

$output158 .= '
                                    ';
return $output158;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array156);

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                                            <table cellspacing="0" border="0">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                                    <tr>
                                                        <td>';
$array150 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array150)]);

$output149 .= '</td>
                                                    </tr>
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
);$arguments146['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array148);
$arguments146['as'] = 'value';

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
                                            </table>
                                        ';
return $output145;
};
$arguments143['__elseClosures'][] = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                                            <table cellspacing="0" border="0">
                                                <tr>
                                                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$array154 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array154)]);
};
$arguments152 = array();
$arguments152['value'] = NULL;
$renderChildrenClosure153 = ($arguments152['value'] !== null) ? function() use ($arguments152) { return $arguments152['value']; } : $renderChildrenClosure153;
$output151 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output151 .= '</td>
                                                </tr>
                                            </table>
                                        ';
return $output151;
};

$output142 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
                                ';
return $output142;
};
$arguments140 = array();

$output139 .= '';

$output139 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return '
                                    -
                                ';
};
$arguments173 = array();
$arguments173['if'] = NULL;

$output139 .= '';

$output139 .= '
                            ';
return $output139;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.value', $array137);

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
                                            <table cellspacing="0" border="0">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                                                    <tr>
                                                        <td>';
$array129 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array129)]);

$output128 .= '</td>
                                                    </tr>
                                                ';
return $output128;
};
$arguments125 = array();
$arguments125['each'] = NULL;
$arguments125['as'] = NULL;
$arguments125['key'] = NULL;
$arguments125['reverse'] = false;
$arguments125['iteration'] = NULL;
$array127 = array (
);$arguments125['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array127);
$arguments125['as'] = 'value';

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
                                            </table>
                                        ';
return $output124;
};
$arguments122 = array();

$output121 .= '';

$output121 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                            <table cellspacing="0" border="0">
                                                <tr>
                                                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$array135 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array135)]);
};
$arguments133 = array();
$arguments133['value'] = NULL;
$renderChildrenClosure134 = ($arguments133['value'] !== null) ? function() use ($arguments133) { return $arguments133['value']; } : $renderChildrenClosure134;
$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '</td>
                                                </tr>
                                            </table>
                                        ';
return $output132;
};
$arguments130 = array();
$arguments130['if'] = NULL;

$output121 .= '';

$output121 .= '
                                    ';
return $output121;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                                            <table cellspacing="0" border="0">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                                                    <tr>
                                                        <td>';
$array113 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array113)]);

$output112 .= '</td>
                                                    </tr>
                                                ';
return $output112;
};
$arguments109 = array();
$arguments109['each'] = NULL;
$arguments109['as'] = NULL;
$arguments109['key'] = NULL;
$arguments109['reverse'] = false;
$arguments109['iteration'] = NULL;
$array111 = array (
);$arguments109['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array111);
$arguments109['as'] = 'value';

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
                                            </table>
                                        ';
return $output108;
};
$arguments106['__elseClosures'][] = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                                            <table cellspacing="0" border="0">
                                                <tr>
                                                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$array117 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array117)]);
};
$arguments115 = array();
$arguments115['value'] = NULL;
$renderChildrenClosure116 = ($arguments115['value'] !== null) ? function() use ($arguments115) { return $arguments115['value']; } : $renderChildrenClosure116;
$output114 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '</td>
                                                </tr>
                                            </table>
                                        ';
return $output114;
};

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                                ';
return $output105;
};
$arguments103['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                    -
                                ';
};

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output99 .= '
                        </td>
                    ';
return $output99;
};
$arguments97 = array();
$arguments97['if'] = NULL;

$output90 .= '';

$output90 .= '
                ';
return $output90;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isSection', $array88);

$expression89 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                        <td colspan="2"><b>';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['element'] = NULL;
$arguments8['property'] = NULL;
$arguments8['renderingOptionProperty'] = NULL;
$array10 = array (
);$arguments8['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array10);
$arguments8['property'] = 'label';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '</b></td>
                    ';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
                        <td width="600" valign="top" align="left">';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['element'] = NULL;
$arguments12['property'] = NULL;
$arguments12['renderingOptionProperty'] = NULL;
$array14 = array (
);$arguments12['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array14);
$arguments12['property'] = 'label';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '</td>
                        <td width="600" valign="top" align="left">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                                            <table cellspacing="0" border="0">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                                    <tr>
                                                        <td>';
$array78 = array (
);
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array78)]);

$output77 .= '</td>
                                                    </tr>
                                                ';
return $output77;
};
$arguments74 = array();
$arguments74['each'] = NULL;
$arguments74['as'] = NULL;
$arguments74['key'] = NULL;
$arguments74['reverse'] = false;
$arguments74['iteration'] = NULL;
$array76 = array (
);$arguments74['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array76);
$arguments74['as'] = 'value';

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                                            </table>
                                        ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                            <table cellspacing="0" border="0">
                                                <tr>
                                                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array84)]);
};
$arguments82 = array();
$arguments82['value'] = NULL;
$renderChildrenClosure83 = ($arguments82['value'] !== null) ? function() use ($arguments82) { return $arguments82['value']; } : $renderChildrenClosure83;
$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '</td>
                                                </tr>
                                            </table>
                                        ';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output70 .= '';

$output70 .= '
                                    ';
return $output70;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                                            <table cellspacing="0" border="0">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                                                    <tr>
                                                        <td>';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array62)]);

$output61 .= '</td>
                                                    </tr>
                                                ';
return $output61;
};
$arguments58 = array();
$arguments58['each'] = NULL;
$arguments58['as'] = NULL;
$arguments58['key'] = NULL;
$arguments58['reverse'] = false;
$arguments58['iteration'] = NULL;
$array60 = array (
);$arguments58['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array60);
$arguments58['as'] = 'value';

$output57 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
                                            </table>
                                        ';
return $output57;
};
$arguments55['__elseClosures'][] = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                                            <table cellspacing="0" border="0">
                                                <tr>
                                                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$array66 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array66)]);
};
$arguments64 = array();
$arguments64['value'] = NULL;
$renderChildrenClosure65 = ($arguments64['value'] !== null) ? function() use ($arguments64) { return $arguments64['value']; } : $renderChildrenClosure65;
$output63 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '</td>
                                                </tr>
                                            </table>
                                        ';
return $output63;
};

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
                                ';
return $output54;
};
$arguments52 = array();

$output51 .= '';

$output51 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return '
                                    -
                                ';
};
$arguments85 = array();
$arguments85['if'] = NULL;

$output51 .= '';

$output51 .= '
                            ';
return $output51;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.value', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                                            <table cellspacing="0" border="0">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                                                    <tr>
                                                        <td>';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array41)]);

$output40 .= '</td>
                                                    </tr>
                                                ';
return $output40;
};
$arguments37 = array();
$arguments37['each'] = NULL;
$arguments37['as'] = NULL;
$arguments37['key'] = NULL;
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$array39 = array (
);$arguments37['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array39);
$arguments37['as'] = 'value';

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
                                            </table>
                                        ';
return $output36;
};
$arguments34 = array();

$output33 .= '';

$output33 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                                            <table cellspacing="0" border="0">
                                                <tr>
                                                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array47)]);
};
$arguments45 = array();
$arguments45['value'] = NULL;
$renderChildrenClosure46 = ($arguments45['value'] !== null) ? function() use ($arguments45) { return $arguments45['value']; } : $renderChildrenClosure46;
$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '</td>
                                                </tr>
                                            </table>
                                        ';
return $output44;
};
$arguments42 = array();
$arguments42['if'] = NULL;

$output33 .= '';

$output33 .= '
                                    ';
return $output33;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
                                            <table cellspacing="0" border="0">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                                                    <tr>
                                                        <td>';
$array25 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array25)]);

$output24 .= '</td>
                                                    </tr>
                                                ';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array23);
$arguments21['as'] = 'value';

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
                                            </table>
                                        ';
return $output20;
};
$arguments18['__elseClosures'][] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                                            <table cellspacing="0" border="0">
                                                <tr>
                                                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array29)]);
};
$arguments27 = array();
$arguments27['value'] = NULL;
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;
$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '</td>
                                                </tr>
                                            </table>
                                        ';
return $output26;
};

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                                ';
return $output17;
};
$arguments15['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                    -
                                ';
};

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output11 .= '
                        </td>
                    ';
return $output11;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
            </tr>
        ';
return $output4;
};
$arguments1 = array();
$arguments1['renderable'] = NULL;
$arguments1['as'] = 'formValue';
$array3 = array (
);$arguments1['renderable'] = $renderingContext->getVariableProvider()->getByPath('form.formDefinition', $array3);
$arguments1['as'] = 'formValue';

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </table>
</body>
</html>
';

return $output0;
}


}
#