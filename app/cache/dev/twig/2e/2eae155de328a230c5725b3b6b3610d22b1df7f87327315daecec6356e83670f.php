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
        $__internal_b8ee87b1b3b4bf72487c0b5f3b0444075a290922976cf47b43fdef7efd3ab026 = $this->env->getExtension("native_profiler");
        $__internal_b8ee87b1b3b4bf72487c0b5f3b0444075a290922976cf47b43fdef7efd3ab026->enter($__internal_b8ee87b1b3b4bf72487c0b5f3b0444075a290922976cf47b43fdef7efd3ab026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_b8ee87b1b3b4bf72487c0b5f3b0444075a290922976cf47b43fdef7efd3ab026->leave($__internal_b8ee87b1b3b4bf72487c0b5f3b0444075a290922976cf47b43fdef7efd3ab026_prof);

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
