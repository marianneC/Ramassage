<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f4b2180b16e102633da3202960e00c5d2434306e05068103e76e08b2d65e9182 extends Twig_Template
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
        $__internal_62b08fb8b6a6fe48b1ae73e1849659bd528c1b96b9d9e207fbc43d30d21a1e51 = $this->env->getExtension("native_profiler");
        $__internal_62b08fb8b6a6fe48b1ae73e1849659bd528c1b96b9d9e207fbc43d30d21a1e51->enter($__internal_62b08fb8b6a6fe48b1ae73e1849659bd528c1b96b9d9e207fbc43d30d21a1e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_62b08fb8b6a6fe48b1ae73e1849659bd528c1b96b9d9e207fbc43d30d21a1e51->leave($__internal_62b08fb8b6a6fe48b1ae73e1849659bd528c1b96b9d9e207fbc43d30d21a1e51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
