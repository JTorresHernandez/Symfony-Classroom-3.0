<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1cc1893d30469556ecb4af4ab8559ca5760212eea3a4b356340331a37c59252d extends Twig_Template
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
        $__internal_c5f28064661b83808ac8038d4f32b3bbdfa91527372c8393d24cc35034a842ac = $this->env->getExtension("native_profiler");
        $__internal_c5f28064661b83808ac8038d4f32b3bbdfa91527372c8393d24cc35034a842ac->enter($__internal_c5f28064661b83808ac8038d4f32b3bbdfa91527372c8393d24cc35034a842ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c5f28064661b83808ac8038d4f32b3bbdfa91527372c8393d24cc35034a842ac->leave($__internal_c5f28064661b83808ac8038d4f32b3bbdfa91527372c8393d24cc35034a842ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
