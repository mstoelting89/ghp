<?php

class partial_PageLayout_Grid_Column_d51c0e78ecc3b626ab69e31ce6aa3e12191356f8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<td valign="top" colspan="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.colSpan', $array1)]);

$output0 .= '" rowspan="';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.rowSpan', $array2)]);

$output0 .= '"
    data-colpos="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array3)]);

$output0 .= '" data-language-uid="';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.siteLanguage.languageId', $array4)]);

$output0 .= '"
    class="t3js-page-lang-column-';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.siteLanguage.languageId', $array5)]);

$output0 .= ' t3js-page-column t3-grid-cell t3-page-column t3-page-column-';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array6)]);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('column.active', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['else'] = 't3-grid-cell-unassigned';
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        t3-gridCell-width';
$array12 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.colSpan', $array12)]);

$output0 .= '
        t3-gridCell-height';
$array13 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.rowSpan', $array13)]);

$output0 .= '">
    <div class="t3-page-column-header">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                <div class="t3-page-column-header-icons">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                        <a href="';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editUrl', $array62)]);

$output61 .= '" title="';
$array63 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editLinkTitle', $array63)]);

$output61 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['identifier'] = NULL;
$arguments64['size'] = 'small';
$arguments64['overlay'] = NULL;
$arguments64['state'] = 'default';
$arguments64['alternativeMarkupIdentifier'] = NULL;
$arguments64['identifier'] = 'actions-document-open';

$output61 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output61 .= '</a>
                    ';
return $output61;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array58);
$array57['1'] = ' && ';
$array59 = array (
);$array57['2'] = $renderingContext->getVariableProvider()->getByPath('column.editUrl', $array59);

$expression60 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = $renderChildrenClosure56;

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
                </div>
                ';
$array66 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array66)]);

$output54 .= '
            ';
return $output54;
};
$arguments52 = array();

$output51 .= '';

$output51 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                ';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array73)]);

$output72 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleUnassigned', $array76);
};
$arguments74 = array();
$arguments74['value'] = NULL;

$output72 .= isset($arguments74['value']) ? $arguments74['value'] : $renderChildrenClosure75();

$output72 .= ')
            ';
return $output72;
};
$arguments67 = array();
$arguments67['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('column.unassigned', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);

$output51 .= '';

$output51 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$array85 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array85);
};
$arguments83 = array();
$arguments83['value'] = NULL;

$output82 .= isset($arguments83['value']) ? $arguments83['value'] : $renderChildrenClosure84();

$output82 .= '
            ';
return $output82;
};
$arguments77 = array();
$arguments77['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array79['0'] = '!';
$array80 = array (
);$array79['1'] = $renderingContext->getVariableProvider()->getByPath('hideRestrictedColumns', $array80);

$expression81 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments77['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);

$output51 .= '';

$output51 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array91);
};
$arguments89 = array();
$arguments89['value'] = NULL;

$output88 .= isset($arguments89['value']) ? $arguments89['value'] : $renderChildrenClosure90();

$output88 .= '
            ';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output51 .= '';

$output51 .= '
        ';
return $output51;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('column.active', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                <div class="t3-page-column-header-icons">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                        <a href="';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editUrl', $array24)]);

$output23 .= '" title="';
$array25 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editLinkTitle', $array25)]);

$output23 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['identifier'] = NULL;
$arguments26['size'] = 'small';
$arguments26['overlay'] = NULL;
$arguments26['state'] = 'default';
$arguments26['alternativeMarkupIdentifier'] = NULL;
$arguments26['identifier'] = 'actions-document-open';

$output23 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output23 .= '</a>
                    ';
return $output23;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array20);
$array19['1'] = ' && ';
$array21 = array (
);$array19['2'] = $renderingContext->getVariableProvider()->getByPath('column.editUrl', $array21);

$expression22 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
                </div>
                ';
$array28 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array28)]);

$output16 .= '
            ';
return $output16;
};
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                ';
$array30 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array30)]);

$output29 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$array33 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleUnassigned', $array33);
};
$arguments31 = array();
$arguments31['value'] = NULL;

$output29 .= isset($arguments31['value']) ? $arguments31['value'] : $renderChildrenClosure32();

$output29 .= ')
            ';
return $output29;
};
$arguments14['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('column.unassigned', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
};
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array40);
};
$arguments38 = array();
$arguments38['value'] = NULL;

$output37 .= isset($arguments38['value']) ? $arguments38['value'] : $renderChildrenClosure39();

