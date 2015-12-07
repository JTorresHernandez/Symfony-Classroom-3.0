<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_aaba7931d28b7b3ae4a742a17a597bb7edb4d26d3f635b31c8838ec16dcf7d68 extends Twig_Template
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
        $__internal_615527e829c32b2e28543865d782b07b482d24d306497d9441f71e41ffb8d48d = $this->env->getExtension("native_profiler");
        $__internal_615527e829c32b2e28543865d782b07b482d24d306497d9441f71e41ffb8d48d->enter($__internal_615527e829c32b2e28543865d782b07b482d24d306497d9441f71e41ffb8d48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_615527e829c32b2e28543865d782b07b482d24d306497d9441f71e41ffb8d48d->leave($__internal_615527e829c32b2e28543865d782b07b482d24d306497d9441f71e41ffb8d48d_prof);

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
