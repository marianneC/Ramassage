<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_623dc8b4c05607f37955a5aff742252f1fcb7d9a831972211be8e0f13b197e8e extends Twig_Template
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
        $__internal_a36922257ee991987fd00cf1ce46522dffb5423f57192441218a85406bfd599c = $this->env->getExtension("native_profiler");
        $__internal_a36922257ee991987fd00cf1ce46522dffb5423f57192441218a85406bfd599c->enter($__internal_a36922257ee991987fd00cf1ce46522dffb5423f57192441218a85406bfd599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_a36922257ee991987fd00cf1ce46522dffb5423f57192441218a85406bfd599c->leave($__internal_a36922257ee991987fd00cf1ce46522dffb5423f57192441218a85406bfd599c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
