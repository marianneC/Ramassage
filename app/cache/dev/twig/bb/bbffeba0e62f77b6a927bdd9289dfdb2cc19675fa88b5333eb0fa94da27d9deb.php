<?php

/* @CCIRamSco/Yasmina/Group/show_content.html.twig */
class __TwigTemplate_3dc6016b137268da67d13bda54dc7962f31c858722ab614a89b4af14f0a13b17 extends Twig_Template
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
        $__internal_b7060a99460deb548c58557aab9e34fdf408ca6f44dca2cfced37d00d2e9b391 = $this->env->getExtension("native_profiler");
        $__internal_b7060a99460deb548c58557aab9e34fdf408ca6f44dca2cfced37d00d2e9b391->enter($__internal_b7060a99460deb548c58557aab9e34fdf408ca6f44dca2cfced37d00d2e9b391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Group/show_content.html.twig"));

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
        
        $__internal_b7060a99460deb548c58557aab9e34fdf408ca6f44dca2cfced37d00d2e9b391->leave($__internal_b7060a99460deb548c58557aab9e34fdf408ca6f44dca2cfced37d00d2e9b391_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Group/show_content.html.twig";
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
