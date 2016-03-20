<?php

/* CCIRamScoBundle:Yasmina:add.html.twig */
class __TwigTemplate_015abfb803a9e85dfa604714e700af58910796e6f8526106680f1520b884f033 extends Twig_Template
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
        // line 1
        echo "

  <h2>Personne</h2>


  <p>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("personne_view", array("id" => $this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\"> Test </a><br />
\tPersonne n°";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "id", array()), "html", null, true);
        echo " :<br />
\t\tNom : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "Nom", array()), "html", null, true);
        echo "<br />
\t\tPrenom : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "Prenom", array()), "html", null, true);
        echo "<br />
\t\tAdresse : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "Adresse", array()), "html", null, true);
        echo "<br />
  </p>


";
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
        return array (  44 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
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
