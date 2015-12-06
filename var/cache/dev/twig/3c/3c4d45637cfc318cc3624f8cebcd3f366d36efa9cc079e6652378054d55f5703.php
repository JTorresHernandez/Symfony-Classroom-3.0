<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cc58bc5973ed353f3065d51ccdea37bce1c4a48246745f996ba84a407959d10f extends Twig_Template
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
        $__internal_277cbbcbc5ae419f6ab3501214b225f1108e3b3c89047973f8e366d5b31de4ce = $this->env->getExtension("native_profiler");
        $__internal_277cbbcbc5ae419f6ab3501214b225f1108e3b3c89047973f8e366d5b31de4ce->enter($__internal_277cbbcbc5ae419f6ab3501214b225f1108e3b3c89047973f8e366d5b31de4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_277cbbcbc5ae419f6ab3501214b225f1108e3b3c89047973f8e366d5b31de4ce->leave($__internal_277cbbcbc5ae419f6ab3501214b225f1108e3b3c89047973f8e366d5b31de4ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
