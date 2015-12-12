<?php

/* ::base.html.twig */
class __TwigTemplate_963509cee2ef0677899e7928568356b0f85172ec592b3817801279f000df3200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c174c0d786f7ca3038c6a84065e70f902e69372f2fb92ce4497c52f535e871d8 = $this->env->getExtension("native_profiler");
        $__internal_c174c0d786f7ca3038c6a84065e70f902e69372f2fb92ce4497c52f535e871d8->enter($__internal_c174c0d786f7ca3038c6a84065e70f902e69372f2fb92ce4497c52f535e871d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

<div class=\"container\">
    <ul>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </ul>
</div>

<div class=\"container\">
    <div class=\"margin-bottom-md\"></div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 80
        $this->displayBlock('sidebar', $context, $blocks);
        // line 97
        echo "        </div>
    </div>
    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_c174c0d786f7ca3038c6a84065e70f902e69372f2fb92ce4497c52f535e871d8->leave($__internal_c174c0d786f7ca3038c6a84065e70f902e69372f2fb92ce4497c52f535e871d8_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ae7161ad99142bcc6c9704ea7877beb3c4d440694590304463ecb91f0994889 = $this->env->getExtension("native_profiler");
        $__internal_7ae7161ad99142bcc6c9704ea7877beb3c4d440694590304463ecb91f0994889->enter($__internal_7ae7161ad99142bcc6c9704ea7877beb3c4d440694590304463ecb91f0994889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7ae7161ad99142bcc6c9704ea7877beb3c4d440694590304463ecb91f0994889->leave($__internal_7ae7161ad99142bcc6c9704ea7877beb3c4d440694590304463ecb91f0994889_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a391482c99eee90e40037d3daedc1c2c8fcbddb415fd01f743ae16b1d3741bfc = $this->env->getExtension("native_profiler");
        $__internal_a391482c99eee90e40037d3daedc1c2c8fcbddb415fd01f743ae16b1d3741bfc->enter($__internal_a391482c99eee90e40037d3daedc1c2c8fcbddb415fd01f743ae16b1d3741bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jumbotron.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_a391482c99eee90e40037d3daedc1c2c8fcbddb415fd01f743ae16b1d3741bfc->leave($__internal_a391482c99eee90e40037d3daedc1c2c8fcbddb415fd01f743ae16b1d3741bfc_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad074d79c9d5a0da45e7b3a801b19699bbe72db7b69b0297adf3b3adee75cc08 = $this->env->getExtension("native_profiler");
        $__internal_ad074d79c9d5a0da45e7b3a801b19699bbe72db7b69b0297adf3b3adee75cc08->enter($__internal_ad074d79c9d5a0da45e7b3a801b19699bbe72db7b69b0297adf3b3adee75cc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad074d79c9d5a0da45e7b3a801b19699bbe72db7b69b0297adf3b3adee75cc08->leave($__internal_ad074d79c9d5a0da45e7b3a801b19699bbe72db7b69b0297adf3b3adee75cc08_prof);

    }

    // line 80
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d4cf136796f1a17ae0e5881200a1ea3615003ea539c32c920f6cb0e8738c8be2 = $this->env->getExtension("native_profiler");
        $__internal_d4cf136796f1a17ae0e5881200a1ea3615003ea539c32c920f6cb0e8738c8be2->enter($__internal_d4cf136796f1a17ae0e5881200a1ea3615003ea539c32c920f6cb0e8738c8be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 81
        echo "                <div class=\"container\">
                    ";
        // line 82
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 83
            echo "                        <div class=\"row margin-bottom-md\">
                            <div class=\"col-md-4\">
                                <a class=\"btn btn-warning\" style=\"font-size:x-large;width: 100%\" href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("app_admin_index_index");
            echo "\">Dashboard</a>
                            </div>
                        </div>
                    ";
        }
        // line 89
        echo "                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <a class=\"btn btn-primary\" style=\"font-size:x-large;width: 100%\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("app_article_new");
        echo "\">Submit a new article</a>
                        </div>
                    </div>
                </div>

            ";
        
        $__internal_d4cf136796f1a17ae0e5881200a1ea3615003ea539c32c920f6cb0e8738c8be2->leave($__internal_d4cf136796f1a17ae0e5881200a1ea3615003ea539c32c920f6cb0e8738c8be2_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ccb29bfe4f0b74e4481241ec8ce60a3da599980b1f82059b61c3f17a58f789c = $this->env->getExtension("native_profiler");
        $__internal_9ccb29bfe4f0b74e4481241ec8ce60a3da599980b1f82059b61c3f17a58f789c->enter($__internal_9ccb29bfe4f0b74e4481241ec8ce60a3da599980b1f82059b61c3f17a58f789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9ccb29bfe4f0b74e4481241ec8ce60a3da599980b1f82059b61c3f17a58f789c->leave($__internal_9ccb29bfe4f0b74e4481241ec8ce60a3da599980b1f82059b61c3f17a58f789c_prof);

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
        return array (  270 => 107,  264 => 106,  251 => 91,  247 => 89,  240 => 85,  236 => 83,  234 => 82,  231 => 81,  225 => 80,  214 => 77,  205 => 17,  201 => 16,  196 => 15,  190 => 14,  179 => 11,  169 => 114,  162 => 109,  160 => 106,  150 => 97,  148 => 80,  144 => 78,  142 => 77,  133 => 70,  124 => 68,  120 => 67,  109 => 58,  103 => 56,  101 => 55,  95 => 54,  90 => 53,  88 => 52,  73 => 40,  50 => 20,  47 => 19,  44 => 14,  39 => 11,  27 => 1,);
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
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />*/
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
/* <div class="container">*/
/*     <ul>*/
/*         {% for message in app.session.flashBag.get('messages') %}*/
/*             <li>{{ message }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <div class="margin-bottom-md"></div>*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% block sidebar %}*/
/*                 <div class="container">*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <div class="row margin-bottom-md">*/
/*                             <div class="col-md-4">*/
/*                                 <a class="btn btn-warning" style="font-size:x-large;width: 100%" href="{{ path('app_admin_index_index') }}">Dashboard</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="row">*/
/*                         <div class="col-md-4">*/
/*                             <a class="btn btn-primary" style="font-size:x-large;width: 100%" href="{{ path('app_article_new') }}">Submit a new article</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
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
/* <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>*/
/* </body>*/
/* </html>*/
