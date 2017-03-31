<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_0894046931b184f296fcaa874dd2b61b32ad9495b78ceb269dc7474a5004adba extends Twig_Template
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
        $__internal_23b071d67b216533588934a992b0a1e116d56cae3d6a1fbef0bf71c2b05415fc = $this->env->getExtension("native_profiler");
        $__internal_23b071d67b216533588934a992b0a1e116d56cae3d6a1fbef0bf71c2b05415fc->enter($__internal_23b071d67b216533588934a992b0a1e116d56cae3d6a1fbef0bf71c2b05415fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 11
        echo "<div class=\"well\">
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "date", array()), 'row');
        echo "

  <div class=\"form-group\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre"));
        echo "

    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "title", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu"));
        echo "

    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "content", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "author", array()), 'row');
        echo "

  ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "published", array()), 'row');
        echo "

  ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "image", array()), 'row');
        echo "

  ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'rest');
        echo "

  ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "
</div>
";
        
        $__internal_23b071d67b216533588934a992b0a1e116d56cae3d6a1fbef0bf71c2b05415fc->leave($__internal_23b071d67b216533588934a992b0a1e116d56cae3d6a1fbef0bf71c2b05415fc_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 48,  106 => 46,  101 => 44,  96 => 42,  91 => 40,  86 => 38,  79 => 34,  73 => 31,  68 => 29,  60 => 24,  54 => 21,  49 => 19,  43 => 16,  38 => 14,  33 => 12,  30 => 11,  25 => 6,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
/* */
/* {# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,*/
/*    elles, hériteront probablement du layout. Je dis « probablement » car,*/
/*    ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}*/
/* */
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form_start(formulaire, {'attr': {'class':'form-horizontal'}}) }}*/
/* */
/*   {{ form_errors(formulaire) }}*/
/* */
/*   {{ form_row(formulaire.date) }}*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(formulaire.title, "Titre", {'label_attr': {'class':'col-sm-2 control-label'}})}}*/
/* */
/*     {{ form_errors(formulaire.title) }}*/
/* */
/*     <div class="col-sm-10">*/
/*       {{ form_widget(formulaire.title, {'attr': {'class':'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(formulaire.content, "Contenu", {'label_attr':{'class':'col-sm-2 control-label'}}) }}*/
/* */
/*     {{ form_errors(formulaire.content) }}*/
/* */
/*     <div class="col-sm-10">*/
/*       {{ form_widget(formulaire.content, {'attr': {'class':'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   {{ form_row(formulaire.author) }}*/
/* */
/*   {{ form_row(formulaire.published) }}*/
/* */
/*   {{ form_row(formulaire.image) }}*/
/* */
/*   {{ form_widget(formulaire.save, {'attr': {'class':'btn btn-primary'}}) }}*/
/* */
/*   {{ form_rest(formulaire) }}*/
/* */
/*   {{ form_end(formulaire) }}*/
/* </div>*/
/* */
