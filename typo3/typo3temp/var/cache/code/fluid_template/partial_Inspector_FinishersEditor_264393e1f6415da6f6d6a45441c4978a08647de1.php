<?php

class partial_Inspector_FinishersEditor_264393e1f6415da6f6d6a45441c4978a08647de1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
		<label data-random-id data-random-id-attribute="for" data-random-id-number="1">
			<span data-template-property="label"></span>
		</label>
		<div id="t3-form-add-finisher" class="t3-form-add-collection-element">
			<select data-random-id data-random-id-attribute="id" data-random-id-number="1" data-template-property="selectOptions" class="form-control"></select>
		</div>
	</div>
</div>
<div id="t3-form-inspector-finishers" class="t3-form-collection-container" data-identifier="inspectorFinishers">
</div>

';
}


}
#