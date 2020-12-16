<?php

class Standard_action_overview_87a9f2ae33fd3b3a62f5f71c83bf537636c6c2d8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'RedirectAdministration';
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
  'rd' => 
  array (
    0 => 'TYPO3\\CMS\\Redirects\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:heading_text';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['section'] = NULL;
$arguments101['partial'] = NULL;
$arguments101['delegate'] = NULL;
$arguments101['renderable'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['optional'] = false;
$arguments101['default'] = NULL;
$arguments101['contentAs'] = NULL;
$arguments101['debug'] = true;
$arguments101['section'] = 'filter';
$arguments101['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['section'] = NULL;
$arguments104['partial'] = NULL;
$arguments104['delegate'] = NULL;
$arguments104['renderable'] = NULL;
$arguments104['arguments'] = array (
);
$arguments104['optional'] = false;
$arguments104['default'] = NULL;
$arguments104['contentAs'] = NULL;
$arguments104['debug'] = true;
$arguments104['section'] = 'table';
$arguments104['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output100 .= '
        ';
return $output100;
};
$arguments98 = array();

$output97 .= '';

$output97 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['section'] = NULL;
$arguments153['partial'] = NULL;
$arguments153['delegate'] = NULL;
$arguments153['renderable'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['optional'] = false;
$arguments153['default'] = NULL;
$arguments153['contentAs'] = NULL;
$arguments153['debug'] = true;
$arguments153['section'] = 'filter';
$arguments153['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['languageKey'] = NULL;
$arguments161['alternativeLanguageKeys'] = NULL;
$arguments161['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output160 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['route'] = NULL;
$arguments163['parameters'] = array (
);
$arguments163['referenceType'] = 'absolute';
$arguments163['route'] = 'site_redirects';
// Rendering Array
$array165 = array();
$array165['action'] = 'overview';
$arguments163['parameters'] = $array165;

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext)]);

$output160 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$arguments166['languageKey'] = NULL;
$arguments166['alternativeLanguageKeys'] = NULL;
$arguments166['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output160 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['languageKey'] = NULL;
$arguments171['alternativeLanguageKeys'] = NULL;
$arguments171['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output170 .= '
                        ';
return $output170;
};
$arguments168 = array();
$arguments168['additionalAttributes'] = NULL;
$arguments168['data'] = NULL;
$arguments168['class'] = NULL;
$arguments168['dir'] = NULL;
$arguments168['id'] = NULL;
$arguments168['lang'] = NULL;
$arguments168['style'] = NULL;
$arguments168['title'] = NULL;
$arguments168['accesskey'] = NULL;
$arguments168['tabindex'] = NULL;
$arguments168['onclick'] = NULL;
$arguments168['uid'] = NULL;
$arguments168['pid'] = NULL;
$arguments168['table'] = NULL;
$arguments168['returnUrl'] = '';
$arguments168['class'] = 'btn btn-primary';
$arguments168['table'] = 'sys_redirect';

$output160 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output160 .= '
                    ';
return $output160;
};
$arguments156 = array();
$arguments156['message'] = NULL;
$arguments156['title'] = NULL;
$arguments156['state'] = -2;
$arguments156['iconName'] = NULL;
$arguments156['disableIcon'] = false;
$arguments156['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments156['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
$renderChildrenClosure157 = ($arguments156['message'] !== null) ? function() use ($arguments156) { return $arguments156['message']; } : $renderChildrenClosure157;
$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output152 .= '
                ';
return $output152;
};
$arguments150 = array();

$output149 .= '';

$output149 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['key'] = NULL;
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['languageKey'] = NULL;
$arguments181['alternativeLanguageKeys'] = NULL;
$arguments181['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);

$output180 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$arguments186['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output185 .= '
                        ';
return $output185;
};
$arguments183 = array();
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$arguments183['uid'] = NULL;
$arguments183['pid'] = NULL;
$arguments183['table'] = NULL;
$arguments183['returnUrl'] = '';
$arguments183['class'] = 'btn btn-primary';
$arguments183['table'] = 'sys_redirect';

$output180 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output180 .= '
                    ';
return $output180;
};
$arguments176 = array();
$arguments176['message'] = NULL;
$arguments176['title'] = NULL;
$arguments176['state'] = -2;
$arguments176['iconName'] = NULL;
$arguments176['disableIcon'] = false;
$arguments176['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['languageKey'] = NULL;
$arguments178['alternativeLanguageKeys'] = NULL;
$arguments178['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments176['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);
$renderChildrenClosure177 = ($arguments176['message'] !== null) ? function() use ($arguments176) { return $arguments176['message']; } : $renderChildrenClosure177;
$output175 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
                ';
return $output175;
};
$arguments173 = array();
$arguments173['if'] = NULL;

$output149 .= '';

$output149 .= '
            ';
return $output149;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('demand.constraints', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments110['__thenClosure'] = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['section'] = NULL;
$arguments113['partial'] = NULL;
$arguments113['delegate'] = NULL;
$arguments113['renderable'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['optional'] = false;
$arguments113['default'] = NULL;
$arguments113['contentAs'] = NULL;
$arguments113['debug'] = true;
$arguments113['section'] = 'filter';
$arguments113['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['key'] = NULL;
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['languageKey'] = NULL;
$arguments121['alternativeLanguageKeys'] = NULL;
$arguments121['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output120 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['route'] = NULL;
$arguments123['parameters'] = array (
);
$arguments123['referenceType'] = 'absolute';
$arguments123['route'] = 'site_redirects';
// Rendering Array
$array125 = array();
$array125['action'] = 'overview';
$arguments123['parameters'] = $array125;

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output120 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['languageKey'] = NULL;
$arguments126['alternativeLanguageKeys'] = NULL;
$arguments126['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output120 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['key'] = NULL;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['languageKey'] = NULL;
$arguments131['alternativeLanguageKeys'] = NULL;
$arguments131['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output130 .= '
                        ';
return $output130;
};
$arguments128 = array();
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['title'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['uid'] = NULL;
$arguments128['pid'] = NULL;
$arguments128['table'] = NULL;
$arguments128['returnUrl'] = '';
$arguments128['class'] = 'btn btn-primary';
$arguments128['table'] = 'sys_redirect';

$output120 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output120 .= '
                    ';
return $output120;
};
$arguments116 = array();
$arguments116['message'] = NULL;
$arguments116['title'] = NULL;
$arguments116['state'] = -2;
$arguments116['iconName'] = NULL;
$arguments116['disableIcon'] = false;
$arguments116['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$arguments118['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments116['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
$renderChildrenClosure117 = ($arguments116['message'] !== null) ? function() use ($arguments116) { return $arguments116['message']; } : $renderChildrenClosure117;
$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output112 .= '
                ';
return $output112;
};
$arguments110['__elseClosures'][] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['key'] = NULL;
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['languageKey'] = NULL;
$arguments139['alternativeLanguageKeys'] = NULL;
$arguments139['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output138 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['key'] = NULL;
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['languageKey'] = NULL;
$arguments144['alternativeLanguageKeys'] = NULL;
$arguments144['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output143 .= '
                        ';
return $output143;
};
$arguments141 = array();
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['uid'] = NULL;
$arguments141['pid'] = NULL;
$arguments141['table'] = NULL;
$arguments141['returnUrl'] = '';
$arguments141['class'] = 'btn btn-primary';
$arguments141['table'] = 'sys_redirect';

$output138 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output138 .= '
                    ';
return $output138;
};
$arguments134 = array();
$arguments134['message'] = NULL;
$arguments134['title'] = NULL;
$arguments134['state'] = -2;
$arguments134['iconName'] = NULL;
$arguments134['disableIcon'] = false;
$arguments134['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['key'] = NULL;
$arguments136['id'] = NULL;
$arguments136['default'] = NULL;
$arguments136['arguments'] = NULL;
$arguments136['extensionName'] = NULL;
$arguments136['languageKey'] = NULL;
$arguments136['alternativeLanguageKeys'] = NULL;
$arguments136['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments134['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);
$renderChildrenClosure135 = ($arguments134['message'] !== null) ? function() use ($arguments134) { return $arguments134['message']; } : $renderChildrenClosure135;
$output133 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
                ';
return $output133;
};

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
        ';
return $output109;
};
$arguments107 = array();
$arguments107['if'] = NULL;

$output97 .= '';

$output97 .= '
    ';
return $output97;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('redirects', $array95);
};
$arguments93 = array();
$arguments93['subject'] = NULL;
$renderChildrenClosure94 = ($arguments93['subject'] !== null) ? function() use ($arguments93) { return $arguments93['subject']; } : $renderChildrenClosure94;$array92['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['section'] = NULL;
$arguments7['partial'] = NULL;
$arguments7['delegate'] = NULL;
$arguments7['renderable'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$arguments7['default'] = NULL;
$arguments7['contentAs'] = NULL;
$arguments7['debug'] = true;
$arguments7['section'] = 'filter';
$arguments7['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['section'] = NULL;
$arguments10['partial'] = NULL;
$arguments10['delegate'] = NULL;
$arguments10['renderable'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$arguments10['default'] = NULL;
$arguments10['contentAs'] = NULL;
$arguments10['debug'] = true;
$arguments10['section'] = 'table';
$arguments10['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '
        ';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['section'] = NULL;
$arguments57['partial'] = NULL;
$arguments57['delegate'] = NULL;
$arguments57['renderable'] = NULL;
$arguments57['arguments'] = array (
);
$arguments57['optional'] = false;
$arguments57['default'] = NULL;
$arguments57['contentAs'] = NULL;
$arguments57['debug'] = true;
$arguments57['section'] = 'filter';
$arguments57['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$arguments65['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output64 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['route'] = NULL;
$arguments67['parameters'] = array (
);
$arguments67['referenceType'] = 'absolute';
$arguments67['route'] = 'site_redirects';
// Rendering Array
$array69 = array();
$array69['action'] = 'overview';
$arguments67['parameters'] = $array69;

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output64 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$arguments70['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output64 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['languageKey'] = NULL;
$arguments75['alternativeLanguageKeys'] = NULL;
$arguments75['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output74 .= '
                        ';
return $output74;
};
$arguments72 = array();
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$arguments72['uid'] = NULL;
$arguments72['pid'] = NULL;
$arguments72['table'] = NULL;
$arguments72['returnUrl'] = '';
$arguments72['class'] = 'btn btn-primary';
$arguments72['table'] = 'sys_redirect';

$output64 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output64 .= '
                    ';
return $output64;
};
$arguments60 = array();
$arguments60['message'] = NULL;
$arguments60['title'] = NULL;
$arguments60['state'] = -2;
$arguments60['iconName'] = NULL;
$arguments60['disableIcon'] = false;
$arguments60['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments60['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
$renderChildrenClosure61 = ($arguments60['message'] !== null) ? function() use ($arguments60) { return $arguments60['message']; } : $renderChildrenClosure61;
$output56 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output56 .= '
                ';
return $output56;
};
$arguments54 = array();

$output53 .= '';

$output53 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['languageKey'] = NULL;
$arguments90['alternativeLanguageKeys'] = NULL;
$arguments90['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output89 .= '
                        ';
return $output89;
};
$arguments87 = array();
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['uid'] = NULL;
$arguments87['pid'] = NULL;
$arguments87['table'] = NULL;
$arguments87['returnUrl'] = '';
$arguments87['class'] = 'btn btn-primary';
$arguments87['table'] = 'sys_redirect';

$output84 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output84 .= '
                    ';
return $output84;
};
$arguments80 = array();
$arguments80['message'] = NULL;
$arguments80['title'] = NULL;
$arguments80['state'] = -2;
$arguments80['iconName'] = NULL;
$arguments80['disableIcon'] = false;
$arguments80['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['languageKey'] = NULL;
$arguments82['alternativeLanguageKeys'] = NULL;
$arguments82['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments80['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
$renderChildrenClosure81 = ($arguments80['message'] !== null) ? function() use ($arguments80) { return $arguments80['message']; } : $renderChildrenClosure81;
$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                ';
return $output79;
};
$arguments77 = array();
$arguments77['if'] = NULL;

$output53 .= '';

$output53 .= '
            ';
return $output53;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('demand.constraints', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['section'] = NULL;
$arguments17['partial'] = NULL;
$arguments17['delegate'] = NULL;
$arguments17['renderable'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['optional'] = false;
$arguments17['default'] = NULL;
$arguments17['contentAs'] = NULL;
$arguments17['debug'] = true;
$arguments17['section'] = 'filter';
$arguments17['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['route'] = NULL;
$arguments27['parameters'] = array (
);
$arguments27['referenceType'] = 'absolute';
$arguments27['route'] = 'site_redirects';
// Rendering Array
$array29 = array();
$array29['action'] = 'overview';
$arguments27['parameters'] = $array29;

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output24 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output24 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['languageKey'] = NULL;
$arguments35['alternativeLanguageKeys'] = NULL;
$arguments35['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '
                        ';
return $output34;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['uid'] = NULL;
$arguments32['pid'] = NULL;
$arguments32['table'] = NULL;
$arguments32['returnUrl'] = '';
$arguments32['class'] = 'btn btn-primary';
$arguments32['table'] = 'sys_redirect';

$output24 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output24 .= '
                    ';
return $output24;
};
$arguments20 = array();
$arguments20['message'] = NULL;
$arguments20['title'] = NULL;
$arguments20['state'] = -2;
$arguments20['iconName'] = NULL;
$arguments20['disableIcon'] = false;
$arguments20['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['languageKey'] = NULL;
$arguments22['alternativeLanguageKeys'] = NULL;
$arguments22['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments20['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
$renderChildrenClosure21 = ($arguments20['message'] !== null) ? function() use ($arguments20) { return $arguments20['message']; } : $renderChildrenClosure21;
$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output16 .= '
                ';
return $output16;
};
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$arguments48['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '
                        ';
return $output47;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['uid'] = NULL;
$arguments45['pid'] = NULL;
$arguments45['table'] = NULL;
$arguments45['returnUrl'] = '';
$arguments45['class'] = 'btn btn-primary';
$arguments45['table'] = 'sys_redirect';

$output42 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
                    ';
return $output42;
};
$arguments38 = array();
$arguments38['message'] = NULL;
$arguments38['title'] = NULL;
$arguments38['state'] = -2;
$arguments38['iconName'] = NULL;
$arguments38['disableIcon'] = false;
$arguments38['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments38['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);
$renderChildrenClosure39 = ($arguments38['message'] !== null) ? function() use ($arguments38) { return $arguments38['message']; } : $renderChildrenClosure39;
$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
                ';
return $output37;
};

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
        ';
return $output13;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';

return $output3;
}
/**
 * section table
 */
public function section_c3ee137d4f22eb06ed1351d644f3674592c90836(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output188 = '';

$output188 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['section'] = NULL;
$arguments189['partial'] = NULL;
$arguments189['delegate'] = NULL;
$arguments189['renderable'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['optional'] = false;
$arguments189['default'] = NULL;
$arguments189['contentAs'] = NULL;
$arguments189['debug'] = true;
$arguments189['partial'] = 'Pagination';
$arguments189['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
    <div class="table-fit">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['key'] = NULL;
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['languageKey'] = NULL;
$arguments192['alternativeLanguageKeys'] = NULL;
$arguments192['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host';

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext)]);

$output188 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['languageKey'] = NULL;
$arguments194['alternativeLanguageKeys'] = NULL;
$arguments194['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path';

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);

$output188 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['key'] = NULL;
$arguments196['id'] = NULL;
$arguments196['default'] = NULL;
$arguments196['arguments'] = NULL;
$arguments196['extensionName'] = NULL;
$arguments196['languageKey'] = NULL;
$arguments196['alternativeLanguageKeys'] = NULL;
$arguments196['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination';

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext)]);

$output188 .= '</th>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                        <th># ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['key'] = NULL;
$arguments204['id'] = NULL;
$arguments204['default'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['languageKey'] = NULL;
$arguments204['alternativeLanguageKeys'] = NULL;
$arguments204['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hits';

$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);

$output203 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['key'] = NULL;
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$arguments206['languageKey'] = NULL;
$arguments206['alternativeLanguageKeys'] = NULL;
$arguments206['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last';

$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext)]);

$output203 .= '</th>
                    ';
return $output203;
};
$arguments198 = array();
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$arguments198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array200 = array();
$array201 = array (
);$array200['0'] = $renderingContext->getVariableProvider()->getByPath('showHitCounter', $array201);

$expression202 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array200)
					),
					$renderingContext
				);
$arguments198['__thenClosure'] = $renderChildrenClosure199;

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output188 .= '
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['value'] = NULL;
$arguments212['name'] = NULL;
$arguments212['name'] = 'pageId';
// Rendering ViewHelper TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['target'] = NULL;
$array216 = array (
);$arguments214['target'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array216);
$arguments212['value'] = TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);
$renderChildrenClosure213 = ($arguments212['value'] !== null) ? function() use ($arguments212) { return $arguments212['value']; } : $renderChildrenClosure213;
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);

$output211 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['value'] = NULL;
$arguments217['name'] = NULL;
$arguments217['name'] = 'targetUri';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['parameter'] = NULL;
$arguments219['additionalParams'] = '';
$arguments219['language'] = NULL;
$arguments219['useCacheHash'] = NULL;
$arguments219['addQueryString'] = false;
$arguments219['addQueryStringMethod'] = 'GET';
$arguments219['addQueryStringExclude'] = '';
$arguments219['absolute'] = false;
$array221 = array (
);$arguments219['parameter'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array221);
$arguments217['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);
$renderChildrenClosure218 = ($arguments217['value'] !== null) ? function() use ($arguments217) { return $arguments217['value']; } : $renderChildrenClosure218;
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output211 .= '
                    <tr>
                        <td>';
$array222 = array (
);
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array222)]);

$output211 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output277 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '<span title="';
$array281 = array (
);
$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable', $array281)]);

$output280 .= '">';
return $output280;
};
$arguments278 = array();

$output277 .= '';

$output277 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '<span title="';
$array289 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart', $array289)]);

$output288 .= '">';
return $output288;
};
$arguments282 = array();
$arguments282['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array285);
$array284['1'] = ' && !';
$array286 = array (
);$array284['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array286);

$expression287 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};
$arguments282['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);

$output277 .= '';

$output277 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '<span title="';
$array297 = array (
);
$output296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend', $array297)]);

$output296 .= '">';
return $output296;
};
$arguments290 = array();
$arguments290['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array292['0'] = '!';
$array293 = array (
);$array292['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array293);
$array292['2'] = ' && ';
$array294 = array (
);$array292['3'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array294);

$expression295 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};
$arguments290['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);

$output277 .= '';

$output277 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '<span title="';
$array305 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend', $array305)]);

$output304 .= '">';
return $output304;
};
$arguments298 = array();
$arguments298['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array300 = array();
$array301 = array (
);$array300['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array301);
$array300['1'] = ' && ';
$array302 = array (
);$array300['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array302);

$expression303 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments298['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array300)
					),
					$renderingContext
				);

$output277 .= '';

$output277 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return '<span>';
};
$arguments306 = array();
$arguments306['if'] = NULL;

$output277 .= '';

$output277 .= '
                            ';
return $output277;
};
$arguments252 = array();
$arguments252['then'] = NULL;
$arguments252['else'] = NULL;
$arguments252['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.disabled', $array275);

$expression276 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments252['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments252['__thenClosure'] = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '<span title="';
$array255 = array (
);
$output254 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable', $array255)]);

$output254 .= '">';
return $output254;
};
$arguments252['__elseClosures'][] = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '<span title="';
$array257 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart', $array257)]);

$output256 .= '">';
return $output256;
};
$arguments252['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array259);
$array258['1'] = ' && !';
$array260 = array (
);$array258['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array260);

$expression261 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array258)
					),
					$renderingContext
				);
};
$arguments252['__elseClosures'][] = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '<span title="';
$array263 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend', $array263)]);

$output262 .= '">';
return $output262;
};
$arguments252['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array264['0'] = '!';
$array265 = array (
);$array264['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array265);
$array264['2'] = ' && ';
$array266 = array (
);$array264['3'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array266);

$expression267 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
};
$arguments252['__elseClosures'][] = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '<span title="';
$array269 = array (
);
$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend', $array269)]);

$output268 .= '">';
return $output268;
};
$arguments252['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array271);
$array270['1'] = ' && ';
$array272 = array (
);$array270['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array272);

$expression273 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);
};
$arguments252['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span>';
};

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['table'] = NULL;
$arguments308['row'] = NULL;
$arguments308['size'] = 'small';
$arguments308['alternativeMarkupIdentifier'] = NULL;
$arguments308['table'] = 'sys_redirect';
$array310 = array (
);$arguments308['row'] = $renderingContext->getVariableProvider()->getByPath('redirect', $array310);

$output251 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output251 .= '</span>
                            ';
return $output251;
};
$arguments223 = array();
$arguments223['map'] = NULL;
// Rendering Array
$array225 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['key'] = NULL;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$arguments226['languageKey'] = NULL;
$arguments226['alternativeLanguageKeys'] = NULL;
$arguments226['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:record_disabled';
$array225['disable'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);
$output228 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
$arguments229['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start';

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['date'] = NULL;
$arguments231['format'] = '';
$arguments231['base'] = NULL;
$array233 = array (
);$arguments231['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array233);
$arguments231['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure232 = ($arguments231['date'] !== null) ? function() use ($arguments231) { return $arguments231['date']; } : $renderChildrenClosure232;
$output228 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);
$array225['onlystart'] = $output228;
$output234 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['languageKey'] = NULL;
$arguments235['alternativeLanguageKeys'] = NULL;
$arguments235['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output234 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['date'] = NULL;
$arguments237['format'] = '';
$arguments237['base'] = NULL;
$array239 = array (
);$arguments237['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array239);
$arguments237['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure238 = ($arguments237['date'] !== null) ? function() use ($arguments237) { return $arguments237['date']; } : $renderChildrenClosure238;
$output234 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);
$array225['onlyend'] = $output234;
$output240 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['languageKey'] = NULL;
$arguments241['alternativeLanguageKeys'] = NULL;
$arguments241['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start';

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['date'] = NULL;
$arguments243['format'] = '';
$arguments243['base'] = NULL;
$array245 = array (
);$arguments243['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array245);
$arguments243['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure244 = ($arguments243['date'] !== null) ? function() use ($arguments243) { return $arguments243['date']; } : $renderChildrenClosure244;
$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output240 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['key'] = NULL;
$arguments246['id'] = NULL;
$arguments246['default'] = NULL;
$arguments246['arguments'] = NULL;
$arguments246['extensionName'] = NULL;
$arguments246['languageKey'] = NULL;
$arguments246['alternativeLanguageKeys'] = NULL;
$arguments246['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output240 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['date'] = NULL;
$arguments248['format'] = '';
$arguments248['base'] = NULL;
$array250 = array (
);$arguments248['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array250);
$arguments248['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure249 = ($arguments248['date'] !== null) ? function() use ($arguments248) { return $arguments248['date']; } : $renderChildrenClosure249;
$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);
$array225['startend'] = $output240;
$arguments223['map'] = $array225;

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output211 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$array321 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array321)]);
};
$arguments319 = array();
$arguments319['maxCharacters'] = NULL;
$arguments319['append'] = '&hellip;';
$arguments319['respectWordBoundaries'] = true;
$arguments319['respectHtml'] = true;
$arguments319['maxCharacters'] = 100;

$output318 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output318 .= '
                            ';
return $output318;
};
$arguments311 = array();
$arguments311['additionalAttributes'] = NULL;
$arguments311['data'] = NULL;
$arguments311['class'] = NULL;
$arguments311['dir'] = NULL;
$arguments311['id'] = NULL;
$arguments311['lang'] = NULL;
$arguments311['style'] = NULL;
$arguments311['title'] = NULL;
$arguments311['accesskey'] = NULL;
$arguments311['tabindex'] = NULL;
$arguments311['onclick'] = NULL;
$arguments311['uid'] = NULL;
$arguments311['table'] = NULL;
$arguments311['fields'] = NULL;
$arguments311['returnUrl'] = '';
$arguments311['table'] = 'sys_redirect';
$array313 = array (
);$arguments311['uid'] = $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array313);
$output314 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['key'] = NULL;
$arguments315['id'] = NULL;
$arguments315['default'] = NULL;
$arguments315['arguments'] = NULL;
$arguments315['extensionName'] = NULL;
$arguments315['languageKey'] = NULL;
$arguments315['alternativeLanguageKeys'] = NULL;
$arguments315['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit';

$output314 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= ': ';
$array317 = array (
);
$output314 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array317);
$arguments311['title'] = $output314;

$output211 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output211 .= '
                        </td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$array329 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('targetUri', $array329)]);
};
$arguments322 = array();
$arguments322['parameter'] = NULL;
$arguments322['target'] = '';
$arguments322['class'] = '';
$arguments322['title'] = '';
$arguments322['language'] = NULL;
$arguments322['additionalParams'] = '';
$arguments322['additionalAttributes'] = array (
);
$arguments322['useCacheHash'] = NULL;
$arguments322['addQueryString'] = false;
$arguments322['addQueryStringMethod'] = 'GET';
$arguments322['addQueryStringExclude'] = '';
$arguments322['absolute'] = false;
$arguments322['parts-as'] = 'typoLinkParts';
$array324 = array (
);$arguments322['parameter'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array324);
$arguments322['target'] = '_blank';
$output325 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['key'] = NULL;
$arguments326['id'] = NULL;
$arguments326['default'] = NULL;
$arguments326['arguments'] = NULL;
$arguments326['extensionName'] = NULL;
$arguments326['languageKey'] = NULL;
$arguments326['alternativeLanguageKeys'] = NULL;
$arguments326['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:visit_destination';

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= ' ';
$array328 = array (
);
$output325 .= $renderingContext->getVariableProvider()->getByPath('targetUri', $array328);
$arguments322['title'] = $output325;

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output211 .= '
                            (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$output335 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments336 = array();
$arguments336['key'] = NULL;
$arguments336['id'] = NULL;
$arguments336['default'] = NULL;
$arguments336['arguments'] = NULL;
$arguments336['extensionName'] = NULL;
$arguments336['languageKey'] = NULL;
$arguments336['alternativeLanguageKeys'] = NULL;
$arguments336['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:pageID';

$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext)]);

$output335 .= ': ';
$array338 = array (
);
$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId', $array338)]);

$output335 .= ',
                            ';
return $output335;
};
$arguments330 = array();
$arguments330['then'] = NULL;
$arguments330['else'] = NULL;
$arguments330['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array332 = array();
$array333 = array (
);$array332['0'] = $renderingContext->getVariableProvider()->getByPath('pageId', $array333);

$expression334 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments330['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression334(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array332)
					),
					$renderingContext
				);
