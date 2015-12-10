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
        $__internal_775595773ec94547bebe013c9c75beb0db11309217edbb7cc882860255d3004c = $this->env->getExtension("native_profiler");
        $__internal_775595773ec94547bebe013c9c75beb0db11309217edbb7cc882860255d3004c->enter($__internal_775595773ec94547bebe013c9c75beb0db11309217edbb7cc882860255d3004c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_775595773ec94547bebe013c9c75beb0db11309217edbb7cc882860255d3004c->leave($__internal_775595773ec94547bebe013c9c75beb0db11309217edbb7cc882860255d3004c_prof);

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
