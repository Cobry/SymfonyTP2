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
        $__internal_58a60e262f1154be9c84739cbf03c66d20f126a9e4f889e32acd3fb6f2364cdb = $this->env->getExtension("native_profiler");
        $__internal_58a60e262f1154be9c84739cbf03c66d20f126a9e4f889e32acd3fb6f2364cdb->enter($__internal_58a60e262f1154be9c84739cbf03c66d20f126a9e4f889e32acd3fb6f2364cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a60e262f1154be9c84739cbf03c66d20f126a9e4f889e32acd3fb6f2364cdb->leave($__internal_58a60e262f1154be9c84739cbf03c66d20f126a9e4f889e32acd3fb6f2364cdb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5550fa2fc285fa4d82c3ab08128e2ad699877adf4d31efe98431e4e814df8d03 = $this->env->getExtension("native_profiler");
        $__internal_5550fa2fc285fa4d82c3ab08128e2ad699877adf4d31efe98431e4e814df8d03->enter($__internal_5550fa2fc285fa4d82c3ab08128e2ad699877adf4d31efe98431e4e814df8d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5550fa2fc285fa4d82c3ab08128e2ad699877adf4d31efe98431e4e814df8d03->leave($__internal_5550fa2fc285fa4d82c3ab08128e2ad699877adf4d31efe98431e4e814df8d03_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cf75cb86a04b1a2f6ce7c97989f7036f0cc3f0066733a61d89597d2fb39a56ab = $this->env->getExtension("native_profiler");
        $__internal_cf75cb86a04b1a2f6ce7c97989f7036f0cc3f0066733a61d89597d2fb39a56ab->enter($__internal_cf75cb86a04b1a2f6ce7c97989f7036f0cc3f0066733a61d89597d2fb39a56ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_cf75cb86a04b1a2f6ce7c97989f7036f0cc3f0066733a61d89597d2fb39a56ab->leave($__internal_cf75cb86a04b1a2f6ce7c97989f7036f0cc3f0066733a61d89597d2fb39a56ab_prof);

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
