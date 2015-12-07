<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a25c7977a179d20987a9ffd216060e1681d61f7d7071870544a1aaff80a46648 extends Twig_Template
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
        $__internal_1e0ddc49998551528f4cdfd21bc8e31a5aa18fc70f7193f9844559616ba8634c = $this->env->getExtension("native_profiler");
        $__internal_1e0ddc49998551528f4cdfd21bc8e31a5aa18fc70f7193f9844559616ba8634c->enter($__internal_1e0ddc49998551528f4cdfd21bc8e31a5aa18fc70f7193f9844559616ba8634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1e0ddc49998551528f4cdfd21bc8e31a5aa18fc70f7193f9844559616ba8634c->leave($__internal_1e0ddc49998551528f4cdfd21bc8e31a5aa18fc70f7193f9844559616ba8634c_prof);

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
