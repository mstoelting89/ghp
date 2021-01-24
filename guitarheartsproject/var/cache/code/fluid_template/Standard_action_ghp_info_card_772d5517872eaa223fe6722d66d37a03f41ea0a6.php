<?php

class Standard_action_ghp_info_card_772d5517872eaa223fe6722d66d37a03f41ea0a6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments29 = array();
$arguments29['title'] = NULL;
$arguments29['maxDepth'] = 8;
$arguments29['plainText'] = false;
$arguments29['ansiColors'] = false;
$arguments29['inline'] = false;
$arguments29['blacklistedClassNames'] = NULL;
$arguments29['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
<div class="row info-items">
    <div class="col-md-5 flex align-self-center">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['alt'] = NULL;
$arguments38['file'] = NULL;
$arguments38['additionalConfig'] = array (
);
$arguments38['width'] = NULL;
$arguments38['height'] = NULL;
$arguments38['cropVariant'] = 'default';
$arguments38['fileExtension'] = NULL;
$arguments38['loading'] = NULL;
$arguments38['class'] = 'image-embed-item';
$array40 = array (
);$arguments38['file'] = $renderingContext->getVariableProvider()->getByPath('files.0', $array40);
$arguments38['width'] = 400;
$arguments38['height'] = 400;

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
        ';
return $output37;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('files.0', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output0 .= '
    </div>
</div>
<div class="row">
    <div class="col-md-5">
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-0"></div>
    ';
};
$arguments88 = array();
$arguments88['value'] = NULL;
$arguments88['value'] = '';

$output87 .= '';

$output87 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-1"></div>
    ';
};
$arguments90 = array();
$arguments90['value'] = NULL;
$arguments90['value'] = 'extra-small';

$output87 .= '';

$output87 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-2"></div>
    ';
};
$arguments92 = array();
$arguments92['value'] = NULL;
$arguments92['value'] = 'small';

$output87 .= '';

$output87 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-3"></div>
    ';
};
$arguments94 = array();
$arguments94['value'] = NULL;
$arguments94['value'] = 'medium';

$output87 .= '';

$output87 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-4"></div>
    ';
};
$arguments96 = array();
$arguments96['value'] = NULL;
$arguments96['value'] = 'large';

$output87 .= '';

$output87 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-5"></div>
    ';
};
$arguments98 = array();
$arguments98['value'] = NULL;
$arguments98['value'] = 'extra-large';

$output87 .= '';

$output87 .= '
';
return $output87;
};
$arguments72 = array();
$arguments72['expression'] = NULL;
$array86 = array (
);$arguments72['expression'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array86);

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
}, array($arguments72));

$output0 .= '
';

return $output0;
}


}
#