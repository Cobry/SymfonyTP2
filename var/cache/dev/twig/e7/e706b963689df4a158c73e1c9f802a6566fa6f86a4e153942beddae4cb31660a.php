<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_d26c388fbab489f89ac312d4690a3c25109b057fef96df114c12e864dbf56e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40806acd9287d5a5c32e6639e07a317fee90ddfd93153d473a5f63e86aa2138f = $this->env->getExtension("native_profiler");
        $__internal_40806acd9287d5a5c32e6639e07a317fee90ddfd93153d473a5f63e86aa2138f->enter($__internal_40806acd9287d5a5c32e6639e07a317fee90ddfd93153d473a5f63e86aa2138f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40806acd9287d5a5c32e6639e07a317fee90ddfd93153d473a5f63e86aa2138f->leave($__internal_40806acd9287d5a5c32e6639e07a317fee90ddfd93153d473a5f63e86aa2138f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_803465f447cbd73b7c3c2220f1d3be34430156ed701d749e80ede4b40bef3c4b = $this->env->getExtension("native_profiler");
        $__internal_803465f447cbd73b7c3c2220f1d3be34430156ed701d749e80ede4b40bef3c4b->enter($__internal_803465f447cbd73b7c3c2220f1d3be34430156ed701d749e80ede4b40bef3c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_803465f447cbd73b7c3c2220f1d3be34430156ed701d749e80ede4b40bef3c4b->leave($__internal_803465f447cbd73b7c3c2220f1d3be34430156ed701d749e80ede4b40bef3c4b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
