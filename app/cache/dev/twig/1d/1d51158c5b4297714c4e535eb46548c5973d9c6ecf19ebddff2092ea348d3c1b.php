<?php

/* CCIRamScoBundle:Yasmina/Resetting:reset_content.html.twig */
class __TwigTemplate_cb4fe06f9b2d2225401bbd89c8424bb8fb7395369f5f904b431266d4ebbaab92 extends Twig_Template
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
        $__internal_1cf26a66ef59abcd56b257af8cc3cce1f712df0cb42022c4e078a461a5945d1b = $this->env->getExtension("native_profiler");
        $__internal_1cf26a66ef59abcd56b257af8cc3cce1f712df0cb42022c4e078a461a5945d1b->enter($__internal_1cf26a66ef59abcd56b257af8cc3cce1f712df0cb42022c4e078a461a5945d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1cf26a66ef59abcd56b257af8cc3cce1f712df0cb42022c4e078a461a5945d1b->leave($__internal_1cf26a66ef59abcd56b257af8cc3cce1f712df0cb42022c4e078a461a5945d1b_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Resetting:reset_content.html.twig";
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
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
