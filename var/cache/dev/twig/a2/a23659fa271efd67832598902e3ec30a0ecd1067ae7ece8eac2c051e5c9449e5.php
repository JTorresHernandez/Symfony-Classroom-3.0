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
        $__internal_8e3e621a7dede31954c19894eadaeee7858cee5dabf281675f6b1e298406ad90 = $this->env->getExtension("native_profiler");
        $__internal_8e3e621a7dede31954c19894eadaeee7858cee5dabf281675f6b1e298406ad90->enter($__internal_8e3e621a7dede31954c19894eadaeee7858cee5dabf281675f6b1e298406ad90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8e3e621a7dede31954c19894eadaeee7858cee5dabf281675f6b1e298406ad90->leave($__internal_8e3e621a7dede31954c19894eadaeee7858cee5dabf281675f6b1e298406ad90_prof);

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
