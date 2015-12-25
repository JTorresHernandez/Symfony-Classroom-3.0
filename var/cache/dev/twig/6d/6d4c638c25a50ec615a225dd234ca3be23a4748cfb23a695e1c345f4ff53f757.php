<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3ed8636acf3a85e7daff0dfc52f4e3602eb57f0dd6a75e079d781185e6b58838 extends Twig_Template
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
        $__internal_e42a523ec6625acfe492850b91d04b2e5bad6faaf9878fa4c041378d8c908541 = $this->env->getExtension("native_profiler");
        $__internal_e42a523ec6625acfe492850b91d04b2e5bad6faaf9878fa4c041378d8c908541->enter($__internal_e42a523ec6625acfe492850b91d04b2e5bad6faaf9878fa4c041378d8c908541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e42a523ec6625acfe492850b91d04b2e5bad6faaf9878fa4c041378d8c908541->leave($__internal_e42a523ec6625acfe492850b91d04b2e5bad6faaf9878fa4c041378d8c908541_prof);

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