$arguments330['__thenClosure'] = $renderChildrenClosure331;

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['key'] = NULL;
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['arguments'] = NULL;
$arguments339['extensionName'] = NULL;
$arguments339['languageKey'] = NULL;
$arguments339['alternativeLanguageKeys'] = NULL;
$arguments339['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination_status_code';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext)]);

$output211 .= ': ';
$array341 = array (
);
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target_statuscode', $array341)]);

$output211 .= ')</td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output347 = '';

$output347 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output353 = '';

$output353 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['key'] = NULL;
$arguments354['id'] = NULL;
$arguments354['default'] = NULL;
$arguments354['arguments'] = NULL;
$arguments354['extensionName'] = NULL;
$arguments354['languageKey'] = NULL;
$arguments354['alternativeLanguageKeys'] = NULL;
$output356 = '';

$output356 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['then'] = NULL;
$arguments357['else'] = NULL;
$arguments357['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array359 = array();
$array360 = array (
);$array359['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array360);
$array359['1'] = ' > 1';

$expression361 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments357['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression361(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array359)
					),
					$renderingContext
				);
$arguments357['then'] = 's';

$output356 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output356 .= '_text';
$arguments354['key'] = $output356;
// Rendering Array
$array362 = array();
$array363 = array (
);$array362['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array363);
$arguments354['arguments'] = $array362;

$output353 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext)]);

$output353 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
                                        <a class="t3js-modal-trigger"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['route'] = NULL;
$arguments370['arguments'] = array (
);
$arguments370['query'] = NULL;
$arguments370['currentUrlParameterName'] = NULL;
$arguments370['route'] = 'tce_db';
$output372 = '';

$output372 .= 'data[sys_redirect][';
$array373 = array (
);
$output372 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array373);

$output372 .= '][hitcount]=0';
$arguments370['query'] = $output372;
$arguments370['currentUrlParameterName'] = 'redirect';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext)]);

$output369 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['key'] = NULL;
$arguments374['id'] = NULL;
$arguments374['default'] = NULL;
$arguments374['arguments'] = NULL;
$arguments374['extensionName'] = NULL;
$arguments374['languageKey'] = NULL;
$arguments374['alternativeLanguageKeys'] = NULL;
$arguments374['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output369 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['key'] = NULL;
$arguments376['id'] = NULL;
$arguments376['default'] = NULL;
$arguments376['arguments'] = NULL;
$arguments376['extensionName'] = NULL;
$arguments376['languageKey'] = NULL;
$arguments376['alternativeLanguageKeys'] = NULL;
$arguments376['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.title';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext)]);

$output369 .= '"
                                            data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments378 = array();
$arguments378['key'] = NULL;
$arguments378['id'] = NULL;
$arguments378['default'] = NULL;
$arguments378['arguments'] = NULL;
$arguments378['extensionName'] = NULL;
$arguments378['languageKey'] = NULL;
$arguments378['alternativeLanguageKeys'] = NULL;
$arguments378['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.content';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext)]);

$output369 .= '"
                                            data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['key'] = NULL;
$arguments380['id'] = NULL;
$arguments380['default'] = NULL;
$arguments380['arguments'] = NULL;
$arguments380['extensionName'] = NULL;
$arguments380['languageKey'] = NULL;
$arguments380['alternativeLanguageKeys'] = NULL;
$arguments380['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext)]);

$output369 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['identifier'] = NULL;
$arguments382['size'] = 'small';
$arguments382['overlay'] = NULL;
$arguments382['state'] = 'default';
$arguments382['alternativeMarkupIdentifier'] = NULL;
$arguments382['identifier'] = 'actions-edit-restore';

$output369 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output369 .= '</a>
                                    ';
return $output369;
};
$arguments364 = array();
$arguments364['then'] = NULL;
$arguments364['else'] = NULL;
$arguments364['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array366 = array();
$array367 = array (
);$array366['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array367);
$array366['1'] = ' != 0';

$expression368 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 0);};
$arguments364['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression368(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array366)
					),
					$renderingContext
				);
$arguments364['__thenClosure'] = $renderChildrenClosure365;

$output353 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output353 .= '
                                ';
return $output353;
};
$arguments348 = array();
$arguments348['then'] = NULL;
$arguments348['else'] = NULL;
$arguments348['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array350 = array();
$array350['0'] = '!';
$array351 = array (
);$array350['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.disable_hitcount', $array351);

$expression352 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments348['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression352(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array350)
					),
					$renderingContext
				);
$arguments348['__thenClosure'] = $renderChildrenClosure349;

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output347 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '@';
$array401 = array (
);
$output400 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array401);
return $output400;
};
$arguments398 = array();
$arguments398['date'] = NULL;
$arguments398['format'] = '';
$arguments398['base'] = NULL;
$arguments398['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure399 = ($arguments398['date'] !== null) ? function() use ($arguments398) { return $arguments398['date']; } : $renderChildrenClosure399;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext)]);
};
$arguments396 = array();

$output395 .= '';

$output395 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['key'] = NULL;
$arguments404['id'] = NULL;
$arguments404['default'] = NULL;
$arguments404['arguments'] = NULL;
$arguments404['extensionName'] = NULL;
$arguments404['languageKey'] = NULL;
$arguments404['alternativeLanguageKeys'] = NULL;
$arguments404['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext)]);
};
$arguments402 = array();
$arguments402['if'] = NULL;

$output395 .= '';

$output395 .= '
                                ';
return $output395;
};
$arguments384 = array();
$arguments384['then'] = NULL;
$arguments384['else'] = NULL;
$arguments384['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array393);

$expression394 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments384['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array392)
					),
					$renderingContext
				);
$arguments384['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '@';
$array389 = array (
);
$output388 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array389);
return $output388;
};
$arguments386 = array();
$arguments386['date'] = NULL;
$arguments386['format'] = '';
$arguments386['base'] = NULL;
$arguments386['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure387 = ($arguments386['date'] !== null) ? function() use ($arguments386) { return $arguments386['date']; } : $renderChildrenClosure387;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext)]);
};
$arguments384['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['key'] = NULL;
$arguments390['id'] = NULL;
$arguments390['default'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['languageKey'] = NULL;
$arguments390['alternativeLanguageKeys'] = NULL;
$arguments390['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext)]);
};

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output347 .= '
                            </td>
                        ';
return $output347;
};
$arguments342 = array();
$arguments342['then'] = NULL;
$arguments342['else'] = NULL;
$arguments342['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array344 = array();
$array345 = array (
);$array344['0'] = $renderingContext->getVariableProvider()->getByPath('showHitCounter', $array345);

$expression346 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments342['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression346(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array344)
					),
					$renderingContext
				);
$arguments342['__thenClosure'] = $renderChildrenClosure343;

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output211 .= '
                        <td>
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output426 = '';

$output426 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['identifier'] = NULL;
$arguments430['size'] = 'small';
$arguments430['overlay'] = NULL;
$arguments430['state'] = 'default';
$arguments430['alternativeMarkupIdentifier'] = NULL;
$arguments430['identifier'] = 'empty-empty';

$output429 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output429 .= '</span>
                                    ';
return $output429;
};
$arguments427 = array();

$output426 .= '';

$output426 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output442 = '';

$output442 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['identifier'] = NULL;
$arguments443['size'] = 'small';
$arguments443['overlay'] = NULL;
$arguments443['state'] = 'default';
$arguments443['alternativeMarkupIdentifier'] = NULL;
$arguments443['identifier'] = 'actions-view-page';

$output442 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output442 .= '
                                        ';
