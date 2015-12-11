<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dacf6638a62a4612a204da9cd4bfb5a24ebb71f2dd618322016ce8be770fdcf1 extends Twig_Template
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
        $__internal_c51853073a3c1b58d10e4e2185925f2d8b1d4281870ceaef2719c3c6b8ed04e3 = $this->env->getExtension("native_profiler");
        $__internal_c51853073a3c1b58d10e4e2185925f2d8b1d4281870ceaef2719c3c6b8ed04e3->enter($__internal_c51853073a3c1b58d10e4e2185925f2d8b1d4281870ceaef2719c3c6b8ed04e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c51853073a3c1b58d10e4e2185925f2d8b1d4281870ceaef2719c3c6b8ed04e3->leave($__internal_c51853073a3c1b58d10e4e2185925f2d8b1d4281870ceaef2719c3c6b8ed04e3_prof);

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
