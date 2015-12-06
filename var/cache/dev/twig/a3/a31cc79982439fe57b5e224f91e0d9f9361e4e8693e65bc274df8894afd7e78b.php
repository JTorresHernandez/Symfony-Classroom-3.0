<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_19ee52b4ceeb8f9963c14173c9eda9b68ca5472b4e721a3560f08c8a59c15003 extends Twig_Template
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
        $__internal_97729184c103d85558d633a139c4c9636ee50fde6285fe854b68d5cfeff5292c = $this->env->getExtension("native_profiler");
        $__internal_97729184c103d85558d633a139c4c9636ee50fde6285fe854b68d5cfeff5292c->enter($__internal_97729184c103d85558d633a139c4c9636ee50fde6285fe854b68d5cfeff5292c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_97729184c103d85558d633a139c4c9636ee50fde6285fe854b68d5cfeff5292c->leave($__internal_97729184c103d85558d633a139c4c9636ee50fde6285fe854b68d5cfeff5292c_prof);

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
