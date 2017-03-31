<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_272eab9a566753354f53d4f3faba620b4b4121863503c5046acdf29dc0a5b852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aafd7e95871b1c3fa3dcf5aaf1f6418aa12d7daec9204187951d0c4f7acfa45d = $this->env->getExtension("native_profiler");
        $__internal_aafd7e95871b1c3fa3dcf5aaf1f6418aa12d7daec9204187951d0c4f7acfa45d->enter($__internal_aafd7e95871b1c3fa3dcf5aaf1f6418aa12d7daec9204187951d0c4f7acfa45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aafd7e95871b1c3fa3dcf5aaf1f6418aa12d7daec9204187951d0c4f7acfa45d->leave($__internal_aafd7e95871b1c3fa3dcf5aaf1f6418aa12d7daec9204187951d0c4f7acfa45d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e5c5dea883f34b598a63647f524381b61263dd76d481badfe53f7f39eb50f22 = $this->env->getExtension("native_profiler");
        $__internal_4e5c5dea883f34b598a63647f524381b61263dd76d481badfe53f7f39eb50f22->enter($__internal_4e5c5dea883f34b598a63647f524381b61263dd76d481badfe53f7f39eb50f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4e5c5dea883f34b598a63647f524381b61263dd76d481badfe53f7f39eb50f22->leave($__internal_4e5c5dea883f34b598a63647f524381b61263dd76d481badfe53f7f39eb50f22_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b4688abea841ef76711406321b6aab00393e30677b33d4078a156778a3dbc6f1 = $this->env->getExtension("native_profiler");
        $__internal_b4688abea841ef76711406321b6aab00393e30677b33d4078a156778a3dbc6f1->enter($__internal_b4688abea841ef76711406321b6aab00393e30677b33d4078a156778a3dbc6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 12
            echo "        <div class=\"alert alert-success\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "                ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "info"), "method")) {
            // line 20
            echo "        <div class=\"alert alert-info\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                echo "                ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </div>
    ";
        }
        // line 26
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 31
            echo "      <li>
        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  </ul>

  <ul class=\"pagination\">
    ";
        // line 45
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 46
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  </ul>

";
        
        $__internal_b4688abea841ef76711406321b6aab00393e30677b33d4078a156778a3dbc6f1->leave($__internal_b4688abea841ef76711406321b6aab00393e30677b33d4078a156778a3dbc6f1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 50,  166 => 47,  159 => 46,  154 => 45,  149 => 41,  142 => 39,  134 => 36,  130 => 35,  125 => 33,  121 => 32,  118 => 31,  113 => 30,  107 => 26,  103 => 24,  94 => 22,  90 => 21,  87 => 20,  85 => 19,  82 => 18,  78 => 16,  69 => 14,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*     {% if app.session.flashBag.has('success') %}*/
/*         <div class="alert alert-success">*/
/*             {% for message in app.session.flashbag.get('success') %}*/
/*                 {{ message }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if app.session.flashBag.has('info') %}*/
/*         <div class="alert alert-info">*/
/*             {% for message in app.session.flashbag.get('info') %}*/
/*                 {{ message }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <ul class="pagination">*/
/*     {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*     {% for p in range(1, nbPages) %}*/
/*       <li{% if p == page %} class="active"{% endif %}>*/
/*         <a href="{{ path('oc_platform_home', {'page': p}) }}">{{ p }}</a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
/* */