$output37 .= '
            ';
return $output37;
};
$arguments14['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array41['0'] = '!';
$array42 = array (
);$array41['1'] = $renderingContext->getVariableProvider()->getByPath('hideRestrictedColumns', $array42);

$expression43 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
};
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array47);
};
$arguments45 = array();
$arguments45['value'] = NULL;

$output44 .= isset($arguments45['value']) ? $arguments45['value'] : $renderChildrenClosure46();

$output44 .= '
            ';
return $output44;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
        <div class="t3-page-ce t3js-page-ce" data-page="';
$array100 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.pageId', $array100)]);

$output99 .= '" id="';
$array101 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.uniqueId', $array101)]);

$output99 .= '">
            <div class="t3js-page-new-ce t3-page-ce-wrapper-new-ce" id="colpos-';
$array102 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array102)]);

$output99 .= '-page-';
$array103 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.pageId', $array103)]);

$output99 .= '-';
$array104 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.uniqueId', $array104)]);

$output99 .= '">
                <a href="';
$array105 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.newContentUrl', $array105)]);

$output99 .= '" title="';
$array106 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitle', $array106)]);

$output99 .= '" data-title="';
$array107 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitle', $array107)]);

$output99 .= '"
                    class="btn btn-default btn-sm t3js-toggle-new-content-element-wizard disabled">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['identifier'] = NULL;
$arguments108['size'] = 'small';
$arguments108['overlay'] = NULL;
$arguments108['state'] = 'default';
$arguments108['alternativeMarkupIdentifier'] = NULL;
$arguments108['identifier'] = 'actions-add';

$output99 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output99 .= '
                    ';
$array110 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitleShort', $array110)]);

$output99 .= '
                </a>
            </div>
            <div class="t3-page-ce-dropzone-available t3js-page-ce-dropzone-available"></div>
        </div>
    ';
return $output99;
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array95);
$array94['1'] = ' && ';
$array96 = array (
);$array94['2'] = $renderingContext->getVariableProvider()->getByPath('column.contentEditable', $array96);
$array94['3'] = ' && ';
$array97 = array (
);$array94['4'] = $renderingContext->getVariableProvider()->getByPath('column.context.allowNewContent', $array97);

$expression98 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments92['__thenClosure'] = $renderChildrenClosure93;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return '
        <div class="t3-page-ce">
            <div class="t3-page-ce-header">Empty Colpos</div>
            <div class="t3-page-ce-body">
                <div class="t3-page-ce-body-inner">
                    <div class="row">
                        <div class="col-xs-12">
                            This column has no "colPos". This is only for display Purposes.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('column.unassigned', $array114);

$expression115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = $renderChildrenClosure112;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
        <div data-colpos="';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array122)]);

$output121 .= '" data-language-uid="';
$array123 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.siteLanguage.languageId', $array123)]);

$output121 .= '"
            class="t3js-sortable t3js-sortable-lang t3js-sortable-lang-';
$array124 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.siteLanguage.languageId', $array124)]);

$output121 .= ' t3-page-ce-wrapper
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['then'] = NULL;
$arguments125['else'] = NULL;
$arguments125['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array128);

$expression129 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments125['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);
$arguments125['else'] = 't3-page-ce-empty';
$arguments125['__thenClosure'] = $renderChildrenClosure126;

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output121 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['section'] = NULL;
$arguments140['partial'] = NULL;
$arguments140['delegate'] = NULL;
$arguments140['renderable'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['optional'] = false;
$arguments140['default'] = NULL;
$arguments140['contentAs'] = NULL;
$arguments140['debug'] = true;
$arguments140['partial'] = 'PageLayout/Record';
$arguments140['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
                ';
return $output139;
};
$arguments134 = array();
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$arguments134['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('item.deletePlaceholder', $array137);
$array136['1'] = ' == 0';

$expression138 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments134['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$arguments134['__thenClosure'] = $renderChildrenClosure135;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
            ';
return $output133;
};
$arguments130 = array();
$arguments130['each'] = NULL;
$arguments130['as'] = NULL;
$arguments130['key'] = NULL;
$arguments130['reverse'] = false;
$arguments130['iteration'] = NULL;
$array132 = array (
);$arguments130['each'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array132);
$arguments130['as'] = 'item';

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output121 .= '
        </div>
    ';
return $output121;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output0 .= '
</td>
';

return $output0;
}


}
#