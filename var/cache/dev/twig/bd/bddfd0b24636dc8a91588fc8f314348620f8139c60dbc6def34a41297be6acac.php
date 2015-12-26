<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ae4376b88002824433654e9da807214cb714043ea8a6d1ab193c4555d36981c1 extends Twig_Template
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
        $__internal_c10a99a6f00c8c18955b92f79bd54d3e686d9facc3a9acb2e6e3b02871618193 = $this->env->getExtension("native_profiler");
        $__internal_c10a99a6f00c8c18955b92f79bd54d3e686d9facc3a9acb2e6e3b02871618193->enter($__internal_c10a99a6f00c8c18955b92f79bd54d3e686d9facc3a9acb2e6e3b02871618193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c10a99a6f00c8c18955b92f79bd54d3e686d9facc3a9acb2e6e3b02871618193->leave($__internal_c10a99a6f00c8c18955b92f79bd54d3e686d9facc3a9acb2e6e3b02871618193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
