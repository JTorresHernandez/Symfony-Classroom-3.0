<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_33371ec0b4210486e22dcf479209558c629486d5fba37ec09a7725dac4a2bbc0 extends Twig_Template
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
        $__internal_a8cfdbe3fcbee9a6ea6e67a72b0baf6e3e48c60bf7cfbba9e4e25d49b0ae09f8 = $this->env->getExtension("native_profiler");
        $__internal_a8cfdbe3fcbee9a6ea6e67a72b0baf6e3e48c60bf7cfbba9e4e25d49b0ae09f8->enter($__internal_a8cfdbe3fcbee9a6ea6e67a72b0baf6e3e48c60bf7cfbba9e4e25d49b0ae09f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a8cfdbe3fcbee9a6ea6e67a72b0baf6e3e48c60bf7cfbba9e4e25d49b0ae09f8->leave($__internal_a8cfdbe3fcbee9a6ea6e67a72b0baf6e3e48c60bf7cfbba9e4e25d49b0ae09f8_prof);

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
