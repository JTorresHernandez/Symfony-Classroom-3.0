<?php

/* ::base.html.twig */
class __TwigTemplate_559bdfa52914282f14fb3dfea2d683ab67b6b0d40b11d3017e21faf62309c157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61a6a442be5af017cd91202d1a94506250a707a72f687a5f822e41af9c094ae0 = $this->env->getExtension("native_profiler");
        $__internal_61a6a442be5af017cd91202d1a94506250a707a72f687a5f822e41af9c094ae0->enter($__internal_61a6a442be5af017cd91202d1a94506250a707a72f687a5f822e41af9c094ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Symfony Classroom</a>
        </div>
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>";
        // line 47
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
    </div>
</div>

<div class=\"container\">
    <ul>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 54
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
</div>

<div class=\"container\">
    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"js/jquery.min.js\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_61a6a442be5af017cd91202d1a94506250a707a72f687a5f822e41af9c094ae0->leave($__internal_61a6a442be5af017cd91202d1a94506250a707a72f687a5f822e41af9c094ae0_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_562b697a55c45bfdfd74f09d5dabe549c75b1f3aba8cb43d9270705cd4825d6b = $this->env->getExtension("native_profiler");
        $__internal_562b697a55c45bfdfd74f09d5dabe549c75b1f3aba8cb43d9270705cd4825d6b->enter($__internal_562b697a55c45bfdfd74f09d5dabe549c75b1f3aba8cb43d9270705cd4825d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_562b697a55c45bfdfd74f09d5dabe549c75b1f3aba8cb43d9270705cd4825d6b->leave($__internal_562b697a55c45bfdfd74f09d5dabe549c75b1f3aba8cb43d9270705cd4825d6b_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc54c4042a17b6717263d9fbe1e18cbfd2fc6024738709abfc9eab962983f15f = $this->env->getExtension("native_profiler");
        $__internal_bc54c4042a17b6717263d9fbe1e18cbfd2fc6024738709abfc9eab962983f15f->enter($__internal_bc54c4042a17b6717263d9fbe1e18cbfd2fc6024738709abfc9eab962983f15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"css/jumbotron.css\" />
    ";
        
        $__internal_bc54c4042a17b6717263d9fbe1e18cbfd2fc6024738709abfc9eab962983f15f->leave($__internal_bc54c4042a17b6717263d9fbe1e18cbfd2fc6024738709abfc9eab962983f15f_prof);

    }

    // line 47
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_1855145d4a12da93061b572534707bab5e9e8965a1ab5684eb398d6034e7318f = $this->env->getExtension("native_profiler");
        $__internal_1855145d4a12da93061b572534707bab5e9e8965a1ab5684eb398d6034e7318f->enter($__internal_1855145d4a12da93061b572534707bab5e9e8965a1ab5684eb398d6034e7318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Doctrine";
        
        $__internal_1855145d4a12da93061b572534707bab5e9e8965a1ab5684eb398d6034e7318f->leave($__internal_1855145d4a12da93061b572534707bab5e9e8965a1ab5684eb398d6034e7318f_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_45a9a8a29068a5745899648966784b44595203078a891226a1470d2058c2641c = $this->env->getExtension("native_profiler");
        $__internal_45a9a8a29068a5745899648966784b44595203078a891226a1470d2058c2641c->enter($__internal_45a9a8a29068a5745899648966784b44595203078a891226a1470d2058c2641c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
        </div>
    ";
        
        $__internal_45a9a8a29068a5745899648966784b44595203078a891226a1470d2058c2641c->leave($__internal_45a9a8a29068a5745899648966784b44595203078a891226a1470d2058c2641c_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_141df68fde903df55a627b7eadb0180b15afb8c3a2ac136117b3c626df892cdf = $this->env->getExtension("native_profiler");
        $__internal_141df68fde903df55a627b7eadb0180b15afb8c3a2ac136117b3c626df892cdf->enter($__internal_141df68fde903df55a627b7eadb0180b15afb8c3a2ac136117b3c626df892cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "<script src=\"js/bootstrap.min.js\"></script>
";
        
        $__internal_141df68fde903df55a627b7eadb0180b15afb8c3a2ac136117b3c626df892cdf->leave($__internal_141df68fde903df55a627b7eadb0180b15afb8c3a2ac136117b3c626df892cdf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 88,  204 => 87,  179 => 61,  173 => 60,  161 => 47,  152 => 15,  146 => 14,  135 => 11,  121 => 90,  119 => 87,  111 => 80,  109 => 60,  103 => 56,  94 => 54,  90 => 53,  81 => 47,  50 => 19,  47 => 18,  44 => 14,  39 => 11,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/*     {# This must be rewritten for symfony 3#}*/
/*     {% block stylesheets %}*/
/*     <link rel="stylesheet" href="css/bootstrap.min.css" />*/
/*     <link rel="stylesheet" href="css/jumbotron.css" />*/
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Symfony Classroom</a>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <!-- Main jumbotron for a primary marketing message or call to action -->*/
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <h1>{% block headTitle %}Doctrine{% endblock %}</h1>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <ul>*/
/*         {% for message in app.session.flashBag.get('messages') %}*/
/*             <li>{{ message }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     {% block body %}*/
/*         <!-- Example row of columns -->*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/*     <hr>*/
/*     <footer>*/
/*         <p class="text-right">&copy; 2015 Ismael Trascastro</p>*/
/*     </footer>*/
/* </div> <!-- /container -->*/
/* */
/* {# This must be rewritten for symfony 3#}*/
/* {% block javascripts %}*/
/* <script src="js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>*/
/* </body>*/
/* </html>*/
