<?php

class Standard_action_mainTemplate_9838948f3624f7567720a6e0a0b00abc12a8dfa4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
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
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <header>
        <!--<div class="header-content" style="background-image: url(';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array1)]);

$output0 .= ')">-->
        <div class="header-content header-bg-image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['section'] = NULL;
$arguments2['partial'] = NULL;
$arguments2['delegate'] = NULL;
$arguments2['renderable'] = NULL;
$arguments2['arguments'] = array (
);
$arguments2['optional'] = false;
$arguments2['default'] = NULL;
$arguments2['contentAs'] = NULL;
$arguments2['debug'] = true;
$arguments2['partial'] = 'Nav/Navbar';
$arguments2['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('data', $array7);
};
$arguments5 = array();
$arguments5['title'] = NULL;
$arguments5['maxDepth'] = 8;
$arguments5['plainText'] = false;
$arguments5['ansiColors'] = false;
$arguments5['inline'] = false;
$arguments5['blacklistedClassNames'] = NULL;
$arguments5['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array31);
};
$arguments29 = array();
$arguments29['value'] = NULL;

$output28 .= isset($arguments29['value']) ? $arguments29['value'] : $renderChildrenClosure30();

$output28 .= '
                    </div>
                ';
return $output28;
};
$arguments26 = array();

$output25 .= '';

$output25 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array37);
};
$arguments35 = array();
$arguments35['value'] = NULL;

$output34 .= isset($arguments35['value']) ? $arguments35['value'] : $renderChildrenClosure36();

$output34 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array40);
};
$arguments38 = array();
$arguments38['value'] = NULL;

$output34 .= isset($arguments38['value']) ? $arguments38['value'] : $renderChildrenClosure39();

$output34 .= '
                        </div>
                    </div>
                ';
return $output34;
};
$arguments32 = array();
$arguments32['if'] = NULL;

$output25 .= '';

$output25 .= '
            ';
return $output25;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array22);
$array21['1'] = ' == \'Blog\' || ';
$array23 = array (
);$array21['2'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array23);
$array21['3'] = ' == \'Satzung\'';

$expression24 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Blog') || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 'Satzung'));};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array13);
};
$arguments11 = array();
$arguments11['value'] = NULL;

$output10 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output10 .= '
                    </div>
                ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array17);
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output14 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output14 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$array20 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array20);
};
$arguments18 = array();
$arguments18['value'] = NULL;

$output14 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output14 .= '
                        </div>
                    </div>
                ';
return $output14;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
        </div>
    </header>

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output41 = '';

$output41 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array50);
};
$arguments48 = array();
$arguments48['value'] = NULL;

$output47 .= isset($arguments48['value']) ? $arguments48['value'] : $renderChildrenClosure49();

$output47 .= '
            </div>
        </main>
    ';
return $output47;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array45);
$array44['1'] = ' != \'Blog\'';

$expression46 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog');};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = $renderChildrenClosure43;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '

';

return $output41;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output51 = '';

$output51 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array54);
};
$arguments52 = array();
$arguments52['value'] = NULL;

$output51 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output51 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array57);
};
$arguments55 = array();
$arguments55['value'] = NULL;

$output51 .= isset($arguments55['value']) ? $arguments55['value'] : $renderChildrenClosure56();

$output51 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array60 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array60);
};
$arguments58 = array();
$arguments58['value'] = NULL;

$output51 .= isset($arguments58['value']) ? $arguments58['value'] : $renderChildrenClosure59();

$output51 .= '
 -->
        </div>
    </footer>

';

return $output51;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output61 = '';

$output61 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['name'] = NULL;
$arguments62['name'] = 'Default';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output61 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
    <header>
        <!--<div class="header-content" style="background-image: url(';
$array67 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array67)]);

$output66 .= ')">-->
        <div class="header-content header-bg-image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['section'] = NULL;
