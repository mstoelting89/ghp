<?php

class layout_Login_html_f9a93d1e317fdebe173f0e3b3e59a24b61df1702 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="typo3-login">
    <div class="typo3-login-inner">
        <div class="typo3-login-container">
            <div class="typo3-login-wrap">
                <div class="panel panel-lg panel-login">
                    <div class="panel-body">
                        <div class="typo3-login-logo">
                            <a href="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginUrl', $array1)]);

$output0 .= '" id="t3js-login-url" data-referrer-check-enabled="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('referrerCheckEnabled', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['then'] = 1;
$arguments2['else'] = 0;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '">
                                <img src="';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logo', $array7)]);

$output0 .= '" class="typo3-login-image" alt="" />
                            </a>
                        </div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                                    <div class="t3js-login-error" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'login.error.message';

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output154 .= '</strong>
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['key'] = NULL;
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['languageKey'] = NULL;
$arguments157['alternativeLanguageKeys'] = NULL;
$arguments157['key'] = 'login.error.description';

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output154 .= '</p>
                                        </div>
                                    </div>
                                ';
return $output154;
};
$arguments149 = array();
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['0'] = $renderingContext->getVariableProvider()->getByPath('hasLoginError', $array152);

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);
$arguments149['__thenClosure'] = $renderChildrenClosure150;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['message'] = NULL;
$arguments159['title'] = NULL;
$arguments159['state'] = -2;
$arguments159['iconName'] = NULL;
$arguments159['disableIcon'] = false;
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
$arguments161['key'] = 'login.error.javascript';
$arguments159['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);
$arguments159['state'] = 2;
$renderChildrenClosure160 = ($arguments159['message'] !== null) ? function() use ($arguments159) { return $arguments159['message']; } : $renderChildrenClosure160;
$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output148 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['message'] = NULL;
$arguments163['title'] = NULL;
$arguments163['state'] = -2;
$arguments163['iconName'] = NULL;
$arguments163['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['key'] = NULL;
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['languageKey'] = NULL;
$arguments165['alternativeLanguageKeys'] = NULL;
$arguments165['key'] = 'login.error.cookies';
$arguments163['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext)]);
$arguments163['state'] = 2;
$renderChildrenClosure164 = ($arguments163['message'] !== null) ? function() use ($arguments163) { return $arguments163['message']; } : $renderChildrenClosure164;
$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output148 .= '
                                </div>
                                <div class="hidden t3js-login-error-noreferrer">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['message'] = NULL;
$arguments167['title'] = NULL;
$arguments167['state'] = -2;
$arguments167['iconName'] = NULL;
$arguments167['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['key'] = NULL;
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['languageKey'] = NULL;
$arguments169['alternativeLanguageKeys'] = NULL;
$arguments169['key'] = 'login.error.referrer';
$arguments167['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext)]);
$arguments167['state'] = 2;
$renderChildrenClosure168 = ($arguments167['message'] !== null) ? function() use ($arguments167) { return $arguments167['message']; } : $renderChildrenClosure168;
$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output148 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="?loginProvider=';
$array171 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array171)]);

$output148 .= '" method="post" name="loginform" id="typo3-login-form">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['name'] = NULL;
$arguments172['value'] = NULL;
$arguments172['property'] = NULL;
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$arguments172['name'] = 'login_status';
$arguments172['value'] = 'login';

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output148 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['additionalAttributes'] = NULL;
$arguments174['data'] = NULL;
$arguments174['name'] = NULL;
$arguments174['value'] = NULL;
$arguments174['property'] = NULL;
$arguments174['class'] = NULL;
$arguments174['dir'] = NULL;
$arguments174['id'] = NULL;
$arguments174['lang'] = NULL;
$arguments174['style'] = NULL;
$arguments174['title'] = NULL;
$arguments174['accesskey'] = NULL;
$arguments174['tabindex'] = NULL;
$arguments174['onclick'] = NULL;
$arguments174['name'] = 'userident';
$arguments174['id'] = 't3-field-userident';
$arguments174['class'] = 't3js-login-userident-field';
$arguments174['value'] = '';

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output148 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['additionalAttributes'] = NULL;
$arguments176['data'] = NULL;
$arguments176['name'] = NULL;
$arguments176['value'] = NULL;
$arguments176['property'] = NULL;
$arguments176['class'] = NULL;
$arguments176['dir'] = NULL;
$arguments176['id'] = NULL;
$arguments176['lang'] = NULL;
$arguments176['style'] = NULL;
$arguments176['title'] = NULL;
$arguments176['accesskey'] = NULL;
$arguments176['tabindex'] = NULL;
$arguments176['onclick'] = NULL;
$arguments176['name'] = 'redirect_url';
$array178 = array (
);$arguments176['value'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array178);

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output148 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['name'] = NULL;
$arguments179['value'] = NULL;
$arguments179['property'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['name'] = 'loginRefresh';
$array181 = array (
);$arguments179['value'] = $renderingContext->getVariableProvider()->getByPath('loginRefresh', $array181);

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output148 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['section'] = NULL;
$arguments182['partial'] = NULL;
$arguments182['delegate'] = NULL;
$arguments182['renderable'] = NULL;
$arguments182['arguments'] = array (
);
$arguments182['optional'] = false;
$arguments182['default'] = NULL;
$arguments182['contentAs'] = NULL;
$arguments182['debug'] = true;
$arguments182['partial'] = 'Login/InterfaceSelector';
$arguments182['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output148 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['section'] = NULL;
$arguments185['partial'] = NULL;
$arguments185['delegate'] = NULL;
$arguments185['renderable'] = NULL;
$arguments185['arguments'] = array (
);
$arguments185['optional'] = false;
$arguments185['default'] = NULL;
$arguments185['contentAs'] = NULL;
$arguments185['debug'] = true;
$arguments185['section'] = 'loginFormFields';

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output148 .= '

                                        <div class="form-group" id="t3-login-submit-section">
                                            <button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['languageKey'] = NULL;
$arguments187['alternativeLanguageKeys'] = NULL;
$arguments187['key'] = 'login.process';

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output148 .= '" autocomplete="off">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['languageKey'] = NULL;
$arguments189['alternativeLanguageKeys'] = NULL;
$arguments189['key'] = 'login.submit';

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output148 .= '
                                            </button>
                                        </div>
                                        <ul class="list-unstyled typo3-login-links">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';
$array208 = array (
);
$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array208)]);

$output207 .= '"><a href="?loginProvider=';
$array209 = array (
);
$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array209)]);

