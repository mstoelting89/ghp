<?php

class partial_Inspector_ValidationErrorMessageEditor_20df7616d3d955bc9c31a51e91c74338659dc958 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '
<div class="form-editor">
	<div class="t3-form-control-group form-group">
		<label data-random-id data-random-id-attribute="for" data-random-id-number="1"><span data-template-property="label"></span></label>
		<div data-identifier="inspectorEditorControlsGroup">
			<div class="t3-form-controls" data-identifier="inspectorEditorControlsWrapper">
				<input data-random-id data-random-id-attribute="id" data-random-id-number="1" type="text" value="" data-template-property="propertyPath" class="form-control">
			</div>
		</div>
		<span class="inspector-editor-hint" data-template-property="fieldExplanationText"></span>
	</div>
</div>

';
}


}
#