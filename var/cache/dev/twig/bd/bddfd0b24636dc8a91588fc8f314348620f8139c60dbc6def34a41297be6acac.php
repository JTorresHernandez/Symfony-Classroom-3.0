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
        $__internal_f7be4b696caa4ab28ec29ce1021301de2a77a4829947d3d336802e99f91c554f = $this->env->getExtension("native_profiler");
        $__internal_f7be4b696caa4ab28ec29ce1021301de2a77a4829947d3d336802e99f91c554f->enter($__internal_f7be4b696caa4ab28ec29ce1021301de2a77a4829947d3d336802e99f91c554f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f7be4b696caa4ab28ec29ce1021301de2a77a4829947d3d336802e99f91c554f->leave($__internal_f7be4b696caa4ab28ec29ce1021301de2a77a4829947d3d336802e99f91c554f_prof);

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