$output207 .= '"><i class="fa fa-fw ';
$array210 = array (
);
$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array210)]);

$output207 .= '"></i> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['key'] = NULL;
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$arguments211['languageKey'] = NULL;
$arguments211['alternativeLanguageKeys'] = NULL;
$array213 = array (
);$arguments211['key'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array213);

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext)]);

$output207 .= '</span></a></li>
                                                    ';
return $output207;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array204);
$array203['1'] = ' != ';
$array205 = array (
);$array203['2'] = $renderingContext->getVariableProvider()->getByPath('providerKey', $array205);

$expression206 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = $renderChildrenClosure202;

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '
                                                ';
return $output200;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array198 = array (
);$array197['0'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array198);

$expression199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
$arguments195['__thenClosure'] = $renderChildrenClosure196;

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
                                            ';
return $output194;
};
$arguments191 = array();
$arguments191['each'] = NULL;
$arguments191['as'] = NULL;
$arguments191['key'] = NULL;
$arguments191['reverse'] = false;
$arguments191['iteration'] = NULL;
$array193 = array (
);$arguments191['each'] = $renderingContext->getVariableProvider()->getByPath('loginProviders', $array193);
$arguments191['as'] = 'provider';
$arguments191['key'] = 'providerKey';

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output148 .= '
                                        </ul>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['section'] = NULL;