return $output442;
};
$arguments435 = array();
$arguments435['additionalAttributes'] = NULL;
$arguments435['data'] = NULL;
$arguments435['uri'] = NULL;
$arguments435['defaultScheme'] = 'http';
$arguments435['class'] = NULL;
$arguments435['dir'] = NULL;
$arguments435['id'] = NULL;
$arguments435['lang'] = NULL;
$arguments435['style'] = NULL;
$arguments435['title'] = NULL;
$arguments435['accesskey'] = NULL;
$arguments435['tabindex'] = NULL;
$arguments435['onclick'] = NULL;
$arguments435['name'] = NULL;
$arguments435['rel'] = NULL;
$arguments435['rev'] = NULL;
$arguments435['target'] = NULL;
$arguments435['class'] = 'btn btn-default';
$output437 = '';
$array438 = array (
);
$output437 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array438);
$array439 = array (
);
$output437 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array439);
$arguments435['uri'] = $output437;
$arguments435['target'] = '_blank';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments440 = array();
$arguments440['key'] = NULL;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$arguments440['languageKey'] = NULL;
$arguments440['alternativeLanguageKeys'] = NULL;
$arguments440['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect';
$arguments435['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);

$output434 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
                                    ';
return $output434;
};
$arguments432 = array();
$arguments432['if'] = NULL;

$output426 .= '';

$output426 .= '
                                ';
return $output426;
};
$arguments406 = array();
$arguments406['then'] = NULL;
$arguments406['else'] = NULL;
$arguments406['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array422 = array();
$array423 = array (
);$array422['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.is_regexp', $array423);
$array422['1'] = ' || ';
$array424 = array (
);$array422['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array424);
$array422['3'] = ' === \'*\'';

$expression425 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) === '*'));};
$arguments406['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression425(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array422)
					),
					$renderingContext
				);
$arguments406['__thenClosure'] = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['identifier'] = NULL;
$arguments409['size'] = 'small';
$arguments409['overlay'] = NULL;
$arguments409['state'] = 'default';
$arguments409['alternativeMarkupIdentifier'] = NULL;
$arguments409['identifier'] = 'empty-empty';

$output408 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '</span>
                                    ';
return $output408;
};
$arguments406['__elseClosures'][] = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['identifier'] = NULL;
$arguments420['size'] = 'small';
$arguments420['overlay'] = NULL;
$arguments420['state'] = 'default';
$arguments420['alternativeMarkupIdentifier'] = NULL;
$arguments420['identifier'] = 'actions-view-page';

$output419 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
                                        ';
return $output419;
};
$arguments412 = array();
$arguments412['additionalAttributes'] = NULL;
$arguments412['data'] = NULL;
$arguments412['uri'] = NULL;
$arguments412['defaultScheme'] = 'http';
$arguments412['class'] = NULL;
$arguments412['dir'] = NULL;
$arguments412['id'] = NULL;
$arguments412['lang'] = NULL;
$arguments412['style'] = NULL;
$arguments412['title'] = NULL;
$arguments412['accesskey'] = NULL;
$arguments412['tabindex'] = NULL;
$arguments412['onclick'] = NULL;
$arguments412['name'] = NULL;
$arguments412['rel'] = NULL;
$arguments412['rev'] = NULL;
$arguments412['target'] = NULL;
$arguments412['class'] = 'btn btn-default';
$output414 = '';
$array415 = array (
);
$output414 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array415);
$array416 = array (
);
$output414 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array416);
$arguments412['uri'] = $output414;
$arguments412['target'] = '_blank';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['key'] = NULL;
$arguments417['id'] = NULL;
$arguments417['default'] = NULL;
$arguments417['arguments'] = NULL;
$arguments417['extensionName'] = NULL;
$arguments417['languageKey'] = NULL;
$arguments417['alternativeLanguageKeys'] = NULL;
$arguments417['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect';
$arguments412['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output411 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output411 .= '
                                    ';
return $output411;
};

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output211 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['identifier'] = NULL;
$arguments451['size'] = 'small';
$arguments451['overlay'] = NULL;
$arguments451['state'] = 'default';
$arguments451['alternativeMarkupIdentifier'] = NULL;
$arguments451['identifier'] = 'actions-open';

$output450 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output450 .= '
                                ';
return $output450;
};
$arguments445 = array();
$arguments445['additionalAttributes'] = NULL;
$arguments445['data'] = NULL;
$arguments445['class'] = NULL;
$arguments445['dir'] = NULL;
$arguments445['id'] = NULL;
$arguments445['lang'] = NULL;
$arguments445['style'] = NULL;
$arguments445['title'] = NULL;
$arguments445['accesskey'] = NULL;
$arguments445['tabindex'] = NULL;
$arguments445['onclick'] = NULL;
$arguments445['uid'] = NULL;
$arguments445['table'] = NULL;
$arguments445['fields'] = NULL;
$arguments445['returnUrl'] = '';
$arguments445['class'] = 'btn btn-default';
$arguments445['table'] = 'sys_redirect';
$array447 = array (
);$arguments445['uid'] = $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array447);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['languageKey'] = NULL;
$arguments448['alternativeLanguageKeys'] = NULL;
$arguments448['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit';
$arguments445['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output211 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output211 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output476 = '';

$output476 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$output479 = '';

$output479 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['route'] = NULL;
$arguments480['arguments'] = array (
);
$arguments480['query'] = NULL;
$arguments480['currentUrlParameterName'] = NULL;
$arguments480['route'] = 'tce_db';
$output482 = '';

$output482 .= 'data[sys_redirect][';
$array483 = array (
);
$output482 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array483);

$output482 .= '][disabled]=0';
$arguments480['query'] = $output482;
$arguments480['currentUrlParameterName'] = 'redirect';

$output479 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext)]);

$output479 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments484 = array();
$arguments484['key'] = NULL;
$arguments484['id'] = NULL;
$arguments484['default'] = NULL;
$arguments484['arguments'] = NULL;
$arguments484['extensionName'] = NULL;
$arguments484['languageKey'] = NULL;
$arguments484['alternativeLanguageKeys'] = NULL;
$arguments484['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide';

$output479 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext)]);

$output479 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['identifier'] = NULL;
$arguments486['size'] = 'small';
$arguments486['overlay'] = NULL;
$arguments486['state'] = 'default';
$arguments486['alternativeMarkupIdentifier'] = NULL;
$arguments486['identifier'] = 'actions-edit-unhide';

$output479 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output479 .= '</a>
                                    ';
return $output479;
};
$arguments477 = array();

$output476 .= '';

$output476 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['route'] = NULL;
$arguments491['arguments'] = array (
);
$arguments491['query'] = NULL;
$arguments491['currentUrlParameterName'] = NULL;
$arguments491['route'] = 'tce_db';
$output493 = '';

$output493 .= 'data[sys_redirect][';
$array494 = array (
);
$output493 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array494);

$output493 .= '][disabled]=1';
$arguments491['query'] = $output493;
$arguments491['currentUrlParameterName'] = 'redirect';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output490 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['key'] = NULL;
$arguments495['id'] = NULL;
$arguments495['default'] = NULL;
$arguments495['arguments'] = NULL;
$arguments495['extensionName'] = NULL;
$arguments495['languageKey'] = NULL;
$arguments495['alternativeLanguageKeys'] = NULL;
$arguments495['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext)]);

$output490 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['identifier'] = NULL;
$arguments497['size'] = 'small';
$arguments497['overlay'] = NULL;
$arguments497['state'] = 'default';
$arguments497['alternativeMarkupIdentifier'] = NULL;
$arguments497['identifier'] = 'actions-edit-hide';

$output490 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output490 .= '</a>
                                    ';
return $output490;
};
$arguments488 = array();
$arguments488['if'] = NULL;

$output476 .= '';

$output476 .= '
                                ';
return $output476;
};
$arguments453 = array();
$arguments453['then'] = NULL;
$arguments453['else'] = NULL;
$arguments453['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array473 = array();
$array474 = array (
);$array473['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.disabled', $array474);
$array473['1'] = ' == 1';

$expression475 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments453['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression475(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array473)
					),
					$renderingContext
				);
$arguments453['__thenClosure'] = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['route'] = NULL;
$arguments456['arguments'] = array (
);
$arguments456['query'] = NULL;
$arguments456['currentUrlParameterName'] = NULL;
$arguments456['route'] = 'tce_db';
$output458 = '';

$output458 .= 'data[sys_redirect][';
$array459 = array (
);
$output458 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array459);

$output458 .= '][disabled]=0';
$arguments456['query'] = $output458;
$arguments456['currentUrlParameterName'] = 'redirect';

$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext)]);

$output455 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['key'] = NULL;
$arguments460['id'] = NULL;
$arguments460['default'] = NULL;
$arguments460['arguments'] = NULL;
$arguments460['extensionName'] = NULL;
$arguments460['languageKey'] = NULL;
$arguments460['alternativeLanguageKeys'] = NULL;
$arguments460['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide';

$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext)]);

$output455 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['identifier'] = NULL;
$arguments462['size'] = 'small';
$arguments462['overlay'] = NULL;
$arguments462['state'] = 'default';
$arguments462['alternativeMarkupIdentifier'] = NULL;
$arguments462['identifier'] = 'actions-edit-unhide';

$output455 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output455 .= '</a>
                                    ';
return $output455;
};
$arguments453['__elseClosures'][] = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['route'] = NULL;
$arguments465['arguments'] = array (
);
$arguments465['query'] = NULL;
$arguments465['currentUrlParameterName'] = NULL;
$arguments465['route'] = 'tce_db';
$output467 = '';

$output467 .= 'data[sys_redirect][';
$array468 = array (
);
$output467 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array468);

$output467 .= '][disabled]=1';
$arguments465['query'] = $output467;
$arguments465['currentUrlParameterName'] = 'redirect';

$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext)]);

$output464 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments469 = array();
$arguments469['key'] = NULL;
$arguments469['id'] = NULL;
$arguments469['default'] = NULL;
$arguments469['arguments'] = NULL;
$arguments469['extensionName'] = NULL;
$arguments469['languageKey'] = NULL;
$arguments469['alternativeLanguageKeys'] = NULL;
$arguments469['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide';

$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext)]);

$output464 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments471 = array();
$arguments471['identifier'] = NULL;
$arguments471['size'] = 'small';
$arguments471['overlay'] = NULL;
$arguments471['state'] = 'default';
$arguments471['alternativeMarkupIdentifier'] = NULL;
$arguments471['identifier'] = 'actions-edit-hide';

$output464 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output464 .= '</a>
                                    ';
return $output464;
};

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output211 .= '
                                <a class="btn btn-default t3js-modal-trigger"
                                    href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['route'] = NULL;
$arguments499['arguments'] = array (
);
$arguments499['query'] = NULL;
$arguments499['currentUrlParameterName'] = NULL;
$arguments499['route'] = 'tce_db';
$output501 = '';

$output501 .= 'cmd[sys_redirect][';
$array502 = array (
);
$output501 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array502);

$output501 .= '][delete]=1';
$arguments499['query'] = $output501;
$arguments499['currentUrlParameterName'] = 'redirect';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext)]);

$output211 .= '"
                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['key'] = NULL;
$arguments503['id'] = NULL;
$arguments503['default'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['extensionName'] = NULL;
$arguments503['languageKey'] = NULL;
$arguments503['alternativeLanguageKeys'] = NULL;
$arguments503['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:delete';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext)]);

$output211 .= '"
                                    data-severity="warning"
                                    data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['key'] = NULL;
$arguments505['id'] = NULL;
$arguments505['default'] = NULL;
$arguments505['arguments'] = NULL;
$arguments505['extensionName'] = NULL;
$arguments505['languageKey'] = NULL;
$arguments505['alternativeLanguageKeys'] = NULL;
$arguments505['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext)]);

$output211 .= '"
                                    data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments507 = array();
$arguments507['key'] = NULL;
$arguments507['id'] = NULL;
$arguments507['default'] = NULL;
$arguments507['arguments'] = NULL;
$arguments507['extensionName'] = NULL;
$arguments507['languageKey'] = NULL;
$arguments507['alternativeLanguageKeys'] = NULL;
$arguments507['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:deleteWarning';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext)]);

$output211 .= '"
                                    data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['key'] = NULL;
$arguments509['id'] = NULL;
$arguments509['default'] = NULL;
$arguments509['arguments'] = NULL;
$arguments509['extensionName'] = NULL;
$arguments509['languageKey'] = NULL;
$arguments509['alternativeLanguageKeys'] = NULL;
$arguments509['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext)]);

$output211 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['identifier'] = NULL;
$arguments511['size'] = 'small';
$arguments511['overlay'] = NULL;
$arguments511['state'] = 'default';
$arguments511['alternativeMarkupIdentifier'] = NULL;
$arguments511['identifier'] = 'actions-delete';

$output211 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output211 .= '
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
return $output211;
};
$arguments208 = array();
$arguments208['each'] = NULL;
$arguments208['as'] = NULL;
$arguments208['key'] = NULL;
$arguments208['reverse'] = false;
$arguments208['iteration'] = NULL;
$array210 = array (
);$arguments208['each'] = $renderingContext->getVariableProvider()->getByPath('redirects', $array210);
$arguments208['key'] = 'domainName';
$arguments208['as'] = 'redirect';

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output188 .= '
            </tbody>
        </table>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['section'] = NULL;
$arguments513['partial'] = NULL;
$arguments513['delegate'] = NULL;
$arguments513['renderable'] = NULL;
$arguments513['arguments'] = array (
);
$arguments513['optional'] = false;
$arguments513['default'] = NULL;
$arguments513['contentAs'] = NULL;
$arguments513['debug'] = true;
$arguments513['partial'] = 'Pagination';
$arguments513['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output188 .= '
';

return $output188;
}
/**
 * section filter
 */
public function section_4bb4ca75941b7bbc5bc6a12be44b22fc9c8d234e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output516 = '';

$output516 .= '
    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments517 = array();
$arguments517['route'] = NULL;
$arguments517['parameters'] = array (
);
$arguments517['referenceType'] = 'absolute';
$arguments517['route'] = 'site_redirects';
// Rendering Array
$array519 = array();
$array519['action'] = 'overview';
$arguments517['parameters'] = $array519;

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext)]);

$output516 .= '"
        method="post"
        enctype="multipart/form-data"
        name="demand"
        class="form-inline form-inline-spaced">

        <div class="form-group">
            <label for="demand-source-host">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['key'] = NULL;
$arguments520['id'] = NULL;
$arguments520['default'] = NULL;
$arguments520['arguments'] = NULL;
$arguments520['extensionName'] = NULL;
$arguments520['languageKey'] = NULL;
$arguments520['alternativeLanguageKeys'] = NULL;
$arguments520['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host';

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext)]);

$output516 .= '</label>
            <select id="demand-source-host" class="form-control input-sm" name="demand[source_host]" data-on-change="submit">
                <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['key'] = NULL;
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$arguments522['languageKey'] = NULL;
$arguments522['alternativeLanguageKeys'] = NULL;
$arguments522['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll';

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext)]);

$output516 .= '</option>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output527 = '';

$output527 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
$array535 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('host.name', $array535)]);
};
$arguments528 = array();
$arguments528['class'] = NULL;
$arguments528['dir'] = NULL;
$arguments528['id'] = NULL;
$arguments528['lang'] = NULL;
$arguments528['style'] = NULL;
$arguments528['title'] = NULL;
$arguments528['accesskey'] = NULL;
$arguments528['tabindex'] = NULL;
$arguments528['onclick'] = NULL;
$arguments528['selected'] = NULL;
$arguments528['additionalAttributes'] = NULL;
$arguments528['data'] = NULL;
$arguments528['value'] = NULL;
$array530 = array (
);$arguments528['value'] = $renderingContext->getVariableProvider()->getByPath('host.name', $array530);
// Rendering Boolean node
// Rendering Array
$array531 = array();
$array532 = array (
);$array531['0'] = $renderingContext->getVariableProvider()->getByPath('host.name', $array532);
$array531['1'] = ' === ';
$array533 = array (
);$array531['2'] = $renderingContext->getVariableProvider()->getByPath('demand.sourceHost', $array533);

$expression534 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments528['selected'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array531)
					),
					$renderingContext
				);

$output527 .= TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);

$output527 .= '
                ';
return $output527;
};
$arguments524 = array();
$arguments524['each'] = NULL;
$arguments524['as'] = NULL;
$arguments524['key'] = NULL;
$arguments524['reverse'] = false;
$arguments524['iteration'] = NULL;
$array526 = array (
);$arguments524['each'] = $renderingContext->getVariableProvider()->getByPath('hosts', $array526);
$arguments524['as'] = 'host';

$output516 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output516 .= '
            </select>
        </div>
        <div class="form-group">
            <label for="demand-source-path">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['key'] = NULL;
$arguments536['id'] = NULL;
$arguments536['default'] = NULL;
$arguments536['arguments'] = NULL;
$arguments536['extensionName'] = NULL;
$arguments536['languageKey'] = NULL;
$arguments536['alternativeLanguageKeys'] = NULL;
$arguments536['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path';

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext)]);

$output516 .= '</label>
            <input type="text" id="demand-source-path" class="form-control input-sm" name="demand[source_path]" value="';
$array538 = array (
);
$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.sourcePath', $array538)]);

$output516 .= '"/>
        </div>
        <div class="form-group">
            <label for="demand-target">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments539 = array();
$arguments539['key'] = NULL;
$arguments539['id'] = NULL;
$arguments539['default'] = NULL;
$arguments539['arguments'] = NULL;
$arguments539['extensionName'] = NULL;
$arguments539['languageKey'] = NULL;
$arguments539['alternativeLanguageKeys'] = NULL;
$arguments539['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.destination';

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext)]);

$output516 .= '</label>
            <input type="text" id="demand-target" class="form-control input-sm" name="demand[target]" value="';
$array541 = array (
);
$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.target', $array541)]);

$output516 .= '"/>
        </div>
        <div class="form-group">
            <label for="demand-target-status-code">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['key'] = NULL;
$arguments542['id'] = NULL;
$arguments542['default'] = NULL;
$arguments542['arguments'] = NULL;
$arguments542['extensionName'] = NULL;
$arguments542['languageKey'] = NULL;
$arguments542['alternativeLanguageKeys'] = NULL;
$arguments542['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.targetStatusCode';

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext)]);

