<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2b2d714a89e7a96634c29b4cda5ffbbe23fa675f572b741ba86f48fa0c06f305 extends Twig_Template
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
        $__internal_f17d0fbf5bbd9ff857a457c577067436409752e6a3a80d517dcc2fb2fff20f1f = $this->env->getExtension("native_profiler");
        $__internal_f17d0fbf5bbd9ff857a457c577067436409752e6a3a80d517dcc2fb2fff20f1f->enter($__internal_f17d0fbf5bbd9ff857a457c577067436409752e6a3a80d517dcc2fb2fff20f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f17d0fbf5bbd9ff857a457c577067436409752e6a3a80d517dcc2fb2fff20f1f->leave($__internal_f17d0fbf5bbd9ff857a457c577067436409752e6a3a80d517dcc2fb2fff20f1f_prof);

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
