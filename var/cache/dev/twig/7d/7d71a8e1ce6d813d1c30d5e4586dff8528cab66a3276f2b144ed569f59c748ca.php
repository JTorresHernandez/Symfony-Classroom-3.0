<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2d3b2c2928cc80045c00607d38479a5c91c716e8f260e26b0bbc4caf67c1386f extends Twig_Template
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
        $__internal_4e38cdcda7a7b8f37a80688e77f401a0aa72cefe97a4afe317cce1e3c3940a5a = $this->env->getExtension("native_profiler");
        $__internal_4e38cdcda7a7b8f37a80688e77f401a0aa72cefe97a4afe317cce1e3c3940a5a->enter($__internal_4e38cdcda7a7b8f37a80688e77f401a0aa72cefe97a4afe317cce1e3c3940a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4e38cdcda7a7b8f37a80688e77f401a0aa72cefe97a4afe317cce1e3c3940a5a->leave($__internal_4e38cdcda7a7b8f37a80688e77f401a0aa72cefe97a4afe317cce1e3c3940a5a_prof);

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
