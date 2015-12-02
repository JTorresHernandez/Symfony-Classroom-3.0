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
        $__internal_5faf7763b379243acb158fe9fd510d777fd7bd16edb5633f0ffc7116b93789cb = $this->env->getExtension("native_profiler");
        $__internal_5faf7763b379243acb158fe9fd510d777fd7bd16edb5633f0ffc7116b93789cb->enter($__internal_5faf7763b379243acb158fe9fd510d777fd7bd16edb5633f0ffc7116b93789cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5faf7763b379243acb158fe9fd510d777fd7bd16edb5633f0ffc7116b93789cb->leave($__internal_5faf7763b379243acb158fe9fd510d777fd7bd16edb5633f0ffc7116b93789cb_prof);

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
