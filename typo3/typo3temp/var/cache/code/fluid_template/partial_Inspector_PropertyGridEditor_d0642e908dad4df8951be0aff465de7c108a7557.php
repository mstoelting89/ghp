<?php

class partial_Inspector_PropertyGridEditor_d0642e908dad4df8951be0aff465de7c108a7557 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="form-editor">
	<div class="t3-form-control-group form-group property-grid">
		<label data-random-id data-random-id-attribute="for" data-random-id-number="1"><span data-template-property="label"></span></label>
		<div data-editor="new-property-grid" data-template-property="newPropertyPath">
			<table class="table table-hover" data-identifier="propertyGridContainer">
				<thead>
					<tr>
						<th></th>
						<th>Label</th>
						<th>Value</th>
						<th>Selected</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr data-identifier="rowItem">
						<td><span class="sort-row-field" data-identifier="sortRow">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['identifier'] = NULL;
$arguments1['size'] = 'small';
$arguments1['overlay'] = NULL;
$arguments1['state'] = 'default';
$arguments1['alternativeMarkupIdentifier'] = NULL;
$arguments1['identifier'] = 'actions-move-move';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</span></td>
						<td><input type="text" class="form-control" value="" data-identifier="label" /></td>
						<td><input type="text" class="form-control" value="" data-identifier="value" /></td>
						<td><input type="checkbox" data-identifier="selectValue" /></td>
						<td>
							<div class="btn-group btn-group-sm" role="group">
								<button class="btn btn-default" title="Remove this row" data-identifier="deleteRow">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['identifier'] = NULL;
$arguments3['size'] = 'small';
$arguments3['overlay'] = NULL;
$arguments3['state'] = 'default';
$arguments3['alternativeMarkupIdentifier'] = NULL;
$arguments3['identifier'] = 'actions-delete';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '</button>
							</div>
						</td>
					</tr>
					<tr data-identifier="addRowItem">
						<td>
							<div class="btn-group btn-group-sm" role="group">
								<button data-random-id data-random-id-attribute="id" data-random-id-number="1" class="btn btn-default" title="Add a new row" data-identifier="addRow">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['identifier'] = NULL;
$arguments5['size'] = 'small';
$arguments5['overlay'] = NULL;
$arguments5['state'] = 'default';
$arguments5['alternativeMarkupIdentifier'] = NULL;
$arguments5['identifier'] = 'actions-add';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '</button>
							</div>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div data-editor="property-grid" data-template-property="propertyPath" class="t3-form-grid"></div>
	</div>
</div>

';

return $output0;
}


}
#