<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_f69ab58da9d87438e5af7754aadf67b721549e3cd48f542aaa0127ec7868b988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5796d6b7ffef3b6d56e7f2cadcb171d09c3f359618fdc2f02b9131faa451395f = $this->env->getExtension("native_profiler");
        $__internal_5796d6b7ffef3b6d56e7f2cadcb171d09c3f359618fdc2f02b9131faa451395f->enter($__internal_5796d6b7ffef3b6d56e7f2cadcb171d09c3f359618fdc2f02b9131faa451395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5796d6b7ffef3b6d56e7f2cadcb171d09c3f359618fdc2f02b9131faa451395f->leave($__internal_5796d6b7ffef3b6d56e7f2cadcb171d09c3f359618fdc2f02b9131faa451395f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8440c4159600215b8e76035f2f46dc1db81aba83699f9cac81b9f0a571a89393 = $this->env->getExtension("native_profiler");
        $__internal_8440c4159600215b8e76035f2f46dc1db81aba83699f9cac81b9f0a571a89393->enter($__internal_8440c4159600215b8e76035f2f46dc1db81aba83699f9cac81b9f0a571a89393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8440c4159600215b8e76035f2f46dc1db81aba83699f9cac81b9f0a571a89393->leave($__internal_8440c4159600215b8e76035f2f46dc1db81aba83699f9cac81b9f0a571a89393_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8d7cfc4d66fcb105d79eb7077fe0ec5672213db73ddce743a017796714c9b62 = $this->env->getExtension("native_profiler");
        $__internal_e8d7cfc4d66fcb105d79eb7077fe0ec5672213db73ddce743a017796714c9b62->enter($__internal_e8d7cfc4d66fcb105d79eb7077fe0ec5672213db73ddce743a017796714c9b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_e8d7cfc4d66fcb105d79eb7077fe0ec5672213db73ddce743a017796714c9b62->leave($__internal_e8d7cfc4d66fcb105d79eb7077fe0ec5672213db73ddce743a017796714c9b62_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_139a56f1a4a3123d9946a597abe42364fa4df83da63f8aad2066bbc37cc66ad4 = $this->env->getExtension("native_profiler");
        $__internal_139a56f1a4a3123d9946a597abe42364fa4df83da63f8aad2066bbc37cc66ad4->enter($__internal_139a56f1a4a3123d9946a597abe42364fa4df83da63f8aad2066bbc37cc66ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_139a56f1a4a3123d9946a597abe42364fa4df83da63f8aad2066bbc37cc66ad4->leave($__internal_139a56f1a4a3123d9946a597abe42364fa4df83da63f8aad2066bbc37cc66ad4_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
