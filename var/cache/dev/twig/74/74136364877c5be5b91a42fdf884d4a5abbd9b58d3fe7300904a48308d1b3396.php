<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0b93264150a26291054c536dbb0bd4b48bc4c4cb5c88e453f7fe8adf5160c5a0 extends Twig_Template
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
        $__internal_3e551f72eace4a954d19541b2be2b3ef108469fa2042a716ef6c90973be5936e = $this->env->getExtension("native_profiler");
        $__internal_3e551f72eace4a954d19541b2be2b3ef108469fa2042a716ef6c90973be5936e->enter($__internal_3e551f72eace4a954d19541b2be2b3ef108469fa2042a716ef6c90973be5936e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3e551f72eace4a954d19541b2be2b3ef108469fa2042a716ef6c90973be5936e->leave($__internal_3e551f72eace4a954d19541b2be2b3ef108469fa2042a716ef6c90973be5936e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
