<?php

class Blog_action_list_d4a54c958b2048cf0a99e77ed600ff96b31453b0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments3['key'] = 'tx_ownblog_domain_model_blog.name';

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
$arguments5['key'] = 'tx_ownblog_domain_model_blog.date';

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
$arguments7['key'] = 'tx_ownblog_domain_model_blog.category';

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
$arguments9['key'] = 'tx_ownblog_domain_model_blog.blogtext';

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
$arguments11['key'] = 'tx_ownblog_domain_model_blog.picture';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array21 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.name', $array21)]);
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['rel'] = NULL;
$arguments17['rev'] = NULL;
$arguments17['target'] = NULL;
$arguments17['action'] = NULL;
$arguments17['controller'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['pluginName'] = NULL;
$arguments17['pageUid'] = NULL;
$arguments17['pageType'] = NULL;
$arguments17['noCache'] = NULL;
$arguments17['noCacheHash'] = NULL;
$arguments17['section'] = NULL;
$arguments17['format'] = NULL;
$arguments17['linkAccessRestrictedPages'] = NULL;
$arguments17['additionalParams'] = NULL;
$arguments17['absolute'] = NULL;
$arguments17['addQueryString'] = NULL;
$arguments17['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments17['addQueryStringMethod'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['action'] = 'show';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array20);
$arguments17['arguments'] = $array19;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('blog.date', $array28);
};
$arguments26 = array();
$arguments26['date'] = NULL;
$arguments26['format'] = '';
$arguments26['base'] = NULL;
$renderChildrenClosure27 = ($arguments26['date'] !== null) ? function() use ($arguments26) { return $arguments26['date']; } : $renderChildrenClosure27;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['name'] = NULL;
$arguments22['rel'] = NULL;
$arguments22['rev'] = NULL;
$arguments22['target'] = NULL;
$arguments22['action'] = NULL;
$arguments22['controller'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['pluginName'] = NULL;
$arguments22['pageUid'] = NULL;
$arguments22['pageType'] = NULL;
$arguments22['noCache'] = NULL;
$arguments22['noCacheHash'] = NULL;
$arguments22['section'] = NULL;
$arguments22['format'] = NULL;
$arguments22['linkAccessRestrictedPages'] = NULL;
$arguments22['additionalParams'] = NULL;
$arguments22['absolute'] = NULL;
$arguments22['addQueryString'] = NULL;
$arguments22['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments22['addQueryStringMethod'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['action'] = 'show';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array25);
$arguments22['arguments'] = $array24;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array33 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.category', $array33)]);
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

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array38 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.blogtext', $array38)]);
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = NULL;
$arguments34['rel'] = NULL;
$arguments34['rev'] = NULL;
$arguments34['target'] = NULL;
$arguments34['action'] = NULL;
$arguments34['controller'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['pluginName'] = NULL;
$arguments34['pageUid'] = NULL;
$arguments34['pageType'] = NULL;
$arguments34['noCache'] = NULL;
$arguments34['noCacheHash'] = NULL;
$arguments34['section'] = NULL;
$arguments34['format'] = NULL;
$arguments34['linkAccessRestrictedPages'] = NULL;
$arguments34['additionalParams'] = NULL;
$arguments34['absolute'] = NULL;
$arguments34['addQueryString'] = NULL;
$arguments34['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments34['addQueryStringMethod'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['action'] = 'show';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array37);
$arguments34['arguments'] = $array36;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array43 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.picture.originalResource.name', $array43)]);
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['name'] = NULL;
$arguments39['rel'] = NULL;
$arguments39['rev'] = NULL;
$arguments39['target'] = NULL;
$arguments39['action'] = NULL;
$arguments39['controller'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['pluginName'] = NULL;
$arguments39['pageUid'] = NULL;
$arguments39['pageType'] = NULL;
$arguments39['noCache'] = NULL;
$arguments39['noCacheHash'] = NULL;
$arguments39['section'] = NULL;
$arguments39['format'] = NULL;
$arguments39['linkAccessRestrictedPages'] = NULL;
$arguments39['additionalParams'] = NULL;
$arguments39['absolute'] = NULL;
$arguments39['addQueryString'] = NULL;
$arguments39['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments39['addQueryStringMethod'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['action'] = 'show';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array42);
$arguments39['arguments'] = $array41;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['name'] = NULL;
$arguments44['rel'] = NULL;
$arguments44['rev'] = NULL;
$arguments44['target'] = NULL;
$arguments44['action'] = NULL;
$arguments44['controller'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['pluginName'] = NULL;
$arguments44['pageUid'] = NULL;
$arguments44['pageType'] = NULL;
$arguments44['noCache'] = NULL;
$arguments44['noCacheHash'] = NULL;
$arguments44['section'] = NULL;
$arguments44['format'] = NULL;
$arguments44['linkAccessRestrictedPages'] = NULL;
$arguments44['additionalParams'] = NULL;
$arguments44['absolute'] = NULL;
$arguments44['addQueryString'] = NULL;
$arguments44['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments44['addQueryStringMethod'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['action'] = 'edit';
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array47);
$arguments44['arguments'] = $array46;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments48 = array();
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['name'] = NULL;
$arguments48['rel'] = NULL;
$arguments48['rev'] = NULL;
$arguments48['target'] = NULL;
$arguments48['action'] = NULL;
$arguments48['controller'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['pluginName'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['pageType'] = NULL;
$arguments48['noCache'] = NULL;
$arguments48['noCacheHash'] = NULL;
$arguments48['section'] = NULL;
$arguments48['format'] = NULL;
$arguments48['linkAccessRestrictedPages'] = NULL;
$arguments48['additionalParams'] = NULL;
$arguments48['absolute'] = NULL;
$arguments48['addQueryString'] = NULL;
$arguments48['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['action'] = 'delete';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array51);
$arguments48['arguments'] = $array50;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output16 .= '</td>
            </tr>
        ';
return $output16;
};
$arguments13 = array();
$arguments13['each'] = NULL;
$arguments13['as'] = NULL;
$arguments13['key'] = NULL;
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$array15 = array (
);$arguments13['each'] = $renderingContext->getVariableProvider()->getByPath('blogs', $array15);
$arguments13['as'] = 'blog';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return 'New Blog';
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['name'] = NULL;
$arguments52['rel'] = NULL;
$arguments52['rev'] = NULL;
$arguments52['target'] = NULL;
$arguments52['action'] = NULL;
$arguments52['controller'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['pluginName'] = NULL;
$arguments52['pageUid'] = NULL;
$arguments52['pageType'] = NULL;
$arguments52['noCache'] = NULL;
$arguments52['noCacheHash'] = NULL;
$arguments52['section'] = NULL;
$arguments52['format'] = NULL;
$arguments52['linkAccessRestrictedPages'] = NULL;
$arguments52['additionalParams'] = NULL;
$arguments52['absolute'] = NULL;
$arguments52['addQueryString'] = NULL;
$arguments52['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments52['addQueryStringMethod'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output54 = '';

$output54 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['name'] = NULL;
$arguments55['name'] = 'Default';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output54 .= '

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
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
    <h1>Listing for Blog</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['queueIdentifier'] = NULL;
$arguments60['as'] = NULL;

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '

    <table  class="tx_ownblog" >
        <tr>
            <th>';
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
$arguments62['key'] = 'tx_ownblog_domain_model_blog.name';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output59 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'tx_ownblog_domain_model_blog.date';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output59 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['languageKey'] = NULL;
$arguments66['alternativeLanguageKeys'] = NULL;
$arguments66['key'] = 'tx_ownblog_domain_model_blog.category';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output59 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$arguments68['key'] = 'tx_ownblog_domain_model_blog.blogtext';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output59 .= '</th>
            <th>';
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
$arguments70['key'] = 'tx_ownblog_domain_model_blog.picture';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output59 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array80 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.name', $array80)]);
};
$arguments76 = array();
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = NULL;
$arguments76['rel'] = NULL;
$arguments76['rev'] = NULL;
$arguments76['target'] = NULL;
$arguments76['action'] = NULL;
$arguments76['controller'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['pluginName'] = NULL;
$arguments76['pageUid'] = NULL;
$arguments76['pageType'] = NULL;
$arguments76['noCache'] = NULL;
$arguments76['noCacheHash'] = NULL;
$arguments76['section'] = NULL;
$arguments76['format'] = NULL;
$arguments76['linkAccessRestrictedPages'] = NULL;
$arguments76['additionalParams'] = NULL;
$arguments76['absolute'] = NULL;
$arguments76['addQueryString'] = NULL;
$arguments76['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments76['addQueryStringMethod'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['action'] = 'show';
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array79);
$arguments76['arguments'] = $array78;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array87 = array (
);return $renderingContext->getVariableProvider()->getByPath('blog.date', $array87);
};
$arguments85 = array();
$arguments85['date'] = NULL;
$arguments85['format'] = '';
$arguments85['base'] = NULL;
$renderChildrenClosure86 = ($arguments85['date'] !== null) ? function() use ($arguments85) { return $arguments85['date']; } : $renderChildrenClosure86;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['name'] = NULL;
$arguments81['rel'] = NULL;
$arguments81['rev'] = NULL;
$arguments81['target'] = NULL;
$arguments81['action'] = NULL;
$arguments81['controller'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['pluginName'] = NULL;
$arguments81['pageUid'] = NULL;
$arguments81['pageType'] = NULL;
$arguments81['noCache'] = NULL;
$arguments81['noCacheHash'] = NULL;
$arguments81['section'] = NULL;
$arguments81['format'] = NULL;
$arguments81['linkAccessRestrictedPages'] = NULL;
$arguments81['additionalParams'] = NULL;
$arguments81['absolute'] = NULL;
$arguments81['addQueryString'] = NULL;
$arguments81['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments81['addQueryStringMethod'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['action'] = 'show';
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array84);
$arguments81['arguments'] = $array83;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output75 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array92 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.category', $array92)]);
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['name'] = NULL;
$arguments88['rel'] = NULL;
$arguments88['rev'] = NULL;
$arguments88['target'] = NULL;
$arguments88['action'] = NULL;
$arguments88['controller'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['pluginName'] = NULL;
$arguments88['pageUid'] = NULL;
$arguments88['pageType'] = NULL;
$arguments88['noCache'] = NULL;
$arguments88['noCacheHash'] = NULL;
$arguments88['section'] = NULL;
$arguments88['format'] = NULL;
$arguments88['linkAccessRestrictedPages'] = NULL;
$arguments88['additionalParams'] = NULL;
$arguments88['absolute'] = NULL;
$arguments88['addQueryString'] = NULL;
$arguments88['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments88['addQueryStringMethod'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['action'] = 'show';
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array91);
$arguments88['arguments'] = $array90;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output75 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array97 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.blogtext', $array97)]);
};
$arguments93 = array();
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['name'] = NULL;
$arguments93['rel'] = NULL;
$arguments93['rev'] = NULL;
$arguments93['target'] = NULL;
$arguments93['action'] = NULL;
$arguments93['controller'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['pluginName'] = NULL;
$arguments93['pageUid'] = NULL;
$arguments93['pageType'] = NULL;
$arguments93['noCache'] = NULL;
$arguments93['noCacheHash'] = NULL;
$arguments93['section'] = NULL;
$arguments93['format'] = NULL;
$arguments93['linkAccessRestrictedPages'] = NULL;
$arguments93['additionalParams'] = NULL;
$arguments93['absolute'] = NULL;
$arguments93['addQueryString'] = NULL;
$arguments93['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments93['addQueryStringMethod'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['action'] = 'show';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array96);
$arguments93['arguments'] = $array95;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output75 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array102 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.picture.originalResource.name', $array102)]);
};
$arguments98 = array();
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['name'] = NULL;
$arguments98['rel'] = NULL;
$arguments98['rev'] = NULL;
$arguments98['target'] = NULL;
$arguments98['action'] = NULL;
$arguments98['controller'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['pluginName'] = NULL;
$arguments98['pageUid'] = NULL;
$arguments98['pageType'] = NULL;
$arguments98['noCache'] = NULL;
$arguments98['noCacheHash'] = NULL;
$arguments98['section'] = NULL;
$arguments98['format'] = NULL;
$arguments98['linkAccessRestrictedPages'] = NULL;
$arguments98['additionalParams'] = NULL;
$arguments98['absolute'] = NULL;
$arguments98['addQueryString'] = NULL;
$arguments98['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments98['addQueryStringMethod'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['action'] = 'show';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array101);
$arguments98['arguments'] = $array100;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output75 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments103 = array();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['name'] = NULL;
$arguments103['rel'] = NULL;
$arguments103['rev'] = NULL;
$arguments103['target'] = NULL;
$arguments103['action'] = NULL;
$arguments103['controller'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['pluginName'] = NULL;
$arguments103['pageUid'] = NULL;
$arguments103['pageType'] = NULL;
$arguments103['noCache'] = NULL;
$arguments103['noCacheHash'] = NULL;
$arguments103['section'] = NULL;
$arguments103['format'] = NULL;
$arguments103['linkAccessRestrictedPages'] = NULL;
$arguments103['additionalParams'] = NULL;
$arguments103['absolute'] = NULL;
$arguments103['addQueryString'] = NULL;
$arguments103['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments103['addQueryStringMethod'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['action'] = 'edit';
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array106);
$arguments103['arguments'] = $array105;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output75 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return 'Delete';
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
$arguments107['action'] = 'delete';
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array110);
$arguments107['arguments'] = $array109;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output75 .= '</td>
            </tr>
        ';
return $output75;
};
$arguments72 = array();
$arguments72['each'] = NULL;
$arguments72['as'] = NULL;
$arguments72['key'] = NULL;
$arguments72['reverse'] = false;
$arguments72['iteration'] = NULL;
$array74 = array (
);$arguments72['each'] = $renderingContext->getVariableProvider()->getByPath('blogs', $array74);
$arguments72['as'] = 'blog';

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output59 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return 'New Blog';
};
$arguments111 = array();
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['name'] = NULL;
$arguments111['rel'] = NULL;
$arguments111['rev'] = NULL;
$arguments111['target'] = NULL;
$arguments111['action'] = NULL;
$arguments111['controller'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['pluginName'] = NULL;
$arguments111['pageUid'] = NULL;
$arguments111['pageType'] = NULL;
$arguments111['noCache'] = NULL;
$arguments111['noCacheHash'] = NULL;
$arguments111['section'] = NULL;
$arguments111['format'] = NULL;
$arguments111['linkAccessRestrictedPages'] = NULL;
$arguments111['additionalParams'] = NULL;
$arguments111['absolute'] = NULL;
$arguments111['addQueryString'] = NULL;
$arguments111['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments111['addQueryStringMethod'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['action'] = 'new';

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output59 .= '
';
return $output59;
};
$arguments57 = array();
$arguments57['name'] = NULL;
$arguments57['name'] = 'content';

$output54 .= NULL;

$output54 .= '

';

return $output54;
}


}
#