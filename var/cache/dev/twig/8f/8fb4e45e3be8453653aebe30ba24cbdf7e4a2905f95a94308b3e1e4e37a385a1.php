<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_93a39b81d22a0bc67edc937bce7904b1c64b4ae36e5ebb3c51d3d92443215631 extends Twig_Template
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
        $__internal_18ee2fed883362b7d8d24e24be1239a0124ba2473471ec0ab76e63edac04a07c = $this->env->getExtension("native_profiler");
        $__internal_18ee2fed883362b7d8d24e24be1239a0124ba2473471ec0ab76e63edac04a07c->enter($__internal_18ee2fed883362b7d8d24e24be1239a0124ba2473471ec0ab76e63edac04a07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_18ee2fed883362b7d8d24e24be1239a0124ba2473471ec0ab76e63edac04a07c->leave($__internal_18ee2fed883362b7d8d24e24be1239a0124ba2473471ec0ab76e63edac04a07c_prof);

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
