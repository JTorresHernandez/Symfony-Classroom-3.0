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
        $__internal_8d8a10fce9cdde92fa548ccc43059491c1f822f20ecbde3e8112fb06beace968 = $this->env->getExtension("native_profiler");
        $__internal_8d8a10fce9cdde92fa548ccc43059491c1f822f20ecbde3e8112fb06beace968->enter($__internal_8d8a10fce9cdde92fa548ccc43059491c1f822f20ecbde3e8112fb06beace968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8d8a10fce9cdde92fa548ccc43059491c1f822f20ecbde3e8112fb06beace968->leave($__internal_8d8a10fce9cdde92fa548ccc43059491c1f822f20ecbde3e8112fb06beace968_prof);

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
