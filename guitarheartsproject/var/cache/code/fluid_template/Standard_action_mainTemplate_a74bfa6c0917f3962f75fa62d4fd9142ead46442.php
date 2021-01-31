<?php

class Standard_action_mainTemplate_a74bfa6c0917f3962f75fa62d4fd9142ead46442 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output21 = '';

$output21 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array27);
};
$arguments25 = array();
$arguments25['value'] = NULL;

$output24 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output24 .= '
                    </div>
                ';
return $output24;
};
$arguments22 = array();

$output21 .= '';

$output21 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$array33 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array33);
};
$arguments31 = array();
$arguments31['value'] = NULL;

$output30 .= isset($arguments31['value']) ? $arguments31['value'] : $renderChildrenClosure32();

$output30 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array36 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array36);
};
$arguments34 = array();
$arguments34['value'] = NULL;

$output30 .= isset($arguments34['value']) ? $arguments34['value'] : $renderChildrenClosure35();

$output30 .= '
                        </div>
                    </div>
                ';
return $output30;
};
$arguments28 = array();
$arguments28['if'] = NULL;

$output21 .= '';

$output21 .= '
            ';
return $output21;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array19);
$array18['1'] = ' == \'Blog\'';

$expression20 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Blog');};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
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
$output37 = '';

$output37 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array46);
};
$arguments44 = array();
$arguments44['value'] = NULL;

$output43 .= isset($arguments44['value']) ? $arguments44['value'] : $renderChildrenClosure45();

$output43 .= '
            </div>
        </main>
    ';
return $output43;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array41);
$array40['1'] = ' != \'Blog\'';

$expression42 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog');};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['__thenClosure'] = $renderChildrenClosure39;

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '

';

return $output37;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output47 = '';

$output47 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array50);
};
$arguments48 = array();
$arguments48['value'] = NULL;

$output47 .= isset($arguments48['value']) ? $arguments48['value'] : $renderChildrenClosure49();

$output47 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$array53 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array53);
};
$arguments51 = array();
$arguments51['value'] = NULL;

$output47 .= isset($arguments51['value']) ? $arguments51['value'] : $renderChildrenClosure52();

$output47 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$array56 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array56);
};
$arguments54 = array();
$arguments54['value'] = NULL;

$output47 .= isset($arguments54['value']) ? $arguments54['value'] : $renderChildrenClosure55();

$output47 .= '
 -->
        </div>
    </footer>

';

return $output47;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output57 = '';

$output57 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['name'] = NULL;
$arguments58['name'] = 'Default';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output57 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
    <header>
        <!--<div class="header-content" style="background-image: url(';
$array63 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array63)]);

$output62 .= ')">-->
        <div class="header-content header-bg-image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['section'] = NULL;
$arguments64['partial'] = NULL;
$arguments64['delegate'] = NULL;
$arguments64['renderable'] = NULL;
$arguments64['arguments'] = array (
);
$arguments64['optional'] = false;
$arguments64['default'] = NULL;
$arguments64['contentAs'] = NULL;
$arguments64['debug'] = true;
$arguments64['partial'] = 'Nav/Navbar';
$arguments64['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output62 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$array89 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array89);
};
$arguments87 = array();
$arguments87['value'] = NULL;

$output86 .= isset($arguments87['value']) ? $arguments87['value'] : $renderChildrenClosure88();

$output86 .= '
                    </div>
                ';
return $output86;
};
$arguments84 = array();

$output83 .= '';

$output83 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array95);
};
$arguments93 = array();
$arguments93['value'] = NULL;

$output92 .= isset($arguments93['value']) ? $arguments93['value'] : $renderChildrenClosure94();

$output92 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$array98 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array98);
};
$arguments96 = array();
$arguments96['value'] = NULL;

$output92 .= isset($arguments96['value']) ? $arguments96['value'] : $renderChildrenClosure97();

$output92 .= '
                        </div>
                    </div>
                ';
return $output92;
};
$arguments90 = array();
$arguments90['if'] = NULL;

$output83 .= '';

$output83 .= '
            ';
return $output83;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array81);
$array80['1'] = ' == \'Blog\'';

$expression82 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Blog');};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$array72 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array72);
};
$arguments70 = array();
$arguments70['value'] = NULL;

$output69 .= isset($arguments70['value']) ? $arguments70['value'] : $renderChildrenClosure71();

$output69 .= '
                    </div>
                ';
return $output69;
};
$arguments67['__elseClosures'][] = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array76);
};
$arguments74 = array();
$arguments74['value'] = NULL;

$output73 .= isset($arguments74['value']) ? $arguments74['value'] : $renderChildrenClosure75();

$output73 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array79 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array79);
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output73 .= isset($arguments77['value']) ? $arguments77['value'] : $renderChildrenClosure78();

$output73 .= '
                        </div>
                    </div>
                ';
return $output73;
};

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output62 .= '
        </div>
    </header>

';
return $output62;
};
$arguments60 = array();
$arguments60['name'] = NULL;
$arguments60['name'] = 'Header';

$output57 .= NULL;

$output57 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array110 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array110);
};
$arguments108 = array();
$arguments108['value'] = NULL;

$output107 .= isset($arguments108['value']) ? $arguments108['value'] : $renderChildrenClosure109();

$output107 .= '
            </div>
        </main>
    ';
return $output107;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array105);
$array104['1'] = ' != \'Blog\'';

$expression106 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog');};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '

';
return $output101;
};
$arguments99 = array();
$arguments99['name'] = NULL;
$arguments99['name'] = 'Main';

$output57 .= NULL;

$output57 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$array116 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array116);
};
$arguments114 = array();
$arguments114['value'] = NULL;

$output113 .= isset($arguments114['value']) ? $arguments114['value'] : $renderChildrenClosure115();

$output113 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$array119 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array119);
};
$arguments117 = array();
$arguments117['value'] = NULL;

$output113 .= isset($arguments117['value']) ? $arguments117['value'] : $renderChildrenClosure118();

$output113 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$array122 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array122);
};
$arguments120 = array();
$arguments120['value'] = NULL;

$output113 .= isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();

$output113 .= '
 -->
        </div>
    </footer>

';
return $output113;
};
$arguments111 = array();
$arguments111['name'] = NULL;
$arguments111['name'] = 'Footer';

$output57 .= NULL;

$output57 .= '




';

return $output57;
}


}
#