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
        $__internal_b50639b08f50a4f50209e0bc6d9a10f7bc6ec62045bd223b6fd64219ca7cfbdf = $this->env->getExtension("native_profiler");
        $__internal_b50639b08f50a4f50209e0bc6d9a10f7bc6ec62045bd223b6fd64219ca7cfbdf->enter($__internal_b50639b08f50a4f50209e0bc6d9a10f7bc6ec62045bd223b6fd64219ca7cfbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

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
        // line 17
        echo "  ";
        if ($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "date", array(), "any", true, true)) {
            // line 18
            echo "      <div class=\"form-group\">
          ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date"));
            echo "

          ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "date", array()), 'errors');
            echo "

          <div class=\"col-sm-10\">
              ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "date", array()), 'widget', array("attr" => array("class" => "form-inline")));
            echo "
          </div>
      </div>
  ";
        }
        // line 28
        echo "
";
        // line 30
        echo "  <div class=\"form-group\">
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre"));
        echo "

    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "title", array()), 'errors');
        echo "

    <div class=\"col-sm-5\">
      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 41
        echo "  <div class=\"form-group\">
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu"));
        echo "

    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "content", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 52
        echo "    <div class=\"form-group\">
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Auteur"));
        echo "

        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "author", array()), 'errors');
        echo "

        <div class=\"col-sm-5\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

";
        // line 63
        echo "  ";
        if ($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "published", array(), "any", true, true)) {
            // line 64
            echo "      <div class=\"form-group\">
          ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "published", array()), 'label', array("label_attr" => array("class" => "col-sm-2 form-check-label"), "label" => "Publié"));
            echo "

          ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "published", array()), 'errors');
            echo "

          <div class=\"col-sm-5\">
              ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "published", array()), 'widget', array("attr" => array("class" => "form-check-input")));
            echo "
          </div>
      </div>
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "image", array()), 'row');
        echo "

";
        // line 78
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "categories", array()), 'row');
        echo "
    <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter</a><br/>

  ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'rest');
        echo "

  ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "
</div>

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

<script type=\"text/javascript\">
  \$(document).ready(function(){
      var \$container = \$('div#advert_categories');

      var index = \$container.find(':input').length;

      \$('#add_category').click(function(e){
          addCategory(\$container);

          e.preventDefault();

          return false;
      });

      if (index ==0){
          addCategory(\$container);
      }else{
          \$container.children('div').each(function(){
              addDeleteLink(\$(this));
          })
      }

      function addCategory(\$container){
          var template = \$container.attr('data-prototype')
              .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
              .replace(/__name__/g, index)
          ;

          var \$prototype = \$(template);

          addDeleteLink(\$prototype);

          \$container.append(\$prototype);

          index++;
      }

      function addDeleteLink(\$prototype){
          var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

          \$prototype.append(\$deleteLink);

          \$deleteLink.click(function (e) {
              \$prototype.remove();

              e.preventDefault();

              return false;
          });
      }
  });
