<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a0e66f57ece4b151197f03872e4599be07207d15c05963cfb07b2ea858d2306d extends Twig_Template
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
        $__internal_d01731920de4f15814a594aea35b7553010c19e17a86b5d316c5686b0d18a54d = $this->env->getExtension("native_profiler");
        $__internal_d01731920de4f15814a594aea35b7553010c19e17a86b5d316c5686b0d18a54d->enter($__internal_d01731920de4f15814a594aea35b7553010c19e17a86b5d316c5686b0d18a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d01731920de4f15814a594aea35b7553010c19e17a86b5d316c5686b0d18a54d->leave($__internal_d01731920de4f15814a594aea35b7553010c19e17a86b5d316c5686b0d18a54d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
