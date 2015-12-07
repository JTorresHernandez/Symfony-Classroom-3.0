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
        $__internal_cb8d29d1271c496bde40b29539b866d5f3fa0a36c03140c134441a9162c2794f = $this->env->getExtension("native_profiler");
        $__internal_cb8d29d1271c496bde40b29539b866d5f3fa0a36c03140c134441a9162c2794f->enter($__internal_cb8d29d1271c496bde40b29539b866d5f3fa0a36c03140c134441a9162c2794f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cb8d29d1271c496bde40b29539b866d5f3fa0a36c03140c134441a9162c2794f->leave($__internal_cb8d29d1271c496bde40b29539b866d5f3fa0a36c03140c134441a9162c2794f_prof);

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