$arguments220['partial'] = NULL;
$arguments220['delegate'] = NULL;
$arguments220['renderable'] = NULL;
$arguments220['arguments'] = array (
);
$arguments220['optional'] = false;
$arguments220['default'] = NULL;
$arguments220['contentAs'] = NULL;
$arguments220['debug'] = true;
$arguments220['section'] = 'ResetPassword';
$arguments220['arguments'] = $renderingContext->getVariableProvider()->getAll();
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array223['0'] = 'true';

$expression224 = function($context) {return TRUE;};
$arguments220['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
                                        ';
return $output219;
};
$arguments214 = array();
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$arguments214['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array216 = array();
$array217 = array (
);$array216['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array217);

$expression218 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments214['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array216)
					),
					$renderingContext
				);
$arguments214['__thenClosure'] = $renderChildrenClosure215;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output148 .= '
                                    </form>
                                </div>
                            ';
return $output148;
};
$arguments146 = array();

$output145 .= '';

$output145 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['section'] = NULL;
$arguments231['partial'] = NULL;
$arguments231['delegate'] = NULL;
$arguments231['renderable'] = NULL;
$arguments231['arguments'] = array (
);
$arguments231['optional'] = false;
$arguments231['default'] = NULL;
$arguments231['contentAs'] = NULL;
$arguments231['debug'] = true;
$arguments231['section'] = 'ResetPassword';
$arguments231['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output230 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
                            ';
return $output230;
};
$arguments225 = array();
$arguments225['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array227 = array();
$array228 = array (
);$array227['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array228);

$expression229 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments225['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array227)
					),
					$renderingContext
				);

$output145 .= '';

$output145 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
                                <form action="index.php" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$arguments237['key'] = 'login.username';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';
$array239 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username', $array239)]);

$output236 .= '
                                                </div>
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['key'] = NULL;
$arguments265['id'] = NULL;
$arguments265['default'] = NULL;
$arguments265['arguments'] = NULL;
$arguments265['extensionName'] = NULL;
$arguments265['languageKey'] = NULL;
$arguments265['alternativeLanguageKeys'] = NULL;
$arguments265['key'] = 'login.interface';

$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext)]);

$output264 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['additionalAttributes'] = NULL;
$arguments267['data'] = NULL;
$arguments267['name'] = NULL;
$arguments267['value'] = NULL;
$arguments267['property'] = NULL;
$arguments267['class'] = NULL;
$arguments267['dir'] = NULL;
$arguments267['id'] = NULL;
$arguments267['lang'] = NULL;
$arguments267['style'] = NULL;
$arguments267['title'] = NULL;
$arguments267['accesskey'] = NULL;
$arguments267['tabindex'] = NULL;
$arguments267['onclick'] = NULL;
$arguments267['size'] = NULL;
$arguments267['disabled'] = NULL;
$arguments267['options'] = NULL;
$arguments267['optionsAfterContent'] = false;
$arguments267['optionValueField'] = NULL;
$arguments267['optionLabelField'] = NULL;
$arguments267['sortByOptionLabel'] = false;
$arguments267['selectAllByDefault'] = false;
$arguments267['errorClass'] = 'f3-form-error';
$arguments267['prependOptionLabel'] = NULL;
$arguments267['prependOptionValue'] = NULL;
$arguments267['multiple'] = false;
$arguments267['required'] = false;
$arguments267['name'] = 'users';
$array269 = array (
);$arguments267['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array269);
$arguments267['optionValueField'] = 'jumpScript';
$arguments267['optionLabelField'] = 'label';

$output264 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output264 .= '
                                                    </div>
                                                ';
return $output264;
};
$arguments262 = array();

$output261 .= '';

$output261 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['additionalAttributes'] = NULL;
$arguments279['data'] = NULL;
$arguments279['name'] = NULL;
$arguments279['value'] = NULL;
$arguments279['property'] = NULL;
$arguments279['class'] = NULL;
$arguments279['dir'] = NULL;
$arguments279['id'] = NULL;
$arguments279['lang'] = NULL;
$arguments279['style'] = NULL;
$arguments279['title'] = NULL;
$arguments279['accesskey'] = NULL;
$arguments279['tabindex'] = NULL;
$arguments279['onclick'] = NULL;
$arguments279['name'] = 'interface';
$array281 = array (
);$arguments279['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array281);

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output278 .= '
                                                    ';
return $output278;
};
$arguments273 = array();
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$arguments273['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array276);

$expression277 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments273['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array275)
					),
					$renderingContext
				);
