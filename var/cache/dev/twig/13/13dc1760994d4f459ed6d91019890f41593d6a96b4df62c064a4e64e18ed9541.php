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
        $__internal_b5ef4c97b00efcfc9cfb6f77174c329a3357bb4a7ef6e02aebe655d3c87519b1 = $this->env->getExtension("native_profiler");
        $__internal_b5ef4c97b00efcfc9cfb6f77174c329a3357bb4a7ef6e02aebe655d3c87519b1->enter($__internal_b5ef4c97b00efcfc9cfb6f77174c329a3357bb4a7ef6e02aebe655d3c87519b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b5ef4c97b00efcfc9cfb6f77174c329a3357bb4a7ef6e02aebe655d3c87519b1->leave($__internal_b5ef4c97b00efcfc9cfb6f77174c329a3357bb4a7ef6e02aebe655d3c87519b1_prof);

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
