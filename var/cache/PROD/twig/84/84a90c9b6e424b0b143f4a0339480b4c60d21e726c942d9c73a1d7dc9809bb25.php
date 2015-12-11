<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cdeadb01647bec4d97a48221ffedadc84a1879ce7a0ca4847fa19978386f4983 extends Twig_Template
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
        $__internal_015f539ce748e5299ac91a2ab3cc6c173a5ff6ecddbd2a4b11c69a223390bd7c = $this->env->getExtension("native_profiler");
        $__internal_015f539ce748e5299ac91a2ab3cc6c173a5ff6ecddbd2a4b11c69a223390bd7c->enter($__internal_015f539ce748e5299ac91a2ab3cc6c173a5ff6ecddbd2a4b11c69a223390bd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_015f539ce748e5299ac91a2ab3cc6c173a5ff6ecddbd2a4b11c69a223390bd7c->leave($__internal_015f539ce748e5299ac91a2ab3cc6c173a5ff6ecddbd2a4b11c69a223390bd7c_prof);

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
