<?php

/* @CCIRamSco/Yasmina/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_45fbf032c58225552fce5f7346221d32774e05c65a60515b46eda535a9e65fa9 extends Twig_Template
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
        $__internal_cf030c8c4cacd9826ddd3c8f310ccd7cd96fe1d089f2b3a5fcccac3c4fc581a6 = $this->env->getExtension("native_profiler");
        $__internal_cf030c8c4cacd9826ddd3c8f310ccd7cd96fe1d089f2b3a5fcccac3c4fc581a6->enter($__internal_cf030c8c4cacd9826ddd3c8f310ccd7cd96fe1d089f2b3a5fcccac3c4fc581a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/ChangePassword/changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_cf030c8c4cacd9826ddd3c8f310ccd7cd96fe1d089f2b3a5fcccac3c4fc581a6->leave($__internal_cf030c8c4cacd9826ddd3c8f310ccd7cd96fe1d089f2b3a5fcccac3c4fc581a6_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
