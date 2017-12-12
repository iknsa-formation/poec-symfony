<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f9da740237e9e2146425b22768dd537ac8b9b99a0e84e6d4882bcecddb54b22e extends Twig_Template
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
        $__internal_eee733013f5d582549bb14808b826fd76355967b6f8397dbd61dc81316e285ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee733013f5d582549bb14808b826fd76355967b6f8397dbd61dc81316e285ff->enter($__internal_eee733013f5d582549bb14808b826fd76355967b6f8397dbd61dc81316e285ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_eee733013f5d582549bb14808b826fd76355967b6f8397dbd61dc81316e285ff->leave($__internal_eee733013f5d582549bb14808b826fd76355967b6f8397dbd61dc81316e285ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
