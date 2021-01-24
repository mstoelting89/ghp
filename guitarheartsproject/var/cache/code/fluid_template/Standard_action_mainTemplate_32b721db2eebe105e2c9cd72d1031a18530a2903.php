<?php

class Standard_action_mainTemplate_32b721db2eebe105e2c9cd72d1031a18530a2903 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['maxDepth'] = 8;
$arguments1['plainText'] = false;
$arguments1['ansiColors'] = false;
$arguments1['inline'] = false;
$arguments1['blacklistedClassNames'] = NULL;
$arguments1['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <header>
        <!--<div class="header-content" style="background-image: url(';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array4)]);

$output0 .= ')">-->
        <div class="header-content header-bg-image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['renderable'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['debug'] = true;
$arguments5['partial'] = 'Nav/Navbar';
$arguments5['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

            <div class="row header-title align-items-center">
                <div class="col-4 col-md-4 col-lg-4 logo-align">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output0 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output0 .= '
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array13);
};
$arguments11 = array();
$arguments11['value'] = NULL;

$output0 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output0 .= '
                </div>
            </div>
        </div>
        <!--
        <div class="breadcrumb-container">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuBreadcrumb', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;

$output0 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output0 .= '
        </div>
        -->
    </header>

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output17 = '';

$output17 .= '

    <main>
        <!--<div class="container" style="display:flex;">-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                <!--
                <div class="col-md-8 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array40);
};
$arguments38 = array();
$arguments38['value'] = NULL;

$output37 .= isset($arguments38['value']) ? $arguments38['value'] : $renderChildrenClosure39();

$output37 .= '</div>
                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array43 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array43);
};
$arguments41 = array();
$arguments41['value'] = NULL;

$output37 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output37 .= '</div>
                 -->
            ';
return $output37;
};
$arguments35 = array();

$output34 .= '';

$output34 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
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

            ';
return $output46;
};
$arguments44 = array();
$arguments44['if'] = NULL;

$output34 .= '';

$output34 .= '
        ';
return $output34;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
                <!--
                <div class="col-md-8 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array23 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array23);
};
$arguments21 = array();
$arguments21['value'] = NULL;

$output20 .= isset($arguments21['value']) ? $arguments21['value'] : $renderChildrenClosure22();

$output20 .= '</div>
                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;

$output20 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output20 .= '</div>
                 -->
            ';
return $output20;
};
$arguments18['__elseClosures'][] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                <div class="col-md-11 content-main">

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$array30 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array30);
};
$arguments28 = array();
$arguments28['value'] = NULL;

$output27 .= isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();

$output27 .= '

                </div>

            ';
return $output27;
};

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
        <!--</div>-->

    </main>

';

return $output17;
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
            <!--
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
             -->
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
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments66 = array();
$arguments66['title'] = NULL;
$arguments66['maxDepth'] = 8;
$arguments66['plainText'] = false;
$arguments66['ansiColors'] = false;
$arguments66['inline'] = false;
$arguments66['blacklistedClassNames'] = NULL;
$arguments66['blacklistedPropertyNames'] = NULL;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
    <header>
        <!--<div class="header-content" style="background-image: url(';
$array69 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array69)]);

$output65 .= ')">-->
        <div class="header-content header-bg-image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['section'] = NULL;
$arguments70['partial'] = NULL;
$arguments70['delegate'] = NULL;
$arguments70['renderable'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['optional'] = false;
$arguments70['default'] = NULL;
$arguments70['contentAs'] = NULL;
$arguments70['debug'] = true;
$arguments70['partial'] = 'Nav/Navbar';
$arguments70['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output65 .= '

            <div class="row header-title align-items-center">
                <div class="col-4 col-md-4 col-lg-4 logo-align">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array75);
};
$arguments73 = array();
$arguments73['value'] = NULL;

$output65 .= isset($arguments73['value']) ? $arguments73['value'] : $renderChildrenClosure74();

$output65 .= '
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array78 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array78);
};
$arguments76 = array();
$arguments76['value'] = NULL;

$output65 .= isset($arguments76['value']) ? $arguments76['value'] : $renderChildrenClosure77();

$output65 .= '
                </div>
            </div>
        </div>
        <!--
        <div class="breadcrumb-container">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array81 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuBreadcrumb', $array81);
};
$arguments79 = array();
$arguments79['value'] = NULL;

$output65 .= isset($arguments79['value']) ? $arguments79['value'] : $renderChildrenClosure80();

$output65 .= '
        </div>
        -->
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
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '

    <main>
        <!--<div class="container" style="display:flex;">-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                <!--
                <div class="col-md-8 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$array107 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array107);
};
$arguments105 = array();
$arguments105['value'] = NULL;

$output104 .= isset($arguments105['value']) ? $arguments105['value'] : $renderChildrenClosure106();

$output104 .= '</div>
                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array110 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array110);
};
$arguments108 = array();
$arguments108['value'] = NULL;

$output104 .= isset($arguments108['value']) ? $arguments108['value'] : $renderChildrenClosure109();

$output104 .= '</div>
                 -->
            ';
return $output104;
};
$arguments102 = array();

$output101 .= '';

$output101 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
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

            ';
return $output113;
};
$arguments111 = array();
$arguments111['if'] = NULL;

$output101 .= '';

$output101 .= '
        ';
return $output101;
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                <!--
                <div class="col-md-8 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array90 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array90);
};
$arguments88 = array();
$arguments88['value'] = NULL;

$output87 .= isset($arguments88['value']) ? $arguments88['value'] : $renderChildrenClosure89();

$output87 .= '</div>
                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$array93 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array93);
};
$arguments91 = array();
$arguments91['value'] = NULL;

$output87 .= isset($arguments91['value']) ? $arguments91['value'] : $renderChildrenClosure92();

$output87 .= '</div>
                 -->
            ';
return $output87;
};
$arguments85['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                <div class="col-md-11 content-main">

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

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
        <!--</div>-->

    </main>

';
return $output84;
};
$arguments82 = array();
$arguments82['name'] = NULL;
$arguments82['name'] = 'Main';

$output60 .= NULL;

$output60 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            <!--
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
             -->
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