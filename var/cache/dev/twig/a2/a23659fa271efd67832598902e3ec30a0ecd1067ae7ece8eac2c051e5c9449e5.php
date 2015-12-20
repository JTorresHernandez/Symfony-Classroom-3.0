<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_31d96b8c138faae237acf6b2deaff9978310828fb2228da35701cb1eb46dfd1f extends Twig_Template
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
        $__internal_a1fb3fb55266c49e92fdeb725d5b850a421ca9911d891421c3c047df00d7f294 = $this->env->getExtension("native_profiler");
        $__internal_a1fb3fb55266c49e92fdeb725d5b850a421ca9911d891421c3c047df00d7f294->enter($__internal_a1fb3fb55266c49e92fdeb725d5b850a421ca9911d891421c3c047df00d7f294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a1fb3fb55266c49e92fdeb725d5b850a421ca9911d891421c3c047df00d7f294->leave($__internal_a1fb3fb55266c49e92fdeb725d5b850a421ca9911d891421c3c047df00d7f294_prof);

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
