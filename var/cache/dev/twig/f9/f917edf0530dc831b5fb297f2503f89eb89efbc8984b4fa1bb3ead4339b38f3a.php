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
        $__internal_006225ea0740f0689e8f4306ea62b551464273a87c35e4441001ae27d066663d = $this->env->getExtension("native_profiler");
        $__internal_006225ea0740f0689e8f4306ea62b551464273a87c35e4441001ae27d066663d->enter($__internal_006225ea0740f0689e8f4306ea62b551464273a87c35e4441001ae27d066663d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_006225ea0740f0689e8f4306ea62b551464273a87c35e4441001ae27d066663d->leave($__internal_006225ea0740f0689e8f4306ea62b551464273a87c35e4441001ae27d066663d_prof);

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
