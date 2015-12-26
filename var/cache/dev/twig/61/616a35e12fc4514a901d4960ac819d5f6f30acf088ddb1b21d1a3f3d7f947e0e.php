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
        $__internal_16476185f697ecb2b7ededb824c0993d429fe93233117e00f8e554a33b012d00 = $this->env->getExtension("native_profiler");
        $__internal_16476185f697ecb2b7ededb824c0993d429fe93233117e00f8e554a33b012d00->enter($__internal_16476185f697ecb2b7ededb824c0993d429fe93233117e00f8e554a33b012d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_16476185f697ecb2b7ededb824c0993d429fe93233117e00f8e554a33b012d00->leave($__internal_16476185f697ecb2b7ededb824c0993d429fe93233117e00f8e554a33b012d00_prof);

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