$arguments273['__thenClosure'] = $renderChildrenClosure274;

$output272 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output272 .= '
                                                ';
return $output272;
};
$arguments270 = array();
$arguments270['if'] = NULL;

$output261 .= '';

$output261 .= '
                                            ';
return $output261;
};
$arguments240 = array();
$arguments240['then'] = NULL;
$arguments240['else'] = NULL;
$arguments240['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['0'] = $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector', $array259);

$expression260 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments240['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression260(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array258)
					),
					$renderingContext
				);
$arguments240['__thenClosure'] = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$arguments243['languageKey'] = NULL;
$arguments243['alternativeLanguageKeys'] = NULL;
$arguments243['key'] = 'login.interface';

$output242 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext)]);

$output242 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['additionalAttributes'] = NULL;
$arguments245['data'] = NULL;
$arguments245['name'] = NULL;
$arguments245['value'] = NULL;
$arguments245['property'] = NULL;
$arguments245['class'] = NULL;
$arguments245['dir'] = NULL;
$arguments245['id'] = NULL;
$arguments245['lang'] = NULL;
$arguments245['style'] = NULL;
$arguments245['title'] = NULL;
$arguments245['accesskey'] = NULL;
$arguments245['tabindex'] = NULL;
$arguments245['onclick'] = NULL;
$arguments245['size'] = NULL;
$arguments245['disabled'] = NULL;
$arguments245['options'] = NULL;
$arguments245['optionsAfterContent'] = false;
$arguments245['optionValueField'] = NULL;
$arguments245['optionLabelField'] = NULL;
$arguments245['sortByOptionLabel'] = false;
$arguments245['selectAllByDefault'] = false;
$arguments245['errorClass'] = 'f3-form-error';
$arguments245['prependOptionLabel'] = NULL;
$arguments245['prependOptionValue'] = NULL;
$arguments245['multiple'] = false;
$arguments245['required'] = false;
$arguments245['name'] = 'users';
$array247 = array (
);$arguments245['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array247);
$arguments245['optionValueField'] = 'jumpScript';
$arguments245['optionLabelField'] = 'label';

$output242 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output242 .= '
                                                    </div>
                                                ';
return $output242;
};
$arguments240['__elseClosures'][] = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['additionalAttributes'] = NULL;
$arguments255['data'] = NULL;
$arguments255['name'] = NULL;
$arguments255['value'] = NULL;
$arguments255['property'] = NULL;
$arguments255['class'] = NULL;
$arguments255['dir'] = NULL;
$arguments255['id'] = NULL;
$arguments255['lang'] = NULL;
$arguments255['style'] = NULL;
$arguments255['title'] = NULL;
$arguments255['accesskey'] = NULL;
$arguments255['tabindex'] = NULL;
$arguments255['onclick'] = NULL;
$arguments255['name'] = 'interface';
$array257 = array (
);$arguments255['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array257);

$output254 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
                                                    ';
return $output254;
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array252);

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = $renderChildrenClosure250;

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output248 .= '
                                                ';
return $output248;
};

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output236 .= '
                                            <input type="hidden" name="p_field" value="" />
                                            <input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['key'] = NULL;
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$arguments282['languageKey'] = NULL;
$arguments282['alternativeLanguageKeys'] = NULL;
$arguments282['key'] = 'login.submit';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output236 .= '" id="t3-login-submit" />
                                        </div>
                                    </div>
                                </form>
                            ';
return $output236;
};
$arguments234 = array();
$arguments234['if'] = NULL;

$output145 .= '';

$output145 .= '
                        ';
return $output145;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('formType', $array143);
$array142['1'] = ' == \'LoginForm\'';

$expression144 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'LoginForm');};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                                    <div class="t3js-login-error" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'login.error.message';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '</strong>
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'login.error.description';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output16 .= '</p>
                                        </div>
                                    </div>
                                ';
