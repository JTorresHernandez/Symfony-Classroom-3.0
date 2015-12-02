<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b0591173a50fd806bb0a65e0b9a5adf6990dc55c1a009b8fcc81f2f6c18ab9bc extends Twig_Template
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
        $__internal_f39b6444fd5c85e9f3dc0905de8845712742fe0b732a5da14f94390ed99dab7c = $this->env->getExtension("native_profiler");
        $__internal_f39b6444fd5c85e9f3dc0905de8845712742fe0b732a5da14f94390ed99dab7c->enter($__internal_f39b6444fd5c85e9f3dc0905de8845712742fe0b732a5da14f94390ed99dab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f39b6444fd5c85e9f3dc0905de8845712742fe0b732a5da14f94390ed99dab7c->leave($__internal_f39b6444fd5c85e9f3dc0905de8845712742fe0b732a5da14f94390ed99dab7c_prof);

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
