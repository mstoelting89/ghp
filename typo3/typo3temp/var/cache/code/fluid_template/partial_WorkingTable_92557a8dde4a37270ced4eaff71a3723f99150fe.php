<?php

class partial_WorkingTable_92557a8dde4a37270ced4eaff71a3723f99150fe extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div role="tabpanel">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
			<li role="presentation" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('activeWorkspaceUid', $array8);
$array7['1'] = ' == ';
$array9 = array (
);$array7['2'] = $renderingContext->getVariableProvider()->getByPath('workspace.workspaceId', $array9);

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['then'] = 'class="active"';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '><a href="';
$array11 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('workspace.triggerUrl', $array11)]);

$output4 .= '" aria-controls="';
$array12 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('workspace.itemId', $array12)]);

$output4 .= '" role="tab">';
$array13 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('workspace.title', $array13)]);

$output4 .= '</a></li>
		';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('workspaceList', $array3);
$arguments1['as'] = 'workspace';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active">
			<div class="form-section" id="workspace-panel" data-page-uid="';
$array14 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageUid', $array14)]);

$output0 .= '">
				<form id="workspace-settings-form" class="form-inline form-inline-spaced">
					<div class="form-group">
						<select name="depth" class="form-control" disabled>
							<option value="0">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_0';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '</option>
							<option value="1">';
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
$arguments17['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_1';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= '</option>
							<option value="2">';
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
$arguments19['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_2';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '</option>
							<option value="3">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_3';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output0 .= '</option>
							<option value="4">';
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
$arguments23['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_4';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output0 .= '</option>
							<option value="999">';
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
$arguments25['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_infi';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output0 .= '</option>
						</select>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon input-group-icon"></span>
							<select name="languages" class="form-control" disabled></select>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<input class="form-control t3js-clearable" type="text" name="search-text">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['identifier'] = NULL;
$arguments27['size'] = 'small';
$arguments27['overlay'] = NULL;
$arguments27['state'] = 'default';
$arguments27['alternativeMarkupIdentifier'] = NULL;
$arguments27['identifier'] = 'actions-search';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '</button>
							</span>
						</div>
					</div>
				</form>
				<div class="hidden" id="workspace-action-icons">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return 'We pre-render the required icons that are used in the Workspaces module until we\'re able to use StandaloneView of Fluid';
};
$arguments29 = array();

$output0 .= NULL;

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['identifier'] = NULL;
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$arguments31['identifier'] = 'empty-empty';
$arguments31['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['identifier'] = NULL;
$arguments33['size'] = 'small';
$arguments33['overlay'] = NULL;
$arguments33['state'] = 'default';
$arguments33['alternativeMarkupIdentifier'] = NULL;
$arguments33['identifier'] = 'actions-version-workspace-preview';
$arguments33['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['identifier'] = NULL;
$arguments35['size'] = 'small';
$arguments35['overlay'] = NULL;
$arguments35['state'] = 'default';
$arguments35['alternativeMarkupIdentifier'] = NULL;
$arguments35['identifier'] = 'actions-version-document-remove';
$arguments35['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['identifier'] = NULL;
$arguments37['size'] = 'small';
$arguments37['overlay'] = NULL;
$arguments37['state'] = 'default';
$arguments37['alternativeMarkupIdentifier'] = NULL;
$arguments37['identifier'] = 'actions-version-page-open';
$arguments37['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['identifier'] = NULL;
$arguments39['size'] = 'small';
$arguments39['overlay'] = NULL;
$arguments39['state'] = 'default';
$arguments39['alternativeMarkupIdentifier'] = NULL;
$arguments39['identifier'] = 'actions-version-swap-version';
$arguments39['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['identifier'] = NULL;
$arguments41['size'] = 'small';
$arguments41['overlay'] = NULL;
$arguments41['state'] = 'default';
$arguments41['alternativeMarkupIdentifier'] = NULL;
$arguments41['identifier'] = 'actions-open';
$arguments41['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['identifier'] = NULL;
$arguments43['size'] = 'small';
$arguments43['overlay'] = NULL;
$arguments43['state'] = 'default';
$arguments43['alternativeMarkupIdentifier'] = NULL;
$arguments43['identifier'] = 'actions-document-info';
$arguments43['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['identifier'] = NULL;
$arguments45['size'] = 'small';
$arguments45['overlay'] = NULL;
$arguments45['state'] = 'default';
$arguments45['alternativeMarkupIdentifier'] = NULL;
$arguments45['identifier'] = 'apps-pagetree-expand';
$arguments45['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['identifier'] = NULL;
$arguments47['size'] = 'small';
$arguments47['overlay'] = NULL;
$arguments47['state'] = 'default';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$arguments47['identifier'] = 'apps-pagetree-collapse';
$arguments47['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output0 .= '
				</div>
				<div class="table-fit">
					<table class="table table-striped">
						<thead>
						<tr>
							<th><button type="button" class="btn btn-default t3js-toggle-all">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['identifier'] = NULL;
$arguments49['size'] = 'small';
$arguments49['overlay'] = NULL;
$arguments49['state'] = 'default';
$arguments49['alternativeMarkupIdentifier'] = NULL;
$arguments49['identifier'] = 'actions-document-select';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output0 .= '</span></button></th>
							<th>';
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
$arguments51['key'] = 'column.wsTitle';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output0 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['key'] = NULL;
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['languageKey'] = NULL;
$arguments53['alternativeLanguageKeys'] = NULL;
$arguments53['key'] = 'column.liveTitle';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output0 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['languageKey'] = NULL;
$arguments55['alternativeLanguageKeys'] = NULL;
$arguments55['key'] = 'column.stage';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output0 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'column.integrity';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output0 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['identifier'] = NULL;
$arguments59['size'] = 'small';
$arguments59['overlay'] = NULL;
$arguments59['state'] = 'default';
$arguments59['alternativeMarkupIdentifier'] = NULL;
$arguments59['identifier'] = 'flags-multiple';
$arguments59['size'] = 'small';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output0 .= '</th>
							<th></th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<form id="workspace-actions-form" class="form-inline form-inline-spaced">
					<div class="form-group">
						<select name="stage-action" class="form-control" disabled>
							<option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['languageKey'] = NULL;
$arguments61['alternativeLanguageKeys'] = NULL;
$arguments61['key'] = 'chooseAction';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output0 .= '</option>
						</select>
					</div>
					<div class="form-group">
						<select name="selection-action" class="form-control" disabled>
							<option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['languageKey'] = NULL;
$arguments63['alternativeLanguageKeys'] = NULL;
$arguments63['key'] = 'chooseSelectionAction';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output0 .= '</option>
						</select>
					</div>
					<div class="form-group">
						<select name="mass-action" class="form-control" disabled>
							<option value="">';
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
$arguments65['key'] = 'chooseMassAction';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output0 .= '</option>
						</select>
					</div>
				</form>
				<nav id="workspace-pagination"></nav>
			</div>
		</div>
	</div>
</div>

';

return $output0;
}


}
#