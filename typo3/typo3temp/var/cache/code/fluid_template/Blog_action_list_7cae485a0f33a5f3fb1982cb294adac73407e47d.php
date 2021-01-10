<?php

class Blog_action_list_7cae485a0f33a5f3fb1982cb294adac73407e47d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>Listing for Blog</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    <table  class="tx_ownblog" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'tx_ownblog_domain_model_blog.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['languageKey'] = NULL;
$arguments5['alternativeLanguageKeys'] = NULL;
$arguments5['key'] = 'tx_ownblog_domain_model_blog.author';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'tx_ownblog_domain_model_blog.date';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'tx_ownblog_domain_model_blog.category';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'tx_ownblog_domain_model_blog.blogtext';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'tx_ownblog_domain_model_blog.picture';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output0 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$array23 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array23)]);
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$arguments19['action'] = NULL;
$arguments19['controller'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['pluginName'] = NULL;
$arguments19['pageUid'] = NULL;
$arguments19['pageType'] = NULL;
$arguments19['noCache'] = NULL;
$arguments19['noCacheHash'] = NULL;
$arguments19['section'] = NULL;
$arguments19['format'] = NULL;
$arguments19['linkAccessRestrictedPages'] = NULL;
$arguments19['additionalParams'] = NULL;
$arguments19['absolute'] = NULL;
$arguments19['addQueryString'] = NULL;
$arguments19['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments19['addQueryStringMethod'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['action'] = 'show';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array22);
$arguments19['arguments'] = $array21;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array28 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.author', $array28)]);
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['name'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['rev'] = NULL;
$arguments24['target'] = NULL;
$arguments24['action'] = NULL;
$arguments24['controller'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['pluginName'] = NULL;
$arguments24['pageUid'] = NULL;
$arguments24['pageType'] = NULL;
$arguments24['noCache'] = NULL;
$arguments24['noCacheHash'] = NULL;
$arguments24['section'] = NULL;
$arguments24['format'] = NULL;
$arguments24['linkAccessRestrictedPages'] = NULL;
$arguments24['additionalParams'] = NULL;
$arguments24['absolute'] = NULL;
$arguments24['addQueryString'] = NULL;
$arguments24['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments24['addQueryStringMethod'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['action'] = 'show';
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array27);
$arguments24['arguments'] = $array26;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$array35 = array (
);return $renderingContext->getVariableProvider()->getByPath('blog.date', $array35);
};
$arguments33 = array();
$arguments33['date'] = NULL;
$arguments33['format'] = '';
$arguments33['base'] = NULL;
$renderChildrenClosure34 = ($arguments33['date'] !== null) ? function() use ($arguments33) { return $arguments33['date']; } : $renderChildrenClosure34;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = NULL;
$arguments29['rel'] = NULL;
$arguments29['rev'] = NULL;
$arguments29['target'] = NULL;
$arguments29['action'] = NULL;
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = NULL;
$arguments29['noCache'] = NULL;
$arguments29['noCacheHash'] = NULL;
$arguments29['section'] = NULL;
$arguments29['format'] = NULL;
$arguments29['linkAccessRestrictedPages'] = NULL;
$arguments29['additionalParams'] = NULL;
$arguments29['absolute'] = NULL;
$arguments29['addQueryString'] = NULL;
$arguments29['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments29['addQueryStringMethod'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['action'] = 'show';
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array32);
$arguments29['arguments'] = $array31;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$array40 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.category', $array40)]);
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['name'] = NULL;
$arguments36['rel'] = NULL;
$arguments36['rev'] = NULL;
$arguments36['target'] = NULL;
$arguments36['action'] = NULL;
$arguments36['controller'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['pluginName'] = NULL;
$arguments36['pageUid'] = NULL;
$arguments36['pageType'] = NULL;
$arguments36['noCache'] = NULL;
$arguments36['noCacheHash'] = NULL;
$arguments36['section'] = NULL;
$arguments36['format'] = NULL;
$arguments36['linkAccessRestrictedPages'] = NULL;
$arguments36['additionalParams'] = NULL;
$arguments36['absolute'] = NULL;
$arguments36['addQueryString'] = NULL;
$arguments36['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments36['addQueryStringMethod'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['action'] = 'show';
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array39);
$arguments36['arguments'] = $array38;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array45 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.blogtext', $array45)]);
};
$arguments41 = array();
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['name'] = NULL;
$arguments41['rel'] = NULL;
$arguments41['rev'] = NULL;
$arguments41['target'] = NULL;
$arguments41['action'] = NULL;
$arguments41['controller'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['pluginName'] = NULL;
$arguments41['pageUid'] = NULL;
$arguments41['pageType'] = NULL;
$arguments41['noCache'] = NULL;
$arguments41['noCacheHash'] = NULL;
$arguments41['section'] = NULL;
$arguments41['format'] = NULL;
$arguments41['linkAccessRestrictedPages'] = NULL;
$arguments41['additionalParams'] = NULL;
$arguments41['absolute'] = NULL;
$arguments41['addQueryString'] = NULL;
$arguments41['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments41['addQueryStringMethod'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['action'] = 'show';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array44);
$arguments41['arguments'] = $array43;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array50 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.picture.originalResource.name', $array50)]);
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['name'] = NULL;
$arguments46['rel'] = NULL;
$arguments46['rev'] = NULL;
$arguments46['target'] = NULL;
$arguments46['action'] = NULL;
$arguments46['controller'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['pluginName'] = NULL;
$arguments46['pageUid'] = NULL;
$arguments46['pageType'] = NULL;
$arguments46['noCache'] = NULL;
$arguments46['noCacheHash'] = NULL;
$arguments46['section'] = NULL;
$arguments46['format'] = NULL;
$arguments46['linkAccessRestrictedPages'] = NULL;
$arguments46['additionalParams'] = NULL;
$arguments46['absolute'] = NULL;
$arguments46['addQueryString'] = NULL;
$arguments46['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments46['addQueryStringMethod'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['action'] = 'show';
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array49);
$arguments46['arguments'] = $array48;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments51 = array();
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['name'] = NULL;
$arguments51['rel'] = NULL;
$arguments51['rev'] = NULL;
$arguments51['target'] = NULL;
$arguments51['action'] = NULL;
$arguments51['controller'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['pluginName'] = NULL;
$arguments51['pageUid'] = NULL;
$arguments51['pageType'] = NULL;
$arguments51['noCache'] = NULL;
$arguments51['noCacheHash'] = NULL;
$arguments51['section'] = NULL;
$arguments51['format'] = NULL;
$arguments51['linkAccessRestrictedPages'] = NULL;
$arguments51['additionalParams'] = NULL;
$arguments51['absolute'] = NULL;
$arguments51['addQueryString'] = NULL;
$arguments51['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['action'] = 'edit';
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array54);
$arguments51['arguments'] = $array53;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments55 = array();
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['class'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['name'] = NULL;
$arguments55['rel'] = NULL;
$arguments55['rev'] = NULL;
$arguments55['target'] = NULL;
$arguments55['action'] = NULL;
$arguments55['controller'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['pluginName'] = NULL;
$arguments55['pageUid'] = NULL;
$arguments55['pageType'] = NULL;
$arguments55['noCache'] = NULL;
$arguments55['noCacheHash'] = NULL;
$arguments55['section'] = NULL;
$arguments55['format'] = NULL;
$arguments55['linkAccessRestrictedPages'] = NULL;
$arguments55['additionalParams'] = NULL;
$arguments55['absolute'] = NULL;
$arguments55['addQueryString'] = NULL;
$arguments55['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments55['addQueryStringMethod'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['action'] = 'delete';
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array58);
$arguments55['arguments'] = $array57;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output18 .= '</td>
            </tr>
        ';
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('blogs', $array17);
$arguments15['as'] = 'blog';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return 'New Blog';
};
$arguments59 = array();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['name'] = NULL;
$arguments59['rel'] = NULL;
$arguments59['rev'] = NULL;
$arguments59['target'] = NULL;
$arguments59['action'] = NULL;
$arguments59['controller'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['pageType'] = NULL;
$arguments59['noCache'] = NULL;
$arguments59['noCacheHash'] = NULL;
$arguments59['section'] = NULL;
$arguments59['format'] = NULL;
$arguments59['linkAccessRestrictedPages'] = NULL;
$arguments59['additionalParams'] = NULL;
$arguments59['absolute'] = NULL;
$arguments59['addQueryString'] = NULL;
$arguments59['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments59['addQueryStringMethod'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output61 = '';

$output61 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['name'] = NULL;
$arguments62['name'] = 'Default';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output61 .= '

This Template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        List.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
    <h1>Listing for Blog</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['queueIdentifier'] = NULL;
$arguments67['as'] = NULL;

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '

    <table  class="tx_ownblog" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'tx_ownblog_domain_model_blog.title';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output66 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'tx_ownblog_domain_model_blog.author';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output66 .= '</th>
            <th>';
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
$arguments73['key'] = 'tx_ownblog_domain_model_blog.date';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output66 .= '</th>
            <th>';
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
$arguments75['key'] = 'tx_ownblog_domain_model_blog.category';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output66 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$arguments77['key'] = 'tx_ownblog_domain_model_blog.blogtext';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output66 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['languageKey'] = NULL;
$arguments79['alternativeLanguageKeys'] = NULL;
$arguments79['key'] = 'tx_ownblog_domain_model_blog.picture';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output66 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array89 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array89)]);
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$arguments85['action'] = NULL;
$arguments85['controller'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['pluginName'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = NULL;
$arguments85['noCache'] = NULL;
$arguments85['noCacheHash'] = NULL;
$arguments85['section'] = NULL;
$arguments85['format'] = NULL;
$arguments85['linkAccessRestrictedPages'] = NULL;
$arguments85['additionalParams'] = NULL;
$arguments85['absolute'] = NULL;
$arguments85['addQueryString'] = NULL;
$arguments85['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['action'] = 'show';
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array88);
$arguments85['arguments'] = $array87;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$array94 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.author', $array94)]);
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['name'] = NULL;
$arguments90['rel'] = NULL;
$arguments90['rev'] = NULL;
$arguments90['target'] = NULL;
$arguments90['action'] = NULL;
$arguments90['controller'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['pluginName'] = NULL;
$arguments90['pageUid'] = NULL;
$arguments90['pageType'] = NULL;
$arguments90['noCache'] = NULL;
$arguments90['noCacheHash'] = NULL;
$arguments90['section'] = NULL;
$arguments90['format'] = NULL;
$arguments90['linkAccessRestrictedPages'] = NULL;
$arguments90['additionalParams'] = NULL;
$arguments90['absolute'] = NULL;
$arguments90['addQueryString'] = NULL;
$arguments90['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments90['addQueryStringMethod'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['action'] = 'show';
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array93);
$arguments90['arguments'] = $array92;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output84 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array101 = array (
);return $renderingContext->getVariableProvider()->getByPath('blog.date', $array101);
};
$arguments99 = array();
$arguments99['date'] = NULL;
$arguments99['format'] = '';
$arguments99['base'] = NULL;
$renderChildrenClosure100 = ($arguments99['date'] !== null) ? function() use ($arguments99) { return $arguments99['date']; } : $renderChildrenClosure100;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$arguments95['action'] = NULL;
$arguments95['controller'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['pluginName'] = NULL;
$arguments95['pageUid'] = NULL;
$arguments95['pageType'] = NULL;
$arguments95['noCache'] = NULL;
$arguments95['noCacheHash'] = NULL;
$arguments95['section'] = NULL;
$arguments95['format'] = NULL;
$arguments95['linkAccessRestrictedPages'] = NULL;
$arguments95['additionalParams'] = NULL;
$arguments95['absolute'] = NULL;
$arguments95['addQueryString'] = NULL;
$arguments95['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments95['addQueryStringMethod'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['action'] = 'show';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array98);
$arguments95['arguments'] = $array97;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output84 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$array106 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.category', $array106)]);
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['name'] = NULL;
$arguments102['rel'] = NULL;
$arguments102['rev'] = NULL;
$arguments102['target'] = NULL;
$arguments102['action'] = NULL;
$arguments102['controller'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['pluginName'] = NULL;
$arguments102['pageUid'] = NULL;
$arguments102['pageType'] = NULL;
$arguments102['noCache'] = NULL;
$arguments102['noCacheHash'] = NULL;
$arguments102['section'] = NULL;
$arguments102['format'] = NULL;
$arguments102['linkAccessRestrictedPages'] = NULL;
$arguments102['additionalParams'] = NULL;
$arguments102['absolute'] = NULL;
$arguments102['addQueryString'] = NULL;
$arguments102['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments102['addQueryStringMethod'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['action'] = 'show';
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array105);
$arguments102['arguments'] = $array104;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output84 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$array111 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.blogtext', $array111)]);
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$arguments107['action'] = NULL;
$arguments107['controller'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['pluginName'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = NULL;
$arguments107['noCache'] = NULL;
$arguments107['noCacheHash'] = NULL;
$arguments107['section'] = NULL;
$arguments107['format'] = NULL;
$arguments107['linkAccessRestrictedPages'] = NULL;
$arguments107['additionalParams'] = NULL;
$arguments107['absolute'] = NULL;
$arguments107['addQueryString'] = NULL;
$arguments107['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['action'] = 'show';
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array110);
$arguments107['arguments'] = $array109;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output84 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$array116 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.picture.originalResource.name', $array116)]);
};
$arguments112 = array();
$arguments112['additionalAttributes'] = NULL;
$arguments112['data'] = NULL;
$arguments112['class'] = NULL;
$arguments112['dir'] = NULL;
$arguments112['id'] = NULL;
$arguments112['lang'] = NULL;
$arguments112['style'] = NULL;
$arguments112['title'] = NULL;
$arguments112['accesskey'] = NULL;
$arguments112['tabindex'] = NULL;
$arguments112['onclick'] = NULL;
$arguments112['name'] = NULL;
$arguments112['rel'] = NULL;
$arguments112['rev'] = NULL;
$arguments112['target'] = NULL;
$arguments112['action'] = NULL;
$arguments112['controller'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['pluginName'] = NULL;
$arguments112['pageUid'] = NULL;
$arguments112['pageType'] = NULL;
$arguments112['noCache'] = NULL;
$arguments112['noCacheHash'] = NULL;
$arguments112['section'] = NULL;
$arguments112['format'] = NULL;
$arguments112['linkAccessRestrictedPages'] = NULL;
$arguments112['additionalParams'] = NULL;
$arguments112['absolute'] = NULL;
$arguments112['addQueryString'] = NULL;
$arguments112['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments112['addQueryStringMethod'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['action'] = 'show';
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array115);
$arguments112['arguments'] = $array114;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output84 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments117 = array();
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$arguments117['name'] = NULL;
$arguments117['rel'] = NULL;
$arguments117['rev'] = NULL;
$arguments117['target'] = NULL;
$arguments117['action'] = NULL;
$arguments117['controller'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['pluginName'] = NULL;
$arguments117['pageUid'] = NULL;
$arguments117['pageType'] = NULL;
$arguments117['noCache'] = NULL;
$arguments117['noCacheHash'] = NULL;
$arguments117['section'] = NULL;
$arguments117['format'] = NULL;
$arguments117['linkAccessRestrictedPages'] = NULL;
$arguments117['additionalParams'] = NULL;
$arguments117['absolute'] = NULL;
$arguments117['addQueryString'] = NULL;
$arguments117['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments117['addQueryStringMethod'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['action'] = 'edit';
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array120);
$arguments117['arguments'] = $array119;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output84 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments121 = array();
$arguments121['additionalAttributes'] = NULL;
$arguments121['data'] = NULL;
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['id'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$arguments121['name'] = NULL;
$arguments121['rel'] = NULL;
$arguments121['rev'] = NULL;
$arguments121['target'] = NULL;
$arguments121['action'] = NULL;
$arguments121['controller'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['pluginName'] = NULL;
$arguments121['pageUid'] = NULL;
$arguments121['pageType'] = NULL;
$arguments121['noCache'] = NULL;
$arguments121['noCacheHash'] = NULL;
$arguments121['section'] = NULL;
$arguments121['format'] = NULL;
$arguments121['linkAccessRestrictedPages'] = NULL;
$arguments121['additionalParams'] = NULL;
$arguments121['absolute'] = NULL;
$arguments121['addQueryString'] = NULL;
$arguments121['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments121['addQueryStringMethod'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['action'] = 'delete';
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array124);
$arguments121['arguments'] = $array123;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output84 .= '</td>
            </tr>
        ';
return $output84;
};
$arguments81 = array();
$arguments81['each'] = NULL;
$arguments81['as'] = NULL;
$arguments81['key'] = NULL;
$arguments81['reverse'] = false;
$arguments81['iteration'] = NULL;
$array83 = array (
);$arguments81['each'] = $renderingContext->getVariableProvider()->getByPath('blogs', $array83);
$arguments81['as'] = 'blog';

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output66 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return 'New Blog';
};
$arguments125 = array();
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['name'] = NULL;
$arguments125['rel'] = NULL;
$arguments125['rev'] = NULL;
$arguments125['target'] = NULL;
$arguments125['action'] = NULL;
$arguments125['controller'] = NULL;
$arguments125['extensionName'] = NULL;
$arguments125['pluginName'] = NULL;
$arguments125['pageUid'] = NULL;
$arguments125['pageType'] = NULL;
$arguments125['noCache'] = NULL;
$arguments125['noCacheHash'] = NULL;
$arguments125['section'] = NULL;
$arguments125['format'] = NULL;
$arguments125['linkAccessRestrictedPages'] = NULL;
$arguments125['additionalParams'] = NULL;
$arguments125['absolute'] = NULL;
$arguments125['addQueryString'] = NULL;
$arguments125['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments125['addQueryStringMethod'] = NULL;
$arguments125['arguments'] = NULL;
$arguments125['action'] = 'new';

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output66 .= '
';
return $output66;
};
$arguments64 = array();
$arguments64['name'] = NULL;
$arguments64['name'] = 'content';

$output61 .= NULL;

$output61 .= '

';

return $output61;
}


}
#