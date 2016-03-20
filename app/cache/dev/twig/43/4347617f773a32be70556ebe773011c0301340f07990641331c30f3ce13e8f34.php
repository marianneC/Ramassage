<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2c138cc4413b4b6b29093b1eb69625ef807345883706b226ff397b0179d6717e extends Twig_Template
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
        $__internal_7ba6ec365fe6cb0f91f1205fedab52073b18c52cd8b2107956df2bea17fc9c85 = $this->env->getExtension("native_profiler");
        $__internal_7ba6ec365fe6cb0f91f1205fedab52073b18c52cd8b2107956df2bea17fc9c85->enter($__internal_7ba6ec365fe6cb0f91f1205fedab52073b18c52cd8b2107956df2bea17fc9c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7ba6ec365fe6cb0f91f1205fedab52073b18c52cd8b2107956df2bea17fc9c85->leave($__internal_7ba6ec365fe6cb0f91f1205fedab52073b18c52cd8b2107956df2bea17fc9c85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
