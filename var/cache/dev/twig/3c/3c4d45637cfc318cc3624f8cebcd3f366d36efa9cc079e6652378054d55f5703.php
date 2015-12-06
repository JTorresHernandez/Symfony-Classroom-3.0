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
        $__internal_5200c8a0ff939a96c1be2d54a7868b59f73e652db65aae3c0d986bc674f0dd9d = $this->env->getExtension("native_profiler");
        $__internal_5200c8a0ff939a96c1be2d54a7868b59f73e652db65aae3c0d986bc674f0dd9d->enter($__internal_5200c8a0ff939a96c1be2d54a7868b59f73e652db65aae3c0d986bc674f0dd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5200c8a0ff939a96c1be2d54a7868b59f73e652db65aae3c0d986bc674f0dd9d->leave($__internal_5200c8a0ff939a96c1be2d54a7868b59f73e652db65aae3c0d986bc674f0dd9d_prof);

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
