<?php

class Standard_action_mainTemplate_11d63c85104b29f7250917ab074e3360cdf89e10 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output22 = '';

$output22 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array28);
};
$arguments26 = array();
$arguments26['value'] = NULL;

$output25 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output25 .= '
                    </div>
                ';
return $output25;
};
$arguments23 = array();

$output22 .= '';

$output22 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output31 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output31 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array37);
};
$arguments35 = array();
$arguments35['value'] = NULL;

$output31 .= isset($arguments35['value']) ? $arguments35['value'] : $renderChildrenClosure36();

$output31 .= '
                        </div>
                    </div>
                ';
return $output31;
};
$arguments29 = array();
$arguments29['if'] = NULL;

$output22 .= '';

$output22 .= '
            ';
return $output22;
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
$array18['3'] = ' == 8';

$expression21 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 8));};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
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
$output38 = '';

$output38 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array47);
};
$arguments45 = array();
$arguments45['value'] = NULL;

$output44 .= isset($arguments45['value']) ? $arguments45['value'] : $renderChildrenClosure46();

$output44 .= '
            </div>
        </main>
    ';
return $output44;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array42);
$array41['1'] = ' != \'Blog\'';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog');};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = $renderChildrenClosure40;

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '

';

return $output38;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output48 = '';

$output48 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output48 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output48 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array54);
};
$arguments52 = array();
$arguments52['value'] = NULL;

$output48 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output48 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array57);
};
$arguments55 = array();
$arguments55['value'] = NULL;

$output48 .= isset($arguments55['value']) ? $arguments55['value'] : $renderChildrenClosure56();

$output48 .= '
 -->
        </div>
    </footer>

';

return $output48;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output58 = '';

$output58 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['name'] = 'Default';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output58 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
    <header>
        <!--<div class="header-content" style="background-image: url(';
$array64 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array64)]);

$output63 .= ')">-->
        <div class="header-content header-bg-image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['section'] = NULL;
$arguments65['partial'] = NULL;
$arguments65['delegate'] = NULL;
$arguments65['renderable'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['optional'] = false;
$arguments65['default'] = NULL;
$arguments65['contentAs'] = NULL;
$arguments65['debug'] = true;
$arguments65['partial'] = 'Nav/Navbar';
$arguments65['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output63 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array91);
};
$arguments89 = array();
$arguments89['value'] = NULL;

$output88 .= isset($arguments89['value']) ? $arguments89['value'] : $renderChildrenClosure90();

$output88 .= '
                    </div>
                ';
return $output88;
};
$arguments86 = array();

$output85 .= '';

$output85 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$array97 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array97);
};
$arguments95 = array();
$arguments95['value'] = NULL;

$output94 .= isset($arguments95['value']) ? $arguments95['value'] : $renderChildrenClosure96();

$output94 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array100 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array100);
};
$arguments98 = array();
$arguments98['value'] = NULL;

$output94 .= isset($arguments98['value']) ? $arguments98['value'] : $renderChildrenClosure99();

$output94 .= '
                        </div>
                    </div>
                ';
return $output94;
};
$arguments92 = array();
$arguments92['if'] = NULL;

$output85 .= '';

$output85 .= '
            ';
return $output85;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array82);
$array81['1'] = ' == 7 || ';
$array83 = array (
);$array81['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array83);
$array81['3'] = ' == 8';

$expression84 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 8));};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                    <div class="row header-title-blog align-items-center">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$array73 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array73);
};
$arguments71 = array();
$arguments71['value'] = NULL;

$output70 .= isset($arguments71['value']) ? $arguments71['value'] : $renderChildrenClosure72();

$output70 .= '
                    </div>
                ';
return $output70;
};
$arguments68['__elseClosures'][] = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$array77 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array77);
};
$arguments75 = array();
$arguments75['value'] = NULL;

$output74 .= isset($arguments75['value']) ? $arguments75['value'] : $renderChildrenClosure76();

$output74 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$array80 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array80);
};
$arguments78 = array();
$arguments78['value'] = NULL;

$output74 .= isset($arguments78['value']) ? $arguments78['value'] : $renderChildrenClosure79();

$output74 .= '
                        </div>
                    </div>
                ';
return $output74;
};

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output63 .= '
        </div>
    </header>

';
return $output63;
};
$arguments61 = array();
$arguments61['name'] = NULL;
$arguments61['name'] = 'Header';

$output58 .= NULL;

$output58 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array112 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array112);
};
$arguments110 = array();
$arguments110['value'] = NULL;

$output109 .= isset($arguments110['value']) ? $arguments110['value'] : $renderChildrenClosure111();

$output109 .= '
            </div>
        </main>
    ';
return $output109;
};
$arguments104 = array();
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array107);
$array106['1'] = ' != \'Blog\'';

$expression108 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog');};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments104['__thenClosure'] = $renderChildrenClosure105;

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '

';
return $output103;
};
$arguments101 = array();
$arguments101['name'] = NULL;
$arguments101['name'] = 'Main';

$output58 .= NULL;

$output58 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array118 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array118);
};
$arguments116 = array();
$arguments116['value'] = NULL;

$output115 .= isset($arguments116['value']) ? $arguments116['value'] : $renderChildrenClosure117();

$output115 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array121);
};
$arguments119 = array();
$arguments119['value'] = NULL;

$output115 .= isset($arguments119['value']) ? $arguments119['value'] : $renderChildrenClosure120();

$output115 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output115 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output115 .= '
 -->
        </div>
    </footer>

';
return $output115;
};
$arguments113 = array();
$arguments113['name'] = NULL;
$arguments113['name'] = 'Footer';

$output58 .= NULL;

$output58 .= '




';

return $output58;
}


}
#