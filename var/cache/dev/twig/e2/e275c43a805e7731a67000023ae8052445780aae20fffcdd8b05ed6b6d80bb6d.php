<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1b6a141b91b63d6f3a3d408af969c28a2f8358ac17ec2fe050d36dc200aece56 extends Twig_Template
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
        $__internal_bde4e99b6996bf6d6f93d829f1293ab44ab5799d56593239e8874791544f16cd = $this->env->getExtension("native_profiler");
        $__internal_bde4e99b6996bf6d6f93d829f1293ab44ab5799d56593239e8874791544f16cd->enter($__internal_bde4e99b6996bf6d6f93d829f1293ab44ab5799d56593239e8874791544f16cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bde4e99b6996bf6d6f93d829f1293ab44ab5799d56593239e8874791544f16cd->leave($__internal_bde4e99b6996bf6d6f93d829f1293ab44ab5799d56593239e8874791544f16cd_prof);

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
