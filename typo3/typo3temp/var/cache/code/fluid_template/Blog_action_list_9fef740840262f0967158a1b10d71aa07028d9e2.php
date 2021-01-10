<?php

class Blog_action_list_9fef740840262f0967158a1b10d71aa07028d9e2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return $renderingContext->getVariableProvider()->getByPath('blog.blogtext', $array47);
};
$arguments45 = array();
$arguments45['value'] = NULL;
return isset($arguments45['value']) ? $arguments45['value'] : $renderChildrenClosure46();
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
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array52 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.picture.originalResource.name', $array52)]);
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
$arguments48['action'] = 'show';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array51);
$arguments48['arguments'] = $array50;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output18 .= '</td>
                <!--
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['name'] = NULL;
$arguments53['rel'] = NULL;
$arguments53['rev'] = NULL;
$arguments53['target'] = NULL;
$arguments53['action'] = NULL;
$arguments53['controller'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['pluginName'] = NULL;
$arguments53['pageUid'] = NULL;
$arguments53['pageType'] = NULL;
$arguments53['noCache'] = NULL;
$arguments53['noCacheHash'] = NULL;
$arguments53['section'] = NULL;
$arguments53['format'] = NULL;
$arguments53['linkAccessRestrictedPages'] = NULL;
$arguments53['additionalParams'] = NULL;
$arguments53['absolute'] = NULL;
$arguments53['addQueryString'] = NULL;
$arguments53['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments53['addQueryStringMethod'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['action'] = 'edit';
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array56);
$arguments53['arguments'] = $array55;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments57 = array();
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['class'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['name'] = NULL;
$arguments57['rel'] = NULL;
$arguments57['rev'] = NULL;
$arguments57['target'] = NULL;
$arguments57['action'] = NULL;
$arguments57['controller'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['pluginName'] = NULL;
$arguments57['pageUid'] = NULL;
$arguments57['pageType'] = NULL;
$arguments57['noCache'] = NULL;
$arguments57['noCacheHash'] = NULL;
$arguments57['section'] = NULL;
$arguments57['format'] = NULL;
$arguments57['linkAccessRestrictedPages'] = NULL;
$arguments57['additionalParams'] = NULL;
$arguments57['absolute'] = NULL;
$arguments57['addQueryString'] = NULL;
$arguments57['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments57['addQueryStringMethod'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['action'] = 'delete';
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array60);
$arguments57['arguments'] = $array59;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output18 .= '</td> -->
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
    <!--
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return 'New Blog';
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['name'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['rev'] = NULL;
$arguments61['target'] = NULL;
$arguments61['action'] = NULL;
$arguments61['controller'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['pluginName'] = NULL;
$arguments61['pageUid'] = NULL;
$arguments61['pageType'] = NULL;
$arguments61['noCache'] = NULL;
$arguments61['noCacheHash'] = NULL;
$arguments61['section'] = NULL;
$arguments61['format'] = NULL;
$arguments61['linkAccessRestrictedPages'] = NULL;
$arguments61['additionalParams'] = NULL;
$arguments61['absolute'] = NULL;
$arguments61['addQueryString'] = NULL;
$arguments61['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments61['addQueryStringMethod'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output0 .= '
    -->
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output63 = '';

$output63 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['name'] = NULL;
$arguments64['name'] = 'Default';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output63 .= '

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
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
    <h1>Listing for Blog</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['queueIdentifier'] = NULL;
$arguments69['as'] = NULL;

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '

    <table  class="tx_ownblog" >
        <tr>
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
$arguments71['key'] = 'tx_ownblog_domain_model_blog.title';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output68 .= '</th>
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
$arguments73['key'] = 'tx_ownblog_domain_model_blog.author';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output68 .= '</th>
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
$arguments75['key'] = 'tx_ownblog_domain_model_blog.date';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output68 .= '</th>
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
$arguments77['key'] = 'tx_ownblog_domain_model_blog.category';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output68 .= '</th>
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
$arguments79['key'] = 'tx_ownblog_domain_model_blog.blogtext';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output68 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'tx_ownblog_domain_model_blog.picture';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output68 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$array91 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array91)]);
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
$arguments87['name'] = NULL;
$arguments87['rel'] = NULL;
$arguments87['rev'] = NULL;
$arguments87['target'] = NULL;
$arguments87['action'] = NULL;
$arguments87['controller'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['pluginName'] = NULL;
$arguments87['pageUid'] = NULL;
$arguments87['pageType'] = NULL;
$arguments87['noCache'] = NULL;
$arguments87['noCacheHash'] = NULL;
$arguments87['section'] = NULL;
$arguments87['format'] = NULL;
$arguments87['linkAccessRestrictedPages'] = NULL;
$arguments87['additionalParams'] = NULL;
$arguments87['absolute'] = NULL;
$arguments87['addQueryString'] = NULL;
$arguments87['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments87['addQueryStringMethod'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['action'] = 'show';
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array90);
$arguments87['arguments'] = $array89;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array96 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.author', $array96)]);
};
$arguments92 = array();
$arguments92['additionalAttributes'] = NULL;
$arguments92['data'] = NULL;
$arguments92['class'] = NULL;
$arguments92['dir'] = NULL;
$arguments92['id'] = NULL;
$arguments92['lang'] = NULL;
$arguments92['style'] = NULL;
$arguments92['title'] = NULL;
$arguments92['accesskey'] = NULL;
$arguments92['tabindex'] = NULL;
$arguments92['onclick'] = NULL;
$arguments92['name'] = NULL;
$arguments92['rel'] = NULL;
$arguments92['rev'] = NULL;
$arguments92['target'] = NULL;
$arguments92['action'] = NULL;
$arguments92['controller'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['pluginName'] = NULL;
$arguments92['pageUid'] = NULL;
$arguments92['pageType'] = NULL;
$arguments92['noCache'] = NULL;
$arguments92['noCacheHash'] = NULL;
$arguments92['section'] = NULL;
$arguments92['format'] = NULL;
$arguments92['linkAccessRestrictedPages'] = NULL;
$arguments92['additionalParams'] = NULL;
$arguments92['absolute'] = NULL;
$arguments92['addQueryString'] = NULL;
$arguments92['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments92['addQueryStringMethod'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['action'] = 'show';
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array95);
$arguments92['arguments'] = $array94;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output86 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('blog.date', $array103);
};
$arguments101 = array();
$arguments101['date'] = NULL;
$arguments101['format'] = '';
$arguments101['base'] = NULL;
$renderChildrenClosure102 = ($arguments101['date'] !== null) ? function() use ($arguments101) { return $arguments101['date']; } : $renderChildrenClosure102;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['name'] = NULL;
$arguments97['rel'] = NULL;
$arguments97['rev'] = NULL;
$arguments97['target'] = NULL;
$arguments97['action'] = NULL;
$arguments97['controller'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['pluginName'] = NULL;
$arguments97['pageUid'] = NULL;
$arguments97['pageType'] = NULL;
$arguments97['noCache'] = NULL;
$arguments97['noCacheHash'] = NULL;
$arguments97['section'] = NULL;
$arguments97['format'] = NULL;
$arguments97['linkAccessRestrictedPages'] = NULL;
$arguments97['additionalParams'] = NULL;
$arguments97['absolute'] = NULL;
$arguments97['addQueryString'] = NULL;
$arguments97['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments97['addQueryStringMethod'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['action'] = 'show';
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array100);
$arguments97['arguments'] = $array99;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output86 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array108 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.category', $array108)]);
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['name'] = NULL;
$arguments104['rel'] = NULL;
$arguments104['rev'] = NULL;
$arguments104['target'] = NULL;
$arguments104['action'] = NULL;
$arguments104['controller'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['pluginName'] = NULL;
$arguments104['pageUid'] = NULL;
$arguments104['pageType'] = NULL;
$arguments104['noCache'] = NULL;
$arguments104['noCacheHash'] = NULL;
$arguments104['section'] = NULL;
$arguments104['format'] = NULL;
$arguments104['linkAccessRestrictedPages'] = NULL;
$arguments104['additionalParams'] = NULL;
$arguments104['absolute'] = NULL;
$arguments104['addQueryString'] = NULL;
$arguments104['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments104['addQueryStringMethod'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['action'] = 'show';
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array107);
$arguments104['arguments'] = $array106;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output86 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array115 = array (
);return $renderingContext->getVariableProvider()->getByPath('blog.blogtext', $array115);
};
$arguments113 = array();
$arguments113['value'] = NULL;
return isset($arguments113['value']) ? $arguments113['value'] : $renderChildrenClosure114();
};
$arguments109 = array();
$arguments109['additionalAttributes'] = NULL;
$arguments109['data'] = NULL;
$arguments109['class'] = NULL;
$arguments109['dir'] = NULL;
$arguments109['id'] = NULL;
$arguments109['lang'] = NULL;
$arguments109['style'] = NULL;
$arguments109['title'] = NULL;
$arguments109['accesskey'] = NULL;
$arguments109['tabindex'] = NULL;
$arguments109['onclick'] = NULL;
$arguments109['name'] = NULL;
$arguments109['rel'] = NULL;
$arguments109['rev'] = NULL;
$arguments109['target'] = NULL;
$arguments109['action'] = NULL;
$arguments109['controller'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['pluginName'] = NULL;
$arguments109['pageUid'] = NULL;
$arguments109['pageType'] = NULL;
$arguments109['noCache'] = NULL;
$arguments109['noCacheHash'] = NULL;
$arguments109['section'] = NULL;
$arguments109['format'] = NULL;
$arguments109['linkAccessRestrictedPages'] = NULL;
$arguments109['additionalParams'] = NULL;
$arguments109['absolute'] = NULL;
$arguments109['addQueryString'] = NULL;
$arguments109['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments109['addQueryStringMethod'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['action'] = 'show';
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array112);
$arguments109['arguments'] = $array111;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output86 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array120 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.picture.originalResource.name', $array120)]);
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['name'] = NULL;
$arguments116['rel'] = NULL;
$arguments116['rev'] = NULL;
$arguments116['target'] = NULL;
$arguments116['action'] = NULL;
$arguments116['controller'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['pluginName'] = NULL;
$arguments116['pageUid'] = NULL;
$arguments116['pageType'] = NULL;
$arguments116['noCache'] = NULL;
$arguments116['noCacheHash'] = NULL;
$arguments116['section'] = NULL;
$arguments116['format'] = NULL;
$arguments116['linkAccessRestrictedPages'] = NULL;
$arguments116['additionalParams'] = NULL;
$arguments116['absolute'] = NULL;
$arguments116['addQueryString'] = NULL;
$arguments116['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments116['addQueryStringMethod'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['action'] = 'show';
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array119);
$arguments116['arguments'] = $array118;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output86 .= '</td>
                <!--
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return 'Edit';
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
$arguments121['action'] = 'edit';
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array124);
$arguments121['arguments'] = $array123;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output86 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return 'Delete';
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
$arguments125['action'] = 'delete';
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array128);
$arguments125['arguments'] = $array127;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output86 .= '</td> -->
            </tr>
        ';
return $output86;
};
$arguments83 = array();
$arguments83['each'] = NULL;
$arguments83['as'] = NULL;
$arguments83['key'] = NULL;
$arguments83['reverse'] = false;
$arguments83['iteration'] = NULL;
$array85 = array (
);$arguments83['each'] = $renderingContext->getVariableProvider()->getByPath('blogs', $array85);
$arguments83['as'] = 'blog';

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output68 .= '
    </table>
    <!--
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return 'New Blog';
};
$arguments129 = array();
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$arguments129['action'] = NULL;
$arguments129['controller'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['pluginName'] = NULL;
$arguments129['pageUid'] = NULL;
$arguments129['pageType'] = NULL;
$arguments129['noCache'] = NULL;
$arguments129['noCacheHash'] = NULL;
$arguments129['section'] = NULL;
$arguments129['format'] = NULL;
$arguments129['linkAccessRestrictedPages'] = NULL;
$arguments129['additionalParams'] = NULL;
$arguments129['absolute'] = NULL;
$arguments129['addQueryString'] = NULL;
$arguments129['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments129['addQueryStringMethod'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['action'] = 'new';

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output68 .= '
    -->
';
return $output68;
};
$arguments66 = array();
$arguments66['name'] = NULL;
$arguments66['name'] = 'content';

$output63 .= NULL;

$output63 .= '

';

return $output63;
}


}
#