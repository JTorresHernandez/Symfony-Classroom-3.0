<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d03979c8554804ce0805590c29c361c0da70b48846f1585dccbb50e5a29c7f09 extends Twig_Template
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
        $__internal_4316c0d96ea4d83412820650913e146d6b03f336a4ce910d6385f407a26e9091 = $this->env->getExtension("native_profiler");
        $__internal_4316c0d96ea4d83412820650913e146d6b03f336a4ce910d6385f407a26e9091->enter($__internal_4316c0d96ea4d83412820650913e146d6b03f336a4ce910d6385f407a26e9091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4316c0d96ea4d83412820650913e146d6b03f336a4ce910d6385f407a26e9091->leave($__internal_4316c0d96ea4d83412820650913e146d6b03f336a4ce910d6385f407a26e9091_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
