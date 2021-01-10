<?php

class Standard_action_index_c17f69843d9a2bca65a8882bf29c83cbad1ad003 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments2['partial'] = 'Nav/Navbar.html';
$arguments2['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '

        <div class="header-title">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentTrailer', $array7);
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
        </div>
    </div>
    <div class="breadcrumb-container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuBreadcrumb', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output0 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output0 .= '
    </div>
</header>

<main>
    <div class="container" style="display:flex;">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('bewerben.20', $array13);
};
$arguments11 = array();
$arguments11['title'] = NULL;
$arguments11['maxDepth'] = 8;
$arguments11['plainText'] = false;
$arguments11['ansiColors'] = false;
$arguments11['inline'] = false;
$arguments11['blacklistedClassNames'] = NULL;
$arguments11['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                <div class="col-md-8 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array36 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array36);
};
$arguments34 = array();
$arguments34['value'] = NULL;

$output33 .= isset($arguments34['value']) ? $arguments34['value'] : $renderChildrenClosure35();

$output33 .= '</div>
                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$array39 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array39);
};
$arguments37 = array();
$arguments37['value'] = NULL;

$output33 .= isset($arguments37['value']) ? $arguments37['value'] : $renderChildrenClosure38();

$output33 .= '</div>
            ';
return $output33;
};
$arguments31 = array();

$output30 .= '';

$output30 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array45);
};
$arguments43 = array();
$arguments43['value'] = NULL;

$output42 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output42 .= '</div>
            ';
return $output42;
};
$arguments40 = array();
$arguments40['if'] = NULL;

$output30 .= '';

$output30 .= '
        ';
return $output30;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                <div class="col-md-8 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array19);
};
$arguments17 = array();
$arguments17['value'] = NULL;

$output16 .= isset($arguments17['value']) ? $arguments17['value'] : $renderChildrenClosure18();

$output16 .= '</div>
                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array22);
};
$arguments20 = array();
$arguments20['value'] = NULL;

$output16 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output16 .= '</div>
            ';
return $output16;
};
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;

$output23 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output23 .= '</div>
            ';
return $output23;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
    </div>
    <div class="sidebars">
        <div class="sidebar-item">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('bewerben', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;

$output0 .= isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output0 .= '
        </div>
        <div class="sidebar-item">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('spenden', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output0 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output0 .= '
        </div>
    </div>
</main>

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

$output0 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output0 .= '
    </div>

    <div class="partners">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array57);
};
$arguments55 = array();
$arguments55['value'] = NULL;

$output0 .= isset($arguments55['value']) ? $arguments55['value'] : $renderChildrenClosure56();

$output0 .= '

    </div>
    <div class="secondary-menu">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array60 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array60);
};
$arguments58 = array();
$arguments58['value'] = NULL;

$output0 .= isset($arguments58['value']) ? $arguments58['value'] : $renderChildrenClosure59();

$output0 .= '

    </div>
</footer>
</body>
</html>';

return $output0;
}


}
#