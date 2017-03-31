<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df264fd39dc4a1ed1bd3c5ed130a969fa9d2c6bf8eb561eb0706ee2720238c83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9740e08c76747f6c6a3c5a02dae5b55224b464c9287cedc4a9818994d1a98745 = $this->env->getExtension("native_profiler");
        $__internal_9740e08c76747f6c6a3c5a02dae5b55224b464c9287cedc4a9818994d1a98745->enter($__internal_9740e08c76747f6c6a3c5a02dae5b55224b464c9287cedc4a9818994d1a98745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9740e08c76747f6c6a3c5a02dae5b55224b464c9287cedc4a9818994d1a98745->leave($__internal_9740e08c76747f6c6a3c5a02dae5b55224b464c9287cedc4a9818994d1a98745_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34bf8cc22aa302cd369ef9dd44412dfa2cde3e44d4745dfc3751ec5eb3dbe7e8 = $this->env->getExtension("native_profiler");
        $__internal_34bf8cc22aa302cd369ef9dd44412dfa2cde3e44d4745dfc3751ec5eb3dbe7e8->enter($__internal_34bf8cc22aa302cd369ef9dd44412dfa2cde3e44d4745dfc3751ec5eb3dbe7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34bf8cc22aa302cd369ef9dd44412dfa2cde3e44d4745dfc3751ec5eb3dbe7e8->leave($__internal_34bf8cc22aa302cd369ef9dd44412dfa2cde3e44d4745dfc3751ec5eb3dbe7e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a62c48c1ee6c55819fa827e243933e35ee3e8c4e7233290a0847b743daedd25 = $this->env->getExtension("native_profiler");
        $__internal_9a62c48c1ee6c55819fa827e243933e35ee3e8c4e7233290a0847b743daedd25->enter($__internal_9a62c48c1ee6c55819fa827e243933e35ee3e8c4e7233290a0847b743daedd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a62c48c1ee6c55819fa827e243933e35ee3e8c4e7233290a0847b743daedd25->leave($__internal_9a62c48c1ee6c55819fa827e243933e35ee3e8c4e7233290a0847b743daedd25_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_588f62af96318f920ee625bb6ea1fcbe56d36225033b6b8ab4eee21b2cdb3915 = $this->env->getExtension("native_profiler");
        $__internal_588f62af96318f920ee625bb6ea1fcbe56d36225033b6b8ab4eee21b2cdb3915->enter($__internal_588f62af96318f920ee625bb6ea1fcbe56d36225033b6b8ab4eee21b2cdb3915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_588f62af96318f920ee625bb6ea1fcbe56d36225033b6b8ab4eee21b2cdb3915->leave($__internal_588f62af96318f920ee625bb6ea1fcbe56d36225033b6b8ab4eee21b2cdb3915_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
