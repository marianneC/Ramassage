<?php

/* @CCIRamSco/Yasmina/Resetting/request_content.html.twig */
class __TwigTemplate_c2c5f364ffd9e904dedfc899cd66a13b82970885b2633755bd460e714828b173 extends Twig_Template
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
        $__internal_100ba043762920db43b8181faa08afc5d95761e925e485a668a1874f2244b042 = $this->env->getExtension("native_profiler");
        $__internal_100ba043762920db43b8181faa08afc5d95761e925e485a668a1874f2244b042->enter($__internal_100ba043762920db43b8181faa08afc5d95761e925e485a668a1874f2244b042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_100ba043762920db43b8181faa08afc5d95761e925e485a668a1874f2244b042->leave($__internal_100ba043762920db43b8181faa08afc5d95761e925e485a668a1874f2244b042_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  38 => 8,  32 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*         {% endif %}*/
/*         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*         <input type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
