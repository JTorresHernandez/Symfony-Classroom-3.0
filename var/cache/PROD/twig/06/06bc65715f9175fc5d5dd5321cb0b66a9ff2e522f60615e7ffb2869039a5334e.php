<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_69c0b2d2dd9ee1ff7cccb971be24a97e1771479f09be065c00e4feeae1039b4d extends Twig_Template
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
        $__internal_d22a49c84e8af033693d1ae0ab802641ea004a76376ecff95fcdbe22cf0e7709 = $this->env->getExtension("native_profiler");
        $__internal_d22a49c84e8af033693d1ae0ab802641ea004a76376ecff95fcdbe22cf0e7709->enter($__internal_d22a49c84e8af033693d1ae0ab802641ea004a76376ecff95fcdbe22cf0e7709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d22a49c84e8af033693d1ae0ab802641ea004a76376ecff95fcdbe22cf0e7709->leave($__internal_d22a49c84e8af033693d1ae0ab802641ea004a76376ecff95fcdbe22cf0e7709_prof);

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
