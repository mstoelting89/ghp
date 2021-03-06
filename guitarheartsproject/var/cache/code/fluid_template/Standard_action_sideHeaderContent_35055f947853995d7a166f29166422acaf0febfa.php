<?php

class Standard_action_sideHeaderContent_35055f947853995d7a166f29166422acaf0febfa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-4 flex align-self-center">
        <div class="firstWord">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.header', $array31);
};
$arguments29 = array();
$arguments29['value'] = NULL;

$output0 .= isset($arguments29['value']) ? $arguments29['value'] : $renderChildrenClosure30();

$output0 .= '</div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-8">

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output0 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output0 .= '
    </div>
</div>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-0"></div>
    ';
};
$arguments51 = array();
$arguments51['value'] = NULL;
$arguments51['value'] = '';

$output50 .= '';

$output50 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-1"></div>
    ';
};
$arguments53 = array();
$arguments53['value'] = NULL;
$arguments53['value'] = 'extra-small';

$output50 .= '';

$output50 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-2"></div>
    ';
};
$arguments55 = array();
$arguments55['value'] = NULL;
$arguments55['value'] = 'small';

$output50 .= '';

$output50 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-3"></div>
    ';
};
$arguments57 = array();
$arguments57['value'] = NULL;
$arguments57['value'] = 'medium';

$output50 .= '';

$output50 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-4"></div>
    ';
};
$arguments59 = array();
$arguments59['value'] = NULL;
$arguments59['value'] = 'large';

$output50 .= '';

$output50 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return '
        <div class="row ghp-mb-5"></div>
    ';
};
$arguments61 = array();
$arguments61['value'] = NULL;
$arguments61['value'] = 'extra-large';

$output50 .= '';

$output50 .= '
';
return $output50;
};
$arguments35 = array();
$arguments35['expression'] = NULL;
$array49 = array (
);$arguments35['expression'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array49);

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
}, array($arguments35));

$output0 .= '
';

return $output0;
}


}
#