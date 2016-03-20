<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_8f479571cc286834a68f6b924ec4b5da6c340e82cc9865e88010f9cbd8eea094 extends Twig_Template
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
        $__internal_778eeedd5c71750f36ebe18aa1d8614cda89ac2177a057a7c5e90a31aee7c39b = $this->env->getExtension("native_profiler");
        $__internal_778eeedd5c71750f36ebe18aa1d8614cda89ac2177a057a7c5e90a31aee7c39b->enter($__internal_778eeedd5c71750f36ebe18aa1d8614cda89ac2177a057a7c5e90a31aee7c39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_778eeedd5c71750f36ebe18aa1d8614cda89ac2177a057a7c5e90a31aee7c39b->leave($__internal_778eeedd5c71750f36ebe18aa1d8614cda89ac2177a057a7c5e90a31aee7c39b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_73b3e70c5b2bc42ed2bbb29cfd6e7e7e7fc6cda27a622d47651cda73335634da = $this->env->getExtension("native_profiler");
        $__internal_73b3e70c5b2bc42ed2bbb29cfd6e7e7e7fc6cda27a622d47651cda73335634da->enter($__internal_73b3e70c5b2bc42ed2bbb29cfd6e7e7e7fc6cda27a622d47651cda73335634da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_73b3e70c5b2bc42ed2bbb29cfd6e7e7e7fc6cda27a622d47651cda73335634da->leave($__internal_73b3e70c5b2bc42ed2bbb29cfd6e7e7e7fc6cda27a622d47651cda73335634da_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_75f6d5c8926b83c4cc68916293b2952df116f5ab4281b8bdfafb1ae31a6c3e08 = $this->env->getExtension("native_profiler");
        $__internal_75f6d5c8926b83c4cc68916293b2952df116f5ab4281b8bdfafb1ae31a6c3e08->enter($__internal_75f6d5c8926b83c4cc68916293b2952df116f5ab4281b8bdfafb1ae31a6c3e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_75f6d5c8926b83c4cc68916293b2952df116f5ab4281b8bdfafb1ae31a6c3e08->leave($__internal_75f6d5c8926b83c4cc68916293b2952df116f5ab4281b8bdfafb1ae31a6c3e08_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2f5a58b4426802d1ac0f92324f3255145a3b4a8d222973ce6ad765309f1f08c6 = $this->env->getExtension("native_profiler");
        $__internal_2f5a58b4426802d1ac0f92324f3255145a3b4a8d222973ce6ad765309f1f08c6->enter($__internal_2f5a58b4426802d1ac0f92324f3255145a3b4a8d222973ce6ad765309f1f08c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2f5a58b4426802d1ac0f92324f3255145a3b4a8d222973ce6ad765309f1f08c6->leave($__internal_2f5a58b4426802d1ac0f92324f3255145a3b4a8d222973ce6ad765309f1f08c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
