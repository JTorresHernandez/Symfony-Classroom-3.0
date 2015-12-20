<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b697a1d351e8e1c17751e5f6be2ebb3874d728c4d74cd3be793cfe108ca14494 extends Twig_Template
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
        $__internal_ac4f07f13950ce5019930eb4df0ab629dcb5f1235d1569bf8a6719e00cc2e698 = $this->env->getExtension("native_profiler");
        $__internal_ac4f07f13950ce5019930eb4df0ab629dcb5f1235d1569bf8a6719e00cc2e698->enter($__internal_ac4f07f13950ce5019930eb4df0ab629dcb5f1235d1569bf8a6719e00cc2e698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ac4f07f13950ce5019930eb4df0ab629dcb5f1235d1569bf8a6719e00cc2e698->leave($__internal_ac4f07f13950ce5019930eb4df0ab629dcb5f1235d1569bf8a6719e00cc2e698_prof);

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