return $output16;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('hasLoginError', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['message'] = NULL;
$arguments21['title'] = NULL;
$arguments21['state'] = -2;
$arguments21['iconName'] = NULL;
$arguments21['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'login.error.javascript';
$arguments21['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);
$arguments21['state'] = 2;
$renderChildrenClosure22 = ($arguments21['message'] !== null) ? function() use ($arguments21) { return $arguments21['message']; } : $renderChildrenClosure22;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output10 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['message'] = NULL;
$arguments25['title'] = NULL;
$arguments25['state'] = -2;
$arguments25['iconName'] = NULL;
$arguments25['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'login.error.cookies';
$arguments25['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);
$arguments25['state'] = 2;
$renderChildrenClosure26 = ($arguments25['message'] !== null) ? function() use ($arguments25) { return $arguments25['message']; } : $renderChildrenClosure26;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output10 .= '
                                </div>
                                <div class="hidden t3js-login-error-noreferrer">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['message'] = NULL;
$arguments29['title'] = NULL;
$arguments29['state'] = -2;
$arguments29['iconName'] = NULL;
$arguments29['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$arguments31['key'] = 'login.error.referrer';
$arguments29['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);
$arguments29['state'] = 2;
$renderChildrenClosure30 = ($arguments29['message'] !== null) ? function() use ($arguments29) { return $arguments29['message']; } : $renderChildrenClosure30;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output10 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="?loginProvider=';
$array33 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array33)]);

$output10 .= '" method="post" name="loginform" id="typo3-login-form">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['name'] = NULL;
$arguments34['value'] = NULL;
$arguments34['property'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = 'login_status';
$arguments34['value'] = 'login';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output10 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['name'] = NULL;
$arguments36['value'] = NULL;
$arguments36['property'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['name'] = 'userident';
$arguments36['id'] = 't3-field-userident';
$arguments36['class'] = 't3js-login-userident-field';
$arguments36['value'] = '';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output10 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['name'] = NULL;
$arguments38['value'] = NULL;
$arguments38['property'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['name'] = 'redirect_url';
$array40 = array (
);$arguments38['value'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array40);

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output10 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['name'] = NULL;
$arguments41['value'] = NULL;
$arguments41['property'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['name'] = 'loginRefresh';
$array43 = array (
);$arguments41['value'] = $renderingContext->getVariableProvider()->getByPath('loginRefresh', $array43);

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output10 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['section'] = NULL;
$arguments44['partial'] = NULL;
$arguments44['delegate'] = NULL;
$arguments44['renderable'] = NULL;
$arguments44['arguments'] = array (
);
$arguments44['optional'] = false;
$arguments44['default'] = NULL;
$arguments44['contentAs'] = NULL;
$arguments44['debug'] = true;
$arguments44['partial'] = 'Login/InterfaceSelector';
$arguments44['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output10 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['section'] = NULL;
$arguments47['partial'] = NULL;
$arguments47['delegate'] = NULL;
$arguments47['renderable'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['optional'] = false;
$arguments47['default'] = NULL;
$arguments47['contentAs'] = NULL;
$arguments47['debug'] = true;
$arguments47['section'] = 'loginFormFields';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output10 .= '

                                        <div class="form-group" id="t3-login-submit-section">
                                            <button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$arguments49['key'] = 'login.process';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output10 .= '" autocomplete="off">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$arguments51['key'] = 'login.submit';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output10 .= '
                                            </button>
                                        </div>
                                        <ul class="list-unstyled typo3-login-links">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';
$array70 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array70)]);

$output69 .= '"><a href="?loginProvider=';
$array71 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array71)]);

$output69 .= '"><i class="fa fa-fw ';
$array72 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array72)]);

$output69 .= '"></i> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['key'] = NULL;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['languageKey'] = NULL;
$arguments73['alternativeLanguageKeys'] = NULL;
$array75 = array (
);$arguments73['key'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array75);

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output69 .= '</span></a></li>
                                                    ';
return $output69;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array66);
$array65['1'] = ' != ';
$array67 = array (
);$array65['2'] = $renderingContext->getVariableProvider()->getByPath('providerKey', $array67);

