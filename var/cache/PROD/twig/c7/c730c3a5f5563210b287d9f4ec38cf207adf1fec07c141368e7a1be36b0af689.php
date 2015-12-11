<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b9034c1d22f1dbe8374fa73ca5b2cd28d4881f1bc4d893b6345bc6898a6589c8 extends Twig_Template
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
        $__internal_afe61b9ff33a768dfa4af2136813a36fc04ceae905e81cc70cdc500bf48fa70d = $this->env->getExtension("native_profiler");
        $__internal_afe61b9ff33a768dfa4af2136813a36fc04ceae905e81cc70cdc500bf48fa70d->enter($__internal_afe61b9ff33a768dfa4af2136813a36fc04ceae905e81cc70cdc500bf48fa70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_afe61b9ff33a768dfa4af2136813a36fc04ceae905e81cc70cdc500bf48fa70d->leave($__internal_afe61b9ff33a768dfa4af2136813a36fc04ceae905e81cc70cdc500bf48fa70d_prof);

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