$arguments68['partial'] = NULL;
$arguments68['delegate'] = NULL;
$arguments68['renderable'] = NULL;
$arguments68['arguments'] = array (
);
$arguments68['optional'] = false;
$arguments68['default'] = NULL;
$arguments68['contentAs'] = NULL;
$arguments68['debug'] = true;
$arguments68['partial'] = 'Nav/Navbar';
$arguments68['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output66 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$array73 = array (
);return $renderingContext->getVariableProvider()->getByPath('data', $array73);
};
$arguments71 = array();
$arguments71['title'] = NULL;
$arguments71['maxDepth'] = 8;
$arguments71['plainText'] = false;
$arguments71['ansiColors'] = false;
$arguments71['inline'] = false;
$arguments71['blacklistedClassNames'] = NULL;
$arguments71['blacklistedPropertyNames'] = NULL;

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output66 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$array97 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array97);
};
$arguments95 = array();
$arguments95['value'] = NULL;

$output94 .= isset($arguments95['value']) ? $arguments95['value'] : $renderChildrenClosure96();

$output94 .= '
                    </div>
                ';
return $output94;
};
$arguments92 = array();

$output91 .= '';

$output91 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output100 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output100 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array106 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array106);
};
$arguments104 = array();
$arguments104['value'] = NULL;

$output100 .= isset($arguments104['value']) ? $arguments104['value'] : $renderChildrenClosure105();

$output100 .= '
                        </div>
                    </div>
                ';
return $output100;
};
$arguments98 = array();
$arguments98['if'] = NULL;

$output91 .= '';

$output91 .= '
            ';
return $output91;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array88);
$array87['1'] = ' == \'Blog\' || ';
$array89 = array (
);$array87['2'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array89);
$array87['3'] = ' == \'Satzung\'';

$expression90 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Blog') || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 'Satzung'));};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array79 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array79);
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output76 .= isset($arguments77['value']) ? $arguments77['value'] : $renderChildrenClosure78();

$output76 .= '
                    </div>
                ';
return $output76;
};
$arguments74['__elseClosures'][] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array83 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array83);
};
$arguments81 = array();
$arguments81['value'] = NULL;

$output80 .= isset($arguments81['value']) ? $arguments81['value'] : $renderChildrenClosure82();

$output80 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array86 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array86);
};
$arguments84 = array();
$arguments84['value'] = NULL;

$output80 .= isset($arguments84['value']) ? $arguments84['value'] : $renderChildrenClosure85();

$output80 .= '
                        </div>
                    </div>
                ';
return $output80;
};

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output66 .= '
        </div>
    </header>

';
return $output66;
};
$arguments64 = array();
$arguments64['name'] = NULL;
$arguments64['name'] = 'Header';

$output61 .= NULL;

$output61 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array118 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array118);
};
$arguments116 = array();
$arguments116['value'] = NULL;

$output115 .= isset($arguments116['value']) ? $arguments116['value'] : $renderChildrenClosure117();

$output115 .= '
            </div>
        </main>
    ';
return $output115;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array113);
$array112['1'] = ' != \'Blog\'';

$expression114 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog');};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['__thenClosure'] = $renderChildrenClosure111;

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '

';
return $output109;
};
$arguments107 = array();
$arguments107['name'] = NULL;
$arguments107['name'] = 'Main';

$output61 .= NULL;

$output61 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output121 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output121 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$array127 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array127);
};
$arguments125 = array();
$arguments125['value'] = NULL;

$output121 .= isset($arguments125['value']) ? $arguments125['value'] : $renderChildrenClosure126();

$output121 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array130 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array130);
};
$arguments128 = array();
$arguments128['value'] = NULL;

$output121 .= isset($arguments128['value']) ? $arguments128['value'] : $renderChildrenClosure129();

$output121 .= '
 -->
        </div>
    </footer>

';
return $output121;
};
$arguments119 = array();
$arguments119['name'] = NULL;
$arguments119['name'] = 'Footer';

$output61 .= NULL;

$output61 .= '




';

return $output61;
}


}
#