$expression68 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments63['__thenClosure'] = $renderChildrenClosure64;

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
                                                ';
return $output62;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = $renderChildrenClosure58;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                                            ';
return $output56;
};
$arguments53 = array();
$arguments53['each'] = NULL;
$arguments53['as'] = NULL;
$arguments53['key'] = NULL;
$arguments53['reverse'] = false;
$arguments53['iteration'] = NULL;
$array55 = array (
);$arguments53['each'] = $renderingContext->getVariableProvider()->getByPath('loginProviders', $array55);
$arguments53['as'] = 'provider';
$arguments53['key'] = 'providerKey';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output10 .= '
                                        </ul>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['section'] = NULL;
$arguments82['partial'] = NULL;
$arguments82['delegate'] = NULL;
$arguments82['renderable'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['optional'] = false;
$arguments82['default'] = NULL;
$arguments82['contentAs'] = NULL;
$arguments82['debug'] = true;
$arguments82['section'] = 'ResetPassword';
$arguments82['arguments'] = $renderingContext->getVariableProvider()->getAll();
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array85['0'] = 'true';

$expression86 = function($context) {return TRUE;};
$arguments82['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                        ';
return $output81;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = $renderChildrenClosure77;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output10 .= '
                                    </form>
                                </div>
                            ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['debug'] = true;
$arguments88['section'] = 'ResetPassword';
$arguments88['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                            ';
return $output87;
};
$arguments8['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array92);

$expression93 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                                <form action="index.php" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['languageKey'] = NULL;
$arguments95['alternativeLanguageKeys'] = NULL;
$arguments95['key'] = 'login.username';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';
$array97 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username', $array97)]);

$output94 .= '
                                                </div>
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'login.interface';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output122 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['name'] = NULL;
$arguments125['value'] = NULL;
$arguments125['property'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['size'] = NULL;
$arguments125['disabled'] = NULL;
$arguments125['options'] = NULL;
$arguments125['optionsAfterContent'] = false;
$arguments125['optionValueField'] = NULL;
$arguments125['optionLabelField'] = NULL;
$arguments125['sortByOptionLabel'] = false;
$arguments125['selectAllByDefault'] = false;
$arguments125['errorClass'] = 'f3-form-error';
$arguments125['prependOptionLabel'] = NULL;
$arguments125['prependOptionValue'] = NULL;
$arguments125['multiple'] = false;
$arguments125['required'] = false;
$arguments125['name'] = 'users';
$array127 = array (
);$arguments125['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array127);
$arguments125['optionValueField'] = 'jumpScript';
$arguments125['optionLabelField'] = 'label';

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output122 .= '
                                                    </div>
                                                ';
return $output122;
};
$arguments120 = array();

$output119 .= '';

$output119 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['name'] = NULL;
$arguments137['value'] = NULL;
$arguments137['property'] = NULL;
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['name'] = 'interface';
$array139 = array (
);$arguments137['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array139);

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
                                                    ';
return $output136;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array134);

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = $renderChildrenClosure132;

$output130 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
                                                ';
return $output130;
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output119 .= '';

$output119 .= '
                                            ';
return $output119;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector', $array117);

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$arguments101['key'] = 'login.interface';

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output100 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['name'] = NULL;
$arguments103['value'] = NULL;
$arguments103['property'] = NULL;
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['size'] = NULL;
$arguments103['disabled'] = NULL;
$arguments103['options'] = NULL;
$arguments103['optionsAfterContent'] = false;
$arguments103['optionValueField'] = NULL;
$arguments103['optionLabelField'] = NULL;
$arguments103['sortByOptionLabel'] = false;
$arguments103['selectAllByDefault'] = false;
$arguments103['errorClass'] = 'f3-form-error';
$arguments103['prependOptionLabel'] = NULL;
$arguments103['prependOptionValue'] = NULL;
$arguments103['multiple'] = false;
$arguments103['required'] = false;
$arguments103['name'] = 'users';
$array105 = array (
);$arguments103['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array105);
$arguments103['optionValueField'] = 'jumpScript';
$arguments103['optionLabelField'] = 'label';

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output100 .= '
                                                    </div>
                                                ';
return $output100;
};
$arguments98['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['name'] = NULL;
$arguments113['value'] = NULL;
$arguments113['property'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['name'] = 'interface';
$array115 = array (
);$arguments113['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array115);

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
                                                    ';
return $output112;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array110);

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
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

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output94 .= '
                                            <input type="hidden" name="p_field" value="" />
                                            <input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['key'] = NULL;
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['languageKey'] = NULL;
$arguments140['alternativeLanguageKeys'] = NULL;
$arguments140['key'] = 'login.submit';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output94 .= '" id="t3-login-submit" />
                                        </div>
                                    </div>
                                </form>
                            ';
return $output94;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['section'] = NULL;
$arguments284['partial'] = NULL;
$arguments284['delegate'] = NULL;
$arguments284['renderable'] = NULL;
$arguments284['arguments'] = array (
);
$arguments284['optional'] = false;
$arguments284['default'] = NULL;
$arguments284['contentAs'] = NULL;
$arguments284['debug'] = true;
$arguments284['partial'] = 'LoginNews';
$arguments284['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output0 .= '
                    <div class="panel-footer">
                        <div class="typo3-login-copyright-wrap">
                            <a href="#loginCopyright" class="typo3-login-copyright-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="loginCopyright">
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['key'] = NULL;
$arguments287['id'] = NULL;
$arguments287['default'] = NULL;
$arguments287['arguments'] = NULL;
$arguments287['extensionName'] = NULL;
$arguments287['languageKey'] = NULL;
$arguments287['alternativeLanguageKeys'] = NULL;
$arguments287['key'] = 'login.copyrightLink';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext)]);

$output0 .= '</span>
                                <img src="';
$array289 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.typo3', $array289)]);

$output0 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['key'] = NULL;
$arguments290['id'] = NULL;
$arguments290['default'] = NULL;
$arguments290['arguments'] = NULL;
$arguments290['extensionName'] = NULL;
$arguments290['languageKey'] = NULL;
$arguments290['alternativeLanguageKeys'] = NULL;
$arguments290['key'] = 'login.typo3Logo';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext)]);

$output0 .= '" width="70" height="20" />
                            </a>
                            <div id="loginCopyright" class="collapse">
                                <div class="typo3-login-copyright-text">
                                    <p>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$array294 = array (
);return $renderingContext->getVariableProvider()->getByPath('copyright', $array294);
};
$arguments292 = array();
$arguments292['value'] = NULL;