$output516 .= '</label>
            <select id="demand-target-status-code" class="form-control input-sm" name="demand[target_statuscode]" data-on-change="submit">
                <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['key'] = NULL;
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$arguments544['languageKey'] = NULL;
$arguments544['alternativeLanguageKeys'] = NULL;
$arguments544['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll';

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output516 .= '</option>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output549 = '';

$output549 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$array557 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusCode.code', $array557)]);
};
$arguments550 = array();
$arguments550['class'] = NULL;
$arguments550['dir'] = NULL;
$arguments550['id'] = NULL;
$arguments550['lang'] = NULL;
$arguments550['style'] = NULL;
$arguments550['title'] = NULL;
$arguments550['accesskey'] = NULL;
$arguments550['tabindex'] = NULL;
$arguments550['onclick'] = NULL;
$arguments550['selected'] = NULL;
$arguments550['additionalAttributes'] = NULL;
$arguments550['data'] = NULL;
$arguments550['value'] = NULL;
$array552 = array (
);$arguments550['value'] = $renderingContext->getVariableProvider()->getByPath('statusCode.code', $array552);
// Rendering Boolean node
// Rendering Array
$array553 = array();
$array554 = array (
);$array553['0'] = $renderingContext->getVariableProvider()->getByPath('statusCode.code', $array554);
$array553['1'] = ' === ';
$array555 = array (
);$array553['2'] = $renderingContext->getVariableProvider()->getByPath('demand.statusCode', $array555);

$expression556 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments550['selected'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression556(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array553)
					),
					$renderingContext
				);

$output549 .= TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output549 .= '
                ';
return $output549;
};
$arguments546 = array();
$arguments546['each'] = NULL;
$arguments546['as'] = NULL;
$arguments546['key'] = NULL;
$arguments546['reverse'] = false;
$arguments546['iteration'] = NULL;
$array548 = array (
);$arguments546['each'] = $renderingContext->getVariableProvider()->getByPath('statusCodes', $array548);
$arguments546['as'] = 'statusCode';

$output516 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext);

$output516 .= '
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['key'] = NULL;
$arguments558['id'] = NULL;
$arguments558['default'] = NULL;
$arguments558['arguments'] = NULL;
$arguments558['extensionName'] = NULL;
$arguments558['languageKey'] = NULL;
$arguments558['alternativeLanguageKeys'] = NULL;
$arguments558['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.sendButton';

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext)]);

$output516 .= '" class="btn btn-default btn-sm" />
        </div>
    </form>
';

return $output516;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output560 = '';

$output560 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments561 = array();
$arguments561['name'] = NULL;
$arguments561['name'] = 'RedirectAdministration';

$output560 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output560 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$output565 = '';

$output565 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['key'] = NULL;
$arguments566['id'] = NULL;
$arguments566['default'] = NULL;
$arguments566['arguments'] = NULL;
$arguments566['extensionName'] = NULL;
$arguments566['languageKey'] = NULL;
$arguments566['alternativeLanguageKeys'] = NULL;
$arguments566['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:heading_text';

$output565 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext)]);

$output565 .= '</h1>
';
return $output565;
};
$arguments563 = array();
$arguments563['name'] = NULL;
$arguments563['name'] = 'headline';

$output560 .= NULL;

$output560 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output570 = '';

$output570 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
$output664 = '';

$output664 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
$output667 = '';

$output667 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments668 = array();
$arguments668['section'] = NULL;
$arguments668['partial'] = NULL;
$arguments668['delegate'] = NULL;
$arguments668['renderable'] = NULL;
$arguments668['arguments'] = array (
);
$arguments668['optional'] = false;
$arguments668['default'] = NULL;
$arguments668['contentAs'] = NULL;
$arguments668['debug'] = true;
$arguments668['section'] = 'filter';
$arguments668['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output667 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext);

$output667 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['section'] = NULL;
$arguments671['partial'] = NULL;
$arguments671['delegate'] = NULL;
$arguments671['renderable'] = NULL;
$arguments671['arguments'] = array (
);
$arguments671['optional'] = false;
$arguments671['default'] = NULL;
$arguments671['contentAs'] = NULL;
$arguments671['debug'] = true;
$arguments671['section'] = 'table';
$arguments671['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output667 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);

$output667 .= '
        ';
return $output667;
};
$arguments665 = array();

$output664 .= '';

$output664 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
$output676 = '';

$output676 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
$output716 = '';

$output716 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
$output719 = '';

$output719 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure721 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments720 = array();
$arguments720['section'] = NULL;
$arguments720['partial'] = NULL;
$arguments720['delegate'] = NULL;
$arguments720['renderable'] = NULL;
$arguments720['arguments'] = array (
);
$arguments720['optional'] = false;
$arguments720['default'] = NULL;
$arguments720['contentAs'] = NULL;
$arguments720['debug'] = true;
$arguments720['section'] = 'filter';
$arguments720['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output719 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments720, $renderChildrenClosure721, $renderingContext);

$output719 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
$output727 = '';

$output727 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments728 = array();
$arguments728['key'] = NULL;
$arguments728['id'] = NULL;
$arguments728['default'] = NULL;
$arguments728['arguments'] = NULL;
$arguments728['extensionName'] = NULL;
$arguments728['languageKey'] = NULL;
$arguments728['alternativeLanguageKeys'] = NULL;
$arguments728['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output727 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext)]);

$output727 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments730 = array();
$arguments730['route'] = NULL;
$arguments730['parameters'] = array (
);
$arguments730['referenceType'] = 'absolute';
$arguments730['route'] = 'site_redirects';
// Rendering Array
$array732 = array();
$array732['action'] = 'overview';
$arguments730['parameters'] = $array732;

$output727 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments730, $renderChildrenClosure731, $renderingContext)]);

$output727 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments733 = array();
$arguments733['key'] = NULL;
$arguments733['id'] = NULL;
$arguments733['default'] = NULL;
$arguments733['arguments'] = NULL;
$arguments733['extensionName'] = NULL;
$arguments733['languageKey'] = NULL;
$arguments733['alternativeLanguageKeys'] = NULL;
$arguments733['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output727 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext)]);

$output727 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
$output737 = '';

$output737 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments738 = array();
$arguments738['key'] = NULL;
$arguments738['id'] = NULL;
$arguments738['default'] = NULL;
$arguments738['arguments'] = NULL;
$arguments738['extensionName'] = NULL;
$arguments738['languageKey'] = NULL;
$arguments738['alternativeLanguageKeys'] = NULL;
$arguments738['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output737 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext)]);

$output737 .= '
                        ';
return $output737;
};
$arguments735 = array();
$arguments735['additionalAttributes'] = NULL;
$arguments735['data'] = NULL;
$arguments735['class'] = NULL;
$arguments735['dir'] = NULL;
$arguments735['id'] = NULL;
$arguments735['lang'] = NULL;
$arguments735['style'] = NULL;
$arguments735['title'] = NULL;
$arguments735['accesskey'] = NULL;
$arguments735['tabindex'] = NULL;
$arguments735['onclick'] = NULL;
$arguments735['uid'] = NULL;
$arguments735['pid'] = NULL;
$arguments735['table'] = NULL;
$arguments735['returnUrl'] = '';
$arguments735['class'] = 'btn btn-primary';
$arguments735['table'] = 'sys_redirect';

$output727 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);

$output727 .= '
                    ';
return $output727;
};
$arguments723 = array();
$arguments723['message'] = NULL;
$arguments723['title'] = NULL;
$arguments723['state'] = -2;
$arguments723['iconName'] = NULL;
$arguments723['disableIcon'] = false;
$arguments723['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure726 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments725 = array();
$arguments725['key'] = NULL;
$arguments725['id'] = NULL;
$arguments725['default'] = NULL;
$arguments725['arguments'] = NULL;
$arguments725['extensionName'] = NULL;
$arguments725['languageKey'] = NULL;
$arguments725['alternativeLanguageKeys'] = NULL;
$arguments725['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments723['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments725, $renderChildrenClosure726, $renderingContext);
$renderChildrenClosure724 = ($arguments723['message'] !== null) ? function() use ($arguments723) { return $arguments723['message']; } : $renderChildrenClosure724;
$output719 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext);

$output719 .= '
                ';
return $output719;
};
$arguments717 = array();

$output716 .= '';

$output716 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output747 = '';

$output747 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure749 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments748 = array();
$arguments748['key'] = NULL;
$arguments748['id'] = NULL;
$arguments748['default'] = NULL;
$arguments748['arguments'] = NULL;
$arguments748['extensionName'] = NULL;
$arguments748['languageKey'] = NULL;
$arguments748['alternativeLanguageKeys'] = NULL;
$arguments748['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output747 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments748, $renderChildrenClosure749, $renderingContext)]);

$output747 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
$output752 = '';

$output752 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments753 = array();
$arguments753['key'] = NULL;
$arguments753['id'] = NULL;
$arguments753['default'] = NULL;
$arguments753['arguments'] = NULL;
$arguments753['extensionName'] = NULL;
$arguments753['languageKey'] = NULL;
$arguments753['alternativeLanguageKeys'] = NULL;
$arguments753['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output752 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments753, $renderChildrenClosure754, $renderingContext)]);

$output752 .= '
                        ';
return $output752;
};
$arguments750 = array();
$arguments750['additionalAttributes'] = NULL;
$arguments750['data'] = NULL;
$arguments750['class'] = NULL;
$arguments750['dir'] = NULL;
$arguments750['id'] = NULL;
$arguments750['lang'] = NULL;
$arguments750['style'] = NULL;
$arguments750['title'] = NULL;
$arguments750['accesskey'] = NULL;
$arguments750['tabindex'] = NULL;
$arguments750['onclick'] = NULL;
$arguments750['uid'] = NULL;
$arguments750['pid'] = NULL;
$arguments750['table'] = NULL;
$arguments750['returnUrl'] = '';
$arguments750['class'] = 'btn btn-primary';
$arguments750['table'] = 'sys_redirect';

$output747 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext);

$output747 .= '
                    ';
return $output747;
};
$arguments743 = array();
$arguments743['message'] = NULL;
$arguments743['title'] = NULL;
$arguments743['state'] = -2;
$arguments743['iconName'] = NULL;
$arguments743['disableIcon'] = false;
$arguments743['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure746 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments745 = array();
$arguments745['key'] = NULL;
$arguments745['id'] = NULL;
$arguments745['default'] = NULL;
$arguments745['arguments'] = NULL;
$arguments745['extensionName'] = NULL;
$arguments745['languageKey'] = NULL;
$arguments745['alternativeLanguageKeys'] = NULL;
$arguments745['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments743['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments745, $renderChildrenClosure746, $renderingContext);
$renderChildrenClosure744 = ($arguments743['message'] !== null) ? function() use ($arguments743) { return $arguments743['message']; } : $renderChildrenClosure744;
$output742 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext);

$output742 .= '
                ';
return $output742;
};
$arguments740 = array();
$arguments740['if'] = NULL;

$output716 .= '';

$output716 .= '
            ';
return $output716;
};
$arguments677 = array();
$arguments677['then'] = NULL;
$arguments677['else'] = NULL;
$arguments677['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array713 = array();
$array714 = array (
);$array713['0'] = $renderingContext->getVariableProvider()->getByPath('demand.constraints', $array714);

$expression715 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments677['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression715(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array713)
					),
					$renderingContext
				);
$arguments677['__thenClosure'] = function() use ($renderingContext, $self) {
$output679 = '';

$output679 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments680 = array();
$arguments680['section'] = NULL;
$arguments680['partial'] = NULL;
$arguments680['delegate'] = NULL;
$arguments680['renderable'] = NULL;
$arguments680['arguments'] = array (
);
$arguments680['optional'] = false;
$arguments680['default'] = NULL;
$arguments680['contentAs'] = NULL;
$arguments680['debug'] = true;
$arguments680['section'] = 'filter';
$arguments680['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output679 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output679 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
$output687 = '';

$output687 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments688 = array();
$arguments688['key'] = NULL;
$arguments688['id'] = NULL;
$arguments688['default'] = NULL;
$arguments688['arguments'] = NULL;
$arguments688['extensionName'] = NULL;
$arguments688['languageKey'] = NULL;
$arguments688['alternativeLanguageKeys'] = NULL;
$arguments688['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output687 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext)]);

$output687 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments690 = array();
$arguments690['route'] = NULL;
$arguments690['parameters'] = array (
);
$arguments690['referenceType'] = 'absolute';
$arguments690['route'] = 'site_redirects';
// Rendering Array
$array692 = array();
$array692['action'] = 'overview';
$arguments690['parameters'] = $array692;

$output687 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext)]);

$output687 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments693 = array();
$arguments693['key'] = NULL;
$arguments693['id'] = NULL;
$arguments693['default'] = NULL;
$arguments693['arguments'] = NULL;
$arguments693['extensionName'] = NULL;
$arguments693['languageKey'] = NULL;
$arguments693['alternativeLanguageKeys'] = NULL;
$arguments693['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output687 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext)]);

$output687 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
$output697 = '';

$output697 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments698 = array();
$arguments698['key'] = NULL;
$arguments698['id'] = NULL;
$arguments698['default'] = NULL;
$arguments698['arguments'] = NULL;
$arguments698['extensionName'] = NULL;
$arguments698['languageKey'] = NULL;
$arguments698['alternativeLanguageKeys'] = NULL;
$arguments698['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output697 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments698, $renderChildrenClosure699, $renderingContext)]);

$output697 .= '
                        ';
return $output697;
};
$arguments695 = array();
$arguments695['additionalAttributes'] = NULL;
$arguments695['data'] = NULL;
$arguments695['class'] = NULL;
$arguments695['dir'] = NULL;
$arguments695['id'] = NULL;
$arguments695['lang'] = NULL;
$arguments695['style'] = NULL;
$arguments695['title'] = NULL;
$arguments695['accesskey'] = NULL;
$arguments695['tabindex'] = NULL;
$arguments695['onclick'] = NULL;
$arguments695['uid'] = NULL;
$arguments695['pid'] = NULL;
$arguments695['table'] = NULL;
$arguments695['returnUrl'] = '';
$arguments695['class'] = 'btn btn-primary';
$arguments695['table'] = 'sys_redirect';

$output687 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output687 .= '
                    ';
return $output687;
};
$arguments683 = array();
$arguments683['message'] = NULL;
$arguments683['title'] = NULL;
$arguments683['state'] = -2;
$arguments683['iconName'] = NULL;
$arguments683['disableIcon'] = false;
$arguments683['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments685 = array();
$arguments685['key'] = NULL;
$arguments685['id'] = NULL;
$arguments685['default'] = NULL;
$arguments685['arguments'] = NULL;
$arguments685['extensionName'] = NULL;
$arguments685['languageKey'] = NULL;
$arguments685['alternativeLanguageKeys'] = NULL;
$arguments685['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments683['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);
$renderChildrenClosure684 = ($arguments683['message'] !== null) ? function() use ($arguments683) { return $arguments683['message']; } : $renderChildrenClosure684;
$output679 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext);

$output679 .= '
                ';
return $output679;
};
$arguments677['__elseClosures'][] = function() use ($renderingContext, $self) {
$output700 = '';

$output700 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
$output705 = '';

$output705 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments706 = array();
$arguments706['key'] = NULL;
$arguments706['id'] = NULL;
$arguments706['default'] = NULL;
$arguments706['arguments'] = NULL;
$arguments706['extensionName'] = NULL;
$arguments706['languageKey'] = NULL;
$arguments706['alternativeLanguageKeys'] = NULL;
$arguments706['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output705 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext)]);

$output705 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$output710 = '';

$output710 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments711 = array();
$arguments711['key'] = NULL;
$arguments711['id'] = NULL;
$arguments711['default'] = NULL;
$arguments711['arguments'] = NULL;
$arguments711['extensionName'] = NULL;
$arguments711['languageKey'] = NULL;
$arguments711['alternativeLanguageKeys'] = NULL;
$arguments711['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output710 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext)]);

$output710 .= '
                        ';
return $output710;
};
$arguments708 = array();
$arguments708['additionalAttributes'] = NULL;
$arguments708['data'] = NULL;
$arguments708['class'] = NULL;
$arguments708['dir'] = NULL;
$arguments708['id'] = NULL;
$arguments708['lang'] = NULL;
$arguments708['style'] = NULL;
$arguments708['title'] = NULL;
$arguments708['accesskey'] = NULL;
$arguments708['tabindex'] = NULL;
$arguments708['onclick'] = NULL;
$arguments708['uid'] = NULL;
$arguments708['pid'] = NULL;
$arguments708['table'] = NULL;
$arguments708['returnUrl'] = '';
$arguments708['class'] = 'btn btn-primary';
$arguments708['table'] = 'sys_redirect';

$output705 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);

$output705 .= '
                    ';
return $output705;
};
$arguments701 = array();
$arguments701['message'] = NULL;
$arguments701['title'] = NULL;
$arguments701['state'] = -2;
$arguments701['iconName'] = NULL;
$arguments701['disableIcon'] = false;
$arguments701['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure704 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments703 = array();
$arguments703['key'] = NULL;
$arguments703['id'] = NULL;
$arguments703['default'] = NULL;
$arguments703['arguments'] = NULL;
$arguments703['extensionName'] = NULL;
$arguments703['languageKey'] = NULL;
$arguments703['alternativeLanguageKeys'] = NULL;
$arguments703['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments701['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments703, $renderChildrenClosure704, $renderingContext);
$renderChildrenClosure702 = ($arguments701['message'] !== null) ? function() use ($arguments701) { return $arguments701['message']; } : $renderChildrenClosure702;
$output700 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext);

