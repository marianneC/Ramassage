<?php

/* CCIRamScoBundle:Yasmina/Group:show_content.html.twig */
class __TwigTemplate_8ec2a37accc36e7e12c079e82c196da0167bb38b2327007480fd524b8962c57c extends Twig_Template
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
        $__internal_acaaf497635771685f82af443c4b1d5444e40e2a087573681ab453618f17df54 = $this->env->getExtension("native_profiler");
        $__internal_acaaf497635771685f82af443c4b1d5444e40e2a087573681ab453618f17df54->enter($__internal_acaaf497635771685f82af443c4b1d5444e40e2a087573681ab453618f17df54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_acaaf497635771685f82af443c4b1d5444e40e2a087573681ab453618f17df54->leave($__internal_acaaf497635771685f82af443c4b1d5444e40e2a087573681ab453618f17df54_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
