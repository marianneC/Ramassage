<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_b3d86e2509251669122d693e8c149081cb7df09f5aa802f8706b345f5eeaf704 extends Twig_Template
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
        $__internal_1479d5af1857dc40873e4c08a3d2ccf2b8cf489a6df306b0d1fe36017d53919b = $this->env->getExtension("native_profiler");
        $__internal_1479d5af1857dc40873e4c08a3d2ccf2b8cf489a6df306b0d1fe36017d53919b->enter($__internal_1479d5af1857dc40873e4c08a3d2ccf2b8cf489a6df306b0d1fe36017d53919b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_1479d5af1857dc40873e4c08a3d2ccf2b8cf489a6df306b0d1fe36017d53919b->leave($__internal_1479d5af1857dc40873e4c08a3d2ccf2b8cf489a6df306b0d1fe36017d53919b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
