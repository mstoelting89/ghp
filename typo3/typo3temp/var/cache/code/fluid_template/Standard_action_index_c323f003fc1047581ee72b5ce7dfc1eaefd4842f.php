<?php

class Standard_action_index_c323f003fc1047581ee72b5ce7dfc1eaefd4842f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<header>
    <!--<div class="header-content" style="background-image: url(';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array1)]);

$output0 .= ')">-->
    <div class="header-content header-bg-image">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$array4 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array4);
};
$arguments2 = array();
$arguments2['value'] = NULL;

$output0 .= isset($arguments2['value']) ? $arguments2['value'] : $renderChildrenClosure3();

$output0 .= '
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuPrimary', $array7);
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
                <!--<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>-->
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('language', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output0 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output0 .= '
            </div>
        </nav>
        <div class="header-title">
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
</header>

<main>
    <div class="container" style="display:flex;">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                <div class="col-md-8 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$array39 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array39);
};
$arguments37 = array();
$arguments37['value'] = NULL;

$output36 .= isset($arguments37['value']) ? $arguments37['value'] : $renderChildrenClosure38();

$output36 .= '</div>
                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$array42 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array42);
};
$arguments40 = array();
$arguments40['value'] = NULL;

$output36 .= isset($arguments40['value']) ? $arguments40['value'] : $renderChildrenClosure41();

$output36 .= '</div>
            ';
return $output36;
};
$arguments34 = array();

$output33 .= '';

$output33 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;

$output45 .= isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output45 .= '</div>
            ';
return $output45;
};
$arguments43 = array();
$arguments43['if'] = NULL;

$output33 .= '';

$output33 .= '
        ';
return $output33;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                <div class="col-md-8 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array22);
};
$arguments20 = array();
$arguments20['value'] = NULL;

$output19 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output19 .= '</div>
                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array25);
};
$arguments23 = array();
$arguments23['value'] = NULL;

$output19 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output19 .= '</div>
            ';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array29);
};
$arguments27 = array();
$arguments27['value'] = NULL;

$output26 .= isset($arguments27['value']) ? $arguments27['value'] : $renderChildrenClosure28();

$output26 .= '</div>
            ';
return $output26;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
    </div>
    <div class="sidebars">
        <div class="sidebar-item">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('bewerben', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output0 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output0 .= '
        </div>
        <div class="sidebar-item">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('spenden', $array54);
};
$arguments52 = array();
$arguments52['value'] = NULL;

$output0 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output0 .= '
        </div>
    </div>

</main>

<footer>
    <div class="sub-text-footer pt-3 pb-3">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array57);
};
$arguments55 = array();
$arguments55['value'] = NULL;

$output0 .= isset($arguments55['value']) ? $arguments55['value'] : $renderChildrenClosure56();

$output0 .= '
    </div>

    <div class="partners">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array60 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array60);
};
$arguments58 = array();
$arguments58['value'] = NULL;

$output0 .= isset($arguments58['value']) ? $arguments58['value'] : $renderChildrenClosure59();

$output0 .= '

    </div>
    <div class="secondary-menu">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$array63 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array63);
};
$arguments61 = array();
$arguments61['value'] = NULL;

$output0 .= isset($arguments61['value']) ? $arguments61['value'] : $renderChildrenClosure62();

$output0 .= '

    </div>
</footer>
</body>
</html>';

return $output0;
}


}
#