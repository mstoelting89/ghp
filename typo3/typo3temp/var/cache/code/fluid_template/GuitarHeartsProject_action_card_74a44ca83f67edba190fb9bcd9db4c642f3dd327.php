<?php

class GuitarHeartsProject_action_card_74a44ca83f67edba190fb9bcd9db4c642f3dd327 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <h1>Listing for GuitarHeartsProject</h1>

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
    ';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('foo', $array3)]);

$output0 .= '
    <table  class="tx_pighp" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['key'] = 'tx_pighp_domain_model_guitarheartsproject.name';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array14 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('guitarHeartsProject.name', $array14)]);
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['name'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['rev'] = NULL;
$arguments10['target'] = NULL;
$arguments10['action'] = NULL;
$arguments10['controller'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['pluginName'] = NULL;
$arguments10['pageUid'] = NULL;
$arguments10['pageType'] = NULL;
$arguments10['noCache'] = NULL;
$arguments10['noCacheHash'] = NULL;
$arguments10['section'] = NULL;
$arguments10['format'] = NULL;
$arguments10['linkAccessRestrictedPages'] = NULL;
$arguments10['additionalParams'] = NULL;
$arguments10['absolute'] = NULL;
$arguments10['addQueryString'] = NULL;
$arguments10['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments10['addQueryStringMethod'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['action'] = 'show';
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['guitarHeartsProject'] = $renderingContext->getVariableProvider()->getByPath('guitarHeartsProject', $array13);
$arguments10['arguments'] = $array12;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$arguments15['action'] = NULL;
$arguments15['controller'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['pluginName'] = NULL;
$arguments15['pageUid'] = NULL;
$arguments15['pageType'] = NULL;
$arguments15['noCache'] = NULL;
$arguments15['noCacheHash'] = NULL;
$arguments15['section'] = NULL;
$arguments15['format'] = NULL;
$arguments15['linkAccessRestrictedPages'] = NULL;
$arguments15['additionalParams'] = NULL;
$arguments15['absolute'] = NULL;
$arguments15['addQueryString'] = NULL;
$arguments15['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments15['addQueryStringMethod'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['action'] = 'edit';
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['guitarHeartsProject'] = $renderingContext->getVariableProvider()->getByPath('guitarHeartsProject', $array18);
$arguments15['arguments'] = $array17;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output9 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return 'Delete';
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
$arguments19['action'] = 'delete';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['guitarHeartsProject'] = $renderingContext->getVariableProvider()->getByPath('guitarHeartsProject', $array22);
$arguments19['arguments'] = $array21;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output9 .= '</td>
            </tr>
        ';
return $output9;
};
$arguments6 = array();
$arguments6['each'] = NULL;
$arguments6['as'] = NULL;
$arguments6['key'] = NULL;
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$array8 = array (
);$arguments6['each'] = $renderingContext->getVariableProvider()->getByPath('guitarHeartsProjects', $array8);
$arguments6['as'] = 'guitarHeartsProject';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return 'New GuitarHeartsProject';
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['name'] = NULL;
$arguments23['rel'] = NULL;
$arguments23['rev'] = NULL;
$arguments23['target'] = NULL;
$arguments23['action'] = NULL;
$arguments23['controller'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['pluginName'] = NULL;
$arguments23['pageUid'] = NULL;
$arguments23['pageType'] = NULL;
$arguments23['noCache'] = NULL;
$arguments23['noCacheHash'] = NULL;
$arguments23['section'] = NULL;
$arguments23['format'] = NULL;
$arguments23['linkAccessRestrictedPages'] = NULL;
$arguments23['additionalParams'] = NULL;
$arguments23['absolute'] = NULL;
$arguments23['addQueryString'] = NULL;
$arguments23['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments23['addQueryStringMethod'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';

$output25 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['name'] = 'Default';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output25 .= '

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
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
    <h1>Listing for GuitarHeartsProject</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['queueIdentifier'] = NULL;
$arguments31['as'] = NULL;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
    ';
$array33 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('foo', $array33)]);

$output30 .= '
    <table  class="tx_pighp" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$arguments34['key'] = 'tx_pighp_domain_model_guitarheartsproject.name';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output30 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$array44 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('guitarHeartsProject.name', $array44)]);
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$arguments40['action'] = NULL;
$arguments40['controller'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['pluginName'] = NULL;
$arguments40['pageUid'] = NULL;
$arguments40['pageType'] = NULL;
$arguments40['noCache'] = NULL;
$arguments40['noCacheHash'] = NULL;
$arguments40['section'] = NULL;
$arguments40['format'] = NULL;
$arguments40['linkAccessRestrictedPages'] = NULL;
$arguments40['additionalParams'] = NULL;
$arguments40['absolute'] = NULL;
$arguments40['addQueryString'] = NULL;
$arguments40['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments40['addQueryStringMethod'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['action'] = 'show';
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['guitarHeartsProject'] = $renderingContext->getVariableProvider()->getByPath('guitarHeartsProject', $array43);
$arguments40['arguments'] = $array42;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return 'Edit';
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
$arguments45['name'] = NULL;
$arguments45['rel'] = NULL;
$arguments45['rev'] = NULL;
$arguments45['target'] = NULL;
$arguments45['action'] = NULL;
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = NULL;
$arguments45['noCache'] = NULL;
$arguments45['noCacheHash'] = NULL;
$arguments45['section'] = NULL;
$arguments45['format'] = NULL;
$arguments45['linkAccessRestrictedPages'] = NULL;
$arguments45['additionalParams'] = NULL;
$arguments45['absolute'] = NULL;
$arguments45['addQueryString'] = NULL;
$arguments45['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments45['addQueryStringMethod'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['action'] = 'edit';
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['guitarHeartsProject'] = $renderingContext->getVariableProvider()->getByPath('guitarHeartsProject', $array48);
$arguments45['arguments'] = $array47;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output39 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$arguments49['action'] = NULL;
$arguments49['controller'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['pluginName'] = NULL;
$arguments49['pageUid'] = NULL;
$arguments49['pageType'] = NULL;
$arguments49['noCache'] = NULL;
$arguments49['noCacheHash'] = NULL;
$arguments49['section'] = NULL;
$arguments49['format'] = NULL;
$arguments49['linkAccessRestrictedPages'] = NULL;
$arguments49['additionalParams'] = NULL;
$arguments49['absolute'] = NULL;
$arguments49['addQueryString'] = NULL;
$arguments49['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments49['addQueryStringMethod'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['action'] = 'delete';
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['guitarHeartsProject'] = $renderingContext->getVariableProvider()->getByPath('guitarHeartsProject', $array52);
$arguments49['arguments'] = $array51;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output39 .= '</td>
            </tr>
        ';
return $output39;
};
$arguments36 = array();
$arguments36['each'] = NULL;
$arguments36['as'] = NULL;
$arguments36['key'] = NULL;
$arguments36['reverse'] = false;
$arguments36['iteration'] = NULL;
$array38 = array (
);$arguments36['each'] = $renderingContext->getVariableProvider()->getByPath('guitarHeartsProjects', $array38);
$arguments36['as'] = 'guitarHeartsProject';

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output30 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return 'New GuitarHeartsProject';
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
$arguments53['action'] = 'new';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output30 .= '
';
return $output30;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'content';

$output25 .= NULL;

$output25 .= '

';

return $output25;
}


}
#