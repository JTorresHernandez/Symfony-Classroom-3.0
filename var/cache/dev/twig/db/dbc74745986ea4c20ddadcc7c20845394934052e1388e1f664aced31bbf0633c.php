<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_da25a678cff7ca36d629327634be07cbb056e41ea7c7b072ce260c82ed086010 extends Twig_Template
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
        $__internal_782852229f2c570d68ce7b9283c606c8b68be90bf110a14724d011899e9091fe = $this->env->getExtension("native_profiler");
        $__internal_782852229f2c570d68ce7b9283c606c8b68be90bf110a14724d011899e9091fe->enter($__internal_782852229f2c570d68ce7b9283c606c8b68be90bf110a14724d011899e9091fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_782852229f2c570d68ce7b9283c606c8b68be90bf110a14724d011899e9091fe->leave($__internal_782852229f2c570d68ce7b9283c606c8b68be90bf110a14724d011899e9091fe_prof);

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
