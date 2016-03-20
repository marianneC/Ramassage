<?php

/* CCIRamScoBundle:Yasmina/Registration:confirmed.html.twig */
class __TwigTemplate_bc8525b8a36398b5e831b52d73a707e0765b02ed65c8686c76c0b76897cd55bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a02b4111fedb91ea62437622325247f9a45260b3f276defd7a43a1e46094f8d = $this->env->getExtension("native_profiler");
        $__internal_0a02b4111fedb91ea62437622325247f9a45260b3f276defd7a43a1e46094f8d->enter($__internal_0a02b4111fedb91ea62437622325247f9a45260b3f276defd7a43a1e46094f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a02b4111fedb91ea62437622325247f9a45260b3f276defd7a43a1e46094f8d->leave($__internal_0a02b4111fedb91ea62437622325247f9a45260b3f276defd7a43a1e46094f8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0b92d8428791aa979ef7ed9cf2414fb59c810c078c2a40a59ad73a7629149d0 = $this->env->getExtension("native_profiler");
        $__internal_a0b92d8428791aa979ef7ed9cf2414fb59c810c078c2a40a59ad73a7629149d0->enter($__internal_a0b92d8428791aa979ef7ed9cf2414fb59c810c078c2a40a59ad73a7629149d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_a0b92d8428791aa979ef7ed9cf2414fb59c810c078c2a40a59ad73a7629149d0->leave($__internal_a0b92d8428791aa979ef7ed9cf2414fb59c810c078c2a40a59ad73a7629149d0_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
