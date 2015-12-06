<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2afff77f781877834ad1c1d6e3117c5354d279fe899dcf1833879c746d92d510 extends Twig_Template
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
        $__internal_b797c79d1149f35dce19516283c340eb08b1463819aa6f03adf3c01511186bfa = $this->env->getExtension("native_profiler");
        $__internal_b797c79d1149f35dce19516283c340eb08b1463819aa6f03adf3c01511186bfa->enter($__internal_b797c79d1149f35dce19516283c340eb08b1463819aa6f03adf3c01511186bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b797c79d1149f35dce19516283c340eb08b1463819aa6f03adf3c01511186bfa->leave($__internal_b797c79d1149f35dce19516283c340eb08b1463819aa6f03adf3c01511186bfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
