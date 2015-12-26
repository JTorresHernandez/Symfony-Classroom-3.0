<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ae1a71863dc7d9b78a761eba281c5c866f2847c06c798a4b56880dc2a2a9737 extends Twig_Template
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
        $__internal_9435b44ed47066666691238797c435d9829a6c6e2460e4c5bcfa1f14d49f7fc2 = $this->env->getExtension("native_profiler");
        $__internal_9435b44ed47066666691238797c435d9829a6c6e2460e4c5bcfa1f14d49f7fc2->enter($__internal_9435b44ed47066666691238797c435d9829a6c6e2460e4c5bcfa1f14d49f7fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9435b44ed47066666691238797c435d9829a6c6e2460e4c5bcfa1f14d49f7fc2->leave($__internal_9435b44ed47066666691238797c435d9829a6c6e2460e4c5bcfa1f14d49f7fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
