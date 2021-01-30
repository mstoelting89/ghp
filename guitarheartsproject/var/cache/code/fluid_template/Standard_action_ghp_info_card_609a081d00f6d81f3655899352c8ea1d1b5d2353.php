<?php

class Standard_action_ghp_info_card_609a081d00f6d81f3655899352c8ea1d1b5d2353 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-0"></div>
    ';
};
$arguments17 = array();
$arguments17['value'] = NULL;
$arguments17['value'] = '';

$output16 .= '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-1"></div>
    ';
};
$arguments19 = array();
$arguments19['value'] = NULL;
$arguments19['value'] = 'extra-small';

$output16 .= '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-2"></div>
    ';
};
$arguments21 = array();
$arguments21['value'] = NULL;
$arguments21['value'] = 'small';

$output16 .= '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-3"></div>
    ';
};
$arguments23 = array();
$arguments23['value'] = NULL;
$arguments23['value'] = 'medium';

$output16 .= '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-4"></div>
    ';
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['value'] = 'large';

$output16 .= '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-5"></div>
    ';
};
$arguments27 = array();
$arguments27['value'] = NULL;
$arguments27['value'] = 'extra-large';

$output16 .= '';

$output16 .= '
';
return $output16;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array15 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array15);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return '';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-0"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'extra-small';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-1"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'small';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-2"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'medium';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-3"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'large';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-4"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'extra-large';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mt-5"></div>
    ';
});
}
}, array($arguments1));

$output0 .= '
<div class="row info-items">
    <div class="col-md-5 flex align-self-center">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['alt'] = NULL;
$arguments35['file'] = NULL;
$arguments35['additionalConfig'] = array (
);
$arguments35['width'] = NULL;
$arguments35['height'] = NULL;
$arguments35['cropVariant'] = 'default';
$arguments35['fileExtension'] = NULL;
$arguments35['loading'] = NULL;
$arguments35['class'] = 'image-embed-item';
$array37 = array (
);$arguments35['file'] = $renderingContext->getVariableProvider()->getByPath('files.0', $array37);
$arguments35['width'] = 400;
$arguments35['height'] = 400;

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
        ';
return $output34;
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('files.0', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = $renderChildrenClosure30;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array40);
};
$arguments38 = array();
$arguments38['value'] = NULL;

$output0 .= isset($arguments38['value']) ? $arguments38['value'] : $renderChildrenClosure39();

$output0 .= '
    </div>
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-0"></div>
    ';
};
$arguments57 = array();
$arguments57['value'] = NULL;
$arguments57['value'] = '';

$output56 .= '';

$output56 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-1"></div>
    ';
};
$arguments59 = array();
$arguments59['value'] = NULL;
$arguments59['value'] = 'extra-small';

$output56 .= '';

$output56 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-2"></div>
    ';
};
$arguments61 = array();
$arguments61['value'] = NULL;
$arguments61['value'] = 'small';

$output56 .= '';

$output56 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-3"></div>
    ';
};
$arguments63 = array();
$arguments63['value'] = NULL;
$arguments63['value'] = 'medium';

$output56 .= '';

$output56 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-4"></div>
    ';
};
$arguments65 = array();
$arguments65['value'] = NULL;
$arguments65['value'] = 'large';

$output56 .= '';

$output56 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-5"></div>
    ';
};
$arguments67 = array();
$arguments67['value'] = NULL;
$arguments67['value'] = 'extra-large';

$output56 .= '';

$output56 .= '
';
return $output56;
};
$arguments41 = array();
$arguments41['expression'] = NULL;
$array55 = array (
);$arguments41['expression'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array55);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return '';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-0"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'extra-small';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-1"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'small';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-2"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'medium';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-3"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'large';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-4"></div>
    ';
});
case call_user_func(function() use ($renderingContext, $self) {

return 'extra-large';
}): return call_user_func(function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-5"></div>
    ';
});
}
}, array($arguments41));

$output0 .= '

';

return $output0;
}


}
#