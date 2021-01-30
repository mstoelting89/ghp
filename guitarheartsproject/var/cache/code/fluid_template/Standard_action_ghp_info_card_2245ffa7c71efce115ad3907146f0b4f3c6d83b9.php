<?php

class Standard_action_ghp_info_card_2245ffa7c71efce115ad3907146f0b4f3c6d83b9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="info-items">
    <div class="image-info-card">
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

<div class="ghp-mt-25 info-card-header">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['section'] = NULL;
$arguments38['partial'] = NULL;
$arguments38['delegate'] = NULL;
$arguments38['renderable'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['optional'] = false;
$arguments38['default'] = NULL;
$arguments38['contentAs'] = NULL;
$arguments38['debug'] = true;
$arguments38['partial'] = 'Header/All';
$arguments38['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '
</div>


<div class="ghp-mt-25">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array43 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array43);
};
$arguments41 = array();
$arguments41['value'] = NULL;

$output0 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output0 .= '
</div>


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-0"></div>
    ';
};
$arguments60 = array();
$arguments60['value'] = NULL;
$arguments60['value'] = '';

$output59 .= '';

$output59 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-1"></div>
    ';
};
$arguments62 = array();
$arguments62['value'] = NULL;
$arguments62['value'] = 'extra-small';

$output59 .= '';

$output59 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-2"></div>
    ';
};
$arguments64 = array();
$arguments64['value'] = NULL;
$arguments64['value'] = 'small';

$output59 .= '';

$output59 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-3"></div>
    ';
};
$arguments66 = array();
$arguments66['value'] = NULL;
$arguments66['value'] = 'medium';

$output59 .= '';

$output59 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-4"></div>
    ';
};
$arguments68 = array();
$arguments68['value'] = NULL;
$arguments68['value'] = 'large';

$output59 .= '';

$output59 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-5"></div>
    ';
};
$arguments70 = array();
$arguments70['value'] = NULL;
$arguments70['value'] = 'extra-large';

$output59 .= '';

$output59 .= '
';
return $output59;
};
$arguments44 = array();
$arguments44['expression'] = NULL;
$array58 = array (
);$arguments44['expression'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array58);

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
}, array($arguments44));

$output0 .= '

';

return $output0;
}


}
#