<?php

class partial_Inspector_RequiredValidatorEditor_d7a061531e9e3b1c8e6e45ebeb66f234b49fb685 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	<div class="t3-form-control-group form-group" data-identifier="editorWrapper">
		<label data-random-id data-random-id-attribute="for" data-random-id-number="1">
			<span data-template-property="label"></span>
			<div class="t3-form-controls" data-identifier="inspectorEditorControlsWrapper">
				<input data-random-id data-random-id-attribute="id" data-random-id-number="1" type="checkbox" />
			</div>
		</label>
	</div>
	<div class="t3-form-control-group form-group" data-template-property="validationErrorMessage">
		<label data-random-id data-random-id-attribute="for" data-random-id-number="2"><span data-template-property="validationErrorMessage-label"></span></label>
		<div class="t3-form-controls" data-identifier="inspectorEditorControlsWrapper">
			<input data-random-id data-random-id-attribute="id" data-random-id-number="2" type="text" value="" data-template-property="validationErrorMessage-propertyPath" class="form-control">
		</div>
		<span data-template-property="validationErrorMessage-fieldExplanationText" class="inspector-editor-hint"></span>
	</div>
</div>

';
}


}
#