<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_04edffdfaf5b5f5786f4afe91e694d69c9b42616398346beaee25bc7dd322f8e extends Twig_Template
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
        $__internal_4074fa5f013b4505c26695c5c43b2eaa9200dfaa6743aef606801f916b55fabd = $this->env->getExtension("native_profiler");
        $__internal_4074fa5f013b4505c26695c5c43b2eaa9200dfaa6743aef606801f916b55fabd->enter($__internal_4074fa5f013b4505c26695c5c43b2eaa9200dfaa6743aef606801f916b55fabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4074fa5f013b4505c26695c5c43b2eaa9200dfaa6743aef606801f916b55fabd->leave($__internal_4074fa5f013b4505c26695c5c43b2eaa9200dfaa6743aef606801f916b55fabd_prof);

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
