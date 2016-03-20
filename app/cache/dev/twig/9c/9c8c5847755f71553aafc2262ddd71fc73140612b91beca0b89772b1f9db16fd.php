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
        $__internal_41c8e9bd8cc472d1a246031904f329ebfde05cdbc30364dd8192ae62d9ec2f0b = $this->env->getExtension("native_profiler");
        $__internal_41c8e9bd8cc472d1a246031904f329ebfde05cdbc30364dd8192ae62d9ec2f0b->enter($__internal_41c8e9bd8cc472d1a246031904f329ebfde05cdbc30364dd8192ae62d9ec2f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_41c8e9bd8cc472d1a246031904f329ebfde05cdbc30364dd8192ae62d9ec2f0b->leave($__internal_41c8e9bd8cc472d1a246031904f329ebfde05cdbc30364dd8192ae62d9ec2f0b_prof);

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
