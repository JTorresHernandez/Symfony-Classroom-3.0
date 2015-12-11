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
        $__internal_031d5b5e89b073c866b271724e810804fe2ce958bb1f35e21219c1c33e3d08a7 = $this->env->getExtension("native_profiler");
        $__internal_031d5b5e89b073c866b271724e810804fe2ce958bb1f35e21219c1c33e3d08a7->enter($__internal_031d5b5e89b073c866b271724e810804fe2ce958bb1f35e21219c1c33e3d08a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_031d5b5e89b073c866b271724e810804fe2ce958bb1f35e21219c1c33e3d08a7->leave($__internal_031d5b5e89b073c866b271724e810804fe2ce958bb1f35e21219c1c33e3d08a7_prof);

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
