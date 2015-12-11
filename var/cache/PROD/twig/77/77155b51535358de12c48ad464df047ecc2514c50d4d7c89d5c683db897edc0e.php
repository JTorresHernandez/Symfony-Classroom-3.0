<?php

/* ::base.html.twig */
class __TwigTemplate_9312ae06f66dcb5e046642bfb7e40bb1640f5a0a61cdedda7fb7efc1050295fe extends Twig_Template
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
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3c83a41d8dfe301824945fd875fff6c24b6cd53547dc11e9416729d7f8405c3 = $this->env->getExtension("native_profiler");
        $__internal_a3c83a41d8dfe301824945fd875fff6c24b6cd53547dc11e9416729d7f8405c3->enter($__internal_a3c83a41d8dfe301824945fd875fff6c24b6cd53547dc11e9416729d7f8405c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li></li>
                <li></li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                <div class=\"navbar-form navbar-right\">
                ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "                    <a class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Sign out</a>
                    <a class=\"btn btn-danger\" href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                ";
        } elseif ((($this->getAttribute($this->getAttribute(        // line 55
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "fos_user_security_login") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "fos_user_registration_register"))) {
            // line 56
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:HoritzontalLogin:horitzontalLogin"));
            echo "
                ";
        }
        // line 58
        echo "                </div>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>";
        // line 68
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
    </div>
</div>

<div class=\"container\">
    <ul>
        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </ul>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 86
        $this->displayBlock('sidebar', $context, $blocks);
        // line 89
        echo "        </div>
    </div>
    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_a3c83a41d8dfe301824945fd875fff6c24b6cd53547dc11e9416729d7f8405c3->leave($__internal_a3c83a41d8dfe301824945fd875fff6c24b6cd53547dc11e9416729d7f8405c3_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf30564aa07560ce3cf898e4379d630b28186e3026643a90511a3b5e76db75db = $this->env->getExtension("native_profiler");
        $__internal_cf30564aa07560ce3cf898e4379d630b28186e3026643a90511a3b5e76db75db->enter($__internal_cf30564aa07560ce3cf898e4379d630b28186e3026643a90511a3b5e76db75db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cf30564aa07560ce3cf898e4379d630b28186e3026643a90511a3b5e76db75db->leave($__internal_cf30564aa07560ce3cf898e4379d630b28186e3026643a90511a3b5e76db75db_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d461b14fb03b01e1b9e735e9d6e15a09b0126b10d1f403b716c49f5eafe4e9e = $this->env->getExtension("native_profiler");
        $__internal_8d461b14fb03b01e1b9e735e9d6e15a09b0126b10d1f403b716c49f5eafe4e9e->enter($__internal_8d461b14fb03b01e1b9e735e9d6e15a09b0126b10d1f403b716c49f5eafe4e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/css/jumbotron.css\" />
        <link rel=\"stylesheet\" href=\"/css/custom.css\" />
    ";
        
        $__internal_8d461b14fb03b01e1b9e735e9d6e15a09b0126b10d1f403b716c49f5eafe4e9e->leave($__internal_8d461b14fb03b01e1b9e735e9d6e15a09b0126b10d1f403b716c49f5eafe4e9e_prof);

    }

    // line 68
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_b9ce36493921cd612ef0f2de93f1db08bdaf403fefc3bf64ab5ea7e1786a7bef = $this->env->getExtension("native_profiler");
        $__internal_b9ce36493921cd612ef0f2de93f1db08bdaf403fefc3bf64ab5ea7e1786a7bef->enter($__internal_b9ce36493921cd612ef0f2de93f1db08bdaf403fefc3bf64ab5ea7e1786a7bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Session 7 - Doctrine";
        
        $__internal_b9ce36493921cd612ef0f2de93f1db08bdaf403fefc3bf64ab5ea7e1786a7bef->leave($__internal_b9ce36493921cd612ef0f2de93f1db08bdaf403fefc3bf64ab5ea7e1786a7bef_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ee255c40b219f0905534c1bb4fc76c9c707bec7c7afc65f3350f8809b48865d = $this->env->getExtension("native_profiler");
        $__internal_5ee255c40b219f0905534c1bb4fc76c9c707bec7c7afc65f3350f8809b48865d->enter($__internal_5ee255c40b219f0905534c1bb4fc76c9c707bec7c7afc65f3350f8809b48865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ee255c40b219f0905534c1bb4fc76c9c707bec7c7afc65f3350f8809b48865d->leave($__internal_5ee255c40b219f0905534c1bb4fc76c9c707bec7c7afc65f3350f8809b48865d_prof);

    }

    // line 86
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_60cfcdb01c2602ea33fc153f754a1e0ac9fdfb8fa4f449283540938b9c5d9a8c = $this->env->getExtension("native_profiler");
        $__internal_60cfcdb01c2602ea33fc153f754a1e0ac9fdfb8fa4f449283540938b9c5d9a8c->enter($__internal_60cfcdb01c2602ea33fc153f754a1e0ac9fdfb8fa4f449283540938b9c5d9a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 87
        echo "                <a class=\"btn btn-primary\" style=\"font-size:x-large;width: 100%\" href=\"";
        echo $this->env->getExtension('routing')->getPath("app_article_new");
        echo "\">Submit a new article</a>
            ";
        
        $__internal_60cfcdb01c2602ea33fc153f754a1e0ac9fdfb8fa4f449283540938b9c5d9a8c->leave($__internal_60cfcdb01c2602ea33fc153f754a1e0ac9fdfb8fa4f449283540938b9c5d9a8c_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7372103386a5fda59911d71b131a2089a0e9626382b21d8b671b84c9a62d4b5b = $this->env->getExtension("native_profiler");
        $__internal_7372103386a5fda59911d71b131a2089a0e9626382b21d8b671b84c9a62d4b5b->enter($__internal_7372103386a5fda59911d71b131a2089a0e9626382b21d8b671b84c9a62d4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "<script src=\"/js/bootstrap.min.js\"></script>
";
        
        $__internal_7372103386a5fda59911d71b131a2089a0e9626382b21d8b671b84c9a62d4b5b->leave($__internal_7372103386a5fda59911d71b131a2089a0e9626382b21d8b671b84c9a62d4b5b_prof);

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
        return array (  258 => 99,  252 => 98,  242 => 87,  236 => 86,  225 => 83,  213 => 68,  203 => 15,  197 => 14,  186 => 11,  172 => 101,  170 => 98,  160 => 89,  158 => 86,  154 => 84,  152 => 83,  144 => 77,  135 => 75,  131 => 74,  122 => 68,  110 => 58,  104 => 56,  102 => 55,  96 => 54,  91 => 53,  89 => 52,  74 => 40,  51 => 20,  48 => 19,  45 => 14,  40 => 11,  28 => 1,);
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
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li></li>*/
/*                 <li></li>*/
/*             </ul>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <div class="navbar-form navbar-right">*/
/*                 {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                     <a class="btn btn-success" href="{{ path('fos_user_security_logout') }}">Sign out</a>*/
/*                     <a class="btn btn-danger" href="{{ path('fos_user_profile_show') }}">{{ app.user.username }}</a>*/
/*                 {% elseif app.request.get('_route') != 'fos_user_security_login' and app.request.get('_route') != 'fos_user_registration_register' %}*/
/*                     {{ render(controller('UserBundle:HoritzontalLogin:horitzontalLogin'))}}*/
/*                 {% endif %}*/
/*                 </div>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/* */
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
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% block sidebar %}*/
/*                 <a class="btn btn-primary" style="font-size:x-large;width: 100%" href="{{ path('app_article_new') }}">Submit a new article</a>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
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