</script>";
        
        $__internal_b50639b08f50a4f50209e0bc6d9a10f7bc6ec62045bd223b6fd64219ca7cfbdf->leave($__internal_b50639b08f50a4f50209e0bc6d9a10f7bc6ec62045bd223b6fd64219ca7cfbdf_prof);

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
        return array (  182 => 85,  177 => 83,  172 => 81,  165 => 78,  160 => 75,  157 => 74,  150 => 70,  144 => 67,  139 => 65,  136 => 64,  133 => 63,  126 => 58,  120 => 55,  115 => 53,  112 => 52,  105 => 47,  99 => 44,  94 => 42,  91 => 41,  84 => 36,  78 => 33,  73 => 31,  70 => 30,  67 => 28,  60 => 24,  54 => 21,  49 => 19,  46 => 18,  43 => 17,  38 => 14,  33 => 12,  30 => 11,  25 => 6,  22 => 2,);
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
/* {#DATE#}*/
/*   {% if formulaire.date is defined %}*/
/*       <div class="form-group">*/
/*           {{ form_label(formulaire.date,"Date", {'label_attr': {'class':'col-sm-2 control-label'}}) }}*/
/* */
/*           {{ form_errors(formulaire.date) }}*/
/* */
/*           <div class="col-sm-10">*/
/*               {{ form_widget(formulaire.date, {'attr':{'class':'form-inline'}}) }}*/
/*           </div>*/
/*       </div>*/
/*   {% endif %}*/
/* */
/* {# TITRE#}*/
/*   <div class="form-group">*/
/*     {{ form_label(formulaire.title, "Titre", {'label_attr': {'class':'col-sm-2 control-label'}})}}*/
/* */
/*     {{ form_errors(formulaire.title) }}*/
/* */
/*     <div class="col-sm-5">*/
/*       {{ form_widget(formulaire.title, {'attr': {'class':'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/* {#CONTENU#}*/
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
/* {#AUTHOR#}*/
/*     <div class="form-group">*/
/*         {{ form_label(formulaire.author, "Auteur", {'label_attr':{'class':'col-sm-2 control-label'}}) }}*/
/* */
/*         {{ form_errors(formulaire.author) }}*/
/* */
/*         <div class="col-sm-5">*/
/*             {{ form_widget(formulaire.author, {'attr': {'class':'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {#PUBLISHED#}*/
/*   {% if formulaire.published is defined %}*/
/*       <div class="form-group">*/
/*           {{ form_label(formulaire.published, "Publié", {'label_attr':{'class':'col-sm-2 form-check-label'}}) }}*/
/* */
/*           {{ form_errors(formulaire.published) }}*/
/* */
/*           <div class="col-sm-5">*/
/*               {{ form_widget(formulaire.published, {'attr': {'class':'form-check-input'}}) }}*/
/*           </div>*/
/*       </div>*/
/*   {% endif %}*/
/* */
/*   {{ form_row(formulaire.image) }}*/
/* */
/* {#CATEGORIES#}*/
/*     {{ form_row(formulaire.categories) }}*/
/*     <a href="#" id="add_category" class="btn btn-default">Ajouter</a><br/>*/
/* */
/*   {{ form_widget(formulaire.save, {'attr': {'class':'btn btn-primary'}}) }}*/
/* */
/*   {{ form_rest(formulaire) }}*/
/* */
/*   {{ form_end(formulaire) }}*/
/* </div>*/
/* */
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/* <script type="text/javascript">*/
/*   $(document).ready(function(){*/
/*       var $container = $('div#advert_categories');*/
/* */
/*       var index = $container.find(':input').length;*/
/* */
/*       $('#add_category').click(function(e){*/
/*           addCategory($container);*/
/* */
/*           e.preventDefault();*/
/* */
/*           return false;*/
/*       });*/
/* */
/*       if (index ==0){*/
/*           addCategory($container);*/
/*       }else{*/
/*           $container.children('div').each(function(){*/
/*               addDeleteLink($(this));*/
/*           })*/
/*       }*/
/* */
/*       function addCategory($container){*/
/*           var template = $container.attr('data-prototype')*/
/*               .replace(/__name__label__/g, 'Catégorie n°' + (index+1))*/
/*               .replace(/__name__/g, index)*/
/*           ;*/
/* */
/*           var $prototype = $(template);*/
/* */
/*           addDeleteLink($prototype);*/
/* */
/*           $container.append($prototype);*/
/* */
/*           index++;*/
/*       }*/
/* */
/*       function addDeleteLink($prototype){*/
/*           var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/*           $prototype.append($deleteLink);*/
/* */
/*           $deleteLink.click(function (e) {*/
/*               $prototype.remove();*/
/* */
/*               e.preventDefault();*/
/* */
/*               return false;*/
/*           });*/
/*       }*/
/*   });*/
/* </script>*/
