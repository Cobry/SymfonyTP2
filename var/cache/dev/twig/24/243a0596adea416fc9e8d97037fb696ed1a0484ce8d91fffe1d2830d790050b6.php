<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3b77dc6ce234e017f749672c7030aa7492605c8222670eeb49447e03ec31923c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ec3d294fcc1582d14d8eca3d132e3bb369a6c6603787ad592ac32f67c7f232e = $this->env->getExtension("native_profiler");
        $__internal_3ec3d294fcc1582d14d8eca3d132e3bb369a6c6603787ad592ac32f67c7f232e->enter($__internal_3ec3d294fcc1582d14d8eca3d132e3bb369a6c6603787ad592ac32f67c7f232e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec3d294fcc1582d14d8eca3d132e3bb369a6c6603787ad592ac32f67c7f232e->leave($__internal_3ec3d294fcc1582d14d8eca3d132e3bb369a6c6603787ad592ac32f67c7f232e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1750f48a5856899f370de5984615bb5ffdef540b1c24b83936359e0d0da61e4 = $this->env->getExtension("native_profiler");
        $__internal_e1750f48a5856899f370de5984615bb5ffdef540b1c24b83936359e0d0da61e4->enter($__internal_e1750f48a5856899f370de5984615bb5ffdef540b1c24b83936359e0d0da61e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e1750f48a5856899f370de5984615bb5ffdef540b1c24b83936359e0d0da61e4->leave($__internal_e1750f48a5856899f370de5984615bb5ffdef540b1c24b83936359e0d0da61e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_48f366dbe9cb106a51f2eff56af60f71711c699e44437197001c91307163df36 = $this->env->getExtension("native_profiler");
        $__internal_48f366dbe9cb106a51f2eff56af60f71711c699e44437197001c91307163df36->enter($__internal_48f366dbe9cb106a51f2eff56af60f71711c699e44437197001c91307163df36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_48f366dbe9cb106a51f2eff56af60f71711c699e44437197001c91307163df36->leave($__internal_48f366dbe9cb106a51f2eff56af60f71711c699e44437197001c91307163df36_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
