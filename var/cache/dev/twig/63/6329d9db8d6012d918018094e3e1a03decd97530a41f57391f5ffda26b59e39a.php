<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_876d0e7b1181aaf23df6a2e05400ed64c67743e308fa8da8f597f2e6bfa8e3d1 extends Twig_Template
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
        $__internal_6ef314d32a4e576347200a80b3b80ae387e1bdb02cb23510b0b7eedb6c8af213 = $this->env->getExtension("native_profiler");
        $__internal_6ef314d32a4e576347200a80b3b80ae387e1bdb02cb23510b0b7eedb6c8af213->enter($__internal_6ef314d32a4e576347200a80b3b80ae387e1bdb02cb23510b0b7eedb6c8af213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6ef314d32a4e576347200a80b3b80ae387e1bdb02cb23510b0b7eedb6c8af213->leave($__internal_6ef314d32a4e576347200a80b3b80ae387e1bdb02cb23510b0b7eedb6c8af213_prof);

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
