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
        $__internal_b0527eae383a7730b52ed59aecdd8ddd693005a3069ffcc93e0f93ab4c969761 = $this->env->getExtension("native_profiler");
        $__internal_b0527eae383a7730b52ed59aecdd8ddd693005a3069ffcc93e0f93ab4c969761->enter($__internal_b0527eae383a7730b52ed59aecdd8ddd693005a3069ffcc93e0f93ab4c969761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b0527eae383a7730b52ed59aecdd8ddd693005a3069ffcc93e0f93ab4c969761->leave($__internal_b0527eae383a7730b52ed59aecdd8ddd693005a3069ffcc93e0f93ab4c969761_prof);

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
