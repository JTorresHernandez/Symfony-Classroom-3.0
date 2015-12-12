<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a8cd6b306a3669f0d196f3ef01ea4e818ed1aa9dd2d2e0b21c211b3db7f7bf84 extends Twig_Template
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
        $__internal_ec7e6353d4a511d8423b823d17da0ea65f16f709d7804508099c449fad2b8f6b = $this->env->getExtension("native_profiler");
        $__internal_ec7e6353d4a511d8423b823d17da0ea65f16f709d7804508099c449fad2b8f6b->enter($__internal_ec7e6353d4a511d8423b823d17da0ea65f16f709d7804508099c449fad2b8f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_ec7e6353d4a511d8423b823d17da0ea65f16f709d7804508099c449fad2b8f6b->leave($__internal_ec7e6353d4a511d8423b823d17da0ea65f16f709d7804508099c449fad2b8f6b_prof);

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
