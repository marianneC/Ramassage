<?php

/* CCIRamScoBundle:Yasmina/Profile:show_content.html.twig */
class __TwigTemplate_b21d33e32c98439d07ea2fe0e8a67ec0860181c218f70eb03663868ccc6da27f extends Twig_Template
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
        $__internal_facb591540d74a2ba453d2bec7a8a876b88cdfdc1288b033e5f87b5f5f2fcf13 = $this->env->getExtension("native_profiler");
        $__internal_facb591540d74a2ba453d2bec7a8a876b88cdfdc1288b033e5f87b5f5f2fcf13->enter($__internal_facb591540d74a2ba453d2bec7a8a876b88cdfdc1288b033e5f87b5f5f2fcf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_facb591540d74a2ba453d2bec7a8a876b88cdfdc1288b033e5f87b5f5f2fcf13->leave($__internal_facb591540d74a2ba453d2bec7a8a876b88cdfdc1288b033e5f87b5f5f2fcf13_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
