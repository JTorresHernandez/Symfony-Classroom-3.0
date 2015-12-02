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
        $__internal_762961dd008b48d2bb92d2d57f389ccf8f0bef59db36681c1f25a427d4615f5b = $this->env->getExtension("native_profiler");
        $__internal_762961dd008b48d2bb92d2d57f389ccf8f0bef59db36681c1f25a427d4615f5b->enter($__internal_762961dd008b48d2bb92d2d57f389ccf8f0bef59db36681c1f25a427d4615f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_762961dd008b48d2bb92d2d57f389ccf8f0bef59db36681c1f25a427d4615f5b->leave($__internal_762961dd008b48d2bb92d2d57f389ccf8f0bef59db36681c1f25a427d4615f5b_prof);

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
