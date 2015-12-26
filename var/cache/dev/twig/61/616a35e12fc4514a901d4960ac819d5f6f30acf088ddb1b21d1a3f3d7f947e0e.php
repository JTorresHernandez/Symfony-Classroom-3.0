<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_82d796b7ccc6bdee8443752565d3c579bcf5a447a5cc60516d169044b75ef2e8 extends Twig_Template
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
        $__internal_6071b39f883337fdfd1b0fc91c968e31cb746a6a655d27724466a891ee85b927 = $this->env->getExtension("native_profiler");
        $__internal_6071b39f883337fdfd1b0fc91c968e31cb746a6a655d27724466a891ee85b927->enter($__internal_6071b39f883337fdfd1b0fc91c968e31cb746a6a655d27724466a891ee85b927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6071b39f883337fdfd1b0fc91c968e31cb746a6a655d27724466a891ee85b927->leave($__internal_6071b39f883337fdfd1b0fc91c968e31cb746a6a655d27724466a891ee85b927_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
