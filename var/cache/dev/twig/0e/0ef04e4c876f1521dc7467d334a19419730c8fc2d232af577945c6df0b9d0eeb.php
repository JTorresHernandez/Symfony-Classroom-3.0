<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9b8d6dbacc69d8a467c56791fda7d329e83620eca18a5bbaf02716674d343e7f extends Twig_Template
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
        $__internal_9127e72cee0006c94b5b090d953cf628a18d025dfb57e70f4b25e27feea590f6 = $this->env->getExtension("native_profiler");
        $__internal_9127e72cee0006c94b5b090d953cf628a18d025dfb57e70f4b25e27feea590f6->enter($__internal_9127e72cee0006c94b5b090d953cf628a18d025dfb57e70f4b25e27feea590f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9127e72cee0006c94b5b090d953cf628a18d025dfb57e70f4b25e27feea590f6->leave($__internal_9127e72cee0006c94b5b090d953cf628a18d025dfb57e70f4b25e27feea590f6_prof);

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
