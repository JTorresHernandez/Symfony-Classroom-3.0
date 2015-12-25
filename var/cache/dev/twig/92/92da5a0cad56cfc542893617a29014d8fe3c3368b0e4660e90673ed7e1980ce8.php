<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_05f6c5f58ecb0e014d8506ba0fd1b55c512706e12d45261e33e30b495acfab5c extends Twig_Template
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
        $__internal_3e3100f8ee6027cb6474ffa15a8c2a7b48be5470d348a3d2b59408092d579d07 = $this->env->getExtension("native_profiler");
        $__internal_3e3100f8ee6027cb6474ffa15a8c2a7b48be5470d348a3d2b59408092d579d07->enter($__internal_3e3100f8ee6027cb6474ffa15a8c2a7b48be5470d348a3d2b59408092d579d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3e3100f8ee6027cb6474ffa15a8c2a7b48be5470d348a3d2b59408092d579d07->leave($__internal_3e3100f8ee6027cb6474ffa15a8c2a7b48be5470d348a3d2b59408092d579d07_prof);

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
