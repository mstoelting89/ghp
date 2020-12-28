<?php

class partial_Inspector_TextareaEditor_d6b94c1dce1cfa0a6d29a29d8ee1f9b5db5a8b91 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
		<div class="t3-form-controls" data-identifier="inspectorEditorControlsWrapper">
			<textarea data-random-id data-random-id-attribute="id" data-random-id-number="1" data-template-property="propertyPath" class="form-control"></textarea>
		</div>
		<span class="inspector-editor-hint" data-template-property="fieldExplanationText"></span>
	</div>
</div>

';
}


}
#