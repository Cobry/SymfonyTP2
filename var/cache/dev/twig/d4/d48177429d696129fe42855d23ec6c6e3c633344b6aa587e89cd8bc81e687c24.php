<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_888acca2fa876f7aeab1ba002d579a490748a5773f580e6969419a9e0659493d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_70843f068ce9008d9e7337c174264d3cc1bcb817148110e4aa10243281c0a772 = $this->env->getExtension("native_profiler");
        $__internal_70843f068ce9008d9e7337c174264d3cc1bcb817148110e4aa10243281c0a772->enter($__internal_70843f068ce9008d9e7337c174264d3cc1bcb817148110e4aa10243281c0a772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70843f068ce9008d9e7337c174264d3cc1bcb817148110e4aa10243281c0a772->leave($__internal_70843f068ce9008d9e7337c174264d3cc1bcb817148110e4aa10243281c0a772_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5ccf4913adfb3d6db6b65fe38a9c13363322c49bb6f9a33c8ef2bfbb460d2c0 = $this->env->getExtension("native_profiler");
        $__internal_c5ccf4913adfb3d6db6b65fe38a9c13363322c49bb6f9a33c8ef2bfbb460d2c0->enter($__internal_c5ccf4913adfb3d6db6b65fe38a9c13363322c49bb6f9a33c8ef2bfbb460d2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c5ccf4913adfb3d6db6b65fe38a9c13363322c49bb6f9a33c8ef2bfbb460d2c0->leave($__internal_c5ccf4913adfb3d6db6b65fe38a9c13363322c49bb6f9a33c8ef2bfbb460d2c0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fba3dcc152ff103a458d6dd99ab273f6d6446807a195dc9b8f68ef6aa55dc95 = $this->env->getExtension("native_profiler");
        $__internal_6fba3dcc152ff103a458d6dd99ab273f6d6446807a195dc9b8f68ef6aa55dc95->enter($__internal_6fba3dcc152ff103a458d6dd99ab273f6d6446807a195dc9b8f68ef6aa55dc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6fba3dcc152ff103a458d6dd99ab273f6d6446807a195dc9b8f68ef6aa55dc95->leave($__internal_6fba3dcc152ff103a458d6dd99ab273f6d6446807a195dc9b8f68ef6aa55dc95_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd1a10dfa58b2bf2ac1604d92775cf93f19a730bcfcf01e8dc1c6e9dcc718ceb = $this->env->getExtension("native_profiler");
        $__internal_bd1a10dfa58b2bf2ac1604d92775cf93f19a730bcfcf01e8dc1c6e9dcc718ceb->enter($__internal_bd1a10dfa58b2bf2ac1604d92775cf93f19a730bcfcf01e8dc1c6e9dcc718ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd1a10dfa58b2bf2ac1604d92775cf93f19a730bcfcf01e8dc1c6e9dcc718ceb->leave($__internal_bd1a10dfa58b2bf2ac1604d92775cf93f19a730bcfcf01e8dc1c6e9dcc718ceb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
