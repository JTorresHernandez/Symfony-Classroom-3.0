<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_a8d46cc716f4699e439d511e83d242029024c9c389ff6303e454f9e67cff5da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ebfb0e8296f26c9d1a7ebe1dfd03bd85b1d1b8dbd96d82cee20383c6b25e384 = $this->env->getExtension("native_profiler");
        $__internal_8ebfb0e8296f26c9d1a7ebe1dfd03bd85b1d1b8dbd96d82cee20383c6b25e384->enter($__internal_8ebfb0e8296f26c9d1a7ebe1dfd03bd85b1d1b8dbd96d82cee20383c6b25e384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebfb0e8296f26c9d1a7ebe1dfd03bd85b1d1b8dbd96d82cee20383c6b25e384->leave($__internal_8ebfb0e8296f26c9d1a7ebe1dfd03bd85b1d1b8dbd96d82cee20383c6b25e384_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5da1cee81abaa7bc223d7b7b90023613e0809455a028e5d2d9affb13c4e69374 = $this->env->getExtension("native_profiler");
        $__internal_5da1cee81abaa7bc223d7b7b90023613e0809455a028e5d2d9affb13c4e69374->enter($__internal_5da1cee81abaa7bc223d7b7b90023613e0809455a028e5d2d9affb13c4e69374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_5da1cee81abaa7bc223d7b7b90023613e0809455a028e5d2d9affb13c4e69374->leave($__internal_5da1cee81abaa7bc223d7b7b90023613e0809455a028e5d2d9affb13c4e69374_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a234034dd9de3eafcfebec53787d5e1b25f8c66c2d5835413cd4bf5fd9587118 = $this->env->getExtension("native_profiler");
        $__internal_a234034dd9de3eafcfebec53787d5e1b25f8c66c2d5835413cd4bf5fd9587118->enter($__internal_a234034dd9de3eafcfebec53787d5e1b25f8c66c2d5835413cd4bf5fd9587118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_a234034dd9de3eafcfebec53787d5e1b25f8c66c2d5835413cd4bf5fd9587118->leave($__internal_a234034dd9de3eafcfebec53787d5e1b25f8c66c2d5835413cd4bf5fd9587118_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b955dfde26bfec5cb03d45fee6da88ebc90d599491e3c44eaaf4458eaff83b4e = $this->env->getExtension("native_profiler");
            $__internal_b955dfde26bfec5cb03d45fee6da88ebc90d599491e3c44eaaf4458eaff83b4e->enter($__internal_b955dfde26bfec5cb03d45fee6da88ebc90d599491e3c44eaaf4458eaff83b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, (isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners"))), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != (isset($context["previous_event"]) ? $context["previous_event"] : $this->getContext($context, "previous_event"))))) {
                    // line 64
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">
                    ";
                // line 79
                if (($this->getAttribute($context["listener"], "type", array()) == "Closure")) {
                    // line 80
                    echo "
                        Closure
                        <span class=\"text-muted text-small\">(there is no class or file information)</span>

                    ";
                } elseif (($this->getAttribute(                // line 84
$context["listener"], "type", array()) == "Function")) {
                    // line 85
                    echo "
                        ";
                    // line 86
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["listener"], "file", array()), $this->getAttribute($context["listener"], "line", array()));
                    // line 87
                    echo "                        ";
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 88
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "function", array()), "html", null, true);
                        echo "()</a>
                            <span class=\"text-muted text-small\">(";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "file", array()), "html", null, true);
                        echo ")</span>
                        ";
                    } else {
                        // line 91
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "function", array()), "html", null, true);
                        echo "()
                            <span class=\"text-muted newline text-small\">";
                        // line 92
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "file", array()), "html", null, true);
                        echo " (line ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "line", array()), "html", null, true);
                        echo ")</span>
                        ";
                    }
                    // line 94
                    echo "
                    ";
                } elseif (($this->getAttribute(                // line 95
$context["listener"], "type", array()) == "Method")) {
                    // line 96
                    echo "
                        ";
                    // line 97
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["listener"], "file", array()), $this->getAttribute($context["listener"], "line", array()));
                    // line 98
                    echo "                        ";
                    $context["class_namespace"] = twig_join_filter(twig_split_filter($this->env, $this->getAttribute($context["listener"], "class", array()), "\\",  -1), "\\");
                    // line 99
                    echo "
                        ";
                    // line 100
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 101
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\"><strong>";
                        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('code')->abbrClass($this->getAttribute($context["listener"], "class", array()))), "html", null, true);
                        echo "</strong>::";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "method", array()), "html", null, true);
                        echo "()</a>
                            <span class=\"text-muted text-small\">(";
                        // line 102
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "class", array()), "html", null, true);
                        echo ")</span>
                        ";
                    } else {
                        // line 104
                        echo "                            <span>";
                        echo twig_escape_filter($this->env, (isset($context["class_namespace"]) ? $context["class_namespace"] : $this->getContext($context, "class_namespace")), "html", null, true);
                        echo "\\</span><strong>";
                        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('code')->abbrClass($this->getAttribute($context["listener"], "class", array()))), "html", null, true);
                        echo "</strong>::";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "method", array()), "html", null, true);
                        echo "()
                            <span class=\"text-muted newline text-small\">";
                        // line 105
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "file", array()), "html", null, true);
                        echo " (line ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "line", array()), "html", null, true);
                        echo ")</span>
                        ";
                    }
                    // line 107
                    echo "
                    ";
                }
                // line 109
                echo "                </td>
            </tr>

            ";
                // line 112
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 113
                    echo "                </tbody>
            ";
                }
                // line 115
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "    </table>
";
            
            $__internal_b955dfde26bfec5cb03d45fee6da88ebc90d599491e3c44eaaf4458eaff83b4e->leave($__internal_b955dfde26bfec5cb03d45fee6da88ebc90d599491e3c44eaaf4458eaff83b4e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 116,  316 => 115,  312 => 113,  310 => 112,  305 => 109,  301 => 107,  294 => 105,  285 => 104,  280 => 102,  271 => 101,  269 => 100,  266 => 99,  263 => 98,  261 => 97,  258 => 96,  256 => 95,  253 => 94,  246 => 92,  241 => 91,  236 => 89,  229 => 88,  226 => 87,  224 => 86,  221 => 85,  219 => 84,  213 => 80,  211 => 79,  206 => 77,  202 => 75,  199 => 74,  197 => 73,  191 => 70,  186 => 67,  182 => 65,  179 => 64,  176 => 63,  158 => 62,  156 => 61,  146 => 53,  131 => 52,  120 => 46,  114 => 44,  101 => 33,  99 => 32,  94 => 30,  86 => 25,  80 => 22,  76 => 20,  70 => 16,  68 => 15,  64 => 13,  58 => 12,  47 => 7,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/event.svg') }}</span>*/
/*     <strong>Events</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Event Dispatcher</h2>*/
/* */
/*     {% if collector.calledlisteners is empty %}*/
/*         <div class="empty">*/
/*             <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-tabs">*/
/*             <div class="tab">*/
/*                 <h3 class="tab-title">Called Listeners <span class="badge">{{ collector.calledlisteners|length }}</span></h3>*/
/* */
/*                 <div class="tab-content">*/
/*                     {{ helper.render_table(collector.calledlisteners) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="tab">*/
/*                 <h3 class="tab-title">Not Called Listeners <span class="badge">{{ collector.notcalledlisteners|length }}</span></h3>*/
/*                 <div class="tab-content">*/
/*                     {% if collector.notcalledlisteners is empty %}*/
/*                         <div class="empty">*/
/*                             <p>*/
/*                                 <strong>There are no uncalled listeners</strong>.*/
/*                             </p>*/
/*                             <p>*/
/*                                 All listeners were called for this request or an error occurred*/
/*                                 when trying to collect uncalled listeners (in which case check the*/
/*                                 logs to get more information).*/
/*                             </p>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ helper.render_table(collector.notcalledlisteners) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% macro render_table(listeners) %}*/
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th class="text-right">Priority</th>*/
/*                 <th>Listener</th>*/
/*             </tr>*/
/*         </thead>*/
/* */
/*         {% set previous_event = (listeners|first).event %}*/
/*         {% for listener in listeners %}*/
/*             {% if loop.first or listener.event != previous_event %}*/
/*                 {% if not loop.first %}*/
/*                     </tbody>*/
/*                 {% endif %}*/
/* */
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th colspan="2" class="colored font-normal">{{ listener.event }}</th>*/
/*                     </tr>*/
/* */
/*                 {% set previous_event = listener.event %}*/
/*             {% endif %}*/
/* */
/*             <tr>*/
/*                 <td class="text-right">{{ listener.priority|default('-') }}</td>*/
/*                 <td class="font-normal">*/
/*                     {% if listener.type == 'Closure' %}*/
/* */
/*                         Closure*/
/*                         <span class="text-muted text-small">(there is no class or file information)</span>*/
/* */
/*                     {% elseif listener.type == 'Function' %}*/
/* */
/*                         {% set link = listener.file|file_link(listener.line) %}*/
/*                         {% if link %}*/
/*                             <a href="{{ link }}">{{ listener.function }}()</a>*/
/*                             <span class="text-muted text-small">({{ listener.file }})</span>*/
/*                         {% else %}*/
/*                             {{ listener.function }}()*/
/*                             <span class="text-muted newline text-small">{{ listener.file }} (line {{ listener.line }})</span>*/
/*                         {% endif %}*/
/* */
/*                     {% elseif listener.type == "Method" %}*/
/* */
/*                         {% set link = listener.file|file_link(listener.line) %}*/
/*                         {% set class_namespace = listener.class|split('\\', -1)|join('\\') %}*/
/* */
/*                         {% if link %}*/
/*                             <a href="{{ link }}"><strong>{{ listener.class|abbr_class|striptags }}</strong>::{{ listener.method }}()</a>*/
/*                             <span class="text-muted text-small">({{ listener.class }})</span>*/
/*                         {% else %}*/
/*                             <span>{{ class_namespace }}\</span><strong>{{ listener.class|abbr_class|striptags }}</strong>::{{ listener.method }}()*/
/*                             <span class="text-muted newline text-small">{{ listener.file }} (line {{ listener.line }})</span>*/
/*                         {% endif %}*/
/* */
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/* */
/*             {% if loop.last %}*/
/*                 </tbody>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endmacro %}*/
/* */
