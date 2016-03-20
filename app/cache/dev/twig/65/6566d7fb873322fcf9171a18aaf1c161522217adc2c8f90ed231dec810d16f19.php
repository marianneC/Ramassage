<?php

/* CCIRamScoBundle:Yasmina:index.html.twig */
class __TwigTemplate_97f6aff76c05d74998b40c22213be57d1f297c39e733dd527a1a7ee8c5dc149d extends Twig_Template
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
        $__internal_dc4bcc22753cc31103005f0c35bccabac60a9b725562ea2480fc85c940041c40 = $this->env->getExtension("native_profiler");
        $__internal_dc4bcc22753cc31103005f0c35bccabac60a9b725562ea2480fc85c940041c40->enter($__internal_dc4bcc22753cc31103005f0c35bccabac60a9b725562ea2480fc85c940041c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina:index.html.twig"));

        // line 1
        echo "<html>

    <head>

        <title>Espace Membre !</title>

    </head>

    <body>

        <h1>Hello ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["Nom"]) ? $context["Nom"] : $this->getContext($context, "Nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["Prenom"]) ? $context["Prenom"] : $this->getContext($context, "Prenom")), "html", null, true);
        echo " !</h1>

        

        <p>
\t\tVos informations personnelles :
            Numéro d'adhérent : ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " :<br />
\t\t\tAdresse : ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["Adresse"]) ? $context["Adresse"] : $this->getContext($context, "Adresse")), "html", null, true);
        echo "<br />
\t\t\tCotisation :<br />
\t\t\tEnfants : Oui / Non ? Puis leurs nom ?<br />
\t\t\tMail :<br />
\t\t\tPermis : Oui / Non<br />
\t\t\t<br />
\t\tActivités :\t<br />
\t\t\tNom de l'activité :<br />
\t\t\tLieu :<br />
\t\t\tRôle dans cette activité :<br />
\t\t\t

        </p>

    </body>

</html>
";
        
        $__internal_dc4bcc22753cc31103005f0c35bccabac60a9b725562ea2480fc85c940041c40->leave($__internal_dc4bcc22753cc31103005f0c35bccabac60a9b725562ea2480fc85c940041c40_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  45 => 17,  34 => 11,  22 => 1,);
    }
}
/* <html>*/
/* */
/*     <head>*/
/* */
/*         <title>Espace Membre !</title>*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <h1>Hello {{ Nom }} {{ Prenom }} !</h1>*/
/* */
/*         */
/* */
/*         <p>*/
/* 		Vos informations personnelles :*/
/*             Numéro d'adhérent : {{ id }} :<br />*/
/* 			Adresse : {{ Adresse }}<br />*/
/* 			Cotisation :<br />*/
/* 			Enfants : Oui / Non ? Puis leurs nom ?<br />*/
/* 			Mail :<br />*/
/* 			Permis : Oui / Non<br />*/
/* 			<br />*/
/* 		Activités :	<br />*/
/* 			Nom de l'activité :<br />*/
/* 			Lieu :<br />*/
/* 			Rôle dans cette activité :<br />*/
/* 			*/
/* */
/*         </p>*/
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