$output700 .= '
                ';
return $output700;
};

$output676 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext);

$output676 .= '
        ';
return $output676;
};
$arguments674 = array();
$arguments674['if'] = NULL;

$output664 .= '';

$output664 .= '
    ';
return $output664;
};
$arguments571 = array();
$arguments571['then'] = NULL;
$arguments571['else'] = NULL;
$arguments571['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array659 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$array662 = array (
);return $renderingContext->getVariableProvider()->getByPath('redirects', $array662);
};
$arguments660 = array();
$arguments660['subject'] = NULL;
$renderChildrenClosure661 = ($arguments660['subject'] !== null) ? function() use ($arguments660) { return $arguments660['subject']; } : $renderChildrenClosure661;$array659['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$expression663 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments571['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression663(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array659)
					),
					$renderingContext
				);
$arguments571['__thenClosure'] = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['section'] = NULL;
$arguments574['partial'] = NULL;
$arguments574['delegate'] = NULL;
$arguments574['renderable'] = NULL;
$arguments574['arguments'] = array (
);
$arguments574['optional'] = false;
$arguments574['default'] = NULL;
$arguments574['contentAs'] = NULL;
$arguments574['debug'] = true;
$arguments574['section'] = 'filter';
$arguments574['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output573 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);

$output573 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['section'] = NULL;
$arguments577['partial'] = NULL;
$arguments577['delegate'] = NULL;
$arguments577['renderable'] = NULL;
$arguments577['arguments'] = array (
);
$arguments577['optional'] = false;
$arguments577['default'] = NULL;
$arguments577['contentAs'] = NULL;
$arguments577['debug'] = true;
$arguments577['section'] = 'table';
$arguments577['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output573 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);

$output573 .= '
        ';
return $output573;
};
$arguments571['__elseClosures'][] = function() use ($renderingContext, $self) {
$output580 = '';

$output580 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$output623 = '';

$output623 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['section'] = NULL;
$arguments624['partial'] = NULL;
$arguments624['delegate'] = NULL;
$arguments624['renderable'] = NULL;
$arguments624['arguments'] = array (
);
$arguments624['optional'] = false;
$arguments624['default'] = NULL;
$arguments624['contentAs'] = NULL;
$arguments624['debug'] = true;
$arguments624['section'] = 'filter';
$arguments624['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output623 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);

$output623 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
$output631 = '';

$output631 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments632 = array();
$arguments632['key'] = NULL;
$arguments632['id'] = NULL;
$arguments632['default'] = NULL;
$arguments632['arguments'] = NULL;
$arguments632['extensionName'] = NULL;
$arguments632['languageKey'] = NULL;
$arguments632['alternativeLanguageKeys'] = NULL;
$arguments632['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output631 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext)]);

$output631 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments634 = array();
$arguments634['route'] = NULL;
$arguments634['parameters'] = array (
);
$arguments634['referenceType'] = 'absolute';
$arguments634['route'] = 'site_redirects';
// Rendering Array
$array636 = array();
$array636['action'] = 'overview';
$arguments634['parameters'] = $array636;

$output631 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext)]);

$output631 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['key'] = NULL;
$arguments637['id'] = NULL;
$arguments637['default'] = NULL;
$arguments637['arguments'] = NULL;
$arguments637['extensionName'] = NULL;
$arguments637['languageKey'] = NULL;
$arguments637['alternativeLanguageKeys'] = NULL;
$arguments637['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output631 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext)]);

$output631 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
$output641 = '';

$output641 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments642 = array();
$arguments642['key'] = NULL;
$arguments642['id'] = NULL;
$arguments642['default'] = NULL;
$arguments642['arguments'] = NULL;
$arguments642['extensionName'] = NULL;
$arguments642['languageKey'] = NULL;
$arguments642['alternativeLanguageKeys'] = NULL;
$arguments642['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output641 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext)]);

$output641 .= '
                        ';
return $output641;
};
$arguments639 = array();
$arguments639['additionalAttributes'] = NULL;
$arguments639['data'] = NULL;
$arguments639['class'] = NULL;
$arguments639['dir'] = NULL;
$arguments639['id'] = NULL;
$arguments639['lang'] = NULL;
$arguments639['style'] = NULL;
$arguments639['title'] = NULL;
$arguments639['accesskey'] = NULL;
$arguments639['tabindex'] = NULL;
$arguments639['onclick'] = NULL;
$arguments639['uid'] = NULL;
$arguments639['pid'] = NULL;
$arguments639['table'] = NULL;
$arguments639['returnUrl'] = '';
$arguments639['class'] = 'btn btn-primary';
$arguments639['table'] = 'sys_redirect';

$output631 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output631 .= '
                    ';
return $output631;
};
$arguments627 = array();
$arguments627['message'] = NULL;
$arguments627['title'] = NULL;
$arguments627['state'] = -2;
$arguments627['iconName'] = NULL;
$arguments627['disableIcon'] = false;
$arguments627['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments629 = array();
$arguments629['key'] = NULL;
$arguments629['id'] = NULL;
$arguments629['default'] = NULL;
$arguments629['arguments'] = NULL;
$arguments629['extensionName'] = NULL;
$arguments629['languageKey'] = NULL;
$arguments629['alternativeLanguageKeys'] = NULL;
$arguments629['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments627['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);
$renderChildrenClosure628 = ($arguments627['message'] !== null) ? function() use ($arguments627) { return $arguments627['message']; } : $renderChildrenClosure628;
$output623 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext);

$output623 .= '
                ';
return $output623;
};
$arguments621 = array();

$output620 .= '';

$output620 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure645 = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
$output651 = '';

$output651 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments652 = array();
$arguments652['key'] = NULL;
$arguments652['id'] = NULL;
$arguments652['default'] = NULL;
$arguments652['arguments'] = NULL;
$arguments652['extensionName'] = NULL;
$arguments652['languageKey'] = NULL;
$arguments652['alternativeLanguageKeys'] = NULL;
$arguments652['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output651 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext)]);

$output651 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['key'] = NULL;
$arguments657['id'] = NULL;
$arguments657['default'] = NULL;
$arguments657['arguments'] = NULL;
$arguments657['extensionName'] = NULL;
$arguments657['languageKey'] = NULL;
$arguments657['alternativeLanguageKeys'] = NULL;
$arguments657['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext)]);

$output656 .= '
                        ';
return $output656;
};
$arguments654 = array();
$arguments654['additionalAttributes'] = NULL;
$arguments654['data'] = NULL;
$arguments654['class'] = NULL;
$arguments654['dir'] = NULL;
$arguments654['id'] = NULL;
$arguments654['lang'] = NULL;
$arguments654['style'] = NULL;
$arguments654['title'] = NULL;
$arguments654['accesskey'] = NULL;
$arguments654['tabindex'] = NULL;
$arguments654['onclick'] = NULL;
$arguments654['uid'] = NULL;
$arguments654['pid'] = NULL;
$arguments654['table'] = NULL;
$arguments654['returnUrl'] = '';
$arguments654['class'] = 'btn btn-primary';
$arguments654['table'] = 'sys_redirect';

$output651 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output651 .= '
                    ';
return $output651;
};
$arguments647 = array();
$arguments647['message'] = NULL;
$arguments647['title'] = NULL;
$arguments647['state'] = -2;
$arguments647['iconName'] = NULL;
$arguments647['disableIcon'] = false;
$arguments647['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments649 = array();
$arguments649['key'] = NULL;
$arguments649['id'] = NULL;
$arguments649['default'] = NULL;
$arguments649['arguments'] = NULL;
$arguments649['extensionName'] = NULL;
$arguments649['languageKey'] = NULL;
$arguments649['alternativeLanguageKeys'] = NULL;
$arguments649['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments647['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);
$renderChildrenClosure648 = ($arguments647['message'] !== null) ? function() use ($arguments647) { return $arguments647['message']; } : $renderChildrenClosure648;
$output646 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext);

$output646 .= '
                ';
return $output646;
};
$arguments644 = array();
$arguments644['if'] = NULL;

$output620 .= '';

$output620 .= '
            ';
return $output620;
};
$arguments581 = array();
$arguments581['then'] = NULL;
$arguments581['else'] = NULL;
$arguments581['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array617 = array();
$array618 = array (
);$array617['0'] = $renderingContext->getVariableProvider()->getByPath('demand.constraints', $array618);

$expression619 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments581['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression619(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array617)
					),
					$renderingContext
				);
$arguments581['__thenClosure'] = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments584 = array();
$arguments584['section'] = NULL;
$arguments584['partial'] = NULL;
$arguments584['delegate'] = NULL;
$arguments584['renderable'] = NULL;
$arguments584['arguments'] = array (
);
$arguments584['optional'] = false;
$arguments584['default'] = NULL;
$arguments584['contentAs'] = NULL;
$arguments584['debug'] = true;
$arguments584['section'] = 'filter';
$arguments584['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output583 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output583 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['key'] = NULL;
$arguments592['id'] = NULL;
$arguments592['default'] = NULL;
$arguments592['arguments'] = NULL;
$arguments592['extensionName'] = NULL;
$arguments592['languageKey'] = NULL;
$arguments592['alternativeLanguageKeys'] = NULL;
$arguments592['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output591 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments594 = array();
$arguments594['route'] = NULL;
$arguments594['parameters'] = array (
);
$arguments594['referenceType'] = 'absolute';
$arguments594['route'] = 'site_redirects';
// Rendering Array
$array596 = array();
$array596['action'] = 'overview';
$arguments594['parameters'] = $array596;

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext)]);

$output591 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments597 = array();
$arguments597['key'] = NULL;
$arguments597['id'] = NULL;
$arguments597['default'] = NULL;
$arguments597['arguments'] = NULL;
$arguments597['extensionName'] = NULL;
$arguments597['languageKey'] = NULL;
$arguments597['alternativeLanguageKeys'] = NULL;
$arguments597['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext)]);

$output591 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
$output601 = '';

$output601 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['key'] = NULL;
$arguments602['id'] = NULL;
$arguments602['default'] = NULL;
$arguments602['arguments'] = NULL;
$arguments602['extensionName'] = NULL;
$arguments602['languageKey'] = NULL;
$arguments602['alternativeLanguageKeys'] = NULL;
$arguments602['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output601 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext)]);

$output601 .= '
                        ';
return $output601;
};
$arguments599 = array();
$arguments599['additionalAttributes'] = NULL;
$arguments599['data'] = NULL;
$arguments599['class'] = NULL;
$arguments599['dir'] = NULL;
$arguments599['id'] = NULL;
$arguments599['lang'] = NULL;
$arguments599['style'] = NULL;
$arguments599['title'] = NULL;
$arguments599['accesskey'] = NULL;
$arguments599['tabindex'] = NULL;
$arguments599['onclick'] = NULL;
$arguments599['uid'] = NULL;
$arguments599['pid'] = NULL;
$arguments599['table'] = NULL;
$arguments599['returnUrl'] = '';
$arguments599['class'] = 'btn btn-primary';
$arguments599['table'] = 'sys_redirect';

$output591 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext);

$output591 .= '
                    ';
return $output591;
};
$arguments587 = array();
$arguments587['message'] = NULL;
$arguments587['title'] = NULL;
$arguments587['state'] = -2;
$arguments587['iconName'] = NULL;
$arguments587['disableIcon'] = false;
$arguments587['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments589 = array();
$arguments589['key'] = NULL;
$arguments589['id'] = NULL;
$arguments589['default'] = NULL;
$arguments589['arguments'] = NULL;
$arguments589['extensionName'] = NULL;
$arguments589['languageKey'] = NULL;
$arguments589['alternativeLanguageKeys'] = NULL;
$arguments589['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments587['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext);
$renderChildrenClosure588 = ($arguments587['message'] !== null) ? function() use ($arguments587) { return $arguments587['message']; } : $renderChildrenClosure588;
$output583 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output583 .= '
                ';
return $output583;
};
$arguments581['__elseClosures'][] = function() use ($renderingContext, $self) {
$output604 = '';

$output604 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
$output609 = '';

$output609 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments610 = array();
$arguments610['key'] = NULL;
$arguments610['id'] = NULL;
$arguments610['default'] = NULL;
$arguments610['arguments'] = NULL;
$arguments610['extensionName'] = NULL;
$arguments610['languageKey'] = NULL;
$arguments610['alternativeLanguageKeys'] = NULL;
$arguments610['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output609 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext)]);

$output609 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['key'] = NULL;
$arguments615['id'] = NULL;
$arguments615['default'] = NULL;
$arguments615['arguments'] = NULL;
$arguments615['extensionName'] = NULL;
$arguments615['languageKey'] = NULL;
$arguments615['alternativeLanguageKeys'] = NULL;
$arguments615['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output614 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext)]);

$output614 .= '
                        ';
return $output614;
};
$arguments612 = array();
$arguments612['additionalAttributes'] = NULL;
$arguments612['data'] = NULL;
$arguments612['class'] = NULL;
$arguments612['dir'] = NULL;
$arguments612['id'] = NULL;
$arguments612['lang'] = NULL;
$arguments612['style'] = NULL;
$arguments612['title'] = NULL;
$arguments612['accesskey'] = NULL;
$arguments612['tabindex'] = NULL;
$arguments612['onclick'] = NULL;
$arguments612['uid'] = NULL;
$arguments612['pid'] = NULL;
$arguments612['table'] = NULL;
$arguments612['returnUrl'] = '';
$arguments612['class'] = 'btn btn-primary';
$arguments612['table'] = 'sys_redirect';

$output609 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output609 .= '
                    ';
return $output609;
};
$arguments605 = array();
$arguments605['message'] = NULL;
$arguments605['title'] = NULL;
$arguments605['state'] = -2;
$arguments605['iconName'] = NULL;
$arguments605['disableIcon'] = false;
$arguments605['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments607 = array();
$arguments607['key'] = NULL;
$arguments607['id'] = NULL;
$arguments607['default'] = NULL;
$arguments607['arguments'] = NULL;
$arguments607['extensionName'] = NULL;
$arguments607['languageKey'] = NULL;
$arguments607['alternativeLanguageKeys'] = NULL;
$arguments607['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments605['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments607, $renderChildrenClosure608, $renderingContext);
$renderChildrenClosure606 = ($arguments605['message'] !== null) ? function() use ($arguments605) { return $arguments605['message']; } : $renderChildrenClosure606;
$output604 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);

$output604 .= '
                ';
return $output604;
};

$output580 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output580 .= '
        ';
return $output580;
};

$output570 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext);

$output570 .= '
';
return $output570;
};
$arguments568 = array();
$arguments568['name'] = NULL;
$arguments568['name'] = 'content';

$output560 .= NULL;

$output560 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
$output757 = '';

$output757 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure759 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments758 = array();
$arguments758['section'] = NULL;
$arguments758['partial'] = NULL;
$arguments758['delegate'] = NULL;
$arguments758['renderable'] = NULL;
$arguments758['arguments'] = array (
);
$arguments758['optional'] = false;
$arguments758['default'] = NULL;
$arguments758['contentAs'] = NULL;
$arguments758['debug'] = true;
$arguments758['partial'] = 'Pagination';
$arguments758['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output757 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments758, $renderChildrenClosure759, $renderingContext);

$output757 .= '
    <div class="table-fit">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure762 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments761 = array();
$arguments761['key'] = NULL;
$arguments761['id'] = NULL;
$arguments761['default'] = NULL;
$arguments761['arguments'] = NULL;
$arguments761['extensionName'] = NULL;
$arguments761['languageKey'] = NULL;
$arguments761['alternativeLanguageKeys'] = NULL;
$arguments761['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host';

$output757 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments761, $renderChildrenClosure762, $renderingContext)]);

$output757 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure764 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments763 = array();
$arguments763['key'] = NULL;
$arguments763['id'] = NULL;
$arguments763['default'] = NULL;
$arguments763['arguments'] = NULL;
$arguments763['extensionName'] = NULL;
$arguments763['languageKey'] = NULL;
$arguments763['alternativeLanguageKeys'] = NULL;
$arguments763['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path';

$output757 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments763, $renderChildrenClosure764, $renderingContext)]);

$output757 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments765 = array();
$arguments765['key'] = NULL;
$arguments765['id'] = NULL;
$arguments765['default'] = NULL;
$arguments765['arguments'] = NULL;
$arguments765['extensionName'] = NULL;
$arguments765['languageKey'] = NULL;
$arguments765['alternativeLanguageKeys'] = NULL;
$arguments765['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination';

$output757 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext)]);

$output757 .= '</th>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
$output772 = '';

$output772 .= '
                        <th># ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure774 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments773 = array();
$arguments773['key'] = NULL;
$arguments773['id'] = NULL;
$arguments773['default'] = NULL;
$arguments773['arguments'] = NULL;
$arguments773['extensionName'] = NULL;
$arguments773['languageKey'] = NULL;
$arguments773['alternativeLanguageKeys'] = NULL;
$arguments773['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hits';

$output772 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments773, $renderChildrenClosure774, $renderingContext)]);

$output772 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure776 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments775 = array();
$arguments775['key'] = NULL;
$arguments775['id'] = NULL;
$arguments775['default'] = NULL;
$arguments775['arguments'] = NULL;
$arguments775['extensionName'] = NULL;
$arguments775['languageKey'] = NULL;
$arguments775['alternativeLanguageKeys'] = NULL;
$arguments775['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last';

$output772 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments775, $renderChildrenClosure776, $renderingContext)]);

