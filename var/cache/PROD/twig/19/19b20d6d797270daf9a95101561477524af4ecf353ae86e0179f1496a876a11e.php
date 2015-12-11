<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_171fd4e431fe8f5efb247b87fd4a5e04336999132fbb16e36ac108d92556e52c extends Twig_Template
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
        $__internal_2f0d99800057b18987e1551cf832299a12c277a0c57881c7b051e0e5c492ed8d = $this->env->getExtension("native_profiler");
        $__internal_2f0d99800057b18987e1551cf832299a12c277a0c57881c7b051e0e5c492ed8d->enter($__internal_2f0d99800057b18987e1551cf832299a12c277a0c57881c7b051e0e5c492ed8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f0d99800057b18987e1551cf832299a12c277a0c57881c7b051e0e5c492ed8d->leave($__internal_2f0d99800057b18987e1551cf832299a12c277a0c57881c7b051e0e5c492ed8d_prof);

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
