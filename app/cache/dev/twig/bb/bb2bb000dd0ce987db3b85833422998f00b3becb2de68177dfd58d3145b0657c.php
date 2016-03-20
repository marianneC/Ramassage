<?php

/* CCIRamScoBundle:Yasmina:add.html.twig */
class __TwigTemplate_4b16e0f2954ca6a07bc2daf8ea57c7cbd7ae0b86d7854e7355168e42f561286e extends Twig_Template
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
        $__internal_571960bac1d9ce435fb7be10060bae0cc8f27d1b784289ea9549f71ca1bc3162 = $this->env->getExtension("native_profiler");
        $__internal_571960bac1d9ce435fb7be10060bae0cc8f27d1b784289ea9549f71ca1bc3162->enter($__internal_571960bac1d9ce435fb7be10060bae0cc8f27d1b784289ea9549f71ca1bc3162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina:add.html.twig"));

        // line 1
        echo "

  <h2>Personne</h2>


  <p>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("personne_view", array("id" => $this->getAttribute((isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\"> Test </a><br />
\tPersonne n°";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "id", array()), "html", null, true);
        echo " :<br />
\t\tNom : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "Nom", array()), "html", null, true);
        echo "<br />
\t\tPrenom : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "Prenom", array()), "html", null, true);
        echo "<br />
\t\tAdresse : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "Adresse", array()), "html", null, true);
        echo "<br />
  </p>


";
        
        $__internal_571960bac1d9ce435fb7be10060bae0cc8f27d1b784289ea9549f71ca1bc3162->leave($__internal_571960bac1d9ce435fb7be10060bae0cc8f27d1b784289ea9549f71ca1bc3162_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* */
/* */
/*   <h2>Personne</h2>*/
/* */
/* */
/*   <p>*/
/* */
/*     <a href="{{ url('personne_view', {'id': personne.id}) }}" class="btn btn-default"> Test </a><br />*/
/* 	Personne n°{{ personne.id }} :<br />*/
/* 		Nom : {{ personne.Nom }}<br />*/
/* 		Prenom : {{ personne.Prenom }}<br />*/
/* 		Adresse : {{ personne.Adresse }}<br />*/
/*   </p>*/
/* */
/* */
/* */
