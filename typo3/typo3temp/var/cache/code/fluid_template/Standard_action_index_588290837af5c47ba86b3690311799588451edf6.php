<?php

class Standard_action_index_588290837af5c47ba86b3690311799588451edf6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <!--<div class="header-content" style="background-image: url(';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image', $array4)]);

$output0 .= ')">-->
    <div class="header-content header-bg-image">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array7);
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuPrimary', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output0 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output0 .= '
                <!--<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>-->
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
    <div class="container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array19);
};
$arguments17 = array();
$arguments17['value'] = NULL;

$output0 .= isset($arguments17['value']) ? $arguments17['value'] : $renderChildrenClosure18();

$output0 .= '
    </div>
    <div class="sidebars">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('sidebars', $array22);
};
$arguments20 = array();
$arguments20['value'] = NULL;

$output0 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output0 .= '
    </div>

</main>

<footer>
    <div class="sub-text-footer pt-3 pb-3">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerLabel', $array25);
};
$arguments23 = array();
$arguments23['value'] = NULL;

$output0 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output0 .= '
    </div>

    <div class="partners">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerPartners', $array28);
};
$arguments26 = array();
$arguments26['value'] = NULL;

$output0 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output0 .= '

    </div>
    <div class="secondary-menu">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('footerSecondaryMenu', $array31);
};
$arguments29 = array();
$arguments29['value'] = NULL;

$output0 .= isset($arguments29['value']) ? $arguments29['value'] : $renderChildrenClosure30();

$output0 .= '

    </div>
</footer>
</body>
</html>';

return $output0;
}


}
#