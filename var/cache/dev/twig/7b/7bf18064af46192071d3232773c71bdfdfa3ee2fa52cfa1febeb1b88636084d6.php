<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b49b5d3a081624fdbe3d5ef13b5438f8651aa49649c36b9b095fb714beac3644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39ad7b815d5cb78281ff3291ab16ce8edcb5bbbd436f185602294e3b732e62cb = $this->env->getExtension("native_profiler");
        $__internal_39ad7b815d5cb78281ff3291ab16ce8edcb5bbbd436f185602294e3b732e62cb->enter($__internal_39ad7b815d5cb78281ff3291ab16ce8edcb5bbbd436f185602294e3b732e62cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_39ad7b815d5cb78281ff3291ab16ce8edcb5bbbd436f185602294e3b732e62cb->leave($__internal_39ad7b815d5cb78281ff3291ab16ce8edcb5bbbd436f185602294e3b732e62cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
