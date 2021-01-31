<?php

class Standard_action_mainTemplate_f9d5fb6f4849d477db95de4aadcbf4ef4122f40b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output17 = '';

$output17 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return '
                    <div class="row header-title-blog align-items-center">

                    </div>
                ';
};
$arguments18 = array();

$output17 .= '';

$output17 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array25);
};
$arguments23 = array();
$arguments23['value'] = NULL;

$output22 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output22 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array28);
};
$arguments26 = array();
$arguments26['value'] = NULL;

$output22 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output22 .= '
                        </div>
                    </div>
                ';
return $output22;
};
$arguments20 = array();
$arguments20['if'] = NULL;

$output17 .= '';

$output17 .= '
            ';
return $output17;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array15);
$array14['1'] = ' == \'Blog\'';

$expression16 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Blog');};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                    <div class="row header-title-blog align-items-center">

                    </div>
                ';
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
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

$output7 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output7 .= '
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

$output7 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output7 .= '
                        </div>
                    </div>
                ';
return $output7;
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
$output29 = '';

$output29 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
        <main>
            <div class="col-md-11 content-main">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$array38 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array38);
};
$arguments36 = array();
$arguments36['value'] = NULL;

$output35 .= isset($arguments36['value']) ? $arguments36['value'] : $renderChildrenClosure37();

$output35 .= '
            </div>
        </main>
    ';
return $output35;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array33);
$array32['1'] = ' != \'Blog\'';

$expression34 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog');};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '

';

return $output29;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output39 = '';

$output39 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$array42 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array42);
};
$arguments40 = array();
$arguments40['value'] = NULL;

$output39 .= isset($arguments40['value']) ? $arguments40['value'] : $renderChildrenClosure41();

$output39 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array45);
};
$arguments43 = array();
$arguments43['value'] = NULL;

$output39 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output39 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;

$output39 .= isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output39 .= '
 -->
        </div>
    </footer>

';

return $output39;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output49 = '';

$output49 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['name'] = NULL;
$arguments50['name'] = 'Default';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output49 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
    <header>
        <!--<div class="header-content" style="background-image: url(';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array55)]);

$output54 .= ')">-->
        <div class="header-content header-bg-image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['section'] = NULL;
$arguments56['partial'] = NULL;
$arguments56['delegate'] = NULL;
$arguments56['renderable'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$arguments56['default'] = NULL;
$arguments56['contentAs'] = NULL;
$arguments56['debug'] = true;
$arguments56['partial'] = 'Nav/Navbar';
$arguments56['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output54 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return '
                    <div class="row header-title-blog align-items-center">

                    </div>
                ';
};
$arguments72 = array();

$output71 .= '';

$output71 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
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
$arguments74 = array();
$arguments74['if'] = NULL;

$output71 .= '';

$output71 .= '
            ';
return $output71;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array69);
$array68['1'] = ' == \'Blog\'';

$expression70 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Blog');};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                    <div class="row header-title-blog align-items-center">

                    </div>
                ';
};
$arguments59['__elseClosures'][] = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                    <div class="row header-title align-items-center">
                        <div class="col-4 col-md-4 col-lg-4 logo-align">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$array64 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array64);
};
$arguments62 = array();
$arguments62['value'] = NULL;

$output61 .= isset($arguments62['value']) ? $arguments62['value'] : $renderChildrenClosure63();

$output61 .= '
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$array67 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array67);
};
$arguments65 = array();
$arguments65['value'] = NULL;

$output61 .= isset($arguments65['value']) ? $arguments65['value'] : $renderChildrenClosure66();

$output61 .= '
                        </div>
                    </div>
                ';
return $output61;
};

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output54 .= '
        </div>
    </header>

';
return $output54;
};
$arguments52 = array();
$arguments52['name'] = NULL;
$arguments52['name'] = 'Header';

$output49 .= NULL;

$output49 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
        <main>
            <div class="col-md-11 content-main">
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
        </main>
    ';
return $output91;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('data.title', $array89);
$array88['1'] = ' != \'Blog\'';

$expression90 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'Blog');};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments86['__thenClosure'] = $renderChildrenClosure87;

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '

';
return $output85;
};
$arguments83 = array();
$arguments83['name'] = NULL;
$arguments83['name'] = 'Main';

$output49 .= NULL;

$output49 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '

    <footer>
        <div class="sub-text-footer pt-3 pb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array100 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array100);
};
$arguments98 = array();
$arguments98['value'] = NULL;

$output97 .= isset($arguments98['value']) ? $arguments98['value'] : $renderChildrenClosure99();

$output97 .= '
        </div>

        <div class="partners">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output97 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output97 .= '
 -->
        </div>
        <div class="secondary-menu">
        <!--
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array106 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array106);
};
$arguments104 = array();
$arguments104['value'] = NULL;

$output97 .= isset($arguments104['value']) ? $arguments104['value'] : $renderChildrenClosure105();

$output97 .= '
 -->
        </div>
    </footer>

';
return $output97;
};
$arguments95 = array();
$arguments95['name'] = NULL;
$arguments95['name'] = 'Footer';

$output49 .= NULL;

$output49 .= '




';

return $output49;
}


}
#