$output772 .= '</th>
                    ';
return $output772;
};
$arguments767 = array();
$arguments767['then'] = NULL;
$arguments767['else'] = NULL;
$arguments767['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array769 = array();
$array770 = array (
);$array769['0'] = $renderingContext->getVariableProvider()->getByPath('showHitCounter', $array770);

$expression771 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments767['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression771(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array769)
					),
					$renderingContext
				);
$arguments767['__thenClosure'] = $renderChildrenClosure768;

$output757 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext);

$output757 .= '
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
$output780 = '';

$output780 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure782 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments781 = array();
$arguments781['value'] = NULL;
$arguments781['name'] = NULL;
$arguments781['name'] = 'pageId';
// Rendering ViewHelper TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper
$renderChildrenClosure784 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments783 = array();
$arguments783['target'] = NULL;
$array785 = array (
);$arguments783['target'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array785);
$arguments781['value'] = TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper::renderStatic($arguments783, $renderChildrenClosure784, $renderingContext);
$renderChildrenClosure782 = ($arguments781['value'] !== null) ? function() use ($arguments781) { return $arguments781['value']; } : $renderChildrenClosure782;
$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments781, $renderChildrenClosure782, $renderingContext)]);

$output780 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure787 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments786 = array();
$arguments786['value'] = NULL;
$arguments786['name'] = NULL;
$arguments786['name'] = 'targetUri';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper
$renderChildrenClosure789 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments788 = array();
$arguments788['parameter'] = NULL;
$arguments788['additionalParams'] = '';
$arguments788['language'] = NULL;
$arguments788['useCacheHash'] = NULL;
$arguments788['addQueryString'] = false;
$arguments788['addQueryStringMethod'] = 'GET';
$arguments788['addQueryStringExclude'] = '';
$arguments788['absolute'] = false;
$array790 = array (
);$arguments788['parameter'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array790);
$arguments786['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper::renderStatic($arguments788, $renderChildrenClosure789, $renderingContext);
$renderChildrenClosure787 = ($arguments786['value'] !== null) ? function() use ($arguments786) { return $arguments786['value']; } : $renderChildrenClosure787;
$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments786, $renderChildrenClosure787, $renderingContext)]);

$output780 .= '
                    <tr>
                        <td>';
$array791 = array (
);
$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array791)]);

$output780 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
$output820 = '';

$output820 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
$output846 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure848 = function() use ($renderingContext, $self) {
$output849 = '';

$output849 .= '<span title="';
$array850 = array (
);
$output849 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable', $array850)]);

$output849 .= '">';
return $output849;
};
$arguments847 = array();

$output846 .= '';

$output846 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure852 = function() use ($renderingContext, $self) {
$output857 = '';

$output857 .= '<span title="';
$array858 = array (
);
$output857 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart', $array858)]);

$output857 .= '">';
return $output857;
};
$arguments851 = array();
$arguments851['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array853 = array();
$array854 = array (
);$array853['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array854);
$array853['1'] = ' && !';
$array855 = array (
);$array853['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array855);

$expression856 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};
$arguments851['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression856(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array853)
					),
					$renderingContext
				);

$output846 .= '';

$output846 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure860 = function() use ($renderingContext, $self) {
$output865 = '';

$output865 .= '<span title="';
$array866 = array (
);
$output865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend', $array866)]);

$output865 .= '">';
return $output865;
};
$arguments859 = array();
$arguments859['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array861 = array();
$array861['0'] = '!';
$array862 = array (
);$array861['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array862);
$array861['2'] = ' && ';
$array863 = array (
);$array861['3'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array863);

$expression864 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};
$arguments859['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression864(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array861)
					),
					$renderingContext
				);

$output846 .= '';

$output846 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure868 = function() use ($renderingContext, $self) {
$output873 = '';

$output873 .= '<span title="';
$array874 = array (
);
$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend', $array874)]);

$output873 .= '">';
return $output873;
};
$arguments867 = array();
$arguments867['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array869 = array();
$array870 = array (
);$array869['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array870);
$array869['1'] = ' && ';
$array871 = array (
);$array869['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array871);

$expression872 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments867['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression872(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array869)
					),
					$renderingContext
				);

$output846 .= '';

$output846 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure876 = function() use ($renderingContext, $self) {
return '<span>';
};
$arguments875 = array();
$arguments875['if'] = NULL;

$output846 .= '';

$output846 .= '
                            ';
return $output846;
};
$arguments821 = array();
$arguments821['then'] = NULL;
$arguments821['else'] = NULL;
$arguments821['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array843 = array();
$array844 = array (
);$array843['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.disabled', $array844);

$expression845 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments821['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression845(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array843)
					),
					$renderingContext
				);
$arguments821['__thenClosure'] = function() use ($renderingContext, $self) {
$output823 = '';

$output823 .= '<span title="';
$array824 = array (
);
$output823 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable', $array824)]);

$output823 .= '">';
return $output823;
};
$arguments821['__elseClosures'][] = function() use ($renderingContext, $self) {
$output825 = '';

$output825 .= '<span title="';
$array826 = array (
);
$output825 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart', $array826)]);

$output825 .= '">';
return $output825;
};
$arguments821['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array827 = array();
$array828 = array (
);$array827['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array828);
$array827['1'] = ' && !';
$array829 = array (
);$array827['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array829);

$expression830 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression830(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array827)
					),
					$renderingContext
				);
};
$arguments821['__elseClosures'][] = function() use ($renderingContext, $self) {
$output831 = '';

$output831 .= '<span title="';
$array832 = array (
);
$output831 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend', $array832)]);

$output831 .= '">';
return $output831;
};
$arguments821['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array833 = array();
$array833['0'] = '!';
$array834 = array (
);$array833['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array834);
$array833['2'] = ' && ';
$array835 = array (
);$array833['3'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array835);

$expression836 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression836(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array833)
					),
					$renderingContext
				);
};
$arguments821['__elseClosures'][] = function() use ($renderingContext, $self) {
$output837 = '';

$output837 .= '<span title="';
$array838 = array (
);
$output837 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend', $array838)]);

$output837 .= '">';
return $output837;
};
$arguments821['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array839 = array();
$array840 = array (
);$array839['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array840);
$array839['1'] = ' && ';
$array841 = array (
);$array839['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array841);

$expression842 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression842(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array839)
					),
					$renderingContext
				);
};
$arguments821['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span>';
};

$output820 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments821, $renderChildrenClosure822, $renderingContext);

$output820 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments877 = array();
$arguments877['table'] = NULL;
$arguments877['row'] = NULL;
$arguments877['size'] = 'small';
$arguments877['alternativeMarkupIdentifier'] = NULL;
$arguments877['table'] = 'sys_redirect';
$array879 = array (
);$arguments877['row'] = $renderingContext->getVariableProvider()->getByPath('redirect', $array879);

$output820 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);

$output820 .= '</span>
                            ';
return $output820;
};
$arguments792 = array();
$arguments792['map'] = NULL;
// Rendering Array
$array794 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure796 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments795 = array();
$arguments795['key'] = NULL;
$arguments795['id'] = NULL;
$arguments795['default'] = NULL;
$arguments795['arguments'] = NULL;
$arguments795['extensionName'] = NULL;
$arguments795['languageKey'] = NULL;
$arguments795['alternativeLanguageKeys'] = NULL;
$arguments795['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:record_disabled';
$array794['disable'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments795, $renderChildrenClosure796, $renderingContext);
$output797 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure799 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments798 = array();
$arguments798['key'] = NULL;
$arguments798['id'] = NULL;
$arguments798['default'] = NULL;
$arguments798['arguments'] = NULL;
$arguments798['extensionName'] = NULL;
$arguments798['languageKey'] = NULL;
$arguments798['alternativeLanguageKeys'] = NULL;
$arguments798['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start';

$output797 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments798, $renderChildrenClosure799, $renderingContext);

$output797 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure801 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments800 = array();
$arguments800['date'] = NULL;
$arguments800['format'] = '';
$arguments800['base'] = NULL;
$array802 = array (
);$arguments800['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array802);
$arguments800['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure801 = ($arguments800['date'] !== null) ? function() use ($arguments800) { return $arguments800['date']; } : $renderChildrenClosure801;
$output797 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments800, $renderChildrenClosure801, $renderingContext);
$array794['onlystart'] = $output797;
$output803 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments804 = array();
$arguments804['key'] = NULL;
$arguments804['id'] = NULL;
$arguments804['default'] = NULL;
$arguments804['arguments'] = NULL;
$arguments804['extensionName'] = NULL;
$arguments804['languageKey'] = NULL;
$arguments804['alternativeLanguageKeys'] = NULL;
$arguments804['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output803 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);

$output803 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure807 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments806 = array();
$arguments806['date'] = NULL;
$arguments806['format'] = '';
$arguments806['base'] = NULL;
$array808 = array (
);$arguments806['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array808);
$arguments806['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure807 = ($arguments806['date'] !== null) ? function() use ($arguments806) { return $arguments806['date']; } : $renderChildrenClosure807;
$output803 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments806, $renderChildrenClosure807, $renderingContext);
$array794['onlyend'] = $output803;
$output809 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments810 = array();
$arguments810['key'] = NULL;
$arguments810['id'] = NULL;
$arguments810['default'] = NULL;
$arguments810['arguments'] = NULL;
$arguments810['extensionName'] = NULL;
$arguments810['languageKey'] = NULL;
$arguments810['alternativeLanguageKeys'] = NULL;
$arguments810['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start';

$output809 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments810, $renderChildrenClosure811, $renderingContext);

$output809 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments812 = array();
$arguments812['date'] = NULL;
$arguments812['format'] = '';
$arguments812['base'] = NULL;
$array814 = array (
);$arguments812['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array814);
$arguments812['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure813 = ($arguments812['date'] !== null) ? function() use ($arguments812) { return $arguments812['date']; } : $renderChildrenClosure813;
$output809 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments812, $renderChildrenClosure813, $renderingContext);

$output809 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments815 = array();
$arguments815['key'] = NULL;
$arguments815['id'] = NULL;
$arguments815['default'] = NULL;
$arguments815['arguments'] = NULL;
$arguments815['extensionName'] = NULL;
$arguments815['languageKey'] = NULL;
$arguments815['alternativeLanguageKeys'] = NULL;
$arguments815['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output809 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments815, $renderChildrenClosure816, $renderingContext);

$output809 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure818 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments817 = array();
$arguments817['date'] = NULL;
$arguments817['format'] = '';
$arguments817['base'] = NULL;
$array819 = array (
);$arguments817['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array819);
$arguments817['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure818 = ($arguments817['date'] !== null) ? function() use ($arguments817) { return $arguments817['date']; } : $renderChildrenClosure818;
$output809 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments817, $renderChildrenClosure818, $renderingContext);
$array794['startend'] = $output809;
$arguments792['map'] = $array794;

$output780 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);

$output780 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
$output887 = '';

$output887 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure889 = function() use ($renderingContext, $self) {
$array890 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array890)]);
};
$arguments888 = array();
$arguments888['maxCharacters'] = NULL;
$arguments888['append'] = '&hellip;';
$arguments888['respectWordBoundaries'] = true;
$arguments888['respectHtml'] = true;
$arguments888['maxCharacters'] = 100;

$output887 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments888, $renderChildrenClosure889, $renderingContext);

$output887 .= '
                            ';
return $output887;
};
$arguments880 = array();
$arguments880['additionalAttributes'] = NULL;
$arguments880['data'] = NULL;
$arguments880['class'] = NULL;
$arguments880['dir'] = NULL;
$arguments880['id'] = NULL;
$arguments880['lang'] = NULL;
$arguments880['style'] = NULL;
$arguments880['title'] = NULL;
$arguments880['accesskey'] = NULL;
$arguments880['tabindex'] = NULL;
$arguments880['onclick'] = NULL;
$arguments880['uid'] = NULL;
$arguments880['table'] = NULL;
$arguments880['fields'] = NULL;
$arguments880['returnUrl'] = '';
$arguments880['table'] = 'sys_redirect';
$array882 = array (
);$arguments880['uid'] = $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array882);
$output883 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure885 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments884 = array();
$arguments884['key'] = NULL;
$arguments884['id'] = NULL;
$arguments884['default'] = NULL;
$arguments884['arguments'] = NULL;
$arguments884['extensionName'] = NULL;
$arguments884['languageKey'] = NULL;
$arguments884['alternativeLanguageKeys'] = NULL;
$arguments884['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit';

$output883 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments884, $renderChildrenClosure885, $renderingContext);

$output883 .= ': ';
$array886 = array (
);
$output883 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array886);
$arguments880['title'] = $output883;

$output780 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments880, $renderChildrenClosure881, $renderingContext);

$output780 .= '
                        </td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure892 = function() use ($renderingContext, $self) {
$array898 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('targetUri', $array898)]);
};
$arguments891 = array();
$arguments891['parameter'] = NULL;
$arguments891['target'] = '';
$arguments891['class'] = '';
$arguments891['title'] = '';
$arguments891['language'] = NULL;
$arguments891['additionalParams'] = '';
$arguments891['additionalAttributes'] = array (
);
$arguments891['useCacheHash'] = NULL;
$arguments891['addQueryString'] = false;
$arguments891['addQueryStringMethod'] = 'GET';
$arguments891['addQueryStringExclude'] = '';
$arguments891['absolute'] = false;
$arguments891['parts-as'] = 'typoLinkParts';
$array893 = array (
);$arguments891['parameter'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array893);
$arguments891['target'] = '_blank';
$output894 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure896 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments895 = array();
$arguments895['key'] = NULL;
$arguments895['id'] = NULL;
$arguments895['default'] = NULL;
$arguments895['arguments'] = NULL;
$arguments895['extensionName'] = NULL;
$arguments895['languageKey'] = NULL;
$arguments895['alternativeLanguageKeys'] = NULL;
$arguments895['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:visit_destination';

$output894 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments895, $renderChildrenClosure896, $renderingContext);

$output894 .= ' ';
$array897 = array (
);
$output894 .= $renderingContext->getVariableProvider()->getByPath('targetUri', $array897);
$arguments891['title'] = $output894;

$output780 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments891, $renderChildrenClosure892, $renderingContext);

$output780 .= '
                            (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure900 = function() use ($renderingContext, $self) {
$output904 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure906 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments905 = array();
$arguments905['key'] = NULL;
$arguments905['id'] = NULL;
$arguments905['default'] = NULL;
$arguments905['arguments'] = NULL;
$arguments905['extensionName'] = NULL;
$arguments905['languageKey'] = NULL;
$arguments905['alternativeLanguageKeys'] = NULL;
$arguments905['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:pageID';

$output904 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments905, $renderChildrenClosure906, $renderingContext)]);

$output904 .= ': ';
$array907 = array (
);
$output904 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId', $array907)]);

$output904 .= ',
                            ';
return $output904;
};
$arguments899 = array();
$arguments899['then'] = NULL;
$arguments899['else'] = NULL;
$arguments899['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array901 = array();
$array902 = array (
);$array901['0'] = $renderingContext->getVariableProvider()->getByPath('pageId', $array902);

$expression903 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments899['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression903(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array901)
					),
					$renderingContext
				);
$arguments899['__thenClosure'] = $renderChildrenClosure900;

$output780 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments899, $renderChildrenClosure900, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure909 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments908 = array();
$arguments908['key'] = NULL;
$arguments908['id'] = NULL;
$arguments908['default'] = NULL;
$arguments908['arguments'] = NULL;
$arguments908['extensionName'] = NULL;
$arguments908['languageKey'] = NULL;
$arguments908['alternativeLanguageKeys'] = NULL;
$arguments908['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination_status_code';

$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments908, $renderChildrenClosure909, $renderingContext)]);

$output780 .= ': ';
$array910 = array (
);
$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target_statuscode', $array910)]);

$output780 .= ')</td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure912 = function() use ($renderingContext, $self) {
$output916 = '';

$output916 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
$output922 = '';

$output922 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure924 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments923 = array();
$arguments923['key'] = NULL;
$arguments923['id'] = NULL;
$arguments923['default'] = NULL;
$arguments923['arguments'] = NULL;
$arguments923['extensionName'] = NULL;
$arguments923['languageKey'] = NULL;
$arguments923['alternativeLanguageKeys'] = NULL;
$output925 = '';

$output925 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments926 = array();
$arguments926['then'] = NULL;
$arguments926['else'] = NULL;
$arguments926['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array928 = array();
$array929 = array (
);$array928['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array929);
$array928['1'] = ' > 1';

$expression930 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments926['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression930(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array928)
					),
					$renderingContext
				);
$arguments926['then'] = 's';

$output925 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments926, $renderChildrenClosure927, $renderingContext);

$output925 .= '_text';
$arguments923['key'] = $output925;
// Rendering Array
$array931 = array();
$array932 = array (
);$array931['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array932);
$arguments923['arguments'] = $array931;

$output922 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments923, $renderChildrenClosure924, $renderingContext)]);

$output922 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure934 = function() use ($renderingContext, $self) {
$output938 = '';

$output938 .= '
                                        <a class="t3js-modal-trigger"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure940 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments939 = array();
$arguments939['route'] = NULL;
$arguments939['arguments'] = array (
);
$arguments939['query'] = NULL;
$arguments939['currentUrlParameterName'] = NULL;
$arguments939['route'] = 'tce_db';
$output941 = '';

$output941 .= 'data[sys_redirect][';
$array942 = array (
);
$output941 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array942);

