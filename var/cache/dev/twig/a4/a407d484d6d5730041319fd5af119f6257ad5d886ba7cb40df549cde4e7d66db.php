<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_091db8ea23961e20969862385c631d5fbef34b9889628b607580b32a940c7ca0 extends Twig_Template
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
        $__internal_560e46239c93180ef152664f1004dd6d44643162d39e5eef78105825cd671f0c = $this->env->getExtension("native_profiler");
        $__internal_560e46239c93180ef152664f1004dd6d44643162d39e5eef78105825cd671f0c->enter($__internal_560e46239c93180ef152664f1004dd6d44643162d39e5eef78105825cd671f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_560e46239c93180ef152664f1004dd6d44643162d39e5eef78105825cd671f0c->leave($__internal_560e46239c93180ef152664f1004dd6d44643162d39e5eef78105825cd671f0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
