<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d006de770ba4d6565ac6d3cf0267979d7e462317f19f7023295c37e6a7f48ed6 extends Twig_Template
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
        $__internal_8f8f45e2d4eaaa6a3467607f6c690456250cd04e88ea1ff307b6bd50bf220eda = $this->env->getExtension("native_profiler");
        $__internal_8f8f45e2d4eaaa6a3467607f6c690456250cd04e88ea1ff307b6bd50bf220eda->enter($__internal_8f8f45e2d4eaaa6a3467607f6c690456250cd04e88ea1ff307b6bd50bf220eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8f8f45e2d4eaaa6a3467607f6c690456250cd04e88ea1ff307b6bd50bf220eda->leave($__internal_8f8f45e2d4eaaa6a3467607f6c690456250cd04e88ea1ff307b6bd50bf220eda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
