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
        $__internal_d4946fdaac58bae971e511994f7530ed13b13cf5f5a63f9d079fa4b2e4a5ac37 = $this->env->getExtension("native_profiler");
        $__internal_d4946fdaac58bae971e511994f7530ed13b13cf5f5a63f9d079fa4b2e4a5ac37->enter($__internal_d4946fdaac58bae971e511994f7530ed13b13cf5f5a63f9d079fa4b2e4a5ac37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d4946fdaac58bae971e511994f7530ed13b13cf5f5a63f9d079fa4b2e4a5ac37->leave($__internal_d4946fdaac58bae971e511994f7530ed13b13cf5f5a63f9d079fa4b2e4a5ac37_prof);

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
