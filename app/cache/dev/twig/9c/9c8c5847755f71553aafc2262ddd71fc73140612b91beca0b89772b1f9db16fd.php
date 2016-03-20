<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_65158132cae1bb2a9cf3756e166e0e12eec92d0c0e82820dd7d6293dae7336fd extends Twig_Template
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
        $__internal_8a9dc90c426ef022208c05239372601b568f731b4a619fc358c6a0633f2d381d = $this->env->getExtension("native_profiler");
        $__internal_8a9dc90c426ef022208c05239372601b568f731b4a619fc358c6a0633f2d381d->enter($__internal_8a9dc90c426ef022208c05239372601b568f731b4a619fc358c6a0633f2d381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8a9dc90c426ef022208c05239372601b568f731b4a619fc358c6a0633f2d381d->leave($__internal_8a9dc90c426ef022208c05239372601b568f731b4a619fc358c6a0633f2d381d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
