<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_ce107a9c8affc5cd7e15b2b5a9e8c35ed5bbc1065ea9006d27be20f9fb09f328 extends Twig_Template
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
        $__internal_c27a8d44e6f2ff7c3212532a91200a7e758e6f2c49f0523b3fe64c8e11b39da5 = $this->env->getExtension("native_profiler");
        $__internal_c27a8d44e6f2ff7c3212532a91200a7e758e6f2c49f0523b3fe64c8e11b39da5->enter($__internal_c27a8d44e6f2ff7c3212532a91200a7e758e6f2c49f0523b3fe64c8e11b39da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_c27a8d44e6f2ff7c3212532a91200a7e758e6f2c49f0523b3fe64c8e11b39da5->leave($__internal_c27a8d44e6f2ff7c3212532a91200a7e758e6f2c49f0523b3fe64c8e11b39da5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (false !== $label): ?>*/
/* <?php if ($required) { $label_attr['class'] = trim((isset($label_attr['class']) ? $label_attr['class'] : '').' required'); } ?>*/
/* <?php if (!$compound) { $label_attr['for'] = $id; } ?>*/
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <label <?php foreach ($label_attr as $k => $v) { printf('%s="%s" ', $view->escape($k), $view->escape($v)); } ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></label>*/
/* <?php endif ?>*/
/* */
