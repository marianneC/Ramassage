<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_d26d03fcff4e8edcc7b1c755f2fdad3d53c7f35a331fe6b1ad1ecbc283298c79 extends Twig_Template
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
        $__internal_c88c3ddeb4e0d7d0255c56a81a0e13fb977da5fc6c13ed428f150f95bfafe297 = $this->env->getExtension("native_profiler");
        $__internal_c88c3ddeb4e0d7d0255c56a81a0e13fb977da5fc6c13ed428f150f95bfafe297->enter($__internal_c88c3ddeb4e0d7d0255c56a81a0e13fb977da5fc6c13ed428f150f95bfafe297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_c88c3ddeb4e0d7d0255c56a81a0e13fb977da5fc6c13ed428f150f95bfafe297->leave($__internal_c88c3ddeb4e0d7d0255c56a81a0e13fb977da5fc6c13ed428f150f95bfafe297_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="fos_user_group_list">*/
/*     <ul>*/
/*     {% for group in groups %}*/
/*         <li><a href="{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}">{{ group.getName() }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
