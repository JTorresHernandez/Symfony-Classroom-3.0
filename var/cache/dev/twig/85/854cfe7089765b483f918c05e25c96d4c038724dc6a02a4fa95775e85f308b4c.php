<?php

/* ::base.html.twig */
class __TwigTemplate_dd0558bb10ca19bddb5230e24d0f1a7c2220d57749ca59dce37fb78f1c21193b extends Twig_Template
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
        $__internal_33d9dacb4c54d27fe8c197f91772ceb49f956062d444e384570bd70a464e1b7e = $this->env->getExtension("native_profiler");
        $__internal_33d9dacb4c54d27fe8c197f91772ceb49f956062d444e384570bd70a464e1b7e->enter($__internal_33d9dacb4c54d27fe8c197f91772ceb49f956062d444e384570bd70a464e1b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 19
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
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
            <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">Symfony Classroom</a>
        </div>
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>";
        // line 48
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
    </div>
</div>

<div class=\"container\">
    <ul>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </ul>
</div>

<div class=\"container\">
    ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_33d9dacb4c54d27fe8c197f91772ceb49f956062d444e384570bd70a464e1b7e->leave($__internal_33d9dacb4c54d27fe8c197f91772ceb49f956062d444e384570bd70a464e1b7e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_84cf9da6348042d23309798e386ea002143fdd1b4e7f57998dbce1abfbd2cdca = $this->env->getExtension("native_profiler");
        $__internal_84cf9da6348042d23309798e386ea002143fdd1b4e7f57998dbce1abfbd2cdca->enter($__internal_84cf9da6348042d23309798e386ea002143fdd1b4e7f57998dbce1abfbd2cdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_84cf9da6348042d23309798e386ea002143fdd1b4e7f57998dbce1abfbd2cdca->leave($__internal_84cf9da6348042d23309798e386ea002143fdd1b4e7f57998dbce1abfbd2cdca_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8df096a492400f352ddaf429247bd46b742a7dc897bff1a126bbb3c1512b6447 = $this->env->getExtension("native_profiler");
        $__internal_8df096a492400f352ddaf429247bd46b742a7dc897bff1a126bbb3c1512b6447->enter($__internal_8df096a492400f352ddaf429247bd46b742a7dc897bff1a126bbb3c1512b6447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/css/jumbotron.css\" />
        <link rel=\"stylesheet\" href=\"/css/custom.css\" />
    ";
        
        $__internal_8df096a492400f352ddaf429247bd46b742a7dc897bff1a126bbb3c1512b6447->leave($__internal_8df096a492400f352ddaf429247bd46b742a7dc897bff1a126bbb3c1512b6447_prof);

    }

    // line 48
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_7bf853f8315caed87c14d73607d7587ea433e30f03c9151d6f38a0c5d44a5f28 = $this->env->getExtension("native_profiler");
        $__internal_7bf853f8315caed87c14d73607d7587ea433e30f03c9151d6f38a0c5d44a5f28->enter($__internal_7bf853f8315caed87c14d73607d7587ea433e30f03c9151d6f38a0c5d44a5f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Session 7 - Doctrine";
        
        $__internal_7bf853f8315caed87c14d73607d7587ea433e30f03c9151d6f38a0c5d44a5f28->leave($__internal_7bf853f8315caed87c14d73607d7587ea433e30f03c9151d6f38a0c5d44a5f28_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_311929b73c0d220565bf72d64c71ea184fa6ad19b3267c2dc27e2036a9a6cd02 = $this->env->getExtension("native_profiler");
        $__internal_311929b73c0d220565bf72d64c71ea184fa6ad19b3267c2dc27e2036a9a6cd02->enter($__internal_311929b73c0d220565bf72d64c71ea184fa6ad19b3267c2dc27e2036a9a6cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
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
        
        $__internal_311929b73c0d220565bf72d64c71ea184fa6ad19b3267c2dc27e2036a9a6cd02->leave($__internal_311929b73c0d220565bf72d64c71ea184fa6ad19b3267c2dc27e2036a9a6cd02_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f034cbb279c69aa183ecff4d22c383712800f6f58541dda7688951fe2fd6df6 = $this->env->getExtension("native_profiler");
        $__internal_0f034cbb279c69aa183ecff4d22c383712800f6f58541dda7688951fe2fd6df6->enter($__internal_0f034cbb279c69aa183ecff4d22c383712800f6f58541dda7688951fe2fd6df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "<script src=\"/js/bootstrap.min.js\"></script>
";
        
        $__internal_0f034cbb279c69aa183ecff4d22c383712800f6f58541dda7688951fe2fd6df6->leave($__internal_0f034cbb279c69aa183ecff4d22c383712800f6f58541dda7688951fe2fd6df6_prof);

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
        return array (  214 => 89,  208 => 88,  183 => 62,  177 => 61,  165 => 48,  155 => 15,  149 => 14,  138 => 11,  124 => 91,  122 => 88,  114 => 81,  112 => 61,  106 => 57,  97 => 55,  93 => 54,  84 => 48,  73 => 40,  50 => 20,  47 => 19,  44 => 14,  39 => 11,  27 => 1,);
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
/*         <link rel="stylesheet" href="/css/bootstrap.min.css" />*/
/*         <link rel="stylesheet" href="/css/jumbotron.css" />*/
/*         <link rel="stylesheet" href="/css/custom.css" />*/
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
/*             <a class="navbar-brand" href="{{ path('app_article_articles') }}">Symfony Classroom</a>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <!-- Main jumbotron for a primary marketing message or call to action -->*/
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <h1>{% block headTitle %}Session 7 - Doctrine{% endblock %}</h1>*/
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
/* <script src="/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>*/
/* </body>*/
/* </html>*/
