<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d4ccbb284a6424f0437fa1e9f3a65c74acf661cc953856a35757753850b4c928 extends Twig_Template
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
        $__internal_fcedad5769140652103cd4a8519b5d9fff295b9033efc327d46e798d6afbcc12 = $this->env->getExtension("native_profiler");
        $__internal_fcedad5769140652103cd4a8519b5d9fff295b9033efc327d46e798d6afbcc12->enter($__internal_fcedad5769140652103cd4a8519b5d9fff295b9033efc327d46e798d6afbcc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fcedad5769140652103cd4a8519b5d9fff295b9033efc327d46e798d6afbcc12->leave($__internal_fcedad5769140652103cd4a8519b5d9fff295b9033efc327d46e798d6afbcc12_prof);

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
