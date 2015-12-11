<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d57bb36148102761469e902c2e65b09cc884c279e5440bfb7e7d70993535023c extends Twig_Template
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
        $__internal_09d0d226e0fd9941bdda488ba8ac659bf6937c714ed14aaba0c1d7bc862982be = $this->env->getExtension("native_profiler");
        $__internal_09d0d226e0fd9941bdda488ba8ac659bf6937c714ed14aaba0c1d7bc862982be->enter($__internal_09d0d226e0fd9941bdda488ba8ac659bf6937c714ed14aaba0c1d7bc862982be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_09d0d226e0fd9941bdda488ba8ac659bf6937c714ed14aaba0c1d7bc862982be->leave($__internal_09d0d226e0fd9941bdda488ba8ac659bf6937c714ed14aaba0c1d7bc862982be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