$output941 .= '][hitcount]=0';
$arguments939['query'] = $output941;
$arguments939['currentUrlParameterName'] = 'redirect';

$output938 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments939, $renderChildrenClosure940, $renderingContext)]);

$output938 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure944 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments943 = array();
$arguments943['key'] = NULL;
$arguments943['id'] = NULL;
$arguments943['default'] = NULL;
$arguments943['arguments'] = NULL;
$arguments943['extensionName'] = NULL;
$arguments943['languageKey'] = NULL;
$arguments943['alternativeLanguageKeys'] = NULL;
$arguments943['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset';

$output938 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments943, $renderChildrenClosure944, $renderingContext)]);

$output938 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure946 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments945 = array();
$arguments945['key'] = NULL;
$arguments945['id'] = NULL;
$arguments945['default'] = NULL;
$arguments945['arguments'] = NULL;
$arguments945['extensionName'] = NULL;
$arguments945['languageKey'] = NULL;
$arguments945['alternativeLanguageKeys'] = NULL;
$arguments945['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.title';

$output938 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments945, $renderChildrenClosure946, $renderingContext)]);

$output938 .= '"
                                            data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments947 = array();
$arguments947['key'] = NULL;
$arguments947['id'] = NULL;
$arguments947['default'] = NULL;
$arguments947['arguments'] = NULL;
$arguments947['extensionName'] = NULL;
$arguments947['languageKey'] = NULL;
$arguments947['alternativeLanguageKeys'] = NULL;
$arguments947['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.content';

$output938 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext)]);

$output938 .= '"
                                            data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure950 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments949 = array();
$arguments949['key'] = NULL;
$arguments949['id'] = NULL;
$arguments949['default'] = NULL;
$arguments949['arguments'] = NULL;
$arguments949['extensionName'] = NULL;
$arguments949['languageKey'] = NULL;
$arguments949['alternativeLanguageKeys'] = NULL;
$arguments949['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no';

$output938 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments949, $renderChildrenClosure950, $renderingContext)]);

$output938 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure952 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments951 = array();
$arguments951['identifier'] = NULL;
$arguments951['size'] = 'small';
$arguments951['overlay'] = NULL;
$arguments951['state'] = 'default';
$arguments951['alternativeMarkupIdentifier'] = NULL;
$arguments951['identifier'] = 'actions-edit-restore';

$output938 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments951, $renderChildrenClosure952, $renderingContext);

$output938 .= '</a>
                                    ';
return $output938;
};
$arguments933 = array();
$arguments933['then'] = NULL;
$arguments933['else'] = NULL;
$arguments933['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array935 = array();
$array936 = array (
);$array935['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array936);
$array935['1'] = ' != 0';

$expression937 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 0);};
$arguments933['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression937(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array935)
					),
					$renderingContext
				);
$arguments933['__thenClosure'] = $renderChildrenClosure934;

$output922 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments933, $renderChildrenClosure934, $renderingContext);

$output922 .= '
                                ';
return $output922;
};
$arguments917 = array();
$arguments917['then'] = NULL;
$arguments917['else'] = NULL;
$arguments917['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array919 = array();
$array919['0'] = '!';
$array920 = array (
);$array919['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.disable_hitcount', $array920);

$expression921 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments917['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression921(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array919)
					),
					$renderingContext
				);
$arguments917['__thenClosure'] = $renderChildrenClosure918;

$output916 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext);

$output916 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure954 = function() use ($renderingContext, $self) {
$output964 = '';

$output964 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure966 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure968 = function() use ($renderingContext, $self) {
$output969 = '';

$output969 .= '@';
$array970 = array (
);
$output969 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array970);
return $output969;
};
$arguments967 = array();
$arguments967['date'] = NULL;
$arguments967['format'] = '';
$arguments967['base'] = NULL;
$arguments967['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure968 = ($arguments967['date'] !== null) ? function() use ($arguments967) { return $arguments967['date']; } : $renderChildrenClosure968;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments967, $renderChildrenClosure968, $renderingContext)]);
};
$arguments965 = array();

$output964 .= '';

$output964 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure972 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure974 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments973 = array();
$arguments973['key'] = NULL;
$arguments973['id'] = NULL;
$arguments973['default'] = NULL;
$arguments973['arguments'] = NULL;
$arguments973['extensionName'] = NULL;
$arguments973['languageKey'] = NULL;
$arguments973['alternativeLanguageKeys'] = NULL;
$arguments973['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments973, $renderChildrenClosure974, $renderingContext)]);
};
$arguments971 = array();
$arguments971['if'] = NULL;

$output964 .= '';

$output964 .= '
                                ';
return $output964;
};
$arguments953 = array();
$arguments953['then'] = NULL;
$arguments953['else'] = NULL;
$arguments953['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array961 = array();
$array962 = array (
);$array961['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array962);

$expression963 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments953['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression963(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array961)
					),
					$renderingContext
				);
$arguments953['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure956 = function() use ($renderingContext, $self) {
$output957 = '';

$output957 .= '@';
$array958 = array (
);
$output957 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array958);
return $output957;
};
$arguments955 = array();
$arguments955['date'] = NULL;
$arguments955['format'] = '';
$arguments955['base'] = NULL;
$arguments955['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure956 = ($arguments955['date'] !== null) ? function() use ($arguments955) { return $arguments955['date']; } : $renderChildrenClosure956;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments955, $renderChildrenClosure956, $renderingContext)]);
};
$arguments953['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure960 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments959 = array();
$arguments959['key'] = NULL;
$arguments959['id'] = NULL;
$arguments959['default'] = NULL;
$arguments959['arguments'] = NULL;
$arguments959['extensionName'] = NULL;
$arguments959['languageKey'] = NULL;
$arguments959['alternativeLanguageKeys'] = NULL;
$arguments959['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments959, $renderChildrenClosure960, $renderingContext)]);
};

$output916 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments953, $renderChildrenClosure954, $renderingContext);

$output916 .= '
                            </td>
                        ';
return $output916;
};
$arguments911 = array();
$arguments911['then'] = NULL;
$arguments911['else'] = NULL;
$arguments911['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array913 = array();
$array914 = array (
);$array913['0'] = $renderingContext->getVariableProvider()->getByPath('showHitCounter', $array914);

$expression915 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments911['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression915(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array913)
					),
					$renderingContext
				);
$arguments911['__thenClosure'] = $renderChildrenClosure912;

$output780 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments911, $renderChildrenClosure912, $renderingContext);

$output780 .= '
                        <td>
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure976 = function() use ($renderingContext, $self) {
$output995 = '';

$output995 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure997 = function() use ($renderingContext, $self) {
$output998 = '';

$output998 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1000 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments999 = array();
$arguments999['identifier'] = NULL;
$arguments999['size'] = 'small';
$arguments999['overlay'] = NULL;
$arguments999['state'] = 'default';
$arguments999['alternativeMarkupIdentifier'] = NULL;
$arguments999['identifier'] = 'empty-empty';

$output998 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments999, $renderChildrenClosure1000, $renderingContext);

$output998 .= '</span>
                                    ';
return $output998;
};
$arguments996 = array();

$output995 .= '';

$output995 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1002 = function() use ($renderingContext, $self) {
$output1003 = '';

$output1003 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure1005 = function() use ($renderingContext, $self) {
$output1011 = '';

$output1011 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1013 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1012 = array();
$arguments1012['identifier'] = NULL;
$arguments1012['size'] = 'small';
$arguments1012['overlay'] = NULL;
$arguments1012['state'] = 'default';
$arguments1012['alternativeMarkupIdentifier'] = NULL;
$arguments1012['identifier'] = 'actions-view-page';

$output1011 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1012, $renderChildrenClosure1013, $renderingContext);

$output1011 .= '
                                        ';
return $output1011;
};
$arguments1004 = array();
$arguments1004['additionalAttributes'] = NULL;
$arguments1004['data'] = NULL;
$arguments1004['uri'] = NULL;
$arguments1004['defaultScheme'] = 'http';
$arguments1004['class'] = NULL;
$arguments1004['dir'] = NULL;
$arguments1004['id'] = NULL;
$arguments1004['lang'] = NULL;
$arguments1004['style'] = NULL;
$arguments1004['title'] = NULL;
$arguments1004['accesskey'] = NULL;
$arguments1004['tabindex'] = NULL;
$arguments1004['onclick'] = NULL;
$arguments1004['name'] = NULL;
$arguments1004['rel'] = NULL;
$arguments1004['rev'] = NULL;
$arguments1004['target'] = NULL;
$arguments1004['class'] = 'btn btn-default';
$output1006 = '';
$array1007 = array (
);
$output1006 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array1007);
$array1008 = array (
);
$output1006 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array1008);
$arguments1004['uri'] = $output1006;
$arguments1004['target'] = '_blank';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1010 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1009 = array();
$arguments1009['key'] = NULL;
$arguments1009['id'] = NULL;
$arguments1009['default'] = NULL;
$arguments1009['arguments'] = NULL;
$arguments1009['extensionName'] = NULL;
$arguments1009['languageKey'] = NULL;
$arguments1009['alternativeLanguageKeys'] = NULL;
$arguments1009['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect';
$arguments1004['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1009, $renderChildrenClosure1010, $renderingContext);

$output1003 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments1004, $renderChildrenClosure1005, $renderingContext);

$output1003 .= '
                                    ';
return $output1003;
};
$arguments1001 = array();
$arguments1001['if'] = NULL;

$output995 .= '';

$output995 .= '
                                ';
return $output995;
};
$arguments975 = array();
$arguments975['then'] = NULL;
$arguments975['else'] = NULL;
$arguments975['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array991 = array();
$array992 = array (
);$array991['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.is_regexp', $array992);
$array991['1'] = ' || ';
$array993 = array (
);$array991['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array993);
$array991['3'] = ' === \'*\'';

$expression994 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) === '*'));};
$arguments975['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression994(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array991)
					),
					$renderingContext
				);
$arguments975['__thenClosure'] = function() use ($renderingContext, $self) {
$output977 = '';

$output977 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure979 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments978 = array();
$arguments978['identifier'] = NULL;
$arguments978['size'] = 'small';
$arguments978['overlay'] = NULL;
$arguments978['state'] = 'default';
$arguments978['alternativeMarkupIdentifier'] = NULL;
$arguments978['identifier'] = 'empty-empty';

$output977 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments978, $renderChildrenClosure979, $renderingContext);

$output977 .= '</span>
                                    ';
return $output977;
};
$arguments975['__elseClosures'][] = function() use ($renderingContext, $self) {
$output980 = '';

$output980 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure982 = function() use ($renderingContext, $self) {
$output988 = '';

$output988 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure990 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments989 = array();
$arguments989['identifier'] = NULL;
$arguments989['size'] = 'small';
$arguments989['overlay'] = NULL;
$arguments989['state'] = 'default';
$arguments989['alternativeMarkupIdentifier'] = NULL;
$arguments989['identifier'] = 'actions-view-page';

$output988 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments989, $renderChildrenClosure990, $renderingContext);

$output988 .= '
                                        ';
return $output988;
};
$arguments981 = array();
$arguments981['additionalAttributes'] = NULL;
$arguments981['data'] = NULL;
$arguments981['uri'] = NULL;
$arguments981['defaultScheme'] = 'http';
$arguments981['class'] = NULL;
$arguments981['dir'] = NULL;
$arguments981['id'] = NULL;
$arguments981['lang'] = NULL;
$arguments981['style'] = NULL;
$arguments981['title'] = NULL;
$arguments981['accesskey'] = NULL;
$arguments981['tabindex'] = NULL;
$arguments981['onclick'] = NULL;
$arguments981['name'] = NULL;
$arguments981['rel'] = NULL;
$arguments981['rev'] = NULL;
$arguments981['target'] = NULL;
$arguments981['class'] = 'btn btn-default';
$output983 = '';
$array984 = array (
);
$output983 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array984);
$array985 = array (
);
$output983 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array985);
$arguments981['uri'] = $output983;
$arguments981['target'] = '_blank';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['key'] = NULL;
$arguments986['id'] = NULL;
$arguments986['default'] = NULL;
$arguments986['arguments'] = NULL;
$arguments986['extensionName'] = NULL;
$arguments986['languageKey'] = NULL;
$arguments986['alternativeLanguageKeys'] = NULL;
$arguments986['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect';
$arguments981['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext);

$output980 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments981, $renderChildrenClosure982, $renderingContext);

$output980 .= '
                                    ';
return $output980;
};

$output780 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments975, $renderChildrenClosure976, $renderingContext);

$output780 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure1015 = function() use ($renderingContext, $self) {
$output1019 = '';

$output1019 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1021 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1020 = array();
$arguments1020['identifier'] = NULL;
$arguments1020['size'] = 'small';
$arguments1020['overlay'] = NULL;
$arguments1020['state'] = 'default';
$arguments1020['alternativeMarkupIdentifier'] = NULL;
$arguments1020['identifier'] = 'actions-open';

$output1019 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1020, $renderChildrenClosure1021, $renderingContext);

$output1019 .= '
                                ';
return $output1019;
};
$arguments1014 = array();
$arguments1014['additionalAttributes'] = NULL;
$arguments1014['data'] = NULL;
$arguments1014['class'] = NULL;
$arguments1014['dir'] = NULL;
$arguments1014['id'] = NULL;
$arguments1014['lang'] = NULL;
$arguments1014['style'] = NULL;
$arguments1014['title'] = NULL;
$arguments1014['accesskey'] = NULL;
$arguments1014['tabindex'] = NULL;
$arguments1014['onclick'] = NULL;
$arguments1014['uid'] = NULL;
$arguments1014['table'] = NULL;
$arguments1014['fields'] = NULL;
$arguments1014['returnUrl'] = '';
$arguments1014['class'] = 'btn btn-default';
$arguments1014['table'] = 'sys_redirect';
$array1016 = array (
);$arguments1014['uid'] = $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1016);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1018 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1017 = array();
$arguments1017['key'] = NULL;
$arguments1017['id'] = NULL;
$arguments1017['default'] = NULL;
$arguments1017['arguments'] = NULL;
$arguments1017['extensionName'] = NULL;
$arguments1017['languageKey'] = NULL;
$arguments1017['alternativeLanguageKeys'] = NULL;
$arguments1017['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit';
$arguments1014['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1017, $renderChildrenClosure1018, $renderingContext);

$output780 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments1014, $renderChildrenClosure1015, $renderingContext);

$output780 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1023 = function() use ($renderingContext, $self) {
$output1045 = '';

$output1045 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1047 = function() use ($renderingContext, $self) {
$output1048 = '';

$output1048 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1050 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1049 = array();
$arguments1049['route'] = NULL;
$arguments1049['arguments'] = array (
);
$arguments1049['query'] = NULL;
$arguments1049['currentUrlParameterName'] = NULL;
$arguments1049['route'] = 'tce_db';
$output1051 = '';

$output1051 .= 'data[sys_redirect][';
$array1052 = array (
);
$output1051 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1052);

$output1051 .= '][disabled]=0';
$arguments1049['query'] = $output1051;
$arguments1049['currentUrlParameterName'] = 'redirect';

$output1048 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1049, $renderChildrenClosure1050, $renderingContext)]);

$output1048 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1054 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1053 = array();
$arguments1053['key'] = NULL;
$arguments1053['id'] = NULL;
$arguments1053['default'] = NULL;
$arguments1053['arguments'] = NULL;
$arguments1053['extensionName'] = NULL;
$arguments1053['languageKey'] = NULL;
$arguments1053['alternativeLanguageKeys'] = NULL;
$arguments1053['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide';

$output1048 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1053, $renderChildrenClosure1054, $renderingContext)]);

$output1048 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1056 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1055 = array();
$arguments1055['identifier'] = NULL;
$arguments1055['size'] = 'small';
$arguments1055['overlay'] = NULL;
$arguments1055['state'] = 'default';
$arguments1055['alternativeMarkupIdentifier'] = NULL;
$arguments1055['identifier'] = 'actions-edit-unhide';

$output1048 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1055, $renderChildrenClosure1056, $renderingContext);

$output1048 .= '</a>
                                    ';
return $output1048;
};
$arguments1046 = array();

$output1045 .= '';

$output1045 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1058 = function() use ($renderingContext, $self) {
$output1059 = '';

$output1059 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1061 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1060 = array();
$arguments1060['route'] = NULL;
$arguments1060['arguments'] = array (
);
$arguments1060['query'] = NULL;
$arguments1060['currentUrlParameterName'] = NULL;
$arguments1060['route'] = 'tce_db';
$output1062 = '';

$output1062 .= 'data[sys_redirect][';
$array1063 = array (
);
$output1062 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1063);

$output1062 .= '][disabled]=1';
$arguments1060['query'] = $output1062;
$arguments1060['currentUrlParameterName'] = 'redirect';

$output1059 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1060, $renderChildrenClosure1061, $renderingContext)]);

$output1059 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1065 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1064 = array();
$arguments1064['key'] = NULL;
$arguments1064['id'] = NULL;
$arguments1064['default'] = NULL;
$arguments1064['arguments'] = NULL;
$arguments1064['extensionName'] = NULL;
$arguments1064['languageKey'] = NULL;
$arguments1064['alternativeLanguageKeys'] = NULL;
$arguments1064['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide';

$output1059 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1064, $renderChildrenClosure1065, $renderingContext)]);

