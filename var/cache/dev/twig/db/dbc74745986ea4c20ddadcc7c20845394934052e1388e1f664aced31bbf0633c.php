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
        $__internal_a59ace40550a42a3f57b10b494c353501f78118d808b9dd2de9ffeafc3a91367 = $this->env->getExtension("native_profiler");
        $__internal_a59ace40550a42a3f57b10b494c353501f78118d808b9dd2de9ffeafc3a91367->enter($__internal_a59ace40550a42a3f57b10b494c353501f78118d808b9dd2de9ffeafc3a91367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a59ace40550a42a3f57b10b494c353501f78118d808b9dd2de9ffeafc3a91367->leave($__internal_a59ace40550a42a3f57b10b494c353501f78118d808b9dd2de9ffeafc3a91367_prof);

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
