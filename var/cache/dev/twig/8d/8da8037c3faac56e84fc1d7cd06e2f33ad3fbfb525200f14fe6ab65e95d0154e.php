<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_cccd46686b99b29fba537386549b10b12051ef82a9e840620ac33bd5f83a6159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77b1ae6761c47e69c3cfce44397e1d0cff3cb50019f76187d2db2935db157147 = $this->env->getExtension("native_profiler");
        $__internal_77b1ae6761c47e69c3cfce44397e1d0cff3cb50019f76187d2db2935db157147->enter($__internal_77b1ae6761c47e69c3cfce44397e1d0cff3cb50019f76187d2db2935db157147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_77b1ae6761c47e69c3cfce44397e1d0cff3cb50019f76187d2db2935db157147->leave($__internal_77b1ae6761c47e69c3cfce44397e1d0cff3cb50019f76187d2db2935db157147_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if trace.function %}*/
/*     at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})*/
/* {% else %}*/
/*     at n/a*/
/* {% endif %}*/
/* {% if trace.file is defined and trace.line is defined %}*/
/*         in {{ trace.file }} line {{ trace.line }}*/
/* {% endif %}*/
/* */