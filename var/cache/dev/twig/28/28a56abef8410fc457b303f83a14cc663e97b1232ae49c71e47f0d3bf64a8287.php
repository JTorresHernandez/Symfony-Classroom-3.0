<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6018a260f6a561d9747c25179431751edc6f30539a975125668799bb93346b13 extends Twig_Template
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
        $__internal_966d80a03c1bb653449d7eb62efae3cc598f7089a089967219552ab6103a5063 = $this->env->getExtension("native_profiler");
        $__internal_966d80a03c1bb653449d7eb62efae3cc598f7089a089967219552ab6103a5063->enter($__internal_966d80a03c1bb653449d7eb62efae3cc598f7089a089967219552ab6103a5063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_966d80a03c1bb653449d7eb62efae3cc598f7089a089967219552ab6103a5063->leave($__internal_966d80a03c1bb653449d7eb62efae3cc598f7089a089967219552ab6103a5063_prof);

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