$output0 .= isset($arguments292['value']) ? $arguments292['value'] : $renderChildrenClosure293();

$output0 .= '
                                    </p>
                                    <ul class="list-unstyled">
                                        <li><a href="https://typo3.org" target="_blank" rel="noreferrer" class="t3-login-link-typo3"><i class="fa fa-external-link"></i> TYPO3.org</a></li>
                                        <li><a href="https://typo3.org/donate/online-donation/" target="_blank" rel="noreferrer" class="t3-login-link-donate"><i class="fa fa-external-link"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['key'] = NULL;
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$arguments295['languageKey'] = NULL;
$arguments295['alternativeLanguageKeys'] = NULL;
$arguments295['key'] = 'login.donate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext)]);

$output0 .= '</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
            <div class="typo3-login-footnote">
                <p>';
$array303 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginFootnote', $array303)]);

$output302 .= '</p>
            </div>
        ';
return $output302;
};
$arguments297 = array();
$arguments297['then'] = NULL;
$arguments297['else'] = NULL;
$arguments297['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array299 = array();
$array300 = array (
);$array299['0'] = $renderingContext->getVariableProvider()->getByPath('loginFootnote', $array300);

$expression301 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments297['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array299)
					),
					$renderingContext
				);
$arguments297['__thenClosure'] = $renderChildrenClosure298;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output0 .= '
    </div>
</div>
';

return $output0;
}


}
#