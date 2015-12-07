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
        $__internal_3923ba989e6cef58112e24a7c1036938507e2b31ce4aea1a190ea50f95685875 = $this->env->getExtension("native_profiler");
        $__internal_3923ba989e6cef58112e24a7c1036938507e2b31ce4aea1a190ea50f95685875->enter($__internal_3923ba989e6cef58112e24a7c1036938507e2b31ce4aea1a190ea50f95685875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3923ba989e6cef58112e24a7c1036938507e2b31ce4aea1a190ea50f95685875->leave($__internal_3923ba989e6cef58112e24a7c1036938507e2b31ce4aea1a190ea50f95685875_prof);

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
