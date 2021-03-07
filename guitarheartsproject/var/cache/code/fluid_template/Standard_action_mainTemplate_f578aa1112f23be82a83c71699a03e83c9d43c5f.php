<?php

class Standard_action_mainTemplate_f578aa1112f23be82a83c71699a03e83c9d43c5f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array29);
};
$arguments27 = array();
$arguments27['value'] = NULL;

$output26 .= isset($arguments27['value']) ? $arguments27['value'] : $renderChildrenClosure28();

$output26 .= '
                    </div>
                ';
return $output26;
};
$arguments24 = array();

$output23 .= '';

$output23 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$array35 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array35);
};
$arguments33 = array();
$arguments33['value'] = NULL;

$output32 .= isset($arguments33['value']) ? $arguments33['value'] : $renderChildrenClosure34();

$output32 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$array38 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array38);
};
$arguments36 = array();
$arguments36['value'] = NULL;

$output32 .= isset($arguments36['value']) ? $arguments36['value'] : $renderChildrenClosure37();

$output32 .= '
                        </div>
                    </div>
                ';
return $output32;
};
$arguments30 = array();
$arguments30['if'] = NULL;

$output23 .= '';

$output23 .= '
            ';
return $output23;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array19);
$array18['1'] = ' == 7 || ';
$array20 = array (
);$array18['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array18['3'] = ' == 8 || ';
$array21 = array (
);$array18['4'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array21);
$array18['5'] = ' == 9';

$expression22 = function($context) {return (((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 8)) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == 9));};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output7 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output7 .= '
                    </div>
                ';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array14);
};
$arguments12 = array();
$arguments12['value'] = NULL;

$output11 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

$output11 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array17);
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output11 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output11 .= '
                        </div>
                    </div>
                ';
return $output11;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

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
$output39 = '';

$output39 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array49);
};
$arguments47 = array();
$arguments47['value'] = NULL;

$output46 .= isset($arguments47['value']) ? $arguments47['value'] : $renderChildrenClosure48();

$output46 .= '
            </div>
        </main>
    ';
return $output46;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array43);
$array42['1'] = ' != \'Blog\' && ';
$array44 = array (
);$array42['2'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array44);
$array42['3'] = ' != \'Einträge\'';

$expression45 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog') && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 'Einträge'));};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = $renderChildrenClosure41;

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '

';

return $output39;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output50 = '';

$output50 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$array53 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array53);
};
$arguments51 = array();
$arguments51['value'] = NULL;

$output50 .= isset($arguments51['value']) ? $arguments51['value'] : $renderChildrenClosure52();

$output50 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$array56 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array56);
};
$arguments54 = array();
$arguments54['value'] = NULL;

$output50 .= isset($arguments54['value']) ? $arguments54['value'] : $renderChildrenClosure55();

$output50 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array59 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array59);
};
$arguments57 = array();
$arguments57['value'] = NULL;

$output50 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output50 .= '
 -->
        </div>
    </footer>

';

return $output50;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output60 = '';

$output60 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['name'] = NULL;
$arguments61['name'] = 'Default';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output60 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
    <header>
        <!--<div class="header-content" style="background-image: url(';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array66)]);

$output65 .= ')">-->
        <div class="header-content header-bg-image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['renderable'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['debug'] = true;
$arguments67['partial'] = 'Nav/Navbar';
$arguments67['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output65 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array94 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array94);
};
$arguments92 = array();
$arguments92['value'] = NULL;

$output91 .= isset($arguments92['value']) ? $arguments92['value'] : $renderChildrenClosure93();

$output91 .= '
                    </div>
                ';
return $output91;
};
$arguments89 = array();

$output88 .= '';

$output88 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array100 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array100);
};
$arguments98 = array();
$arguments98['value'] = NULL;

$output97 .= isset($arguments98['value']) ? $arguments98['value'] : $renderChildrenClosure99();

$output97 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output97 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output97 .= '
                        </div>
                    </div>
                ';
return $output97;
};
$arguments95 = array();
$arguments95['if'] = NULL;

$output88 .= '';

$output88 .= '
            ';
return $output88;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array84);
$array83['1'] = ' == 7 || ';
$array85 = array (
);$array83['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array85);
$array83['3'] = ' == 8 || ';
$array86 = array (
);$array83['4'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array86);
$array83['5'] = ' == 9';

$expression87 = function($context) {return (((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 8)) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == 9));};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array75);
};
$arguments73 = array();
$arguments73['value'] = NULL;

$output72 .= isset($arguments73['value']) ? $arguments73['value'] : $renderChildrenClosure74();

$output72 .= '
                    </div>
                ';
return $output72;
};
$arguments70['__elseClosures'][] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array79 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array79);
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output76 .= isset($arguments77['value']) ? $arguments77['value'] : $renderChildrenClosure78();

$output76 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$array82 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array82);
};
$arguments80 = array();
$arguments80['value'] = NULL;

$output76 .= isset($arguments80['value']) ? $arguments80['value'] : $renderChildrenClosure81();

$output76 .= '
                        </div>
                    </div>
                ';
return $output76;
};

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output65 .= '
        </div>
    </header>

';
return $output65;
};
$arguments63 = array();
$arguments63['name'] = NULL;
$arguments63['name'] = 'Header';

$output60 .= NULL;

$output60 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$array116 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array116);
};
$arguments114 = array();
$arguments114['value'] = NULL;

$output113 .= isset($arguments114['value']) ? $arguments114['value'] : $renderChildrenClosure115();

$output113 .= '
            </div>
        </main>
    ';
return $output113;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array110);
$array109['1'] = ' != \'Blog\' && ';
$array111 = array (
);$array109['2'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array111);
$array109['3'] = ' != \'Einträge\'';

$expression112 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog') && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 'Einträge'));};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['__thenClosure'] = $renderChildrenClosure108;

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '

';
return $output106;
};
$arguments104 = array();
$arguments104['name'] = NULL;
$arguments104['name'] = 'Main';

$output60 .= NULL;

$output60 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$array122 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array122);
};
$arguments120 = array();
$arguments120['value'] = NULL;

$output119 .= isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();

$output119 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$array125 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array125);
};
$arguments123 = array();
$arguments123['value'] = NULL;

$output119 .= isset($arguments123['value']) ? $arguments123['value'] : $renderChildrenClosure124();

$output119 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$array128 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array128);
};
$arguments126 = array();
$arguments126['value'] = NULL;

$output119 .= isset($arguments126['value']) ? $arguments126['value'] : $renderChildrenClosure127();

$output119 .= '
 -->
        </div>
    </footer>

';
return $output119;
};
$arguments117 = array();
$arguments117['name'] = NULL;
$arguments117['name'] = 'Footer';

$output60 .= NULL;

$output60 .= '




';

return $output60;
}


}
#