$output1059 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1067 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1066 = array();
$arguments1066['identifier'] = NULL;
$arguments1066['size'] = 'small';
$arguments1066['overlay'] = NULL;
$arguments1066['state'] = 'default';
$arguments1066['alternativeMarkupIdentifier'] = NULL;
$arguments1066['identifier'] = 'actions-edit-hide';

$output1059 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1066, $renderChildrenClosure1067, $renderingContext);

$output1059 .= '</a>
                                    ';
return $output1059;
};
$arguments1057 = array();
$arguments1057['if'] = NULL;

$output1045 .= '';

$output1045 .= '
                                ';
return $output1045;
};
$arguments1022 = array();
$arguments1022['then'] = NULL;
$arguments1022['else'] = NULL;
$arguments1022['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1042 = array();
$array1043 = array (
);$array1042['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.disabled', $array1043);
$array1042['1'] = ' == 1';

$expression1044 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1022['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1044(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1042)
					),
					$renderingContext
				);
$arguments1022['__thenClosure'] = function() use ($renderingContext, $self) {
$output1024 = '';

$output1024 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1026 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1025 = array();
$arguments1025['route'] = NULL;
$arguments1025['arguments'] = array (
);
$arguments1025['query'] = NULL;
$arguments1025['currentUrlParameterName'] = NULL;
$arguments1025['route'] = 'tce_db';
$output1027 = '';

$output1027 .= 'data[sys_redirect][';
$array1028 = array (
);
$output1027 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1028);

$output1027 .= '][disabled]=0';
$arguments1025['query'] = $output1027;
$arguments1025['currentUrlParameterName'] = 'redirect';

$output1024 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1025, $renderChildrenClosure1026, $renderingContext)]);

$output1024 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1030 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1029 = array();
$arguments1029['key'] = NULL;
$arguments1029['id'] = NULL;
$arguments1029['default'] = NULL;
$arguments1029['arguments'] = NULL;
$arguments1029['extensionName'] = NULL;
$arguments1029['languageKey'] = NULL;
$arguments1029['alternativeLanguageKeys'] = NULL;
$arguments1029['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide';

$output1024 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1029, $renderChildrenClosure1030, $renderingContext)]);

$output1024 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1032 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1031 = array();
$arguments1031['identifier'] = NULL;
$arguments1031['size'] = 'small';
$arguments1031['overlay'] = NULL;
$arguments1031['state'] = 'default';
$arguments1031['alternativeMarkupIdentifier'] = NULL;
$arguments1031['identifier'] = 'actions-edit-unhide';

$output1024 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1031, $renderChildrenClosure1032, $renderingContext);

$output1024 .= '</a>
                                    ';
return $output1024;
};
$arguments1022['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1033 = '';

$output1033 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1035 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1034 = array();
$arguments1034['route'] = NULL;
$arguments1034['arguments'] = array (
);
$arguments1034['query'] = NULL;
$arguments1034['currentUrlParameterName'] = NULL;
$arguments1034['route'] = 'tce_db';
$output1036 = '';

$output1036 .= 'data[sys_redirect][';
$array1037 = array (
);
$output1036 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1037);

$output1036 .= '][disabled]=1';
$arguments1034['query'] = $output1036;
$arguments1034['currentUrlParameterName'] = 'redirect';

$output1033 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1034, $renderChildrenClosure1035, $renderingContext)]);

$output1033 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1039 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1038 = array();
$arguments1038['key'] = NULL;
$arguments1038['id'] = NULL;
$arguments1038['default'] = NULL;
$arguments1038['arguments'] = NULL;
$arguments1038['extensionName'] = NULL;
$arguments1038['languageKey'] = NULL;
$arguments1038['alternativeLanguageKeys'] = NULL;
$arguments1038['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide';

$output1033 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1038, $renderChildrenClosure1039, $renderingContext)]);

$output1033 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1041 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1040 = array();
$arguments1040['identifier'] = NULL;
$arguments1040['size'] = 'small';
$arguments1040['overlay'] = NULL;
$arguments1040['state'] = 'default';
$arguments1040['alternativeMarkupIdentifier'] = NULL;
$arguments1040['identifier'] = 'actions-edit-hide';

$output1033 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1040, $renderChildrenClosure1041, $renderingContext);

$output1033 .= '</a>
                                    ';
return $output1033;
};

$output780 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1022, $renderChildrenClosure1023, $renderingContext);

$output780 .= '
                                <a class="btn btn-default t3js-modal-trigger"
                                    href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1069 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1068 = array();
$arguments1068['route'] = NULL;
$arguments1068['arguments'] = array (
);
$arguments1068['query'] = NULL;
$arguments1068['currentUrlParameterName'] = NULL;
$arguments1068['route'] = 'tce_db';
$output1070 = '';

$output1070 .= 'cmd[sys_redirect][';
$array1071 = array (
);
$output1070 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1071);

$output1070 .= '][delete]=1';
$arguments1068['query'] = $output1070;
$arguments1068['currentUrlParameterName'] = 'redirect';

$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1068, $renderChildrenClosure1069, $renderingContext)]);

$output780 .= '"
                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1073 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1072 = array();
$arguments1072['key'] = NULL;
$arguments1072['id'] = NULL;
$arguments1072['default'] = NULL;
$arguments1072['arguments'] = NULL;
$arguments1072['extensionName'] = NULL;
$arguments1072['languageKey'] = NULL;
$arguments1072['alternativeLanguageKeys'] = NULL;
$arguments1072['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:delete';

$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1072, $renderChildrenClosure1073, $renderingContext)]);

$output780 .= '"
                                    data-severity="warning"
                                    data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1075 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1074 = array();
$arguments1074['key'] = NULL;
$arguments1074['id'] = NULL;
$arguments1074['default'] = NULL;
$arguments1074['arguments'] = NULL;
$arguments1074['extensionName'] = NULL;
$arguments1074['languageKey'] = NULL;
$arguments1074['alternativeLanguageKeys'] = NULL;
$arguments1074['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1074, $renderChildrenClosure1075, $renderingContext)]);

$output780 .= '"
                                    data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1077 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1076 = array();
$arguments1076['key'] = NULL;
$arguments1076['id'] = NULL;
$arguments1076['default'] = NULL;
$arguments1076['arguments'] = NULL;
$arguments1076['extensionName'] = NULL;
$arguments1076['languageKey'] = NULL;
$arguments1076['alternativeLanguageKeys'] = NULL;
$arguments1076['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:deleteWarning';

$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1076, $renderChildrenClosure1077, $renderingContext)]);

$output780 .= '"
                                    data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1079 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1078 = array();
$arguments1078['key'] = NULL;
$arguments1078['id'] = NULL;
$arguments1078['default'] = NULL;
$arguments1078['arguments'] = NULL;
$arguments1078['extensionName'] = NULL;
$arguments1078['languageKey'] = NULL;
$arguments1078['alternativeLanguageKeys'] = NULL;
$arguments1078['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no';

$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1078, $renderChildrenClosure1079, $renderingContext)]);

$output780 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1081 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1080 = array();
$arguments1080['identifier'] = NULL;
$arguments1080['size'] = 'small';
$arguments1080['overlay'] = NULL;
$arguments1080['state'] = 'default';
$arguments1080['alternativeMarkupIdentifier'] = NULL;
$arguments1080['identifier'] = 'actions-delete';

$output780 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1080, $renderChildrenClosure1081, $renderingContext);

$output780 .= '
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
return $output780;
};
$arguments777 = array();
$arguments777['each'] = NULL;
$arguments777['as'] = NULL;
$arguments777['key'] = NULL;
$arguments777['reverse'] = false;
$arguments777['iteration'] = NULL;
$array779 = array (
);$arguments777['each'] = $renderingContext->getVariableProvider()->getByPath('redirects', $array779);
$arguments777['key'] = 'domainName';
$arguments777['as'] = 'redirect';

$output757 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext);

$output757 .= '
            </tbody>
        </table>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1083 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1082 = array();
$arguments1082['section'] = NULL;
$arguments1082['partial'] = NULL;
$arguments1082['delegate'] = NULL;
$arguments1082['renderable'] = NULL;
$arguments1082['arguments'] = array (
);
$arguments1082['optional'] = false;
$arguments1082['default'] = NULL;
$arguments1082['contentAs'] = NULL;
$arguments1082['debug'] = true;
$arguments1082['partial'] = 'Pagination';
$arguments1082['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output757 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1082, $renderChildrenClosure1083, $renderingContext);

$output757 .= '
';
return $output757;
};
$arguments755 = array();
$arguments755['name'] = NULL;
$arguments755['name'] = 'table';

$output560 .= NULL;

$output560 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1086 = function() use ($renderingContext, $self) {
$output1087 = '';

$output1087 .= '
    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure1089 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1088 = array();
$arguments1088['route'] = NULL;
$arguments1088['parameters'] = array (
);
$arguments1088['referenceType'] = 'absolute';
$arguments1088['route'] = 'site_redirects';
// Rendering Array
$array1090 = array();
$array1090['action'] = 'overview';
$arguments1088['parameters'] = $array1090;

$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments1088, $renderChildrenClosure1089, $renderingContext)]);

$output1087 .= '"
        method="post"
        enctype="multipart/form-data"
        name="demand"
        class="form-inline form-inline-spaced">

        <div class="form-group">
            <label for="demand-source-host">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1091 = array();
$arguments1091['key'] = NULL;
$arguments1091['id'] = NULL;
$arguments1091['default'] = NULL;
$arguments1091['arguments'] = NULL;
$arguments1091['extensionName'] = NULL;
$arguments1091['languageKey'] = NULL;
$arguments1091['alternativeLanguageKeys'] = NULL;
$arguments1091['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host';

$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1091, $renderChildrenClosure1092, $renderingContext)]);

$output1087 .= '</label>
            <select id="demand-source-host" class="form-control input-sm" name="demand[source_host]" data-on-change="submit">
                <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1094 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1093 = array();
$arguments1093['key'] = NULL;
$arguments1093['id'] = NULL;
$arguments1093['default'] = NULL;
$arguments1093['arguments'] = NULL;
$arguments1093['extensionName'] = NULL;
$arguments1093['languageKey'] = NULL;
$arguments1093['alternativeLanguageKeys'] = NULL;
$arguments1093['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll';

$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1093, $renderChildrenClosure1094, $renderingContext)]);

$output1087 .= '</option>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1096 = function() use ($renderingContext, $self) {
$output1098 = '';

$output1098 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
$renderChildrenClosure1100 = function() use ($renderingContext, $self) {
$array1106 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('host.name', $array1106)]);
};
$arguments1099 = array();
$arguments1099['class'] = NULL;
$arguments1099['dir'] = NULL;
$arguments1099['id'] = NULL;
$arguments1099['lang'] = NULL;
$arguments1099['style'] = NULL;
$arguments1099['title'] = NULL;
$arguments1099['accesskey'] = NULL;
$arguments1099['tabindex'] = NULL;
$arguments1099['onclick'] = NULL;
$arguments1099['selected'] = NULL;
$arguments1099['additionalAttributes'] = NULL;
$arguments1099['data'] = NULL;
$arguments1099['value'] = NULL;
$array1101 = array (
);$arguments1099['value'] = $renderingContext->getVariableProvider()->getByPath('host.name', $array1101);
// Rendering Boolean node
// Rendering Array
$array1102 = array();
$array1103 = array (
);$array1102['0'] = $renderingContext->getVariableProvider()->getByPath('host.name', $array1103);
$array1102['1'] = ' === ';
$array1104 = array (
);$array1102['2'] = $renderingContext->getVariableProvider()->getByPath('demand.sourceHost', $array1104);

$expression1105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1099['selected'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1102)
					),
					$renderingContext
				);

$output1098 .= TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::renderStatic($arguments1099, $renderChildrenClosure1100, $renderingContext);

$output1098 .= '
                ';
return $output1098;
};
$arguments1095 = array();
$arguments1095['each'] = NULL;
$arguments1095['as'] = NULL;
$arguments1095['key'] = NULL;
$arguments1095['reverse'] = false;
$arguments1095['iteration'] = NULL;
$array1097 = array (
);$arguments1095['each'] = $renderingContext->getVariableProvider()->getByPath('hosts', $array1097);
$arguments1095['as'] = 'host';

$output1087 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1095, $renderChildrenClosure1096, $renderingContext);

$output1087 .= '
            </select>
        </div>
        <div class="form-group">
            <label for="demand-source-path">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1107 = array();
$arguments1107['key'] = NULL;
$arguments1107['id'] = NULL;
$arguments1107['default'] = NULL;
$arguments1107['arguments'] = NULL;
$arguments1107['extensionName'] = NULL;
$arguments1107['languageKey'] = NULL;
$arguments1107['alternativeLanguageKeys'] = NULL;
$arguments1107['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path';

$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1107, $renderChildrenClosure1108, $renderingContext)]);

$output1087 .= '</label>
            <input type="text" id="demand-source-path" class="form-control input-sm" name="demand[source_path]" value="';
$array1109 = array (
);
$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.sourcePath', $array1109)]);

$output1087 .= '"/>
        </div>
        <div class="form-group">
            <label for="demand-target">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1110 = array();
$arguments1110['key'] = NULL;
$arguments1110['id'] = NULL;
$arguments1110['default'] = NULL;
$arguments1110['arguments'] = NULL;
$arguments1110['extensionName'] = NULL;
$arguments1110['languageKey'] = NULL;
$arguments1110['alternativeLanguageKeys'] = NULL;
$arguments1110['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.destination';

$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1110, $renderChildrenClosure1111, $renderingContext)]);

$output1087 .= '</label>
            <input type="text" id="demand-target" class="form-control input-sm" name="demand[target]" value="';
$array1112 = array (
);
$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.target', $array1112)]);

$output1087 .= '"/>
        </div>
        <div class="form-group">
            <label for="demand-target-status-code">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1113 = array();
$arguments1113['key'] = NULL;
$arguments1113['id'] = NULL;
$arguments1113['default'] = NULL;
$arguments1113['arguments'] = NULL;
$arguments1113['extensionName'] = NULL;
$arguments1113['languageKey'] = NULL;
$arguments1113['alternativeLanguageKeys'] = NULL;
$arguments1113['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.targetStatusCode';

$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1113, $renderChildrenClosure1114, $renderingContext)]);

$output1087 .= '</label>
            <select id="demand-target-status-code" class="form-control input-sm" name="demand[target_statuscode]" data-on-change="submit">
                <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1115 = array();
$arguments1115['key'] = NULL;
$arguments1115['id'] = NULL;
$arguments1115['default'] = NULL;
$arguments1115['arguments'] = NULL;
$arguments1115['extensionName'] = NULL;
$arguments1115['languageKey'] = NULL;
$arguments1115['alternativeLanguageKeys'] = NULL;
$arguments1115['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll';

$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1115, $renderChildrenClosure1116, $renderingContext)]);

$output1087 .= '</option>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1118 = function() use ($renderingContext, $self) {
$output1120 = '';

$output1120 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
$renderChildrenClosure1122 = function() use ($renderingContext, $self) {
$array1128 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusCode.code', $array1128)]);
};
$arguments1121 = array();
$arguments1121['class'] = NULL;
$arguments1121['dir'] = NULL;
$arguments1121['id'] = NULL;
$arguments1121['lang'] = NULL;
$arguments1121['style'] = NULL;
$arguments1121['title'] = NULL;
$arguments1121['accesskey'] = NULL;
$arguments1121['tabindex'] = NULL;
$arguments1121['onclick'] = NULL;
$arguments1121['selected'] = NULL;
$arguments1121['additionalAttributes'] = NULL;
$arguments1121['data'] = NULL;
$arguments1121['value'] = NULL;
$array1123 = array (
);$arguments1121['value'] = $renderingContext->getVariableProvider()->getByPath('statusCode.code', $array1123);
// Rendering Boolean node
// Rendering Array
$array1124 = array();
$array1125 = array (
);$array1124['0'] = $renderingContext->getVariableProvider()->getByPath('statusCode.code', $array1125);
$array1124['1'] = ' === ';
$array1126 = array (
);$array1124['2'] = $renderingContext->getVariableProvider()->getByPath('demand.statusCode', $array1126);

$expression1127 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1121['selected'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1124)
					),
					$renderingContext
				);

$output1120 .= TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::renderStatic($arguments1121, $renderChildrenClosure1122, $renderingContext);

$output1120 .= '
                ';
return $output1120;
};
$arguments1117 = array();
$arguments1117['each'] = NULL;
$arguments1117['as'] = NULL;
$arguments1117['key'] = NULL;
$arguments1117['reverse'] = false;
$arguments1117['iteration'] = NULL;
$array1119 = array (
);$arguments1117['each'] = $renderingContext->getVariableProvider()->getByPath('statusCodes', $array1119);
$arguments1117['as'] = 'statusCode';

$output1087 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1117, $renderChildrenClosure1118, $renderingContext);

$output1087 .= '
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1129 = array();
$arguments1129['key'] = NULL;
$arguments1129['id'] = NULL;
$arguments1129['default'] = NULL;
$arguments1129['arguments'] = NULL;
$arguments1129['extensionName'] = NULL;
$arguments1129['languageKey'] = NULL;
$arguments1129['alternativeLanguageKeys'] = NULL;
$arguments1129['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.sendButton';

$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1129, $renderChildrenClosure1130, $renderingContext)]);

$output1087 .= '" class="btn btn-default btn-sm" />
        </div>
    </form>
';
return $output1087;
};
$arguments1085 = array();
$arguments1085['name'] = NULL;
$arguments1085['name'] = 'filter';

$output560 .= NULL;

$output560 .= '

';

return $output560;
}


}
#