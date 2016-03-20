<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6efc4d143c0d801fe0da54b7cc4ed233c3badeb986682c1a235bd419102d42d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e31e7f12ef0013755b1326b0868324b16788ab8c3c294b401d7244875045cc4c = $this->env->getExtension("native_profiler");
        $__internal_e31e7f12ef0013755b1326b0868324b16788ab8c3c294b401d7244875045cc4c->enter($__internal_e31e7f12ef0013755b1326b0868324b16788ab8c3c294b401d7244875045cc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e31e7f12ef0013755b1326b0868324b16788ab8c3c294b401d7244875045cc4c->leave($__internal_e31e7f12ef0013755b1326b0868324b16788ab8c3c294b401d7244875045cc4c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a0b4e9c3e4d4dcd40cc3eb5c0446117d8285f9d35170c1ed276b540be2f5f392 = $this->env->getExtension("native_profiler");
        $__internal_a0b4e9c3e4d4dcd40cc3eb5c0446117d8285f9d35170c1ed276b540be2f5f392->enter($__internal_a0b4e9c3e4d4dcd40cc3eb5c0446117d8285f9d35170c1ed276b540be2f5f392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a0b4e9c3e4d4dcd40cc3eb5c0446117d8285f9d35170c1ed276b540be2f5f392->leave($__internal_a0b4e9c3e4d4dcd40cc3eb5c0446117d8285f9d35170c1ed276b540be2f5f392_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_157e0813ddcc5de31320d08fc28aa2400a6e7f88ad0e01031f6ba64d82350d6a = $this->env->getExtension("native_profiler");
        $__internal_157e0813ddcc5de31320d08fc28aa2400a6e7f88ad0e01031f6ba64d82350d6a->enter($__internal_157e0813ddcc5de31320d08fc28aa2400a6e7f88ad0e01031f6ba64d82350d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_157e0813ddcc5de31320d08fc28aa2400a6e7f88ad0e01031f6ba64d82350d6a->leave($__internal_157e0813ddcc5de31320d08fc28aa2400a6e7f88ad0e01031f6ba64d82350d6a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_460e1b7b8ff351ec58c6244193038b7a1a1d57c116c29a567a6c79f2dc874c7d = $this->env->getExtension("native_profiler");
        $__internal_460e1b7b8ff351ec58c6244193038b7a1a1d57c116c29a567a6c79f2dc874c7d->enter($__internal_460e1b7b8ff351ec58c6244193038b7a1a1d57c116c29a567a6c79f2dc874c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_460e1b7b8ff351ec58c6244193038b7a1a1d57c116c29a567a6c79f2dc874c7d->leave($__internal_460e1b7b8ff351ec58c6244193038b7a1a1d57c116c29a567a6c79f2dc874c7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
