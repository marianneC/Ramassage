<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d166a3e5174540d9f0745fe154f4c3fc06b0ab5e95176432b1189f844e09d10c extends Twig_Template
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
        $__internal_5431b9946a0395af5e625f52d2d1b8c4fcf2a52724347527ba923fb5ca1e61c9 = $this->env->getExtension("native_profiler");
        $__internal_5431b9946a0395af5e625f52d2d1b8c4fcf2a52724347527ba923fb5ca1e61c9->enter($__internal_5431b9946a0395af5e625f52d2d1b8c4fcf2a52724347527ba923fb5ca1e61c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5431b9946a0395af5e625f52d2d1b8c4fcf2a52724347527ba923fb5ca1e61c9->leave($__internal_5431b9946a0395af5e625f52d2d1b8c4fcf2a52724347527ba923fb5ca1e61c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */