<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_79d626a6835dac9ea66f0ce90ef014d5318f5f6d508926861c920d83a0d4bfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_cb907b0ab49dd19305c967f0db320c72f71316fbc70dbe8d2e0d973806392d5d = $this->env->getExtension("native_profiler");
        $__internal_cb907b0ab49dd19305c967f0db320c72f71316fbc70dbe8d2e0d973806392d5d->enter($__internal_cb907b0ab49dd19305c967f0db320c72f71316fbc70dbe8d2e0d973806392d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb907b0ab49dd19305c967f0db320c72f71316fbc70dbe8d2e0d973806392d5d->leave($__internal_cb907b0ab49dd19305c967f0db320c72f71316fbc70dbe8d2e0d973806392d5d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e4d3d3e18541b2945602e9e85684b50de66329f9172f3ad1a93cc7fa880aeb = $this->env->getExtension("native_profiler");
        $__internal_d1e4d3d3e18541b2945602e9e85684b50de66329f9172f3ad1a93cc7fa880aeb->enter($__internal_d1e4d3d3e18541b2945602e9e85684b50de66329f9172f3ad1a93cc7fa880aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d1e4d3d3e18541b2945602e9e85684b50de66329f9172f3ad1a93cc7fa880aeb->leave($__internal_d1e4d3d3e18541b2945602e9e85684b50de66329f9172f3ad1a93cc7fa880aeb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3232a4e2d9cc77603af17a706e5fda94d9bd52f5ffc2afb5eb53cf231764161b = $this->env->getExtension("native_profiler");
        $__internal_3232a4e2d9cc77603af17a706e5fda94d9bd52f5ffc2afb5eb53cf231764161b->enter($__internal_3232a4e2d9cc77603af17a706e5fda94d9bd52f5ffc2afb5eb53cf231764161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_3232a4e2d9cc77603af17a706e5fda94d9bd52f5ffc2afb5eb53cf231764161b->leave($__internal_3232a4e2d9cc77603af17a706e5fda94d9bd52f5ffc2afb5eb53cf231764161b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
