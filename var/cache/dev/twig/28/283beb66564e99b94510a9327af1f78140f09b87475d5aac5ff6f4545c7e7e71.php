<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_19d700d9ece01eda8dd417e080d46ad4b75e7c0c8f960c8efa6f54d44eea09c0 extends Twig_Template
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
        $__internal_53f3e179fa3f15d13c6e9e65e8d605b2e78eca595dcfd391dc0f089c19e0fbfc = $this->env->getExtension("native_profiler");
        $__internal_53f3e179fa3f15d13c6e9e65e8d605b2e78eca595dcfd391dc0f089c19e0fbfc->enter($__internal_53f3e179fa3f15d13c6e9e65e8d605b2e78eca595dcfd391dc0f089c19e0fbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_53f3e179fa3f15d13c6e9e65e8d605b2e78eca595dcfd391dc0f089c19e0fbfc->leave($__internal_53f3e179fa3f15d13c6e9e65e8d605b2e78eca595dcfd391dc0f089c19e0fbfc_prof);

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
