<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_00e87767d145cc967cf5ef3604172ac461b2f48fea8bd14245f5671dfd34d9ac extends Twig_Template
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
        $__internal_e52524eb899c80dadff2b7aa321b90de81840d58bf8336cdfe8549f3ad32cba9 = $this->env->getExtension("native_profiler");
        $__internal_e52524eb899c80dadff2b7aa321b90de81840d58bf8336cdfe8549f3ad32cba9->enter($__internal_e52524eb899c80dadff2b7aa321b90de81840d58bf8336cdfe8549f3ad32cba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e52524eb899c80dadff2b7aa321b90de81840d58bf8336cdfe8549f3ad32cba9->leave($__internal_e52524eb899c80dadff2b7aa321b90de81840d58bf8336cdfe8549f3ad32cba9_prof);

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
